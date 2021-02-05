var offset = 0;
var total = 0;
var id;


$('.btn-proximo').click(function(){getNfePendencias(undefined, 'proximo')});
$('.btn-anterior').click(function(){getNfePendencias(undefined, 'anterior')});


function getNfePendencias(idEmpresa, botao) {
    var totalOffset = 10;
    if(idEmpresa != undefined){
        id = parseFloat(idEmpresa);
    }

    if(botao == 'anterior') {
        if((offset - totalOffset) >= 0){
            offset -= totalOffset;
        }
    } else if (botao == 'proximo') {
        offset += totalOffset;
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: "/detalhamento",
        type: "post",
        data: {id: id, offset: offset},
        dataType: 'json',
        success: function (data) {

            $('.data').html("");
            total = data['total'];

            for(var k in data){
                if(data[k]['id'] != undefined){

                $('.data').append(function () {
                    console.log(data[k]);
                    var emitente = "<td>"+data[k]['cnpj_emit']+"</td>";
                    var razao_social = "<td>"+data[k]['razao_social_emit']+"</td>";
                    var chave_acesso = "<td>"+data[k]['chave_nota']+"</td>";
                    var uf = "<td>"+data[k]['uf']+"</td>";
                    var data_emissao = "<td>"+data[k]['date_emissao']+"</td>";
                    var nfe = "<td>"+data[k]['num_nfe']+"</td>";
                    var valor_nfe = "<td>"+data[k]['valor_nfe']+"</td>";

                    return "<tr>"+ emitente + razao_social + chave_acesso + uf + data_emissao + nfe + valor_nfe + "</tr>";
                });
                }

            }
            $('#modal').modal('show');
            $('#content').mCustomScrollbar('destroy');
        }
    });
};

function getResumoPendencias () {
    var ano = $('#ano').val();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: "/lista-pendencias",
        type: 'post',
        data: {ano: ano},
        dataType: 'json',
        success: function(data) {
            console.log(data);
            $('.row-content').html("");

            for(var k in data){
                $('.row-content').append(function(){
                    var descricao = data[k]['descricao'];
                    var date = data[k]['att_date'];
                    var botao = "<button type='button' class='btn btn-sm btn-modal' onclick='getNfePendencias(id)'>Detalhamento</button>";
                    return "<div class='col-6'><div class='card'><b>NF-e Recebidas</b>"+ "<span>" + descricao + "</span>" +"<span class='date'>"+ date +"</span>"+ botao +"</div></div>"

                });
            }
        }
    });
}


if( $(window).width() < 840){
    $('.coluna').addClass('col-12');
}

document.body.onresize = function() {
    if (document.body.clientWidth < 840) {
        // $('#coluna').removeClass('col-6');
        $('.coluna').addClass('col-12');

    }else{
        $('.coluna').removeClass('col-12');
    }
};

$('#modal').on('hidden.bs.modal', function (e) {
    $("#content").mCustomScrollbar();
})


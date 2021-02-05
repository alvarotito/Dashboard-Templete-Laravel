setTimeout(function (){
    $('#btn1').addClass('active');
},180);

$('.abas .btn').click(function(){
    $('.abas .btn').removeClass('active');
});

$('#btn1').click(function(){
    $('#btn1').addClass('active');

    $('.middle').html(function () {
        var tb = '<table class="table table-bordered border-light">';

        tb += '<thead>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" rowspan="2" class="th">Mês</th>';
        tb += '<th scope="col" colspan="2" class="th">CFe Autorizados</th>';
        tb += '<th scope="col" colspan="2" class="th">NFCe Autorizados</th>';
        tb += '<th scope="col" colspan="1" class="th">Divergência de Valores na EFD *</th>';
        tb += '</tr>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" class="th">Quantidade</th>';
        tb += '<th scope="col" class="th">Valor</th>';
        tb += '<th scope="col" class="th">Quantidade</th>';
        tb += '<th scope="col" class="th">Valor</th>';
        tb += '<th scope="col" class="th">Valor</th>';
        tb += '</tr>';
        tb += '</thead>';
        tb += '<tbody class="tbody">';
        tb += '</tbody>';
        tb += '</table>';

        return tb;
    });
});

$('#btn2').click(function(){
    $('#btn2').addClass('active');

    $('.middle').html(function() {
        var tb = '<div class="row">';
        tb += '<div class="input-group mb-3 group">';
        tb += '<label class="input-group-text" for="inputGroupFile01">Data Inicial:</label>';
        tb += '<input type="date" class="form-control" id="inputGroupFile01">';
        tb += '<label class="input-group-text" for="inputGroupFile02">Data Final:</label>';
        tb += '<input type="date" class="form-control" id="inputGroupFile02">';
        tb += '<button type="button" class="btn btn-primary btn-sm btn-search" onclick="searchNfeGeral()"><i class="fas fa-search"></i></button>';
        tb += '</div>';
        tb += '</div>';
        tb += '<table class="table table-bordered border-light">';
        tb += '<thead>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" class="th">Chave de Acesso</th>';
        tb += '<th scope="col" class="th">Tipo de Documento Fiscal</th>';
        tb += '<th scope="col" class="th">Número do Documento Fiscal</th>';
        tb += '<th scope="col" class="th">Data da Emissão</th>';
        tb += '<th scope="col" class="th">CPF do Destinatário</th>';
        tb += '<th scope="col" class="th">Nome do Destinatário</th>';
        tb += '<th scope="col" class="th">Valor Total</th>';
        tb += '<th scope="col" class="th">Base de Cálculo do ICMS</th>';
        tb += '<th scope="col" class="th">ICMS Destacado</th>';
        tb += '<th scope="col" class="th">Situação do Documento</th>';
        tb += '</tr>';
        tb += '</thead>';
        tb += '<tbody class="tbody">';
        tb += '</tbody>';
        tb += '</table>';
        return tb;
    });
});

$('#btn3').click(function(){
    $('#btn3').addClass('active');

    $('.middle').html(function() {
        var tb = '<table class="table table-bordered border-light">';
        tb += '<thead>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" class="th">Numero de Série</th>';
        tb += '<th scope="col" class="th">Fabricante</th>';
        tb += '<th scope="col" class="th">Modelo</th>';
        tb += '<th scope="col" class="th">Situação do Equipamento</th>';
        tb += '</tr>';
        tb += '</thead>';
        tb += '<tbody class="tbody">';
        tb += '</tbody>';
        tb += '</table>';
        return tb;
    });
});

$('#radio1').click(function(){
    $('#toggle').html(function() {
        var tb = '<td>';
        tb += '<div class="row">';
        tb += '<div class="input-group mb-3 group">';
        tb +=  '<label class="input-group-text" for="inputGroupFile01">Protocolo</label>';
        tb += '<input type="text" class="form-control" id="inputGroupFile01">';
        tb +=  '<button type="button" class="btn btn-primary btn-sm btn-search"><i class="fas fa-search"></i></button>';
        tb += '</div>';
        tb += '</div>';
        tb += '</td>';

        return tb;
    });
});

$('#radio2').click(function(){
    $('#toggle').html(function() {
        var tb = '<td>';
        tb += '<div class="row">';
        tb += '<div class="input-group mb-3 group">';
        tb +=  '<label class="input-group-text" for="inputGroupFile01">Data Inicial</label>';
        tb += '<input type="date" class="form-control" id="inputGroupFile01">';
        tb +=  '<label class="input-group-text" for="inputGroupFile01">Data Final</label>';
        tb += '<input type="date" class="form-control" id="inputGroupFile01">';
        tb +=  '<button type="button" class="btn btn-primary btn-sm btn-search"><i class="fas fa-search"></i></button>';
        tb += '</div>';
        tb += '</div>';
        tb += '</td>';

        return tb;
    });
});

$('#radio3').click(function(){
    $('#toggle').html(function() {
        var tb = '<td>';
        tb += '<div class="row">';
        tb += '<div class="input-group mb-3 group">';
        tb +=  '<label class="input-group-text" for="inputGroupFile01">Assunto</label>';
        tb += '<input type="text" class="form-control" id="inputGroupFile01">';
        tb +=  '<button type="button" class="btn btn-primary btn-sm btn-search"><i class="fas fa-search"></i></button>';
        tb += '</div>';
        tb += '</div>';
        tb += '</td>';

        return tb;
    });
});

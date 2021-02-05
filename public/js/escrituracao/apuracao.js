setTimeout(function(){
    $('#btn1').addClass('active');
},200);

$('.abas .btn').click(function() {
    $('.abas .btn').removeClass('active');
});

$('#btn1').click(function() {
    $('#btn1').addClass('active');

    $('.middle').html(function() {
        var tb = '<div class="row">';
        tb += '<div class="input-group mb-3 group">';
        tb += '<label class="input-group-text" for="inputGroupFile01">Período por Competência:</label>';
        tb += '<input type="text" class="form-control" id="inputGroupFile01" placeholder="mm/aaaa">';
        tb += '<button type="button" class="btn btn-primary btn-sm btn-search" onclick="searchNfeGeral()"><i class="fas fa-search"></i></button>';
        tb += '</div>';
        tb += '</div>';
        tb += '<span>Entradas</span>';
        tb += '<table class="table table-bordered border-light">';
        tb += '<thead>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" rowspan="1" class="th">Operação</th>';
        tb += '<th scope="col" colspan="1" class="th">Valor Contábil</th>';
        tb += '<th scope="col" colspan="1" class="th">BC. do ICMS</th>';
        tb += '<th scope="col" colspan="1" class="th">ICMS Crédito</th>'
        tb += '<th scope="col" colspan="1" class="th">Isentas</th>';
        tb += '<th scope="col" colspan="1" class="th">Subst. Tribut.</th>';
        tb += '<th scope="col" colspan="1" class="th">Não Tribut.</th>';
        tb += '<th scope="col" colspan="1" class="th">Outros</th>';
        tb += '</tr>';
        tb += '</thead>';
        tb += '<tbody class="tbody">';
        tb += '</tbody>';
        tb += '</table>';
        tb += '<span>Saídas</span>';
        tb += '<table class="table table-bordered border-light">';
        tb += '<thead>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" rowspan="1" class="th">Operação</th>';
        tb += '<th scope="col" colspan="1" class="th">Valor Contábil</th>';
        tb += '<th scope="col" colspan="1" class="th">BC. do ICMS</th>';
        tb += '<th scope="col" colspan="1" class="th">ICMS Crédito</th>';
        tb += '<th scope="col" colspan="1" class="th">Isentas</th>';
        tb += '<th scope="col" colspan="1" class="th">Subst. Tribut.</th>';
        tb += '<th scope="col" colspan="1" class="th">Não Tribut.</th>';
        tb += '<th scope="col" colspan="1" class="th">Outros</th>';
        tb += '</tr>';
        tb += '</thead>';
        tb += '<tbody class="tbody">';
        tb += '</tbody>';
        tb += '</table>';

        return tb;
    });
});

$('#btn2').click(function() {
    $('#btn2').addClass('active');

    $('.middle').html(function() {
        var tb = '<div class="row">';
        tb += '<div class="input-group mb-3 group">';
        tb += '<label class="input-group-text" for="inputGroupFile01">Período:</label>';
        tb += '<input type="text" class="form-control" id="inputGroupFile01" placeholder="mm/aaaa">';
        tb += '<button type="button" class="btn btn-primary btn-sm btn-search" onclick="searchNfeGeral()"><i class="fas fa-search"></i></button>';
        tb += '</div>';
        tb += '</div>';
        tb += '<table class="table table-bordered border-light">';
        tb += '<thead>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" rowspan="1" class="th" width="50%">Débitos</th>';
        tb += '<th scope="col" colspan="1" class="th">Valores</th>';
        tb += '</tr>';
        tb += '</thead>';
        tb += '<tbody class="tbody">';
        tb += '</tbody>';
        tb += '</table>';
        tb += '<table class="table table-bordered border-light">';
        tb += '<thead>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" rowspan="1" class="th" width="50%">Créditos</th>';
        tb += '<th scope="col" colspan="1" class="th">Valores</th>';
        tb += '</tr>';
        tb += '</thead>';
        tb += '<tbody class="tbody">';
        tb += '</tbody>';
        tb += '</table>';
        tb += '<table class="table table-bordered border-light">';
        tb += '<thead>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" rowspan="1" class="th" width="50%">Saldos</th>';
        tb += '<th scope="col" colspan="1" class="th">Valores</th>';
        tb += '</tr>';
        tb += '</thead>';
        tb += '<tbody class="tbody">';
        tb += '</tbody>';
        tb += '</table>';

        return tb;
    });
});

$('#btn3').click(function() {
    $('#btn3').addClass('active');

    $('.middle').html(function() {
        var tb = '<div class="row">';
        tb += '<div class="input-group mb-3 group">';
        tb += '<label class="input-group-text" for="inputGroupFile01">Período:</label>';
        tb += '<input type="text" class="form-control" id="inputGroupFile01" placeholder="mm/aaaa">';
        tb += '<button type="button" class="btn btn-primary btn-sm btn-search" onclick="searchNfeGeral()"><i class="fas fa-search"></i></button>';
        tb += '</div>';
        tb += '</div>';
        tb += '<table class="table table-bordered border-light">';
        tb += '<thead>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" rowspan="1" class="th">CST</th>';
        tb += '<th scope="col" colspan="1" class="th">Descrição</th>';
        tb += '<th scope="col" colspan="1" class="th">Entradas(Valor Contábil)</th>';
        tb += '<th scope="col" colspan="1" class="th">Saídas(Valor Contábil)</th>';
        tb += '</tr>';
        tb += '</thead>';
        tb += '<tbody class="tbody">';
        tb += '</tbody>';
        tb += '</table>';

        return tb;
    });
});

$('#btn4').click(function() {
    $('#btn4').addClass('active');

    $('.middle').html(function() {
        var tb = '<div class="row">';
        tb += '<div class="input-group mb-3 group">';
        tb += '<label class="input-group-text" for="inputGroupFile01">Período:</label>';
        tb += '<input type="text" class="form-control" id="inputGroupFile01" placeholder="mm/aaaa">';
        tb += '<button type="button" class="btn btn-primary btn-sm btn-search" onclick="searchNfeGeral()"><i class="fas fa-search"></i></button>';
        tb += '</div>';
        tb += '</div>';
        tb += '<span>Entradas</span>';
        tb += '<table class="table table-bordered border-light">';
        tb += '<thead>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" rowspan="1" class="th">CFOP</th>';
        tb += '<th scope="col" rowspan="1" class="th">Operação</th>';
        tb += '<th scope="col" colspan="1" class="th">BC. do ICMS</th>';
        tb += '<th scope="col" colspan="1" class="th">ICMS</th>'
        tb += '<th scope="col" colspan="1" class="th">BC. do ICMS ST</th>';
        tb += '<th scope="col" colspan="1" class="th">ICMS ST</th>';
        tb += '<th scope="col" colspan="1" class="th">Red. BC.</th>';
        tb += '<th scope="col" colspan="1" class="th">IPI</th>';
        tb += '</tr>';
        tb += '</thead>';
        tb += '<tbody class="tbody">';
        tb += '</tbody>';
        tb += '</table>';
        tb += '<span>Saídas</span>';
        tb += '<table class="table table-bordered border-light">';
        tb += '<thead>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" rowspan="1" class="th">CFOP</th>';
        tb += '<th scope="col" rowspan="1" class="th">Operação</th>';
        tb += '<th scope="col" colspan="1" class="th">BC. do ICMS</th>';
        tb += '<th scope="col" colspan="1" class="th">ICMS</th>'
        tb += '<th scope="col" colspan="1" class="th">BC. do ICMS ST</th>';
        tb += '<th scope="col" colspan="1" class="th">ICMS ST</th>';
        tb += '<th scope="col" colspan="1" class="th">Red. BC.</th>';
        tb += '<th scope="col" colspan="1" class="th">IPI</th>';
        tb += '</tr>';
        tb += '</thead>';
        tb += '<tbody class="tbody">';
        tb += '</tbody>';
        tb += '</table>';

        return tb;
    });
});

$('#btn5').click(function() {
    $('#btn5').addClass('active');

    $('.middle').html(function() {
        var tb = '<div class="row">';
        tb += '<div class="input-group mb-3 group">';
        tb += '<label class="input-group-text" for="inputGroupFile01">Período:</label>';
        tb += '<input type="text" class="form-control" id="inputGroupFile01" placeholder="mm/aaaa">';
        tb += '<button type="button" class="btn btn-primary btn-sm btn-search" onclick="searchNfeGeral()"><i class="fas fa-search"></i></button>';
        tb += '</div>';
        tb += '</div>';
        tb += '<table class="table table-bordered border-light">';
        tb += '<thead>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" rowspan="1" class="th">Descrição</th>';
        tb += '<th scope="col" colspan="1" class="th">ICMS a Recolher</th>';
        tb += '<th scope="col" colspan="1" class="th">ICMS Recolhido</th>';
        tb += '<th scope="col" colspan="1" class="th">Diferença</th>';
        tb += '<th scope="col" colspan="1" class="th">Situação do Débito</th>';
        tb += '</tr>';
        tb += '</thead>';
        tb += '<tbody class="tbody">';
        tb += '</tbody>';
        tb += '</table>';

        return tb;
    });
});

$('#btn6').click(function() {
    $('#btn6').addClass('active');

    $('.middle').html(function() {
        var tb = '<div class="row">';
        tb += '<div class="input-group mb-3 group">';
        tb += '<label class="input-group-text" for="inputGroupFile01">Período:</label>';
        tb += '<input type="text" class="form-control" id="inputGroupFile01" placeholder="mm/aaaa">';
        tb += '<button type="button" class="btn btn-primary btn-sm btn-search" onclick="searchNfeGeral()"><i class="fas fa-search"></i></button>';
        tb += '</div>';
        tb += '</div>';
        tb += '<table class="table table-bordered border-light">';
        tb += '<thead>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" rowspan="1" class="th">Outros Créditos</th>';
        tb += '<th scope="col" colspan="1" class="th">Valores</th>';
        tb += '<th scope="col" colspan="1" class="th">Outros Débitos</th>';
        tb += '<th scope="col" colspan="1" class="th">Valores</th>';
        tb += '</tr>';
        tb += '</thead>';
        tb += '<tbody class="tbody">';
        tb += '</tbody>';
        tb += '</table>';

        return tb;
    });
});

$('.abas1-1').hide();

setTimeout(function(){
    $('#btn1').addClass('active');
    $('#btn3-1').addClass('active');
},200);

$('.abas .btn').click(function() {
    $('.abas .btn').removeClass('active');
    $('.abas1-1').hide();
});

$('#btn1').click(function() {
    $('#btn1').addClass('active');

    $('.middle').html(function() {
        var td = '<table class="table table-bordered border-light">';
        td += '<thead>';
        td += '<tr class="table-header">';
        td += '<th scope="col" rowspan="1" class="th">Mês</th>'
        td += '<th scope="col" colspan="1" class="th">Entradas</th>';
        td += '<th scope="col" colspan="1" class="th">Saídas</th>';
        td += '<th scope="col" colspan="1" class="th">Créditos</th>';
        td += '<th scope="col" colspan="1" class="th">Débitos</th>';
        td += '<th scope="col" colspan="1" class="th">Saldo</th>';
        td += '<th scope="col" colspan="1" class="th">Valor Recolhido</th>';
        td += '<th scope="col" colspan="1" class="th">Situação</th>';
        td += '</tr>';
        td += '</thead>';
        td += '<tbody class="tbody">';
        td += '</tbody>';
        td += '</table>';
        td += '<table class="table table-bordered border-light">';
        td += '<thead>';
        td += '<tr class="table-header">';
        td += '<th scope="col" rowspan="1" class="th">Indicadores Anuais(*)</th>';
        td += '<th scope="col" colspan="1" class="th">Formula</th>';
        td += '<th scope="col" colspan="1" class="th">Valor R$(%)</th>';
        td += '</tr>';
        td += '</thead>';
        td += '<tbody class="tbody">';
        td += '<tr>';
        td += '<td>Taxa de Adicionamento</td>';
        td += '<td>TA = (Total Saídas/Total Entradas) - 1 x 100</td>';
        td += '<td>0,00</td>';
        td += '</tr>';
        td += '<tr>';
        td += '<td>Índice de Saídas</td>';
        td += '<td>IS = (ICMS a Recolher/Total Saídas) x 100</td>';
        td += '<td>0,00</td>';
        td += '</tr>';
        td += '<tr>';
        td += '<td>Taxa de Débitos</td>';
        td += '<td>TD = (Débito ICMS/Total de Saídas) x 100</td>';
        td += '<td>0,00</td>';
        td += '</tr>';
        td += '<tr>';
        td += '<td>Taxa de Crédito</td>';
        td += '<td>Tc = (Crédito ICMS/Total de Entradas) x 100</td>';
        td += '<td>0,00</td>';
        td += '</tr>';
        td += '</tbody>';
        td += '</table>';

        return td;
    });
});

$('#btn2').click(function() {
    $('#btn2').addClass('active');

    $('.middle').html(function() {
        var td = '<table class="table table-bordered border-light">';
        td += '<thead>';
        td += '<tr class="table-header">';
        td += '<th scope="col" rowspan="1" class="th">Mês</th>'
        td += '<th scope="col" colspan="1" class="th">Valor Declarado</th>';
        td += '<th scope="col" colspan="1" class="th">Valor Recolhido</th>';
        td += '<th scope="col" colspan="1" class="th">Situação</th>';
        td += '</tr>';
        td += '</thead>';
        td += '<tbody class="tbody">';
        td += '</tbody>';
        td += '</table>';

        return td;
    });
});

$('#btn3').click(function() {
    $('#btn3').addClass('active');
    $('.abas1-1').show();

    getIcmsEntradas();
});

$('#btn3-1').click(function() {
    $('#btn3-1').addClass('active');
    $('#btn3-2').removeClass('active');

    getIcmsEntradas();
});

$('#btn3-2').click(function() {
    $('#btn3-2').addClass('active');
    $('#btn3-1').removeClass('active');

    getIcmsEntradas();
});

function getIcmsEntradas() {
    $('.middle').html(function() {
        var td = '<table class="table table-bordered border-light">';
        td += '<thead>';
        td += '<tr class="table-header">';
        td += '<th scope="col" rowspan="1" class="th">Mês</th>'
        td += '<th scope="col" colspan="1" class="th">Débito</th>';
        td += '<th scope="col" colspan="1" class="th">Valor Declarado</th>';
        td += '<th scope="col" colspan="1" class="th">Valor Recolhido</th>';
        td += '<th scope="col" colspan="1" class="th">Situação</th>';
        td += '</tr>';
        td += '</thead>';
        td += '<tbody class="tbody">';
        td += '</tbody>';
        td += '</table>';

        return td;
    });
}

$('.abas1-2').hide();
$('.abas1-3').hide();

setTimeout(function(){
    $('#btn1').addClass('active');
    $('#btn2-1').addClass('active');
    $('#btn4-1').addClass('active');
},200);

$('.abas .btn').click(function() {
    $('.abas .btn').removeClass('active');
    $('.abas1-2').hide();
    $('.abas1-3').hide();
});

$('.abas1-2 .btn').click(function(){
    $('.abas1-2 .btn').removeClass('active');
});
$('.abas1-3 .btn').click(function(){
    $('.abas1-3 .btn').removeClass('active');
});

$('#btn1').click(function() {
    $('#btn1').addClass('active');

    $('.middle').html(function() {
        var tb = '<table class="table table-bordered border-light">';
        tb += '<thead>';
        tb +=  '<tr class="table-header">';
        tb += '<th scope="col" rowspan="2" class="th">Mês de Referência</th>';
        tb += '<th scope="col" colspan="3" class="th">Faturamento (A)</th>';
        tb += '<th scope="col" rowspan="2" class="th">TEF (B)</th>';
        tb += '<th scope="col" rowspan="2" class="th">Diferença (A-B)</th>';
        tb += '</tr>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" colspan="1" class="th">Valor Declarado</th>';
        tb += '<th scope="col" colspan="1" class="th">Origem</th>';
        tb += '<th scope="col" colspan="1" class="th">Devoluções*</th>';
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
    $('.abas1-2').show();
});

$('#btn2-1').click(function(){
    $('#btn2-1').addClass('active');

    $('.middle').html(function() {
        var tb = '<table class="table table-bordered border-light">';
        tb += '<thead>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" rowspan="2" class="th">Administradoras de Cartão</th>';
        tb += '<th scope="col" colspan="2" class="th">Jan</th>';
        tb += '<th scope="col" colspan="2" class="th">Fev</th>';
        tb += '<th scope="col" colspan="1" class="th">Mar</th>';
        tb += '<th scope="col" colspan="1" class="th">Abr</th>';
        tb += '<th scope="col" colspan="1" class="th">Maio</th>';
        tb += '<th scope="col" colspan="1" class="th">Jun</th>';
        tb += '<th scope="col" colspan="1" class="th">Jul</th>';
        tb += '<th scope="col" colspan="1" class="th">Ago</th>';
        tb += '<th scope="col" colspan="1" class="th">Set</th>';
        tb += '<th scope="col" colspan="1" class="th">Out</th>';
        tb += '<th scope="col" colspan="1" class="th">Nov</th>';
        tb += '<th scope="col" colspan="1" class="th">Dez</th>';
        tb += '<th scope="col" colspan="1" class="th">Total</th>';
        tb += '</tr>';
        tb += '</thead>';
        tb += '<tbody class="tbody">';
        tb += '</tbody>';
        tb += '</table>';

        return tb;
    });
});
$('#btn2-2').click(function(){
    $('#btn2-2').addClass('active');

    $('.middle').html(function() {
        var tb = '<table class="table table-bordered border-light">';
        tb += '<thead>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" rowspan="2" class="th">Administradoras de Cartão</th>';
        tb += '<th scope="col" colspan="2" class="th">Jan</th>';
        tb += '<th scope="col" colspan="2" class="th">Fev</th>';
        tb += '<th scope="col" colspan="1" class="th">Mar</th>';
        tb += '<th scope="col" colspan="1" class="th">Abr</th>';
        tb += '<th scope="col" colspan="1" class="th">Maio</th>';
        tb += '<th scope="col" colspan="1" class="th">Jun</th>';
        tb += '<th scope="col" colspan="1" class="th">Jul</th>';
        tb += '<th scope="col" colspan="1" class="th">Ago</th>';
        tb += '<th scope="col" colspan="1" class="th">Set</th>';
        tb += '<th scope="col" colspan="1" class="th">Out</th>';
        tb += '<th scope="col" colspan="1" class="th">Nov</th>';
        tb += '<th scope="col" colspan="1" class="th">Dez</th>';
        tb += '<th scope="col" colspan="1" class="th">Total</th>';
        tb += '</tr>';
        tb += '</thead>';
        tb += '<tbody class="tbody">';
        tb += '</tbody>';
        tb += '</table>';

        return tb;
    });
});
$('#btn2-3').click(function(){
    $('#btn2-3').addClass('active');

    $('.middle').html(function() {
        var tb = '<table class="table table-bordered border-light">';
        tb += '<thead>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" rowspan="2" class="th">Administradoras de Cartão</th>';
        tb += '<th scope="col" colspan="2" class="th">Jan</th>';
        tb += '<th scope="col" colspan="2" class="th">Fev</th>';
        tb += '<th scope="col" colspan="1" class="th">Mar</th>';
        tb += '<th scope="col" colspan="1" class="th">Abr</th>';
        tb += '<th scope="col" colspan="1" class="th">Maio</th>';
        tb += '<th scope="col" colspan="1" class="th">Jun</th>';
        tb += '<th scope="col" colspan="1" class="th">Jul</th>';
        tb += '<th scope="col" colspan="1" class="th">Ago</th>';
        tb += '<th scope="col" colspan="1" class="th">Set</th>';
        tb += '<th scope="col" colspan="1" class="th">Out</th>';
        tb += '<th scope="col" colspan="1" class="th">Nov</th>';
        tb += '<th scope="col" colspan="1" class="th">Dez</th>';
        tb += '<th scope="col" colspan="1" class="th">Total</th>';
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
        var tb = '<table class="table table-bordered border-light">';
        tb += '<thead>';
        tb +=  '<tr class="table-header">';
        tb += '<th scope="col" rowspan="2" class="th">Mês de Referência</th>';
        tb += '<th scope="col" colspan="3" class="th">Faturamento</th>';
        tb += '<th scope="col" rowspan="2" class="th">TEF (B)</th>';
        tb += '<th scope="col" rowspan="2" class="th">Diferença (A-B)</th>';
        tb += '</tr>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" colspan="1" class="th">Valor Declarado</th>';
        tb += '<th scope="col" colspan="1" class="th">Origem</th>';
        tb += '<th scope="col" colspan="1" class="th">Devoluções*</th>';
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
    $('.abas1-3').show();
});

$('#btn4-1').click(function(){
    $('#btn4-1').addClass('active');
});
$('#btn4-2').click(function(){
    $('#btn4-2').addClass('active');
});
$('#btn4-3').click(function(){
    $('#btn4-3').addClass('active');
});

setTimeout(function() {
    $('#btn1').addClass('active');
},200);

$('.abas .btn').click(function() {
    $('.abas .btn').removeClass('active');
});

$('#btn1').click(function (){
    $('#btn1').addClass('active');

    $('.middle').html(function() {
        var tb = '<table class="table table-bordered border-light">';
        tb += '<thead>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" rowspan="1" class="th">Mês</th>';
        tb += '<th scope="col" colspan="1" class="th">Valor Contábil</th>';
        tb += '<th scope="col" colspan="1" class="th">BC. do ICMS</th>';
        tb += '<th scope="col" colspan="1" class="th">ICMS Crédito</th>';
        tb += '<th scope="col" colspan="1" class="th">Isentas</th>';
        tb += '<th scope="col" colspan="1" class="th">BC. do ICMS ST</th>';
        tb += '<th scope="col" colspan="1" class="th">ICMS ST</th>';
        tb += '<th scope="col" colspan="1" class="th">Outros</th>';
        tb += '</tr>';
        tb += '</thead>';
        tb += '<tbody class="tbody">';
        tb += '</tbody>';
        tb += '</table>';

        return tb;
    });
});

$('#btn2').click(function (){
    $('#btn2').addClass('active');

    $('.middle').html(function() {
        var tb = '<table class="table table-bordered border-light">';
        tb += '<thead>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" rowspan="1" class="th">Mês</th>';
        tb += '<th scope="col" colspan="1" class="th">Valor Contábil</th>';
        tb += '<th scope="col" colspan="1" class="th">BC. do ICMS</th>';
        tb += '<th scope="col" colspan="1" class="th">ICMS Crédito</th>';
        tb += '<th scope="col" colspan="1" class="th">Isentas</th>';
        tb += '<th scope="col" colspan="1" class="th">BC. do ICMS ST</th>';
        tb += '<th scope="col" colspan="1" class="th">ICMS ST</th>';
        tb += '<th scope="col" colspan="1" class="th">Outros</th>';
        tb += '</tr>';
        tb += '</thead>';
        tb += '<tbody class="tbody">';
        tb += '</tbody>';
        tb += '</table>';

        return tb;
    });
});


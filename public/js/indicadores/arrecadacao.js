setTimeout(function() {
    $('#btn1').addClass('active');
    $('#btn1-1').addClass('active');
},200);

$('.abas1-2 .btn').click(function() {
    $('.abas1-2 .btn').removeClass('active');
});

$('#btn1-1').click(function() {
    $('#btn1-1').addClass('active');

    $('.middle').html(function() {
       var tb = '<table class="table table-bordered border-light">';
        tb += '<thead>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" rowspan="2" class="th">Mês</th>';
        tb += '<th scope="col" colspan="2" class="th">0000</th>';
        tb += '<th scope="col" colspan="2" class="th">0000</th>';
        tb += '<th scope="col" colspan="2" class="th">0000/0000</th>';
        tb += '</tr>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" colspan="1" class="th">Mensal</th>';
        tb += '<th scope="col" colspan="1" class="th">Acumulada</th>';
        tb += '<th scope="col" colspan="1" class="th">Mensal</th>';
        tb += '<th scope="col" colspan="1" class="th">Acumulada</th>';
        tb += '<th scope="col" colspan="1" class="th">R$</th>';
        tb += '<th scope="col" colspan="1" class="th">%</th>';
        tb += '</tr>';
        tb += '</thead>';
        tb += '<tbody class="tbody">';
        tb += '</tbody>';
        tb += '</table>';

        return tb;
    });
});

$('#btn1-2').click(function() {
    $('#btn1-2').addClass('active');

    $('.middle').html(function() {
        var tb = '<table class="table table-bordered border-light">';
         tb += '<thead>';
         tb += '<tr class="table-header">';
         tb += '<th scope="col" rowspan="2" class="th">Mês</th>';
         tb += '<th scope="col" colspan="2" class="th">0000</th>';
         tb += '<th scope="col" colspan="2" class="th">0000</th>';
         tb += '<th scope="col" colspan="2" class="th">0000/0000</th>';
         tb += '</tr>';
         tb += '<tr class="table-header">';
         tb += '<th scope="col" colspan="1" class="th">Mensal</th>';
         tb += '<th scope="col" colspan="1" class="th">Acumulada</th>';
         tb += '<th scope="col" colspan="1" class="th">Mensal</th>';
         tb += '<th scope="col" colspan="1" class="th">Acumulada</th>';
         tb += '<th scope="col" colspan="1" class="th">R$</th>';
         tb += '<th scope="col" colspan="1" class="th">%</th>';
         tb += '</tr>';
         tb += '</thead>';
         tb += '<tbody class="tbody">';
         tb += '</tbody>';
         tb += '</table>';

         return tb;
     });
});

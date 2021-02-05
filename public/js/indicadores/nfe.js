$('.abas1-1-1').hide();
$('.abas1-1-2').hide();
$('.abas1-2-1').hide();
$('.abas1-2-2').hide();
$('.abas1-2').hide();
$('.abas1-3').hide();
$('.abas1-3-1').hide();
$('.abas1-3-2').hide();
$('.abas1-4').hide();
$('.abas1-4-1').hide();
$('.abas1-4-2').hide();
$('.abas1-5').hide();
$('.abas1-5-1').hide();
$('.abas1-5-2').hide();
$('.abas1-6').hide();
$('.abas1-6-1').hide();
$('.abas1-6-2').hide();

setTimeout(function () {
    $('#btn1').addClass('active');
    $('#btn1-1-1').addClass('active');
    $('#btn1-2-1').addClass('active');
    $('#btn2-1-1').addClass('active');
    $('#btn2-2-1').addClass('active');
    $('#btn3-1-1').addClass('active');
    $('#btn3-2-1').addClass('active');
    $('#btn4-1-1').addClass('active');
    $('#btn4-2-1').addClass('active');
    $('#btn5-1-1').addClass('active');
    $('#btn5-2-1').addClass('active');
    $('#btn6-1-1').addClass('active');
    $('#btn6-2-1').addClass('active');
    // $('#btn1-1').addClass('active');
},160);

$('.btn-aba').click(function(){
    $('.abas1-1-1').hide();
    $('.abas1-1-2').hide();
    $('.abas1-2-1').hide();
    $('.abas1-2-2').hide();
    $('.abas1-3-1').hide();
    $('.abas1-3-2').hide();
    $('.abas1-4-1').hide();
    $('.abas1-4-2').hide();
    $('.abas1-5-1').hide();
    $('.abas1-5-2').hide();
    $('.abas1-6-1').hide();
    $('.abas1-6-2').hide();
    $('.abas1-1').hide();
    $('.abas1-2').hide();
    $('.abas1-3').hide();
    $('.abas1-4').hide();
    $('.abas1-5').hide();
    $('.abas1-6').hide();
    $('.btn-aba').removeClass('active');
    $('.btn-aba1-1').removeClass('active');
});

$('#btn1').click(function (){
    $('#btn1').addClass('active');
    $('.abas1-1').show();
    $('.middle').html(function () {
        var tb = '<table class="table table-bordered border-light">';
        tb += '<thead>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" rowspan="2" class="th">Mês/Ano</th>';
        tb += '<th scope="col" colspan="2" class="th">NFe Autorizadas para o Contribuinte</th>';
        tb += '<th scope="col" colspan="3" class="th">NFe não Declaradas na EFD</th>';
        tb += '<th scope="col" colspan="3" class="th">NFe Declaradas com Valor Diferente na EFD</th>';
        tb += '<th scope="col" colspan="3" class="th">NFe não Registradas no SITRAM</th>';
        tb += '</tr>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" class="th">Quantidade</th>';
        tb += '<th scope="col" class="th">Valor</th>';
        tb += '<th scope="col" class="th">Quantidade</th>';
        tb += '<th scope="col" class="th">Valor</th>';
        tb += '<th scope="col" class="th">%</th>';
        tb += '<th scope="col" class="th">Quantidade</th>';
        tb += '<th scope="col" class="th">Valor</th>';
        tb += '<th scope="col" class="th">%</th>';
        tb += '<th scope="col" class="th">Quantidade</th>';
        tb += '<th scope="col" class="th">Valor</th>';
        tb += '<th scope="col" class="th">%</th>';
        tb += '</tr>';
        tb += '</thead>';
        tb += '<tbody class="tbody">';
        tb += '<td>Total</td>';
        tb += '<td>0</td>';
        tb += '<td>0,00</td>';
        tb += '<td>0</td>';
        tb += '<td>0,00</td>';
        tb += '<td></td>';
        tb += '<td>0</td>';
        tb += '<td>0,00</td>';
        tb += '<td></td>';
        tb += '<td>0</td>';
        tb += '<td>0,00</td>';
        tb += '<td></td>';
        tb += '</tbody>';
        tb += '</table>';
        return tb;
    });
});

$('#btn1-1').click(function(){
    $('#btn1-2').removeClass('active');
    $('#btn1-1').addClass('active');
    $('.abas1-1-2').hide();
    $('.abas1-1-1').show();

    getNfeMunicipioEntradas();
});

$('#btn1-1-1').click(function(){
    $('#btn1-1-2').removeClass('active');
    $('#btn1-1-1').addClass('active');

    getNfeMunicipioEntradas();
});

$('#btn1-1-2').click(function(){
    $('#btn1-1-1').removeClass('active');
    $('#btn1-1-2').addClass('active');

    getNfeMunicipioSaidas();
});

$('#btn1-2-1').click(function(){
    $('#btn1-2-2').removeClass('active');
    $('#btn1-2-1').addClass('active');

    getNfeGeral();
});

$('#btn1-2-2').click(function(){
    $('#btn1-2-1').removeClass('active');
    $('#btn1-2-2').addClass('active');

    getNfeGeral();
});

$('#btn1-2').click(function(){
    $('#btn1-1').removeClass('active');
    $('#btn1-2').addClass('active');
    $('.abas1-1-1').hide();
    $('.abas1-1-2').show();

    getNfeGeral();
});

$('#btn2').click(function (){
    $('#btn2').addClass('active');
    $('.abas1-2').show();
    $('.middle').html(function(){
        var tb = '<table class="table table-bordered border-light">';
        tb += '<thead>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" rowspan="2" class="th">Mês/Ano</th>';
        tb += '<th scope="col" colspan="2" class="th">NFe Autorizadas</th>';
        tb += '<th scope="col" colspan="3" class="th">NFe não Declaradas na EFD</th>';
        tb += '<th scope="col" colspan="3" class="th">NFe Declaradas com Valor Diferente na EFD</th>';
        tb += '<th scope="col" colspan="3" class="th">NFe Canceladas e Declaradas na EFD do Destinatário</th>';
        tb += '</tr>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" class="th">Quantidade</th>';
        tb += '<th scope="col" class="th">Valor</th>';
        tb += '<th scope="col" class="th">Quantidade</th>';
        tb += '<th scope="col" class="th">Valor</th>';
        tb += '<th scope="col" class="th">%</th>';
        tb += '<th scope="col" class="th">Quantidade</th>';
        tb += '<th scope="col" class="th">Valor</th>';
        tb += '<th scope="col" class="th">%</th>';
        tb += '<th scope="col" class="th">Quantidade</th>';
        tb += '<th scope="col" class="th">Valor</th>';
        tb += '<th scope="col" class="th">%</th>';
        tb += '</tr>';
        tb += '</thead>';
        tb += '<tbody class="tbody">';
        tb += '<td>Total</td>';
        tb += '<td>0</td>';
        tb += '<td>0,00</td>';
        tb += '<td>0</td>';
        tb += '<td>0,00</td>';
        tb += '<td></td>';
        tb += '<td>0</td>';
        tb += '<td>0,00</td>';
        tb += '<td></td>';
        tb += '<td>0</td>';
        tb += '<td>0,00</td>';
        tb += '<td></td>';
        tb += '</tbody>';
        tb += '</table>';
        return tb;
    });
});

$('#btn2-1').click(function(){
    $('#btn2-2').removeClass('active');
    $('#btn2-1').addClass('active');
    $('.abas1-2-2').hide();
    $('.abas1-2-1').show();

    getNfeMunicipioEntradas();
});

$('#btn2-1-1').click(function(){
    $('#btn2-1-2').removeClass('active');
    $('#btn2-1-1').addClass('active');

    getNfeMunicipioEntradas();
});

$('#btn2-1-2').click(function(){
    $('#btn2-1-1').removeClass('active');
    $('#btn2-1-2').addClass('active');

    getNfeMunicipioSaidas();
});

$('#btn2-2-1').click(function(){
    $('#btn2-2-2').removeClass('active');
    $('#btn2-2-1').addClass('active');

});

$('#btn2-2-2').click(function(){
    $('#btn2-2-1').removeClass('active');
    $('#btn2-2-2').addClass('active');

});

$('#btn2-2').click(function(){
    $('#btn2-1').removeClass('active');
    $('#btn2-2').addClass('active');
    $('.abas1-2-1').hide();
    $('.abas1-2-2').show();

    getNfeGeral();
});

$('#btn3').click(function (){
    $('#btn3').addClass('active');
    $('.abas1-3').show();

    $('.middle').html(function(){
        var tb = '<table class="table table-bordered border-light">';
        tb += '<thead>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" rowspan="2" class="th">Mês/Ano</th>';
        tb += '<th scope="col" colspan="2" class="th">NFe Denegadas pela UF Remetente</th>';
        tb += '<th scope="col" colspan="2" class="th">NFe Canceladas pelo Remetente</th>';
        tb += '<th scope="col" colspan="2" class="th">NFe Canceladas e Declaradas na EFD do Destinatário</th>';
        tb += '</tr>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" class="th">Quantidade</th>';
        tb += '<th scope="col" class="th">Valor</th>';
        tb += '<th scope="col" class="th">Quantidade</th>';
        tb += '<th scope="col" class="th">Valor</th>';
        tb += '<th scope="col" class="th">Quantidade</th>';
        tb += '<th scope="col" class="th">Valor</th>';
        tb += '</thead>';
        tb += '<tbody class="tbody">';
        tb += '<td>Total</td>';
        tb += '<td>0</td>';
        tb += '<td>0,00</td>';
        tb += '<td>0</td>';
        tb += '<td>0,00</td>';
        tb += '<td>0</td>';
        tb += '<td>0,00</td>';
        tb += '</tbody>';
        tb += '</table>';
        return tb;
    });
});

$('#btn3-1').click(function(){
    $('#btn3-2').removeClass('active');
    $('#btn3-1').addClass('active');
    $('.abas1-3-2').hide();
    $('.abas1-3-1').show();

    getNfeMunicipioEntradas();
});

$('#btn3-1-1').click(function(){
    $('#btn3-1-2').removeClass('active');
    $('#btn3-1-1').addClass('active');

    getNfeMunicipioEntradas();
});

$('#btn3-1-2').click(function(){
    $('#btn3-1-1').removeClass('active');
    $('#btn3-1-2').addClass('active');

    getNfeMunicipioSaidas();
});

$('#btn3-2-1').click(function(){
    $('#btn3-2-2').removeClass('active');
    $('#btn3-2-1').addClass('active');

});

$('#btn3-2-2').click(function(){
    $('#btn3-2-1').removeClass('active');
    $('#btn3-2-2').addClass('active');

});

$('#btn3-2').click(function(){
    $('#btn3-1').removeClass('active');
    $('#btn3-2').addClass('active');
    $('.abas1-3-1').hide();
    $('.abas1-3-2').show();

    getNfeGeral();
});

$('#btn4').click(function (){
    $('#btn4').addClass('active');
    $('.abas1-4').show();

    $('.middle').html(function(){
        var tb = '<table class="table table-bordered border-light">';
        tb += '<thead>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" rowspan="2" class="th">Mês/Ano</th>';
        tb += '<th scope="col" colspan="3" class="th">NFe Denegadas</th>';
        tb += '<th scope="col" colspan="3" class="th">NFe Canceladas</th>';
        tb += '<th scope="col" colspan="3" class="th">NFe Canceladas com Registro de Passagem no NFECORP</th>';
        tb += '</tr>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" class="th">Quantidade</th>';
        tb += '<th scope="col" class="th">Valor</th>';
        tb += '<th scope="col" class="th">%</th>';
        tb += '<th scope="col" class="th">Quantidade</th>';
        tb += '<th scope="col" class="th">Valor</th>';
        tb += '<th scope="col" class="th">%</th>';
        tb += '<th scope="col" class="th">Quantidade</th>';
        tb += '<th scope="col" class="th">Valor</th>';
        tb += '<th scope="col" class="th">%</th>';
        tb += '</thead>';
        tb += '<tbody class="tbody">';
        tb += '<td>Total</td>';
        tb += '<td>0</td>';
        tb += '<td>0,00</td>';
        tb += '<td></td>';
        tb += '<td>0</td>';
        tb += '<td>0,00</td>';
        tb += '<td></td>';
        tb += '<td>0</td>';
        tb += '<td>0,00</td>';
        tb += '<td></td>';
        tb += '</tbody>';
        tb += '</table>';
        return tb;
    });

});

$('#btn4-1').click(function(){
    $('#btn4-2').removeClass('active');
    $('#btn4-1').addClass('active');
    $('.abas1-4-2').hide();
    $('.abas1-4-1').show();

    getNfeMunicipioEntradas();
});

$('#btn4-1-1').click(function(){
    $('#btn4-1-2').removeClass('active');
    $('#btn4-1-1').addClass('active');

    getNfeMunicipioEntradas();
});

$('#btn4-1-2').click(function(){
    $('#btn4-1-1').removeClass('active');
    $('#btn4-1-2').addClass('active');

    getNfeMunicipioSaidas();
});

$('#btn4-2-1').click(function(){
    $('#btn4-2-2').removeClass('active');
    $('#btn4-2-1').addClass('active');

});

$('#btn4-2-2').click(function(){
    $('#btn4-2-1').removeClass('active');
    $('#btn4-2-2').addClass('active');

});

$('#btn4-2').click(function(){
    $('#btn4-1').removeClass('active');
    $('#btn4-2').addClass('active');
    $('.abas1-4-1').hide();
    $('.abas1-4-2').show();

    getNfeGeral();
});

$('#btn5').click(function (){
    $('#btn5').addClass('active');
    $('.abas1-5').show();


    $('.middle').html(function(){
        var tb = '<table class="table table-bordered border-light">';
        tb += '<thead>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" colspan="1" class="th">Chave Acesso</th>';
        tb += '<th scope="col" colspan="1" class="th">Número Nota</th>';
        tb += '<th scope="col" colspan="1" class="th">Data da Emissão</th>';
        tb += '<th scope="col" colspan="1" class="th">CPF/CNPJ Fornecedor</th>';
        tb += '<th scope="col" colspan="1" class="th">Nome/Razão Social Fornecedor</th>';
        tb += '<th scope="col" colspan="1" class="th">Série</th>';
        tb += '<th scope="col" colspan="1" class="th">UF</th>';
        tb += '<th scope="col" colspan="1" class="th">Valor da NFe</th>';
        tb += '<th scope="col" colspan="1" class="th">ICMS Destacado</th>';
        tb += '<th scope="col" colspan="1" class="th">Situação NFe</th>';
        tb += '</tr>';
        tb += '</thead>';
        tb += '<tbody class="tbody">';
        tb += '</tbody>';
        tb += '</table>';
        return tb;
    });
});

$('#btn5-1').click(function(){
    $('#btn5-2').removeClass('active');
    $('#btn5-1').addClass('active');
    $('.abas1-5-2').hide();
    $('.abas1-5-1').show();

    getNfeMunicipioEntradas();
});

$('#btn5-1-1').click(function(){
    $('#btn5-1-2').removeClass('active');
    $('#btn5-1-1').addClass('active');

    getNfeMunicipioEntradas();
});

$('#btn5-1-2').click(function(){
    $('#btn5-1-1').removeClass('active');
    $('#btn5-1-2').addClass('active');

    getNfeMunicipioSaidas();
});

$('#btn5-2-1').click(function(){
    $('#btn5-2-2').removeClass('active');
    $('#btn5-2-1').addClass('active');

});

$('#btn5-2-2').click(function(){
    $('#btn5-2-1').removeClass('active');
    $('#btn5-2-2').addClass('active');

});

$('#btn5-2').click(function(){
    $('#btn5-1').removeClass('active');
    $('#btn5-2').addClass('active');
    $('.abas1-5-1').hide();
    $('.abas1-5-2').show();

    getNfeGeral();
});

$('#btn6').click(function (){
    $('#btn6').addClass('active');
    $('.abas1-6').show();


    $('.middle').html(function(){
        var tb = '<table class="table table-bordered border-light">';
        tb += '<thead>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" colspan="1" class="th">Chave Acesso</th>';
        tb += '<th scope="col" colspan="1" class="th">Número Nota</th>';
        tb += '<th scope="col" colspan="1" class="th">Data da Emissão</th>';
        tb += '<th scope="col" colspan="1" class="th">CPF/CNPJ Destinatário</th>';
        tb += '<th scope="col" colspan="1" class="th">Nome/Razão Social Destinatário</th>';
        tb += '<th scope="col" colspan="1" class="th">Série</th>';
        tb += '<th scope="col" colspan="1" class="th">UF</th>';
        tb += '<th scope="col" colspan="1" class="th">Valor da NFe</th>';
        tb += '<th scope="col" colspan="1" class="th">ICMS Destacado</th>';
        tb += '<th scope="col" colspan="1" class="th">Situação NFe</th>';
        tb += '</tr>';
        tb += '</thead>';
        tb += '<tbody class="tbody">';
        tb += '</tbody>';
        tb += '</table>';
        return tb;
    });
});

$('#btn6-1').click(function(){
    $('#btn6-2').removeClass('active');
    $('#btn6-1').addClass('active');
    $('.abas1-6-2').hide();
    $('.abas1-6-1').show();

    getNfeMunicipioEntradas();
});

$('#btn6-1-1').click(function(){
    $('#btn6-1-2').removeClass('active');
    $('#btn6-1-1').addClass('active');

    getNfeMunicipioEntradas();
});

$('#btn6-1-2').click(function(){
    $('#btn6-1-1').removeClass('active');
    $('#btn6-1-2').addClass('active');

    getNfeMunicipioSaidas();
});

$('#btn6-2-1').click(function(){
    $('#btn6-2-2').removeClass('active');
    $('#btn6-2-1').addClass('active');

});

$('#btn6-2-2').click(function(){
    $('#btn6-2-1').removeClass('active');
    $('#btn6-2-2').addClass('active');

});

$('#btn6-2').click(function(){
    $('#btn6-1').removeClass('active');
    $('#btn6-2').addClass('active');
    $('.abas1-6-1').hide();
    $('.abas1-6-2').show();

    getNfeGeral();
});

function getNfeMunicipioEntradas() {
    $('.middle').html(function() {
        var tb = '<table class="table table-bordered border-light">';
        tb += '<thead>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" rowspan="2" class="th">Exercício</th>';
        tb += '<th scope="col" rowspan="2" class="th">Nome do Município</th>';
        tb += '<th scope="col" rowspan="2" class="th">UF</th>';
        tb += '<th scope="col" colspan="2" class="th">Autorizada</th>';
        tb += '<th scope="col" colspan="2" class="th">Cancelada</th>';
        tb += '<th scope="col" colspan="2" class="th">Denegada</th>';
        tb += '</tr>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" class="th">Quantidade NFe</th>';
        tb += '<th scope="col" class="th">Valor da NFe</th>';
        tb += '<th scope="col" class="th">Quantidade NFe</th>';
        tb += '<th scope="col" class="th">Valor da NFe</th>';
        tb += '<th scope="col" class="th">Quantidade NFe</th>';
        tb += '<th scope="col" class="th">Valor da NFe</th>';
        tb += '</tr>';
        tb += '</thead>';
        tb += '<tbody class="tbody">';
        tb += '</tbody>';
        tb += '</table>';
        return tb;
    });
}

function  getNfeMunicipioSaidas() {
    $('.middle').html(function() {
        var tb = '<table class="table table-bordered border-light">';
        tb += '<thead>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" rowspan="2" class="th">Exercício</th>';
        tb += '<th scope="col" rowspan="2" class="th">Nome do Município</th>';
        tb += '<th scope="col" rowspan="2" class="th">UF</th>';
        tb += '<th scope="col" colspan="2" class="th">Autorizada</th>';
        tb += '<th scope="col" colspan="2" class="th">Cancelada</th>';
        tb += '<th scope="col" colspan="2" class="th">Denegada</th>';
        tb += '</tr>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" class="th">Quantidade NFe</th>';
        tb += '<th scope="col" class="th">Valor da NFe</th>';
        tb += '<th scope="col" class="th">Quantidade NFe</th>';
        tb += '<th scope="col" class="th">Valor da NFe</th>';
        tb += '<th scope="col" class="th">Quantidade NFe</th>';
        tb += '<th scope="col" class="th">Valor da NFe</th>';
        tb += '</tr>';
        tb += '</thead>';
        tb += '<tbody class="tbody">';
        tb += '</tbody>';
        tb += '</table>';
        return tb;
    });
}

function getNfeGeral() {
    $('.middle').html(function() {
        var tb = '<div class="row">';
        tb += '<div class="input-group mb-3 group">';
        tb += '<label class="input-group-text" for="inputGroupFile01">Data Inicial:</label>';
        tb += '<input type="date" class="form-control" id="inputGroupFile01">';
        tb += '<label class="input-group-text" for="inputGroupFile02">Data Final:</label>';
        tb += '<input type="date" class="form-control" id="inputGroupFile02">';
        tb += '</div>';
        tb += '</div>';
        tb += '<div class="row">';
        tb += '<div class="input-group mb-3 group">';
        tb += '<label for="" class="input-group-text">CNPJ Emitente:</label>';
        tb += '<input type="text" class="input-group-text" name="" id="" placeholder="00.000.000/0000-00">';
        tb += '<button type="button" class="btn btn-primary btn-sm btn-search" onclick="searchNfeGeral()"><i class="fas fa-search"></i></button>';
        tb += '</div>';
        tb += '</div>';
        tb += '<table class="table table-bordered border-light">';
        tb += '<thead>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" class="th">Tipo Documento Fiscal</th>';
        tb += '<th scope="col" class="th">Chave Acesso</th>';
        tb += '<th scope="col" class="th">Série</th>';
        tb += '<th scope="col" class="th">Número Nota</th>';
        tb += '<th scope="col" class="th">Valor da NFe</th>';
        tb += '<th scope="col" class="th">Status</th>';
        tb += '<th scope="col" class="th">CNPJ</th>';
        tb += '<th scope="col" class="th">Razão Social</th>';
        tb += '</tr>';
        tb += '</thead>';
        tb += '<tbody class="tbody">';
        tb += '</tbody>';
        tb += '</table>';
        return tb;
    });
}

function searchNfeGeral() {
    alert('Search');
}

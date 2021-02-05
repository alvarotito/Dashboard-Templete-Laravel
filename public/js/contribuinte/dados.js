setTimeout(function() {
    $('#btn1').addClass('active');
}, 200);

$('.abas .btn').click(function() {
    $('.abas .btn').removeClass('active');
});

$('#btn1').click(function() {
    $('#btn1').addClass('active');

    $('.middle').html(function() {
        var tb = '<div class="row">';
        tb += '<div class="col-12">';
        tb += '<span>Razão Social</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '</div>';
        tb += '</div>';
        tb += '<div class="row">';
        tb += '<div class="col-8">';
        tb += '<span>Nome Fantasia</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '<span>CNPJ</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '<span>Início da Atividade</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '<span>Bairro</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '<span>Estado</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '<span>Telefone</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '</div>';
        tb += '<div class="col-4">';
        tb += '<span>CGF</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '<span>Outros Estabelecimentos</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '<span>Situação Cadastral</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '<span>Município</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '<span>CEP</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '<span>Email</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '</div>';
        tb += '</div>';
        tb += '<div class="row">';
        tb += '<div class="col-12">';
        tb += '<span>Endereço</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '</div>';
        tb += '</div>';

        return tb;
    });
});

$('#btn2').click(function() {
    $('#btn2').addClass('active');

    $('.middle').html(function() {
        var tb = '<div class="row">';
        tb += '<div class="col-8">';
        tb += '<span>Regime de Recolhimento</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '<span>Data de Inclusão SN</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '<span>Segmento Econômico</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '<span>Termo de Retenção</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '</div>';
        tb += '<div class="col-4">';
        tb += '<span>Categoria Estabelecimento</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '<span>Regime Contábil de Apuração SN</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '<span>Reg. Especial Fiscalização</span>'
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '<span>Ações Judiciais</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '</div>';
        tb += '</div>';
        tb += '<div class="row">';
        tb += '<div class="col-12">';
        tb += '<span>CNAE Principal</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '<span>CNAE Secundário 1</span>'
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '</div>';
        tb += '</div>';
        tb += '<div class="row">';
        tb += '<div class="col-8">';
        tb += '<span>Termo de Acordo</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '<span>FDI</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '<span>Quantidade ECF</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '<span>Dívida Ativa</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '<span>Data Obrigatoriedade</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '<span>Escrita Fiscal Digital - EFD</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '</div>';
        tb += '<div class="col-4">';
        tb += '<span>Credenciamento</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '<span>ECF</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '<span>CADINE</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '<span>NFe</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '<span>Data 1ª NFe</span>'
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '<span>Data Obrigatoriedade</span>';
        tb += '<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">';
        tb += '</div>';
        tb += '</div>';

        return tb;
    });
});

$('#btn3').click(function() {
    $('#btn3').addClass('active');

    $('.middle').html(function() {
        var tb = '<table class="table table-bordered border-light">';
        tb += '<thead>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" rowspan="1" class="th">CPF/CNPJ</th>';
        tb += '<th scope="col" colspan="1" class="th">Nome</th>';
        tb += '<th scope="col" colspan="1" class="th">Cargo</th>';
        tb += '<th scope="col" colspan="1" class="th">Endereço</th>'
        tb += '<th scope="col" colspan="1" class="th">Participação(%)</th>';
        tb += '<th scope="col" colspan="1" class="th">Data Início</th>';
        tb += '<th scope="col" colspan="1" class="th">Data Fim</th>';
        tb += '<th scope="col" colspan="1" class="th">Telefone</th>';
        tb += '<th scope="col" colspan="1" class="th">E-mail</th>';
        tb += '<th scope="col" colspan="1" class="th">CADINE</th>';
        tb += '<th scope="col" colspan="1" class="th">Part. Outras Empresas</th>';
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
        var tb = '<table class="table table-bordered border-light">';
        tb += '<thead>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" rowspan="1" class="th">CPF/CNPJ</th>';
        tb += '<th scope="col" colspan="1" class="th">Nome/Razão Social</th>';
        tb += '<th scope="col" colspan="1" class="th">CRC</th>';
        tb += '<th scope="col" colspan="1" class="th">Telefone</th>'
        tb += '<th scope="col" colspan="1" class="th">Celular</th>';
        tb += '<th scope="col" colspan="1" class="th">E-mail</th>';
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
        var tb = '<table class="table table-bordered border-light">';
        tb += '<thead>';
        tb += '<tr class="table-header">';
        tb += '<th scope="col" rowspan="1" class="th">Nome/Razão Social</th>';
        tb += '<th scope="col" colspan="1" class="th">CPF/CNPJ</th>';
        tb += '<th scope="col" colspan="1" class="th">E-mail</th>';
        tb += '<th scope="col" colspan="1" class="th">Início de Vínculo</th>'
        tb += '<th scope="col" colspan="1" class="th">Fim de Vínculo</th>';
        tb += '<th scope="col" colspan="1" class="th">Papel</th>';
        tb += '</tr>';
        tb += '</thead>';
        tb += '<tbody class="tbody">';
        tb += '</tbody>';
        tb += '</table>';

        return tb;
    });
});

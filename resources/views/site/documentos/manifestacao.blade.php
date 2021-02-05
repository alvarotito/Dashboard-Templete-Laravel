@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/documentos/manifestacao.css') }}">

@section('content')
<div class="header">
    <p class="title"> Documentos Fiscais
        <i class="fas fa-chevron-right" id="arrow"></i>
        Manifestação do Destinatário
    </p>
</div>

<div class="abas">
    <button type="button" class="btn btn-light" id="btn1">A Manifestar</button>
    <button type="button" class="btn btn-light" id="btn2">Retorno da Manifestação</button>
    <button type="button" class="btn btn-light" id="btn3">Manifestação de Terceiros</button>
</div>

<div class="middle">
    <table class="table table-bordered border-light">
        <thead>
            <tr class="table-header">
                <th scope="col" colspan="2" class="th">Filtros de Pedido</th>
            </tr>
        </thead>
        <tbody class="tbody">
            <tr>
                <td>
                    <div class="row">
                        <div class="input-group mb-3 group">
                            <label class="input-group-text" for="inputGroupFile01">Período</label>
                            <input type="date" class="form-control" id="inputGroupFile01">
                            <label class="input-group-text" for="inputGroupFile01">Até</label>
                            <input type="date" class="form-control" id="inputGroupFile01">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="row">
                        <div class="input-group mb-3 group">
                            <label class="input-group-text" for="inputGroupFile01">Chave Acesso</label>
                            <input type="text" class="form-control" id="inputGroupFile01">
                            <button type="button" class="btn btn-primary btn-sm btn-search"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <table class="table table-bordered border-light">
        <thead>
            <tr class="table-header">
                <th scope="col" rowspan="1" class="th">Envio</th>
            </tr>
        </thead>
        <tbody class="tbody">
            <tr>
                <td>
                    <div class="row">
                        <div class="input-group mb-3 group">
                            <label class="input-group-text" for="inputGroupFile01">Tipo de Operação</label>
                            <select name="" class="form-control" id=""></select>
                            <label class="input-group-text" for="inputGroupFile01">Certificado</label>
                            <select name="" class="form-control" id=""></select>
                            <button type="button" class="btn btn-light btn-sm">Enviar</button>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="aviso"><b><i class="fas fa-info-circle" id="arrow"></i> Após a ciência da operação utilize a aba de retorno.</b></p>
    <p class="aviso"><b><i class="fas fa-info-circle" id="arrow"></i> O prazo para a manifestação é de até 180 dias. Após a ciência da operação, utilize a aba de retorno.</b></p>

    <table class="table table-bordered border-light">
        <thead>
            <tr class="table-header">
                <th scope="col" rowspan="1" class="th">Selecionar</th>
                <th scope="col" rowspan="1" class="th">Data da Emissão</th>
                <th scope="col" rowspan="1" class="th">UF de Origem</th>
                <th scope="col" rowspan="1" class="th">Número do Documento</th>
                <th scope="col" rowspan="1" class="th">Chave de Acesso</th>
                <th scope="col" rowspan="1" class="th">Emissor</th>
                <th scope="col" rowspan="1" class="th">Situação da NFe</th>
                <th scope="col" rowspan="1" class="th">Valor Faturado</th>
            </tr>
        </thead>
        <tbody class="tbody">
        </tbody>
    </table>
</div>

<script src="{{ asset('js/documentos/manifestacao.js') }}"></script>
@endsection

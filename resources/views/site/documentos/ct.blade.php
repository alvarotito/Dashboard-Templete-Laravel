@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/documentos/cte.css') }}">

@section('content')
<div class="header">
    <p class="title"> Documentos Fiscais
        <i class="fas fa-chevron-right" id="arrow"></i>
        Arquivo XML do CTe
    </p>
</div>

<div class="middle">
    <table class="table table-bordered border-light">
        <thead>
            <tr class="table-header">
                <th scope="col" colspan="2" class="th">Filtros da Solicitação</th>
            </tr>
        </thead>
        <tbody class="tbody">
            <tr>
                <td>
                    <div class="row">
                        <div class="input-group mb-3 group">
                            <label for="" class="input-group-text">Tipo de Participação do contribuinte no arquivo Cte</label>
                            <select name="" class="form-control" id=""></select>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="row">
                        <div class="input-group mb-3 group">
                            <label class="input-group-text" for="inputGroupFile01">Data inicial</label>
                            <input type="date" class="form-control" id="inputGroupFile01">
                            <label class="input-group-text" for="inputGroupFile01">Data final</label>
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
                            <button type="button" class="btn btn-light btn-sm">Enviar</button>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="aviso"><b><i class="fas fa-info-circle" id="arrow"></i> Os campos data inicial e data final são obrigatórios.</b></p>
    <p class="aviso"><b><i class="fas fa-info-circle" id="arrow"></i> O período entra a data inicial e final não deve ultrapassar 30 dias.</b></p>
    <p class="aviso"><b><i class="fas fa-info-circle" id="arrow"></i> Os dados dos CTes solicitados devem estar relacionados com o contribuinte que acessou ou está sendo representado pelo procurador no portal.</b></p>

    <table class="table table-bordered border-light">
        <thead>
            <tr class="table-header">
                <th scope="col" rowspan="1" class="th">Número do Protocolo</th>
                <th scope="col" rowspan="1" class="th">Data Solicitação</th>
                <th scope="col" rowspan="1" class="th">Chave do CTe</th>
                <th scope="col" rowspan="1" class="th">Tipo de Participação</th>
                <th scope="col" rowspan="1" class="th">Data Inicial</th>
                <th scope="col" rowspan="1" class="th">Data Final</th>
                <th scope="col" rowspan="1" class="th">Situação</th>
            </tr>
        </thead>
        <tbody class="tbody">
        </tbody>
    </table>
    <table class="table table-bordered border-light">
        <thead>
            <tr class="table-header">
                <th scope="col" colspan="20" class="th">Legenda</th>
            </tr>
        </thead>
        <tbody class="tbody">
            <tr>
                <td>
                    <i class="fas fa-check"></i> Disponivel
                </td>
                <td>
                    <i class="fas fa-exclamation-triangle"></i> Ainda não Disponivel
                </td>
                <td>
                    <i class="fas fa-times"></i> Cancelar Solicitação
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection

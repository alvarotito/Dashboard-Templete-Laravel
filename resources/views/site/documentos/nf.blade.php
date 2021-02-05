@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/documentos/nfe.css') }}">

@section('content')
<div class="header">
    <p class="title"> Documentos Fiscais
        <i class="fas fa-chevron-right" id="arrow"></i>
        Arquivo XML da NFe
    </p>
</div>

<div class="middle">
    <table class="table table-bordered border-light">
        <thead>
            <tr class="table-header">
                <th scope="col" colspan="20" class="th">Pedidos Realizados</th>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr class="table-header">
                <th scope="col" rowspan="1" class="th">Quantidade de Lotes</th>
                <th scope="col" rowspan="1" class="th">Data do Pedido</th>
                <th scope="col" rowspan="1" class="th">Vencimento</th>
                <th scope="col" rowspan="1" class="th">Quantidade</th>
                <th scope="col" rowspan="1" class="th">Taxa</th>
                <th scope="col" rowspan="1" class="th">Situação</th>
                <th scope="col" rowspan="1" class="th">Cancelar</th>
                <th scope="col" rowspan="1" class="th">DAE</th>
            </tr>
        </thead>
        <tbody class="tbody">
            <tr>
                <td colspan="20">
                    Sem dados para mostrar
                </td>
            </tr>
        </tbody>
    </table>

    <p class="aviso"><b><i class="fas fa-info-circle" id="arrow"></i> Pagamento deverá ser efetuado em até 5(cinco) dias, após esse período sua solicitação será CANCELADA.</b></p>
    <p class="aviso"><b><i class="fas fa-info-circle" id="arrow"></i> Os pedidos ficam disponíveis por 30 dias.</b></p>
    <p class="aviso"><b><i class="fas fa-info-circle" id="arrow"></i> Para baixar os arquivos xml solicitados é necessário clicar no seguinte icone: <i class="fas fa-check"></i> da coluna situação.</b></p>

    <table class="table table-bordered border-light">
        <thead>
            <tr class="table-header">
                <th scope="col" colspan="20" class="th">Legenda</th>
            </tr>
        </thead>
        <tbody class="tbody">
            <tr>
                <td>
                    <i class="fas fa-clock"></i> Aguardando Pagamento
                </td>
                <td>
                    <i class="fas fa-check"></i> Disponivel
                </td>
                <td>
                    <i class="fas fa-exclamation-triangle"></i> Ainda não Disponivel
                </td>
                <td>
                    <i class="fas fa-times"></i> Cancelar Solicitação
                </td>
                <td>
                    <i class="fas fa-download"></i> DAE
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection

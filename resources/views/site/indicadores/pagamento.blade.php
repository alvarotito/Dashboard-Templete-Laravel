@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/indicadores/pagamento.css') }}">

@section('content')
<div class="header">
    <p class="title"> Indicadores
        <i class="fas fa-chevron-right" id="arrow"></i>
        Meios de Pagamento
    </p>
</div>

<div class="abas">
    <button type="button" class="btn btn-light" id="btn1">Indivisualizado</button>
    <button type="button" class="btn btn-light" id="btn2">Oper. por Tipo de Cartão Indivisualizado</button>
    <button type="button" class="btn btn-light" id="btn3">Agrupado por CNPJ Básico</button>
    <button type="button" class="btn btn-light" id="btn4">Oper. por Tipo de Cartão por CNPJ Básico</button>
</div>

<div class="abas1-2">
    <button type="button" class="btn btn-light" id="btn2-1">Crédito</button>
    <button type="button" class="btn btn-light" id="btn2-2">Débito</button>
    <button type="button" class="btn btn-light" id="btn2-3">Crédito/Débito</button>
</div>

<div class="abas1-3">
    <button type="button" class="btn btn-light" id="btn4-1">Crédito</button>
    <button type="button" class="btn btn-light" id="btn4-2">Débito</button>
    <button type="button" class="btn btn-light" id="btn4-3">Crédito/Débito</button>
</div>

<div class="middle">
    <table class="table table-bordered border-light">
        <thead>
            <tr class="table-header">
                <th scope="col" rowspan="2" class="th">Mês de Referência</th>
                <th scope="col" colspan="3" class="th">Faturamento (A)</th>
                <th scope="col" rowspan="2" class="th">TEF (B)</th>
                <th scope="col" rowspan="2" class="th">Diferença (A-B)</th>
            </tr>
            <tr class="table-header">
                <th scope="col" colspan="1" class="th">Valor Declarado</th>
                <th scope="col" colspan="1" class="th">Origem</th>
                <th scope="col" colspan="1" class="th">Devoluções*</th>
            </tr>
        </thead>
        <tbody class="tbody">
        </tbody>
    </table>
</div>

<script src="{{ asset('js/indicadores/pagamento.js') }}"></script>
@endsection

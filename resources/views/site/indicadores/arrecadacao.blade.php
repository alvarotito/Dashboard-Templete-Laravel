@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/indicadores/arrecadacao.css') }}">

@section('content')
<div class="header">
    <p class="title"> Indicadores
        <i class="fas fa-chevron-right" id="arrow"></i>
        Arrecadação
    </p>
</div>

<div class="abas">
    <button type="button" class="btn btn-light" id="btn1">Arrecadação ICMS</button>
</div>

<div class="abas1-2">
    <button type="button" class="btn btn-light" id="btn1-1">Arrecadação</button>
    <button type="button" class="btn btn-light" id="btn1-2">Arrecadação CNPJ Básico</button>
</div>

<div class="middle">
    <table class="table table-bordered border-light">
        <thead>
            <tr class="table-header">
                <th scope="col" rowspan="2" class="th">Mês</th>
                <th scope="col" colspan="2" class="th">0000</th>
                <th scope="col" colspan="2" class="th">0000</th>
                <th scope="col" colspan="2" class="th">0000/0000</th>
            </tr>
            <tr class="table-header">
                <th scope="col" colspan="1" class="th">Mensal</th>
                <th scope="col" colspan="1" class="th">Acumulada</th>
                <th scope="col" colspan="1" class="th">Mensal</th>
                <th scope="col" colspan="1" class="th">Acumulada</th>
                <th scope="col" colspan="1" class="th">R$</th>
                <th scope="col" colspan="1" class="th">%</th>
            </tr>
        </thead>
        <tbody class="tbody">
        </tbody>
    </table>
</div>

<script src="{{ asset('js/indicadores/arrecadacao.js') }}"></script>
@endsection

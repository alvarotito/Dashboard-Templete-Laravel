@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/escrituracao/debitos.css') }}">

@section('content')
<div class="header">
    <p class="title"> Escrituração
        <i class="fas fa-chevron-right" id="arrow"></i>
        Débitos Declarados
    </p>
</div>

<div class="abas">
    <button type="button" class="btn btn-light" id="btn1">Débitos ICMS Normal</button>
    <button type="button" class="btn btn-light" id="btn2">Débitos ICMS-ST Retido na Fonte</button>
    <button type="button" class="btn btn-light" id="btn3">Débitos Extra Apuração</button>
</div>
<div class="abas1-1">
    <button type="button" class="btn btn-light btn-aba1-1" id="btn3-1">NFe por Município</button>
    <button type="button" class="btn btn-light btn-aba1-1" id="btn3-2">NFe Geral</button>
</div>

<div class="middle">
    <table class="table table-bordered border-light">
        <thead>
            <tr class="table-header">
                <th scope="col" rowspan="1" class="th">Mês</th>
                <th scope="col" colspan="1" class="th">Entradas</th>
                <th scope="col" colspan="1" class="th">Saídas</th>
                <th scope="col" colspan="1" class="th">Créditos</th>
                <th scope="col" colspan="1" class="th">Débitos</th>
                <th scope="col" colspan="1" class="th">Saldo</th>
                <th scope="col" colspan="1" class="th">Valor Recolhido</th>
                <th scope="col" colspan="1" class="th">Situação</th>
            </tr>
        </thead>
        <tbody class="tbody">
        </tbody>
    </table>
    <table class="table table-bordered border-light">
        <thead>
            <tr class="table-header">
                <th scope="col" rowspan="1" class="th">Indicadores Anuais(*)</th>
                <th scope="col" colspan="1" class="th">Formula</th>
                <th scope="col" colspan="1" class="th">Valor R$(%)</th>
            </tr>
        </thead>
        <tbody class="tbody">
            <tr>
                <td>Taxa de Adicionamento</td>
                <td>TA = (Total Saídas/Total Entradas) - 1 x 100</td>
                <td>0,00</td>
            </tr>
            <tr>
                <td>Índice de Saídas</td>
                <td>IS = (ICMS a Recolher/Total Saídas) x 100</td>
                <td>0,00</td>
            </tr>
            <tr>
                <td>Taxa de Débitos</td>
                <td>TD = (Débito ICMS/Total de Saídas) x 100</td>
                <td>0,00</td>
            </tr>
            <tr>
                <td>Taxa de Crédito</td>
                <td>Tc = (Crédito ICMS/Total de Entradas) x 100</td>
                <td>0,00</td>
            </tr>
        </tbody>
    </table>
</div>

<script src="{{ asset('js/escrituracao/debitos.js') }}"></script>
@endsection

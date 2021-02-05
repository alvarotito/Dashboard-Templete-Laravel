@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css/indicadores/nfe.css')}}">

@section('content')
<div class="header">
    <p class="title"> Indicadores
        <i class="fas fa-chevron-right" id="arrow"></i>
        NF-e
    </p>
</div>
<div class="abas">
    <button type="button" class="btn btn-light btn-aba" id="btn1">Entradas NF-e</button>
    <button type="button" class="btn btn-light btn-aba" id="btn2">Saídas NF-e</button>
    <button type="button" class="btn btn-light btn-aba" id="btn3">Entradas NF-e Outros</button>
    <button type="button" class="btn btn-light btn-aba" id="btn4">Saídas NF-e Outros</button>
    <button type="button" class="btn btn-light btn-aba" id="btn5">Relação NF-e Recebidas</button>
    <button type="button" class="btn btn-light btn-aba" id="btn6">Relação NF-e Emitidas</button>
</div>
<div class="abas1-1">
    <button type="button" class="btn btn-light btn-aba1-1" id="btn1-1">NFe por Município</button>
    <button type="button" class="btn btn-light btn-aba1-1" id="btn1-2">NFe Geral</button>
</div>
<div class="abas1-1-1">
    <button type="button" class="btn btn-light" id="btn1-1-1">Entradas</button>
    <button type="button" class="btn btn-light" id="btn1-1-2">Saídas</button>
</div>
<div class="abas1-1-2">
    <button type="button" class="btn btn-light" id="btn1-2-1">Entradas</button>
    <button type="button" class="btn btn-light" id="btn1-2-2">Saídas</button>
</div>
<div class="abas1-2">
    <button type="button" class="btn btn-light btn-aba1-1" id="btn2-1">NFe por Município</button>
    <button type="button" class="btn btn-light btn-aba1-1" id="btn2-2">NFe Geral</button>
</div>
<div class="abas1-2-1">
    <button type="button" class="btn btn-light" id="btn2-1-1">Entradas</button>
    <button type="button" class="btn btn-light" id="btn2-1-2">Saídas</button>
</div>
<div class="abas1-2-2">
    <button type="button" class="btn btn-light" id="btn2-2-1">Entradas</button>
    <button type="button" class="btn btn-light" id="btn2-2-2">Saídas</button>
</div>
<div class="abas1-3">
    <button type="button" class="btn btn-light btn-aba1-1" id="btn3-1">NFe por Município</button>
    <button type="button" class="btn btn-light btn-aba1-1" id="btn3-2">NFe Geral</button>
</div>
<div class="abas1-3-1">
    <button type="button" class="btn btn-light" id="btn3-1-1">Entradas</button>
    <button type="button" class="btn btn-light" id="btn3-1-2">Saídas</button>
</div>
<div class="abas1-3-2">
    <button type="button" class="btn btn-light" id="btn3-2-1">Entradas</button>
    <button type="button" class="btn btn-light" id="btn3-2-2">Saídas</button>
</div>
<div class="abas1-4">
    <button type="button" class="btn btn-light btn-aba1-1" id="btn4-1">NFe por Município</button>
    <button type="button" class="btn btn-light btn-aba1-1" id="btn4-2">NFe Geral</button>
</div>
<div class="abas1-4-1">
    <button type="button" class="btn btn-light" id="btn4-1-1">Entradas</button>
    <button type="button" class="btn btn-light" id="btn4-1-2">Saídas</button>
</div>
<div class="abas1-4-2">
    <button type="button" class="btn btn-light" id="btn4-2-1">Entradas</button>
    <button type="button" class="btn btn-light" id="btn4-2-2">Saídas</button>
</div>
<div class="abas1-5">
    <button type="button" class="btn btn-light btn-aba1-1" id="btn5-1">NFe por Município</button>
    <button type="button" class="btn btn-light btn-aba1-1" id="btn5-2">NFe Geral</button>
</div>
<div class="abas1-5-1">
    <button type="button" class="btn btn-light" id="btn5-1-1">Entradas</button>
    <button type="button" class="btn btn-light" id="btn5-1-2">Saídas</button>
</div>
<div class="abas1-5-2">
    <button type="button" class="btn btn-light" id="btn5-2-1">Entradas</button>
    <button type="button" class="btn btn-light" id="btn5-2-2">Saídas</button>
</div>
<div class="abas1-6">
    <button type="button" class="btn btn-light btn-aba1-1" id="btn6-1">NFe por Município</button>
    <button type="button" class="btn btn-light btn-aba1-1" id="btn6-2">NFe Geral</button>
</div>
<div class="abas1-6-1">
    <button type="button" class="btn btn-light" id="btn6-1-1">Entradas</button>
    <button type="button" class="btn btn-light" id="btn6-1-2">Saídas</button>
</div>
<div class="abas1-6-2">
    <button type="button" class="btn btn-light" id="btn6-2-1">Entradas</button>
    <button type="button" class="btn btn-light" id="btn6-2-2">Saídas</button>
</div>
<div class="middle">
    <table class="table table-bordered border-light">
        <thead>
            <tr class="table-header">
                <th scope="col" rowspan="2" class="th">Mês/Ano</th>
                <th scope="col" colspan="2" class="th">NFe Autorizadas para o Contribuinte</th>
                <th scope="col" colspan="3" class="th">NFe não Declaradas na EFD</th>
                <th scope="col" colspan="3" class="th">NFe Declaradas com Valor Diferente na EFD</th>
                <th scope="col" colspan="3" class="th">NFe não Registradas no SITRAM</th>
            </tr>
            <tr class="table-header">
                <th scope="col" class="th">Quantidade</th>
                <th scope="col" class="th">Valor</th>
                <th scope="col" class="th">Quantidade</th>
                <th scope="col" class="th">Valor</th>
                <th scope="col" class="th">%</th>
                <th scope="col" class="th">Quantidade</th>
                <th scope="col" class="th">Valor</th>
                <th scope="col" class="th">%</th>
                <th scope="col" class="th">Quantidade</th>
                <th scope="col" class="th">Valor</th>
                <th scope="col" class="th">%</th>
            </tr>
        </thead>
        <tbody class="tbody">
            <td>Total</td>
            <td>0</td>
            <td>0,00</td>
            <td>0</td>
            <td>0,00</td>
            <td></td>
            <td>0</td>
            <td>0,00</td>
            <td></td>
            <td>0</td>
            <td>0,00</td>
            <td></td>
        </tbody>
    </table>
</div>

<script src="{{asset('js/indicadores/nfe.js')}}"></script>
@endsection

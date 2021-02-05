@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css/indicadores/eventos_nfe.css')}}">

@section('content')
<div class="header">
    <p class="title"> Indicadores
        <i class="fas fa-chevron-right" id="arrow"></i>
        Eventos da NF-e
    </p>
</div>
<div class="abas">
    <button type="button" class="btn btn-light" id="btn1">Recebidas Manifestadas</button>
    <button type="button" class="btn btn-light" id="btn2">Recebidas Não Manifestadas</button>
    <button type="button" class="btn btn-light" id="btn3">Emitidas Manifestadas</button>
    <button type="button" class="btn btn-light" id="btn4">Emitidas Não Manifestadas</button>
</div>

<div class="middle">
    <table class="table table-bordered border-light">
        <thead>
            <tr class="table-header">
                <th scope="col" rowspan="2" class="th">Mês</th>
                <th scope="col" colspan="2" class="th">NF-e Autorizadas</th>
                <th scope="col" colspan="3" class="th">Confirmação da Operação pelo Destinatário</th>
                <th scope="col" colspan="3" class="th">Operação Não Realizada</th>
                <th scope="col" colspan="3" class="th">Desconhecimento da Operação pelo Destinatário</th>
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

<script src="{{asset('js/indicadores/eventos_nfe.js')}}"></script>
@endsection

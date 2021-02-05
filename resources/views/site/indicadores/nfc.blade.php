@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css/indicadores/nfc.css')}}">

@section('content')

<div class="header">
    <p class="title"> Indicadores
        <i class="fas fa-chevron-right" id="arrow"></i>
        Eventos da NF-e
    </p>
</div>

<div class="abas">
    <button type="button" class="btn btn-light" id="btn1">NFCe/CFe Autorizados</button>
    <button type="button" class="btn btn-light" id="btn2">Relação de NFCe/CFe</button>
    <button type="button" class="btn btn-light" id="btn3">Equipamento Emissores</button>
</div>

<div class="middle">
    <table class="table table-bordered border-light">
        <thead>
            <tr class="table-header">
                <th scope="col" rowspan="2" class="th">Mês</th>
                <th scope="col" colspan="2" class="th">CFe Autorizados</th>
                <th scope="col" colspan="2" class="th">NFCe Autorizados</th>
                <th scope="col" colspan="1" class="th">Divergência de Valores na EFD *</th>
            </tr>
            <tr class="table-header">
                <th scope="col" class="th">Quantidade</th>
                <th scope="col" class="th">Valor</th>
                <th scope="col" class="th">Quantidade</th>
                <th scope="col" class="th">Valor</th>
                <th scope="col" class="th">Valor</th>
            </tr>
        </thead>
        <tbody class="tbody">
        </tbody>
    </table>
</div>

<script src="{{asset('js/indicadores/nfc.js')}}"></script>
@endsection

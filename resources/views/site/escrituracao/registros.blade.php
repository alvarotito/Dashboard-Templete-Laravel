@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/escrituracao/registro.css') }}">

@section('content')
<div class="header">
    <p class="title"> Escrituração
        <i class="fas fa-chevron-right" id="arrow"></i>
        Registros de Entrada e Saída
    </p>
</div>

<div class="abas">
    <button type="button" class="btn btn-light" id="btn1">Registros de Entrada</button>
    <button type="button" class="btn btn-light" id="btn2">Registros de Saída</button>
</div>

<div class="middle">
    <table class="table table-bordered border-light">
        <thead>
            <tr class="table-header">
                <th scope="col" rowspan="1" class="th">Mês</th>
                <th scope="col" colspan="1" class="th">Valor Contábil</th>
                <th scope="col" colspan="1" class="th">BC. do ICMS</th>
                <th scope="col" colspan="1" class="th">ICMS Crédito</th>
                <th scope="col" colspan="1" class="th">Isentas</th>
                <th scope="col" colspan="1" class="th">BC. do ICMS ST</th>
                <th scope="col" colspan="1" class="th">ICMS ST</th>
                <th scope="col" colspan="1" class="th">Outros</th>
            </tr>
        </thead>
        <tbody class="tbody">
        </tbody>
    </table>
</div>

<script src="{{ asset('js/escrituracao/registro.js') }}"></script>
@endsection

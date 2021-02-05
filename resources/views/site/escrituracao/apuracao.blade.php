@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/escrituracao/apuracao.css') }}">

@section('content')
<div class="header">
    <p class="title"> Escrituração
        <i class="fas fa-chevron-right" id="arrow"></i>
        Apuração
    </p>
</div>

<div class="abas">
    <button type="button" class="btn btn-light" id="btn1">Entradas e Saídas</button>
    <button type="button" class="btn btn-light" id="btn2">ICMS Normal</button>
    <button type="button" class="btn btn-light" id="btn3">Entradas e Saídas - CTS</button>
    <button type="button" class="btn btn-light" id="btn4">Entradas e Saídas - CFOP</button>
    <button type="button" class="btn btn-light" id="btn5">Outros Valores do ICMS</button>
    <button type="button" class="btn btn-light" id="btn6">Outros Débitos e Créditos</button>
</div>

<div class="middle">
    <div class="row">
        <div class="input-group mb-3 group">
            <label class="input-group-text" for="inputGroupFile01">Período por Competência:</label>
            <input type="date" class="form-control" id="inputGroupFile01">
            <button type="button" class="btn btn-primary btn-sm btn-search" onclick="searchNfeGeral()"><i class="fas fa-search"></i></button>
        </div>
    </div>
    <span>Entradas</span>
    <table class="table table-bordered border-light">
        <thead>
            <tr class="table-header">
                <th scope="col" rowspan="1" class="th">Operação</th>
                <th scope="col" colspan="1" class="th">Valor Contábil</th>
                <th scope="col" colspan="1" class="th">BC. do ICMS</th>
                <th scope="col" colspan="1" class="th">ICMS Crédito</th>
                <th scope="col" colspan="1" class="th">Isentas</th>
                <th scope="col" colspan="1" class="th">Subst. Tribut.</th>
                <th scope="col" colspan="1" class="th">Não Tribut.</th>
                <th scope="col" colspan="1" class="th">Outros</th>
            </tr>
        </thead>
        <tbody class="tbody">
        </tbody>
    </table>
    <span>Saídas</span>
    <table class="table table-bordered border-light">
        <thead>
            <tr class="table-header">
                <th scope="col" rowspan="1" class="th">Operação</th>
                <th scope="col" colspan="1" class="th">Valor Contábil</th>
                <th scope="col" colspan="1" class="th">BC. do ICMS</th>
                <th scope="col" colspan="1" class="th">ICMS Crédito</th>
                <th scope="col" colspan="1" class="th">Isentas</th>
                <th scope="col" colspan="1" class="th">Subst. Tribut.</th>
                <th scope="col" colspan="1" class="th">Não Tribut.</th>
                <th scope="col" colspan="1" class="th">Outros</th>
            </tr>
        </thead>
        <tbody class="tbody">
        </tbody>
    </table>
</div>

<script>

</script>

<script src="{{ asset('js/escrituracao/apuracao.js') }}"></script>
@endsection

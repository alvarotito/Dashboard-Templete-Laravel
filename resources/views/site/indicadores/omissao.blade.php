@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/indicadores/omissao.css') }}">

@section('content')
<div class="header">
    <p class="title"> Indicadores
        <i class="fas fa-chevron-right" id="arrow"></i>
        Omissão
    </p>
</div>

<div class="middle">
    <table class="table table-bordered border-light">
        <thead>
            <tr class="table-header">
                <th scope="col" rowspan="2" class="th">Mês/Ano</th>
                <th scope="col" colspan="3" class="th">Tipo de Declaração</th>
                <th scope="col" rowspan="2" class="th">Regime de Recolhimento</th>
            </tr>
            <tr class="table-header">
                <th scope="col" colspan="1" class="th">DIEF</th>
                <th scope="col" colspan="1" class="th">EFD</th>
                <th scope="col" colspan="1" class="th">PGDAS-D</th>
            </tr>
        </thead>
        <tbody class="tbody">
        </tbody>
    </table>
</div>

<script src="{{ asset('js/indicadores/omissao.js') }}"></script>
@endsection

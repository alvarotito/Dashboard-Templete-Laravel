@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css/indicadores/mdfe.css')}}">

@section('content')
<div class="header">
    <p class="title"> Indicadores
        <i class="fas fa-chevron-right" id="arrow"></i>
        MDF-e
    </p>
</div>

<div class="middle">
    <table class="table table-bordered border-light">
        <thead>
            <tr class="table-header">
                <th scope="col" rowspan="2" class="th">Mês/Ano</th>
                <th scope="col" class="th">MDF-e Emitidos</th>
                <th scope="col" colspan="2" class="th">MDF-e em Aberto</th>
                <th scope="col" colspan="2" class="th">MDF-e Cancelados</th>
            </tr>
            <tr class="table-header">
                <th scope="col" class="th">Quantidade</th>
                <th scope="col" class="th">Quantidade</th>
                <th scope="col" class="th">%</th>
                <th scope="col" class="th">Quantidade</th>
                <th scope="col" class="th">%</th>
            </tr>
        </thead>
        <tbody class="tbody">
        </tbody>
    </table>
</div>

<script src="{{asset('js/indicadores/mdfe.js')}}"></script>
@endsection

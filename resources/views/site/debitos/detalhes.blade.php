@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/debitos/detalhes.css') }}">

@section('content')
<div class="header">
    <p class="title"> Débitos Fiscais
        <i class="fas fa-chevron-right" id="arrow"></i>
        Detalhes
    </p>
</div>

<div class="middle">
    <table class="table table-bordered border-light">
        <thead>
            <tr class="table-header">
                <th scope="col" rowspan="1" class="th">Data Vencimento</th>
                <th scope="col" colspan="1" class="th">Código</th>
                <th scope="col" colspan="1" class="th">Descrição</th>
                <th scope="col" colspan="1" class="th">Vencido</th>
                <th scope="col" colspan="1" class="th">Referência</th>
                <th scope="col" colspan="1" class="th">Saldo Devedor</th>
                <th scope="col" colspan="1" class="th">DAE</th>
            </tr>
        </thead>
        <tbody class="tbody">
        </tbody>
    </table>
</div>
@endsection

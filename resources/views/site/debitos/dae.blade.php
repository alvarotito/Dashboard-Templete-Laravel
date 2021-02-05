@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/debitos/dae.css') }}">

@section('content')
<div class="header">
    <p class="title"> Débitos Fiscais
        <i class="fas fa-chevron-right" id="arrow"></i>
        DAEs Emitidos
    </p>
</div>

<div class="middle">
    <table class="table table-bordered border-light">
        <thead>
            <tr class="table-header">
                <th scope="col" rowspan="1">Pesquisar</th>
            </tr>
        </thead>
        <tbody class="tbody">
            <tr>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Todos</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Código da Receita</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">Nosso Número</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">Situação</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">Período por Competência</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="button" class="btn">Pesquisar</button>
                </td>
            </tr>
        </tbody>
    </table>
    <table class="table table-bordered border-light">
        <thead>
            <tr class="table-header">
                <th scope="col" rowspan="1" class="th">Código</th>
                <th scope="col" colspan="1" class="th">Referência</th>
                <th scope="col" colspan="1" class="th">Data Vencimento</th>
                <th scope="col" colspan="1" class="th">Valor Principal</th>
                <th scope="col" colspan="1" class="th">Valor Multa</th>
                <th scope="col" colspan="1" class="th">Valor Juros</th>
                <th scope="col" colspan="1" class="th">Valor Devedor</th>
                <th scope="col" colspan="1" class="th">Situação do DAE</th>
            </tr>
        </thead>
        <tbody class="tbody">
        </tbody>
    </table>
</div>
@endsection

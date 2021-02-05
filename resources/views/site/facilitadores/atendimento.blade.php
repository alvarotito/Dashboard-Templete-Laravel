@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/facilitadores/atendimento.css') }}">

@section('content')
<div class="header">
    <p class="title"> Facilitadores
        <i class="fas fa-chevron-right" id="arrow"></i>
        Atendimento via Chat
    </p>
</div>

<div class="middle">
    <table class="table table-bordered border-light">
        <thead>
            <tr class="table-header">
                <th scope="col" colspan="2" class="th">Pesquisar por</th>
            </tr>
        </thead>
        <tbody class="tbody">
            <tr>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="radio1" value="option1" checked>
                        <label class="form-check-label" for="inlineRadio1">Protocolo</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="radio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Período</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="radio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">Assunto</label>
                    </div>
                </td>
            </tr>
            <tr id="toggle">
                <td>
                    <div class="row">
                        <div class="input-group mb-3 group">
                            <label class="input-group-text" for="inputGroupFile01">Protocolo</label>
                            <input type="text" class="form-control" id="inputGroupFile01">
                            <button type="button" class="btn btn-primary btn-sm btn-search"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <table class="table table-bordered border-light">
        <thead>
            <tr class="table-header">
                <th scope="col" colspan="1" class="th">Protocolo</th>
                <th scope="col" colspan="1" class="th">Data</th>
                <th scope="col" colspan="1" class="th">Assunto</th>
                <th scope="col" colspan="1" class="th">Avalição</th>
                <th scope="col" colspan="1" class="th">Transcrição</th>
            </tr>
        </thead>
        <tbody class="tbody">
        </tbody>
    </table>
</div>

<script src="{{ asset('js/facilitadores/atendimento.js') }}"></script>
@endsection

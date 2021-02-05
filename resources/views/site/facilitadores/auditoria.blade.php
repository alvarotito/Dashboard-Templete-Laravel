@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/facilitadores/auditoria.css') }}">

@section('content')
<div class="header">
    <p class="title"> Facilitadores
        <i class="fas fa-chevron-right" id="arrow"></i>
        Auditoria
    </p>
</div>

<div class="middle">
    <table class="table table-bordered border-light">
        <thead>
            <tr class="table-header">
                <th scope="col" colspan="2" class="th">Filtros da Solicitação</th>
            </tr>
        </thead>
        <tbody class="tbody">
            <tr>
                <td>
                    <div class="row">
                        <div class="input-group mb-3 group">
                            <label class="input-group-text" for="inputGroupFile01">Data inicial</label>
                            <input type="date" class="form-control" id="inputGroupFile01">
                            <label class="input-group-text" for="inputGroupFile01">Data final</label>
                            <input type="date" class="form-control" id="inputGroupFile01">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="row">
                        <div class="input-group mb-3 group">
                            <label class="input-group-text" for="inputGroupFile01">Chave Acesso</label>
                            <input type="text" class="form-control" id="inputGroupFile01">
                            <button type="button" class="btn btn-light btn-sm">Enviar</button>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <table class="table table-bordered border-light">
        <thead>
            <tr class="table-header">
                <th scope="col" colspan="2" class="th" width="50%">Data/Hora</th>
                <th scope="col" colspan="2" class="th">Ação</th>
            </tr>
        </thead>
        <tbody class="tbody">
        </tbody>
    </table>
</div>
@endsection

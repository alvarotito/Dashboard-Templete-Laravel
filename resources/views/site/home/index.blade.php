@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css/home.css')}}">

@section('content')
<div id="header">
    <p class="title">Home <i class="fas fa-chevron-right" id="arrow"></i> Resumo de Pendências Fiscais </p>

</div>

<div id="middle">
    <div class="container">
        <label for="ano" class="bold">Ano:</label>
        <select class="form-select form-select-lg" id="ano">
            <option value="0" selected> Todos </option>
            @foreach($anos as $data)
            <option value="{{$data->ano}}">{{$data->ano}}</option>
            @endforeach
        </select>

        <button type="button" class="btn btn-primary btn-sm btn-search" onclick="getResumoPendencias()"><i class="fas fa-search" id="arrow"></i></button>
        <p class="aviso"> <i class="fas fa-info-circle" id="arrow"></i><b> Somente para NF-e, Omissão e DIEF/EFD</b></p>
        <div class="row row-content">
            @foreach ($values as $value)
            <div class="col-6 coluna">
                <div class="card">
                    <span class="bold">NF-e Recebidas </span>
                    <span class="descricao">{{$value->descricao}}</span>
                    <div class="valor">{{$value->valor_notas}}</div>
                    <span class="date">{{$value->att_date}}</span>
                    <button type="button" class="btn btn-sm btn-modal" onclick='getNfePendencias("{{$value->id}}")'>
                        Detalhamento
                    </button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detalhamento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modalbody">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <table class="table table-striped table-bordered table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Emitente - CNPJ</th>
                            <th scope="col">Razão Social</th>
                            <th scope="col">Chave de Acesso</th>
                            <th scope="col">UF</th>
                            <th scope="col">Data de Emissão</th>
                            <th scope="col">N° NF-e</th>
                            <th scope="col">Valor NF-e</th>
                        </tr>
                    </thead>
                    <tbody class="data">
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-anterior" data-dismiss="modal">
                    Anterior
                </button>
                <button type="button" class="btn btn-primary btn-proximo" data-dismiss="modal">
                    Proximo
                </button>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/home.js')}}"></script>
@endsection

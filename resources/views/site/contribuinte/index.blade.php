@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/contribuinte/dados.css') }}">

@section('content')
<div class="header">
    <p class="title"> Contribuinte
        <i class="fas fa-chevron-right" id="arrow"></i>
        Dados Cadastrais
    </p>
</div>

<div class="abas">
    <button type="button" class="btn btn-light" id="btn1">Dados da Empresa</button>
    <button type="button" class="btn btn-light" id="btn2">Dados Complementares</button>
    <button type="button" class="btn btn-light" id="btn3">Quadro Societário</button>
    <button type="button" class="btn btn-light" id="btn4">Contadores</button>
    <button type="button" class="btn btn-light" id="btn5">Produradores</button>
</div>

<div class="middle">
    <div class="row">
        <div class="col-12">
            <span>Razão Social</span>
            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <span>Nome Fantasia</span>
            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
            <span>CNPJ</span>
            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
            <span>Início da Atividade</span>
            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
            <span>Bairro</span>
            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
            <span>Estado</span>
            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
            <span>Telefone</span>
            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="col-4">
            <span>CGF</span>
            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
            <span>Outros Estabelecimentos</span>
            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
            <span>Situação Cadastral</span>
            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
            <span>Município</span>
            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
            <span>CEP</span>
            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
            <span>Email</span>
            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <span>Endereço</span>
            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        </div>
    </div>
</div>
<script>

</script>
<script src="{{ asset('js/contribuinte/dados.js') }}"></script>
@endsection

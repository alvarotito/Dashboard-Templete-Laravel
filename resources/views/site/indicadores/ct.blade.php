@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/indicadores/cte.css')}}">

<div class="header">
    <p class="title"> Indicadores
        <i class="fas fa-chevron-right" id="arrow"></i>
        CT-e
    </p>
</div>

<div class="abas">
    <button type="button" class="btn btn-light" id="btn1">Emissor</button>
    <button type="button" class="btn btn-light" id="btn2">Tomador</button>
    <button type="button" class="btn btn-light" id="btn3">Crédito Indevido</button>
</div>
<div class="abas2">
    <button type="button" class="btn btn-light" id="btn1-1">CT-e Saída</button>
    <button type="button" class="btn btn-light" id="btn1-2">CT-e Saída Outros</button>
</div>
<div class="middle">
    <div class="content">
        <div class="content-content">
            <table class="table table-bordered border-light">
                <thead>
                    <tr class="table-header">
                        <th scope="col" rowspan="2" class="th">Mês</th>
                        <th scope="col" colspan="2" class="th">Emitidos</th>
                        <th scope="col" colspan="2" class="th">CT-e não declarados ou declarados com valor diferente na EFD</th>
                        <th scope="col" colspan="2" class="th">CT-e emitidos em contingência</th>
                        <th scope="col" colspan="3" class="th">CT-e cancelados</th>
                    </tr>
                    <tr class="table-header">
                        <th scope="col" class="th">Quantidade</th>
                        <th scope="col" class="th">Valor R$</th>
                        <th scope="col" class="th">Quantidade</th>
                        <th scope="col" class="th">Valor R$</th>
                        <th scope="col" class="th">Quantidade</th>
                        <th scope="col" class="th">%</th>
                        <th scope="col" class="th">Quantidade</th>
                        <th scope="col" class="th">Valor R$</th>
                        <th scope="col" class="th">%</th>
                    </tr>
                </thead>
                <tbody class="tbody">

                </tbody>
            </table>
        </div>
        <div class="content-content2">
            <table class="table table-bordered border-light">
                <thead>
                    <tr class="table-header">
                        <th scope="col" rowspan="2" class="th">Mês</th>
                        <th scope="col" colspan="2" class="th">CT-e de anulação de valores originalmente autorizados para tomador contribuinte</th>
                        <th scope="col" colspan="2" class="th">CT-e de substituição de valores</th>
                        <th scope="col" colspan="3" class="th">CT-e não registrados no SITRAM</th>
                    </tr>
                    <tr class="table-header">
                        <th scope="col" class="th">Quantidade</th>
                        <th scope="col" class="th">Valor R$</th>
                        <th scope="col" class="th">Quantidade</th>
                        <th scope="col" class="th">Valor R$</th>
                        <th scope="col" class="th">Quantidade</th>
                        <th scope="col" class="th">Valor R$</th>
                        <th scope="col" class="th">%</th>
                    </tr>
                </thead>
                <tbody class="tbody">

                </tbody>
            </table>
        </div>
    </div>
    <div class="content2">
        <table class="table table-bordered border-light">
            <thead>
                <tr class="table-header">
                    <th scope="col" rowspan="2" class="th">Mês</th>
                    <th scope="col" colspan="2" class="th">CT-e destinados ao contribuinte tomador do serviço</th>
                    <th scope="col" colspan="3" class="th">CT-e não declarados ou declarados com valor diferente na EFD</th>
                    <th scope="col" colspan="3" class="th">CT-e com NF-e não registrados no SITRAM</th>
                </tr>
                <tr class="table-header">
                    <th scope="col" class="th">Quantidade</th>
                    <th scope="col" class="th">Valor R$</th>
                    <th scope="col" class="th">Quantidade</th>
                    <th scope="col" class="th">Valor Base de Cálculo</th>
                    <th scope="col" class="th">Valor ICMS</th>
                    <th scope="col" class="th">Quantidade</th>
                    <th scope="col" class="th">Valor R$</th>
                    <th scope="col" class="th">%</th>
                </tr>
            </thead>
            <tbody class="tbody">

            </tbody>
        </table>
    </div>
    <div class="content3">
        <table class="table table-bordered border-light">
            <thead>
                <tr class="table-header">
                    <th scope="col" rowspan="2" class="th">Mês</th>
                    <th scope="col" colspan="3" class="th">CT-e declarados na EFD onde contribuinte não é o tomador do serviço</th>
                    <th scope="col" colspan="3" class="th">CT-e declarados repetidamente na EFD</th>
                </tr>
                <tr class="table-header">
                    <th scope="col" class="th">Quantidade</th>
                    <th scope="col" class="th">Valor Base de Calculo ICMS</th>
                    <th scope="col" class="th">Valor ICMS</th>
                    <th scope="col" class="th">Quantidade</th>
                    <th scope="col" class="th">Valor Base de Calculo ICMS</th>
                    <th scope="col" class="th">Valor ICMS</th>
            </thead>
            <tbody class="tbody">

            </tbody>
        </table>
    </div>
</div>

<!-- <table class="table table-bordered border-light">
        <thead>
            <tr class="table-header">
                <th scope="col" rowspan="2" class="th">Mês/Ano</th>
                <th scope="col" class="th">MDF-e Emitidos</th>
                <th scope="col" colspan="2" class="th">MDF-e em Aberto</th>
                <th scope="col" colspan="2" class="th">MDF-e Cancelados</th>
            </tr>
            <tr class="table-header">
                <th scope="col">Quantidade</th>
                <th scope="col">Quantidade</th>
                <th scope="col">%</th>
                <th scope="col">Quantidade</th>
                <th scope="col">%</th>
            </tr>
        </thead>
        <tbody class="tbody">
        </tbody>
    </table> -->
</div>

<script src="{{asset('js/indicadores/cte.js')}}"></script>
@endsection

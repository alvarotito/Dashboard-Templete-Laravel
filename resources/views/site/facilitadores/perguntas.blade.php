@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/facilitadores/perguntas.css') }}">

@section('content')
<div class="header">
    <p class="title"> Facilitadores
        <i class="fas fa-chevron-right" id="arrow"></i>
        Perguntas Frequentes
    </p>
</div>

<div class="middle">
    <table class="table table-bordered border-light">
        <thead>
            <tr class="table-header">
                <th scope="col" colspan="2" class="th">Pesquisar</th>
            </tr>
        </thead>
        <tbody class="tbody">
            <tr>
                <td>
                    <div class="row">
                        <div class="input-group mb-3 group">
                            <label class="input-group-text" for="inputGroupFile01">Pergunta</label>
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
                <th scope="col" colspan="2" class="th" width="50%">Dúvida do Usuário</th>
                <th scope="col" colspan="2" class="th">Solução</th>
            </tr>
        </thead>
        <tbody class="tbody">

        </tbody>
    </table>

</div>

@endsection

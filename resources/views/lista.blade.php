@extends('layout.app', ["current" => "lista"])

@section('body')

<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Lista de Usuários</h5>
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Data de Nascimento</th>
                    <th>Currículo</th>
                </tr>
            </thead>
            <tbody>    
@foreach($usuarios as $usu)
                <tr>
                    <td>{{$usu->id}}</td>
                    <td>{{$usu->nome}}</td>
                    <td>{{$usu->email}}</td>
                    <td>{{$usu->dataNasc}}</td>
                    <td>{{$usu->curriculo}}</td>
                </tr>
@endforeach
            </tbody>
        </table>
</div>

@endsection
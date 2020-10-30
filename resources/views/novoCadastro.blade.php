@extends('layout.app', ["current" => "cadastro"])

@section('body')

<div class="jumbotron bg-light border border-secondary">
    <div class="row">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <form action="/cadastro" method="POST">
                        @csrf
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="data">Data de Nascimento</label>
                        <input type="date" class="form-control" name="dataNasc" id="dataNasc">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="curriculo">Currículo: </label>
		                <input type="file" name="curriculo" id="curriculo"/>
                    </div>
                    <center><button type="submit" class="btn btn-primary btm-sm">Cadastrar</button></center>
                    </form>
                </div>
            </div>   
        </div>
    </div>
</div>
@endsection
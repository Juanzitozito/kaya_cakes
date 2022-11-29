@extends('base.index')

@section('container')
<div class="container" id="container-login">
    <h3>Login</h3>
    <form method="POST" enctype="multipart/form-data" action="/login/send">
        @csrf
        <div class="form-group mt-1">
          <label for="username">Nome de Usuário</label>
          <input type="username" class="form-control" name="username" placeholder="Insira seu nome de usuário" id="username">
        </div>
        <div class="form-group mt-1">
          <label for="password">Senha</label>
          <input type="password" class="form-control" name="password" placeholder="Insira sua Senha" id="password">
        </div>
        <button type="submit" class="btn">Entrar</button>
    </form>
</div>
@endsection

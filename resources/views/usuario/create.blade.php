@extends('base.index')

@section('container')
<div class="container" id="container-login">
    <h3>Login</h3>
    <form method="POST" enctype="multipart/form-data" action="/usuarios/store">
        @csrf
        <div class="form-group mt-1">
          <label for="name">Nome</label>
          <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group mt-1">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" id="email">
        </div>
        <div>
            <label for="username">Nome de Usuário</label>
            <input type="text" id="username" name="username" class="form-control">
        </div>
        <div>
            <label for="password">Senha</label>
            <input type="password" id="password" name="password" class="form-control">
        </div>
        <div>
            <label for="dtnasc">Senha</label>
            <input type="date" id="dtnasc" name="dtnasc" class="form-control">
        </div>
        <button type="submit" class="btn">criar</button>
    </form>
</div>
@endsection

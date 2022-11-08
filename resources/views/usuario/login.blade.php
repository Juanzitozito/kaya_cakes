@extends('base.index')

@section('container')
<div class="container" id="container-login">
    <h3>Login</h3>
    <img src="https://media.giphy.com/media/ErZ8hv5eO92JW/giphy.gif" width="100%" height="50%" frameBorder="0" >
    <form method="POST" enctype="multipart/form-data" action="/login/send">
        @csrf
        <div class="form-group mt-1">
          <label for="exampleInputEmail1">Nome de Usuário</label>
          <input type="username" class="form-control" name="username" placeholder="Insira seu nome de usuário">
        </div>
        <div class="form-group mt-1">
          <label for="exampleInputPassword1">Senha</label>
          <input type="password" class="form-control" name="password" placeholder="Insira sua Senha">
        </div>
        <button type="submit" class="btn">Entrar</button>
    </form>
</div>
@endsection

@extends('base.index')

@section('container')
<div class="container" id="container-login">
    <h3>Login</h3>
    <form method="POST" enctype="multipart/form-data" action="/sabores/update">
        @csrf
        <input type="hidden" name="id" value="{{$sabor->id}}">
        <div class="form-group mt-1">
          <label for="sabor">Sabor</label>
          <input type="text" class="form-control" name="sabor" id="sabor" value="{{$sabor->sabor}}" required>
        </div>
        <div class="form-group mt-1">
          <label for="preco">Valor</label>
          <input type="text" class="form-control" name="preco" id="preco" value="{{$sabor->preco}}" required>
        </div>
        <div class="form-group mt-1">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" name="descricao" id="descricao" value="{{$sabor->descricao}}">
        </div>
        <div>
            <label for="foto">Imagem</label>
            <input type="file" id="foto" name="foto" class="form-control" required>
        </div>
        <div class="mx-2">
            <h4>Disponível?</h4>
            <input type="radio" name="disponivel" id="sim" value="1">
            <label for="sim">Sim</label><br>

            <input type="radio" name="disponivel" id="nao" value="0">
            <label>Não</label>
        </div>
        <button type="submit" class="btn">criar</button>
    </form>
</div>
@endsection

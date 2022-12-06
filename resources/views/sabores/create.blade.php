@extends('base.index')

@section('container')
<div class="container" id="container-login">
    <h3>Login</h3>
    <form method="POST" enctype="multipart/form-data" action="/sabores/store">
        @csrf
        <div class="form-group mt-1">
          <label for="sabor">Sabor</label>
          <input type="text" class="form-control" name="sabor" id="sabor" required>
        </div>
        <div class="form-group mt-1">
          <label for="preco">Valor</label>
          <input type="number" class="form-control" name="preco" id="preco" required>
        </div>
        <div class="form-group mt-1">
            <label for="descricao">Sabor</label>
            <input type="text" class="form-control" name="descricao" id="descricao">
        </div>
        <div>
            <label for="foto">Imagem</label>
            <input type="file" id="foto" name="foto" class="form-control" required>
        </div>
        <button type="submit" class="btn">criar</button>
    </form>
</div>
@endsection

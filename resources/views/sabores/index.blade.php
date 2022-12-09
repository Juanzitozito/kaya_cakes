@extends('base.index')

@section('container')
    @foreach ($sabores as $sabor)
        <div class="card" style="width: 15rem;">
            <img src="{{$sabor->foto}}" class="card-img-top" alt="imagem do sabor">
            <div class="card-body">
                <h5 class="card-title">{{ $sabor->sabor }}</h5>
                <p class="card-text">{{ $sabor->descricao }}</p>
                <a href="/sabores/addcarrinho" class="btn btn-primary">carito</a>
                @if (Auth::user()->admin != 0)
                    <a href="/sabores/update/{{$sabor->id}}" class="btn btn-warning">editar</a>
                    <a href="/sabores/delete/{{$sabor->id}}" class="btn btn-danger">excluir</a>
                @endif
            </div>
        </div>
    @endforeach
@endsection

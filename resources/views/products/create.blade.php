@extends('layouts.app')

@section('conteudo')
    <h1>Adicionar Produto</h1>
    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nome</label><br>
            <input type="text" class="form-control" name="name" required><br>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Preço</label><br>
            <input type="text" class="form-control"  name="price"><br>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
@endsection

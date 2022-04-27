@extends('layouts.app')

@section('conteudo')

<h1>Editar Produto</h1>
<form action="{{ route('products.update', $product->id ) }}" method="post">
    @csrf
    @method('PUT')

    <label for="">Nome</label><br>
    <input type="text" name="name" value="{{ $product->name }}" required><br>
    <label for="">Preço</label><br>
    <input type="text" name="price" value="{{ $product->price }}"><br>
    <button type="submit">Salvar</button>
</form>
@endsection


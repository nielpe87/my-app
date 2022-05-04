@extends('layouts.app')

@section('conteudo')

<h1>Editar Categoria</h1>
<form action="{{ route('categories.update', $category->id ) }}" method="post">
    @csrf
    @method('PUT')

    <label for="">Nome</label><br>
    <input type="text" name="name" value="{{ $category->name }}" required><br>

    <button type="submit">Salvar</button>
</form>
@endsection


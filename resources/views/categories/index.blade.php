@extends('layouts.app')

@section('conteudo')
<h1>Categorias</h1>
<a href="{{ route('logout') }}">Sair</a> -
<a href="{{ route('categories.create') }}" class="btn btn-success">Adicionar</a>

<table class="table table-hover">
    <thead>

        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Opções</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category )
           <tr>
               <td>{{ $category->id }}</td>
               <td>{{ $category->name }}</td>

               <td>
                   <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Editar</a>
                   <a href="{{ route('categories.delete', $category->id) }}" class="btn btn-danger">Remover</a>
               </td>
           </tr>
        @endforeach
    </tbody>
</table>
@endsection





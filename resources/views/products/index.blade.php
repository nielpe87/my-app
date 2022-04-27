@extends('layouts.app')

@section('conteudo')
<h1>Produtos</h1>
<a href="{{ route('logout') }}">Sair</a> -
<a href="{{ route('products.create') }}" class="btn btn-success">Adicionar</a>

<table class="table table-hover">
    <thead>

        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Price</th>
            <th>Opções</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product )
           <tr>
               <td>{{ $product->id }}</td>
               <td>{{ $product->name }}</td>
               <td>{{ $product->price }}</td>
               <td>
                   <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Editar</a>
                   <a href="{{ route('products.delete', $product->id) }}" class="btn btn-danger">Remover</a>
               </td>
           </tr>
        @endforeach
    </tbody>
</table>
@endsection





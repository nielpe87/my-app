<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Produtos</h1>

    <table>
        <thead>

            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Price</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product )
               <tr>
                   <td>{{ $product->id }}</td>
                   <td>{{ $product->name }}</td>
                   <td>{{ $product->price }}</td>
               </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- <a href="{{ route('multiplication.create') }}"  >
    <p>Ajouter</p>
</a> -->
<table>
    <tr>
        <th>Id</th>
        <th>Nombre 1</th>
        <th>Nombre 2</th>
        <th>Produit</th>
        <th>Commentaire</th>
    </tr>
    @foreach($multiplications as $multiplication)
    <tr>
        <td>{{$multiplication->id}}</td>
        <td>{{$multiplication->nombre1}}</td>
        <td>{{$multiplication->nombre2}}</td>
        <td>{{$multiplication->produit}}</td>
        <td>{{$multiplication->commentaire}}</td>
    </tr>
    
    @endforeach
</table>
</body>
</html>
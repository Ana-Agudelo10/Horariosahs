<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
        <thead>
            <tr>
                <th>Numero de documento</th>
                <th>Nombre del instructor</th>
                <th>Apellido del instructor</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mostrar as $a)
            <tr>
                <th>{{$a->nro_doc}}</th>
                <th>{{$a->nombre}}</th>
                <th>{{$a->apellido}}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
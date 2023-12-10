<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <H1>FUNCIONO</H1>
    @foreach ($documentos as $documento)
    <p>{{$documento ->documento}}</p>
    <p>{{$documento->estado}}</p>
  @endforeach
</body>
</html>
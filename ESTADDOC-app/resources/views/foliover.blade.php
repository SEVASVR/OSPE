<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    @vite(['resources/css/app.scss','resources/js/app.js'])
    <title>SEBAS</title>
</head>


<body>
    <nav class="navbar navbar-light bg-light">
        <form class="container-fluid justify-content-start">
            <a href="{{route('consultarr')}}"><button id="consultar" class="btn btn-info" type="button">CONSULTAR </button></a>
            <a href="{{route('editarr')}}"><button id ="cerrar" class="btn btn-info" type="button">CERRAR</button></a>
        </form>
      </nav>
      <div class ="principal">
            <h1>SEBAS</h1>
            <form method="post" action="/CONSULTAR">
              @csrf
              <label for="documento">TIPO DE DOCUMENTO</label>
              <input type="text" class="input" name="documento" required>
              <!--<label for="consull">NUMERO DE DOCUMENTO</label>
              <input type="text" id="input" name="consull">-->
              <button type="submit" class="btn btn-info">CONSULTAR</button>
          </form>
      </div>  
        @foreach ($documentos as $documento)
          <p>{{$documento ->documento}}</p>
          <p>{{$documento->estado}}</p>
        @endforeach
</body>
</html>
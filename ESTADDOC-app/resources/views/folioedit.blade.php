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
            <label for="">FOLIO</label>
            <input type="text" class="input">
            <label for="">CEDULA</label>
            <input type="text" id="input">
            <button type="button" class="btn btn-info">CERRAR</button>
      </div>  
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
<!-----------------BootstrapCDN------------------------------>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!--También los enlaces <href> contienen el código  {{url(‘/ruta-de-pagina’)}} para redireccionar a las rutas de páginas creadas anteriormente.--->


</head>
<body>
  <!-----------------Header con barra de menu------------------------------>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Prueba B&L</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/contacto/')}}">Contacto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{url('/servicios/')}}">Servicios</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>
<!-----------------Seccion de contenido------------------------------>
	<div class="container">
		@yield('contenido')
	</div>
<!-----------------Footer de pagina------------------------------>
  <nav class="fixed-bottom navbar-light bg-light">
      <div class="text-center">
       © Todos los Derechos reservados .
      </div>
  </nav>

</body>
</html>
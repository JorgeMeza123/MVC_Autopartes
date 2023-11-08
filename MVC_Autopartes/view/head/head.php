<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php
        echo (empty($_GET['id'])) 
        ? ((strpos($_SERVER['REQUEST_URI'],'create')) ? "Agregando nuevo usuario" : "Index")
        : ((strpos($_SERVER['REQUEST_URI'],'show')) ? "Detalles del registro ".$_GET['id'] : "Actualizar registro ".$_GET['id'] );
    ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid bg-dark p-2 mb-3">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/MVC_Autopartes/index.php">Inicio Autopartes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Inventario
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/MVC_Autopartes/view/username/index.php">Inventario</a></li>
                    <li><a class="dropdown-item" href="/MVC_Autopartes/view/username/create.php">Agregar al inventario</a></li>
                </ul>
                </li>
            </ul>
            </div>
            <p class="text-white pt-4">Jorge Arturo Meza Mendez 5J Autopartes</p>
        </div>
    </nav>
    </div>
<div class="container-fluid">

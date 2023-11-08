<?php
    require_once("c://xampp/htdocs/MVC_Autopartes/controller/usernameController.php");
    $obj = new usernameController();
    $obj->guardar($_POST['nombre_pieza'],$_POST['marca_pieza'],$_POST['material_pieza'],$_POST['tamano_pieza'],$_POST['stock'],$_POST['precio_unitario'],$_POST['valor_total']);
?>
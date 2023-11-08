<?php
    require_once("c://xampp/htdocs/MVC_Autopartes/controller/usernameController.php");
    $obj = new usernameController();
    $obj->delete($_GET['id']);

?>
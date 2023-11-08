<?php
    require_once("c://xampp/htdocs/MVC_Autopartes/view/head/head.php");
    require_once("c://xampp/htdocs/MVC_Autopartes/controller/usernameController.php");
    $obj = new usernameController();
    $date = $obj->show($_GET['id']);
?>
<h2 class="text-center">Detalles del registro</h2>
<div class="pb-3">
    <a href="index.php" class="btn btn-primary">Regresar</a>
    <a href="edit.php?id=<?= $date[7]?>" class="btn btn-success">Actualizar</a>
    
    <!-- Button trigger modal -->
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el producto?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Una vez eliminado no se podra recuperar el registro
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
            <a href="delete.php?id=<?= $date[7]?>" class="btn btn-danger">Eliminar</a>
            <!-- <button type="button" >Eliminar</button> -->
        </div>
        </div>
    </div>
    </div>
</div>

<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">Nombre del producto</th>
            <th scope="col">Marca del producto</th>
            <th scope="col">Material del producto</th>
            <th scope="col">Tamaño de la pieza</th>
            <th scope="col">Cantidad en  stock</th>
            <th scope="col">Precio unitario</th>
            <th scope="col">Valor total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $date["nombre_pieza"]?></td>
            <td scope="col"><?= $date["marca_pieza"]?></td>
            <td scope="col"><?= $date["material_pieza"]?></td>
            <td scope="col"><?= $date["tamano_pieza"]?></td>
            <td scope="col"><?= $date["stock"]?></td>
            <td scope="col"><?= $date["precio_unitario"]?></td>
            <td scope="col"><?= $date["valor_total"]?></td>
        </tr>
    </tbody>
</table>



<?php
    require_once("c://xampp/htdocs/MVC_Autopartes/view/head/footer.php");
?>
<?php
    require_once("c://xampp/htdocs/MVC_Autopartes/view/head/head.php");
?>


    <form action="store.php" method="POST" autocomplete="off">
    <div class="col-3 mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre de la pieza</label>
        <input type="text" name="nombre_pieza" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="col-3 mb-3">
        <label for="exampleInputEmail1" class="form-label">Marca de la pieza</label>
        <input type="text" name="marca_pieza" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="col-3 mb-3">
        <label for="exampleInputEmail1" class="form-label">Material de la pieza</label>
        <input type="text" name="material_pieza" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="col-3 mb-3">
        <label for="exampleInputEmail1" class="form-label">Tamaño de la pieza</label>
        <input type="text" name="tamano_pieza" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="col-3 mb-3">
        <label for="exampleInputEmail1" class="form-label">Cantidad en Stock</label>
        <input type="number" min="1" name="stock" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="col-3 mb-3">
        <label for="exampleInputEmail1" class="form-label">Precio unitario de la pieza</label>
        <input type="int" name="precio_unitario" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="col-3 mb-3">
        <label for="exampleInputEmail1" class="form-label">Valor total</label>
        <input type="int" name="valor_total" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>
    </form>

<?php
    require_once("c://xampp/htdocs/MVC_Autopartes/view/head/footer.php");
?>
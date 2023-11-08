<?php
    require_once("c://xampp/htdocs/MVC_Autopartes/view/head/head.php");
    require_once("c://xampp/htdocs/MVC_Autopartes/controller/usernameController.php");
    $obj = new usernameController();
    $user = $obj->show($_GET['id']);
?>
  <form action="update.php" method="post" autocomplete="off">
    <h2>Modificando Registro</h2>
    <div >
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
        <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $user[7]?>">
        </div>
    </div>

        <div>
            <label for="staticEmail" class="col-sm-2 col-form-label">Nombre de la pieza</label>
            <div class="col-sm-10">
            <input type="text" name="nombre_pieza"  class="form-control" id="staticEmail" value="<?= $user[0]?>">
            </div>
        </div>
        <div>
            <label for="inputPassword" class="col-sm-2 col-form-label">Marca de la pieza</label>
            <div class="col-sm-10">
                <input type="textr" name="marca_pieza" class="form-control" id="inputPassword" value="<?= $user[1]?>">
            </div>
        </div>
        <div>
            <label for="staticEmail" class="col-sm-2 col-form-label">Material de la pieza</label>
            <div class="col-sm-10">
            <input type="text" name="material_pieza"  class="form-control" id="staticEmail" value="<?= $user[2]?>">
            </div>
        </div>
        <div>
            <label for="inputPassword" class="col-sm-2 col-form-label">Tamaño de la pieza</label>
            <div class="col-sm-10">
                <input type="text" name="tamano_pieza" class="form-control" id="inputPassword" value="<?= $user[3]?>">
            </div>
        </div>

    
        <div>
            <label for="staticEmail" class="col-sm-2 col-form-label">Cantidad en Stock</label>
            <div class="col-sm-10">
            <input type="number" name="stock"  class="form-control" id="staticEmail" value="<?= $user[4]?>">
            </div>
        </div>
        <div>
            <label for="inputPassword" class="col-sm-2 col-form-label">Precio unitario de la pieza</label>
            <div class="col-sm-10">
                <input type="int" name="precio_unitario" class="form-control" id="inputPassword" value="<?= $user[5]?>">
            </div>
        </div>
        <div>
            <label for="staticEmail" class="col-sm-2 col-form-label">Valor total</label>
            <div class="col-sm-10">
            <input type="int" name="valor_total"  class="form-control" id="staticEmail" value="<?= $user[6]?>">
            </div>
        </div>
    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $user[0]?>">Cancelar</a>
    </div>
  </form>
<?php
    require_once("c://xampp/htdocs/MVC_Autopartes/view/head/footer.php");
?>
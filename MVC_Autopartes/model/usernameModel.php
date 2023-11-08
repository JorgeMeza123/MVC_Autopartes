<?php
    class usernameModel{
        private $PDO;
        public function __construct()
        {
            require_once("c://xampp/htdocs/MVC_Autopartes/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($nombre_pieza,$marca_pieza,$material_pieza,$tamano_pieza,$stock,$precio_unitario,$valor_total){
            $stament = $this->PDO->prepare("INSERT INTO tbl_inventario(`nombre_pieza`,`marca_pieza`,`material_pieza`,`tamano_pieza`,`stock`,`precio_unitario`,`valor_total`) VALUES(:nombre_pieza,:marca_pieza,:material_pieza,:tamano_pieza,:stock,:precio_unitario,:valor_total);ALTER TABLE tbl_inventario DROP COLUMN id;ALTER TABLE tbl_inventario ADD COLUMN id int AUTO_INCREMENT PRIMARY KEY;");
            $stament->bindParam(":nombre_pieza",$nombre_pieza);
            $stament->bindParam(":marca_pieza",$marca_pieza);
            $stament->bindParam(":material_pieza",$material_pieza);
            $stament->bindParam(":tamano_pieza",$tamano_pieza);
            $stament->bindParam(":stock",$stock);
            $stament->bindParam(":precio_unitario",$precio_unitario);
            $stament->bindParam(":valor_total",$valor_total);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }
        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM tbl_inventario where id = :id limit 1");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT `id`,`nombre_pieza`,`marca_pieza`,`material_pieza`,`tamano_pieza`,`stock`,`precio_unitario`,`valor_total` FROM tbl_inventario");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function update($id,$nombre_pieza,$marca_pieza,$material_pieza,$tamano_pieza,$stock,$precio_unitario,$valor_total){
            $stament = $this->PDO->prepare("UPDATE tbl_inventario SET nombre_pieza = :nombre_pieza , marca_pieza = :marca_pieza , material_pieza = :material_pieza , tamano_pieza = :tamano_pieza , stock = :stock , precio_unitario = :precio_unitario , valor_total = :valor_total WHERE id = :id");
            $stament->bindParam(":nombre_pieza",$nombre_pieza);
            $stament->bindParam(":marca_pieza",$marca_pieza);
            $stament->bindParam(":material_pieza",$material_pieza);
            $stament->bindParam(":tamano_pieza",$tamano_pieza);
            $stament->bindParam(":stock",$stock);
            $stament->bindParam(":precio_unitario",$precio_unitario);
            $stament->bindParam(":valor_total",$valor_total);
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $id : false;
        }
        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM tbl_inventario WHERE id = :id;ALTER TABLE tbl_inventario DROP COLUMN id;ALTER TABLE tbl_inventario ADD COLUMN id int AUTO_INCREMENT PRIMARY KEY;");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false;
        }
    }

?>
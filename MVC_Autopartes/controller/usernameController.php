<?php
    class usernameController{
        private $model;
        public function __construct()
        {
            require_once("c://xampp/htdocs/MVC_Autopartes/model/usernameModel.php");
            $this->model = new usernameModel();
        }
        public function guardar($nombre_pieza,$marca_pieza,$material_pieza,$tamano_pieza,$stock,$precio_unitario,$valor_total){
            $id = $this->model->insertar($nombre_pieza,$marca_pieza,$material_pieza,$tamano_pieza,$stock,$precio_unitario,$valor_total);
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:show.php");
        }
        public function show($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
        }
        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }
        public function update($id,$nombre_pieza,$marca_pieza,$material_pieza,$tamano_pieza,$stock,$precio_unitario,$valor_total){
            return ($this->model->update($id,$nombre_pieza,$marca_pieza,$material_pieza,$tamano_pieza,$stock,$precio_unitario,$valor_total) != false) ? header("Location:show.php?id=".$id) : header("Location:show.php");
        }
        public function delete($id){
            return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id) ;
        }
    }

?>
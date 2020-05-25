<?php
require_once 'models/product.model.php';
require_once 'views/product.view.php';
require_once 'models/item.model.php';

class ProductController {

    private $model;
    private $view;
    
    public function __construct() {
        $this->model = new ProductModel();
        $this->view = new ProductView();
       
    }

    public function  showProducts(){
        // pido las tareas al MODELO
         $productos=$this->model->getAll();
         $esAdmin=true;                         //simulación de true=logueado o false NO Logueado.

        // actualizo la vista
        $this->view->showProduct($productos,$esAdmin);
    }

    public function showProductsByItem($rubro){
        
        $productos=$this->model->getProductsByItem($rubro);
        
       
        // actualizo la vista
        $this->view->showProductRubros($productos);
    }
    public function ViewProduct($id){
        
        $producto=$this->model->getone($id);
       
        // actualizo la vista
        $this->view->ViewOne($producto);
    }
}
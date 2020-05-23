<?php
 require_once 'controllers/product.controller.php';
 require_once 'controllers/item.controller.php';
  
    // definimos la base url de forma dinamica
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    // define una acción por defecto
    if (empty($_GET['action'])) {
        $_GET['action'] = 'listar';
    } 
     

    // toma la acción que viene del usuario y parsea los parámetros
    $accion = $_GET['action']; 
    $parametros = explode('/', $accion);
    if (empty($parametros[0])){
        $parametros[0] == 'listar';
    };
    

    // decide que camino tomar según TABLA DE RUTEO
    switch ($parametros[0]) {
        
        case 'listar': // /lista los productos   ->   showProd()
            // instanciando un objeto de la clase ProdController               
                $controller = new ProductController();
                $controller->showProducts();           
        break;

        case 'listrubros': // /lista los rubros   ->   showRubros()
            // instanciando un objeto de la clase ItemController

            $controller = new ItemController();
            $controller->showItems();
        break;

                      
        default: 
          echo "Error de enrutamiento";
            
        break;
    }
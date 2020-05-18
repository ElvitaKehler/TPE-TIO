<?php
  
    // definimos la base url de forma dinamica
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    // define una acción por defecto
    if (empty($_GET['action'])) {
        $_GET['action'] = 'listar';
    } 
     

    // toma la acción que viene del usuario y parsea los parámetros
    $accion = $_GET['action']; 
    $parametros = explode('/', $accion);
    

    // decide que camino tomar según TABLA DE RUTEO
    switch ($parametros[0]) {
        case 'insertar':
            
        break;
        case 'listar': // /lista los productos   ->   showProd()
            // instanciando un objeto de la clase ProdController
            
        break;

        case 'listrubros': // /lista los rubros   ->   showRubros()
            // instanciando un objeto de la clase RubroController
           
        break;
        case 'productos_por_rubros': // /lista productos por rubro /n  ->   showRubrosPOrRubro()
            // instanciando un objeto de la clase RubroController
            
            
           
        break;
        case 'verproducto': // /ver el detalle de un producto/n  ->   ViewProduct()
                      
           
            
        break;        
        case 'admin':   //ACCESO PARA EL ADMINISTRADOR

                //MUESTRA LOS FORMULARIOS
        break;

        case 'altaprod':    //Alta a nuevo producto
           
           
        break;

        case 'altaItem':  //Alta a nuevo rubro
          echo "Doy de alta el Item"; 
           
        break;


         default: 
          echo "Error de enrutamiento";
            
        break;
    }
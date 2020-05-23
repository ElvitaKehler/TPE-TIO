<?php
require_once('libs/Smarty.class.php');

class ProductView {

    

    public function showProduct($productos){
            
        $smarty = new Smarty();
        $smarty->assign("base_url", BASE_URL);
        $smarty->assign("listaProductos", $productos);
       
    
        $smarty->display('showProduct.tpl');
        
    }

    
}
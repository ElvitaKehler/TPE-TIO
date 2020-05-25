<?php
require_once('libs/Smarty.class.php');

class ProductView {

    

    public function showProduct($productos,$esAdmin){
            
        $smarty = new Smarty();
        $smarty->assign("base_url", BASE_URL);
        $smarty->assign("listaProductos", $productos);
        $smarty->assign("esadmin",$esAdmin);
    
        $smarty->display('showProduct.tpl');
        
    }

    public function showProductRubros($productos){
       // var_dump($productos);die;
        $smarty = new Smarty();
        $smarty->assign("base_url", BASE_URL);
        $smarty->assign("listProductsByItem", $productos);
        

        $smarty->display('showProductRubros.tpl');
        
    }
    
    public function ViewOne($id){ 
    
        $smarty = new Smarty();
        $smarty->assign("base_url", BASE_URL);
        $smarty->assign("identif", $id);

        $smarty->display('ViewOne.tpl');
    
        
    }

 
   
}
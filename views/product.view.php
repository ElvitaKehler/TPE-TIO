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
<<<<<<< HEAD
        
=======
>>>>>>> 7fc8c32b24c20f186d63eb4c523d874f1eca76e7

        $smarty->display('showProductRubros.tpl');
        
    }
    
<<<<<<< HEAD
    public function ViewOne($id){ 
    
        $smarty = new Smarty();
        $smarty->assign("base_url", BASE_URL);
        $smarty->assign("identif", $id);

        $smarty->display('ViewOne.tpl');
    
        
    }

 
=======
>>>>>>> 7fc8c32b24c20f186d63eb4c523d874f1eca76e7
   
}
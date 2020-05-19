<?php
//require_once('libs/Smarty.class.php');

class ItemView
{

    public function items($rubros)    
    {
        //var_dump($rubros[0]->id_rubro);die; 
        $smarty = new Smarty();
        $smarty->assign("base_url", BASE_URL);
        $smarty->assign("listarubros", $rubros);
       
       // $smarty->display('items.tpl');
    }


    
}

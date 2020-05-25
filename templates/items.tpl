{include 'header.tpl'}

<table class='table table-hover table-striped table-bordered table table-condensed' style='width:900px'>
       
       <tr style='color:blue'><th scope='col'><h2> Rubro disponibles </h2></th><th scope='col'>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                </span>
                </th>
        </tr>
        
        </table>
<<<<<<< HEAD
        
=======
       
>>>>>>> 7fc8c32b24c20f186d63eb4c523d874f1eca76e7
<table class='table table-hover table-striped table-bordered table table-condensed' style='width:400px'>
      
       <tr style='color:blue'><th scope='col'>RUBRO</th>
        
       
        {foreach $listarubros item= rubro} 
            
           <tr>
             <td><a href='productos_por_rubros/{$rubro->id_rubro}' class='btn btn-link '>{strtoupper($rubro->nombre)}</a>  
             
            </tr>
        {/foreach}
{include 'footer.tpl'} 
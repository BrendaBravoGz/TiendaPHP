 <?php
    require_once("config.php");
    require_once("controlador/index.php");

   if(isset($_GET['OrdPre']))
      modeloController::menorprecio();
   elseif(isset($_GET['OrdCal']))
      modeloController::mejorcalificacion();
   elseif(isset($_GET['AbrirProd']))
      modeloController::abrirproducto();
   elseif(isset($_GET['AgregarCarrito']))
      modeloController::agregarcarrito();
   else
      modeloController::index();  

 ?>

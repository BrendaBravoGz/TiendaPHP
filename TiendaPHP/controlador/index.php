<?php
    require_once("modelo/index.php");
    class modeloController{
        private $model;
        public function __construct(){
            $this->model = new Modelo();
        }
        //mostrar :o
        static function index(){
            $producto =new Modelo();
            $datos = $producto->mostrar("infobasica","1");
            require_once("vista/index.php");
        }
        static function menorprecio(){
            $producto =new Modelo();
            $datos = $producto->ordenarmenor("infobasica","Precio");
            require_once("vista/index.php");
        }
        static function mejorcalificacion(){
            $producto =new Modelo();
            $datos = $producto->ordenarmayor("infobasica","CalificacionPromedio");
            require_once("vista/index.php");
        }
        static function abrirproducto(){
                $Modelo=$_REQUEST['Modelo'];
                $producto =	new Modelo();
                $datos=$producto->mostrar("infobasica","Modelo=".$Modelo); 
                $PromComentario = $producto-> contarComentarios("","comentarios")
                $datosComentarios = $producto -> mostrarComentario ("comentarios","id_Modelo=".$Modelo);

            require_once("vista/producto.php");
        }
        static function agregarcarrito(){
                $Modelo=$_REQUEST['Modelo'];
                $producto = new Modelo();
                $datos=$producto-> $producto;
        }
        
    }
?>
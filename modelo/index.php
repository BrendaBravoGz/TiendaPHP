<?php
class Modelo{
    private $Modelo;
    private $db;
    private $datos;
    private $datosComentarios;
    public function __construct(){
        $this->Modelo = array();
        $this-> db = new PDO('mysql:host=localhost;dbname=lightagency',"root","");
    }
    public function mostrar ($tabla, $condicion){
        $consulta="select * from " . $tabla . " where " . $condicion . ";";
        $resu =$this->db->query($consulta);
        while($filas = $resu->FETCHALL(PDO::FETCH_ASSOC)){
            $this->datos[]=$filas;
        }
        return $this->datos;
    }
    public function mostrarComentario ($tabla, $condicion){
        $consulta="select * from " . $tabla . " where " . $condicion . ";";
        $resu=$this->db->query($consulta);
        while($filas = $resu ->FETCHALL(PDO::FETCH_ASSOC)){
            $this->datosComentarios[]=$filas;
        }
        return $this ->datosComentarios;
    }
    public function ordenarmenor ($tabla,$condicion){
        $consulta="select * from " . $tabla . " order by " . $condicion . ";";
        $resu = $this->db->query($consulta);
        while($filas = $resu ->FETCHALL(PDO::FETCH_ASSOC)){
            $this->datos[]=$filas;
        }
        return $this->datos;
    }
    public function ordenarmayor ($tabla,$condicion){
        $consulta="select * from " . $tabla . " order by " . $condicion . " desc;";
        $resu = $this->db->query($consulta);
        while($filas = $resu ->FETCHALL(PDO::FETCH_ASSOC)){
            $this->datos[]=$filas;
        }
        return $this->datos;
    }
    public function contarComentarios($condicion,$tabla){
        $consulta= "select count" . $condicion . "from" . $tabla;
    }
    public function agregarProductoAlCarrito($Modulo){
        $idSesion = session_id();
        $consulta="insert into ";
    }
}
?>
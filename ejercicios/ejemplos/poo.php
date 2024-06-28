<?php 

//! Clase -> class : Fabrica.
//! Propiedades: elementos dentro del almacen.
//! Constructor: Maquinas dentro de una fabrica.
//! Metodo: Cosas que van a realizar los objetos.
//! Parametro: cuantitativo y cualitativo
//! Instancia: la creación de un nuevo objeto


class carros {
    // propiedades
    public $marca;
    public $color;
    public $estatusMotor = false;

    // Contructor
    public function __construct($marca,$color)
    {
        $this->marca = $marca;
        $this->color = $color;
    }

    // Metodos
    public function encenderMotor(){
        $this->estatusMotor = true;
        echo "El motor está encendido <br>";
    }

    public function apagarMotor(){
        $this->estatusMotor = false;
        echo "El motor está apagado <br>";
    }

    public function getEstatusMotor(){
        return $this->estatusMotor 
        ? "El motor está en marcha <br>" 
        : "El motor está detenido <br>";
    }

    public function getColor(){
        echo $this->color ."<br>";
    }

    public function getMarca(){
        echo $this->marca ."<br>";
    }
}

//Intanciar

$carroUno = new carros("Chevrolet","Negro");
$carroDos = new carros("Tesla","Negro");

$carroUno -> encenderMotor();
echo $carroUno->getEstatusMotor();
$carroUno->apagarMotor();
echo $carroUno->getEstatusMotor();

$carroDos->getColor();
$carroDos->getMarca();
?>
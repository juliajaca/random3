<?php 
  

  class Randomizer {

    public $conexion;
 
    public function __construct($servidor, $usuario, $password, $bd){
        $this->conexion = new \mysqli($servidor, $usuario, $password, $bd);
    }
 
   
 


function randomizer(){

    
    $alumnos=[
        'Alexis',
        'Luis',
        'David',
        'Jordi',
        'Petro',
        'Alejandro',
        'Fran',
        'Adrian',
        'Lolo',
        'Cristian',
        'Jaume',
        'Mateo',
        'Jose',
        'Julia',
        'Jorge',
        'Toni'

    ];

    shuffle($alumnos); //mezclo los valores del array
    $contador =0; //creo un contador para poder imprimir las parejas

    foreach ($alumnos as $valor) {
        if ($contador%2==0){ // si el contador es par, me pone un nombre y un guion
            echo $valor.'-';
        } else {             //si el contador es impar, me hace un salto de linea
            echo $valor.'<br>';
        }
        $contador=$contador+1; //incremento el valor del contador

    };


}



 // FIn de la clase
}
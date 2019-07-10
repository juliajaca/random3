<?php 
  
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
    $arrayRes = $alumnos;
    $primero = $ele1 = array_shift($alumnos);
    while(count($alumnos)){
        $ele2 = array_rand($alumnos);
        $arrayRes[$ele1] = $alumnos[$ele2];
        $ele1 = $alumnos[$ele2];
        array_splice($alumnos, $ele2, 1);
    }
    $res[$ele1] = $primero;
    print_r($res);
}
randomizer();
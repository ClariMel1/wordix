<?php
include_once("wordix.php");



/******/
/* DATOS DE LOS INTEGRANTES ***/
/******/

/* - RIOS DIEGO - legajos 4877 - mail:diegoavilaaa0@gmail.com - github:diegoavila1
- MIGUEL SOTO - legajos 4866 - mail:msg.soto16@gmail.com - github:MiguelSoto29
- CLARA PELOZO - legajos 4938 - mail:clara.pelozo@est.fi.uncoma.edu.ar - github:ClariMel1
/*



/******/
/* DEFINICION DE FUNCIONES **/
/******/

/**
 * Obtiene una colección de palabras
 * @return array
 */
function cargarColeccionPalabras()
{
    $coleccionPalabras = [
        "MUJER", "QUESO", "FUEGO", "CASAS", "RASGO",
        "GATOS", "GOTAS", "HUEVO", "TINTO", "NAVES",
        "VERDE", "MELON", "YUYOS", "PIANO", "PISOS",
        "CEBRA", "MANGO", "LINCE", "FLAMA", "GRANO"]; 
    return ($coleccionPalabras);
}




/* COMPLETAR* */



/******/
/** PROGRAMA PRINCIPAL **/
/******/

echo "Ingrese su nombre: ";
$nombre=trim(fgets(STDIN));
escribirMensajeBienvenida($nombre);
do{
    echo "1- Jugar al wordix con una palabra elegida"."\n";
    echo "2- Jugar al wordix ocn una palabra aleatoria"."\n";
    echo "3- Mostrar una partida"."\n";
    echo "4- Mostrar la primera partida ganadora"."\n";
    echo "5- Mostrar resumen de jugador"."\n";
    echo "6- Mostrar listado de partidas ordenadas por jugador y por palabra"."\n";
    echo "7- Agregar una palabra de 5 letras en wordix"."\n";
    echo "8- Salir"."\n";
    echo "Selecciona una opción: ";
    $respuesta = trim(fgets(STDIN));
    if ($respuesta == 1){
    
    }elseif ($respuesta == 2){
    
    }elseif ($respuesta == 3){
    
    }elseif ($respuesta == 4){
    
    }elseif ($respuesta == 5){
    
    }elseif ($respuesta == 6){
    
    }elseif ($respuesta == 7){
        $palabra5Letras=leerPalabra5Letras ();

    }elseif ($respuesta == 8){
        
    }else{
        echo "Ingrese una opción valida: ";
    }
    
}while($respuesta != 8);

//Declaración de variables:


//Inicialización de variables:


//Proceso:

//$partida = jugarWordix("MELON", strtolower("MaJo"));
//print_r($partida);
//imprimirResultado($partida);



/*
do {
 //   $opcion = ...;

    
    switch ($opcion) {
        case 1: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 1

            break;
        case 2: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 2

            break;
        case 3: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3

            break;
        
            //...
    }
} while ($opcion != X);
//*/
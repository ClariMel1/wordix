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

do {
    $opcion = seleccionarOpcion();
    switch ($opcion) {
        case 1: 
            $nombreJugador = solicitarJugador();
            echo "Ingrese numero de palabra para jugar:";
            $numero = solicitarNumeroEntre($minimo, $maximo);
            
            $coleccPalabras = cargarColeccionPalabras();
            $palabraWordix = $coleccPalabras [$numero];

            $partida = jugarWordix($palabraWordix, $nombreJugador);
            print_r ($partida);

            break;
        case 2: 
            "ingrese su nombre:";
            $nombre =trim(fgets(STDIN));
            $variable=palabraAleatoria($coleccionPalabras,$nombre);

            break;
        case 3: 
            echo "Ingrese nro de partida:";
            $nroPartida = trim(fgets(STDIN));
            $partida = mostrarDatosPartida($nroPartida, $datosPartidas);
            break;
        case 4: 
            break;
        case 5: 
            break;
        case 6:
            break;
        case 7:
            $palabraNueva = leerPalabra5Letras();
            $coleccPalabras = cargarColeccionPalabras();
            $coleccionModificada = agregarPalabra($coleccionPalabras, $palabra);
            print_r ($coleccionModificada);
            break;
    }
} while ($opcion != 8);

//Declaración de variables:


//Inicialización de variables:


//Proceso:

//$partida = jugarWordix("MELON", strtolower("MaJo"));
//print_r($partida);
//imprimirResultado($partida);




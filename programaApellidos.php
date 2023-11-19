<?php
include_once("wordix.php");



/******/
/* DATOS DE LOS INTEGRANTES ***/
/******/

/* - RIOS DIEGO - legajos 4877 - mail:diegoavilaaa0@gmail.com - github:diegoavila1
- MIGUEL SOTO - legajos 4866 - mail:msg.soto16@gmail.com - github:MiguelSoto29
- CLARA PELOZO - legajos 4938 - mail:clara.pelozo@est.fi.uncoma.edu.ar - github:ClariMel1
/*


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

//CONSIGNA Nº2 - ESTRUCTURA DE DATOS B
/**
 * Esta función muestra una estructura de datos con ejemplos de partidas ya jugadas.
 * @param array multidimensional $coleccionPartidas
 * @return array multidimensional $coleccionPartidas
 */
function cargarPartidas(){
    $coleccionPartidas =[
        ["palabraWordix" => "queso","jugador" => "majo","intentos" => 0,"puntaje"=>0 ],
        ["palabraWordix" => "casas","jugador" => "rudolf","intentos" => 3,"puntaje"=>14 ],
        ["palabraWordix" => "queso","jugador" => "pink2000","intentos" => 6,"puntaje"=>10 ],
        ["palabraWordix" => "mujer","jugador" => "migue","intentos" => 1,"puntaje"=>15 ],
        ["palabraWordix" => "huevo","jugador" => "migue1","intentos" => 2,"puntaje"=>13 ],
        ["palabraWordix" => "tinto","jugador" => "clara","intentos" => 3,"puntaje"=>15 ],
        ["palabraWordix" => "verde","jugador" => "clara2","intentos" => 4,"puntaje"=>13 ],
        ["palabraWordix" => "melon","jugador" => "gordo1","intentos" => 5,"puntaje"=>11 ],
        ["palabraWordix" => "yuyos","jugador" => "gordo2","intentos" => 6,"puntaje"=>12 ],
        ["palabraWordix" => "pisos","jugador" => "diego","intentos" => 2,"puntaje"=>16 ],
        ["palabraWordix" => "cebra","jugador" => "diego2","intentos" => 2,"puntaje"=>15 ]
    ];
    return $coleccionPartidas;
}
//ESTRUCTURA DE DATOS C
/**
 * Esta funcion muestra resumenes de partidas de Jugadores ya jugadas.
 * @return array
 */
function cargarResumenJugadores (){
    $resumenJugador = [
        ["Jugador" => "majo","partidas" => 0, "puntaje" => 0, "victoria" => 0, "intento1" => 0, "intento2" => 0,"intento3" => 0,"intento4" => 0, "intento5" =>  0, "intento6" => 0],
        ["Jugador" => "rudolf" ,"partidas" => 1, "puntaje" => 14, "victoria" => 1, "intento1" => 2, "intento2" => 1,"intento3" => 2,"intento4" => 0, "intento5" => 0, "intento6" => 0],
        ["Jugador" => "pink2000","partidas" => 1, "puntaje" => 10, "victoria" => 1, "intento1" => 1, "intento2" => 1,"intento3" => 1,"intento4" => 1, "intento5" => 1, "intento6" => 1],
        ["Jugador" => "migue","partidas" => 1, "puntaje" => 15, "victoria" => 1, "intento1" => 5, "intento2" => 0,"intento3" => 0,"intento4" => 0, "intento5" => 0, "intento6" => 0],
        ["Jugador" => "migue1","partidas" => 1, "puntaje" => 13, "victoria" => 1, "intento1" => 3, "intento2" => 2,"intento3" => 0,"intento4" => 0, "intento5" => 0, "intento6" => 0],
        ["Jugador" => "clara","partidas" => 1, "puntaje" => 15, "victoria" => 1, "intento1" => 2, "intento2" => 2,"intento3" => 1,"intento4" => 0, "intento5" => 0, "intento6" => 0],
        ["Jugador" => "clara2","partidas" => 1, "puntaje" => 13, "victoria" => 1, "intento1" => 1, "intento2" => 1,"intento3" => 1,"intento4" => 2, "intento5" => 0, "intento6" => 0],
        ["Jugador" => "gordo1","partidas" => 1, "puntaje" => 11, "victoria" => 1, "intento1" => 1, "intento2" => 0,"intento3" => 2,"intento4" => 2, "intento5" => 0, "intento6" => 0],
        ["Jugador" => "gordo2","partidas" => 1, "puntaje" => 12, "victoria" => 1, "intento1" => 1, "intento2" => 1,"intento3" => 0,"intento4" => 1, "intento5" => 1, "intento6" => 1],
        ["Jugador" => "diego","partidas" => 1, "puntaje" => 16, "victoria" => 1, "intento1" => 3, "intento2" => 2,"intento3" => 0,"intento4" => 0, "intento5" => 0, "intento6" => 0],
        ["Jugador" => "diego2","partidas" => 1, "puntaje" => 15, "victoria" => 1, "intento1" => 5, "intento2" => 0,"intento3" => 0,"intento4" => 0, "intento5" => 0, "intento6" => 0],    
    ];
    return($resumenJugador);
}


/******/
/* DEFINICION DE FUNCIONES **/
/******/

/***********************************/
/** PROGRAMA PRINCIPAL **/
/***********************************/

do {
    $opcion = seleccionarOpcion();
    
    switch ($opcion) {
        case 1: 
            $max = 20;
            $min = 0;
            $nombreJugador = solicitarJugador();
            $numero = solicitarNumeroEntre ($min, $max);
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
            echo "Ingrese Nro de partida:";
            $partida = trim(fgets(STDIN));
            $cargarPartidas = cargarPartidas();

            if($partida >= 0 && $partida < count($cargarPartidas)){
                $datoPartida = mostrarDatosPartida($partida, $cargarPartidas);
            }
        
            while(!($partida >= 0 && $partida < count($cargarPartidas))){
                echo escribirRojo("El número de partida no existe. Ingrese otro número de partida: "). "\n";
                $partida = trim(fgets(STDIN));
                if ($partida >= 0 && $partida < count($cargarPartidas)) {
                    $datoPartida = mostrarDatosPartida($partida, $cargarPartidas);
                }
            }
            break;
        case 4:
            $nombreJugador = solicitarJugador();
            $coleccionPartidas = cargarPartidas();

            $variable = partidaGanada($coleccionPartidas,$nombreJugador);
            if ($variable !== -1){
                $variable = $variable + 1;
                $imprimirDatoPartida = mostrarDatosPartida($variable,$coleccionPartidas);
            }else{
                echo escribirRojo("El jugador $nombreJugador no jugó ninguna partida.")."\n";
            }
            break;
        case 5:
            $nombreJugador = solicitarJugador();
            $cargarResumen = cargarResumenJugadores();
            $resultado = resumenJugador($cargarResumen, $nombreJugador);
            echo $resultado;
        case 5:
            $nombreJugador = solicitarJugador();
            $cargarResumen = cargarResumenJugadores();
            $resultado = resumenJugador($cargarResumen, $nombreJugador);
            echo $resultado;
            break;
        case 6:
            //aa
            break;
        case 7:
            $palabraNueva = leerPalabra5Letras();
            $coleccPalabras = cargarColeccionPalabras();
            $coleccionModificada = agregarPalabra($coleccionPalabras, $palabra);
            print_r ($coleccionModificada);
            break;
    }
} while ($opcion !=8);



//Proceso:

//$partida = jugarWordix("MELON", strtolower("MaJo"));
//print_r($partida);
//imprimirResultado($partida);




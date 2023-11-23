<?php
include_once("wordix.php");

/**/
/* DATOS DE LOS INTEGRANTES */
/**/

/* - RIOS DIEGO - legajos 4877 - mail:diegoavilaaa0@gmail.com - github:diegoavila1
- MIGUEL SOTO - legajos 4866 - mail:masg.soto16@gmail.com - github:MiguelSoto29
- CLARA PELOZO - legajos 4938 - mail:clara.pelozo@est.fi.uncoma.edu.ar - github:ClariMel1
/*
*/

$resumenesJugador = [ 
    ["jugador" => "majo", "palabraWordix" => "queso"],
    ["jugador" => "rudolf", "palabraWordix" => "casas"],
    ["jugador" => "pink2000", "palabraWordix" => "queso"],
    ["jugador" => "migue", "palabraWordix" => "mujer"],
    ["jugador" => "migue1", "palabraWordix" => "huevo"],
    ["jugador" => "clara", "palabraWordix" => "tinto"],
    ["jugador" => "clara2", "palabraWordix" => "verde"],
    ["jugador" => "gordo1", "palabraWordix" => "melon"],
    ["jugador" => "gordo2", "palabraWordix" => "yuyos"],
    ["jugador" => "diego", "palabraWordix" => "pisos"],
    ["jugador" => "diego2", "palabraWordix" => "cebra"]   
    ];

//CONSIGNA Nº1 - ESTRUCTURA DE DATOS A
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
function cargarPartidas()
{
    $coleccionPartidas =[
        ["palabraWordix" => "QUESO","jugador" => "majo","intentos" => 0,"puntaje"=>0 ],
        ["palabraWordix" => "GOTAS","jugador" => "majo","intentos" => 4,"puntaje" => 13],
        ["palabraWordix" => "CASAS","jugador" => "rudolf","intentos" => 3,"puntaje"=>14 ],
        ["palabraWordix" => "QUESO","jugador" => "pink2000","intentos" => 6,"puntaje"=>10 ],
        ["palabraWordix" => "TINTO","jugador" => "clara","intentos" => 3,"puntaje" => 15],
        ["palabraWordix" => "MUJER","jugador" => "migue","intentos" => 2,"puntaje"=>14 ],
        ["palabraWordix" => "PISOS","jugador" => "diego","intentos" => 2,"puntaje" => 16],
        ["palabraWordix" => "GATOS","jugador" => "pink2000","intentos" => 4,"puntaje" => 13],
        ["palabraWordix" => "MANGO","jugador" => "rudolf","intentos" =>3 ,"puntaje" => 13],
        ["palabraWordix" => "MELON","jugador" => "gordo","intentos" => 5,"puntaje" => 11],
        ["palabraWordix" => "VERDE","jugador" => "clara","intentos" => 4,"puntaje" => 13],
        ["palabraWordix" => "YUYOS","jugador" => "majo","intentos" => 3,"puntaje" => 15],
        ["palabraWordix" => "CEBRA","jugador" => "diego","intentos" => 2,"puntaje" => 14],
        ["palabraWordix" => "RASGO","jugador" => "gordo","intentos" => 0,"puntaje" => 0],
        ["palabraWordix" => "LINCE","jugador" => "pink2000","intentos" => 3,"puntaje" => 13],
        ["palabraWordix" => "FUEGO","jugador" => "diego","intentos" => 4,"puntaje" => 13],
        ["palabraWordix" => "FLAMA","jugador" => "pink2000","intentos" => 0,"puntaje" => 0],
        ["palabraWordix" => "GRANO","jugador" => "diego","intentos" => 2,"puntaje" => 15],
        ["palabraWordix" => "HUEVO","jugador" => "migue","intentos" => 2,"puntaje" => 13],
        ["palabraWordix" => "YUYOS","jugador" => "migue","intentos" => 0,"puntaje" => 0],
        ["palabraWordix" => "PIANO","jugador" => "clara","intentos" => 3,"puntaje" => 13],
        ["palabraWordix" => "NAVES","jugador" => "clara","intentos" => 2,"puntaje" => 16],
        ["palabraWordix" => "MANGO","jugador" => "diego","intentos" => 0,"puntaje" => 0],
    ];
    return $partidasTotales;
}

//ESTRUCTURA DE DATOS C
/**
 * Esta funcion muestra resumenes de partidas de Jugadores ya jugadas.
 * @return array
 */
function cargarResumenJugadores ($resumenJugador)
{
    $resumenJugador = [
        ["Jugador" => "majo", "partidas" => 1, "puntaje" => 0, "victoria" => 0, "intento1" => 0, "intento2" => 0, "intento3" => 0, "intento4" => 0, "intento5" => 0, "intento6" => 0],
        ["Jugador" => "majo", "partidas" => 1, "puntaje" => 13, "victoria" => 1, "intento1" => 0, "intento2" => 0, "intento3" => 0, "intento4" => 1, "intento5" => 0, "intento6" => 0],
        ["Jugador" => "rudolf", "partidas" => 1, "puntaje" => 14, "victoria" => 11, "intento1" => 0, "intento2" => 0, "intento3" => 1, "intento4" => 0, "intento5" => 0, "intento6" => 0],
        ["Jugador" => "pink2000", "partidas" => 1, "puntaje" => 10, "victoria" => 1, "intento1" => 0, "intento2" => 0, "intento3" => 0, "intento4" => 0, "intento5" => 0, "intento6" => 1],
        ["Jugador" => "clara", "partidas" => 1, "puntaje" => 15, "victoria" => 1, "intento1" => 0, "intento2" => 0, "intento3" => 1, "intento4" => 0, "intento5" => 0, "intento6" => 0],
        ["Jugador" => "migue", "partidas" => 1, "puntaje" => 14, "victoria" => 1, "intento1" => 0, "intento2" => 1, "intento3" => 0, "intento4" => 0, "intento5" => 0, "intento6" => 0],
        ["Jugador" => "diego", "partidas" => 1, "puntaje" => 16, "victoria" => 1, "intento1" => 0, "intento2" => 1, "intento3" => 0, "intento4" => 0, "intento5" => 0, "intento6" => 0],
        ["Jugador" => "pink2000", "partidas" => 1, "puntaje" => 13, "victoria" => 1, "intento1" => 0, "intento2" => 0, "intento3" => 0, "intento4" => 1, "intento5" => 0, "intento6" => 0],
        ["Jugador" => "rudolf", "partidas" => 1, "puntaje" => 13, "victoria" => 1, "intento1" => 0, "intento2" => 0, "intento3" => 1, "intento4" => 0, "intento5" => 0, "intento6" => 0],
        ["Jugador" => "gordo", "partidas" => 1, "puntaje" => 11, "victoria" => 1, "intento1" => 0, "intento2" => 0, "intento3" => 0, "intento4" => 0, "intento5" => 1, "intento6" => 0],
        ["Jugador" => "clara", "partidas" => 1, "puntaje" => 13, "victoria" => 1, "intento1" => 0, "intento2" => 0, "intento3" => 0, "intento4" => 1, "intento5" => 0, "intento6" => 0],
        ["Jugador" => "majo", "partidas" => 1, "puntaje" => 15, "victoria" => 1, "intento1" => 0, "intento2" => 0, "intento3" => 1, "intento4" => 0, "intento5" => 0, "intento6" => 0],
        ["Jugador" => "diego", "partidas" => 1, "puntaje" => 14, "victoria" => 1, "intento1" => 0, "intento2" => 1, "intento3" => 0, "intento4" => 0, "intento5" => 0, "intento6" => 0],
        ["Jugador" => "gordo", "partidas" => 1, "puntaje" => 0, "victoria" => 0, "intento1" => 0, "intento2" => 0, "intento3" => 0, "intento4" => 0, "intento5" => 0, "intento6" => 0],
        ["Jugador" => "pink2000", "partidas" => 1, "puntaje" => 13, "victoria" => 1, "intento1" => 0, "intento2" => 0, "intento3" => 1, "intento4" => 0, "intento5" => 0, "intento6" => 0],
        ["Jugador" => "diego", "partidas" => 1, "puntaje" => 13, "victoria" => 1, "intento1" => 0, "intento2" => 0, "intento3" => 0, "intento4" => 1, "intento5" => 0, "intento6" => 0],
        ["Jugador" => "pink2000", "partidas" => 1, "puntaje" => 0, "victoria" => 0, "intento1" => 0, "intento2" => 0, "intento3" => 0, "intento4" => 0, "intento5" => 0, "intento6" => 0],
        ["Jugador" => "diego", "partidas" => 1, "puntaje" => 15, "victoria" => 1, "intento1" => 0, "intento2" => 1, "intento3" => 0, "intento4" => 0, "intento5" => 0, "intento6" => 0],
        ["Jugador" => "migue", "partidas" => 1, "puntaje" => 13, "victoria" => 1, "intento1" => 0, "intento2" => 1, "intento3" => 0, "intento4" => 0, "intento5" => 0, "intento6" => 0],
        ["Jugador" => "migue", "partidas" => 1, "puntaje" => 0, "victoria" => 0, "intento1" => 0, "intento2" => 0, "intento3" => 0, "intento4" => 0, "intento5" => 0, "intento6" => 0],
        ["Jugador" => "clara", "partidas" => 1, "puntaje" => 13, "victoria" => 1, "intento1" => 0, "intento2" => 0, "intento3" => 1, "intento4" => 0, "intento5" => 0, "intento6" => 0],
        ["Jugador" => "clara", "partidas" => 1, "puntaje" => 16, "victoria" => 1, "intento1" => 0, "intento2" => 1, "intento3" => 0, "intento4" => 0, "intento5" => 0, "intento6" => 0],
        ["Jugador" => "diego", "partidas" => 1, "puntaje" => 0, "victoria" => 0, "intento1" => 0, "intento2" => 0, "intento3" => 0, "intento4" => 0, "intento5" => 0, "intento6" => 0],
        ];
    return($resumenJugador);
}







/***********************************/
//FUNCIONES DEL EQUIPO DE DESARROLLO 
/***********************************/

//CONSIGNA Nº3
/**
 * Esta función muestra el menú de opciones del juego y obliga a que seleccione una opcion correcta
 * @return int $opcion
 */
function seleccionarOpcion()
{
    //array $opcines
    //int $key,$opcion

    //array indexado que muestra el mensaje del menu 
    $opciones = [
        "Jugar al Wordix con una palabra elegida \n",
        "Jugar al Wordix con una palabra aleatoria \n",
        "Mostrar una partida \n",
        "Mostrar la primera partida ganadora \n",
        "Mostrar resumen de Jugador \n",
        "Mostrar listado de partidas ordenadas por jugador y por palabra \n",
        "Agregar una palabra de 5 letras a Wordix \n",
        "Salir \n",
    ];
    echo "Menu de opciones:"."\n";
    
    //Recorrido Exhaustivo muestra el indice de las opciones    
    foreach($opciones as $key => $opcion){
        echo ($key + 1). ") " . $opcion."\n";
    }

    //Recorrido Parcial obliga al usuario a marcar una opcion correcta
    do{
        echo "Ingrese el número de la opción deseada: ";
        $eleccion = trim(fgets(STDIN));
        if($eleccion < 1 || $eleccion > count($opciones)){
            echo "Opción no válida. Pruebe otra opción"."\n";
        }
    }while($eleccion < 1 || $eleccion > count($opciones));
    
    return $eleccion;
}

//CONSIGNA Nº5
/**
 * solicita al usuario un número entre un rango de valores. Si el número ingresado por el usuario no es válido
 * la función se encarga de volver a pedirlo. La función retorna un número válido.
 * @param array $rangoValores
 * @return int
 */
function numeroCorrecto($rangoValores)
{
    //int $numero,$numeroCorrecto
    
    //repetitiva para encontrar el numero correcto,hasta no hallarlo no retorna
    do{
        echo "Ingrese un numero: ";
        $numero = trim(fgets(STDIN));
        $numeroCorrecto = 0;
        
        //Recorrido Exhaustivo busca dentro del array algun valor que sea igual al numero,cuando lo sea es el numero correcto
        foreach($rangoValores as $valor){
            if($numero == $valor){
                $numeroCorrecto = $numero;
            }
        }     
    }while(!$numeroCorrecto); 

    return $numeroCorrecto;
}

//CONSIGNA Nº6
/**
 * Una función que dado un número de partida, muestre en pantalla los datos de la partida
 * @param int $nroPartida
 * @param array $datosPartidas
 */
function mostrarDatosPartida($nroPartida, $datosPartidas)
{
    //int $partidaAux 
    
    //al restar 1, se ajusta al índice correcto en el array.
    //muestra en la pantalla la información detallada de la partida específica
    $partidaAux = $datosPartidas[$nroPartida - 1];
    
    echo "*****************"."\n";
    echo "Partida WORDIX " . $nroPartida . ":" . "palabra " . strtoupper($partidaAux["palabraWordix"])."\n";
    echo "Jugador:" . $partidaAux["jugador"]."\n";
    echo "Puntaje:" . $partidaAux["puntaje"]."\n";
    if($partidaAux["intentos"] == 0){
        echo "Intento: No adivinó la palabra."."\n";
    }else{
        echo "Intento: Adivinó la palabra en ". $partidaAux["intentos"]. " intentos". "\n";
    }
    echo "*****************"."\n";
}

//CONSIGNA Nº7
/**
 * La función agrega la nueva palabra a la colección si es diferente
 * @param array $coleccionPalabras
 * @param string $palabra
 * @return array La colección modificada
 */
function agregarPalabra($coleccionPalabras, $palabra)
{
    // Bandera para indicar si la palabra ya está en la colección
    $palabraRepetida = false;

    // Verifica si la palabra ya está en la colección
    foreach ($coleccionPalabras as $palabraGuardada) {
        if ($palabraGuardada == strtoupper($palabra)) {
            // La palabra ya está en la colección
            $palabraRepetida = true;
            break;
        }
    }

    // Si la palabra no está en la colección, agrégala
    if (!$palabraRepetida) {
        array_push($coleccionPalabras, $palabra);
        echo "Palabra agregada con éxito.\n";
    } else {
        echo "La palabra ya está en la colección. Por favor, ingresa otra palabra.\n";
    }

    // Retorna la colección modificada
    return $coleccionPalabras;
}

//CONSIGNA Nº8
/**
 * Dada una coleccion de partidas y nombre del Jugador, mostrar la primera partida que gano el jugador.
 * @param array $coleccionPartidas
 * @param string $nombre
 * @return int
 */
function partidaGanada($coleccionPartidas,$nombre)
{
    //int $resultado,$llave
    $resultado = -1;
    
    //Recorrido Exhaustivo entra a la colleccion de partidas y busca al jugador y sus intentos
    foreach($coleccionPartidas as $llave => $partidasGuardadas ){
        //si el nombre y los intentos son mayor a 0 se guarda la primera partida del jugador
        if($partidasGuardadas["jugador"] == $nombre && $partidasGuardadas["intentos"] > 0){
            $resultado = $llave;
        }
    }

    return $resultado;
}

//CONSIGNA Nº9 (BIS)
/**
 * Dado el nombre de un jugador, en caso de que ya haya jugado, mostrar el resumen de todas sus partidas.
 * @param string $jugador
 * @param array $partidasTotales
 */
function imprimirResumenJugador ($jugador, $partidasTotales)
{
    $cantPartidas = 0; //variables contadoras
    $cantVictorias = 0;
    $intentos1 = 0;
    $intentos2 = 0;
    $intentos3 = 0;
    $intentos4 = 0;
    $intentos5 = 0;
    $intentos6 = 0;
    $sumaPuntajes = 0; //variable acomuladora
    $encontroAlJugador = false;

    for ($i = 0; $i < count($partidasTotales); $i++){
        if ($partidasTotales[$i]["jugador"] == $jugador){
            $encontroAlJugador = true;
            $cantPartidas = $cantPartidas + 1;
            $sumaPuntajes = $sumaPuntajes + $partidasTotales[$i]["puntaje"];
            if($partidasTotales[$i]["intentos"] < 0){
                $cantVictorias = $cantVictorias + 1;
            }

            if ($partidasTotales[$i]["intentos"] == 1){
                $intentos1 = $intentos1 + 1;
            }elseif($partidasTotales[$i]["intentos"] == 2){
                $intentos2 = $intentos2 + 1;
            }elseif($partidasTotales[$i]["intentos"] == 3){
                $intentos3 = $intentos3 + 1;
            }elseif($partidasTotales[$i]["intentos"] == 4){
                $intentos4 = $intentos4 + 1;
            }elseif($partidasTotales[$i]["intentos"] == 5){
                $intentos5 = $intentos5 + 1;
            }elseif($partidasTotales[$i]["intentos"] == 6){
                $intentos6 = $intentos6 + 1;
            }
            
        }
    }

    if ($encontroAlJugador == true){
        $porcentajeVictorias = (100 * $cantVictorias) / $cantPartidas;

        echo "*****************\n";
        echo "Jugador:", escribirAmarillo($jugador),"\n";
        echo "Partidas:", $cantPartidas,"\n";
        echo "Puntaje Total:", $sumaPuntajes, "\n";
        echo "Victorias:", $cantVictorias, "\n";
        echo "Porcentaje Victorias: $porcentajeVictorias\n";
        echo "Adivinadas:\n";
        echo "        Intento 1 :", $intentos1, "\n";
        echo "        Intento 2 :", $intentos2, "\n";
        echo "        Intento 3 :", $intentos3, "\n";
        echo "        Intento 4 :", $intentos4, "\n";
        echo "        Intento 5 :", $intentos5, "\n";
        echo "        Intento 6 :", $intentos6, "\n";
        echo "*****************\n";
    }

    if($encontroAlJugador !== true){
        echo escribirRojo("NO SE ENCONTRO RESUMEN DEL JUGADOR: $jugador\n");
    }
}

//CONSIGNA Nº9
/**
 * Dado una coleccion de resumen de Jugadores, y un jugador, cargar el resumen del mismo.
 * @param array $resumenJugador
 * @param string $jugador
 * @return string 
 */
function resumenJugador($resumenJugador, $jugador)
{
    // Inicializar la variable para el resumen del jugador
    $partidaDelJugador = '';

    // Bandera para indicar si se encontró el jugador
    $jugadorEncontrado = false;

    // Recorrido exhaustivo para obtener el resumen del jugador si se encuentra
    foreach ($resumenJugador as $partidaJugador) {
        if ($partidaJugador["Jugador"] == $jugador) {
            $partidaDelJugador = imprimirResumenJugador($partidaJugador, $jugador);
            $jugadorEncontrado = true;
            // Terminar el bucle si se encuentra el jugador
            break;
        }
    }

    // Mensaje en rojo si no se encontró el resumen del jugador
    if (!$jugadorEncontrado) {
        $mensaje = escribirRojo("NO SE ENCONTRÓ RESUMEN DEL JUGADOR: $jugador\n");
        $partidaDelJugador = $mensaje;
    }

    return $partidaDelJugador;
}

//CONSIGNA Nº10
/**
 * Solicita el nombre del jugador y convierte a string las veces nescesarias con la condicion que el primer caracter del nombre sea una letra.
 * @return string $nombreUsuario
 */
function solicitarNombreJugador ()
{
    //string $nombreUsuario

    do{
        echo "Ingrese el nombre del Jugador:";
        $nombreUsuario = trim(fgets(STDIN));
        //strtolower >> convierte el nombre en minusculas
        $nombreUsuario = strtolower($nombreUsuario);
    }while (!ctype_alpha($nombreUsuario [0]));
    //cyte_alpha >> verifica sin los caracteres nombrados sean de tipo string

    return ($nombreUsuario);
}

/**
 * Esta funcion muestra una colección de partidas ordenadas alfabeticamente por el nombre del jugador
 * y en caso de tener el mismo nombre evalúa la palabra que jugó de la misma manera (la función se basa en un arreglo)
 * @param array $elemento1
 * @param array $elemento2
 * @return int
 */
function miComparacion($elemento1, $elemento2) 
{
    $comparacionNombreJugador = strcmp($elemento1["jugador"], $elemento2["jugador"]);

    if ($comparacionNombreJugador != 0) {
        return $comparacionNombreJugador;
    } else {
        return strcmp($elemento1["palabraWordix"], $elemento2["palabraWordix"]);
    }
}


//OPCION Nº2 DEL MENU DE OPCIONES
/**
 * Dar una palabra aleatoria la cual no haya sido seleccionada por el Jugador anteriormente.
 * @param string $jugador
 * @param array $palabrasTotales
 * @param array $partidaJugador
 * @return string
 */
function palabraAleatoria($jugador, $palabrasTotales, $partidaJugador)
{   
    /**STRING $palabraAleatoria ARRAY $palabrasSeleccionadas $palabrasNoSeeleccionadas BOOLEAN $repetida */
    // Almacena las palabras YA usadas por el jugador.
    $palabrasSeleccionadas = [];
    foreach ($partidaJugador as $laPartida) {
        if ($laPartida["jugador"] == $jugador) {
            $palabrasSeleccionadas[] = strtoupper($laPartida["palabraWordix"]);
        }
    }

    foreach ($palabrasTotales as $palabra) {
        $repetida = false;
        // Verifica si la palabra está en el arreglo a quitar
        foreach ($palabrasSeleccionadas as $palabraRepetida) {
            if ($palabra == $palabraRepetida) {
                $repetida = true;
                break;
            }
        }
        // Si la palabra no está repetida, agrégala al resultado
        if (!$repetida) {    
            $palabrasNoSeleccionadas[] = $palabra;
        }
    }  

    // Revisa si hay palabras disponibles para jugar
    if (count($palabrasNoSeleccionadas) > 0) {
        // Elige una palabra al azar
        $palabraAleatoria = array_values($palabrasNoSeleccionadas)[rand(0, count($palabrasNoSeleccionadas) - 1)];
    } else {
        $palabraAleatoria = "Ya jugo con todas las palabras disponibles.";
    }
    return($palabraAleatoria);
}

//Nº7 CASE
/**
 * la funcion retorna true si la palabra existe en el array
 * @param array $registroPalabras 
 * @param string $palabraNueva 
 * @return boolean
 */
function palabraExistente($registroPalabras,$palabraNueva)
{
    foreach($registroPalabras as $palabra){
        if($palabra == $palabraNueva){
            return true;
        }
    }
    return false;
}


/**********************/
/* PROGRAMA PRINCIPAL */
/**********************/


//Proceso:
do {
    $opcion = seleccionarOpcion();
    
    switch ($opcion) {
        case 1: 
            $registroPalabras = cargarColeccionPalabras();
            $Rangomin = 0;
            $Rangomax = count($registroPalabras) - 1;

            $nombreParticipante = solicitarNombreJugador();
            $numero = solicitarNumeroEntre ($Rangomin, $Rangomax);
            $registroPalabras = cargarColeccionPalabras();
            $palabraSeleccionada = $registroPalabras[$numero];
            $partida = jugarWordix($palabraSeleccionada, $nombreParticipante);
            print_r ($partida);

            break;
        case 2: 
            $nombreParticipante = solicitarNombreJugador();
            $registroPalabras = cargarColeccionPalabras();
            $registroPartidas = cargarPartidas();
            $palabraAleatoria = palabraAleatoria($nombreParticipante,$registroPalabras,$registroPartidas);
            $partidaJugador = jugarWordix($palabraAleatoria, $nombreParticipante);

            break;
        case 3:

            echo "Ingrese Nro de partida:";
            $nroDePartida = trim(fgets(STDIN));
            $registroPartidas = cargarPartidas();

            if($nroDePartida >= 0 && $nroDePartida < count($registroPartidas)){
                $datosPartida = mostrarDatosPartida($nroDePartida, $registroPartidas);
            }
        
            while(!($nroDePartida >= 0 && $nroDePartida < count($registroPartidas))){
                echo escribirRojo("El número de partida no existe; Ingrese otro número de partida: "). "\n";
                $nroPartida = trim(fgets(STDIN));
                if ($nroDePartida >= 0 && $nroDePartida < count($registroPartidas)) {
                    $datosPartida = mostrarDatosPartida($nroDePartida, $registroPartidas);
                }
            }

            break;
        case 4:

            $nombreParticipante = solicitarNombreJugador();
            $registroPartidas = cargarPartidas();
            $partidaGanadora = partidaGanada($registroPartidas,$nombreParticipante);
            
            if ($partidaGanadora !== -1){
                $partidaGanadora = $partidaGanadora + 1;
                $imprimeDatosPartida = mostrarDatosPartida($partidaGanadora,$registroPartidas);
            }else{
                echo escribirRojo("El jugador $nombreParticipante no jugó ninguna partida.")."\n";
            }

            break;
        case 5:
            echo "Ingrese un nombre: ";
            $jugador = trim(fgets(STDIN));
            

            $resplay = calcularResumenJugador($jugador, $coleccionPartidas);
            $resultadoFinal = imprimirResumenJugador($resplay, $jugador);
            
        case 6:

            // Ordenar las partidas
            usort($resumenesJugador , 'miComparacion');
            // Imprimir las partidas ordenadas con índices comenzando en 1
            $indice = 1;
            foreach ($resumenesJugador as $partida) { //recorrido exhaustivo para mostrar todas
            echo "Lugar: $indice\n";
            print_r($partida);
            echo "\n";
            $indice++;
            }
            echo "\n";

            break;

        case 7:
            $palabra = leerPalabra5Letras();
            $registroPalabras = cargarColeccionPalabras();
            $i=0;

            $palabraExiste = palabraExistente($registroPalabras,$palabra);
            if($palabraExiste){
                echo "la palabra ingresada ya esta registrada:";
            }
            else{
                array_push($registroPalabras,$palabra);
                print_r($registroPalabras);
            }

        }
        $opcion = seleccionarOpcion();

} while ($opcion !=8);


?>
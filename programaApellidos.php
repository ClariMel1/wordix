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

$palabrasJugadores = [ 
    ["palabraWordix" => "QUESO","jugador" => "majo"],
    ["palabraWordix" => "GOTAS","jugador" => "majo"],
    ["palabraWordix" => "CASAS","jugador" => "rudolf"],
    ["palabraWordix" => "QUESO","jugador" => "pink2000"],
    ["palabraWordix" => "TINTO","jugador" => "clara"],
    ["palabraWordix" => "MUJER","jugador" => "migue"],
    ["palabraWordix" => "PISOS","jugador" => "diego"],
    ["palabraWordix" => "GATOS","jugador" => "pink2000"],
    ["palabraWordix" => "MANGO","jugador" => "rudolf"],
    ["palabraWordix" => "MELON","jugador" => "gordo"],
    ["palabraWordix" => "VERDE","jugador" => "clara"],
    ["palabraWordix" => "YUYOS","jugador" => "majo"],
    ["palabraWordix" => "CEBRA","jugador" => "diego"],
    ["palabraWordix" => "RASGO","jugador" => "gordo"],
    ["palabraWordix" => "LINCE","jugador" => "pink2000"],
    ["palabraWordix" => "FUEGO","jugador" => "diego"],
    ["palabraWordix" => "FLAMA","jugador" => "pink2000"],
    ["palabraWordix" => "GRANO","jugador" => "diego"],
    ["palabraWordix" => "HUEVO","jugador" => "migue"],
    ["palabraWordix" => "YUYOS","jugador" => "migue"],
    ["palabraWordix" => "PIANO","jugador" => "clara"],
    ["palabraWordix" => "NAVES","jugador" => "clara"],
    ["palabraWordix" => "MANGO","jugador" => "diego"]
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
    return $coleccionPartidas;
}

//ESTRUCTURA DE DATOS C
/**
 * Esta funcion muestra resumenes de partidas de Jugadores ya jugadas.
 * @return array
 */
function cargarResumenJugadores ()
{
    $resumenJugador = [
        "Jugador" => 0,
        "partidas" => 0,
        "puntaje" => 0,
        "victoria" => 0,
        "intento1" => 0,
        "intento2" => 0,
        "intento3" => 0,
        "intento4" => 0,
        "intento5" => 0,
        "intento6" => 0,
  
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
    $partidaAux = $datosPartidas[$nroPartida];
    
    echo "******************************************\n";
    echo "Partida WORDIX " . $nroPartida . ":" . " palabra " . strtoupper($partidaAux["palabraWordix"])."\n";
    echo "Jugador:" . $partidaAux["jugador"]."\n";
    echo "Puntaje:" . $partidaAux["puntaje"]."\n";
    if($partidaAux["intentos"] == 0){
        echo "Intento: No adivinó la palabra."."\n";
    }else{
        echo "Intento: Adivinó la palabra en ". $partidaAux["intentos"]. " intentos". "\n";
    }
    echo "******************************************\n";
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
    //boolean $palabraBuscada 

    // Bandera para indicar si la palabra ya está en la colección
    $palabraBuscada = false;

    // Verifica si la palabra ya está en la colección
    foreach ($coleccionPalabras as $palabraGuardada) {
        if ($palabraGuardada == strtoupper($palabra)) {
            // La palabra ya está en la colección
            $palabraBuscada = true;
            break;
        }
    }

    return ($palabraBuscada);
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

    return ($resultado);
}

//CONSIGNA Nº9
/**
 * Dado el nombre de un jugador, en caso de que ya haya jugado, determinar el resumen de todas sus partidas.
 * @param string $jugador
 * @param array $coleccionPartidas
 * @return array|null
 */
function calcularResumenJugador ($jugador, $coleccionPartidas)
{
    // string $mensaje
    // int $cantPartidas, $cantVictorias, $intentos1, $intentos2, $intentos3, $intentos4, $intentos5, $intentos6, $sumaPuntajes 
    // boolean $encontroAlJugador
    // array $resumenJugador

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

    for ($i = 0; $i < count($coleccionPartidas); $i++){
        if ($coleccionPartidas[$i]["jugador"] == $jugador){
            $encontroAlJugador = true;
            $cantPartidas = $cantPartidas + 1;
            $sumaPuntajes = $sumaPuntajes + $coleccionPartidas[$i]["puntaje"];

            if($coleccionPartidas[$i]["intentos"] > 0){
                $cantVictorias = $cantVictorias + 1;
            }

            if ($coleccionPartidas[$i]["intentos"] == 1){
                $intentos1 = $intentos1 + 1;
            }elseif($coleccionPartidas[$i]["intentos"] == 2){
                $intentos2 = $intentos2 + 1;
            }elseif($coleccionPartidas[$i]["intentos"] == 3){
                $intentos3 = $intentos3 + 1;
            }elseif($coleccionPartidas[$i]["intentos"] == 4){
                $intentos4 = $intentos4 + 1;
            }elseif($coleccionPartidas[$i]["intentos"] == 5){
                $intentos5 = $intentos5 + 1;
            }elseif($coleccionPartidas[$i]["intentos"] == 6){
                $intentos6 = $intentos6 + 1;
            }
            
        }
    }

    if ($encontroAlJugador == true){
        $resumenJugador =  [
            "Jugador" => $jugador,
            "partidas" => $cantPartidas,
            "puntaje" => $sumaPuntajes,
            "victoria" => $cantVictorias,
            "intento1" => $intentos1,
            "intento2" => $intentos2,
            "intento3" => $intentos3,
            "intento4" => $intentos4,
            "intento5" => $intentos5,
            "intento6" => $intentos6
        ];
        $muestraFinal = imprimirResumenJugador($resumenJugador, $jugador);
        echo $muestraFinal;

        return($resumenJugador);
    }
    if($encontroAlJugador !== true){
        $mensaje = "NO SE ENCONTRÓ RESUMEN DEL JUGADOR: $jugador. \n";
        echo escribirRojo($mensaje)."\n";
        return null;
    }
}

//CONSIGNA Nº9 (BIS)
//OPCION Nº5 DEL MENU DE OPCIONES
/**
 * Muestra en patalla el resumen de la partida de un jugador.
 * @param array $resumenJugador
 * @param string $jugador
 */
function imprimirResumenJugador ($resumenJugador, $jugador)
{
    // int $cantVictorias, $cantPartidas, $porcentajesVictorias
    $cantVictorias = $resumenJugador["victoria"];
    $cantPartidas = $resumenJugador["partidas"];
    $porcentajeVictorias = (100 * $cantVictorias) / $cantPartidas;
    

    // mostrar en pantalla un resumen de las estadísticas de un jugador en el juego.
    echo "******************************************\n";
    echo "Jugador:", escribirAmarillo($jugador),"\n";
    echo "Partidas:", $resumenJugador ["partidas"],"\n";
    echo "Puntaje Total:", $resumenJugador["puntaje"], "\n";
    echo "Victorias:",$resumenJugador["victoria"], "\n";
    echo "Porcentaje Victorias: ".floor($porcentajeVictorias)."% \n";
    echo "Adivinadas:\n";
    echo "        Intento 1 :", $resumenJugador["intento1"], "\n";
    echo "        Intento 2 :", $resumenJugador["intento2"], "\n";
    echo "        Intento 3 :", $resumenJugador["intento3"], "\n";
    echo "        Intento 4 :", $resumenJugador["intento4"], "\n";
    echo "        Intento 5 :", $resumenJugador["intento5"], "\n";
    echo "        Intento 6 :", $resumenJugador["intento6"], "\n";
    echo "*****************************************\n";
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

//CONSIGNA Nº11
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
    //string $palabraAleatoria array $palabrasSeleccionadas $palabrasNoSeeleccionadas boolean $repetida

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

//OPCION Nº7 DEL MENU DE OPCIONES
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
//case 7
function agregaPalabraColeccionModificada($registroPalabras, $nuevaPalabra) {
    $registroPalabras[] = $nuevaPalabra;
    return $registroPalabras;
}

/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Inicialización de variables:
$palabrasTotales = array ();
$partidasTotales = array ();
$estadisticasJugadores = array ();
$ordenDePalabras = array(); //PARA EL CASE 6

$palabrasBase = cargarColeccionPalabras();
$partidasBase = cargarPartidas();
$resumenBase = cargarResumenJugadores();

$palabrasTotales = $palabrasBase;
$partidasTotales = $partidasBase;
$estadisticasJugadores = $resumenBase;
$ordenDePalabras = $palabrasJugadores;

//Proceso:
do {
    $opcion = seleccionarOpcion();
    
    switch ($opcion) {
        case 1: 
            $Rangomin = 0;
            $Rangomax = count($palabrasTotales) - 1;

            $nombreJugador = solicitarNombreJugador();
            $numero = solicitarNumeroEntre ($Rangomin, $Rangomax);

            $palabraSeleccionada = $palabrasTotales[$numero];
            $partidaJugador = jugarWordix($palabraSeleccionada, $nombreJugador);
            
            array_push($partidasTotales, $partidaJugador);
            array_push($ordenDePalabras, ["palabraWordix" => $palabraSeleccionada, "jugador" => $nombreJugador]);
            print_r ($partidasTotales);

            break;
        case 2: 
            $nombreJugador = solicitarNombreJugador();

            $palabraAleatoria = palabraAleatoria($nombreJugador,$palabrasTotales,$partidasTotales);
            $partidaJugador = jugarWordix($palabraAleatoria, $nombreJugador);

            array_push($partidasTotales, $partidaJugador);
            array_push($ordenDePalabras, ["palabraWordix" => $palabraAleatoria, "jugador" => $nombreJugador]);
            print_r ($partidasTotales);

            break;
        case 3:
            do {
                echo "Ingrese Nro de partida: ";
                $nroDePartida = trim(fgets(STDIN));
            
                if ($nroDePartida >= 0 && $nroDePartida < count($partidasTotales)) {
                    $datosPartida = mostrarDatosPartida($nroDePartida, $partidasTotales);
                } else {
                    echo escribirRojo("El número de partida NO existe. Ingrese otro número de partida:\n");
                }
            } while ($nroDePartida < 0 || $nroDePartida >= count($partidasTotales));

            break;
        case 4:
            $nombreJugador = solicitarNombreJugador();
            $partidaGanadora = partidaGanada($partidasTotales,$nombreJugador);
            
            if ($partidaGanadora !== -1){
                $partidaGanadora = $partidaGanadora ; // quite un +1
                $imprimeDatosPartida = mostrarDatosPartida($partidaGanadora,$partidasTotales);
            }else{
                echo escribirRojo("El jugador $nombreJugador no jugó ninguna partida.")."\n";
            }

            break;
        case 5:
            $nombreJugador = solicitarNombreJugador();
            $resumenJugador = calcularResumenJugador($nombreJugador, $partidasTotales);
            array_push($estadisticasJugadores, $resumenJugador);
            print_r ($estadisticasJugadores);

            break;
        case 6:
            // Ordenar las partidas
            usort($ordenDePalabras, 'miComparacion');
            // Imprimir las partidas ordenadas con índices comenzando en 1
            $indice = 1;
            foreach ($ordenDePalabras as $partida) { //recorrido exhaustivo para mostrar todas
            echo "Lugar: $indice\n";
            print_r($partida);
            echo "\n";
            $indice++;
            }
            echo "\n";

            break;

        case 7:
            $palabraNueva = leerPalabra5Letras();
            $palabraValida = agregarPalabra($palabrasTotales, $palabraNueva);
            // Si la palabra no está en la colección, agrégala
            if (!$palabraValida) {
                array_push($palabrasTotales, $palabraNueva);
                print_r($palabrasTotales);
                echo "Palabra agregada con éxito.\n";
            } else {
                echo "La palabra ingresada ya estaba en la colección.\n";
            }
            break;
        }
} while ($opcion !=8);


?>
<?php
include_once("wordix.php");

/*****************************/
/* DATOS DE LOS INTEGRANTES */
/***************************/

/* 
- RIOS DIEGO - legajos 4877 - mail:diegoavilaaa0@gmail.com - github:diegoavila1
- MIGUEL SOTO - legajos 4866 - mail:masg.soto16@gmail.com - github:MiguelSoto29
- CLARA PELOZO - legajos 4938 - mail:clara.pelozo@est.fi.uncoma.edu.ar - github:ClariMel1
*/

//ESTRUCTURA DE DATOS PARA EL CASE Nº6
$palabrasJugadores = [ 
    ["jugador" => "majo", "palabraWordix" => "QUESO"],
    ["jugador" => "majo" , "palabraWordix" => "GOTAS"],
    ["jugador" => "rudolf", "palabraWordix" => "CASAS"],
    ["jugador" => "pink2000", "palabraWordix" => "QUESO"],
    ["jugador" => "clara", "palabraWordix" => "TINTO"],
    ["jugador" => "migue", "palabraWordix" => "MUJER"],
    ["jugador" => "diego", "palabraWordix" => "PISOS"],
    ["jugador" => "pink2000", "palabraWordix" => "GATOS"],
    ["jugador" => "rudolf", "palabraWordix" => "MANGO"],
    ["jugador" => "gordo", "palabraWordix" => "MELON"],
    ["jugador" => "clara", "palabraWordix" => "VERDE"],
    ["jugador" => "majo", "palabraWordix" => "YUYOS"],
    ["jugador" => "diego","palabraWordix" => "CEBRA"],
    ["jugador" => "gordo", "palabraWordix" => "RASGO"],
    ["jugador" => "pink2000", "palabraWordix" => "LINCE"],
    ["jugador" => "diego","palabraWordix" => "FUEGO"],
    ["jugador" => "pink2000", "palabraWordix" => "FLAMA"],
    ["jugador" => "diego", "palabraWordix" => "GRANO"],
    ["jugador" => "migue", "palabraWordix" => "HUEVO"],
    ["jugador" => "migue", "palabraWordix" => "YUYOS"],
    ["jugador" => "clara", "palabraWordix" => "PIANO"],
    ["jugador" => "clara", "palabraWordix" => "NAVES"],
    ["jugador" => "diego", "palabraWordix" => "MANGO"]
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
        ["Jugador" => 0,
        "partidas" => 0,
        "puntaje" => 0,
        "victoria" => 0,
        "intento1" => 0,
        "intento2" => 0,
        "intento3" => 0,
        "intento4" => 0,
        "intento5" => 0,
        "intento6" => 0]
  
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
    //int partidasGenerales
    //array indexado que muestra el mensaje del menu 
    $menuDeOpciones = [
        "Jugar al Wordix con una palabra elegida",
        "Jugar al Wordix con una palabra aleatoria",
        "Mostrar una partida",
        "Mostrar la primera partida ganadora",
        "Mostrar resumen de Jugador",
        "Mostrar listado de partidas ordenadas por jugador y por palabra",
        "Agregar una palabra de 5 letras a Wordix",
        "Salir",
    ];
    echo "Menu de opciones:"."\n";
    
    //Recorrido Exhaustivo muestra el indice de las opciones    
    foreach( $menuDeOpciones as $indice => $opcion){
        echo ($indice + 1). ") " . $opcion."\n";
    }

    do{
        echo "Ingrese el número de la opción deseada: ";
        $opcionElegida = trim(fgets(STDIN));
        if($opcionElegida < 1 || $opcionElegida > count($menuDeOpciones)){
            $mensajeAlerta = "(!) Opción no válida. Pruebe otra opción";
            echo escribirRojo($mensajeAlerta). "\n";
        }
    }while($opcionElegida < 1 || $opcionElegida > count($menuDeOpciones));
    
    return ($opcionElegida);
}

//CONSIGNA Nº6
/**
 * Una función que dado un número de partida, muestre en pantalla los datos de la partida
 * @param int $nroPartida
 * @param array $partidasGenerales
 */
function imprimirDatosPartida($nroPartida, $partidasGenerales)
{
    //int $partidaDelJugador 
    $partidaDelJugador = $partidasGenerales[$nroPartida];

    //muestra en la pantalla la información detallada de la partida específica
    echo "******************************************\n";
    echo "Partida WORDIX " . $nroPartida . ":" . " palabra " . strtoupper($partidaDelJugador["palabraWordix"])."\n";
    echo "Jugador: ", escribirAmarillo($partidaDelJugador["jugador"])."\n";
    echo "Puntaje: " . $partidaDelJugador["puntaje"]."\n";
    if($partidaDelJugador["intentos"] == 0){
        echo "Intento: No adivinó la palabra."."\n";
    }else{
        echo "Intento: Adivinó la palabra en ". $partidaDelJugador["intentos"]. " intentos". "\n";
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
        }
    }

    return ($palabraBuscada);
}

//CONSIGNA Nº8
/**
 * Dada una coleccion de partidas y nombre del Jugador, mostrar la primera partida que gDelJugador el jugador.
 * @param array $coleccionPartidas
 * @param string $nombreJugador
 * @return int
 */
function partidaGanada($coleccionPartidas, $nombreJugador)
{
    $valorPartidaGanada = -1;

    foreach ($coleccionPartidas as $llave => $partidasGuardadas) {
        if ($partidasGuardadas["jugador"] == $nombreJugador && $partidasGuardadas["intentos"] > 0 && $valorPartidaGanada == -1) {
            $valorPartidaGanada = $llave;
        }
    }

    return $valorPartidaGanada;
}

//CONSIGNA Nº9
/**
 * Dado el nombre de un jugador, en caso de que ya haya jugado, determinar el resumen de todas sus partidas.
 * @param string $nombreJugador
 * @param array $coleccionPartidas
 * @return array
 */
function calcularResumenJugador ($nombreJugador, $coleccionPartidas)
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
        if ($coleccionPartidas[$i]["jugador"] == $nombreJugador){
            $encontroAlJugador = true;
            $cantPartidas ++;
            $sumaPuntajes = $sumaPuntajes + $coleccionPartidas[$i]["puntaje"];

            if($coleccionPartidas[$i]["intentos"] > 0){
                $cantVictorias ++;
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
            "Jugador" => $nombreJugador,
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
        $muestraFinal = imprimirResumenJugador($resumenJugador, $nombreJugador);
        echo $muestraFinal;

        return($resumenJugador);
    }
    if($encontroAlJugador !== true){
        $alerta = "(!) No se encontró el resumen del jugador: <<$nombreJugador>>";
        echo escribirRojo($alerta). "\n";
    }
}

//CONSIGNA Nº9 (BIS)
//OPCION Nº5 DEL MENU DE OPCIONES
/**
 * Muestra en patalla el resumen de la partida de un jugador.
 * @param array $resumenJugador
 * @param string $nombreJugador
 */
function imprimirResumenJugador ($resumenJugador, $nombreJugador)
{
    // int $cantVictorias, $cantPartidas, $porcentajesVictorias
    $cantVictorias = $resumenJugador["victoria"];
    $cantPartidas = $resumenJugador["partidas"];
    $porcentajeVictorias = (100 * $cantVictorias) / $cantPartidas;
    

    // mostrar en pantalla un resumen de las estadísticas de un jugador en el juego.
    echo "******************************************\n";
    echo "Jugador:", escribirAmarillo($nombreJugador),"\n";
    echo "Partidas: ", $resumenJugador ["partidas"],"\n";
    echo "Puntaje Total: ", $resumenJugador["puntaje"], "\n";
    echo "Victorias: ",$resumenJugador["victoria"], "\n";
    echo "Porcentaje Victorias: ".floor($porcentajeVictorias)."% \n";
    echo "Adivinadas:\n";
    echo "        Intento 1 : ", $resumenJugador["intento1"], "\n";
    echo "        Intento 2 : ", $resumenJugador["intento2"], "\n";
    echo "        Intento 3 : ", $resumenJugador["intento3"], "\n";
    echo "        Intento 4 : ", $resumenJugador["intento4"], "\n";
    echo "        Intento 5 : ", $resumenJugador["intento5"], "\n";
    echo "        Intento 6 : ", $resumenJugador["intento6"], "\n";
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
        echo "Ingrese el nombre del Jugador: ";
        $nombreUsuario = trim(fgets(STDIN));
        //strtolower >> convierte el nombre en minusculas
        $nombreUsuario = strtolower($nombreUsuario);
    }while (!ctype_alpha($nombreUsuario [0]));
    //cyte_alpha >> verifica sin los caracteres nombrados sean de tipo string

    return ($nombreUsuario);
}

//CONSIGNA Nº11
/**
 * Esta funcion compara los nombres de jugadores, en caso de ser iguales, compara las palabras jugadas de los mismos.
 * @param array $clave1
 * @param array $clave2
 * @return int
 */
function comparacionJugadores ($clave1, $clave2) 
{
    //int $comparacionNombreJugador, $comparacionPorPalabra

    $comparacionNombreJugador = strcmp($clave1["jugador"], $clave2["jugador"]);

    if ($comparacionNombreJugador != 0) {
        $comparacionFinal = $comparacionNombreJugador;
    } else {
        $comparacionPorPalabra = strcmp($clave1["palabraWordix"], $clave2["palabraWordix"]);
        $comparacionFinal = $comparacionPorPalabra;
    }

    return($comparacionFinal);
}

//OPCION Nº2 DEL MENU DE OPCIONES
/**
 * Retorna un arreglo de palabras ya usadas por jugador.
 * @param string $nombreJugador
 * @param array $palabrasTotales
 * @param array $partidaJugador
 * @return array
 */
function palabrasUsadas($nombreJugador, $partidaJugador)
{   
    // array $palabrasSeleccionadas

    $palabrasSeleccionadas = [];
    // Almacena las palabras YA usadas por el jugador.
    foreach ($partidaJugador as $laPartida) {
        if ($laPartida["jugador"] == $nombreJugador) {
            $palabrasSeleccionadas[] = strtoupper($laPartida["palabraWordix"]);
        }
    }

    return($palabrasSeleccionadas);
}

/**
 * Se encarga de dar una palabra aleatoria la cual no haya sido jugada por el mismo Jugador.
 * @param array $palabrasUsadas
 * @param array $palabrasCargadas
 * @return string
 */
function palabraAleatoria ($palabrasUsadas, $palabrasCargadas)
{
    //string $palabraAlAzar int $indice boolean $esPalabraRepetida 
    $esPalabraRepetida = false;

    do{
        $indice = rand(0, count($palabrasUsadas) - 1);
        $palabraAlAzar = $palabrasCargadas[$indice];

        foreach ($palabrasUsadas as $palabra){
            if($palabra == $palabraAlAzar){
                $esPalabraRepetida = true;
            }
        }
    }while($esPalabraRepetida == true);

    return ($palabraAlAzar);
}

/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:
/*
    array $palabrasTotales
    array $partidasTotales
    array $estadisticasJugadores
    array $ordenDePalabras
 */

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
            $rangoMin = 1;
            $rangoMax = count($palabrasTotales) + 1;

            $nombreJugador = solicitarNombreJugador();
            $numeroElegido = solicitarNumeroEntre ($rangoMin, $rangoMax);

            $palabraSeleccionada = $palabrasTotales[$numeroElegido - 1];
            $partidaJugador = jugarWordix($palabraSeleccionada, $nombreJugador);
            
            array_push($partidasTotales, $partidaJugador);
            array_push($ordenDePalabras, ["jugador" => $nombreJugador, "palabraWordix" => $palabraSeleccionada]);

            break;
        case 2: 
            $nombreJugador = solicitarNombreJugador();
            $palabrasYaJugadas = palabrasUsadas($nombreJugador,$partidasTotales);

            if((count($palabrasYaJugadas) == count($palabrasTotales))){
                echo escribirRojo("(!) Ya jugo con todas las palabras disponibles."). "\n";
            }else{
                $palabraElegida = palabraAleatoria($palabrasYaJugadas, $palabrasTotales);
                $partidaJugador = jugarWordix($palabraElegida, $nombreJugador);
                array_push($partidasTotales, $partidaJugador);
                array_push($ordenDePalabras, ["palabraWordix" => $palabraElegida, "jugador" => $nombreJugador]);
            }
        
            break;
        case 3:
            do {
                echo "Ingrese número de partida: ";
                $nroDePartida = trim(fgets(STDIN));
            
                if ($nroDePartida >= 1 && $nroDePartida < count($partidasTotales) + 1) {
                    $datosPartida = imprimirDatosPartida($nroDePartida - 1 , $partidasTotales);
                } else {
                    echo escribirRojo("(!) El número ingresado de partida NO existe."). "\n";
                }
            } while ($nroDePartida < 1 || $nroDePartida >= count($partidasTotales) + 1);

            break;
        case 4:
            $nombreJugador = solicitarNombreJugador();
            $partidaGanadora = partidaGanada($partidasTotales,$nombreJugador);
            
            if ($partidaGanadora !== -1){
                $partidaGanadora = $partidaGanadora;
                $imprimeDatosPartida = imprimirDatosPartida($partidaGanadora,$partidasTotales);
            }else{
                echo escribirRojo("(!) El jugador <<$nombreJugador>> no jugó o no ganó ninguna partida.")."\n";
            }

            break;
        case 5:
            $nombreJugador = solicitarNombreJugador();
            $resumenJugador = calcularResumenJugador($nombreJugador, $partidasTotales);
            array_push($estadisticasJugadores, $resumenJugador);

            break;
        case 6:
            // Ordenar las partidas
            usort($ordenDePalabras, 'comparacionJugadores');

            // Imprime las partidas ordenadas mediante un recorrido exhaustivo
            $indice = 1;
            foreach ($ordenDePalabras as $partida) {
                echo escribirVerde("Lugar: $indice"). "\n";
                print_r($partida);
                echo "\n";
                $indice++;
            }
            echo "\n";

            break;
        case 7:
            $palabraNueva = leerPalabra5Letras();
            $palabraValida = agregarPalabra($palabrasTotales, $palabraNueva);

            // Si la palabra no está en la colección, sera agregada
            if (!$palabraValida) {
                array_push($palabrasTotales, $palabraNueva);
                echo escribirVerde("¡Palabra agregada con éxito!")."\n";
            } else {
                echo escribirRojo("(!) La palabra ingresada ya pertenece a la colección.")."\n";
            }
            break;
        }
} while ($opcion !=8);

escribirGris("¡Gracias por jugar a Wordix! Vuelva pronto :)");
?>
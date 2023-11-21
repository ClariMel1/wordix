<?php

/*
La librería JugarWordix posee la definición de constantes y funciones necesarias
para jugar al Wordix.
Puede ser utilizada por cualquier programador para incluir en sus programas.
*/

/**************/
/** DEFINICION DE CONSTANTES ****/
/**************/
const CANT_INTENTOS = 7;

/*
    disponible: letra que aún no fue utilizada para adivinar la palabra
    encontrada: letra descubierta en el lugar que corresponde
    pertenece: letra descubierta, pero corresponde a otro lugar
    descartada: letra descartada, no pertence a la palabra
*/
const ESTADO_LETRA_DISPONIBLE = "disponible";
const ESTADO_LETRA_ENCONTRADA = "encontrada";
const ESTADO_LETRA_DESCARTADA = "descartada";
const ESTADO_LETRA_PERTENECE = "pertenece";

/**************/
/** DEFINICION DE FUNCIONES ***/
/**************/

//CONSIGNA Nº5
/**
 * solicita el numero ,minimo y maximo
 *@param int $min,$max
 * @return int 
 */
function solicitarNumeroEntre($min, $max)
{
    //int $numero
    echo "ingrese un numero:";
    $numero = trim(fgets(STDIN));

    if (is_numeric($numero)) { //determina si un string es un número. puede ser float como entero.
        $numero  = $numero * 1; //con esta operación convierto el string en número.
    }
    while (!(is_numeric($numero) && (($numero == (int)$numero) && ($numero >= $min && $numero <= $max)))) {
        echo "Debe ingresar un número entre " . $min . " y " . $max . ": ";
        $numero = trim(fgets(STDIN));
        if (is_numeric($numero)) {
            $numero  = $numero * 1;
        }
    }
    return $numero;
}

/**
 * Escrbir un texto en color ROJO
 * @param string $texto
 */
function escribirRojo($texto)
{
    echo "\e[1;37;41m $texto \e[0m";
}

/**
 * Escrbir un texto en color VERDE
 * @param string $texto
 */
function escribirVerde($texto)
{
    echo "\e[1;37;42m $texto \e[0m";
}

/**
 * Escrbir un texto en color AMARILLO
 * @param string $texto
 */
function escribirAmarillo($texto)
{
    echo "\e[1;37;43m $texto \e[0m";
}

/**
 * Escrbir un texto en color GRIS
 * @param string $texto
 */
function escribirGris($texto)
{
    echo "\e[1;34;47m $texto \e[0m";
}

/**
 * Escrbir un texto pantalla.
 * @param string $texto
 */
function escribirNormal($texto)
{
    echo "\e[0m $texto \e[0m";
}

/**
 * Escribe un texto en pantalla teniendo en cuenta el estado.
 * @param string $texto
 * @param string $estado
 */
function escribirSegunEstado($texto, $estado)
{
    switch ($estado) {
        case ESTADO_LETRA_DISPONIBLE:
            escribirNormal($texto);
            break;
        case ESTADO_LETRA_ENCONTRADA:
            escribirVerde($texto);
            break;
        case ESTADO_LETRA_PERTENECE:
            escribirAmarillo($texto);
            break;
        case ESTADO_LETRA_DESCARTADA:
            escribirRojo($texto);
            break;
        default:
            echo " $texto ";
            break;
    }
}

/**
 * La función escribe un mensaje de bienvenida al jugador
 *@param string $usuario
 */
function escribirMensajeBienvenida($usuario)
{
    echo "*****************\n";
    echo "** Hola ";
    escribirAmarillo($usuario);
    echo " Juguemos una PARTIDA de WORDIX! **\n";
    echo "*****************\n";
}


/**
 * Verifica si la palabra ingresada esta conformada solo por letras
 * @param $cadena
 * @return boolean
 */
function esPalabra($cadena)
{
    //int $cantCaracteres, $i, boolean $esLetra
    $cantCaracteres = strlen($cadena);
    $esLetra = true;
    $i = 0;
    while ($esLetra && $i < $cantCaracteres) {
        $esLetra =  ctype_alpha($cadena[$i]);
        $i++;
    }
    return $esLetra;
}

//CONSIGNA Nº4
/**
 * Lee una palabra de 5 letras desde la entrada (teclado)
 * @param string $palabra
 * @return string
 */
function leerPalabra5Letras()
{
    //string $palabra
    echo "Ingrese una palabra de 5 letras: ";
    $palabra = trim(fgets(STDIN));
    $palabra  = strtoupper($palabra);

    while ((strlen($palabra) != 5) || !esPalabra($palabra)) {
        echo "Debe ingresar una palabra de 5 letras:";
        $palabra = strtoupper(trim(fgets(STDIN)));
    }
    return $palabra;
}


/**
 * Inicia una estructura de datos Teclado. La estructura es de tipo: asociativo
 *@return array
 */
function iniciarTeclado()
{
    //array $teclado (arreglo asociativo, cuyas claves son las letras del alfabeto)
    $teclado = [
        "A" => ESTADO_LETRA_DISPONIBLE, "B" => ESTADO_LETRA_DISPONIBLE, "C" => ESTADO_LETRA_DISPONIBLE, "D" => ESTADO_LETRA_DISPONIBLE, "E" => ESTADO_LETRA_DISPONIBLE,
        "F" => ESTADO_LETRA_DISPONIBLE, "G" => ESTADO_LETRA_DISPONIBLE, "H" => ESTADO_LETRA_DISPONIBLE, "I" => ESTADO_LETRA_DISPONIBLE, "J" => ESTADO_LETRA_DISPONIBLE,
        "K" => ESTADO_LETRA_DISPONIBLE, "L" => ESTADO_LETRA_DISPONIBLE, "M" => ESTADO_LETRA_DISPONIBLE, "N" => ESTADO_LETRA_DISPONIBLE, "Ñ" => ESTADO_LETRA_DISPONIBLE,
        "O" => ESTADO_LETRA_DISPONIBLE, "P" => ESTADO_LETRA_DISPONIBLE, "Q" => ESTADO_LETRA_DISPONIBLE, "R" => ESTADO_LETRA_DISPONIBLE, "S" => ESTADO_LETRA_DISPONIBLE,
        "T" => ESTADO_LETRA_DISPONIBLE, "U" => ESTADO_LETRA_DISPONIBLE, "V" => ESTADO_LETRA_DISPONIBLE, "W" => ESTADO_LETRA_DISPONIBLE, "X" => ESTADO_LETRA_DISPONIBLE,
        "Y" => ESTADO_LETRA_DISPONIBLE, "Z" => ESTADO_LETRA_DISPONIBLE
    ];
    return $teclado;
}

/**
 * Escribe en pantalla el estado del teclado. Acomoda las letras en el orden del teclado QWERTY
 * @param array $teclado
 */
function escribirTeclado($teclado)
{
    //array $ordenTeclado (arreglo indexado con el orden en que se debe escribir el teclado en pantalla)
    //string $letra, $estado
    $ordenTeclado = [
        "salto",
        "Q", "W", "E", "R", "T", "Y", "U", "I", "O", "P", "salto",
        "A", "S", "D", "F", "G", "H", "J", "K", "L", "salto",
        "Z", "X", "C", "V", "B", "N", "M", "salto"
    ];

    foreach ($ordenTeclado as $letra) {
        switch ($letra) {
            case 'salto':
                echo "\n";
                break;
            default:
                $estado = $teclado[$letra];
                escribirSegunEstado($letra, $estado);
                break;
        }
    }
    echo "\n";
};


/**
 * Escribe en pantalla los intentos de Wordix para adivinar la palabra
 * @param array $estruturaIntentosWordix
 */
function imprimirIntentosWordix($estructuraIntentosWordix)
{
    $cantIntentosRealizados = count($estructuraIntentosWordix);
    //$cantIntentosFaltantes = CANT_INTENTOS - $cantIntentosRealizados;

    for ($i = 0; $i < $cantIntentosRealizados; $i++) {
        $estructuraIntento = $estructuraIntentosWordix[$i];
        echo "\n" . ($i + 1) . ")  ";
        foreach ($estructuraIntento as $intentoLetra) {
            escribirSegunEstado($intentoLetra["letra"], $intentoLetra["estado"]);
        }
        echo "\n";
    }

    for ($i = $cantIntentosRealizados; $i < CANT_INTENTOS; $i++) {
        echo "\n" . ($i + 1) . ")  ";
        for ($j = 0; $j < 5; $j++) {
            escribirGris(" ");
        }
        echo "\n";
    }
    //echo "\n" . "Le quedan " . $cantIntentosFaltantes . " Intentos para adivinar la palabra!";
}

/**
 * Dada la palabra wordix a adivinar, la estructura para almacenar la información del intento 
 * y la palabra que intenta adivinar la palabra wordix.
 * devuelve la estructura de intentos Wordix modificada con el intento.
 * @param string $palabraWordix
 * @param array $estruturaIntentosWordix
 * @param string $palabraIntento
 * @return array estructura wordix modificada
 */
function analizarPalabraIntento($palabraWordix, $estruturaIntentosWordix, $palabraIntento)
{
    $cantCaracteres = strlen($palabraIntento);
    $estructuraPalabraIntento = []; /*almacena cada letra de la palabra intento con su estado */
    for ($i = 0; $i < $cantCaracteres; $i++) {
        $letraIntento = $palabraIntento[$i];
        $posicion = strpos($palabraWordix, $letraIntento);
        if ($posicion === false) {
            $estado = ESTADO_LETRA_DESCARTADA;
        } else {
            if ($letraIntento == $palabraWordix[$i]) {
                $estado = ESTADO_LETRA_ENCONTRADA;
            } else {
                $estado = ESTADO_LETRA_PERTENECE;
            }
        }
        array_push($estructuraPalabraIntento, ["letra" => $letraIntento, "estado" => $estado]);
    }

    array_push($estruturaIntentosWordix, $estructuraPalabraIntento);
    return $estruturaIntentosWordix;
}

/**
 * Actualiza el estado de las letras del teclado. 
 * Teniendo en cuenta que una letra sólo puede pasar:
 * de ESTADO_LETRA_DISPONIBLE a ESTADO_LETRA_ENCONTRADA, 
 * de ESTADO_LETRA_DISPONIBLE a ESTADO_LETRA_DESCARTADA, 
 * de ESTADO_LETRA_DISPONIBLE a ESTADO_LETRA_PERTENECE
 * de ESTADO_LETRA_PERTENECE a ESTADO_LETRA_ENCONTRADA
 * @param array $teclado
 * @param array $estructuraPalabraIntento
 * @return array el teclado modificado con los cambios de estados.
 */
function actualizarTeclado($teclado, $estructuraPalabraIntento)
{
    foreach ($estructuraPalabraIntento as $letraIntento) {
        $letra = $letraIntento["letra"];
        $estado = $letraIntento["estado"];
        switch ($teclado[$letra]) {
            case ESTADO_LETRA_DISPONIBLE:
                $teclado[$letra] = $estado;
                break;
            case ESTADO_LETRA_PERTENECE:
                if ($estado == ESTADO_LETRA_ENCONTRADA) {
                    $teclado[$letra] = $estado;
                }
                break;
        }
    }
    return $teclado;
}

/**
 * Determina si se ganó una palabra intento posee todas sus letras "Encontradas".
 * @param array $estructuraPalabraIntento
 * @return boolean
 */
function esIntentoGanado($estructuraPalabraIntento)
{
    $cantLetras = count($estructuraPalabraIntento);
    $i = 0;

    while ($i < $cantLetras && $estructuraPalabraIntento[$i]["estado"] == ESTADO_LETRA_ENCONTRADA) {
        $i++;
    }

    if ($i == $cantLetras) {
        $ganado = true;
    } else {
        $ganado = false;
    }

    return $ganado;
}

/**
 * Determina el puntaje del ganador mediante la cantidad de intentos y la palabra usada
 * @param int $nroIntento
 * @param string $palabraWordix
 * @return int
 */
function obtenerPuntajeWordix($nroIntento, $palabraWordix) 
{
    if ($nroIntento > 0){
        if($nroIntento == 1){
            $puntaje = 6;
        }elseif($nroIntento ==2){
            $puntaje = 5;
        }elseif($nroIntento == 3){
            $puntaje = 4;
        }elseif($nroIntento == 4){
            $puntaje = 3;
        }elseif($nroIntento == 5){
            $puntaje = 2;
        }elseif($nroIntento ==6){
            $puntaje = 1;
        }
    }else{
        $puntaje = 0;
    };
    
    for($i =0; $i < strlen($palabraWordix); $i++){
        $letra = strtolower($palabraWordix [$i]);
        if(strpos ("aeiou", $letra)!== false){
            $puntaje = $puntaje + 1;
        }elseif($letra <= "m"){
            $puntaje = $puntaje + 2;
        }else{
            $puntaje = $puntaje + 3;
        }
    }

    return ($puntaje);
}

/**
 * Dada una palabra para adivinar, juega una partida de wordix intentando que el usuario adivine la palabra.
 * @param string $palabraWordix
 * @param string $nombreUsuario
 * @return array estructura con el resumen de la partida, para poder ser utilizada en estadísticas.
 */
function jugarWordix($palabraWordix, $nombreUsuario)
{
    //Inicialización/
    $arregloDeIntentosWordix = [];
    $teclado = iniciarTeclado();
    escribirMensajeBienvenida($nombreUsuario);
    $nroIntento = 1;
    do {

        echo "Comenzar con el Intento " . $nroIntento . ":\n";
        $palabraIntento = leerPalabra5Letras();
        $indiceIntento = $nroIntento - 1;
        $arregloDeIntentosWordix = analizarPalabraIntento($palabraWordix, $arregloDeIntentosWordix, $palabraIntento);
        $teclado = actualizarTeclado($teclado, $arregloDeIntentosWordix[$indiceIntento]);
        /*Mostrar los resultados del análisis: */
        imprimirIntentosWordix($arregloDeIntentosWordix);
        escribirTeclado($teclado);
        /*Determinar si la plabra intento ganó e incrementar la cantidad de intentos */

        $ganoElIntento = esIntentoGanado($arregloDeIntentosWordix[$indiceIntento]);
        $nroIntento++;
    } while ($nroIntento <= CANT_INTENTOS && !$ganoElIntento);


    if ($ganoElIntento) {
        $nroIntento--;
        $puntaje = obtenerPuntajeWordix($nroIntento, $palabraIntento);
        echo "Adivinó la palabra Wordix en el intento " . $nroIntento . "!: " . $palabraIntento . " Obtuvo $puntaje puntos!";
    } else {
        $nroIntento = 0; //reset intento
        $puntaje = 0;
        echo "Seguí Jugando Wordix, la próxima será! ";
    }

    $partida = [
        "palabraWordix" => $palabraWordix,
        "jugador" => $nombreUsuario,
        "intentos" => $nroIntento,
        "puntaje" => $puntaje
    ];

    return $partida;
}

/***********************************************/
//FUNCIONES DEL EQUIPO DE DESARROLLO 
/***********************************************/

//CONSIGNA Nº3
/**
 * Esta función muestra el menú de opciones del juego y obliga a que seleccione una opcion correcta
 * @return int $opcion
 */
function seleccionarOpcion()
{
    //arraysting $opcines
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
    
    echo "***************************************************"."\n";
    echo "Partida WORDIX " . $nroPartida . ":" . "palabra " . strtoupper($partidaAux["palabraWordix"])."\n";
    echo "Jugador:" . $partidaAux["jugador"]."\n";
    echo "Puntaje:" . $partidaAux["puntaje"]."\n";
    if($partidaAux["intentos"] == 0){
        echo "Intento: No adivinó la palabra."."\n";
    }else{
        echo "Intento: Adivinó la palabra en ". $partidaAux["intento"]. " intentos". "\n";
    }
    echo "***************************************************"."\n";
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
 * Escribe en patalla el resumen de la partida de un jugador.
 * @param array $resumenJugador
 * @param string $jugador
 */
function imprimirResumenJugador ($resumenJugador, $jugador)
{
    // mostrar en pantalla un resumen de las estadísticas de un jugador en el juego.
    echo "***************************************************\n";
    echo "Jugador:", escribirAmarillo($jugador),"\n";
    echo "Partidas:", $resumenJugador ["partidas"],"\n";
    echo "Puntaje Total:", $resumenJugador["puntaje"], "\n";
    echo "Victorias:",$resumenJugador["victoria"], "\n";
    echo "Porcentaje Victorias: \n";
    echo "Adivinadas:\n";
    echo "        Intento 1 :", $resumenJugador["intento1"], "\n";
    echo "        Intento 2 :", $resumenJugador["intento2"], "\n";
    echo "        Intento 3 :", $resumenJugador["intento3"], "\n";
    echo "        Intento 4 :", $resumenJugador["intento4"], "\n";
    echo "        Intento 5 :", $resumenJugador["intento5"], "\n";
    echo "        Intento 6 :", $resumenJugador["intento6"], "\n";
    echo "***************************************************\n";
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
function solicitarJugador ()
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
    //string $comparacionNombreJugador

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

$coleccionPartidas = [ 
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

// Ordenar las partidas
usort($coleccionPartidas, 'miComparacion');

// Imprimir las partidas ordenadas con índices comenzando en 1


$indice = 1;
foreach ($coleccionPartidas as $partida) { //recorrido exhaustivo para mostrar todas
    echo "Lugar: $indice\n";
    print_r($partida);
    echo "\n";
    $indice++;
}
echo "\n";

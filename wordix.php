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

/**
 * solicita el numero ,minimo y maximo
 *@param int $min,$max
 * @return int 
 */
function solicitarNumeroEntre($min, $max)
{
    //int $numero

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
 *
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

/**
 *
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


/*
FUNCIONES DEL EQUIPO DE DESARROLLO 
*/

//consigna Nº2
/**
 * Esta función muestra una estructura de datos con ejemplos de partidas ya jugadas 
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

//consigna Nº3
/**
 * Esta función muestra el menú de opciones del juego
 * @param arraystring $opciones
 * @param int $key $opcion
 * @return int $opcion
 */
function seleccionarOpcion(){
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
    foreach($opciones as $key => $opcion){
        echo ($key + 1). ") " . $opcion."\n";

    }
    do{
        echo "Ingrese el número de la opción deseada: ";
        $eleccion = trim(fgets(STDIN));
        if($eleccion < 1 || $eleccion > count($opciones)){
            echo "Opción no válida. Pruebe otra opción"."\n";
        }
    }while($eleccion < 1 || $eleccion > count($opciones));
 return $eleccion;
}

$opcion = seleccionarOpcion();
echo "Has seleccionado la opción " . $opcion . "\n";

//consigna Nº4 case 7
/**
 * La función solicita ingresar una palabra de 5 letras 
 * @param string $palabra5Letras
 * @return string $palabra5Letras
 */
//leerPalabra5Letras()

//nr5
//solicitarNumeroEntre($min, $max)                                     //cual de las 2 5 uso clara?
/**
 * Esta función solicita un número entre un rango de valores
 * @param int $numero $numeroCorrecto $valor 
 * @return int $numeroCorreto
 */


//consigna Nº5
function numeroCorrecto($rangoValores){
    do{
    echo "Ingrese un numero: ";
    $numero = trim(fgets(STDIN));
    $numeroCorrecto = 0;

    foreach($rangoValores as $valor){
        if($numero == $valor){
            $numeroCorrecto = $numero;
        }   
    }  
    }while(!$numeroCorrecto); 
    return $numeroCorrecto;
}

$rangoValores = array(1,5,4,2,3);
$aux=numeroCorrecto($rangoValores);

echo $aux;

//consigna Nº6
/**
 * La función muestra los datos de una partida según un número ingresado
 * @param int $partidaAux 
 * @param array $datosPartidas
 */

 function mostrarDatosPartida($nroPartida, $datosPartidas){
    $partidaAux = $datosPartidas[$nroPartida - 1];
    echo "****************"."\n";
    echo "partida wordix " . $nroPartida . ":" . "palabra" . $partidaAux["palabraWordix"]."\n";
    echo "jugador:" . $partidaAux["jugador"]."\n";
    echo "puntaje:" . $partidaAux["puntaje"]."\n";
    if($partidaAux["intentos"] == 0){
        echo "Intento: No adivinó la palabra"."\n";
    }
    else{
        echo "Intento: Encontro la palabra"."\n";
    }
}

//consigna Nº7
$palabrasGuardadas = [                       
    "MUJER", "QUESO", "FUEGO", "CASAS", "RASGO",
    "GATOS", "GOTAS", "HUEVO", "TINTO", "NAVES",
    "VERDE", "MELON", "YUYOS", "PIANO", "PISOS",
    "CEBRA", "MANGO", "LINCE", "FLAMA", "GRANO"];

function agregarPalabra($palabrasGuardadas,$palabra){
    $coleccionModificada = array_push ($palabrasGuardadas,$palabra);
    return $coleccionModificada;
}

//consigna Nº8
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

function nombre($coleccionPartidas,$nombre){
    $resultado = -1;
    foreach($coleccionPartidas as $llave => $partidasGuardadas ){
        if($partidasGuardadas["jugador"]== $nombre && $partidasGuardadas["intentos"] > 0){
            $resultado = $llave;
        }
}
        return $resultado;
} 
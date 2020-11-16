<?php
    $preguntas_examen = array(
        0 => array(
            'pregunta' => 'Para incluir una biblioteca en c++ se utiliza la siguiente sentencia:',
            'respuesta' => 'b',
            'a' => '#include (stdlib)',
            'b' => '#include <stdlib>',
            'c' => 'cin >> variable1;',
            'd' => 'cout << "biblioteca";'
        ), 
        1 => array(
            'pregunta' => 'La definición de una variable se realiza de la siguiente manera:',
            'respuesta' => 'c',
            'a' => 'include variable1;',
            'b' => 'const int variable1=25;',
            'c' => 'int variable1;',
            'd' => 'int variable1=25;'
        ),
        2 => array(
            'pregunta' => 'En el proceso de Compilar, pueden aparecer 2 tipos de errores:',
            'respuesta' => 'a',
            'a' => 'Errores de compilación y de ejecución',
            'b' => 'Errores de entrada y salida',
            'c' => 'Errores de etrada y ejecución',
            'd' => 'Errores de compilación y salida'
        ),
        3 => array(
            'pregunta' => 'La sentencia en C++: const float PI=3.14; hace referencia a:',
            'respuesta' => 'b',
            'a' => 'Una variable',
            'b' => 'Una constante',
            'c' => 'Una biblioteca',
            'd' => 'Ninguna de las anteriores'
        ),
        4 => array(
            'pregunta' => 'Las Variables...',
            'respuesta' => 'd',
            'a' => 'No pueden contener espacios en blanco',
            'b' => 'No deben sobrepasar una longitud máxima',
            'c' => 'Pueden contener letras, números y caracteres de subrayado (_) y deben comenzar por una letra',
            'd' => 'Todas las anteriores'
        ),
        5 => array(
            'pregunta' => 'char variable1; Hace referencia a una variable de tipo:',
            'respuesta' => 'b',
            'a' => 'Entero Largo',
            'b' => 'Caracter',
            'c' => 'Cadena',
            'd' => 'Entero'
        ),
        6 => array(
            'pregunta' => 'Se le llama ______ a cada una de las constantes, variables o expresiones involucradas en una operación o expresión.',
            'respuesta' => 'a',
            'a' => 'Operando',
            'b' => 'Operador',
            'c' => 'Variable',
            'd' => 'Expresión'
        ),
        7 => array(
            'pregunta' => '¿Qué símbolo usa el operador ternario?',
            'respuesta' => 'b',
            'a' => '??',
            'b' => '?',
            'c' => '==',
            'd' => '<>'
        ),
        8 => array(
            'pregunta' => '¿Qué símbolo se usa para definir un destructor de clase?',
            'respuesta' => 'c',
            'a' => '-',
            'b' => '+',
            'c' => '~',
            'd' => 'Ninguna de las anteriores'
        ),
        9 => array(
            'pregunta' => '¿Que símbolo/s se usa/n para definir un puntero que apunta a otro puntero?',
            'respuesta' => 'b',
            'a' => '*',
            'b' => '**',
            'c' => '&*',
            'd' => '&'
        ),
        10 => array(
            'pregunta' => 'Un arreglo:',
            'respuesta' => 'a',
            'a' => 'Almacena muchos elementos del mismo tipo',
            'b' => 'Almacena muchos elementos sin distinción alguna',
            'c' => 'Almacena un solo valor',
            'd' => 'Ninguna de las anteriores'
        ),
        11 => array(
            'pregunta' => 'La forma correcta de declarar un arreglo que pueda guardar 10 enteros es:',
            'respuesta' => 'b',
            'a' => 'int array[] = 9;',
            'b' => 'int array[9];',
            'c' => 'float array(9);',
            'd' => 'int array(9);'
        ),
        12 => array(
            'pregunta' => 'Los arreglos que tienen un sólo índice se denominan:',
            'respuesta' => 'd',
            'a' => 'Arreglos Simples',
            'b' => 'Arreglos Compuestos',
            'c' => 'Arreglos Individuales',
            'd' => 'Arreglos Unidimensionales'
        ),
        13 => array(
            'pregunta' => 'for (x= 1 ; x >= 10; x=x+1 ) { cuerpo };',
            'respuesta' => 'b',
            'a' => 'Condición de dos caminos',
            'b' => 'Ciclo for',
            'c' => 'Condición de "n" caminos',
            'd' => 'Ciclo while'
        )
    );

    require "generarExamen.php";

?>
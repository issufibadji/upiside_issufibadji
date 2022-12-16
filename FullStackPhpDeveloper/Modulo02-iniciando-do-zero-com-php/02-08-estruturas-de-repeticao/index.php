<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.08 - Estruturas de repetição");

/*
 * [ while ] https://php.net/manual/pt_BR/control-structures.while.php
 * [ do while ] https://php.net/manual/pt_BR/control-structures.do.while.php
 */
fullStackPHPClassSession("while, do while", __LINE__);
//enquanto for verdadeiro execute
    $looping = 1;
    $while = [];

    while ($looping <= 5) {
        $while[] = $looping;
        $looping++;
    }
    
    var_dump($while);

//executa e depois faça validação se for verdadeiro
    $looping = 5;
    $while = [];

    do {
        $while[] = $looping;
        $looping--;
    } while ($looping >= 1);

    var_dump($while);

/*
 * [ for ] https://php.net/manual/pt_BR/control-structures.for.php
 */
fullStackPHPClassSession("for", __LINE__);
////enquanto  $i <= 10; for verdadeiro execute
    for ($i = 1; $i <= 10; $i++) {
        echo "<p>{$i}</p>";
    }

/**
 * [ break ] https://php.net/manual/pt_BR/control-structures.break.php
 * [ continue ] https://php.net/manual/pt_BR/control-structures.continue.php
 */
fullStackPHPClassSession("break, continue", __LINE__);

    for ($c = 1; $c <= 10; $c++) {
        if ($c % 2 == 1) {
            continue;//contunua até }
        }

        if ($c >= 10) {
            break;
        }
//se nenhuma das condiçoes for atendida
        echo "<p>Pulou + 2 :: {$c}</p>";
    }

/**
 * [ foreach ] https://php.net/manual/pt_BR/control-structures.foreach.php
 */
fullStackPHPClassSession("foreach", __LINE__);

    $array = [];
    for ($ar = 1; $ar <= 5; $ar++) {
        $array[] = $ar;
    }

    var_dump($array);
// foreach serve para abrir array ou obejtos multidimencionais
    foreach ($array as $item) {
        echo "<p>{$item}</p>";
    }

    foreach ($array as $key => $value) {
        //var_dump("{$key} = {$value}");
         echo "<p>{$key} = {$value}</p>";
    }

   
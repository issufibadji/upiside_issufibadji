<?php


function functionName($arg1, $arg2, $arg3)
{
    $body = [$arg1, $arg2, $arg3];
    return $body;

}

//colocar argumentos de acordo com prioridade de dados(obrigat, interessante, não impotante)
function optionArgs($arg1, $arg2 = true, $arg3 = null)
{
    $body = [$arg1, $arg2, $arg3];
    return $body;
}

//variavel global
function calcImc()
{
    global $weight;
    global $height;
    return $weight / ($height * $height);
}


function payTotal($price)
{
    static $total;//atributo status
    $total += $price;
    return "<p>O total a pagar é R$ " . number_format($total, "2", ",", ".") . "</p>";
}

//argument dinamica
function myTeam()
{
    $teamNames = func_get_args();
    $teamCount = func_num_args();
    return ["members" => $teamNames, "count" => $teamCount];
}
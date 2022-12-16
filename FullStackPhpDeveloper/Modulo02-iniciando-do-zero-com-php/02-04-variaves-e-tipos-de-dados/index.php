<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);
//CAME KEYS
$userFirstName = "Issufi";
$userLastName = "Badji";
$userAge = 20;
$userEmail = "issufibj@gmail.com.br";
echo "<p> {$userFirstName} {$userLastName}  <span class='tag'>tem {$userAge}</span> e o email {$userEmail} </p>";

//ANDER CORES

$use_first_name = $userFirstName;
$user_last_name = $userLastName;
$user_age = 20;
$user_email = "<p>issufibj@gmail.com.br</p> ";
print "<h2> {$use_first_name} {$user_last_name } {$user_age } {$user_email}</h2>";

//VARIÁVEL VARIÁVEL=>é defenidao quando precisa de cadeia de valores dentro de variaável
$company = "thebestSoftware";
$$company = "treinamento"; //company=>thebestSoftware  e thebestSoftware=>treinamento
echo "<h3>{$company} {$thebestSoftware} </h3>";

///REFERENCIAL VARIÁVEL
$calcA = 10;
$calcB = 20;
//$calcB = $calcA; // saida 10
$calcB = &$calcA;//saida 10
$calcB = 20;// saida 20

var_dump([
    "a" => $calcA,
    "b" => $calcB,
]);


/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);
$true = true;
$false = false;
var_dump($true, $false);

$bestAge = ($userAge >50);
var_dump($bestAge);

$a = 0;
$b = 0.0;
$c = "";
$d = [];
$e = null;

var_dump($a, $b, $c, $d, $e);

if($a|| $b || $c || $d || $e){
  var_dump(true);
}else{
  var_dump(false);
};
//saida false
/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);

$code = "<article><h1>Uma call User Function</h1></article>";
$codeClear = call_user_func("strip_tags", $code);//callback para eliminar funçao/remove tag
var_dump($code, $codeClear);

$codeMore = function ($code){
  var_dump($code);
};
$codeMore ("#BoraProgramar!");
/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);

$string = "ola Mundo";
$array = [$string];
$object = new StdClass();
$null = null;
$int = 121132;
$float = 1.232113;
var_dump(
  [
    $string,
    $array,
    $object,
    $null,
    $int,
    $float
  ]
  );

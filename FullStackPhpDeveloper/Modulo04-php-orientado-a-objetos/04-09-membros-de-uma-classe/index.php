<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.09 - Membros de uma classe");

require __DIR__ . "/source/autoload.php";

/*
 * [ constantes ] http://php.net/manual/pt_BR/language.oop5.constants.php
 */
fullStackPHPClassSession("constantes", __LINE__);

use Source\Members\Config;

$config = new Config();
echo "<p>" . $config::COMPANY . "</p>";

var_dump(
    Config::COMPANY
    // Config::DOMAIN,
    // Config::SECTOR
);

$reflection = new ReflectionClass(Config::class); // Traz uma classe pronta para debugar qualquer rotina de classe

var_dump($config, $reflection, $reflection->getConstants(), get_class_methods($reflection));

/*
 * [ propriedades ] http://php.net/manual/pt_BR/language.oop5.static.php
 */
fullStackPHPClassSession("propriedades", __LINE__);

Config::$company = "UpInside";
Config::$domain = "upinside.com.br";
Config::$sector = "Educação";

// Acessando e alterando o valor da propriedade
$config::$sector = "Tecnologia";

// $reflection->getProperties() = Pega as propriedades
// $reflection->getDefaultProperties() = Pega as propriedades + seus valores(assosciative array)
var_dump($config, $reflection->getProperties(), $reflection->getDefaultProperties());

/*
 * [ métodos ] http://php.net/manual/pt_BR/language.oop5.static.php
 */
fullStackPHPClassSession("métodos", __LINE__);

$config::setConfig('', '', ''); // Chamando a função através do instanciamento da classe
Config::setConfig('Alura', 'alura.com.br', 'Educação'); // Chamando a função através da chamada global

var_dump($config, $reflection->getMethods(), $reflection->getDefaultProperties());

/*
 * [ exemplo ] Uma classe trigger
 */
fullStackPHPClassSession("exemplo", __LINE__);

use Source\Members\Trigger;

$trigger = new Trigger();
$trigger::show("Um objeto trigger");

var_dump($trigger);

Trigger::show("Essa é uma mensagem com gatilho rápido para o usuário!!!");
Trigger::show("Essa é uma mensagem com gatilho rápido para o usuário!!!", Trigger::ACCEPT);
Trigger::show("Essa é uma mensagem com gatilho rápido para o usuário!!!", Trigger::WARNING);
Trigger::show("Essa é uma mensagem com gatilho rápido para o usuário!!!", Trigger::ERROR);
echo "<br>";
echo Trigger::push("Esse é um retorno com gatilho rápido para o usuário!!!");
echo Trigger::push("Esse é um retorno com gatilho rápido para o usuário!!!", "accept"); // Usando uma string com o valor da constante
echo Trigger::push("Esse é um retorno com gatilho rápido para o usuário!!!", Trigger::WARNING); // Ou usando o modo global pra acessar a constante
echo Trigger::push("Esse é um retorno com gatilho rápido para o usuário!!!", Trigger::ERROR);

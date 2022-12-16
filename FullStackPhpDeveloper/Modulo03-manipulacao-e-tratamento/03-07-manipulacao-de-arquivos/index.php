<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.07 - Manipulação de arquivos");

/*
 * [ verificação de arquivos ] file_exists | is_file | is_dir
 */
fullStackPHPClassSession("verificação", __LINE__);

$file = __DIR__."/file.txt";

if(file_exists($file) && is_file($file)) { // Verificando se o arquivo existe e ele é um arquivo mesmo e não um dir
    echo "<p>O arquivo existe</p>";
} else {
    echo "<p>O arquivo não existe</p>";
}

/*
 * [ leitura e gravação ] fopen | fwrite | fclose | file
 */
fullStackPHPClassSession("leitura e gravação", __LINE__);

if(!file_exists($file) || !is_file($file)) {
    $fileOpen = fopen($file, "w"); // Abri o arquivo(fopen) e põe em modo de leitura e gravação
    fwrite($fileOpen, "Linha 01" . PHP_EOL); // Escrevendo no arquivo $fileOpen e concatenando com a quebra de linha (PHP_EOL)
    fwrite($fileOpen, "Linha 02" . PHP_EOL);
    fwrite($fileOpen, "Linha 03" . PHP_EOL);
    fwrite($fileOpen, "Lorem Ipsum is simply dummy text of the printing and typesetting industry." . PHP_EOL);
    fclose($fileOpen); // E depois da abertura e gravação, vem o fechamento do arquivo
} else {
    var_dump([
        file($file),
        pathinfo($file),
    ]);
}

echo "<p>" . file($file)[3] . "</p><br>";

$open = fopen($file, "r"); // "r" = Somente leitura
while(!feof($open)) { // feof = Enquanto não chegar ao final do arquivo continue
 echo "<p>". fgets($open) ."</p>"; // Pegando os dados do arquivo
} 

fclose($open);

/*
 * [ get, put content ] file_get_contents | file_put_contents
 */
fullStackPHPClassSession("get, put content", __LINE__);

$getContents = __DIR__ . "/teste2.txt";
if(file_exists($getContents) && is_file($getContents)) {
    echo file_get_contents($getContents); // Só trabalha com uma arquivo ja criado
} else {
    $data = "<article><h1>Robson</h1><p>CEO UpInside<br>cursos@upinside.com.br</p></article>";
    file_put_contents($getContents, $data);
    echo file_get_contents($getContents);
}

// unlink — Apaga um arquivo
// unlink($getContents);
// unlink($file);

if(file_exists(__DIR__ . "/teste3.txt") && is_file(__DIR__ . "/teste3.txt")) {
    unlink(__DIR__ . "/teste3.txt");
}
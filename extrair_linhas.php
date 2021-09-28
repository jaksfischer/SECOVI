<?php

$arquivo = strtolower(file_get_contents('texto.txt', 'r'));
$palavra = strtolower('especial');

if(strpos($arquivo, $palavra) !== FALSE) {
    echo '<h1>Existe a palavra ' . $palavra . ' no arquivo</h1>';
} else {
    echo '<h1>Não Existe a palavra ' . $palavra . ' no arquivo</h1>';
}
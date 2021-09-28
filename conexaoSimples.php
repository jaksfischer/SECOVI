<?php

$mysqli_connection = new mysqli('localhost', 'root', '', 'novoTeste');
if($mysqli_connection->connect_error){
    echo "Desconectado! Erro: " . $mysqli_connection->connect_error;
}else{
    $pessoas = mysqli_query("SELECT nome FROM pessoas");
    while($row = mysqli_fetch_array($pessoas)) {
        echo $row['nome'] . "<br />";
    }
}
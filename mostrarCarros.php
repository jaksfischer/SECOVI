<?php

$arquivo = file('carros.txt');
$linhas = count(file('carros.txt'));

$ids = '';

for($i = 0; $i < $linhas; $i++) {
    $ids = $ids . $arquivo[$i];
}

$sql = mysqli_query("SELECT 'id', 'modelo', 'cor' FROM carros WHERE id IN (".$ids.")");
$res = mysqli_fetch_array($sql);
<?php

$buscaPesoas = mysqli_query(
"SELECT p.id, p.nome, to_char(p.dt_insercao, 'DD/MM/YYYY') AS insercao, e.endereco, c.contato FROM pessoas AS p
    LEFT JOIN contatos AS c ON c.id_pessoa = p.id,
    LEFT JOIN enderecos AS e ON e.id_pessoa = p.id
WHERE c.contato != NULL");
$pessoas = mysqli_fetch_array($buscaPesoas);

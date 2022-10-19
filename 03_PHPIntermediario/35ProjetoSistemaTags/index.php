<?php
try {
    $pdo = new PDO("mysql:dbname=projeto_tags;host=localhost", "root", "bcd127");
} catch (PDOException $e) {
    echo "ERRO: ".$e->getMessage();
}

//consulta o banco
$query = "SELECT caracteristicas FROM usuarios";
$select = $pdo->query($query);

if ($select->rowCount() > 0) {
    $lista = $select->fetchAll();

    /*
        monta uma array
        sendo a que as chaves são as caracteristicas
        e os valores são a quantidade que elas se repetem

        ex:
        $caracteristicas["legal"] = 3
    */
    $caracteristicas = [];
    foreach ($lista as $usuario) {
        $palavras = explode(",", $usuario["caracteristicas"]);

        foreach ($palavras as $palavra) {
            $palavra = trim($palavra);

            if (isset($caracteristicas[$palavra])) {
                $caracteristicas[$palavra]++;
            } else {
                $caracteristicas[$palavra] = 1;
            }
        }
    }

    //ordena o array do maior para o menos
    arsort($caracteristicas);

    $adjetivos = array_keys($caracteristicas);
    $contagens = array_values($caracteristicas);

    $maior = max($contagens);
    $tamanhos = [11, 15, 20, 30];

    $qtdAdjetivos = count($adjetivos);
    $qtdTamanhos = count($tamanhos);

    for ($i = 0; $i < $qtdAdjetivos; $i++) {
        $n = $contagens[$i] / $maior;
        $indice = ceil($n * count($tamanhos)) - 1;
        echo "<p style='font-size:".$tamanhos[$indice]."'>".$adjetivos[$i]."(".$contagens[$i].")</p>";
    }
}



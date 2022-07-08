<?php
// Para ver mais funções matemáticas: https://www.php.net/manual/pt_BR/ref.math.php

function traco(){
    echo "<br/><hr/>";
}

echo "Valor de PI: ";
echo pi(); //retorna o valor de pi (π)
traco();


echo "Valor absoluto: ";
echo abs(-8.5); //retorna o valor absoluto (positivo)
traco();


echo "Arredonda p/ cima: ";
echo ceil(5.1); //arredonda p/ cima independente do valor da casa decimal
traco();


echo "Arredonda p/ baixo: ";
echo floor(5.9); //arredonda p/ baixo independente do valor da casa decimal
traco();


echo "Usa regra de arredondamento: ";
echo round(5.9); //arredonda usando a regra de arredondamento tradicional
traco();

echo "Usa regra de arredondamento: ";
echo round(5.167, 2); //pode receber um segundo parâmetro indicando as casas decimais
traco();


echo "Número aleatório: ";
echo rand(0, 100); //exibe um número aleatório, recebe valor mínimo e valor máximo
traco();


$notas = [10, 6, 4, 9, 7];


echo "Valor maior: ";
echo max($notas); //exibe o maior valor da lista recebida (10)
traco();

echo "Valor menor: ";
echo min($notas); //exibe o menor valor da lista recebida (4)
traco();

?>
<?php

/* 
    Modificadores de Acesso:
    Fonte: https://www.geeksforgeeks.org/what-is-the-difference-between-public-private-and-protected-in-php/
    Modificador de acesso público: 
        este modificador está aberto para uso dentro e fora da classe. 
    Modificador de acesso protegido: 
        este modificador está aberto para uso na classe em que está definido 
        e em suas classes pai ou herdadas.
    Modificador de acesso privado: 
        este modificador está aberto para uso apenas na classe em que está definido. 
*/

class Cat {
    //Isso são propriedades (características)
    public $color = "black";
    public $size = "small";
    public $breed = "undefined";

    //Isso são métodos (ações)
    public function meow()
    {
        //
    }

    public function introduceItself()
    {
        $color = $this->color;
        $size = $this->size;
        $breed = $this->breed;
        echo "Hello, I'm a ".$size." and ".$color." cat <br>";
        echo "My breed is ".$breed;
    }
}

$cat = new Cat();

//como essa propriedade é pública, é possível modifica-la aqui
$cat->color = "orange";
//como esse método é público, é possível acessa-lo aqui
$cat->introduceItself();

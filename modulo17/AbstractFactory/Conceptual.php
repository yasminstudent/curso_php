<?php
/**
 * ---------- Exemplo conceitual ----------
 * Este exemplo ilustra a estrutura do padrão de projeto Abstract Factory.
 * Ele se concentra em responder a estas perguntas:
 * 
 * De quais classes ele consiste?
 * Quais papéis essas classes desempenham?
 * De que maneira os elementos do padrão estão relacionados?
 * 
 * Depois de aprender sobre a estrutura do padrão, será mais fácil entender o 
 * exemplo a seguir, com base em um caso de uso PHP do mundo real.
 * 
 * De eu para eu: as anotações sobre o padrão se encontram no caderno
 */

/**
 * A interface fábrica abstrata declara um conjunto de métodos que retorna
 * diferentes produtos abstratos. Estes produtos são chamados uma família e estão
 * relacionados por um tema ou conceito de alto nível. Produtos de uma família são
 * geralmente capazes de colaborar entre si. Uma família de produtos pode ter várias
 * variantes, mas os produtos de uma variante são incompatíveis com os produtos de
 * outro variante.
 */
interface AbstractFactory
{
    public function createProductA(): AbstractProductA;

    public function createProductB(): AbstractProductB;
}

/**
 * As fábricas concretas produzem uma família de produtos que pertencem a uma única
 * variante. A fábrica garante que os produtos resultantes sejam compatíveis. 
 * Assinaturas dos métodos fabrica retornam um produto abstrato, enquanto que
 * dentro do método um produto concreto é instanciado.
 */
class ConcreteFactory1 implements AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA1();
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB1();
    }
}

/**
 * Cada fábrica concreta tem uma variante de produto correspondente.
 */
class ConcreteFactory2 implements AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA2();
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB2();
    }
}

/**
 * Cada produto distinto de uma família de produtos deve ter uma interface base. Todas
 * as variantes do produto devem implementar essa interface.
 */
interface AbstractProductA
{
    public function usefulFunctionA(): string;
}

/**
 * Produtos concretos são criados por fábricas concretas correspondentes.
 */
class ConcreteProductA1 implements AbstractProductA
{
    public function usefulFunctionA(): string
    {
        return "O resultado do produto A1.";
    }
}

class ConcreteProductA2 implements AbstractProductA
{
    public function usefulFunctionA(): string
    {
        return "O resultado do produto A2.";
    }
}

/**
 * Aqui está a interface base de outro produto. Todos os produtos podem interagir
 * entre si, mas a interação apropriada só é possível entre produtos da
 * mesma variante concreta.
 */
interface AbstractProductB
{
    /**
     * O produto B é capaz de fazer suas próprias coisas...
     */
    public function usefulFunctionB(): string;

    /**
     * ...mas também pode colaborar com o ProductA.
     *
     * A Abstract Factory garante que todos os produtos que cria sejam da
     * mesma variante e, portanto, compatíveis.
     */
    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string;
}

/**
 * Os Produtos Concretos são criados pelas Fábricas Concretas correspondentes.
 */
class ConcreteProductB1 implements AbstractProductB
{
    public function usefulFunctionB(): string
    {
        return "O resultado do produto B1.";
    }

    /**
     * A variante, Produto B1, só pode funcionar corretamente com a variante,
     * Produto A1. No entanto, aceita qualquer instância de AbstractProductA
     * como argumento.
     */
    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string
    {
        $result = $collaborator->usefulFunctionA();

        return "O resultado do B1 colaborando com ({$result})";
    }
}

class ConcreteProductB2 implements AbstractProductB
{
    public function usefulFunctionB(): string
    {
        return "O resultado do produto B2.";
    }

    /**
     * A variante, Produto B2, só pode funcionar corretamente com a variante,
     * Produto A2. No entanto, aceita qualquer instância de AbstractProductA
     * como argumento.
     */
    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string
    {
        $result = $collaborator->usefulFunctionA();

        return "O resultado do B2 colaborando com ({$result})";
    }
}

/**
 * O código cliente trabalha com fábricas e produtos apenas por meio de tipos
 * abstratos: AbstractFactory e AbstractProduct. Isso permite que você passe 
 * qualquer subclasse de fábrica ou produto para o código do cliente sem 
 * quebrá-lo.
 */
function clientCode(AbstractFactory $factory)
{
    $productA = $factory->createProductA();
    $productB = $factory->createProductB();

    echo $productB->usefulFunctionB() . "<br>";
    echo $productB->anotherUsefulFunctionB($productA) . "<br>";
}

/**
 * O código do cliente pode funcionar com qualquer classe de fábrica concreta.
 */
echo "Cliente: Testando o código do cliente com o primeiro tipo de fábrica:<br>";
clientCode(new ConcreteFactory1());

echo "<br>";

echo "Cliente: Testando o código do cliente com o segundo tipo de fábrica:<br>";
clientCode(new ConcreteFactory2());
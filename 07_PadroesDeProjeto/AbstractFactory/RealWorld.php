<?php
/**
 * ---------- Exemplo do mundo real ----------
 * Neste exemplo, o padrão Abstract Factory fornece uma infraestrutura para 
 * criar vários tipos de modelos para diferentes elementos de uma página da web.
 *
 * Uma aplicação Web pode suportar diferentes mecanismos de renderização 
 * ao mesmo tempo, mas apenas se suas classes forem independentes das classes 
 * concretas dos mecanismos de renderização. Portanto, os objetos da aplicação 
 * devem se comunicar com os objetos de modelo apenas por meio de suas interfaces 
 * abstratas. Seu código não deve criar os objetos de modelo diretamente, 
 * mas delegar sua criação a objetos fábrica especiais. Finalmente, seu código 
 * também não deve depender dos objetos fábrica, mas deve trabalhar com eles 
 * por meio da interface fábrica abstrata.
 *
 * Como resultado, você poderá fornecer à aplicação o objeto fábrica que 
 * corresponde a um dos mecanismos de renderização. Todos os modelos, 
 * criados na aplicação, serão criados por essa fábrica e seu tipo 
 * corresponderá ao tipo da fábrica. Se você decidir alterar o 
 * mecanismo de renderização, poderá passar uma nova fábrica 
 * para o código cliente, sem quebrar algum código existente.
 * 
 * De eu para eu: as anotações sobre o padrão se encontram no caderno
 */

/**
 * A interface do Abstract Factory declara métodos de criação para cada tipo de
 * produto distinto.
 */
interface TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate;

    public function createPageTemplate(): PageTemplate;

    public function getRenderer(): TemplateRenderer;
}

/**
 * Cada Fábrica Concreta corresponde a uma variante específica (ou família) de
 * produtos.
 *
 * Esta Fábrica Concreta cria templates Twig.
 */
class TwigTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new TwigTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new TwigPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new TwigRenderer();
    }
}

/**
 * E esta Fábrica Concreta cria templates PHPTemplate.
 */
class PHPTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new PHPTemplateTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new PHPTemplatePageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new PHPTemplateRenderer();
    }
}

/**
 * Cada tipo de produto distinto deve ter uma interface separada. Todas as variantes
 * do produto devem seguir a mesma interface.
 *
 * Por exemplo, esta interface de Produto Abstrato descreve o comportamento dos 
 * templates de título da página.
 */
interface TitleTemplate
{
    public function getTemplateString(): string;
}

/**
 * Este Produto Concreto fornece templates de título de página Twig.
 */
class TwigTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return "<h1>{{ title }}</h1>";
    }
}

/**
 * E este Produto Concreto fornece templates de título de página PHPTemplate.
 */
class PHPTemplateTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return "<h1><?= \$title; ?></h1>";
    }
}

/**
 * Este é outro tipo de Produto Abstrato, que descreve templates de páginas inteiras.
 */
interface PageTemplate
{
    public function getTemplateString(): string;
}

/**
 * O template da página usa o submodelo de título, portanto, temos que fornecer a 
 * maneira de configurá-lo no objeto submodelo. A fábrica abstrata vinculará 
 * o template de página a um template de título da mesma variante.
 */
abstract class BasePageTemplate implements PageTemplate
{
    protected $titleTemplate;

    public function __construct(TitleTemplate $titleTemplate)
    {
        $this->titleTemplate = $titleTemplate;
    }
}

/**
 * A variante Twig dos templates de página inteira.
 */
class TwigPageTemplate extends BasePageTemplate
{
    public function getTemplateString(): string
    {
        $renderedTitle = $this->titleTemplate->getTemplateString();

        return <<<HTML
        <div class="page">
            $renderedTitle
            <article class="content">{{ content }}</article>
        </div>
        HTML;
    }
}

/**
 * A variante PHPTemplate dos templates de página inteira.
 */
class PHPTemplatePageTemplate extends BasePageTemplate
{
    public function getTemplateString(): string
    {
        $renderedTitle = $this->titleTemplate->getTemplateString();

        return <<<HTML
        <div class="page">
            $renderedTitle
            <article class="content"><?= \$content; ?></article>
        </div>
        HTML;
    }
}

/**
 * O renderizador é responsável por converter uma string de template no código 
 * HTML real. Cada renderizador se comporta de maneira diferente e espera 
 * seu próprio tipo de strings de template passadas para ele. Os templates 
 * de cozimento com a fábrica permitem que você passe tipos adequados 
 * de templates para renderizações adequadas.
 */
interface TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string;
}

/**
 * O renderizador para templates Twig.
 */
class TwigRenderer implements TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string
    {
        return \Twig::render($templateString, $arguments);
    }
}

/**
 * O renderizador para templates PHPTemplate. Observe que essa implementação é muito 
 * básica, se não grosseira. Usar a função `eval` tem muitas implicações 
 * de segurança, então use-a com cuidado em projetos reais.
 */
class PHPTemplateRenderer implements TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string
    {
        extract($arguments);

        ob_start();
        eval(' ?>' . $templateString . '<?php ');
        $result = ob_get_contents();
        ob_end_clean();

        return $result;
    }
}

/**
 * O código do cliente. Observe que ele aceita a classe Abstract Factory 
 * como parâmetro, o que permite ao cliente trabalhar com qualquer tipo 
 * de fábrica concreta.
 */
class Page
{

    public $title;

    public $content;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    // Veja como você usaria o template ainda mais na vida real. Observe que a
    // classe de página não depende de nenhuma classe de template concreta.
    public function render(TemplateFactory $factory): string
    {
        $pageTemplate = $factory->createPageTemplate();

        $renderer = $factory->getRenderer();

        return $renderer->render($pageTemplate->getTemplateString(), [
            'title' => $this->title,
            'content' => $this->content
        ]);
    }
}

/**
 * Agora, em outras partes do aplicativo, o código do cliente pode aceitar
 * objetos de fábrica de qualquer tipo.
 */
$page = new Page('Sample page', 'This is the body.');

echo "Testing actual rendering with the PHPTemplate factory:<br>";
echo $page->render(new PHPTemplateFactory());


// Descomente o seguinte se você tiver o Twig instalado.

// echo "Testing rendering with the Twig factory:\n"; 
// echo $page->render(new TwigTemplateFactory());
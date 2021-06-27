<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_830d30828b6e55a550d59b02d59c329f484f8c99e15a7a0edb2e19fc1a71b836 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
    <!-- ... -->

        ";
        // line 7
        $this->displayBlock('javascripts', $context, $blocks);
        // line 10
        echo "        ";
        // line 11
        echo "\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
\t\t";
        // line 13
        echo "\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "

    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        ";
        // line 19
        echo "    </body>
</html>
";
    }

    // line 7
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "            ";
        // line 9
        echo "        ";
    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 17,  79 => 9,  77 => 8,  73 => 7,  67 => 19,  65 => 18,  63 => 17,  55 => 13,  50 => 11,  48 => 10,  46 => 7,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\xampp\\htdocs\\Projets\\05.Equaly\\Equaly\\templates\\base.html.twig");
    }
}

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

/* blog/blogs.html.twig */
class __TwigTemplate_763f3884433fe0f86dfab6561e610ef875706ab86bc1a1a0dc643afd1fa81788 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "home/squelette.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("home/squelette.html.twig", "blog/blogs.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "\t";
        // line 9
        echo "
<div class=\"path_home\">
\t <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"> 
\t <img src=\"https://img.icons8.com/material-sharp/24/000000/long-arrow-left.png\"/>
\t accueil </a>
</div>
\t<div id=\"blog-pricipal\"></div>

";
    }

    public function getTemplateName()
    {
        return "blog/blogs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  52 => 9,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blog/blogs.html.twig", "C:\\xampp\\htdocs\\Projets\\05.Equaly\\Equaly\\templates\\blog\\blogs.html.twig");
    }
}

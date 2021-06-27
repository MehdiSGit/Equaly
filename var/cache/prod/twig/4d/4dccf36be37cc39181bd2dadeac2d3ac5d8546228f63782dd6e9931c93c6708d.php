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

/* choice.html.twig */
class __TwigTemplate_2c08dede79769b7bb67a69a18dbbd48d1388cc56bb559714ee49384f2ad8a1b7 extends Template
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
        $this->parent = $this->loadTemplate("home/squelette.html.twig", "choice.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
\t<div class=\"before\">
\t\t<div class=\"box\">
        <img src=\"https://img.icons8.com/ios/50/000000/rocket--v2.png\"/>
        
\t\t\t<h4>
\t\t\t\tAVANT DE COMMENCER
\t\t\t</h4>
\t\t\t
            </div>
\t\t<h2>Je suis</h2>
\t</div>
\t<div class=\"register_container\">
\t\t<div class=\"candidat slide-top\">
\t\t\t<a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">CANDIDAT</a>
\t\t</div>


\t\t<div class=\"recruteur slide-top\">
\t\t\t<a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_recruteur");
        echo "\">RECRUTEUR</a>
\t\t</div>

\t</div>


";
    }

    public function getTemplateName()
    {
        return "choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 23,  66 => 18,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "choice.html.twig", "/Applications/MAMP/htdocs/MAMP - Banderas/Projet Benetton/my-project/templates/choice.html.twig");
    }
}

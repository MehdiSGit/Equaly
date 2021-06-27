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

/* crud_recruteur/edit.html.twig */
class __TwigTemplate_ca0a3a557e9eedd51b0e36f9cf57c90d66d56389ce5bfd61fd38cbfcab4f983e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("home/squelette.html.twig", "crud_recruteur/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\tChanger mon profil
";
    }

    // line 7
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
\t<section class='edit_recruteur'>
\t\t<h1>Editer mon profil</h1>

\t\t<section class='edit_profile_form'>

\t\t\t";
        // line 14
        echo twig_include($this->env, $context, "crud_recruteur/_form.html.twig", ["button_label" => "Update"]);
        echo "

\t\t\t";
        // line 16
        echo twig_include($this->env, $context, "crud_recruteur/_delete_form.html.twig");
        echo "

\t\t</section>

\t\t<a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crud_recruteur_index");
        echo "\">Retour à la liste</a>

\t</section>
";
    }

    public function getTemplateName()
    {
        return "crud_recruteur/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 20,  73 => 16,  68 => 14,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "crud_recruteur/edit.html.twig", "C:\\xampp\\htdocs\\Projets\\05.Equaly\\Equaly\\templates\\crud_recruteur\\edit.html.twig");
    }
}

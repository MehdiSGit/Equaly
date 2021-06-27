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

/* crud_candidat/edit.html.twig */
class __TwigTemplate_c86a5f7e46ad7be1d0375d84ff0a7b87e1fc74c04b5be715bcb53fd1e700d27f extends Template
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
        $this->parent = $this->loadTemplate("home/squelette.html.twig", "crud_candidat/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Modifier mon profil
";
    }

    // line 7
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "\t<section class=\"edit_candidat\">
\t\t<h1>Editer mon profil</h1>

\t\t<section class=\"edit_profile_form\">


\t\t\t";
        // line 14
        echo twig_include($this->env, $context, "crud_candidat/_form.html.twig", ["button_label" => "Update"]);
        echo "


\t\t\t";
        // line 17
        echo twig_include($this->env, $context, "crud_candidat/_delete_form.html.twig");
        echo "


\t\t</section>

\t\t<a class=\"link\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crud_candidat_index");
        echo "\">Retour à la liste</a>

\t</section>
";
    }

    public function getTemplateName()
    {
        return "crud_candidat/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 22,  73 => 17,  67 => 14,  59 => 8,  55 => 7,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "crud_candidat/edit.html.twig", "C:\\xampp\\htdocs\\Projets\\05.Equaly\\Equaly\\templates\\crud_candidat\\edit.html.twig");
    }
}

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

/* job_crud/edit.html.twig */
class __TwigTemplate_4cc68b02338269a2d9db52aec818601ddfac35de31b4479875b4da147bf32bb3 extends Template
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
        $this->parent = $this->loadTemplate("home/squelette.html.twig", "job_crud/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Modifier mon annonce
";
    }

    // line 6
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t<section class='edit_offres'>
\t\t<h1>Modifier mon annonce</h1>

\t\t<section class='edit_profile_form'>

\t\t\t";
        // line 12
        echo twig_include($this->env, $context, "job_crud/_form.html.twig", ["button_label" => "Update"]);
        echo "


\t\t\t";
        // line 15
        echo twig_include($this->env, $context, "job_crud/_delete_form.html.twig");
        echo "

\t\t</section>

\t\t<a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_crud_index");
        echo "\">
\t\t\t<i class=\"fas fa-arrow-left\"></i>Retour
        </a>

\t</section>
";
    }

    public function getTemplateName()
    {
        return "job_crud/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 19,  72 => 15,  66 => 12,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "job_crud/edit.html.twig", "/Applications/MAMP/htdocs/MAMP - Banderas/Projet Benetton/my-project/templates/job_crud/edit.html.twig");
    }
}

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

/* recruteur/recruteur.html.twig */
class __TwigTemplate_11c962e8ea6e65cff1ff416e02d6dff1391744765d761a17665e55e9ab32e7be extends Template
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
        $this->parent = $this->loadTemplate("home/squelette.html.twig", "recruteur/recruteur.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"path_home\">
\t <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"> 
\t <img src=\"https://img.icons8.com/material-sharp/24/000000/long-arrow-left.png\"/>
\t accueil </a>
</div>

\t<div class=\"container\">
\t\t<h1>Page Recruteur</h1>

\t\t<section class=\"displayRecruteur\">
\t\t\t<h2>Vos informations personnelles</h2></br>
\t\t\t<p>Nom de l'entreprise : ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["recruteur"] ?? null), "Name", [], "any", false, false, false, 15), "html", null, true);
        echo "</p></br>
\t\t\t<p>Secteur d'activité : ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["recruteur"] ?? null), "Description", [], "any", false, false, false, 16), "html", null, true);
        echo "</p></br>
\t\t\t<p>Adresse email : ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["recruteur"] ?? null), "Email", [], "any", false, false, false, 17), "html", null, true);
        echo "</p></br>
\t\t</section>

\t\t<h1>Editer vos données</h1>

\t\t";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formulaire3"] ?? null), 'form_start');
        echo "
\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formulaire3"] ?? null), 'rest');
        echo "
\t\t<button>Valider</button>
\t\t";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formulaire3"] ?? null), 'form_end');
        echo " <br>

\t\t\t<a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_crud_index");
        echo "\"><h1>Voir vos annonces</h1></a>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "recruteur/recruteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 27,  91 => 25,  86 => 23,  82 => 22,  74 => 17,  70 => 16,  66 => 15,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "recruteur/recruteur.html.twig", "/Applications/MAMP/htdocs/MAMP - Banderas/Projet Benetton/my-project/templates/recruteur/recruteur.html.twig");
    }
}

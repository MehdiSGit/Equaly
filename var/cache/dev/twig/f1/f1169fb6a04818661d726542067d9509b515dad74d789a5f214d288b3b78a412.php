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

/* crud_recruteur/index.html.twig */
class __TwigTemplate_5d237018e856f58e4cb87258debb53bc47db1c4f64886370e8d1d811d1804523 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud_recruteur/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud_recruteur/index.html.twig"));

        $this->parent = $this->loadTemplate("home/squelette.html.twig", "crud_recruteur/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Recruteur index
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "\t<section class='espace_recruteur'>
\t\t<h1>Mon espace Recruteur</h1>

\t\t<div class=\"espace_recruteur_liens\">
\t\t\t<a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_crud_index");
        echo "\">Voir mes annonces</a>
\t\t</div>

\t\t<table class=\"table\">
\t\t\t<thead class=\"thead-dark\">
\t\t\t\t<tr class=\"recruteur_tr\">
\t\t\t\t\t<th>Email</th>
\t\t\t\t\t<th>Nom de l'entreprise</th>
\t\t\t\t\t<th>Secteur d'activité</th>
\t\t\t\t\t<th>&Eacute;diter son compte</th>
\t\t\t\t</tr>
\t\t\t</thead>

\t\t\t<tbody class=\"recruteur_body\">
\t\t\t\t<td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 25, $this->source); })()), "email", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
\t\t\t\t<td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
\t\t\t\t<td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crud_recruteur_edit");
        echo "\">Modifier</a>
\t\t\t\t</td>
\t\t\t</tbody>
\t\t</table>

\t</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "crud_recruteur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 29,  120 => 27,  116 => 26,  112 => 25,  95 => 11,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'home/squelette.html.twig' %}

{% block title %}Recruteur index
{% endblock %}

{% block main %}
\t<section class='espace_recruteur'>
\t\t<h1>Mon espace Recruteur</h1>

\t\t<div class=\"espace_recruteur_liens\">
\t\t\t<a href=\"{{ path('job_crud_index')}}\">Voir mes annonces</a>
\t\t</div>

\t\t<table class=\"table\">
\t\t\t<thead class=\"thead-dark\">
\t\t\t\t<tr class=\"recruteur_tr\">
\t\t\t\t\t<th>Email</th>
\t\t\t\t\t<th>Nom de l'entreprise</th>
\t\t\t\t\t<th>Secteur d'activité</th>
\t\t\t\t\t<th>&Eacute;diter son compte</th>
\t\t\t\t</tr>
\t\t\t</thead>

\t\t\t<tbody class=\"recruteur_body\">
\t\t\t\t<td>{{ recruteur.email }}</td>
\t\t\t\t<td>{{ recruteur.name }}</td>
\t\t\t\t<td>{{ recruteur.description }}</td>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"{{ path('crud_recruteur_edit')}}\">Modifier</a>
\t\t\t\t</td>
\t\t\t</tbody>
\t\t</table>

\t</section>
{% endblock %}



", "crud_recruteur/index.html.twig", "/Applications/MAMP/htdocs/MAMP - Banderas/Projet Benetton/my-project/templates/crud_recruteur/index.html.twig");
    }
}

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
class __TwigTemplate_303e4380016c25380ca968dd6c05cf8b531e2165d003147033f197cd0d07b5cc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/recruteur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/recruteur.html.twig"));

        $this->parent = $this->loadTemplate("home/squelette.html.twig", "recruteur/recruteur.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 15, $this->source); })()), "Name", [], "any", false, false, false, 15), "html", null, true);
        echo "</p></br>
\t\t\t<p>Secteur d'activité : ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 16, $this->source); })()), "Description", [], "any", false, false, false, 16), "html", null, true);
        echo "</p></br>
\t\t\t<p>Adresse email : ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 17, $this->source); })()), "Email", [], "any", false, false, false, 17), "html", null, true);
        echo "</p></br>
\t\t</section>

\t\t<h1>Editer vos données</h1>

\t\t";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaire3"]) || array_key_exists("formulaire3", $context) ? $context["formulaire3"] : (function () { throw new RuntimeError('Variable "formulaire3" does not exist.', 22, $this->source); })()), 'form_start');
        echo "
\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formulaire3"]) || array_key_exists("formulaire3", $context) ? $context["formulaire3"] : (function () { throw new RuntimeError('Variable "formulaire3" does not exist.', 23, $this->source); })()), 'rest');
        echo "
\t\t<button>Valider</button>
\t\t";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaire3"]) || array_key_exists("formulaire3", $context) ? $context["formulaire3"] : (function () { throw new RuntimeError('Variable "formulaire3" does not exist.', 25, $this->source); })()), 'form_end');
        echo " <br>

\t\t\t<a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_crud_index");
        echo "\"><h1>Voir vos annonces</h1></a>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  114 => 27,  109 => 25,  104 => 23,  100 => 22,  92 => 17,  88 => 16,  84 => 15,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'home/squelette.html.twig' %}

{% block main %}
<div class=\"path_home\">
\t <a href=\"{{ path('home') }}\"> 
\t <img src=\"https://img.icons8.com/material-sharp/24/000000/long-arrow-left.png\"/>
\t accueil </a>
</div>

\t<div class=\"container\">
\t\t<h1>Page Recruteur</h1>

\t\t<section class=\"displayRecruteur\">
\t\t\t<h2>Vos informations personnelles</h2></br>
\t\t\t<p>Nom de l'entreprise : {{recruteur.Name}}</p></br>
\t\t\t<p>Secteur d'activité : {{recruteur.Description}}</p></br>
\t\t\t<p>Adresse email : {{recruteur.Email}}</p></br>
\t\t</section>

\t\t<h1>Editer vos données</h1>

\t\t{{ form_start(formulaire3) }}
\t\t{{ form_rest(formulaire3) }}
\t\t<button>Valider</button>
\t\t{{ form_end(formulaire3) }} <br>

\t\t\t<a href=\"{{ path('job_crud_index')}}\"><h1>Voir vos annonces</h1></a>
\t</div>

{% endblock %}
", "recruteur/recruteur.html.twig", "/Applications/MAMP/htdocs/MAMP - Banderas/Projet Benetton/my-project/templates/recruteur/recruteur.html.twig");
    }
}

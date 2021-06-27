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

/* favoris.html.twig */
class __TwigTemplate_dd93afb3426e14907796a9fe244008a3b29fccad50f09bbffb9946ad8dd7f364 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "favoris.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "favoris.html.twig"));

        $this->parent = $this->loadTemplate("home/squelette.html.twig", "favoris.html.twig", 1);
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
        echo "

";
        // line 6
        if ((twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 6, $this->source); })())) > 0)) {
            // line 7
            echo "<div class=\"container\">
    <h1> Mes coups de coeur &#x2665;</h1>

    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 11
                echo "    <div class=\"modal\" tabindex=\"-1\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
            <div class=\"modal-header\">
            
                <h5>";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "job", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), "html", null, true);
                echo "</h5>
                ";
                // line 17
                if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "job", [], "any", false, false, false, 17), "estPostuleParCandidat", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17)], "method", false, false, false, 17))) {
                    // line 18
                    echo "                
                ";
                } else {
                    // line 20
                    echo "                
                 <button type=\"button\" class=\"btn_send  btn-primary\"> <a href=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_postuler", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "job", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21)]), "html", null, true);
                    echo "\">Postuler</a>  </button>
                ";
                }
                // line 23
                echo "            </div>

           
                <a class=\"delete\" href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_favoris", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "job", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26)]), "html", null, true);
                echo "\" type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Supprimer</a>
           
            <div class=\"modal-body\">
                <p>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "job", [], "any", false, false, false, 29), "description", [], "any", false, false, false, 29), "html", null, true);
                echo "</p>
                <small>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "job", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30), "html", null, true);
                echo "</small>
                 
            </div>
           
            </div>
        </div>
    </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "  </div>  

    ";
        } else {
            // line 41
            echo "    <p class=\"favoris\"> 
    <img src=\"https://img.icons8.com/dotty/80/000000/sad-ghost--v1.png\"/>
    Il n'y a rien pour le moment</p>
    ";
            // line 45
            echo "
    ";
        }
        // line 47
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "favoris.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 47,  147 => 45,  142 => 41,  137 => 38,  123 => 30,  119 => 29,  113 => 26,  108 => 23,  103 => 21,  100 => 20,  96 => 18,  94 => 17,  90 => 16,  83 => 11,  79 => 10,  74 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'home/squelette.html.twig' %}

{% block main%}


{% if items | length > 0 %}
<div class=\"container\">
    <h1> Mes coups de coeur &#x2665;</h1>

    {% for item in items %}
    <div class=\"modal\" tabindex=\"-1\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
            <div class=\"modal-header\">
            
                <h5>{{ item.job.name }}</h5>
                {% if app.user and item.job.estPostuleParCandidat(app.user)  %}
                
                {% else %}
                
                 <button type=\"button\" class=\"btn_send  btn-primary\"> <a href=\"{{path('job_postuler',  {'id':item.job.id} )}}\">Postuler</a>  </button>
                {% endif %}
            </div>

           
                <a class=\"delete\" href=\"{{path('remove_favoris', {'id':item.job.id})}}\" type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Supprimer</a>
           
            <div class=\"modal-body\">
                <p>{{ item.job.description }}</p>
                <small>{{ item.job.id }}</small>
                 
            </div>
           
            </div>
        </div>
    </div>
        {% endfor %}
  </div>  

    {% else %}
    <p class=\"favoris\"> 
    <img src=\"https://img.icons8.com/dotty/80/000000/sad-ghost--v1.png\"/>
    Il n'y a rien pour le moment</p>
    {# <p> <a href=\"{{'path('job_postuler',{'id': job.id})'}}\">Allez voir plus d'offres</a> </p> #}

    {% endif %}



{% endblock %}", "favoris.html.twig", "/Applications/MAMP/htdocs/MAMP - Banderas/Projet Benetton/my-project/templates/favoris.html.twig");
    }
}

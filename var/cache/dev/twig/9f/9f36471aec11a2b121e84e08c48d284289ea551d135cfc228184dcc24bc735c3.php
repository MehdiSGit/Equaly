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

/* displayJob.html.twig */
class __TwigTemplate_c787e461cc23ecb4e2070805de6d61a6b304dc2eab93e6c5fb8a0cec52104091 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "displayJob.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "displayJob.html.twig"));

        $this->parent = $this->loadTemplate("home/squelette.html.twig", "displayJob.html.twig", 1);
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
        // line 14
        echo "            

<section class=\"send\">

    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", [0 => "message-error-add"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 19
            echo "        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    <div class=\"modal\" tabindex=\"-1\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">

            <div class=\"modal-header\">
                <h5 class=\"modal-title\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
        echo "</h5>
                ";
        // line 28
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28) && twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 28, $this->source); })()), "estPostuleParCandidat", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28)], "method", false, false, false, 28))) {
            // line 29
            echo "
                ";
        } else {
            // line 31
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouter_favoris", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" class=\"btn btn-primary\" >
                    <img src=\"https://img.icons8.com/ios/24/000000/like--v1.png\"/> </a>
                 ";
        }
        // line 34
        echo "            </div>

            <div class=\"btn_send_container\">
            ";
        // line 38
        echo "             ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38) && twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 38, $this->source); })()), "estPostuleParCandidat", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38)], "method", false, false, false, 38))) {
            // line 39
            echo "
                ";
        } else {
            // line 41
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_postuler", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" class=\"btn_send btn-link\"> Postulez </a>  
                ";
        }
        // line 43
        echo "            </div>

            <div class=\"modal-body\">

                <p>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 47, $this->source); })()), "description", [], "any", false, false, false, 47), "html", null, true);
        echo "</p>
                <p>Date de prise de poste ";
        // line 48
        ((twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 48, $this->source); })()), "jobStartDate", [], "any", false, false, false, 48)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 48, $this->source); })()), "jobStartDate", [], "any", false, false, false, 48), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</p>
                <small>Publié le ";
        // line 49
        ((twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 49, $this->source); })()), "datePublished", [], "any", false, false, false, 49)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 49, $this->source); })()), "datePublished", [], "any", false, false, false, 49), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</small>
            </div>
            <div class=\"modal-footer\">
                
                
                
                
            </div>
            </div>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "displayJob.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 49,  146 => 48,  142 => 47,  136 => 43,  130 => 41,  126 => 39,  123 => 38,  118 => 34,  111 => 31,  107 => 29,  104 => 28,  100 => 26,  93 => 21,  84 => 19,  80 => 18,  74 => 14,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'home/squelette.html.twig' %}

{% block main %}


                
                
                {# Verifier si l'utilisateur a deja postulé
                {% if app.user and job.estPostuleParCandidat(app.user)  %}

                {% else %}
                <a href=\"\" class=\"btn btn-link\"> Postulez </a>  
                {% endif %} #}
            

<section class=\"send\">

    {% for flashError in app.flashes('message-error-add') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
    {% endfor %}
    <div class=\"modal\" tabindex=\"-1\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">

            <div class=\"modal-header\">
                <h5 class=\"modal-title\">{{job.name}}</h5>
                {# Verifier si l'utilisateur a deja postulé #}
                {% if app.user and job.estPostuleParCandidat(app.user)  %}

                {% else %}
                    <a href=\"{{path('ajouter_favoris',{'id': job.id}) }}\" class=\"btn btn-primary\" >
                    <img src=\"https://img.icons8.com/ios/24/000000/like--v1.png\"/> </a>
                 {% endif %}
            </div>

            <div class=\"btn_send_container\">
            {# Verifier si l'utilisateur a deja postulé #}
             {% if app.user and job.estPostuleParCandidat(app.user)  %}

                {% else %}
                <a href=\"{{ path('job_postuler',{'id':job.id})  }}\" class=\"btn_send btn-link\"> Postulez </a>  
                {% endif %}
            </div>

            <div class=\"modal-body\">

                <p>{{ job.description }}</p>
                <p>Date de prise de poste {{ job.jobStartDate ? job.jobStartDate|date('Y-m-d') : '' }}</p>
                <small>Publié le {{ job.datePublished ? job.datePublished|date('Y-m-d') : '' }}</small>
            </div>
            <div class=\"modal-footer\">
                
                
                
                
            </div>
            </div>
        </div>
    </div>


{% endblock %}
", "displayJob.html.twig", "/Applications/MAMP/htdocs/MAMP - Banderas/Projet Benetton/my-project/templates/displayJob.html.twig");
    }
}

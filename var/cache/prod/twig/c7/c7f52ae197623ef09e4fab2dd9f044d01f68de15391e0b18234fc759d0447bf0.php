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
class __TwigTemplate_812b22afb7f15e72f03e1a627b507c84e6866b6af273d031bedad3f8c34ab080 extends Template
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
        $this->parent = $this->loadTemplate("home/squelette.html.twig", "displayJob.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "

                
                
                ";
        // line 14
        echo "            

<section class=\"send\">

    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "message-error-add"], "method", false, false, false, 18));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["job"] ?? null), "name", [], "any", false, false, false, 26), "html", null, true);
        echo "</h5>
                ";
        // line 28
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 28) && twig_get_attribute($this->env, $this->source, ($context["job"] ?? null), "estPostuleParCandidat", [0 => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 28)], "method", false, false, false, 28))) {
            // line 29
            echo "
                ";
        } else {
            // line 31
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouter_favoris", ["id" => twig_get_attribute($this->env, $this->source, ($context["job"] ?? null), "id", [], "any", false, false, false, 31)]), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 38) && twig_get_attribute($this->env, $this->source, ($context["job"] ?? null), "estPostuleParCandidat", [0 => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 38)], "method", false, false, false, 38))) {
            // line 39
            echo "
                ";
        } else {
            // line 41
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_postuler", ["id" => twig_get_attribute($this->env, $this->source, ($context["job"] ?? null), "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" class=\"btn_send btn-link\"> Postulez </a>  
                ";
        }
        // line 43
        echo "            </div>

            <div class=\"modal-body\">

                <p>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["job"] ?? null), "description", [], "any", false, false, false, 47), "html", null, true);
        echo "</p>
                <p>Date de prise de poste ";
        // line 48
        ((twig_get_attribute($this->env, $this->source, ($context["job"] ?? null), "jobStartDate", [], "any", false, false, false, 48)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["job"] ?? null), "jobStartDate", [], "any", false, false, false, 48), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</p>
                <small>Publié le ";
        // line 49
        ((twig_get_attribute($this->env, $this->source, ($context["job"] ?? null), "datePublished", [], "any", false, false, false, 49)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["job"] ?? null), "datePublished", [], "any", false, false, false, 49), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</small>
            </div>
            <div class=\"modal-footer\">
                
                
                
                
            </div>
            </div>
        </div>
    </div>


";
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
        return array (  132 => 49,  128 => 48,  124 => 47,  118 => 43,  112 => 41,  108 => 39,  105 => 38,  100 => 34,  93 => 31,  89 => 29,  86 => 28,  82 => 26,  75 => 21,  66 => 19,  62 => 18,  56 => 14,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "displayJob.html.twig", "C:\\xampp\\htdocs\\Projets\\05.Equaly\\Equaly\\templates\\displayJob.html.twig");
    }
}

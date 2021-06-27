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

/* postuleList.html.twig */
class __TwigTemplate_3309e0e65db48a071e2a58c3fec07f8ea12d49dc8dc1030e5cbc2622b1c2cf14 extends Template
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
        $this->parent = $this->loadTemplate("home/squelette.html.twig", "postuleList.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t";
        if ((twig_length_filter($this->env, ($context["posts"] ?? null)) > 0)) {
            // line 5
            echo "\t\t<div class=\"container\">
\t\t\t<h1>
\t\t\t\tListe de mes candidatures
\t\t\t</h1>
\t\t\t";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 10
                echo "\t\t\t\t<div class=\"modal\" tabindex=\"-1\">
\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t<h5 class=\"modal-title\">";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "job", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t<p>";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "job", [], "any", false, false, false, 17), "description", [], "any", false, false, false, 17), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t<small>";
                // line 18
                ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "job", [], "any", false, false, false, 18), "jobStartDate", [], "any", false, false, false, 18)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "job", [], "any", false, false, false, 18), "jobStartDate", [], "any", false, false, false, 18), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t</div>

\t";
        } else {
            // line 27
            echo "
\t\t<div class=\"postuler\">

\t\t\t<img src=\"https://img.icons8.com/ios/50/000000/sad-cloud.png\"/>
\t\t\t<p>
\t\t\t\tVous n'avez pas encore postulé</p>
\t\t\t<p>

\t\t\t\t<a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offres");
            echo "\">Allez voir plus d'offres</a>

\t\t\t</p>
\t\t</div>
\t";
        }
        // line 40
        echo "

";
    }

    public function getTemplateName()
    {
        return "postuleList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 40,  106 => 35,  96 => 27,  91 => 24,  79 => 18,  75 => 17,  69 => 14,  63 => 10,  59 => 9,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "postuleList.html.twig", "/Applications/MAMP/htdocs/MAMP - Banderas/Projet Benetton/my-project/templates/postuleList.html.twig");
    }
}

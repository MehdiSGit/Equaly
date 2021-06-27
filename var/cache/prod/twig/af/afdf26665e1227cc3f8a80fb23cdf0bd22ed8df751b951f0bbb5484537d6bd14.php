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

/* postuleCandidat.html.twig */
class __TwigTemplate_dc7cdc25d3dc35d63a5241c8b92521fa3fbeb4dd88a43c21d746af97e979a770 extends Template
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
        $this->parent = $this->loadTemplate("home/squelette.html.twig", "postuleCandidat.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        if ((twig_length_filter($this->env, ($context["posts"] ?? null)) > 0)) {
            // line 5
            echo "<div class=\"container\">
    <h1> Liste des candidatures </h1>
    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 8
                echo "    <div class=\"card\" style=\"width: 18rem;\">
        <div class=\"card-body\">
            <h5 class=\"card-title\"><a href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recruteur_candidature", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "candidat", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10)]), "html", null, true);
                echo "\" class=\"card-link\"><span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "candidat", [], "any", false, false, false, 10), "firstName", [], "any", false, false, false, 10), "html", null, true);
                echo "</span> <span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "candidat", [], "any", false, false, false, 10), "lastName", [], "any", false, false, false, 10), "html", null, true);
                echo "</span></a></h5>
            <p class=\"card-text\">";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "candidat", [], "any", false, false, false, 11), "descriptionCandidat", [], "any", false, false, false, 11), "html", null, true);
                echo "</p>
            <small class=\"card-text\">";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "candidat", [], "any", false, false, false, 12), "experience", [], "any", false, false, false, 12), "html", null, true);
                echo "</small>
                    
        </div>
    </div>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "  </div>  

    ";
        } else {
            // line 21
            echo "    <p> Il n'y a aucun candidat pour le moment</p>
    

    ";
        }
        // line 25
        echo "


";
    }

    public function getTemplateName()
    {
        return "postuleCandidat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  93 => 21,  88 => 18,  76 => 12,  72 => 11,  64 => 10,  60 => 8,  56 => 7,  52 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "postuleCandidat.html.twig", "C:\\xampp\\htdocs\\Projets\\05.Equaly\\Equaly\\templates\\postuleCandidat.html.twig");
    }
}

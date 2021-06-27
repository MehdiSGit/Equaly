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
class __TwigTemplate_b90df66176d8498fbed45084de8b02e4998605ac9a13642e13e3675a04cb0f67 extends Template
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
        $this->parent = $this->loadTemplate("home/squelette.html.twig", "favoris.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "

";
        // line 6
        if ((twig_length_filter($this->env, ($context["items"] ?? null)) > 0)) {
            // line 7
            echo "<div class=\"container\">
    <h1> Mes coups de coeur &#x2665;</h1>

    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
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
                if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 17) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "job", [], "any", false, false, false, 17), "estPostuleParCandidat", [0 => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 17)], "method", false, false, false, 17))) {
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
        return array (  133 => 47,  129 => 45,  124 => 41,  119 => 38,  105 => 30,  101 => 29,  95 => 26,  90 => 23,  85 => 21,  82 => 20,  78 => 18,  76 => 17,  72 => 16,  65 => 11,  61 => 10,  56 => 7,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "favoris.html.twig", "C:\\xampp\\htdocs\\Projets\\05.Equaly\\Equaly\\templates\\favoris.html.twig");
    }
}

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

/* crud_candidat/index.html.twig */
class __TwigTemplate_43be7c0817f090b23d60ac5dcdb630448c0c9af308868ff6ff01766632ece1eb extends Template
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
        $this->parent = $this->loadTemplate("home/squelette.html.twig", "crud_candidat/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mon profil
";
    }

    // line 6
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t<div class=\"path_home\">
\t\t<a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
\t\t\t<img src=\"https://img.icons8.com/material-sharp/24/000000/long-arrow-left.png\"/>
\t\t\taccueil
\t\t</a>
\t</div>

\t<section class=\"espace_candidat\">
\t\t<h1>Mon Espace Candidat</h1>

\t\t<div class=\"espace_candidat_liens\">
\t\t\t<a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favoris");
        echo "\">Annonces coups de coeur &#9829;</a>
\t\t\t<a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("postuler");
        echo "\">Liste de mes candidatures</a>
\t\t</div>
\t\t<table class=\"table\">

\t\t\t<thead class=\"thead-dark\">
\t\t\t\t<tr class=\"candidat_tr\">
\t\t\t\t\t<th scope=\"col\">Email</th>
\t\t\t\t\t<th scope=\"col\">Prénom</th>
\t\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t\t";
        // line 29
        echo "\t\t\t\t\t<th scope=\"col\">Parcours scolaire</th>
\t\t\t\t\t<th scope=\"col\">Experience</th>
\t\t\t\t\t<th scope=\"col\">Ma description</th>
\t\t\t\t\t<th scope=\"col\">Editer</th>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t</thead>


\t\t\t<tbody class=\"candidat_body\">

\t\t\t\t<td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["candidat"] ?? null), "email", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
\t\t\t\t<td>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["candidat"] ?? null), "firstName", [], "any", false, false, false, 41), "html", null, true);
        echo "</td>
\t\t\t\t<td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["candidat"] ?? null), "lastName", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
\t\t\t\t";
        // line 44
        echo "\t\t\t\t<td>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["candidat"] ?? null), "education", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
\t\t\t\t<td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["candidat"] ?? null), "experience", [], "any", false, false, false, 45), "html", null, true);
        echo "</td>
\t\t\t\t<td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["candidat"] ?? null), "descriptionCandidat", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crud_candidat_edit");
        echo "\">
\t\t\t\t\t\t<i class=\"fas fa-pencil-alt\"></i>
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t</tbody>
\t\t</tr>

\t</tbody>
</table>
<div class=\"center_documents\">
\t";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["candidat"] ?? null), "documents", [], "any", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 59
            echo "
\t\t";
            // line 60
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["document"], "pieceJointe", [], "any", false, false, false, 60))) {
                // line 61
                echo "\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "name", [], "any", false, false, false, 61), "html", null, true);
                echo "

\t\t\t";
                // line 63
                if ((twig_get_attribute($this->env, $this->source, $context["document"], "name", [], "any", false, false, false, 63) == "photo")) {
                    // line 64
                    echo "\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["document"], "pieceJointeFile"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "name", [], "any", false, false, false, 64), "html", null, true);
                    echo "\"/>
\t\t\t";
                } else {
                    // line 66
                    echo "\t\t\t\t<a download href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["document"], "pieceJointeFile"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "name", [], "any", false, false, false, 66), "html", null, true);
                    echo "\">Télécharger</a>
\t\t\t\t<embed src=\"";
                    // line 67
                    echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["document"], "pieceJointeFile"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "name", [], "any", false, false, false, 67), "html", null, true);
                    echo "\" width=\"500\" height=\"375\" type=\"application/pdf\"/>
\t\t\t";
                }
                // line 69
                echo "
\t\t";
            }
            // line 71
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
</div></section>";
    }

    public function getTemplateName()
    {
        return "crud_candidat/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 73,  186 => 71,  182 => 69,  175 => 67,  168 => 66,  160 => 64,  158 => 63,  152 => 61,  150 => 60,  147 => 59,  143 => 58,  130 => 48,  125 => 46,  121 => 45,  116 => 44,  112 => 42,  108 => 41,  104 => 40,  91 => 29,  79 => 19,  75 => 18,  62 => 8,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "crud_candidat/index.html.twig", "/Applications/MAMP/htdocs/MAMP - Banderas/Projet Benetton/my-project/templates/crud_candidat/index.html.twig");
    }
}

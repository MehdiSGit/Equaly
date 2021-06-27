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
class __TwigTemplate_b8c4714d9776786ad7fccd91a5cf23684d8a5525dd2c63941a270300dbd74e7e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud_candidat/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud_candidat/index.html.twig"));

        $this->parent = $this->loadTemplate("home/squelette.html.twig", "crud_candidat/index.html.twig", 1);
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

        echo "Mon profil
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
\t\t\t\t<td>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 41, $this->source); })()), "firstName", [], "any", false, false, false, 41), "html", null, true);
        echo "</td>
\t\t\t\t<td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 42, $this->source); })()), "lastName", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
\t\t\t\t";
        // line 44
        echo "\t\t\t\t<td>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 44, $this->source); })()), "education", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
\t\t\t\t<td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 45, $this->source); })()), "experience", [], "any", false, false, false, 45), "html", null, true);
        echo "</td>
\t\t\t\t<td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 46, $this->source); })()), "descriptionCandidat", [], "any", false, false, false, 46), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 58, $this->source); })()), "documents", [], "any", false, false, false, 58));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  223 => 73,  216 => 71,  212 => 69,  205 => 67,  198 => 66,  190 => 64,  188 => 63,  182 => 61,  180 => 60,  177 => 59,  173 => 58,  160 => 48,  155 => 46,  151 => 45,  146 => 44,  142 => 42,  138 => 41,  134 => 40,  121 => 29,  109 => 19,  105 => 18,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'home/squelette.html.twig' %}

{% block title %}Mon profil
{% endblock %}

{% block main %}
\t<div class=\"path_home\">
\t\t<a href=\"{{ path('home') }}\">
\t\t\t<img src=\"https://img.icons8.com/material-sharp/24/000000/long-arrow-left.png\"/>
\t\t\taccueil
\t\t</a>
\t</div>

\t<section class=\"espace_candidat\">
\t\t<h1>Mon Espace Candidat</h1>

\t\t<div class=\"espace_candidat_liens\">
\t\t\t<a href=\"{{path ('favoris')}}\">Annonces coups de coeur &#9829;</a>
\t\t\t<a href=\"{{path ('postuler')}}\">Liste de mes candidatures</a>
\t\t</div>
\t\t<table class=\"table\">

\t\t\t<thead class=\"thead-dark\">
\t\t\t\t<tr class=\"candidat_tr\">
\t\t\t\t\t<th scope=\"col\">Email</th>
\t\t\t\t\t<th scope=\"col\">Prénom</th>
\t\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t\t{# <th scope=\"col\">CreateAt</th> #}
\t\t\t\t\t<th scope=\"col\">Parcours scolaire</th>
\t\t\t\t\t<th scope=\"col\">Experience</th>
\t\t\t\t\t<th scope=\"col\">Ma description</th>
\t\t\t\t\t<th scope=\"col\">Editer</th>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t</thead>


\t\t\t<tbody class=\"candidat_body\">

\t\t\t\t<td>{{ candidat.email }}</td>
\t\t\t\t<td>{{ candidat.firstName }}</td>
\t\t\t\t<td>{{ candidat.lastName }}</td>
\t\t\t\t{# <td>{{ candidat.createAt ? candidat.createAt|date('Y-m-d') : '' }}</td> #}
\t\t\t\t<td>{{ candidat.education }}</td>
\t\t\t\t<td>{{ candidat.experience }}</td>
\t\t\t\t<td>{{ candidat.descriptionCandidat }}</td>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"{{ path('crud_candidat_edit') }}\">
\t\t\t\t\t\t<i class=\"fas fa-pencil-alt\"></i>
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t</tbody>
\t\t</tr>

\t</tbody>
</table>
<div class=\"center_documents\">
\t{% for document in candidat.documents %}

\t\t{% if document.pieceJointe is not null %}
\t\t\t{{ document.name }}

\t\t\t{% if document.name == 'photo' %}
\t\t\t\t<img src=\"{{ (vich_uploader_asset (document, 'pieceJointeFile' ) ) }}\" alt=\"{{ document.name }}\"/>
\t\t\t{% else %}
\t\t\t\t<a download href=\"{{ (vich_uploader_asset (document, 'pieceJointeFile' ) ) }}\" alt=\"{{ document.name }}\">Télécharger</a>
\t\t\t\t<embed src=\"{{ (vich_uploader_asset (document, 'pieceJointeFile' ) ) }}\" alt=\"{{ document.name }}\" width=\"500\" height=\"375\" type=\"application/pdf\"/>
\t\t\t{% endif %}

\t\t{% endif %}

\t{% endfor %}

</div></section>{% endblock %}

", "crud_candidat/index.html.twig", "/Applications/MAMP/htdocs/MAMP - Banderas/Projet Benetton/my-project/templates/crud_candidat/index.html.twig");
    }
}

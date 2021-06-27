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

/* job_crud/index.html.twig */
class __TwigTemplate_1750e0fb28c6d7dc77b6e747e664ab6750e43bca06ec5fdbbf81e856908fe9da extends Template
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
        $this->parent = $this->loadTemplate("home/squelette.html.twig", "job_crud/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Modifier des offres";
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
\t<section class=\"espace_offres\">
\t\t<h1>Vos annonces</h1>

\t\t<div class=\"espace_offres_liens\">
\t\t\t<a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_crud_new");
        echo "\">Nouveau poste
\t\t\t\t<i class=\"fas fa-plus\"></i>
\t\t\t</a>
\t\t</div>
\t\t<table class=\"table\">
\t\t\t<thead class=\"thead-dark\">
\t\t\t\t<tr class=\"offres_tr\">
\t\t\t\t\t<th scope=\"col\">Domaine</th>
\t\t\t\t\t<th scope=\"col\">Intitulé du poste</th>
\t\t\t\t\t<th scope=\"col\">Description</th>
\t\t\t\t\t";
        // line 22
        echo "\t\t\t\t\t<th scope=\"col\">Date de publication</th>
\t\t\t\t\t<th scope=\"col\">Date de prise de fonction</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody class=\"offres_body\">
\t\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["jobs"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 28
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "code", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "name", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "description", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 32
            ((twig_get_attribute($this->env, $this->source, $context["job"], "datePublished", [], "any", false, false, false, 32)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "datePublished", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 33
            ((twig_get_attribute($this->env, $this->source, $context["job"], "jobStartDate", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "jobStartDate", [], "any", false, false, false, 33), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<span class=\"postuler-js\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidat_postuler", ["id" => twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "postulers", [], "any", false, false, false, 36)), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<p>profils</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_crud_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-pencil-alt\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"7\">Aucune annonce</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t\t</tbody>
\t\t</table>
\t</section>


";
    }

    public function getTemplateName()
    {
        return "job_crud/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 51,  136 => 47,  125 => 41,  115 => 36,  109 => 33,  105 => 32,  101 => 31,  97 => 30,  93 => 29,  90 => 28,  85 => 27,  78 => 22,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "job_crud/index.html.twig", "/Applications/MAMP/htdocs/MAMP - Banderas/Projet Benetton/my-project/templates/job_crud/index.html.twig");
    }
}

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

/* crud_recruteur/index.html.twig */
class __TwigTemplate_ea21ce1ef0e2d981ccfceea057825b21a7cefda0fbb26dafa37ebc869ca38300 extends Template
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
        $this->parent = $this->loadTemplate("home/squelette.html.twig", "crud_recruteur/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Recruteur index
";
    }

    // line 6
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t<section class='espace_recruteur'>
\t\t<h1>Mon espace Recruteur</h1>

\t\t<div class=\"espace_recruteur_liens\">
\t\t\t<a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_crud_index");
        echo "\">Voir mes annonces</a>
\t\t</div>

\t\t<table class=\"table\">
\t\t\t<thead class=\"thead-dark\">
\t\t\t\t<tr class=\"recruteur_tr\">
\t\t\t\t\t<th>Email</th>
\t\t\t\t\t<th>Nom de l'entreprise</th>
\t\t\t\t\t<th>Secteur d'activité</th>
\t\t\t\t\t<th>&Eacute;diter son compte</th>
\t\t\t\t</tr>
\t\t\t</thead>

\t\t\t<tbody class=\"recruteur_body\">
\t\t\t\t<td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["recruteur"] ?? null), "email", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
\t\t\t\t<td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["recruteur"] ?? null), "name", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
\t\t\t\t<td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["recruteur"] ?? null), "description", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crud_recruteur_edit");
        echo "\">Modifier</a>
\t\t\t\t</td>
\t\t\t</tbody>
\t\t</table>

\t</section>
";
    }

    public function getTemplateName()
    {
        return "crud_recruteur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 29,  90 => 27,  86 => 26,  82 => 25,  65 => 11,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "crud_recruteur/index.html.twig", "/Applications/MAMP/htdocs/MAMP - Banderas/Projet Benetton/my-project/templates/crud_recruteur/index.html.twig");
    }
}

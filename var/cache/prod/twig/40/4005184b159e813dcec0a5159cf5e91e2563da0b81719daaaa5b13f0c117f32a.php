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

/* crud_candidat/show.html.twig */
class __TwigTemplate_6cab15483045074c355a40caa68beee368153a7c51bdc6a96ffb152a553524c5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $this->parent = $this->loadTemplate("home/squelette.html.twig", "crud_candidat/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Candidat";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>Candidat</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["candidat"] ?? null), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["candidat"] ?? null), "email", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>";
        // line 20
        ((twig_get_attribute($this->env, $this->source, ($context["candidat"] ?? null), "roles", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, ($context["candidat"] ?? null), "roles", [], "any", false, false, false, 20)), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["candidat"] ?? null), "password", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>IsVerified</th>
                <td>";
        // line 28
        echo ((twig_get_attribute($this->env, $this->source, ($context["candidat"] ?? null), "isVerified", [], "any", false, false, false, 28)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>FirstName</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["candidat"] ?? null), "firstName", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>LastName</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["candidat"] ?? null), "lastName", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>CreateAt</th>
                <td>";
        // line 40
        ((twig_get_attribute($this->env, $this->source, ($context["candidat"] ?? null), "createAt", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["candidat"] ?? null), "createAt", [], "any", false, false, false, 40), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Education</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["candidat"] ?? null), "education", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Experience</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["candidat"] ?? null), "experience", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DescriptionCandidat</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["candidat"] ?? null), "descriptionCandidat", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>ForgottenPassword</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["candidat"] ?? null), "forgottenPassword", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crud_candidat_index");
        echo "\">Retour</a>

    <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crud_candidat_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["candidat"] ?? null), "id", [], "any", false, false, false, 63)]), "html", null, true);
        echo "\">Modifier</a>

    ";
        // line 65
        echo twig_include($this->env, $context, "crud_candidat/_delete_form.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "crud_candidat/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 65,  156 => 63,  151 => 61,  143 => 56,  136 => 52,  129 => 48,  122 => 44,  115 => 40,  108 => 36,  101 => 32,  94 => 28,  87 => 24,  80 => 20,  73 => 16,  66 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "crud_candidat/show.html.twig", "C:\\xampp\\htdocs\\Projets\\05.Equaly\\Equaly\\templates\\crud_candidat\\show.html.twig");
    }
}

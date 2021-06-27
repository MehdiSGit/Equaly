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

/* @EasyAdmin/crud/field/avatar.html.twig */
class __TwigTemplate_eab7df00582bff6a542551c6f286e501687c1c22b42e1158689f7e4b0068f25f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<img class=\"image-avatar\" height=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 4), "get", [0 => "height"], "method", false, false, false, 4), "html", null, true);
        echo "\" width=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 4), "get", [0 => "height"], "method", false, false, false, 4), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "formattedValue", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/field/avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/field/avatar.html.twig", "C:\\xampp\\htdocs\\Projets\\05.Equaly\\Equaly\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\field\\avatar.html.twig");
    }
}

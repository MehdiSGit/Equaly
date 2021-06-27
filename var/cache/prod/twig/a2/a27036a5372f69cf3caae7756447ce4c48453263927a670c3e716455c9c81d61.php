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

/* security/login.html.twig */
class __TwigTemplate_d48b204d377c5db7ebab83d6af1638837ba1f760354cb3acf8aed1ce7fdfd0c5 extends Template
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
        $this->parent = $this->loadTemplate("home/squelette.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
\t<section class=\"form_login\">


\t\t<form method=\"post\">
\t\t\t";
        // line 11
        if (($context["error"] ?? null)) {
            // line 12
            echo "\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 12), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 12), "security"), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 14
        echo "
\t\t\t";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 15)) {
            // line 16
            echo "\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\tYou are logged in as
\t\t\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 18), "username", [], "any", false, false, false, 18), "html", null, true);
            echo ",
\t\t\t\t\t<a href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
\t\t\t\t</div>
\t\t\t";
        }
        // line 22
        echo "

\t\t\t<div>
\t\t\t\t<h1 class=\"h3 mb-3 font-weight-normal\">Connectez vous</h1>
\t\t\t\t<label for=\"inputEmail\">Email</label>
\t\t\t\t<input type=\"email\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
\t\t\t\t<label for=\"inputPassword\">Mot de passe</label>
\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>

\t\t\t\t<input
\t\t\t\ttype=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

\t\t\t\t<div class=\"btns\">

\t\t\t\t\t<button class=\"btn1 btn-lg btn-primary\" type=\"submit\">
\t\t\t\t\t\tSe connecter
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"btn2 btn-lg btn-primary\" type=\"submit\">
\t\t\t\t\t\t<a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">Mot de passe oublié</a>
\t\t\t\t\t</button>
                    <button class=\"btn2 btn-lg btn-primary\" type=\"submit\">
\t\t\t\t\t\t<a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("choice_register");
        echo "\">S'inscire</a>
\t\t\t\t\t</button>

\t\t\t\t\t";
        // line 49
        echo "\t\t\t\t\t\t";
        // line 62
        echo "\t\t\t\t\t</button>

\t\t\t\t</div>
\t\t\t</div>
\t\t</form>

\t</section>
";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 62,  122 => 49,  116 => 43,  110 => 40,  99 => 32,  91 => 27,  84 => 22,  78 => 19,  74 => 18,  70 => 16,  68 => 15,  65 => 14,  59 => 12,  57 => 11,  50 => 6,  46 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/Applications/MAMP/htdocs/MAMP - Banderas/Projet Benetton/my-project/templates/security/login.html.twig");
    }
}

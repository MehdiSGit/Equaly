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
class __TwigTemplate_ec6f98322132cdbb4e729e320fa0f7d8a3bfbce213ac58de3691783c83523eac extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("home/squelette.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
\t<section class=\"form_login\">


\t\t<form method=\"post\">
\t\t\t";
        // line 11
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 11, $this->source); })())) {
            // line 12
            echo "\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })()), "messageKey", [], "any", false, false, false, 12), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })()), "messageData", [], "any", false, false, false, 12), "security"), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 14
        echo "
\t\t\t";
        // line 15
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15)) {
            // line 16
            echo "\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\tYou are logged in as
\t\t\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "username", [], "any", false, false, false, 18), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 27, $this->source); })()), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  142 => 62,  140 => 49,  134 => 43,  128 => 40,  117 => 32,  109 => 27,  102 => 22,  96 => 19,  92 => 18,  88 => 16,  86 => 15,  83 => 14,  77 => 12,  75 => 11,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'home/squelette.html.twig' %}

{# {% block title %}Log in!{% endblock %} #}

{% block main %}

\t<section class=\"form_login\">


\t\t<form method=\"post\">
\t\t\t{% if error %}
\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t{% endif %}

\t\t\t{% if app.user %}
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\tYou are logged in as
\t\t\t\t\t{{ app.user.username }},
\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">Logout</a>
\t\t\t\t</div>
\t\t\t{% endif %}


\t\t\t<div>
\t\t\t\t<h1 class=\"h3 mb-3 font-weight-normal\">Connectez vous</h1>
\t\t\t\t<label for=\"inputEmail\">Email</label>
\t\t\t\t<input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
\t\t\t\t<label for=\"inputPassword\">Mot de passe</label>
\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>

\t\t\t\t<input
\t\t\t\ttype=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

\t\t\t\t<div class=\"btns\">

\t\t\t\t\t<button class=\"btn1 btn-lg btn-primary\" type=\"submit\">
\t\t\t\t\t\tSe connecter
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"btn2 btn-lg btn-primary\" type=\"submit\">
\t\t\t\t\t\t<a href=\"{{ path('app_forgot_password_request') }}\">Mot de passe oublié</a>
\t\t\t\t\t</button>
                    <button class=\"btn2 btn-lg btn-primary\" type=\"submit\">
\t\t\t\t\t\t<a href=\"{{ path('choice_register') }}\">S'inscire</a>
\t\t\t\t\t</button>

\t\t\t\t\t{# <a href=\"{{ path('app_forgot_password_request') }}\">Mot de passe oublié</a>

\t\t\t\t\t<button class=\"btn2 btn-lg btn-primary\" type=\"submit\"> #}
\t\t\t\t\t\t{# {% if app.user %}

\t\t\t\t\t\t\t{% if is_granted('ROLE_RECRUTEUR') %}
\t\t\t\t\t\t\t\t<a href=\"{{path ('app_register_recruteur')}}\">
\t\t\t\t\t\t\t\t\tS'inscrire</a>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t{% if is_granted('ROLE_CANDIDAT') %}
\t\t\t\t\t\t\t\t<a href=\"{{path ('app_register')}}\">
\t\t\t\t\t\t\t\t\tS'inscrire</a>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% endif %} #}
\t\t\t\t\t</button>

\t\t\t\t</div>
\t\t\t</div>
\t\t</form>

\t</section>
{% endblock %}

", "security/login.html.twig", "/Applications/MAMP/htdocs/MAMP - Banderas/Projet Benetton/my-project/templates/security/login.html.twig");
    }
}

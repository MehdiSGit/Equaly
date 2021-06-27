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

/* home/squelette.html.twig */
class __TwigTemplate_7c628032f974f19275b94a2180262150cbb37038dd0e871c48555d452a60ffb7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'main' => [$this, 'block_main'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.2/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css2?family=Spectral:wght@200;400;600&display=swap\" rel=\"stylesheet\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
        <link href=\"https://fonts.googleapis.com/css2?family=Finger+Paint&display=swap\" rel=\"stylesheet\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
<link href=\"https://fonts.googleapis.com/css2?family=Raleway:wght@300;500;600&display=swap\" rel=\"stylesheet\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
<link href=\"https://fonts.googleapis.com/css2?family=Caveat:wght@600;700&display=swap\" rel=\"stylesheet\">
\t\t";
        // line 23
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
\t\t";
        // line 25
        echo "\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "

";
        // line 28
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.wpcc.io/lib/1.0.2/cookieconsent.min.css\"/>
<script src=\"https://cdn.wpcc.io/lib/1.0.2/cookieconsent.min.js\" defer></script>
<script>window.addEventListener(\"load\", function(){window.wpcc.init({\"border\":\"thin\",\"corners\":\"small\",\"colors\":{\"popup\":{\"background\":\"#f0edff\",\"text\":\"#000000\",\"border\":\"#5e65c2\"},\"button\":{\"background\":\"#5e65c2\",\"text\":\"#ffffff\"}},\"fontsize\":\"large\",\"content\":{\"href\":\"https://\",\"message\":\"Equaly recueille les informations relatives à votre visite en utilisant des cookies pour améliorer la performance du site, faciliter les partages sur les réseaux sociaux et offrir des publicités adaptées à vos centres d’intérêt. En continuant à naviguer sur notre site, vous consentez à l’utilisation de ces cookies. Pour plus d’informations, consultez notre Politique de confidentialité et en matière de cookies. Vous pouvez configurer vos préférences dans les Paramètres de cookies.\",\"link\":\"Plus d'info\",\"button\":\"J'ai compris !\"}})});</script>
\t\t<title>
\t\t\t";
        // line 32
        $this->displayBlock('title', $context, $blocks);
        // line 33
        echo "\t\t\t
\t\t</title>
\t</head>
\t<body>


\t\t<header>
\t\t\t";
        // line 40
        $this->displayBlock('header', $context, $blocks);
        // line 94
        echo "\t\t</header>

\t\t<main>
\t\t\t";
        // line 97
        $this->displayBlock('main', $context, $blocks);
        // line 98
        echo "\t\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 99
        echo "\t\t</main>

\t\t<footer>
\t\t\t<div class=\"container_footer\">

\t\t\t\t<div class=\"newsletter\">
\t\t\t\t\t<h4> On reste en contact ?</h4>
\t\t\t\t\t<input placeholder=\"mail@mail.com\" type=\"text\">
\t\t\t\t</div>

\t\t\t\t<section class=\"footer_text\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t <b> Ou nous trouver ? </b></p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t7 rue de la liberte,
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t75010 Paris</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tMentions légales
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tCGU
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tmail: contact@equaly.fr</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t+33 01677543890</p>
\t\t\t\t\t</div>
\t\t\t\t</section>


\t\t\t</div>

\t\t\t<div class=\"copyright\">
\t\t\t<p> 2021 Equaly- Team Benetton</p>
\t\t\t</div>
\t\t</footer>
\t</body>
</html></body></html>
";
    }

    // line 32
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Equaly ";
    }

    // line 40
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "
\t\t\t\t<div class=\"header_nav\">


\t\t\t\t\t<h4>
\t\t\t\t\t\t<a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Equaly</a>
\t\t\t\t\t</h4>


\t\t\t\t\t";
        // line 54
        echo "

\t\t\t\t\t<nav
\t\t\t\t\t\tclass=\"nav\">
\t\t\t\t\t\t";
        // line 59
        echo "\t\t\t\t\t\t<a href=\"#\">&Agrave; propos</a>
\t\t\t\t\t\t<a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">Blog</a>


\t\t\t\t\t\t";
        // line 63
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 63)) {
            // line 64
            echo "

\t\t\t\t\t\t\t";
            // line 66
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RECRUTEUR")) {
                // line 67
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crud_recruteur_index");
                echo "\">
\t\t\t\t\t\t\t\t\tMon espace personnel</a>
\t\t\t\t\t\t\t";
            }
            // line 70
            echo "
\t\t\t\t\t\t\t";
            // line 71
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CANDIDAT")) {
                // line 72
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crud_candidat_index");
                echo "\">
\t\t\t\t\t\t\t\t\tMon espace personnel</a>
\t\t\t\t\t\t\t";
            }
            // line 75
            echo "

\t\t\t\t\t\t\t<a href=\"";
            // line 77
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Se déconnecter</a>
\t\t\t\t\t\t";
        } else {
            // line 79
            echo "\t\t\t\t\t\t\t ";
            // line 80
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se connecter</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 81
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("choice_register");
            echo "\">S'inscrire</a>
\t\t\t\t\t\t";
        }
        // line 83
        echo "
\t\t\t\t\t</nav>

\t\t\t\t\t<div class=\"icons\">
\t\t\t\t\t\t<i class=\"far fa-eye-slash\"></i>
\t\t\t\t\t\t<i class=\"fas fa-deaf\"></i>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t";
    }

    // line 97
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 98
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "home/squelette.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 98,  256 => 97,  242 => 83,  237 => 81,  232 => 80,  230 => 79,  225 => 77,  221 => 75,  214 => 72,  212 => 71,  209 => 70,  202 => 67,  200 => 66,  196 => 64,  194 => 63,  188 => 60,  185 => 59,  179 => 54,  172 => 46,  165 => 41,  161 => 40,  154 => 32,  104 => 99,  101 => 98,  99 => 97,  94 => 94,  92 => 40,  83 => 33,  81 => 32,  75 => 28,  69 => 25,  65 => 23,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/squelette.html.twig", "C:\\xampp\\htdocs\\Projets\\05.Equaly\\Equaly\\templates\\home\\squelette.html.twig");
    }
}

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

/* @Twig/Exception/error404.html.twig */
class __TwigTemplate_b33911b5c3d74ec41ae57bfe09fadb18ee394a64c01427c1deaea95fab3d5a30 extends Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.2/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Spectral:wght@200;400;600&display=swap\" rel=\"stylesheet\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Finger+Paint&display=swap\" rel=\"stylesheet\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Raleway:wght@300;500;600&display=swap\" rel=\"stylesheet\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Caveat:wght@600;700&display=swap\" rel=\"stylesheet\">
\t\t";
        // line 22
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
\t\t";
        // line 24
        echo "\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
\t\t<title></title>
\t</head>
<body>

    <div class=\"banner\">
        <video autoplay muted loop id=\"video\">
            <source src=\"https://docs.google.com/uc?export=download&id=15f0zI8QNEdh5EVKUR1OQcjx7KUC4PNk4\"
                type=\"video/mp4\">
        </video>
        <div class=\"header-overlay\"></div>
        <div class=\"content\">
            <h1>Page 404</h1>
            <p>Vous vous ??tes perdu sorry !</p>
            <button class=\"button\" id=\"btn\">Demandez ?? Alexandre, la montagne ??a lui parle</button>
        </div>
    </div>
    <script src=\"js/main.js\"></script>
</body>
</html>



";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 24,  60 => 22,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Twig/Exception/error404.html.twig", "C:\\xampp\\htdocs\\Projets\\05.Equaly\\Equaly\\templates\\bundles\\TwigBundle\\Exception\\error404.html.twig");
    }
}

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

/* job.html.twig */
class __TwigTemplate_eea841440740a31120475be4569aed166dec795e901dfcd2d29fb2ee1b6c8c84 extends Template
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
        $this->parent = $this->loadTemplate("home/squelette.html.twig", "job.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
<div class=\"container_search_bar\">

";
        // line 7
        echo "<div class=\"search_img\">
  <img src=\"./imgs/happy.svg\" alt=\"fille\">
</div>
<div class=\"element\">Votre JOB en un mot clé: <br>
<span id=\"typed\"></span> 
</div>


</div>



    <div id=\"search-bar\">
    
</div>

  

";
    }

    public function getTemplateName()
    {
        return "job.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "job.html.twig", "/Applications/MAMP/htdocs/MAMP - Banderas/Projet Benetton/my-project/templates/job.html.twig");
    }
}

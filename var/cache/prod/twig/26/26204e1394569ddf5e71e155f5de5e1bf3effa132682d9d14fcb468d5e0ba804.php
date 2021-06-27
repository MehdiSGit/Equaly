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

/* home/home.html.twig */
class __TwigTemplate_0ef177e64e08f343bd83aef8f7125588d6effebc142d68d9e79cf1979afc4412 extends Template
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
        $this->parent = $this->loadTemplate("home/squelette.html.twig", "home/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
\t<div class=\"header_main\">
\t\t<div class=\"title\">
\t\t\t<h1>Chez
\t\t\t\t<span class=\"title_span\">
\t\t\t\t\tEqualy
\t\t\t\t</span>,<br>
\t\t\t\tvotre handicap
\t\t\t\t<br>
\t\t\t\test
\t\t\t\t<span class=\"line-through\">
\t\t\t\t\tun poids
\t\t\t\t</span>

\t\t\t</h1>
\t\t\t<img class=\"force\" src=\"./imgs/votre_force.svg\" alt=\"\">
\t\t\t<a class=\"main_btn\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offres");
        echo "\"> <b>Découvrez nos offres</b>
\t\t\t<img src=\"https://img.icons8.com/material-rounded/24/000000/cursor.png\"/>
\t\t\t</a>

\t\t\t<div class=\"social\">
\t\t\t\t<a href=\"https://twitter.com/?lang=fr\">
\t\t\t\t\t<img src=\"https://img.icons8.com/android/24/000000/twitter.png\"/></a>

\t\t\t\t<a href=\"https://fr-fr.facebook.com/\">
\t\t\t\t\t<img src=\"https://img.icons8.com/material-sharp/24/000000/facebook-new.png\"/></a>

\t\t\t\t<a href=\"https://www.instagram.com/?hl=fr\">
\t\t\t\t\t<img src=\"https://img.icons8.com/material-rounded/24/000000/instagram-new.png\"/></a>

\t\t\t</div>
\t\t</div>

\t\t<div class=\"main_img\">
\t\t\t<img src=\"./imgs/main.svg\" alt=\"\">
\t\t</div>

\t</div>


\t";
        // line 45
        echo "\t<section class=\"section\">
\t\t<h3>Notre Concept</h3>
\t\t<div class=\"articles\">
\t\t\t<article>
\t\t\t\t<img src=\"./imgs/article1.svg\" alt=\"\">
\t\t\t\t<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas assumenda sed ipsum, optio quos quod repellat sunt nobis nam commodi?
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLorem, ipsum dolor sit amet consectetur adipisicing elit. Quas assumenda sed ipsum, optio quos quod repellat sunt nobis nam commodi?</p>
\t\t\t</article>
\t\t\t<article>
\t\t\t\t<img src=\"./imgs/article2.svg\" alt=\"\">
\t\t\t\t<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas assumenda sed ipsum, optio quos quod repellat sunt nobis nam commodi?
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLorem, ipsum dolor sit amet consectetur adipisicing elit. Quas assumenda sed ipsum, optio quos quod repellat sunt nobis nam commodi?</p>
\t\t\t</article>
\t\t\t<article>
\t\t\t\t<img src=\"./imgs/article3.svg\" alt=\"\">
\t\t\t\t<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas assumenda sed ipsum, optio quos quod repellat sunt nobis nam commodi?
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLorem, ipsum dolor sit amet consectetur adipisicing elit. Quas assumenda sed ipsum, optio quos quod repellat sunt nobis nam commodi?</p>
\t\t\t</article>
\t\t</div>
\t</section>


\t";
        // line 68
        echo "\t<section class=\"startups\">
\t\t<p>
\t\t\t100+ entreprises nous font confiance
\t\t</p>
\t\t<div class=\"startup_logo\" id=\"startup_animation\">
\t\t\t<img src=\"https://img.icons8.com/wired/128/000000/starbucks.png\"/>
\t\t\t<img src=\"https://img.icons8.com/windows/128/000000/mcdonalds.png\"/>
\t\t\t<img src=\"https://img.icons8.com/ios-filled/150/000000/ikea.png\"/>
\t\t\t<img src=\"https://img.icons8.com/windows/128/000000/huawei-logo.png\"/>
\t\t\t<img src=\"https://img.icons8.com/metro/104/000000/wordpress.png\"/>
\t\t\t<img src=\"https://img.icons8.com/wired/128/000000/disney-plus.png\"/>
\t\t\t<img src=\"https://img.icons8.com/windows/128/000000/huawei-logo.png\"/>
\t\t\t<img src=\"https://img.icons8.com/metro/104/000000/mac-os.png\"/>
\t\t</div>
\t</section>

\t";
        // line 85
        echo "\t<section class=\"blog_section\">
\t\t<h3>La vie au travail</h3>
\t\t<div class=\"articles_blog\">
\t\t\t<div class=\"articles_blog_first\">


\t\t\t\t<article class=\"img_articles_blog_first\">
\t\t\t\t\t<img src=\"./imgs/r1.png\" alt=\"\">
\t\t\t\t</article>

\t\t\t\t<section class=\"articles_blog_imgs\">
\t\t\t\t\t<article>
\t\t\t\t\t\t<img src=\"./imgs/r2.png\" alt=\"\">
\t\t\t\t\t\t<p>Lorem ipsum dolor sit.</p>
\t\t\t\t\t</article>

\t\t\t\t\t<article>
\t\t\t\t\t\t<img src=\"./imgs/r3.png\" alt=\"\">
\t\t\t\t\t\t<p>Lorem ipsum dolor sit.</p>
\t\t\t\t\t</article>

\t\t\t\t\t<article>
\t\t\t\t\t\t<img src=\"./imgs/r4.png\" alt=\"\">
\t\t\t\t\t\t<p>Lorem ipsum dolor sit.</p>
\t\t\t\t\t</article>
\t\t\t\t</section>


\t\t\t\t<button class=\"blog_btn\">
\t\t\t\t\t<a href=\"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">Découvrir plus d'articles</a>
\t\t\t\t</button>
\t\t\t</div>

\t\t\t<div class=\"articles_blog_aside\">


\t\t\t\t<div class=\"a\">
\t\t\t\t\t<span class=\"blog_span\">1</span>
\t\t\t\t\t<div>
\t\t\t\t\t\t<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"fig\">18 Mars 2021</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"a\">
\t\t\t\t\t<span class=\"blog_span\">2</span>
\t\t\t\t\t<div>
\t\t\t\t\t\t<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t<p class=\"fig\">18 Mars 2021</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"a\">
\t\t\t\t\t<span class=\"blog_span\">3</span>
\t\t\t\t\t<div>
\t\t\t\t\t\t<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"fig\">18 Mars 2021</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"a\">
\t\t\t\t\t<span class=\"blog_span\">4</span>
\t\t\t\t\t<div>
\t\t\t\t\t\t<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t<p class=\"fig\">18 Mars 2021</p>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div class=\"a\">
\t\t\t\t\t<span class=\"blog_span\">5</span>
\t\t\t\t\t<div>
\t\t\t\t\t\t<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"fig\">18 Mars 2021</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</section>

\t\t";
        // line 169
        echo "
\t\t<section class=\"etapes_section\">
\t\t\t<div class=\"etapes_title\">
\t\t\t\t<h3>Notre fonctionnement en 3 étapes</h3>
\t\t\t</div>

\t\t\t<div class=\"etapes_articles\">

\t\t\t\t<div class=\"number\">
\t\t\t\t\t<p>1</p>
\t\t\t\t\t<p>2</p>
\t\t\t\t\t<p>3</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"etapes_text\">
\t\t\t\t\t<article>
\t\t\t\t\t\t<h5>Créer son profil</h5>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum error in numquam.</p>
\t\t\t\t\t</article>
\t\t\t\t\t<article>
\t\t\t\t\t\t<h5>Commencer une recherche</h5>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius pariatur cupiditate non!</p>

\t\t\t\t\t</article>
\t\t\t\t\t<article>
\t\t\t\t\t\t<h5>Postuler aux offres</h5>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod ipsum adipisci possimus.</p>

\t\t\t\t\t</article>
\t\t\t\t</div>

\t\t\t\t<div class=\"contact_img\">
\t\t\t\t\t<img src=\"./imgs/etapes.png\" alt=\"\">
\t\t\t\t</div>

\t\t\t</div>


\t\t</section>

\t\t";
        // line 210
        echo "
\t\t<section class=\"title\"></section>
\t";
    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 210,  225 => 169,  168 => 114,  137 => 85,  119 => 68,  95 => 45,  68 => 20,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/home.html.twig", "C:\\xampp\\htdocs\\Projets\\05.Equaly\\Equaly\\templates\\home\\home.html.twig");
    }
}

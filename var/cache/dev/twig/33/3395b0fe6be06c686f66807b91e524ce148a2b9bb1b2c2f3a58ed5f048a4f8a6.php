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
class __TwigTemplate_42e180aca345fdeb9ac8cdb8ab58c01adf02113ce9fa7da77a0512a116b8e81c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent = $this->loadTemplate("home/squelette.html.twig", "home/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  285 => 210,  243 => 169,  186 => 114,  155 => 85,  137 => 68,  113 => 45,  86 => 20,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'home/squelette.html.twig' %}

{% block main %}

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
\t\t\t<a class=\"main_btn\" href=\"{{ path('offres') }}\"> <b>Découvrez nos offres</b>
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


\t{# Concept #}
\t<section class=\"section\">
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


\t{# Startups #}
\t<section class=\"startups\">
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

\t{####################### BLOG ####################}
\t<section class=\"blog_section\">
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
\t\t\t\t\t<a href=\"{{path ('blog')}}\">Découvrir plus d'articles</a>
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

\t\t{####################### Etapes ##################}

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

\t\t{####################### FOOTER##################}

\t\t<section class=\"title\"></section>
\t{% endblock %}

", "home/home.html.twig", "/Applications/MAMP/htdocs/MAMP - Banderas/Projet Benetton/my-project/templates/home/home.html.twig");
    }
}

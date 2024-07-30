<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home.html.twig */
class __TwigTemplate_6d6c1bc98ae13419c885f438c6979467 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Home - Crowdin
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        yield "\t<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/camera.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/form.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        yield "\t<!--[if lt IE 8]>
\t\t\t    <div style=' clear: both; text-align:center; position: relative;'>
\t\t\t        <a href=\"http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode\">
\t\t\t            <img src=\"http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\" />
\t\t\t        </a>
\t\t\t    </div>
\t\t\t<![endif]-->
\t<!--[if lt IE 9]>
\t\t\t    <script src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/html5shiv.js"), "html", null, true);
        yield "\"></script>
\t\t\t    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/ie.css"), "html", null, true);
        yield "\">
\t\t\t<![endif]-->
\t\t<body class=\"page1\" id=\"top\"> <div
\t\t\tclass=\"main_color\">
\t\t\t<!--==============================header=================================-->
\t\t\t<div class=\"container_12\">
\t\t\t\t<div class=\"grid_12\">
\t\t\t\t\t<header>
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t";
        // line 32
        yield "\t\t\t\t\t\t\t<img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Your Happy Family\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</h1>
\t\t\t\t\t<div class=\"menu_block\">
\t\t\t\t\t\t<nav class=\"horizontal-nav full-width horizontalNav-notprocessed\">
\t\t\t\t\t\t\t<ul
\t\t\t\t\t\t\t\tclass=\"sf-menu\">
\t\t\t\t\t\t\t\t";
        // line 40
        yield "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"index-1.html\">About</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Dolore ipsu</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Consecte</a>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Dolore ipsu</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Consecte</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Elit Conseq</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Elit Conseq</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"index-2.html\">Translation</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"index-3.html\">Blog</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"index-4.html\">Contacts</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t</header>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"slider_wrapper\">
\t\t\t<div id=\"camera_wrap\" class=\"\">
\t\t\t\t<div data-src=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slide.jpg"), "html", null, true);
        yield "\">
\t\t\t\t\t<div class=\"caption fadeIn\">
\t\t\t\t\t\t<h2>Interpreting &amp; Document
\t\t\t\t\t\t\t<strong>TRANSLATION SERVICES</strong>
\t\t\t\t\t\t</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div data-src=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slide1.jpg"), "html", null, true);
        yield "\">
\t\t\t\t\t<div class=\"caption fadeIn\">
\t\t\t\t\t\t<h2>Proofreading, Transcription
\t\t\t\t\t\t\t<strong>AND VOICEOVER SERVICES</strong>
\t\t\t\t\t\t</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div data-src=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slide2.jpg"), "html", null, true);
        yield "\">
\t\t\t\t\t<div class=\"caption fadeIn\">
\t\t\t\t\t\t<h2>Website translation
\t\t\t\t\t\t\t<strong>AND LOCALIZATION SERVICES</strong>
\t\t\t\t\t\t</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"page1_block\">
\t\t\t<div class=\"container_12\">
\t\t\t\t<div class=\"grid_4\">
\t\t\t\t\t<div class=\"title col1\">Welcome!</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid_8\">
\t\t\t\t\tOur translators work only with subjects relevant to their qualifications and experience.
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!--==============================Content=================================-->
\t\t<div class=\"top_block\">
\t\t\t<div class=\"container_12\">
\t\t\t\t<div class=\"grid_4\">
\t\t\t\t\t<div class=\"count\">01</div>
\t\t\t\t\t<div class=\"title col1\">TRANSLATION EQUIPMENT
\t\t\t\t\t\t<span>dolore ipsum</span>
\t\t\t\t\t</div>
\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum velit, bibendum et condimentum metusip dolore ipsum.
\t\t\t\t\t<br>
\t\t\t\t\t<a href=\"#\" class=\"btn\">More info</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid_4\">
\t\t\t\t\t<div class=\"count\">02</div>
\t\t\t\t\t<div class=\"title col1\">DESKTOP PUBLISHING
\t\t\t\t\t\t<span>dolore ipsum</span>
\t\t\t\t\t</div>
\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum velit, bibendum et condimentum metusip dolore ipsum.
\t\t\t\t\t<br>
\t\t\t\t\t<a href=\"#\" class=\"btn\">More info</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid_4\">
\t\t\t\t\t<div class=\"count\">03</div>
\t\t\t\t\t<div class=\"title col1\">TRANSLATION SERVICES
\t\t\t\t\t\t<span>dolore ipsum</span>
\t\t\t\t\t</div>
\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum velit, bibendum et condimentum metusip dolore ipsum.
\t\t\t\t\t<br>
\t\t\t\t\t<a href=\"#\" class=\"btn\">More info</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"content\">
\t\t\t<div class=\"container_12\">
\t\t\t\t<div class=\"grid_8\">
\t\t\t\t\t<div class=\"grid_4 alpha\">
\t\t\t\t\t\t<h3>OUR
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\tPRICE PROMISE</h3>
\t\t\t\t\t\t<div class=\"text1\">
\t\t\t\t\t\t\t<a href=\"#\">Mes cuml dia sed ineniasinge dolore ipsum.</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\tDolor nunc vule putateulr ips dol consec.Donec semp ertet laciniate ultricie upien disse comete dolo lectus fgilla itollicil tua ludin dolor.
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<a href=\"#\" class=\"btn\">More info</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"grid_4 omega\">
\t\t\t\t\t\t<h3>WHY
\t\t\t\t\t\t\t<br>CHOOSE US?</h3>
\t\t\t\t\t\t<div class=\"text1\">
\t\t\t\t\t\t\t<a href=\"#\">Mes cuml dia sed ineniasinge dolore ipsum.</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\tDolor nunc vule putateulr ips dol consec.Donec semp ertet laciniate ultricie upien disse comete dolo lectus fgilla itollicil tua ludin dolor.
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<a href=\"#\" class=\"btn\">More info</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t<h3>Who we are
\t\t\t\t\t\t<span class=\"col2\">shortly about us</span>
\t\t\t\t\t</h3>
\t\t\t\t\t<img src=\"";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page1_img1.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img_inner fleft\">
\t\t\t\t\t<div class=\"extra_wrapper\">
\t\t\t\t\t\t<div class=\"text1\">
\t\t\t\t\t\t\t<a href=\"#\">Mes cuml dia sed ineniasinge dolore ipsum comnetus.</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"p1\">Dolor nunc vule putateulr ips dol consec.Donec semp ertet laciniate ultricie upien disse comete dolo lectus fgilla itollicil tua ludin dolor nec met quam accumsan. Dolore condime netus lullam utlacus adipiscing ipsum molestie euismod lore estibulum vel libero ipsum sit amet sollicitudin ante.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\tDolor nunc vule putateulr ips dol consec.Donec semp ertet laciniate ultricie upien disse comete dolo lectus fgilla itollicil tua ludin dolor nec met quam accumsan. Dolore condime netus lullam ipsu utlacus adipiscing ipsum molestie euismod lore.
\t\t\t\t</div>
\t\t\t\t<div class=\"grid_4\">
\t\t\t\t\t<h3>OUR TRANSLATION</h3>
\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Urgent translation</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Patent translation</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Legal translation</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Medical translation</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Marketing translation</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Technical translation</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Financial translation</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Personal translation</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Website translation</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Transcription</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Voiceovers</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Proofreading</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<a href=\"#\" class=\"banner\">
\t\t\t\t\t\tsupport
\t\t\t\t\t\t<div class=\"col1\">24/7</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"bottom_block\">
\t\t\t<div class=\"container_12\">
\t\t\t\t<div class=\"grid_5\">
\t\t\t\t\t<div class=\"title\">Subscribe to our Newsletter</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid_7\">
\t\t\t\t\t<form id=\"newsletter\">
\t\t\t\t\t\t<div class=\"grid_5 alpha\">
\t\t\t\t\t\t\t<div class=\"rel\">
\t\t\t\t\t\t\t\t<div class=\"success\">Your subscribe request has been sent!</div>
\t\t\t\t\t\t\t\t<label class=\"email\">
\t\t\t\t\t\t\t\t\t<input type=\"email\" value=\"your email address\">
\t\t\t\t\t\t\t\t\t<span class=\"error\">*This is not a valid email address.</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"grid_2 omega\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn\" data-type=\"submit\">submit</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!--==============================footer=================================-->
\t\t<footer>
\t\t\t<div class=\"container_12\">
\t\t\t\t<div class=\"grid_4\">
\t\t\t\t\t<address class=\"add1\">
\t\t\t\t\t\t<img src=\"";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/direct_icon.png"), "html", null, true);
        yield "\" alt=\"\">
\t\t\t\t\t\tlangos
\t\t\t\t\t\t<br>
\t\t\t\t\t\t28 Jackson Blvd Ste 1020
\t\t\t\t\t\t<br>
\t\t\t\t\t\tChicago, IL 60604-2340
\t\t\t\t\t\t<br>
\t\t\t\t\t</address>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid_4\">
\t\t\t\t\t<address>
\t\t\t\t\t\t<img src=\"";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/mob_icon.png"), "html", null, true);
        yield "\" alt=\"\">
\t\t\t\t\t\t<span>Telephone: +1 800 603 6035</span>
\t\t\t\t\t\tE-mail:
\t\t\t\t\t\t<a href=\"#\">mail@demolink.org</a>
\t\t\t\t\t</address>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid_4\">
\t\t\t\t\t<div class=\"copy\">
\t\t\t\t\t\t<strong>langos
\t\t\t\t\t\t</strong>
\t\t\t\t\t\t&copy;
\t\t\t\t\t\t<span id=\"copyright-year\"></span>
\t\t\t\t\t\t|
\t\t\t\t\t\t";
        // line 287
        yield "\t\t\t\t\t\t<div class=\"socials\">
\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"rss\"></a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"tw\"></a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"gp\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t</body>
</div></body>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 298
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        yield "<script>
\$(document).ready(function () {
jQuery('#camera_wrap').camera({
loader: false,
pagination: true,
minHeight: '350',
thumbnails: false,
height: '34.66666666666667%',
caption: true,
navigation: false,
fx: 'mosaic'
});
\$().UItoTop({easingType: 'easeOutQuart'});
});</script>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  450 => 298,  428 => 287,  412 => 273,  398 => 262,  308 => 175,  223 => 93,  213 => 86,  203 => 79,  162 => 40,  151 => 32,  139 => 22,  135 => 21,  125 => 13,  115 => 12,  102 => 9,  98 => 8,  93 => 7,  83 => 6,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home - Crowdin
{% endblock %}

{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"{{ asset('css/camera.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('css/form.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
{% endblock %}

{% block body %}
\t<!--[if lt IE 8]>
\t\t\t    <div style=' clear: both; text-align:center; position: relative;'>
\t\t\t        <a href=\"http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode\">
\t\t\t            <img src=\"http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\" />
\t\t\t        </a>
\t\t\t    </div>
\t\t\t<![endif]-->
\t<!--[if lt IE 9]>
\t\t\t    <script src=\"{{ asset('js/html5shiv.js') }}\"></script>
\t\t\t    <link rel=\"stylesheet\" media=\"screen\" href=\"{{ asset('css/ie.css') }}\">
\t\t\t<![endif]-->
\t\t<body class=\"page1\" id=\"top\"> <div
\t\t\tclass=\"main_color\">
\t\t\t<!--==============================header=================================-->
\t\t\t<div class=\"container_12\">
\t\t\t\t<div class=\"grid_12\">
\t\t\t\t\t<header>
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t{# <a href=\"{{ path('homepage') }}\"> #}
\t\t\t\t\t\t\t<img src=\"{{ asset('images/logo.png') }}\" alt=\"Your Happy Family\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</h1>
\t\t\t\t\t<div class=\"menu_block\">
\t\t\t\t\t\t<nav class=\"horizontal-nav full-width horizontalNav-notprocessed\">
\t\t\t\t\t\t\t<ul
\t\t\t\t\t\t\t\tclass=\"sf-menu\">
\t\t\t\t\t\t\t\t{# <li class=\"current\"><a href=\"{{ path('homepage') }}\">Home</a></li> #}
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"index-1.html\">About</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Dolore ipsu</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Consecte</a>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Dolore ipsu</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Consecte</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Elit Conseq</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Elit Conseq</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"index-2.html\">Translation</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"index-3.html\">Blog</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"index-4.html\">Contacts</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t</header>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"slider_wrapper\">
\t\t\t<div id=\"camera_wrap\" class=\"\">
\t\t\t\t<div data-src=\"{{ asset('images/slide.jpg') }}\">
\t\t\t\t\t<div class=\"caption fadeIn\">
\t\t\t\t\t\t<h2>Interpreting &amp; Document
\t\t\t\t\t\t\t<strong>TRANSLATION SERVICES</strong>
\t\t\t\t\t\t</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div data-src=\"{{ asset('images/slide1.jpg') }}\">
\t\t\t\t\t<div class=\"caption fadeIn\">
\t\t\t\t\t\t<h2>Proofreading, Transcription
\t\t\t\t\t\t\t<strong>AND VOICEOVER SERVICES</strong>
\t\t\t\t\t\t</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div data-src=\"{{ asset('images/slide2.jpg') }}\">
\t\t\t\t\t<div class=\"caption fadeIn\">
\t\t\t\t\t\t<h2>Website translation
\t\t\t\t\t\t\t<strong>AND LOCALIZATION SERVICES</strong>
\t\t\t\t\t\t</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"page1_block\">
\t\t\t<div class=\"container_12\">
\t\t\t\t<div class=\"grid_4\">
\t\t\t\t\t<div class=\"title col1\">Welcome!</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid_8\">
\t\t\t\t\tOur translators work only with subjects relevant to their qualifications and experience.
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!--==============================Content=================================-->
\t\t<div class=\"top_block\">
\t\t\t<div class=\"container_12\">
\t\t\t\t<div class=\"grid_4\">
\t\t\t\t\t<div class=\"count\">01</div>
\t\t\t\t\t<div class=\"title col1\">TRANSLATION EQUIPMENT
\t\t\t\t\t\t<span>dolore ipsum</span>
\t\t\t\t\t</div>
\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum velit, bibendum et condimentum metusip dolore ipsum.
\t\t\t\t\t<br>
\t\t\t\t\t<a href=\"#\" class=\"btn\">More info</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid_4\">
\t\t\t\t\t<div class=\"count\">02</div>
\t\t\t\t\t<div class=\"title col1\">DESKTOP PUBLISHING
\t\t\t\t\t\t<span>dolore ipsum</span>
\t\t\t\t\t</div>
\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum velit, bibendum et condimentum metusip dolore ipsum.
\t\t\t\t\t<br>
\t\t\t\t\t<a href=\"#\" class=\"btn\">More info</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid_4\">
\t\t\t\t\t<div class=\"count\">03</div>
\t\t\t\t\t<div class=\"title col1\">TRANSLATION SERVICES
\t\t\t\t\t\t<span>dolore ipsum</span>
\t\t\t\t\t</div>
\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum velit, bibendum et condimentum metusip dolore ipsum.
\t\t\t\t\t<br>
\t\t\t\t\t<a href=\"#\" class=\"btn\">More info</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"content\">
\t\t\t<div class=\"container_12\">
\t\t\t\t<div class=\"grid_8\">
\t\t\t\t\t<div class=\"grid_4 alpha\">
\t\t\t\t\t\t<h3>OUR
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\tPRICE PROMISE</h3>
\t\t\t\t\t\t<div class=\"text1\">
\t\t\t\t\t\t\t<a href=\"#\">Mes cuml dia sed ineniasinge dolore ipsum.</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\tDolor nunc vule putateulr ips dol consec.Donec semp ertet laciniate ultricie upien disse comete dolo lectus fgilla itollicil tua ludin dolor.
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<a href=\"#\" class=\"btn\">More info</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"grid_4 omega\">
\t\t\t\t\t\t<h3>WHY
\t\t\t\t\t\t\t<br>CHOOSE US?</h3>
\t\t\t\t\t\t<div class=\"text1\">
\t\t\t\t\t\t\t<a href=\"#\">Mes cuml dia sed ineniasinge dolore ipsum.</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\tDolor nunc vule putateulr ips dol consec.Donec semp ertet laciniate ultricie upien disse comete dolo lectus fgilla itollicil tua ludin dolor.
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<a href=\"#\" class=\"btn\">More info</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t<h3>Who we are
\t\t\t\t\t\t<span class=\"col2\">shortly about us</span>
\t\t\t\t\t</h3>
\t\t\t\t\t<img src=\"{{ asset('images/page1_img1.jpg') }}\" alt=\"\" class=\"img_inner fleft\">
\t\t\t\t\t<div class=\"extra_wrapper\">
\t\t\t\t\t\t<div class=\"text1\">
\t\t\t\t\t\t\t<a href=\"#\">Mes cuml dia sed ineniasinge dolore ipsum comnetus.</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"p1\">Dolor nunc vule putateulr ips dol consec.Donec semp ertet laciniate ultricie upien disse comete dolo lectus fgilla itollicil tua ludin dolor nec met quam accumsan. Dolore condime netus lullam utlacus adipiscing ipsum molestie euismod lore estibulum vel libero ipsum sit amet sollicitudin ante.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\tDolor nunc vule putateulr ips dol consec.Donec semp ertet laciniate ultricie upien disse comete dolo lectus fgilla itollicil tua ludin dolor nec met quam accumsan. Dolore condime netus lullam ipsu utlacus adipiscing ipsum molestie euismod lore.
\t\t\t\t</div>
\t\t\t\t<div class=\"grid_4\">
\t\t\t\t\t<h3>OUR TRANSLATION</h3>
\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Urgent translation</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Patent translation</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Legal translation</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Medical translation</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Marketing translation</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Technical translation</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Financial translation</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Personal translation</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Website translation</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Transcription</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Voiceovers</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Proofreading</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<a href=\"#\" class=\"banner\">
\t\t\t\t\t\tsupport
\t\t\t\t\t\t<div class=\"col1\">24/7</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"bottom_block\">
\t\t\t<div class=\"container_12\">
\t\t\t\t<div class=\"grid_5\">
\t\t\t\t\t<div class=\"title\">Subscribe to our Newsletter</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid_7\">
\t\t\t\t\t<form id=\"newsletter\">
\t\t\t\t\t\t<div class=\"grid_5 alpha\">
\t\t\t\t\t\t\t<div class=\"rel\">
\t\t\t\t\t\t\t\t<div class=\"success\">Your subscribe request has been sent!</div>
\t\t\t\t\t\t\t\t<label class=\"email\">
\t\t\t\t\t\t\t\t\t<input type=\"email\" value=\"your email address\">
\t\t\t\t\t\t\t\t\t<span class=\"error\">*This is not a valid email address.</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"grid_2 omega\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn\" data-type=\"submit\">submit</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!--==============================footer=================================-->
\t\t<footer>
\t\t\t<div class=\"container_12\">
\t\t\t\t<div class=\"grid_4\">
\t\t\t\t\t<address class=\"add1\">
\t\t\t\t\t\t<img src=\"{{ asset('images/direct_icon.png') }}\" alt=\"\">
\t\t\t\t\t\tlangos
\t\t\t\t\t\t<br>
\t\t\t\t\t\t28 Jackson Blvd Ste 1020
\t\t\t\t\t\t<br>
\t\t\t\t\t\tChicago, IL 60604-2340
\t\t\t\t\t\t<br>
\t\t\t\t\t</address>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid_4\">
\t\t\t\t\t<address>
\t\t\t\t\t\t<img src=\"{{ asset('images/mob_icon.png') }}\" alt=\"\">
\t\t\t\t\t\t<span>Telephone: +1 800 603 6035</span>
\t\t\t\t\t\tE-mail:
\t\t\t\t\t\t<a href=\"#\">mail@demolink.org</a>
\t\t\t\t\t</address>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid_4\">
\t\t\t\t\t<div class=\"copy\">
\t\t\t\t\t\t<strong>langos
\t\t\t\t\t\t</strong>
\t\t\t\t\t\t&copy;
\t\t\t\t\t\t<span id=\"copyright-year\"></span>
\t\t\t\t\t\t|
\t\t\t\t\t\t{# <a href=\"index-5.html\">Privacy Policy</a> <!--{%FOOTER_LINK} --> #}
\t\t\t\t\t\t<div class=\"socials\">
\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"rss\"></a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"tw\"></a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"gp\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t</body>
</div></body>{% endblock %}{% block javascripts %}<script>
\$(document).ready(function () {
jQuery('#camera_wrap').camera({
loader: false,
pagination: true,
minHeight: '350',
thumbnails: false,
height: '34.66666666666667%',
caption: true,
navigation: false,
fx: 'mosaic'
});
\$().UItoTop({easingType: 'easeOutQuart'});
});</script>{% endblock %}
", "home.html.twig", "/home/haroun/Documents/etna/symfony_crowdin/templates/home.html.twig");
    }
}

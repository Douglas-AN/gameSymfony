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

/* navbar/index.html.twig */
class __TwigTemplate_47d94d9aacd62f80bf4040065c20fe90 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "navbar/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t

\t<nav class=\"navbar sticky-top navbar-expand-md navbar-dark bg-dark\" id=\"navbar\">
\t\t<div class=\"container \">
\t\t\t<a class=\"navbar-brand\" href=\"Home\">
\t\t\t\t<span id=\"logo\">Ashes Gurung</span>
\t\t\t\t<p id=\"tagline\">Web developer &  IT Student
\t\t\t\t</p>
\t\t\t</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"#About\">About</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"#Qualifications\">Quallifications</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"#Gallery\">Gallery</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item \">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"#Contact\">Contact</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
    <style>
\t\t.navabar {

\t\t\tpadding: 0 30px;
\t\t}
\t\t.navbar-brand {

\t\t\tfont-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;

\t\t}
\t\t#logo {
\t\t\tfont-weight: bold;
\t\t\tfont-size: 140%
\t\t}

\t\t#tagline {

\t\t\tfont-size: 70%;

\t\t}

\t\t#contact {
\t\t\tbackground-color: #343A40;
\t\t\tcolor: white;

\t\t}
\t\t#linked-in {
\t\t\tfont-size: 50px !important;
\t\t\tfloat: right;
\t\t\tcolor: white;
\t\t}
\t\tbody {
\t\t\tposition: relative;
\t\t}
\t</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "navbar/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
\t

\t<nav class=\"navbar sticky-top navbar-expand-md navbar-dark bg-dark\" id=\"navbar\">
\t\t<div class=\"container \">
\t\t\t<a class=\"navbar-brand\" href=\"Home\">
\t\t\t\t<span id=\"logo\">Ashes Gurung</span>
\t\t\t\t<p id=\"tagline\">Web developer &  IT Student
\t\t\t\t</p>
\t\t\t</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"#About\">About</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"#Qualifications\">Quallifications</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"#Gallery\">Gallery</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item \">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"#Contact\">Contact</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
    <style>
\t\t.navabar {

\t\t\tpadding: 0 30px;
\t\t}
\t\t.navbar-brand {

\t\t\tfont-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;

\t\t}
\t\t#logo {
\t\t\tfont-weight: bold;
\t\t\tfont-size: 140%
\t\t}

\t\t#tagline {

\t\t\tfont-size: 70%;

\t\t}

\t\t#contact {
\t\t\tbackground-color: #343A40;
\t\t\tcolor: white;

\t\t}
\t\t#linked-in {
\t\t\tfont-size: 50px !important;
\t\t\tfloat: right;
\t\t\tcolor: white;
\t\t}
\t\tbody {
\t\t\tposition: relative;
\t\t}
\t</style>
{% endblock %}
", "navbar/index.html.twig", "/Users/doug/gameSymfony/templates/navbar/index.html.twig");
    }
}

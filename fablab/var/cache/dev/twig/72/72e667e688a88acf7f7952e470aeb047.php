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
use Twig\TemplateWrapper;

/* main_page/index.html.twig */
class __TwigTemplate_81ce410b7ba4e83e70d33c84e40cfec7 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main_page/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main_page/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Bienvenue sur l'inventaire du FabLab !";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<style>
    body {
        background: #f8f9fa;
        color: #333;
        font-family: 'Segoe UI', sans-serif;
    }
    header {
        background: linear-gradient(135deg, #007bff, #00bcd4);
        color: white;
        padding: 3rem 1rem;
        text-align: center;
        border-radius: 0 0 2rem 2rem;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    header h1 {
        font-size: 2.5rem;
        margin-bottom: 0.5rem;
    }
    header p {
        font-size: 1.2rem;
        opacity: 0.9;
    }
    .content {
        max-width: 1000px;
        margin: 3rem auto;
        padding: 2rem;
        background: white;
        border-radius: 1.5rem;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    }
    .features {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
        margin-top: 2rem;
    }
    .feature {
        background: #f0f4ff;
        border-radius: 1rem;
        padding: 1.5rem;
        text-align: center;
        transition: transform 0.3s ease;
    }
    .feature:hover {
        transform: translateY(-5px);
    }
    .feature h3 {
        color: #007bff;
        margin-bottom: 1rem;
    }
    .cta {
        text-align: center;
        margin-top: 3rem;
    }
    .cta a {
        background: #007bff;
        color: white;
        padding: 0.8rem 2rem;
        border-radius: 0.5rem;
        text-decoration: none;
        font-weight: bold;
        transition: background 0.3s ease;
    }
    .cta a:hover {
        background: #0056b3;
    }
</style>

<header>
    <h1>Bienvenue sur l'inventaire du FabLab !</h1>
    <p>Partagez, gérez et découvrez les objets de la communauté</p>
</header>

<div class=\"content\">
    <h2>À propos du site</h2>
    <p>
        Ce site web permet aux membres d’une communauté de savoir ou sont rangés les <strong>outils pour bricoler</strong> 
        et de consulter les collections des autres. Chaque membre peut gérer son lieu privé, 
        publier des galeries visibles par tous et découvrir les nouveautés de la communauté.
    </p>


</div>

<footer class=\"text-center mt-5 text-muted\">
    <p>&copy; ";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " - FabLab Inventaire | Projet CSC4101 - TSP</p>
</footer>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "main_page/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  187 => 91,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bienvenue sur l'inventaire du FabLab !{% endblock %}

{% block body %}
<style>
    body {
        background: #f8f9fa;
        color: #333;
        font-family: 'Segoe UI', sans-serif;
    }
    header {
        background: linear-gradient(135deg, #007bff, #00bcd4);
        color: white;
        padding: 3rem 1rem;
        text-align: center;
        border-radius: 0 0 2rem 2rem;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    header h1 {
        font-size: 2.5rem;
        margin-bottom: 0.5rem;
    }
    header p {
        font-size: 1.2rem;
        opacity: 0.9;
    }
    .content {
        max-width: 1000px;
        margin: 3rem auto;
        padding: 2rem;
        background: white;
        border-radius: 1.5rem;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    }
    .features {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
        margin-top: 2rem;
    }
    .feature {
        background: #f0f4ff;
        border-radius: 1rem;
        padding: 1.5rem;
        text-align: center;
        transition: transform 0.3s ease;
    }
    .feature:hover {
        transform: translateY(-5px);
    }
    .feature h3 {
        color: #007bff;
        margin-bottom: 1rem;
    }
    .cta {
        text-align: center;
        margin-top: 3rem;
    }
    .cta a {
        background: #007bff;
        color: white;
        padding: 0.8rem 2rem;
        border-radius: 0.5rem;
        text-decoration: none;
        font-weight: bold;
        transition: background 0.3s ease;
    }
    .cta a:hover {
        background: #0056b3;
    }
</style>

<header>
    <h1>Bienvenue sur l'inventaire du FabLab !</h1>
    <p>Partagez, gérez et découvrez les objets de la communauté</p>
</header>

<div class=\"content\">
    <h2>À propos du site</h2>
    <p>
        Ce site web permet aux membres d’une communauté de savoir ou sont rangés les <strong>outils pour bricoler</strong> 
        et de consulter les collections des autres. Chaque membre peut gérer son lieu privé, 
        publier des galeries visibles par tous et découvrir les nouveautés de la communauté.
    </p>


</div>

<footer class=\"text-center mt-5 text-muted\">
    <p>&copy; {{ \"now\"|date(\"Y\") }} - FabLab Inventaire | Projet CSC4101 - TSP</p>
</footer>

{% endblock %}
", "main_page/index.html.twig", "/home/kiwano/Documents/TSP/CSC4101/projet_CSC_FabLab/fablab/templates/main_page/index.html.twig");
    }
}

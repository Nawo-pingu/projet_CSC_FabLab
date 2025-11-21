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

/* base.html.twig */
class __TwigTemplate_fd819035561ab47d53bcdadfa24abf8d extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'menu' => [$this, 'block_menu'],
            'body' => [$this, 'block_body'],
            'alerts' => [$this, 'block_alerts'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        ";
        // line 7
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 18
        yield "
        ";
        // line 19
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 25
        yield "    </head>
    <body>
        ";
        // line 27
        yield from $this->unwrap()->yieldBlock('menu', $context, $blocks);
        // line 46
        yield "        ";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 97
        yield "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
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

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        yield "                <!-- Bootstrap icons-->
                <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css\" rel=\"stylesheet\" />
                <!-- Core theme CSS (includes Bootstrap)-->
                <link href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    ";
        // line 13
        yield "    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/custom.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        yield "            <!-- Bootstrap core JS-->
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\"></script>
            <!-- Core theme JS-->
            <script src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts.js"), "html", null, true);
        yield "\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 28
        yield "        <!-- Navigation -->
            <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
                <div class=\"container px-4 px-lg-5\">
          <a class=\"navbar-brand\" href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main_page");
        yield "\">FabLab Inventory</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4\">
                            ";
        // line 35
        yield $this->extensions['Camurphy\BootstrapMenuBundle\Twig\Extension\MenuExtension']->renderMenu($this->env, "main");
        yield "
                            ";
        // line 36
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "                                ";
            yield $this->extensions['Camurphy\BootstrapMenuBundle\Twig\Extension\MenuExtension']->renderMenu($this->env, "account");
            yield "
                            ";
        } else {
            // line 39
            yield "                                ";
            yield $this->extensions['Camurphy\BootstrapMenuBundle\Twig\Extension\MenuExtension']->renderMenu($this->env, "anonymousaccount");
            yield "
                            ";
        }
        // line 40
        yield " ";
        // line 41
        yield "                        </ul>
                    </div>
                </div>
            </nav>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 46
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

        // line 47
        yield "
   <div class=\"container body-container\">
     <div class=\"row\">
       <div id=\"main\" class=\"col-md-12\">

         ";
        // line 52
        yield from $this->unwrap()->yieldBlock('alerts', $context, $blocks);
        // line 74
        yield " ";
        // line 75
        yield "
         <main>

            ";
        // line 79
        yield "            ";
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 87
        yield " ";
        // line 88
        yield "
         </main>
       </div> <!-- main -->

     </div> <!-- row -->

   </div> <!-- /.body-container -->
        
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_alerts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "alerts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "alerts"));

        // line 53
        yield "            ";
        // line 55
        yield "            ";
        // line 59
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "request", [], "any", false, false, false, 59), "hasPreviousSession", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 60
            yield "               <div class=\"messages\">
                  ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "flashes", [], "any", false, false, false, 61));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 62
                yield "                     ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 63
                    yield "                        ";
                    // line 64
                    yield "                        ";
                    if (($context["type"] == "error")) {
                        yield " ";
                        $context["type"] = "danger";
                        yield " ";
                    }
                    // line 65
                    yield "                        ";
                    if (($context["type"] == "message")) {
                        yield " ";
                        $context["type"] = "info";
                        yield " ";
                    }
                    // line 66
                    yield "                        <div class=\"alert alert-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                    yield " alert-dismissible fade show\" role=\"alert\">
                            <div>";
                    // line 67
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
                    yield "</div>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"";
                    // line 68
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.close"), "html", null, true);
                    yield "\"></button>
                        </div>
                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                yield "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            yield "               </div> ";
            // line 73
            yield "            ";
        }
        // line 74
        yield "         ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 79
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 80
        yield "                              <div class=\"row\">
                                <div class=\"col-md-12\">
                                  <p>
                                    <i>MAIN</i>
                                  </p>
                                </div>
                              </div>
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
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  403 => 80,  390 => 79,  379 => 74,  376 => 73,  374 => 72,  368 => 71,  359 => 68,  355 => 67,  350 => 66,  343 => 65,  336 => 64,  334 => 63,  329 => 62,  325 => 61,  322 => 60,  319 => 59,  317 => 55,  315 => 53,  302 => 52,  283 => 88,  281 => 87,  278 => 79,  273 => 75,  271 => 74,  269 => 52,  262 => 47,  249 => 46,  234 => 41,  232 => 40,  226 => 39,  220 => 37,  218 => 36,  214 => 35,  207 => 31,  202 => 28,  189 => 27,  176 => 23,  171 => 20,  158 => 19,  145 => 16,  140 => 13,  136 => 11,  131 => 8,  118 => 7,  95 => 5,  82 => 97,  79 => 46,  77 => 27,  73 => 25,  71 => 19,  68 => 18,  66 => 7,  61 => 5,  55 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        {% block stylesheets %}
                <!-- Bootstrap icons-->
                <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css\" rel=\"stylesheet\" />
                <!-- Core theme CSS (includes Bootstrap)-->
                <link href=\"{{ asset('css/styles.css') }}\" rel=\"stylesheet\">
    {# Neutral custom styles & Google Font #}
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/custom.css') }}\" rel=\"stylesheet\">
        {% endblock %}

        {% block javascripts %}
            <!-- Bootstrap core JS-->
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\"></script>
            <!-- Core theme JS-->
            <script src=\"{{ asset('js/scripts.js') }}\"></script>
        {% endblock %}
    </head>
    <body>
        {% block menu %}
        <!-- Navigation -->
            <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
                <div class=\"container px-4 px-lg-5\">
          <a class=\"navbar-brand\" href=\"{{ path('app_main_page') }}\">FabLab Inventory</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4\">
                            {{ render_bootstrap_menu('main') }}
                            {% if app.user %}
                                {{ render_bootstrap_menu('account') }}
                            {% else %}
                                {{ render_bootstrap_menu('anonymousaccount') }}
                            {% endif %} {# app.user #}
                        </ul>
                    </div>
                </div>
            </nav>
        {% endblock %}{# menu #}
        {% block body %}

   <div class=\"container body-container\">
     <div class=\"row\">
       <div id=\"main\" class=\"col-md-12\">

         {% block alerts %}
            {# Borrowed from the demo app :
               https://github.com/symfony/demo/blob/v2.4.0/templates/base.html.twig #}
            {#
               The check is needed to prevent starting the session when looking for \"flash messages\":
               https://symfony.com/doc/current/session.html#avoid-starting-sessions-for-anonymous-users
            #}
            {% if app.request.hasPreviousSession %}
               <div class=\"messages\">
                  {% for type, messages in app.flashes %}
                     {% for message in messages %}
                        {# Bootstrap alert, see https://getbootstrap.com/docs/3.4/components/#alerts #}
                        {%if type == 'error'%} {% set type = 'danger' %} {%endif%}
                        {%if type == 'message'%} {% set type = 'info' %} {%endif%}
                        <div class=\"alert alert-{{ type }} alert-dismissible fade show\" role=\"alert\">
                            <div>{{ message|trans }}</div>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"{{ 'action.close'|trans }}\"></button>
                        </div>
                     {% endfor %}
                  {% endfor %}
               </div> {# .messages #}
            {% endif %}
         {% endblock %} {# alerts #}

         <main>

            {# Ici la partie utile que les gabarits des pages vont surcharger #}
            {% block main %}
                              <div class=\"row\">
                                <div class=\"col-md-12\">
                                  <p>
                                    <i>MAIN</i>
                                  </p>
                                </div>
                              </div>
            {% endblock %} {# main #}

         </main>
       </div> <!-- main -->

     </div> <!-- row -->

   </div> <!-- /.body-container -->
        
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/kiwano/Documents/TSP/CSC4101/projet_CSC_FabLab/fablab/templates/base.html.twig");
    }
}

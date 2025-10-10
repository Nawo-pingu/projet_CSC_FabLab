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

/* lieu/list.html.twig */
class __TwigTemplate_0cf3588cc723583b9700567c195474a3 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lieu/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lieu/list.html.twig"));

        // line 2
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 3
        yield "
";
        // line 4
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 27
        yield " ";
        yield " 
";
        // line 28
        yield " 
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 2
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

        yield "Lieu list";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "    <h1>Lieux</h1>

       ";
        if ($this->env->isDebug()) {
            // line 7
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["Lieu"]) || array_key_exists("Lieu", $context) ? $context["Lieu"] : (function () { throw new RuntimeError('Variable "Lieu" does not exist.', 7, $this->source); })()));
        }
        // line 8
        yield "
    <table class=\"table\">
        <tbody>
            <tr>
                  <td>
                  <ul>
                  ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["Lieu"]) || array_key_exists("Lieu", $context) ? $context["Lieu"] : (function () { throw new RuntimeError('Variable "Lieu" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
            // line 15
            yield "                  <li>
                  <a href=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Lieu_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 16)]), "html", null, true);
            yield "\">
                    ";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "name", [], "any", false, false, false, 17), "html", null, true);
            yield "
                  </a>
                  </li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['lieu'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield " ";
        // line 21
        yield "                  </ul> 
                  </td>
            </tr>
        </tbody>
    </table>

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
        return "lieu/list.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  148 => 21,  146 => 20,  136 => 17,  132 => 16,  129 => 15,  125 => 14,  117 => 8,  114 => 7,  109 => 5,  96 => 4,  73 => 2,  61 => 28,  57 => 27,  55 => 4,  52 => 3,  50 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# ... #}
{% block title %}Lieu list{% endblock %}

{% block body %}
    <h1>Lieux</h1>

       {% dump Lieu %}

    <table class=\"table\">
        <tbody>
            <tr>
                  <td>
                  <ul>
                  {%  for lieu in Lieu %}
                  <li>
                  <a href=\"{{ path('Lieu_show', {'id': lieu.id}) }}\">
                    {{ lieu.name }}
                  </a>
                  </li>
                  {% endfor %} {# Lieu #}
                  </ul> 
                  </td>
            </tr>
        </tbody>
    </table>

{% endblock %} {# body #} 
{# ... #} 
", "lieu/list.html.twig", "/home/kiwano/Documents/TSP/CSC4101/projet_CSC_FabLab/fablab/templates/lieu/list.html.twig");
    }
}

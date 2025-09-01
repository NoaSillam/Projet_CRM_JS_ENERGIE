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

/* bath/show.html.twig */
class __TwigTemplate_ea70b596d2ed7d73961bb0c42e33804b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bath/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bath/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "bath/show.html.twig", 1);
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

        yield "Bath";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1>Bath</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bath"]) || array_key_exists("bath", $context) ? $context["bath"] : (function () { throw new RuntimeError('Variable "bath" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>PieceIdentite</th>
                <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bath"]) || array_key_exists("bath", $context) ? $context["bath"] : (function () { throw new RuntimeError('Variable "bath" does not exist.', 16, $this->source); })()), "pieceIdentite", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>LivretFamille</th>
                <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bath"]) || array_key_exists("bath", $context) ? $context["bath"] : (function () { throw new RuntimeError('Variable "bath" does not exist.', 20, $this->source); })()), "livretFamille", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>AvisImpots</th>
                <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bath"]) || array_key_exists("bath", $context) ? $context["bath"] : (function () { throw new RuntimeError('Variable "bath" does not exist.', 24, $this->source); })()), "avisImpots", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>TaceFonciere</th>
                <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bath"]) || array_key_exists("bath", $context) ? $context["bath"] : (function () { throw new RuntimeError('Variable "bath" does not exist.', 28, $this->source); })()), "taceFonciere", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>PreconisationTravaux</th>
                <td>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bath"]) || array_key_exists("bath", $context) ? $context["bath"] : (function () { throw new RuntimeError('Variable "bath" does not exist.', 32, $this->source); })()), "preconisationTravaux", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Dpe</th>
                <td>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bath"]) || array_key_exists("bath", $context) ? $context["bath"] : (function () { throw new RuntimeError('Variable "bath" does not exist.', 36, $this->source); })()), "dpe", [], "any", false, false, false, 36), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bath"]) || array_key_exists("bath", $context) ? $context["bath"] : (function () { throw new RuntimeError('Variable "bath" does not exist.', 40, $this->source); })()), "nom", [], "any", false, false, false, 40), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bath"]) || array_key_exists("bath", $context) ? $context["bath"] : (function () { throw new RuntimeError('Variable "bath" does not exist.', 44, $this->source); })()), "prenom", [], "any", false, false, false, 44), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>CodePostal</th>
                <td>";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bath"]) || array_key_exists("bath", $context) ? $context["bath"] : (function () { throw new RuntimeError('Variable "bath" does not exist.', 48, $this->source); })()), "codePostal", [], "any", false, false, false, 48), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Departement</th>
                <td>";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bath"]) || array_key_exists("bath", $context) ? $context["bath"] : (function () { throw new RuntimeError('Variable "bath" does not exist.', 52, $this->source); })()), "departement", [], "any", false, false, false, 52), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bath"]) || array_key_exists("bath", $context) ? $context["bath"] : (function () { throw new RuntimeError('Variable "bath" does not exist.', 56, $this->source); })()), "telephone", [], "any", false, false, false, 56), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Revenu</th>
                <td>";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bath"]) || array_key_exists("bath", $context) ? $context["bath"] : (function () { throw new RuntimeError('Variable "bath" does not exist.', 60, $this->source); })()), "revenu", [], "any", false, false, false, 60), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>MetreCarre</th>
                <td>";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bath"]) || array_key_exists("bath", $context) ? $context["bath"] : (function () { throw new RuntimeError('Variable "bath" does not exist.', 64, $this->source); })()), "metreCarre", [], "any", false, false, false, 64), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Menage</th>
                <td>";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bath"]) || array_key_exists("bath", $context) ? $context["bath"] : (function () { throw new RuntimeError('Variable "bath" does not exist.', 68, $this->source); })()), "menage", [], "any", false, false, false, 68), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Isolation</th>
                <td>";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bath"]) || array_key_exists("bath", $context) ? $context["bath"] : (function () { throw new RuntimeError('Variable "bath" does not exist.', 72, $this->source); })()), "isolation", [], "any", false, false, false, 72), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bath_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bath_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["bath"]) || array_key_exists("bath", $context) ? $context["bath"] : (function () { throw new RuntimeError('Variable "bath" does not exist.', 79, $this->source); })()), "id", [], "any", false, false, false, 79)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 81
        yield Twig\Extension\CoreExtension::include($this->env, $context, "bath/_delete_form.html.twig");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "bath/show.html.twig";
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
        return array (  221 => 81,  216 => 79,  211 => 77,  203 => 72,  196 => 68,  189 => 64,  182 => 60,  175 => 56,  168 => 52,  161 => 48,  154 => 44,  147 => 40,  140 => 36,  133 => 32,  126 => 28,  119 => 24,  112 => 20,  105 => 16,  98 => 12,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bath{% endblock %}

{% block body %}
    <h1>Bath</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ bath.id }}</td>
            </tr>
            <tr>
                <th>PieceIdentite</th>
                <td>{{ bath.pieceIdentite }}</td>
            </tr>
            <tr>
                <th>LivretFamille</th>
                <td>{{ bath.livretFamille }}</td>
            </tr>
            <tr>
                <th>AvisImpots</th>
                <td>{{ bath.avisImpots }}</td>
            </tr>
            <tr>
                <th>TaceFonciere</th>
                <td>{{ bath.taceFonciere }}</td>
            </tr>
            <tr>
                <th>PreconisationTravaux</th>
                <td>{{ bath.preconisationTravaux }}</td>
            </tr>
            <tr>
                <th>Dpe</th>
                <td>{{ bath.dpe }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ bath.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ bath.prenom }}</td>
            </tr>
            <tr>
                <th>CodePostal</th>
                <td>{{ bath.codePostal }}</td>
            </tr>
            <tr>
                <th>Departement</th>
                <td>{{ bath.departement }}</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>{{ bath.telephone }}</td>
            </tr>
            <tr>
                <th>Revenu</th>
                <td>{{ bath.revenu }}</td>
            </tr>
            <tr>
                <th>MetreCarre</th>
                <td>{{ bath.metreCarre }}</td>
            </tr>
            <tr>
                <th>Menage</th>
                <td>{{ bath.menage }}</td>
            </tr>
            <tr>
                <th>Isolation</th>
                <td>{{ bath.isolation }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_bath_index') }}\">back to list</a>

    <a href=\"{{ path('app_bath_edit', {'id': bath.id}) }}\">edit</a>

    {{ include('bath/_delete_form.html.twig') }}
{% endblock %}
", "bath/show.html.twig", "/Applications/MAMP/htdocs/CRM/CRM_project_1/templates/bath/show.html.twig");
    }
}

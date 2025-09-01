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

/* bath/index.html.twig */
class __TwigTemplate_32cb604e2c1ed268ae8d7041b85da831 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bath/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bath/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "bath/index.html.twig", 1);
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

        yield "Bath index";
        
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
        yield "    <br>
    <h1 style=\"text-align: center;\">Bath th</h1>

    <br>
    <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bath_new");
        yield "\" class=\"btn btn-secondary\">Ajouter</a>
    <br>
    <br>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Code Postal</th>
                <th>Departement</th>
                <th>Telephone</th>
                <th>Revenu</th>
                <th>Metre Carre</th>
                <th>Menage</th>
                <th>Isolation</th>
                <th>Piece Identite</th>
                <th>Livret Famille</th>
                <th>Avis Impots</th>
                <th>Taxe Fonciere</th>
                <th>Preconisation Travaux</th>
                <th>Dpe</th>
                <th>actions</th>

            </tr>
        </thead>
        <tbody>
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["baths"]) || array_key_exists("baths", $context) ? $context["baths"] : (function () { throw new RuntimeError('Variable "baths" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bath"]) {
            // line 37
            yield "            <tr>
                <td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bath"], "nom", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                <td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bath"], "prenom", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                <td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bath"], "codePostal", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
                <td>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bath"], "departement", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bath"], "telephone", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                <td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bath"], "revenu", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bath"], "metreCarre", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bath"], "menage", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                <td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bath"], "isolation", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
                <td>
                    ";
            // line 48
            if (CoreExtension::getAttribute($this->env, $this->source, $context["bath"], "pieceIdentite", [], "any", false, false, false, 48)) {
                // line 49
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["bath"], "pieceIdentite", [], "any", false, false, false, 49))), "html", null, true);
                yield "\" class=\"btn btn-primary\" target=\"_blank\">Voir</a>
                    ";
            } else {
                // line 51
                yield "                        No file
                    ";
            }
            // line 53
            yield "                </td>
                <td>
                    ";
            // line 55
            if (CoreExtension::getAttribute($this->env, $this->source, $context["bath"], "livretFamille", [], "any", false, false, false, 55)) {
                // line 56
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["bath"], "livretFamille", [], "any", false, false, false, 56))), "html", null, true);
                yield "\" class=\"btn btn-primary\" target=\"_blank\">Voir</a>
                    ";
            } else {
                // line 58
                yield "                        No file
                    ";
            }
            // line 60
            yield "                </td>
                <td>
                    ";
            // line 62
            if (CoreExtension::getAttribute($this->env, $this->source, $context["bath"], "avisImpots", [], "any", false, false, false, 62)) {
                // line 63
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["bath"], "avisImpots", [], "any", false, false, false, 63))), "html", null, true);
                yield "\" class=\"btn btn-primary\" target=\"_blank\">Voir</a>
                    ";
            } else {
                // line 65
                yield "                        No file
                    ";
            }
            // line 67
            yield "                </td>
                <td>
                    ";
            // line 69
            if (CoreExtension::getAttribute($this->env, $this->source, $context["bath"], "taxeFonciere", [], "any", false, false, false, 69)) {
                // line 70
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["bath"], "taxeFonciere", [], "any", false, false, false, 70))), "html", null, true);
                yield "\" class=\"btn btn-primary\" target=\"_blank\">Voir</a>
                    ";
            } else {
                // line 72
                yield "                        No file
                    ";
            }
            // line 74
            yield "                </td>
                <td>
                    ";
            // line 76
            if (CoreExtension::getAttribute($this->env, $this->source, $context["bath"], "preconisationTravaux", [], "any", false, false, false, 76)) {
                // line 77
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["bath"], "preconisationTravaux", [], "any", false, false, false, 77))), "html", null, true);
                yield "\" class=\"btn btn-primary\" target=\"_blank\">Voir</a>
                    ";
            } else {
                // line 79
                yield "                        No file
                    ";
            }
            // line 81
            yield "                </td>
                <td>
                    ";
            // line 83
            if (CoreExtension::getAttribute($this->env, $this->source, $context["bath"], "dpe", [], "any", false, false, false, 83)) {
                // line 84
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["bath"], "dpe", [], "any", false, false, false, 84))), "html", null, true);
                yield "\" class=\"btn btn-primary\" target=\"_blank\">Voir</a>
                    ";
            } else {
                // line 86
                yield "                        No file
                    ";
            }
            // line 88
            yield "                </td>

                <td>
                    <a href=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bath_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["bath"], "id", [], "any", false, false, false, 91)]), "html", null, true);
            yield "\">show</a>
                    <a href=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bath_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["bath"], "id", [], "any", false, false, false, 92)]), "html", null, true);
            yield "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 96
            yield "            <tr>
                <td colspan=\"17\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bath'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        yield "        </tbody>
    </table>


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
        return "bath/index.html.twig";
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
        return array (  289 => 100,  280 => 96,  271 => 92,  267 => 91,  262 => 88,  258 => 86,  252 => 84,  250 => 83,  246 => 81,  242 => 79,  236 => 77,  234 => 76,  230 => 74,  226 => 72,  220 => 70,  218 => 69,  214 => 67,  210 => 65,  204 => 63,  202 => 62,  198 => 60,  194 => 58,  188 => 56,  186 => 55,  182 => 53,  178 => 51,  172 => 49,  170 => 48,  165 => 46,  161 => 45,  157 => 44,  153 => 43,  149 => 42,  145 => 41,  141 => 40,  137 => 39,  133 => 38,  130 => 37,  125 => 36,  96 => 10,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bath index{% endblock %}

{% block body %}
    <br>
    <h1 style=\"text-align: center;\">Bath th</h1>

    <br>
    <a href=\"{{ path('app_bath_new') }}\" class=\"btn btn-secondary\">Ajouter</a>
    <br>
    <br>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Code Postal</th>
                <th>Departement</th>
                <th>Telephone</th>
                <th>Revenu</th>
                <th>Metre Carre</th>
                <th>Menage</th>
                <th>Isolation</th>
                <th>Piece Identite</th>
                <th>Livret Famille</th>
                <th>Avis Impots</th>
                <th>Taxe Fonciere</th>
                <th>Preconisation Travaux</th>
                <th>Dpe</th>
                <th>actions</th>

            </tr>
        </thead>
        <tbody>
        {% for bath in baths %}
            <tr>
                <td>{{ bath.nom }}</td>
                <td>{{ bath.prenom }}</td>
                <td>{{ bath.codePostal }}</td>
                <td>{{ bath.departement }}</td>
                <td>{{ bath.telephone }}</td>
                <td>{{ bath.revenu }}</td>
                <td>{{ bath.metreCarre }}</td>
                <td>{{ bath.menage }}</td>
                <td>{{ bath.isolation }}</td>
                <td>
                    {% if bath.pieceIdentite %}
                        <a href=\"{{ asset('assets/images/' ~ bath.pieceIdentite) }}\" class=\"btn btn-primary\" target=\"_blank\">Voir</a>
                    {% else %}
                        No file
                    {% endif %}
                </td>
                <td>
                    {% if bath.livretFamille %}
                        <a href=\"{{ asset('assets/images/' ~ bath.livretFamille) }}\" class=\"btn btn-primary\" target=\"_blank\">Voir</a>
                    {% else %}
                        No file
                    {% endif %}
                </td>
                <td>
                    {% if bath.avisImpots %}
                        <a href=\"{{ asset('assets/images/' ~ bath.avisImpots) }}\" class=\"btn btn-primary\" target=\"_blank\">Voir</a>
                    {% else %}
                        No file
                    {% endif %}
                </td>
                <td>
                    {% if bath.taxeFonciere %}
                        <a href=\"{{ asset('assets/images/' ~ bath.taxeFonciere) }}\" class=\"btn btn-primary\" target=\"_blank\">Voir</a>
                    {% else %}
                        No file
                    {% endif %}
                </td>
                <td>
                    {% if bath.preconisationTravaux %}
                        <a href=\"{{ asset('assets/images/' ~ bath.preconisationTravaux) }}\" class=\"btn btn-primary\" target=\"_blank\">Voir</a>
                    {% else %}
                        No file
                    {% endif %}
                </td>
                <td>
                    {% if bath.dpe %}
                        <a href=\"{{ asset('assets/images/' ~ bath.dpe) }}\" class=\"btn btn-primary\" target=\"_blank\">Voir</a>
                    {% else %}
                        No file
                    {% endif %}
                </td>

                <td>
                    <a href=\"{{ path('app_bath_show', {'id': bath.id}) }}\">show</a>
                    <a href=\"{{ path('app_bath_edit', {'id': bath.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"17\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>


{% endblock %}
", "bath/index.html.twig", "/Applications/MAMP/htdocs/CRM/CRM_project_1/templates/bath/index.html.twig");
    }
}

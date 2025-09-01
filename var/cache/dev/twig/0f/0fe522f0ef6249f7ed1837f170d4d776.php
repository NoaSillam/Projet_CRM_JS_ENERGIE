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

/* planning/new.html.twig */
class __TwigTemplate_b326aa19b30dfeab9cf34392a32fe6d2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planning/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planning/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "planning/new.html.twig", 1);
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

        yield "New Planning";
        
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
        yield "    <h1 style=\"text-align: center;\">Prendre un rendez-vous</h1>
<br>
    ";
        // line 8
        yield Twig\Extension\CoreExtension::include($this->env, $context, "planning/_form.html.twig");
        yield "

    
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCjM-UuAFh4AsGzHLlsRTAf1oMTzh1yAfI&libraries=places&callback=initAutocomplete\" async defer></script>
    <script>
        function initAutocomplete() {
            const addressInput = document.querySelector('.autocomplete-address');
            if (addressInput) {
                const autocomplete = new google.maps.places.Autocomplete(addressInput, {
                    componentRestrictions: { country: 'fr' } // Limiter à la France
                });
            }
        }
    </script>
    ";
        // line 22
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "vars", [], "any", false, false, false, 22), "errors", [], "any", false, false, false, 22)) > 0)) {
            // line 23
            yield "        <div class=\"modal fade show\" id=\"errorModal\" tabindex=\"-1\" role=\"dialog\" style=\"display: block;\" aria-modal=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content border-danger\">
                    <div class=\"modal-header bg-danger text-white\">
                        <h5 class=\"modal-title\">Erreur lors de la création du planning</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" onclick=\"closeModal()\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <ul>
                            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "vars", [], "any", false, false, false, 32), "errors", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 33
                yield "                                <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 33), "html", null, true);
                yield "</li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "                        </ul>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeModal()\">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"modal-backdrop fade show\"></div>
        <script>
            function closeModal() {
                document.getElementById('errorModal').style.display = 'none';
                document.querySelector('.modal-backdrop').remove();
            }
        </script>


    ";
        }
        // line 53
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
        return "planning/new.html.twig";
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
        return array (  157 => 53,  137 => 35,  128 => 33,  124 => 32,  113 => 23,  111 => 22,  94 => 8,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Planning{% endblock %}

{% block body %}
    <h1 style=\"text-align: center;\">Prendre un rendez-vous</h1>
<br>
    {{ include('planning/_form.html.twig') }}

    
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCjM-UuAFh4AsGzHLlsRTAf1oMTzh1yAfI&libraries=places&callback=initAutocomplete\" async defer></script>
    <script>
        function initAutocomplete() {
            const addressInput = document.querySelector('.autocomplete-address');
            if (addressInput) {
                const autocomplete = new google.maps.places.Autocomplete(addressInput, {
                    componentRestrictions: { country: 'fr' } // Limiter à la France
                });
            }
        }
    </script>
    {% if form.vars.errors|length > 0 %}
        <div class=\"modal fade show\" id=\"errorModal\" tabindex=\"-1\" role=\"dialog\" style=\"display: block;\" aria-modal=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content border-danger\">
                    <div class=\"modal-header bg-danger text-white\">
                        <h5 class=\"modal-title\">Erreur lors de la création du planning</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" onclick=\"closeModal()\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <ul>
                            {% for error in form.vars.errors %}
                                <li>{{ error.message }}</li>
                            {% endfor %}
                        </ul>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeModal()\">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"modal-backdrop fade show\"></div>
        <script>
            function closeModal() {
                document.getElementById('errorModal').style.display = 'none';
                document.querySelector('.modal-backdrop').remove();
            }
        </script>


    {% endif %}



{% endblock %}



", "planning/new.html.twig", "/Applications/MAMP/htdocs/jsenergie/CRM_project_1/templates/planning/new.html.twig");
    }
}

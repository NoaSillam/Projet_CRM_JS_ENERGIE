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

/* planning/planning.html.twig */
class __TwigTemplate_c8aa76ebb259d1286fd765a37f11a508 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planning/planning.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planning/planning.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "planning/planning.html.twig", 1);
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

        yield "Planning index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 10
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js\"></script>
    <script>

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'timeGridWeek',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                timeZone: 'local',
                events: [
                    ";
        // line 27
        $context["colors"] = ["#FF5733", "#33FF57", "#3357FF", "#FF33A8", "#FF8333"];
        // line 28
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 28, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
            // line 29
            yield "                    {
                        id: \"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "id", [], "any", false, false, false, 30), "html", null, true);
            yield "\",
                        title: \"";
            // line 31
            ((CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "idLead", [], "any", false, false, false, 31)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "idLead", [], "any", false, false, false, 31), "nomComplet", [], "any", false, false, false, 31), "js"), "html", null, true)) : (yield "N/A"));
            yield "\",
                        start: \"";
            // line 32
            ((CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "date", [], "any", false, false, false, 32)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "date", [], "any", false, false, false, 32), "Y-m-d\\TH:i:s"), "html", null, true)) : (yield ""));
            yield "\",
                        end: \"";
            // line 33
            ((CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "date", [], "any", false, false, false, 33)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "date", [], "any", false, false, false, 33), "+2 hour"), "Y-m-d\\TH:i:s"), "html", null, true)) : (yield ""));
            yield "\",
                        url: \"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planning_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\",
                        color: \"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 35, $this->source); })()), (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 35) % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 35, $this->source); })()))), [], "array", false, false, false, 35), "html", null, true);
            yield "\",
                        allDay: false,
                        extendedProps: {
                            adresse: \"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "adresse", [], "any", false, false, false, 38)), "js"), "html", null, true);
            yield "\",
                            commentaire: \"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "commentaire", [], "any", false, false, false, 39)), ["&euro;" => "€"]), ["&eacute;" => "é"]), "js"), "html", null, true);
            yield "\"
                        }
                    }";
            // line 41
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 41)) {
                yield ",";
            }
            // line 42
            yield "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "                ],
                locale: 'fr',
                slotMinTime: '08:00:00',
                slotMaxTime: '23:59:00',
                nowIndicator: true,
                navLinks: true,
                editable: true,
                eventLimit: true,
                views: {
                    timeGridWeek: {
                        eventLimit: 6
                    },
                    dayGridMonth: {
                        eventLimit: 4,
                        displayEventTime: false
                    }
                },
                eventContent: function(info) {
                    var content = document.createElement('div');
                    var title = document.createElement('div');
                    var commentaireDiv = document.createElement('div');
                    var commentaire = info.event.extendedProps.commentaire;

                    if (info.view.type === 'dayGridMonth') {
                        if (commentaire && commentaire.length > 15) {
                            commentaire = commentaire.substring(0, 15) + '...';
                        }
                        title.textContent = info.event.title + ' - ' + commentaire;

                        var colors = [\"#FF5733\", \"#33FF57\", \"#3357FF\", \"#FF33A8\", \"#FF8333\"];
                        var colorIndex = info.event._instance.range.start.getDate() % colors.length;
                        content.style.backgroundColor = colors[colorIndex];
                        content.style.padding = '5px';
                        content.style.borderRadius = '3px';
                        content.style.color = '#fff';
                    } else {
                        title.textContent = info.event.title;
                        commentaireDiv.textContent = commentaire;
                        commentaireDiv.style.fontSize = '0.9em';
                        commentaireDiv.style.marginTop = '2px';
                    }

                    content.appendChild(title);
                    content.appendChild(commentaireDiv);
                    return { domNodes: [content] };
                },
                eventDrop: function(info) {
                    var event = info.event;

                    if (!event.id) {
                        console.error('ID de l\\'événement manquant');
                        return;
                    }

                    var data = {
                        id: event.id,
                        start: event.start.toLocaleString('sv-SE', { timeZone: 'Europe/Paris', year: 'numeric', month: '2-digit', day: '2-digit', hour: '2-digit', minute: '2-digit', second: '2-digit' }).replace(' ', 'T'),
                        end: event.end ? event.end.toLocaleString('sv-SE', { timeZone: 'Europe/Paris', year: 'numeric', month: '2-digit', day: '2-digit', hour: '2-digit', minute: '2-digit', second: '2-digit' }).replace(' ', 'T') : null
                    };

                    var url = '";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planning_editplanning", ["id" => "ID_PLACEHOLDER"]);
        yield "'.replace('ID_PLACEHOLDER', event.id);
                    console.log(url);

                    fetch(url, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-Token': '";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("planning_update"), "html", null, true);
        yield "'
                        },
                        body: JSON.stringify(data)
                    }).then(response => {
                        if (!response.ok) {
                            throw new Error('La mise à jour a échoué');
                        }
                        return response.json();
                    }).then(data => {
                        console.log('Événement mis à jour avec succès');
                    }).catch(error => {
                        alert('Erreur lors de la mise à jour de l\\'événement : ' + error.message);
                        info.revert();
                    });
                }
            });

            calendar.render();
        });

    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 134
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 135
        yield "    <h1 style=\"text-align: center;\">Planning</h1>
    <br>
    <br>
    <div id=\"calendar\"></div>

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
        return "planning/planning.html.twig";
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
        return array (  329 => 135,  319 => 134,  286 => 111,  275 => 103,  213 => 43,  199 => 42,  195 => 41,  190 => 39,  186 => 38,  180 => 35,  176 => 34,  172 => 33,  168 => 32,  164 => 31,  160 => 30,  157 => 29,  139 => 28,  137 => 27,  117 => 11,  107 => 10,  92 => 6,  82 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Planning index{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css\" rel=\"stylesheet\">
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js\"></script>
    <script>

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'timeGridWeek',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                timeZone: 'local',
                events: [
                    {% set colors = [\"#FF5733\", \"#33FF57\", \"#3357FF\", \"#FF33A8\", \"#FF8333\"] %}
                    {% for planning in plannings %}
                    {
                        id: \"{{ planning.id }}\",
                        title: \"{{ planning.idLead ? planning.idLead.nomComplet | e('js') : 'N/A' }}\",
                        start: \"{{ planning.date ? planning.date|date('Y-m-d\\\\TH:i:s') : '' }}\",
                        end: \"{{ planning.date ? planning.date|date_modify('+2 hour')|date('Y-m-d\\\\TH:i:s') : '' }}\",
                        url: \"{{ path('app_planning_show', {'id': planning.id}) }}\",
                        color: \"{{ colors[loop.index0 % colors|length] }}\",
                        allDay: false,
                        extendedProps: {
                            adresse: \"{{ planning.adresse | striptags | e('js') }}\",
                            commentaire: \"{{ planning.commentaire | striptags | replace({'&euro;': '€'})| replace({'&eacute;': 'é'}) | e('js') }}\"
                        }
                    }{% if not loop.last %},{% endif %}
                    {% endfor %}
                ],
                locale: 'fr',
                slotMinTime: '08:00:00',
                slotMaxTime: '23:59:00',
                nowIndicator: true,
                navLinks: true,
                editable: true,
                eventLimit: true,
                views: {
                    timeGridWeek: {
                        eventLimit: 6
                    },
                    dayGridMonth: {
                        eventLimit: 4,
                        displayEventTime: false
                    }
                },
                eventContent: function(info) {
                    var content = document.createElement('div');
                    var title = document.createElement('div');
                    var commentaireDiv = document.createElement('div');
                    var commentaire = info.event.extendedProps.commentaire;

                    if (info.view.type === 'dayGridMonth') {
                        if (commentaire && commentaire.length > 15) {
                            commentaire = commentaire.substring(0, 15) + '...';
                        }
                        title.textContent = info.event.title + ' - ' + commentaire;

                        var colors = [\"#FF5733\", \"#33FF57\", \"#3357FF\", \"#FF33A8\", \"#FF8333\"];
                        var colorIndex = info.event._instance.range.start.getDate() % colors.length;
                        content.style.backgroundColor = colors[colorIndex];
                        content.style.padding = '5px';
                        content.style.borderRadius = '3px';
                        content.style.color = '#fff';
                    } else {
                        title.textContent = info.event.title;
                        commentaireDiv.textContent = commentaire;
                        commentaireDiv.style.fontSize = '0.9em';
                        commentaireDiv.style.marginTop = '2px';
                    }

                    content.appendChild(title);
                    content.appendChild(commentaireDiv);
                    return { domNodes: [content] };
                },
                eventDrop: function(info) {
                    var event = info.event;

                    if (!event.id) {
                        console.error('ID de l\\'événement manquant');
                        return;
                    }

                    var data = {
                        id: event.id,
                        start: event.start.toLocaleString('sv-SE', { timeZone: 'Europe/Paris', year: 'numeric', month: '2-digit', day: '2-digit', hour: '2-digit', minute: '2-digit', second: '2-digit' }).replace(' ', 'T'),
                        end: event.end ? event.end.toLocaleString('sv-SE', { timeZone: 'Europe/Paris', year: 'numeric', month: '2-digit', day: '2-digit', hour: '2-digit', minute: '2-digit', second: '2-digit' }).replace(' ', 'T') : null
                    };

                    var url = '{{ path('app_planning_editplanning', {'id': 'ID_PLACEHOLDER'}) }}'.replace('ID_PLACEHOLDER', event.id);
                    console.log(url);

                    fetch(url, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-Token': '{{ csrf_token('planning_update') }}'
                        },
                        body: JSON.stringify(data)
                    }).then(response => {
                        if (!response.ok) {
                            throw new Error('La mise à jour a échoué');
                        }
                        return response.json();
                    }).then(data => {
                        console.log('Événement mis à jour avec succès');
                    }).catch(error => {
                        alert('Erreur lors de la mise à jour de l\\'événement : ' + error.message);
                        info.revert();
                    });
                }
            });

            calendar.render();
        });

    </script>
{% endblock %}

{% block body %}
    <h1 style=\"text-align: center;\">Planning</h1>
    <br>
    <br>
    <div id=\"calendar\"></div>

{#    <a href=\"{{ path('app_planning_new') }}\">Create new</a>#}
{% endblock %}
", "planning/planning.html.twig", "/Applications/MAMP/htdocs/CRM/CRM_project_1/templates/planning/planning.html.twig");
    }
}

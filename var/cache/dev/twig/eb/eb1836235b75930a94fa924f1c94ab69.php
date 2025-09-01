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

/* planning/show.html.twig */
class __TwigTemplate_b9708b4add1f161a80612daacc02eee5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planning/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planning/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "planning/show.html.twig", 1);
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

        yield "Planning";
        
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
    <a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planning_index");
        yield "\" class=\"btn btn-dark\" style=\"margin-left:3%;\">Retour</a>
    <a href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planning_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8)]), "html", null, true);
        yield "\" class=\"btn btn-warning\" style=\"margin-left:40%; color: white;\">Edit</a>
    ";
        // line 9
        yield Twig\Extension\CoreExtension::include($this->env, $context, "planning/_delete_form.html.twig");
        yield "
    <br>
    <h1 style=\"text-align: center;\">Planning</h1>
    <div style=\"margin: auto; width: 80%;\">
        <div style=\"margin-left:auto; margin-right:auto;\">
            <table class=\"table\">
                <tbody>
                <tr>
                    <th>Nom</th>
                    <td>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 18, $this->source); })()), "idLead", [], "any", false, false, false, 18), "nomComplet", [], "any", false, false, false, 18), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Adresse</th>
                    <td>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 22, $this->source); })()), "adresse", [], "any", false, false, false, 22), "html", null, true);
        yield "</td>
                </tr>
                <tr data-planning-id=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "html", null, true);
        yield "\">
                    <th>Commentaire</th>
                    <td data-field=\"commentaire\" contenteditable=\"true\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 26, $this->source); })()), "commentaire", [], "any", false, false, false, 26)), "html", null, true);
        yield "</td>
                </tr>
                <tr data-planning-id=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28), "html", null, true);
        yield "\">
                    <th>Date</th>
                    <td data-field=\"date\">
                        <input type=\"date\" class=\"date-input\" value=\"";
        // line 31
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 31, $this->source); })()), "date", [], "any", false, false, false, 31)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 31, $this->source); })()), "date", [], "any", false, false, false, 31), "Y-m-d"), "html", null, true)) : (yield ""));
        yield "\">
                        <input type=\"time\" class=\"time-input\" value=\"";
        // line 32
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 32, $this->source); })()), "date", [], "any", false, false, false, 32)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 32, $this->source); })()), "date", [], "any", false, false, false, 32), "H:i"), "html", null, true)) : (yield ""));
        yield "\">
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("edit-inline-user"), "html", null, true);
        yield "\">

    <script>
        document.querySelectorAll('[data-field=\"date\"]').forEach(cell => {
            const dateInput = cell.querySelector('.date-input');
            const timeInput = cell.querySelector('.time-input');

            const saveDateTime = () => {
                const dateValue = dateInput.value.trim();
                const timeValue = timeInput.value.trim();

                if (dateValue && timeValue) {
                    const [hours, minutes] = timeValue.split(':');
                    const localDateTime = new Date(`\${dateValue}T\${hours}:\${minutes}:00`);
                    const isoDateValue = new Date(localDateTime.getTime() - localDateTime.getTimezoneOffset() * 60000).toISOString();

                    const planningId = cell.closest('tr').dataset.planningId;
                    const csrfToken = document.querySelector('input[name=\"_token\"]').value;

                    fetch(`/planning/\${planningId}/edit-inline-user`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken
                        },
                        body: JSON.stringify({
                            field: 'date',
                            value: isoDateValue
                        })
                    })
                        .then(response => {
                            if (!response.ok) {
                                return response.text().then(text => {
                                    console.error('Failed to update date. Response:', text);
                                    alert('Failed to update date');
                                });
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                } else {
                    console.warn('Date or time input is empty.');
                }
            };

            dateInput.addEventListener('blur', saveDateTime);
            timeInput.addEventListener('blur', saveDateTime);

            cell.addEventListener('dblclick', function() {
                dateInput.focus();
            });
        });

        // Add functionality for the comment field
        document.querySelectorAll('[data-field=\"commentaire\"]').forEach(cell => {
            const saveComment = () => {
                const commentValue = cell.textContent.trim();
                const planningId = cell.closest('tr').dataset.planningId;
                const csrfToken = document.querySelector('input[name=\"_token\"]').value;

                fetch(`/planning/\${planningId}/edit-inline-user`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        field: 'commentaire',
                        value: commentValue
                    })
                })
                    .then(response => {
                        if (!response.ok) {
                            return response.text().then(text => {
                                console.error('Failed to update comment. Response:', text);
                                alert('Failed to update comment');
                            });
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            };

            cell.addEventListener('blur', saveComment);
            cell.addEventListener('dblclick', function() {
                cell.setAttribute('contenteditable', 'true');
                cell.focus();
            });
        });
    </script>
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
        return "planning/show.html.twig";
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
        return array (  156 => 40,  145 => 32,  141 => 31,  135 => 28,  130 => 26,  125 => 24,  120 => 22,  113 => 18,  101 => 9,  97 => 8,  93 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Planning{% endblock %}

{% block body %}
    <br>
    <a href=\"{{ path('app_planning_index') }}\" class=\"btn btn-dark\" style=\"margin-left:3%;\">Retour</a>
    <a href=\"{{ path('app_planning_edit', {'id': planning.id}) }}\" class=\"btn btn-warning\" style=\"margin-left:40%; color: white;\">Edit</a>
    {{ include('planning/_delete_form.html.twig') }}
    <br>
    <h1 style=\"text-align: center;\">Planning</h1>
    <div style=\"margin: auto; width: 80%;\">
        <div style=\"margin-left:auto; margin-right:auto;\">
            <table class=\"table\">
                <tbody>
                <tr>
                    <th>Nom</th>
                    <td>{{ planning.idLead.nomComplet }}</td>
                </tr>
                <tr>
                    <th>Adresse</th>
                    <td>{{ planning.adresse }}</td>
                </tr>
                <tr data-planning-id=\"{{ planning.id }}\">
                    <th>Commentaire</th>
                    <td data-field=\"commentaire\" contenteditable=\"true\">{{ planning.commentaire | striptags }}</td>
                </tr>
                <tr data-planning-id=\"{{ planning.id }}\">
                    <th>Date</th>
                    <td data-field=\"date\">
                        <input type=\"date\" class=\"date-input\" value=\"{{ planning.date ? planning.date|date('Y-m-d') : '' }}\">
                        <input type=\"time\" class=\"time-input\" value=\"{{ planning.date ? planning.date|date('H:i') : '' }}\">
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('edit-inline-user') }}\">

    <script>
        document.querySelectorAll('[data-field=\"date\"]').forEach(cell => {
            const dateInput = cell.querySelector('.date-input');
            const timeInput = cell.querySelector('.time-input');

            const saveDateTime = () => {
                const dateValue = dateInput.value.trim();
                const timeValue = timeInput.value.trim();

                if (dateValue && timeValue) {
                    const [hours, minutes] = timeValue.split(':');
                    const localDateTime = new Date(`\${dateValue}T\${hours}:\${minutes}:00`);
                    const isoDateValue = new Date(localDateTime.getTime() - localDateTime.getTimezoneOffset() * 60000).toISOString();

                    const planningId = cell.closest('tr').dataset.planningId;
                    const csrfToken = document.querySelector('input[name=\"_token\"]').value;

                    fetch(`/planning/\${planningId}/edit-inline-user`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken
                        },
                        body: JSON.stringify({
                            field: 'date',
                            value: isoDateValue
                        })
                    })
                        .then(response => {
                            if (!response.ok) {
                                return response.text().then(text => {
                                    console.error('Failed to update date. Response:', text);
                                    alert('Failed to update date');
                                });
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                } else {
                    console.warn('Date or time input is empty.');
                }
            };

            dateInput.addEventListener('blur', saveDateTime);
            timeInput.addEventListener('blur', saveDateTime);

            cell.addEventListener('dblclick', function() {
                dateInput.focus();
            });
        });

        // Add functionality for the comment field
        document.querySelectorAll('[data-field=\"commentaire\"]').forEach(cell => {
            const saveComment = () => {
                const commentValue = cell.textContent.trim();
                const planningId = cell.closest('tr').dataset.planningId;
                const csrfToken = document.querySelector('input[name=\"_token\"]').value;

                fetch(`/planning/\${planningId}/edit-inline-user`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        field: 'commentaire',
                        value: commentValue
                    })
                })
                    .then(response => {
                        if (!response.ok) {
                            return response.text().then(text => {
                                console.error('Failed to update comment. Response:', text);
                                alert('Failed to update comment');
                            });
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            };

            cell.addEventListener('blur', saveComment);
            cell.addEventListener('dblclick', function() {
                cell.setAttribute('contenteditable', 'true');
                cell.focus();
            });
        });
    </script>
{% endblock %}
", "planning/show.html.twig", "/Applications/MAMP/htdocs/CRM/CRM_project_1/templates/planning/show.html.twig");
    }
}

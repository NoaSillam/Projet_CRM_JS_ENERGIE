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

/* planning/planning1.html.twig */
class __TwigTemplate_89d0cf7494fdc33fceab32cbb751fb65 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planning/planning1.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planning/planning1.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "planning/planning1.html.twig", 1);
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
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <style>
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            overflow-x: visible;
        }

        .no-limit-container {
            width: 100%;
            padding: 0 15px;
        }

        table {
            width: 100%;
            table-layout: auto;
            border-collapse: collapse;
            white-space: nowrap;
        }

        th, td {
            white-space: nowrap;
        }
    </style>

    <br>
    <h1 style=\"text-align: center;\">Planning index</h1>

    <div class=\"d-flex justify-content-between mb-3\">
        <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planning_new");
        yield "\" class=\"btn btn-primary\" style=\"margin-left: 15px;\">Créer un nouveau planning</a>
    </div>

    <div class=\"no-limit-container\">
        <table class=\"table table-hover\">
            <thead>
            <tr>
                <th>Technicien</th>
                <th>Statut de RDV</th>
                <th>Date</th>
                <th>Nom et prénom</th>
                <th>Téléphone</th>
                <th>Adresse</th>
                <th>Chauffage</th>
                <th>Conso</th>
                <th>Age MR et MME</th>
                <th>Superficie</th>
                <th>Situation</th>
                <th>Nbr pers. à charge</th>
                <th>Revenu fiscal</th>
                <th>Crédit en cours</th>
                <th>Situation pro</th>
                <th>Commentaire</th>
                <th>Télépro</th>
                <th colspan=\"30\"></th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 63
        $context["sortedPlannings"] = Twig\Extension\CoreExtension::sort($this->env, (isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 63, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 63, $this->source); })()), "date", [], "any", false, false, false, 63) <=> CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 63, $this->source); })()), "date", [], "any", false, false, false, 63)); });
        // line 64
        yield "            ";
        $context["currentWeek"] = "";
        // line 65
        yield "
            ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sortedPlannings"]) || array_key_exists("sortedPlannings", $context) ? $context["sortedPlannings"] : (function () { throw new RuntimeError('Variable "sortedPlannings" does not exist.', 66, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
            // line 67
            yield "                ";
            $context["week"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "date", [], "any", false, false, false, 67), "o-W");
            // line 68
            yield "
                ";
            // line 69
            if (((isset($context["week"]) || array_key_exists("week", $context) ? $context["week"] : (function () { throw new RuntimeError('Variable "week" does not exist.', 69, $this->source); })()) != (isset($context["currentWeek"]) || array_key_exists("currentWeek", $context) ? $context["currentWeek"] : (function () { throw new RuntimeError('Variable "currentWeek" does not exist.', 69, $this->source); })()))) {
                // line 70
                yield "                    <tr><td colspan=\"30\" style=\"height: 40px;\"></td></tr>
                    <tr>
                        <td colspan=\"30\" style=\"background-color: #f0f0f0; font-weight: bold;\">
                            📅 Semaine du ";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "date", [], "any", false, false, false, 73), "d/m/Y"), "html", null, true);
                yield " (Semaine ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "date", [], "any", false, false, false, 73), "W"), "html", null, true);
                yield ")
                        </td>
                    </tr>
                    <tr><td colspan=\"30\" style=\"height: 40px;\"></td></tr>
                    ";
                // line 77
                $context["currentWeek"] = (isset($context["week"]) || array_key_exists("week", $context) ? $context["week"] : (function () { throw new RuntimeError('Variable "week" does not exist.', 77, $this->source); })());
                // line 78
                yield "                ";
            }
            // line 79
            yield "
                <tr data-lead-id=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "id", [], "any", false, false, false, 80), "html", null, true);
            yield "\">
                    <td>
                        <span class=\"telepro\" data-field=\"telepro\">
                            ";
            // line 83
            ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "idLead", [], "any", false, false, false, 83), "technicien", [], "any", false, false, false, 83)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "idLead", [], "any", false, false, false, 83), "technicien", [], "any", false, false, false, 83), "prenom", [], "any", false, false, false, 83) . " , ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "idLead", [], "any", false, false, false, 83), "technicien", [], "any", false, false, false, 83), "nom", [], "any", false, false, false, 83)), "html", null, true)) : (yield "Choisir à qui assigner la lead"));
            yield "
                        </span>
                        <select class=\"telepro-select d-none\">
                            <option value=\"\">Choisir à qui assigner la lead</option>
                            ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["technicien"]) || array_key_exists("technicien", $context) ? $context["technicien"] : (function () { throw new RuntimeError('Variable "technicien" does not exist.', 87, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["tech"]) {
                // line 88
                yield "                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tech"], "id", [], "any", false, false, false, 88), "html", null, true);
                yield "\"
                                        ";
                // line 89
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "idLead", [], "any", false, false, false, 89), "technicien", [], "any", false, false, false, 89) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "idLead", [], "any", false, false, false, 89), "technicien", [], "any", false, false, false, 89), "id", [], "any", false, false, false, 89) == CoreExtension::getAttribute($this->env, $this->source, $context["tech"], "id", [], "any", false, false, false, 89)))) {
                    yield "selected";
                }
                yield ">
                                    ";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tech"], "prenom", [], "any", false, false, false, 90), "html", null, true);
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tech"], "nom", [], "any", false, false, false, 90), "html", null, true);
                yield "
                                </option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tech'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            yield "                        </select>
                    </td>

                    <td>
                        <span class=\"status\" data-field=\"status\">
                            ";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "statusRDV", [], "any", true, true, false, 98)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "statusRDV", [], "any", false, false, false, 98), "N/A")) : ("N/A")), "html", null, true);
            yield "
                        </span>
                        <select class=\"status-select d-none\">
                            <option value=\"\">Status</option>
                            <option value=\"verifier si fenêtre fini\">vérifier si fenêtre fini</option>
                            <option value=\"verifier si homme présent\">vérifier si homme présent</option>
                            <option value=\"verifier si femme présent\">vérifier si femme présent</option>
                            <option value=\"replanifier\">replanifier</option>
                            <option value=\"a deja un devis\">a déjà un devis</option>
                            <option value=\"verifier si acte definitif\">vérifier si acte définitif</option>
                            <option value=\"verifier si proprietaire\">vérifier si propriétaire</option>
                            <option value=\"petite surface\">petite surface</option>
                            <option value=\"autre\">autre</option>
                        </select>
                        <input type=\"text\" class=\"autre-comment d-none\" placeholder=\"Précisez si 'autre' sélectionné\">
                    </td>

";
            // line 131
            yield "


                    <td>
    <span class=\"editable-date\" data-field=\"date\">
        ";
            // line 136
            ((CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "date", [], "any", false, false, false, 136)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "date", [], "any", false, false, false, 136), "d/m/Y à H\\hi"), "html", null, true)) : (yield ""));
            yield "
    </span>
                        <input type=\"datetime-local\"
                               class=\"editable-date-input d-none\"
                               value=\"";
            // line 140
            ((CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "date", [], "any", false, false, false, 140)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "date", [], "any", false, false, false, 140), "Y-m-d\\TH:i"), "html", null, true)) : (yield ""));
            yield "\">
                    </td>

                    <td>

                        <span class=\"editable\" data-field=\"nomComplet\">";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "idLead", [], "any", false, true, false, 145), "nomComplet", [], "any", true, true, false, 145)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "idLead", [], "any", false, true, false, 145), "nomComplet", [], "any", false, false, false, 145), "N/A")) : ("N/A")), "html", null, true);
            yield "</span>
                        <input type=\"text\" class=\"editable-input d-none\" value=\"";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "idLead", [], "any", false, true, false, 146), "nomComplet", [], "any", true, true, false, 146)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "idLead", [], "any", false, true, false, 146), "nomComplet", [], "any", false, false, false, 146), "")) : ("")), "html", null, true);
            yield "\">
                    </td>
                    <td>
                        <span class=\"editable\" data-field=\"telephone\">";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "telephone", [], "any", false, false, false, 149), "html", null, true);
            yield "</span>
                        <input type=\"text\" class=\"editable-input d-none\" value=\"";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "telephone", [], "any", false, false, false, 150), "html", null, true);
            yield "\">
                    </td>
                    <td>
                        <span class=\"editable\" data-field=\"adresse\">";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "adresse", [], "any", false, false, false, 153), "html", null, true);
            yield "</span>
                        <input type=\"text\" style=\"width: 450px;\" class=\"editable-input editable-address-input d-none autocomplete-address\" value=\"";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "adresse", [], "any", false, false, false, 154), "html", null, true);
            yield "\">
                    </td>
                    <td>
                        <span class=\"type-chauffage\" data-field=\"TypeChauffage\">";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "TypeChauffage", [], "any", false, false, false, 157), "html", null, true);
            yield "</span>
                        <select class=\"type-chauffage-select d-none\">
                            <option>Bois</option>
                            <option>Bois + Elec</option>
                            <option>Bois + Gaz</option>
                            <option>Charbon</option>
                            <option>Chauffage</option>
                            <option>Elec</option>
                            <option>Fioul</option>
                            <option>Fioul + Bois</option>
                            <option>Fioul + Bois + Elec</option>
                            <option>Fioul + Elec</option>
                            <option>Gaz</option>
                            <option>Gaz + Bois</option>
                            <option>Gaz + Elec</option>
                            <option>Gaz + Pac</option>
                            <option>Pac</option>
                            <option>Pac +Bois</option>
                            <option>Peler</option>
                            <option>combustible</option>
                        </select>
                    </td>

                    <td>
                        <span class=\"editable\" data-field=\"consommationAnnuelOuMensuelle\">";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "consommationAnnuelOuMensuelle", [], "any", false, false, false, 181), "html", null, true);
            yield "</span>
                        <input type=\"text\" class=\"editable-input d-none\" value=\"";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "consommationAnnuelOuMensuelle", [], "any", false, false, false, 182), "html", null, true);
            yield "\">
                    </td>

                    <td>
                        <span class=\"editable\" data-field=\"ageMRMME\">";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "ageMRMME", [], "any", false, false, false, 186), "html", null, true);
            yield "</span>
                        <input type=\"text\" class=\"editable-input d-none\" value=\"";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "ageMRMME", [], "any", false, false, false, 187), "html", null, true);
            yield "\">
                    </td>


                    <td>
                        <span class=\"editable\" data-field=\"superficieMaison\">";
            // line 192
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "superficieMaison", [], "any", false, false, false, 192), "html", null, true);
            yield "M2</span>
                        <input type=\"text\" class=\"editable-input d-none\" value=\"";
            // line 193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "superficieMaison", [], "any", false, false, false, 193), "html", null, true);
            yield "\">
                    </td>

                    <td>
                        <span class=\"situation\" data-field=\"situationFamiliale\">";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "situationFamiliale", [], "any", false, false, false, 197), "html", null, true);
            yield "</span>
                        <select class=\"situation-select d-none\">
                            <option>Célibataire</option>
                            <option>Marié(e)</option>
                            <option>Pacsé(e)</option>
                            <option>Divorcé(e)</option>
                            <option>Veuf / Veuve</option>
                            <option>En couple</option>
                            <option>Autre</option>
                        </select>
                    </td>

                    <td>
                        <span class=\"editable\" data-field=\"nbrePersonneCharge\">";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "nbrePersonneCharge", [], "any", false, false, false, 210), "html", null, true);
            yield "</span>
                        <input type=\"text\" class=\"editable-input d-none\" value=\"";
            // line 211
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "nbrePersonneCharge", [], "any", false, false, false, 211), "html", null, true);
            yield "\">
                    </td>

                    <td>
                        <span class=\"editable\" data-field=\"RevenuFiscalReference\">";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "RevenuFiscalReference", [], "any", false, false, false, 215), "html", null, true);
            yield "€</span>
                        <input type=\"text\" class=\"editable-input d-none\" value=\"";
            // line 216
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "RevenuFiscalReference", [], "any", false, false, false, 216), "html", null, true);
            yield "\">
                    </td>

                    <td>
                        <span>IMMO </span>
                        <span class=\"editable\" data-field=\"creditEnCours\" data-value=\"";
            // line 221
            (((CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "creditEnCours", [], "any", true, true, false, 221) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "creditEnCours", [], "any", false, false, false, 221)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "creditEnCours", [], "any", false, false, false, 221), "html", null, true)) : (yield ""));
            yield "\">
        ";
            // line 222
            (((CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "creditEnCours", [], "any", true, true, false, 222) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "creditEnCours", [], "any", false, false, false, 222)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "creditEnCours", [], "any", false, false, false, 222), "html", null, true)) : (yield "0"));
            yield "
    </span>
                        <span>€</span>
                        <input type=\"text\" class=\"editable-input d-none\" value=\"";
            // line 225
            (((CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "creditEnCours", [], "any", true, true, false, 225) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "creditEnCours", [], "any", false, false, false, 225)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "creditEnCours", [], "any", false, false, false, 225), "html", null, true)) : (yield ""));
            yield "\">
                    </td>




                    <td>
                        <span class=\"situation-pro\" data-field=\"situationPro\">";
            // line 232
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "situationPro", [], "any", false, false, false, 232), "html", null, true);
            yield "</span>
                        <select class=\"situation-pro-select d-none\">
                            <option value=\"\">-- Sélectionner --</option>
                            <option>CDI 1 et CDD 1</option>
                            <option>CDI les 2</option>
                            <option>CDD 1 et Chef d'entreprise 1</option>
                            <option>CDD les 2</option>
                            <option>Chef d'entreprise 1 et CDI 1</option>
                            <option>Chef d'entreprise les 2</option>
                            <option>CDI 1 et Sans emploi 1</option>
                            <option>CDD 1 et Sans emploi 1</option>
                            <option>Chef d'entreprise 1 et Sans emploi 1</option>
                            <option>Sans emploi les 2</option>
                            <option>CDI 1 et Retraité 1</option>
                            <option>CDD 1 et Retraité 1</option>
                            <option>Chef d'entreprise 1 et Retraité 1</option>
                            <option>Sans emploi 1 et Retraité 1</option>
                            <option>Retraité les 2</option>
                            <option>CDI 1 et Étudiant 1</option>
                            <option>CDD 1 et Étudiant 1</option>
                            <option>Chef d'entreprise 1 et Étudiant 1</option>
                            <option>Sans emploi 1 et Étudiant 1</option>
                            <option>Étudiant les 2</option>
                            <option>Autre</option>
                        </select>
                    </td>

                    <td>
                        <span class=\"editable editable-commentaire\" data-field=\"commentaire\">";
            // line 260
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "commentaire", [], "any", false, false, false, 260)), ["&euro;" => "€", "&eacute;" => "é"]), "html", null, true);
            yield "</span>
                        <textarea class=\"editable-textarea d-none\">";
            // line 261
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "commentaire", [], "any", false, false, false, 261)), ["&euro;" => "€", "&eacute;" => "é"]), "html", null, true);
            yield "</textarea>
                    </td>

                    <td>Télépro</td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 267
            yield "                <tr>
                    <td colspan=\"30\">Aucun planning trouvé</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 271
        yield "            </tbody>
        </table>
    </div>

    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCjM-UuAFh4AsGzHLlsRTAf1oMTzh1yAfI&libraries=places\"></script>
    <script>

        // Double-clic pour éditer le commentaire
        document.querySelectorAll('.editable-commentaire').forEach(span => {
            span.addEventListener('dblclick', function () {
                const textarea = this.nextElementSibling;
                textarea.value = this.textContent.trim();
                textarea.classList.remove('d-none');
                this.classList.add('d-none');
                textarea.focus();
            });
        });

        // Sauvegarde du commentaire
        document.querySelectorAll('.editable-textarea').forEach(textarea => {
            textarea.addEventListener('keydown', function (e) {
                if (e.key === 'Enter' && !e.shiftKey) {
                    e.preventDefault();
                    this.blur(); // Enregistre au blur
                }
            });

            textarea.addEventListener('blur', function () {
                const row = this.closest('tr');
                const leadId = row.dataset.leadId;
                const newValue = this.value.trim();
                const span = this.previousElementSibling;
                const field = span.dataset.field;
                const csrfToken = document.querySelector('input[name=\"_token\"]')?.value;

                if (!newValue) {
                    alert(\"Le commentaire ne peut pas être vide.\");
                    return;
                }

                fetch(`/planning/\${leadId}/edit-inline-planning`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        field: field,
                        value: newValue
                    })
                }).then(response => {
                    if (response.ok) {
                        span.textContent = newValue;
                        span.classList.remove('d-none');
                        this.classList.add('d-none');
                    } else {
                        alert(\"Erreur lors de la mise à jour du commentaire.\");
                    }
                });
            });
        });





        // Double-clic pour éditer la situation pro
        document.querySelectorAll('.situation-pro').forEach(span => {
            span.addEventListener('dblclick', function () {
                const select = this.nextElementSibling;
                select.value = this.textContent.trim();
                select.classList.remove('d-none');
                this.classList.add('d-none');
                select.focus();
            });
        });

        // Sauvegarde de la situation pro
        document.querySelectorAll('.situation-pro-select').forEach(select => {
            select.addEventListener('change', function () {
                const row = this.closest('tr');
                const leadId = row.dataset.leadId;
                const newValue = this.value;
                const span = this.previousElementSibling;
                const csrfToken = document.querySelector('input[name=\"_token\"]')?.value;

                if (!newValue) {
                    alert(\"Veuillez choisir une situation professionnelle.\");
                    return;
                }

                fetch(`/planning/\${leadId}/edit-inline-planning`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        field: 'situationPro',
                        value: newValue
                    })
                }).then(response => {
                    if (response.ok) {
                        span.textContent = newValue;
                        span.classList.remove('d-none');
                        this.classList.add('d-none');
                    } else {
                        alert(\"Erreur lors de la mise à jour de la situation pro.\");
                    }
                });
            });
        });


        document.querySelectorAll('.editable').forEach(span => {
            span.addEventListener('dblclick', function () {
                const cell = span.closest('td');
                const input = cell.querySelector('.editable-input');

                if (!input) return;

                // valeur brute depuis data-value si présente, sinon textContent
                const rawValue = span.dataset.value ?? span.textContent.trim();

                input.value = rawValue;
                input.classList.remove('d-none');
                span.classList.add('d-none');
                input.focus();
            });
        });






        document.querySelectorAll('.editable').forEach(span => {
            span.addEventListener('dblclick', function () {
                const input = this.nextElementSibling;
                input.value = this.textContent.trim();
                input.classList.remove('d-none');
                this.classList.add('d-none');
                input.focus();
            });
        });



        // Double-clic pour éditer la situation familiale
        document.querySelectorAll('.situation').forEach(span => {
            span.addEventListener('dblclick', function () {
                const select = this.nextElementSibling;
                select.value = this.textContent.trim(); // met la valeur actuelle
                select.classList.remove('d-none');
                this.classList.add('d-none');
                select.focus();
            });
        });

        // Sauvegarde de la situation familiale
        document.querySelectorAll('.situation-select').forEach(select => {
            select.addEventListener('change', function () {
                const row = this.closest('tr');
                const leadId = row.dataset.leadId;
                const newValue = this.value;
                const span = this.previousElementSibling;
                const csrfToken = document.querySelector('input[name=\"_token\"]')?.value;

                if (!newValue) {
                    alert(\"Veuillez choisir une situation.\");
                    return;
                }

                fetch(`/planning/\${leadId}/edit-inline-planning`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        field: 'situationFamiliale',
                        value: newValue
                    })
                }).then(response => {
                    if (response.ok) {
                        span.textContent = newValue;
                        span.classList.remove('d-none');
                        this.classList.add('d-none');
                    } else {
                        alert(\"Erreur lors de la mise à jour de la situation.\");
                    }
                });
            });
        });







        // Double-clic pour afficher le select du TypeChauffage
        document.querySelectorAll('.type-chauffage').forEach(span => {
            span.addEventListener('dblclick', function () {
                const select = this.nextElementSibling;
                select.classList.remove('d-none');
                this.classList.add('d-none');
                select.focus();
            });
        });

        // Sauvegarde du TypeChauffage à la sélection
        document.querySelectorAll('.type-chauffage-select').forEach(select => {
            select.addEventListener('change', function () {
                const newValue = this.value;
                const row = this.closest('tr');
                const leadId = row.dataset.leadId;
                const span = this.previousElementSibling;
                const csrfToken = document.querySelector('input[name=\"_token\"]')?.value;

                if (!newValue) {
                    alert(\"Veuillez choisir un type de chauffage.\");
                    return;
                }

                fetch(`/planning/\${leadId}/edit-inline-planning`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        field: 'TypeChauffage',
                        value: newValue
                    })
                }).then(response => {
                    if (response.ok) {
                        span.textContent = newValue;
                        span.classList.remove('d-none');
                        this.classList.add('d-none');
                    } else {
                        alert(\"Erreur lors de la mise à jour du type de chauffage.\");
                    }
                });
            });
        });



        function initAddressAutocomplete(inputElement) {
            if (inputElement && typeof google !== 'undefined') {
                const autocomplete = new google.maps.places.Autocomplete(inputElement, {
                    componentRestrictions: { country: 'fr' }
                });
            }
        }

        // Initialisation après chargement
        document.querySelectorAll('.editable-address-input').forEach(initAddressAutocomplete);




        document.querySelectorAll('.editable').forEach(span => {
            span.addEventListener('dblclick', function () {
                const input = this.nextElementSibling;
                input.classList.remove('d-none');
                this.classList.add('d-none');
                input.focus();
            });
        });

        document.querySelectorAll('.editable-input').forEach(input => {
            input.addEventListener('keydown', function (e) {
                if (e.key === 'Enter') this.blur();
            });


            input.addEventListener('focusout', function () {
                const row = this.closest('tr');
                const cell = this.closest('td');
                const leadId = row.dataset.leadId;
                const newValue = this.value.trim();
                const span = cell.querySelector('.editable');
                const field = span.dataset.field;
                const csrfToken = document.querySelector('input[name=\"_token\"]')?.value;

                if (!newValue) {
                    alert(\"Le champ ne peut pas être vide.\");
                    return;
                }

                fetch(`/planning/\${leadId}/edit-inline-planning`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({ field, value: newValue })
                }).then(response => {
                    if (response.ok) {
                        span.textContent = newValue;
                        span.dataset.value = newValue;
                        span.classList.remove('d-none');
                        this.classList.add('d-none');
                    }
                });
            });
        });






            document.querySelectorAll('.editable-date').forEach(span => {
            span.addEventListener('dblclick', function () {
                const input = this.nextElementSibling;
                this.classList.add('d-none');
                input.classList.remove('d-none');
                input.focus();
            });
        });

        document.querySelectorAll('.editable-date-input').forEach(input => {
            input.addEventListener('keydown', function (e) {
                if (e.key === 'Enter') this.blur();
            });

            input.addEventListener('blur', function () {
                const row = this.closest('tr');
                const leadId = row.dataset.leadId;
                const span = this.previousElementSibling;
                const field = span.dataset.field;
                const newValue = this.value;

                if (!newValue || !/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}\$/.test(newValue)) {
                    alert(\"Veuillez entrer une date valide.\");
                    return;
                }

                const dateObj = new Date(newValue);
                const formattedValue = dateObj.getFullYear() + '-' +
                    String(dateObj.getMonth() + 1).padStart(2, '0') + '-' +
                    String(dateObj.getDate()).padStart(2, '0') + ' ' +
                    String(dateObj.getHours()).padStart(2, '0') + ':' +
                    String(dateObj.getMinutes()).padStart(2, '0') + ':00';

                fetch(`/planning/\${leadId}/edit-inline-planning`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        field: field,
                        value: formattedValue
                    })
                }).then(response => {
                    if (response.ok) {
                        span.textContent = new Intl.DateTimeFormat('fr-FR', {
                            day: '2-digit',
                            month: '2-digit',
                            year: 'numeric',
                            hour: '2-digit',
                            minute: '2-digit'
                        }).format(dateObj).replace(',', ' à');
                        span.classList.remove('d-none');
                        this.classList.add('d-none');
                    } else {
                        alert(\"Erreur lors de l'enregistrement de la date.\");
                    }
                });
            });
        });

        // // Double-clic pour activer l'édition de la date
        // document.querySelectorAll('.editable-date').forEach(span => {
        //     span.addEventListener('dblclick', function () {
        //         const input = this.nextElementSibling;
        //         input.classList.remove('d-none');
        //         this.classList.add('d-none');
        //         input.focus();
        //     });
        // });
        //
        // // Enregistrer la date (blur ou Enter)
        // document.querySelectorAll('.editable-date-input').forEach(input => {
        //     input.addEventListener('keydown', function (e) {
        //         if (e.key === 'Enter') this.blur();
        //     });
        //
        //     input.addEventListener('blur', function () {
        //         const row = this.closest('tr');
        //         const leadId = row.dataset.leadId;
        //         const span = this.previousElementSibling;
        //         const field = span.dataset.field;
        //         const newValue = this.value;
        //
        //         if (!newValue || !/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}\$/.test(newValue)) {
        //             alert(\"Veuillez entrer une date valide.\");
        //             return;
        //         }
        //
        //         const date = new Date(newValue);
        //         const formattedValue = date.getFullYear() + '-' +
        //             String(date.getMonth() + 1).padStart(2, '0') + '-' +
        //             String(date.getDate()).padStart(2, '0') + ' ' +
        //             String(date.getHours()).padStart(2, '0') + ':' +
        //             String(date.getMinutes()).padStart(2, '0') + ':00';
        //
        //         const csrfToken = document.querySelector('input[name=\"_token\"]')?.value;
        //
        //         fetch(`/planning/\${leadId}/edit-inline-planning`, {
        //             method: 'POST',
        //             headers: {
        //                 'Content-Type': 'application/json',
        //                 'X-CSRF-TOKEN': csrfToken
        //             },
        //             body: JSON.stringify({
        //                 field: field,
        //                 value: formattedValue
        //             })
        //         }).then(response => {
        //             if (response.ok) {
        //                 // Mise à jour de l'affichage utilisateur
        //                 span.textContent = new Intl.DateTimeFormat('fr-FR', {
        //                     day: '2-digit',
        //                     month: '2-digit',
        //                     year: '2-digit',
        //                     hour: '2-digit',
        //                     minute: '2-digit'
        //                 }).format(date).replace(',', ' à');
        //                 span.classList.remove('d-none');
        //                 this.classList.add('d-none');
        //             } else {
        //                 alert(\"Erreur lors de l'enregistrement de la date.\");
        //             }
        //         });
        //     });
        // });

//        // Double-clic pour modifier la date
//        document.querySelectorAll('.editable-date').forEach(span => {
//            span.addEventListener('dblclick', function () {
//                const input = this.nextElementSibling;
//                this.classList.add('d-none');
//                input.classList.remove('d-none');
//                input.focus();
//            });
//        });
//
//        // Sauvegarde de la date (focusout ou Entrée)
//        document.querySelectorAll('.editable-date-input').forEach(input => {
//            input.addEventListener('keydown', function (e) {
//                if (e.key === 'Enter') this.blur();
//            });
//
//            input.addEventListener('blur', function () {
//                const row = this.closest('tr');
//                const leadId = row.dataset.leadId;
//                const span = this.previousElementSibling;
//                const field = span.dataset.field;
//                const newValue = this.value;
//
//                if (!newValue) {
//                    alert(\"Veuillez entrer une date.\");
//                    return;
//                }
//
//                const formattedValue = newValue.replace('T', ' ') + ':00'; // Y-m-d H:i:s
//                const csrfToken = document.querySelector('input[name=\"_token\"]')?.value;
//
//                fetch(`/planning/\${leadId}/edit-inline-planning`, {
//                    method: 'POST',
//                    headers: {
//                        'Content-Type': 'application/json',
//                        'X-CSRF-TOKEN': csrfToken
//                    },
//                    body: JSON.stringify({
//                        field: field,
//                        value: formattedValue
//                    })
//                }).then(response => {
//                    if (response.ok) {
//                        const dateObj = new Date(newValue);
//                        const frDate = dateObj.toLocaleDateString('fr-FR');
//                        const frTime = dateObj.toLocaleTimeString('fr-FR', {
//                            hour: '2-digit',
//                            minute: '2-digit'
//                        });
//
//                        span.textContent = `\${frDate} à \${frTime}`;
//                        this.classList.add('d-none');
//                        span.classList.remove('d-none');
//                    } else {
//                        alert(\"Erreur lors de l'enregistrement de la date.\");
//                    }
//                });
//            });
//        });


        // Double-clic pour éditer un champ texte (comme nomComplet)
        document.querySelectorAll('.editable').forEach(span => {
            span.addEventListener('dblclick', function () {
                const input = this.nextElementSibling;
                input.classList.remove('d-none');
                this.classList.add('d-none');
                input.focus();
            });
        });

        // Enregistrement sur perte de focus ou touche Entrée
        document.querySelectorAll('.editable-input').forEach(input => {
            input.addEventListener('keydown', function (e) {
                if (e.key === 'Enter') {
                    this.blur(); // déclenche le focusout
                }
            });

            input.addEventListener('focusout', function () {
                const row = this.closest('tr');
                const leadId = row.dataset.leadId;
                const newValue = this.value.trim();
                const span = this.previousElementSibling;
                const field = span.dataset.field;
                const csrfToken = document.querySelector('input[name=\"_token\"]')?.value;

                if (!newValue) {
                    alert(\"Le champ ne peut pas être vide.\");
                    return;
                }

                fetch(`/planning/\${leadId}/edit-inline-planning`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        field: field,
                        value: newValue
                    })
                }).then(response => {
                    if (response.ok) {
                        span.textContent = newValue;
                        span.classList.remove('d-none');
                        this.classList.add('d-none');
                    }
                    // } else {
                    //     alert(\"Erreur lors de la mise à jour du champ.\");
                    // }
                });
            });
        });



        // Double-clic pour activer le select
            document.querySelectorAll('.status').forEach(span => {
            span.addEventListener('dblclick', function () {
                const select = this.nextElementSibling;
                select.classList.remove('d-none');
                select.focus();
                this.classList.add('d-none');
            });
        });

            // Gestion du select \"autre\"
            document.querySelectorAll('.status-select').forEach(select => {
            select.addEventListener('change', function () {
                const row = this.closest('tr');
                const span = this.previousElementSibling;
                const input = row.querySelector('.autre-comment');
                const value = this.value;

                if (value === 'autre') {
                    input.classList.remove('d-none');
                    input.focus();
                } else {
                    const leadId = row.dataset.leadId;
                    const csrfToken = document.querySelector('input[name=\"_token\"]')?.value;

                    // Si autre que \"autre\", on envoie directement
                    fetch(`/planning/\${leadId}/edit-inline-planning`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken
                        },
                        body: JSON.stringify({
                            field: 'status',
                            value: value
                        })
                    }).then(response => {
                        if (response.ok) {
                            span.textContent = this.options[this.selectedIndex].textContent;
                            span.classList.remove('d-none');
                            this.classList.add('d-none');
                        } else {
                            alert('Erreur lors de la mise à jour du statut.');
                        }
                    });
                }
            });
        });

            // Gestion de la saisie \"autre\" ➜ dans statusRDV
            document.querySelectorAll('.autre-comment').forEach(input => {
            input.addEventListener('keydown', function (e) {
                if (e.key === 'Enter') {
                    const row = this.closest('tr');
                    const leadId = row.dataset.leadId;
                    const valeurPerso = this.value.trim();
                    const csrfToken = document.querySelector('input[name=\"_token\"]')?.value;
                    const span = row.querySelector('.status');
                    const select = row.querySelector('.status-select');

                    if (!valeurPerso) {
                        alert(\"Veuillez entrer une valeur.\");
                        return;
                    }

                    fetch(`/planning/\${leadId}/edit-inline-planning`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken
                        },
                        body: JSON.stringify({
                            field: 'status',
                            value: valeurPerso
                        })
                    }).then(response => {
                        if (response.ok) {
                            span.textContent = valeurPerso;
                            span.classList.remove('d-none');
                            select.classList.add('d-none');
                            this.classList.add('d-none');
                            this.value = ''; // reset input
                        } else {
                            alert(\"Erreur lors de l'enregistrement du statut personnalisé.\");
                        }
                    });
                }
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
        return "planning/planning1.html.twig";
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
        return array (  488 => 271,  479 => 267,  468 => 261,  464 => 260,  433 => 232,  423 => 225,  417 => 222,  413 => 221,  405 => 216,  401 => 215,  394 => 211,  390 => 210,  374 => 197,  367 => 193,  363 => 192,  355 => 187,  351 => 186,  344 => 182,  340 => 181,  313 => 157,  307 => 154,  303 => 153,  297 => 150,  293 => 149,  287 => 146,  283 => 145,  275 => 140,  268 => 136,  261 => 131,  241 => 98,  234 => 93,  223 => 90,  217 => 89,  212 => 88,  208 => 87,  201 => 83,  195 => 80,  192 => 79,  189 => 78,  187 => 77,  178 => 73,  173 => 70,  171 => 69,  168 => 68,  165 => 67,  160 => 66,  157 => 65,  154 => 64,  152 => 63,  121 => 35,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Planning index{% endblock %}

{% block body %}
    <style>
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            overflow-x: visible;
        }

        .no-limit-container {
            width: 100%;
            padding: 0 15px;
        }

        table {
            width: 100%;
            table-layout: auto;
            border-collapse: collapse;
            white-space: nowrap;
        }

        th, td {
            white-space: nowrap;
        }
    </style>

    <br>
    <h1 style=\"text-align: center;\">Planning index</h1>

    <div class=\"d-flex justify-content-between mb-3\">
        <a href=\"{{ path('app_planning_new') }}\" class=\"btn btn-primary\" style=\"margin-left: 15px;\">Créer un nouveau planning</a>
    </div>

    <div class=\"no-limit-container\">
        <table class=\"table table-hover\">
            <thead>
            <tr>
                <th>Technicien</th>
                <th>Statut de RDV</th>
                <th>Date</th>
                <th>Nom et prénom</th>
                <th>Téléphone</th>
                <th>Adresse</th>
                <th>Chauffage</th>
                <th>Conso</th>
                <th>Age MR et MME</th>
                <th>Superficie</th>
                <th>Situation</th>
                <th>Nbr pers. à charge</th>
                <th>Revenu fiscal</th>
                <th>Crédit en cours</th>
                <th>Situation pro</th>
                <th>Commentaire</th>
                <th>Télépro</th>
                <th colspan=\"30\"></th>
            </tr>
            </thead>
            <tbody>
            {% set sortedPlannings = plannings|sort((a, b) => a.date <=> b.date) %}
            {% set currentWeek = '' %}

            {% for planning in sortedPlannings %}
                {% set week = planning.date|date('o-W') %}

                {% if week != currentWeek %}
                    <tr><td colspan=\"30\" style=\"height: 40px;\"></td></tr>
                    <tr>
                        <td colspan=\"30\" style=\"background-color: #f0f0f0; font-weight: bold;\">
                            📅 Semaine du {{ planning.date|date('d/m/Y') }} (Semaine {{ planning.date|date('W') }})
                        </td>
                    </tr>
                    <tr><td colspan=\"30\" style=\"height: 40px;\"></td></tr>
                    {% set currentWeek = week %}
                {% endif %}

                <tr data-lead-id=\"{{ planning.id }}\">
                    <td>
                        <span class=\"telepro\" data-field=\"telepro\">
                            {{ planning.idLead.technicien ? planning.idLead.technicien.prenom ~ ' , ' ~ planning.idLead.technicien.nom : 'Choisir à qui assigner la lead' }}
                        </span>
                        <select class=\"telepro-select d-none\">
                            <option value=\"\">Choisir à qui assigner la lead</option>
                            {% for tech in technicien %}
                                <option value=\"{{ tech.id }}\"
                                        {% if planning.idLead.technicien and planning.idLead.technicien.id == tech.id %}selected{% endif %}>
                                    {{ tech.prenom }}, {{ tech.nom }}
                                </option>
                            {% endfor %}
                        </select>
                    </td>

                    <td>
                        <span class=\"status\" data-field=\"status\">
                            {{ planning.statusRDV|default('N/A') }}
                        </span>
                        <select class=\"status-select d-none\">
                            <option value=\"\">Status</option>
                            <option value=\"verifier si fenêtre fini\">vérifier si fenêtre fini</option>
                            <option value=\"verifier si homme présent\">vérifier si homme présent</option>
                            <option value=\"verifier si femme présent\">vérifier si femme présent</option>
                            <option value=\"replanifier\">replanifier</option>
                            <option value=\"a deja un devis\">a déjà un devis</option>
                            <option value=\"verifier si acte definitif\">vérifier si acte définitif</option>
                            <option value=\"verifier si proprietaire\">vérifier si propriétaire</option>
                            <option value=\"petite surface\">petite surface</option>
                            <option value=\"autre\">autre</option>
                        </select>
                        <input type=\"text\" class=\"autre-comment d-none\" placeholder=\"Précisez si 'autre' sélectionné\">
                    </td>

{#                    <td>#}
{#                         <span class=\"editable-date\" data-field=\"date\">#}
{#                            {{ planning.date ? planning.date|date('d/m/y \\\\à H\\\\hi') : '' }}#}
{#                        </span>#}
{#                        <input type=\"datetime-local\"#}
{#                               class=\"editable-date-input d-none\"#}
{#                               value=\"{{ planning.date ? planning.date|date('Y-m-d\\\\TH:i') : '' }}\">#}
{#                    </td>#}
{#                    <td>#}
{#                    <span class=\"editable-date\" data-field=\"date\">#}
{#                         {{ planning.date ? planning.date|date('d/m/y \\\\à H\\\\hi') : '' }}#}
{#                    </span>#}
{#                        <input type=\"datetime-local\"#}
{#                               class=\"editable-date-input d-none\"#}
{#                               value=\"{{ planning.date ? planning.date|date('Y-m-d\\\\TH:i') : '' }}\">#}
{#                    </td>#}



                    <td>
    <span class=\"editable-date\" data-field=\"date\">
        {{ planning.date ? planning.date|date('d/m/Y à H\\\\hi') : '' }}
    </span>
                        <input type=\"datetime-local\"
                               class=\"editable-date-input d-none\"
                               value=\"{{ planning.date ? planning.date|date('Y-m-d\\\\TH:i') : '' }}\">
                    </td>

                    <td>

                        <span class=\"editable\" data-field=\"nomComplet\">{{ planning.idLead.nomComplet|default('N/A') }}</span>
                        <input type=\"text\" class=\"editable-input d-none\" value=\"{{ planning.idLead.nomComplet|default('') }}\">
                    </td>
                    <td>
                        <span class=\"editable\" data-field=\"telephone\">{{ planning.telephone }}</span>
                        <input type=\"text\" class=\"editable-input d-none\" value=\"{{ planning.telephone }}\">
                    </td>
                    <td>
                        <span class=\"editable\" data-field=\"adresse\">{{ planning.adresse }}</span>
                        <input type=\"text\" style=\"width: 450px;\" class=\"editable-input editable-address-input d-none autocomplete-address\" value=\"{{ planning.adresse }}\">
                    </td>
                    <td>
                        <span class=\"type-chauffage\" data-field=\"TypeChauffage\">{{ planning.TypeChauffage }}</span>
                        <select class=\"type-chauffage-select d-none\">
                            <option>Bois</option>
                            <option>Bois + Elec</option>
                            <option>Bois + Gaz</option>
                            <option>Charbon</option>
                            <option>Chauffage</option>
                            <option>Elec</option>
                            <option>Fioul</option>
                            <option>Fioul + Bois</option>
                            <option>Fioul + Bois + Elec</option>
                            <option>Fioul + Elec</option>
                            <option>Gaz</option>
                            <option>Gaz + Bois</option>
                            <option>Gaz + Elec</option>
                            <option>Gaz + Pac</option>
                            <option>Pac</option>
                            <option>Pac +Bois</option>
                            <option>Peler</option>
                            <option>combustible</option>
                        </select>
                    </td>

                    <td>
                        <span class=\"editable\" data-field=\"consommationAnnuelOuMensuelle\">{{ planning.consommationAnnuelOuMensuelle }}</span>
                        <input type=\"text\" class=\"editable-input d-none\" value=\"{{ planning.consommationAnnuelOuMensuelle }}\">
                    </td>

                    <td>
                        <span class=\"editable\" data-field=\"ageMRMME\">{{ planning.ageMRMME }}</span>
                        <input type=\"text\" class=\"editable-input d-none\" value=\"{{ planning.ageMRMME }}\">
                    </td>


                    <td>
                        <span class=\"editable\" data-field=\"superficieMaison\">{{ planning.superficieMaison }}M2</span>
                        <input type=\"text\" class=\"editable-input d-none\" value=\"{{ planning.superficieMaison }}\">
                    </td>

                    <td>
                        <span class=\"situation\" data-field=\"situationFamiliale\">{{ planning.situationFamiliale }}</span>
                        <select class=\"situation-select d-none\">
                            <option>Célibataire</option>
                            <option>Marié(e)</option>
                            <option>Pacsé(e)</option>
                            <option>Divorcé(e)</option>
                            <option>Veuf / Veuve</option>
                            <option>En couple</option>
                            <option>Autre</option>
                        </select>
                    </td>

                    <td>
                        <span class=\"editable\" data-field=\"nbrePersonneCharge\">{{ planning.nbrePersonneCharge }}</span>
                        <input type=\"text\" class=\"editable-input d-none\" value=\"{{ planning.nbrePersonneCharge }}\">
                    </td>

                    <td>
                        <span class=\"editable\" data-field=\"RevenuFiscalReference\">{{ planning.RevenuFiscalReference }}€</span>
                        <input type=\"text\" class=\"editable-input d-none\" value=\"{{ planning.RevenuFiscalReference }}\">
                    </td>

                    <td>
                        <span>IMMO </span>
                        <span class=\"editable\" data-field=\"creditEnCours\" data-value=\"{{ planning.creditEnCours ?? '' }}\">
        {{ planning.creditEnCours ?? '0' }}
    </span>
                        <span>€</span>
                        <input type=\"text\" class=\"editable-input d-none\" value=\"{{ planning.creditEnCours ?? '' }}\">
                    </td>




                    <td>
                        <span class=\"situation-pro\" data-field=\"situationPro\">{{ planning.situationPro }}</span>
                        <select class=\"situation-pro-select d-none\">
                            <option value=\"\">-- Sélectionner --</option>
                            <option>CDI 1 et CDD 1</option>
                            <option>CDI les 2</option>
                            <option>CDD 1 et Chef d'entreprise 1</option>
                            <option>CDD les 2</option>
                            <option>Chef d'entreprise 1 et CDI 1</option>
                            <option>Chef d'entreprise les 2</option>
                            <option>CDI 1 et Sans emploi 1</option>
                            <option>CDD 1 et Sans emploi 1</option>
                            <option>Chef d'entreprise 1 et Sans emploi 1</option>
                            <option>Sans emploi les 2</option>
                            <option>CDI 1 et Retraité 1</option>
                            <option>CDD 1 et Retraité 1</option>
                            <option>Chef d'entreprise 1 et Retraité 1</option>
                            <option>Sans emploi 1 et Retraité 1</option>
                            <option>Retraité les 2</option>
                            <option>CDI 1 et Étudiant 1</option>
                            <option>CDD 1 et Étudiant 1</option>
                            <option>Chef d'entreprise 1 et Étudiant 1</option>
                            <option>Sans emploi 1 et Étudiant 1</option>
                            <option>Étudiant les 2</option>
                            <option>Autre</option>
                        </select>
                    </td>

                    <td>
                        <span class=\"editable editable-commentaire\" data-field=\"commentaire\">{{ planning.commentaire|striptags|replace({'&euro;': '€', '&eacute;': 'é'}) }}</span>
                        <textarea class=\"editable-textarea d-none\">{{ planning.commentaire|striptags|replace({'&euro;': '€', '&eacute;': 'é'}) }}</textarea>
                    </td>

                    <td>Télépro</td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"30\">Aucun planning trouvé</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>

    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCjM-UuAFh4AsGzHLlsRTAf1oMTzh1yAfI&libraries=places\"></script>
    <script>

        // Double-clic pour éditer le commentaire
        document.querySelectorAll('.editable-commentaire').forEach(span => {
            span.addEventListener('dblclick', function () {
                const textarea = this.nextElementSibling;
                textarea.value = this.textContent.trim();
                textarea.classList.remove('d-none');
                this.classList.add('d-none');
                textarea.focus();
            });
        });

        // Sauvegarde du commentaire
        document.querySelectorAll('.editable-textarea').forEach(textarea => {
            textarea.addEventListener('keydown', function (e) {
                if (e.key === 'Enter' && !e.shiftKey) {
                    e.preventDefault();
                    this.blur(); // Enregistre au blur
                }
            });

            textarea.addEventListener('blur', function () {
                const row = this.closest('tr');
                const leadId = row.dataset.leadId;
                const newValue = this.value.trim();
                const span = this.previousElementSibling;
                const field = span.dataset.field;
                const csrfToken = document.querySelector('input[name=\"_token\"]')?.value;

                if (!newValue) {
                    alert(\"Le commentaire ne peut pas être vide.\");
                    return;
                }

                fetch(`/planning/\${leadId}/edit-inline-planning`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        field: field,
                        value: newValue
                    })
                }).then(response => {
                    if (response.ok) {
                        span.textContent = newValue;
                        span.classList.remove('d-none');
                        this.classList.add('d-none');
                    } else {
                        alert(\"Erreur lors de la mise à jour du commentaire.\");
                    }
                });
            });
        });





        // Double-clic pour éditer la situation pro
        document.querySelectorAll('.situation-pro').forEach(span => {
            span.addEventListener('dblclick', function () {
                const select = this.nextElementSibling;
                select.value = this.textContent.trim();
                select.classList.remove('d-none');
                this.classList.add('d-none');
                select.focus();
            });
        });

        // Sauvegarde de la situation pro
        document.querySelectorAll('.situation-pro-select').forEach(select => {
            select.addEventListener('change', function () {
                const row = this.closest('tr');
                const leadId = row.dataset.leadId;
                const newValue = this.value;
                const span = this.previousElementSibling;
                const csrfToken = document.querySelector('input[name=\"_token\"]')?.value;

                if (!newValue) {
                    alert(\"Veuillez choisir une situation professionnelle.\");
                    return;
                }

                fetch(`/planning/\${leadId}/edit-inline-planning`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        field: 'situationPro',
                        value: newValue
                    })
                }).then(response => {
                    if (response.ok) {
                        span.textContent = newValue;
                        span.classList.remove('d-none');
                        this.classList.add('d-none');
                    } else {
                        alert(\"Erreur lors de la mise à jour de la situation pro.\");
                    }
                });
            });
        });


        document.querySelectorAll('.editable').forEach(span => {
            span.addEventListener('dblclick', function () {
                const cell = span.closest('td');
                const input = cell.querySelector('.editable-input');

                if (!input) return;

                // valeur brute depuis data-value si présente, sinon textContent
                const rawValue = span.dataset.value ?? span.textContent.trim();

                input.value = rawValue;
                input.classList.remove('d-none');
                span.classList.add('d-none');
                input.focus();
            });
        });






        document.querySelectorAll('.editable').forEach(span => {
            span.addEventListener('dblclick', function () {
                const input = this.nextElementSibling;
                input.value = this.textContent.trim();
                input.classList.remove('d-none');
                this.classList.add('d-none');
                input.focus();
            });
        });



        // Double-clic pour éditer la situation familiale
        document.querySelectorAll('.situation').forEach(span => {
            span.addEventListener('dblclick', function () {
                const select = this.nextElementSibling;
                select.value = this.textContent.trim(); // met la valeur actuelle
                select.classList.remove('d-none');
                this.classList.add('d-none');
                select.focus();
            });
        });

        // Sauvegarde de la situation familiale
        document.querySelectorAll('.situation-select').forEach(select => {
            select.addEventListener('change', function () {
                const row = this.closest('tr');
                const leadId = row.dataset.leadId;
                const newValue = this.value;
                const span = this.previousElementSibling;
                const csrfToken = document.querySelector('input[name=\"_token\"]')?.value;

                if (!newValue) {
                    alert(\"Veuillez choisir une situation.\");
                    return;
                }

                fetch(`/planning/\${leadId}/edit-inline-planning`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        field: 'situationFamiliale',
                        value: newValue
                    })
                }).then(response => {
                    if (response.ok) {
                        span.textContent = newValue;
                        span.classList.remove('d-none');
                        this.classList.add('d-none');
                    } else {
                        alert(\"Erreur lors de la mise à jour de la situation.\");
                    }
                });
            });
        });







        // Double-clic pour afficher le select du TypeChauffage
        document.querySelectorAll('.type-chauffage').forEach(span => {
            span.addEventListener('dblclick', function () {
                const select = this.nextElementSibling;
                select.classList.remove('d-none');
                this.classList.add('d-none');
                select.focus();
            });
        });

        // Sauvegarde du TypeChauffage à la sélection
        document.querySelectorAll('.type-chauffage-select').forEach(select => {
            select.addEventListener('change', function () {
                const newValue = this.value;
                const row = this.closest('tr');
                const leadId = row.dataset.leadId;
                const span = this.previousElementSibling;
                const csrfToken = document.querySelector('input[name=\"_token\"]')?.value;

                if (!newValue) {
                    alert(\"Veuillez choisir un type de chauffage.\");
                    return;
                }

                fetch(`/planning/\${leadId}/edit-inline-planning`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        field: 'TypeChauffage',
                        value: newValue
                    })
                }).then(response => {
                    if (response.ok) {
                        span.textContent = newValue;
                        span.classList.remove('d-none');
                        this.classList.add('d-none');
                    } else {
                        alert(\"Erreur lors de la mise à jour du type de chauffage.\");
                    }
                });
            });
        });



        function initAddressAutocomplete(inputElement) {
            if (inputElement && typeof google !== 'undefined') {
                const autocomplete = new google.maps.places.Autocomplete(inputElement, {
                    componentRestrictions: { country: 'fr' }
                });
            }
        }

        // Initialisation après chargement
        document.querySelectorAll('.editable-address-input').forEach(initAddressAutocomplete);




        document.querySelectorAll('.editable').forEach(span => {
            span.addEventListener('dblclick', function () {
                const input = this.nextElementSibling;
                input.classList.remove('d-none');
                this.classList.add('d-none');
                input.focus();
            });
        });

        document.querySelectorAll('.editable-input').forEach(input => {
            input.addEventListener('keydown', function (e) {
                if (e.key === 'Enter') this.blur();
            });


            input.addEventListener('focusout', function () {
                const row = this.closest('tr');
                const cell = this.closest('td');
                const leadId = row.dataset.leadId;
                const newValue = this.value.trim();
                const span = cell.querySelector('.editable');
                const field = span.dataset.field;
                const csrfToken = document.querySelector('input[name=\"_token\"]')?.value;

                if (!newValue) {
                    alert(\"Le champ ne peut pas être vide.\");
                    return;
                }

                fetch(`/planning/\${leadId}/edit-inline-planning`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({ field, value: newValue })
                }).then(response => {
                    if (response.ok) {
                        span.textContent = newValue;
                        span.dataset.value = newValue;
                        span.classList.remove('d-none');
                        this.classList.add('d-none');
                    }
                });
            });
        });






            document.querySelectorAll('.editable-date').forEach(span => {
            span.addEventListener('dblclick', function () {
                const input = this.nextElementSibling;
                this.classList.add('d-none');
                input.classList.remove('d-none');
                input.focus();
            });
        });

        document.querySelectorAll('.editable-date-input').forEach(input => {
            input.addEventListener('keydown', function (e) {
                if (e.key === 'Enter') this.blur();
            });

            input.addEventListener('blur', function () {
                const row = this.closest('tr');
                const leadId = row.dataset.leadId;
                const span = this.previousElementSibling;
                const field = span.dataset.field;
                const newValue = this.value;

                if (!newValue || !/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}\$/.test(newValue)) {
                    alert(\"Veuillez entrer une date valide.\");
                    return;
                }

                const dateObj = new Date(newValue);
                const formattedValue = dateObj.getFullYear() + '-' +
                    String(dateObj.getMonth() + 1).padStart(2, '0') + '-' +
                    String(dateObj.getDate()).padStart(2, '0') + ' ' +
                    String(dateObj.getHours()).padStart(2, '0') + ':' +
                    String(dateObj.getMinutes()).padStart(2, '0') + ':00';

                fetch(`/planning/\${leadId}/edit-inline-planning`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        field: field,
                        value: formattedValue
                    })
                }).then(response => {
                    if (response.ok) {
                        span.textContent = new Intl.DateTimeFormat('fr-FR', {
                            day: '2-digit',
                            month: '2-digit',
                            year: 'numeric',
                            hour: '2-digit',
                            minute: '2-digit'
                        }).format(dateObj).replace(',', ' à');
                        span.classList.remove('d-none');
                        this.classList.add('d-none');
                    } else {
                        alert(\"Erreur lors de l'enregistrement de la date.\");
                    }
                });
            });
        });

        // // Double-clic pour activer l'édition de la date
        // document.querySelectorAll('.editable-date').forEach(span => {
        //     span.addEventListener('dblclick', function () {
        //         const input = this.nextElementSibling;
        //         input.classList.remove('d-none');
        //         this.classList.add('d-none');
        //         input.focus();
        //     });
        // });
        //
        // // Enregistrer la date (blur ou Enter)
        // document.querySelectorAll('.editable-date-input').forEach(input => {
        //     input.addEventListener('keydown', function (e) {
        //         if (e.key === 'Enter') this.blur();
        //     });
        //
        //     input.addEventListener('blur', function () {
        //         const row = this.closest('tr');
        //         const leadId = row.dataset.leadId;
        //         const span = this.previousElementSibling;
        //         const field = span.dataset.field;
        //         const newValue = this.value;
        //
        //         if (!newValue || !/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}\$/.test(newValue)) {
        //             alert(\"Veuillez entrer une date valide.\");
        //             return;
        //         }
        //
        //         const date = new Date(newValue);
        //         const formattedValue = date.getFullYear() + '-' +
        //             String(date.getMonth() + 1).padStart(2, '0') + '-' +
        //             String(date.getDate()).padStart(2, '0') + ' ' +
        //             String(date.getHours()).padStart(2, '0') + ':' +
        //             String(date.getMinutes()).padStart(2, '0') + ':00';
        //
        //         const csrfToken = document.querySelector('input[name=\"_token\"]')?.value;
        //
        //         fetch(`/planning/\${leadId}/edit-inline-planning`, {
        //             method: 'POST',
        //             headers: {
        //                 'Content-Type': 'application/json',
        //                 'X-CSRF-TOKEN': csrfToken
        //             },
        //             body: JSON.stringify({
        //                 field: field,
        //                 value: formattedValue
        //             })
        //         }).then(response => {
        //             if (response.ok) {
        //                 // Mise à jour de l'affichage utilisateur
        //                 span.textContent = new Intl.DateTimeFormat('fr-FR', {
        //                     day: '2-digit',
        //                     month: '2-digit',
        //                     year: '2-digit',
        //                     hour: '2-digit',
        //                     minute: '2-digit'
        //                 }).format(date).replace(',', ' à');
        //                 span.classList.remove('d-none');
        //                 this.classList.add('d-none');
        //             } else {
        //                 alert(\"Erreur lors de l'enregistrement de la date.\");
        //             }
        //         });
        //     });
        // });

//        // Double-clic pour modifier la date
//        document.querySelectorAll('.editable-date').forEach(span => {
//            span.addEventListener('dblclick', function () {
//                const input = this.nextElementSibling;
//                this.classList.add('d-none');
//                input.classList.remove('d-none');
//                input.focus();
//            });
//        });
//
//        // Sauvegarde de la date (focusout ou Entrée)
//        document.querySelectorAll('.editable-date-input').forEach(input => {
//            input.addEventListener('keydown', function (e) {
//                if (e.key === 'Enter') this.blur();
//            });
//
//            input.addEventListener('blur', function () {
//                const row = this.closest('tr');
//                const leadId = row.dataset.leadId;
//                const span = this.previousElementSibling;
//                const field = span.dataset.field;
//                const newValue = this.value;
//
//                if (!newValue) {
//                    alert(\"Veuillez entrer une date.\");
//                    return;
//                }
//
//                const formattedValue = newValue.replace('T', ' ') + ':00'; // Y-m-d H:i:s
//                const csrfToken = document.querySelector('input[name=\"_token\"]')?.value;
//
//                fetch(`/planning/\${leadId}/edit-inline-planning`, {
//                    method: 'POST',
//                    headers: {
//                        'Content-Type': 'application/json',
//                        'X-CSRF-TOKEN': csrfToken
//                    },
//                    body: JSON.stringify({
//                        field: field,
//                        value: formattedValue
//                    })
//                }).then(response => {
//                    if (response.ok) {
//                        const dateObj = new Date(newValue);
//                        const frDate = dateObj.toLocaleDateString('fr-FR');
//                        const frTime = dateObj.toLocaleTimeString('fr-FR', {
//                            hour: '2-digit',
//                            minute: '2-digit'
//                        });
//
//                        span.textContent = `\${frDate} à \${frTime}`;
//                        this.classList.add('d-none');
//                        span.classList.remove('d-none');
//                    } else {
//                        alert(\"Erreur lors de l'enregistrement de la date.\");
//                    }
//                });
//            });
//        });


        // Double-clic pour éditer un champ texte (comme nomComplet)
        document.querySelectorAll('.editable').forEach(span => {
            span.addEventListener('dblclick', function () {
                const input = this.nextElementSibling;
                input.classList.remove('d-none');
                this.classList.add('d-none');
                input.focus();
            });
        });

        // Enregistrement sur perte de focus ou touche Entrée
        document.querySelectorAll('.editable-input').forEach(input => {
            input.addEventListener('keydown', function (e) {
                if (e.key === 'Enter') {
                    this.blur(); // déclenche le focusout
                }
            });

            input.addEventListener('focusout', function () {
                const row = this.closest('tr');
                const leadId = row.dataset.leadId;
                const newValue = this.value.trim();
                const span = this.previousElementSibling;
                const field = span.dataset.field;
                const csrfToken = document.querySelector('input[name=\"_token\"]')?.value;

                if (!newValue) {
                    alert(\"Le champ ne peut pas être vide.\");
                    return;
                }

                fetch(`/planning/\${leadId}/edit-inline-planning`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        field: field,
                        value: newValue
                    })
                }).then(response => {
                    if (response.ok) {
                        span.textContent = newValue;
                        span.classList.remove('d-none');
                        this.classList.add('d-none');
                    }
                    // } else {
                    //     alert(\"Erreur lors de la mise à jour du champ.\");
                    // }
                });
            });
        });



        // Double-clic pour activer le select
            document.querySelectorAll('.status').forEach(span => {
            span.addEventListener('dblclick', function () {
                const select = this.nextElementSibling;
                select.classList.remove('d-none');
                select.focus();
                this.classList.add('d-none');
            });
        });

            // Gestion du select \"autre\"
            document.querySelectorAll('.status-select').forEach(select => {
            select.addEventListener('change', function () {
                const row = this.closest('tr');
                const span = this.previousElementSibling;
                const input = row.querySelector('.autre-comment');
                const value = this.value;

                if (value === 'autre') {
                    input.classList.remove('d-none');
                    input.focus();
                } else {
                    const leadId = row.dataset.leadId;
                    const csrfToken = document.querySelector('input[name=\"_token\"]')?.value;

                    // Si autre que \"autre\", on envoie directement
                    fetch(`/planning/\${leadId}/edit-inline-planning`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken
                        },
                        body: JSON.stringify({
                            field: 'status',
                            value: value
                        })
                    }).then(response => {
                        if (response.ok) {
                            span.textContent = this.options[this.selectedIndex].textContent;
                            span.classList.remove('d-none');
                            this.classList.add('d-none');
                        } else {
                            alert('Erreur lors de la mise à jour du statut.');
                        }
                    });
                }
            });
        });

            // Gestion de la saisie \"autre\" ➜ dans statusRDV
            document.querySelectorAll('.autre-comment').forEach(input => {
            input.addEventListener('keydown', function (e) {
                if (e.key === 'Enter') {
                    const row = this.closest('tr');
                    const leadId = row.dataset.leadId;
                    const valeurPerso = this.value.trim();
                    const csrfToken = document.querySelector('input[name=\"_token\"]')?.value;
                    const span = row.querySelector('.status');
                    const select = row.querySelector('.status-select');

                    if (!valeurPerso) {
                        alert(\"Veuillez entrer une valeur.\");
                        return;
                    }

                    fetch(`/planning/\${leadId}/edit-inline-planning`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken
                        },
                        body: JSON.stringify({
                            field: 'status',
                            value: valeurPerso
                        })
                    }).then(response => {
                        if (response.ok) {
                            span.textContent = valeurPerso;
                            span.classList.remove('d-none');
                            select.classList.add('d-none');
                            this.classList.add('d-none');
                            this.value = ''; // reset input
                        } else {
                            alert(\"Erreur lors de l'enregistrement du statut personnalisé.\");
                        }
                    });
                }
            });
        });



    </script>
{% endblock %}
", "planning/planning1.html.twig", "/Applications/MAMP/htdocs/jsenergie/CRM_project_1/templates/planning/planning1.html.twig");
    }
}

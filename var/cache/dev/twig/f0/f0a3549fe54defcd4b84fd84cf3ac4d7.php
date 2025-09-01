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

/* lead/leads.html.twig */
class __TwigTemplate_070fe83fd5373d5b2ed10ec6d93c0f66 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lead/leads.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lead/leads.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lead/leads.html.twig", 1);
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

        yield "Lead index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        yield "
        <style>
            .highlight-fluo {
                background-color: #ff00ff; /* Rose fluo */
                color: #ffffff; /* Texte blanc pour le contraste */
            }

        </style>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        yield "    <br>
    <h1 style=\"text-align: center;\">Lead</h1>
    <br>
    <div class=\"d-flex justify-content-between mb-3\">
        <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("upload_excel");
        yield "\" class=\"btn btn-primary\" style=\"margin-left: 15px;\">Importer une lead</a>
        <form method=\"post\" action=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lead_change_status_all");
        yield "\"  onsubmit=\"return confirm('Are you sure you want to change the status of all items?');\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("change_status_all"), "html", null, true);
        yield "\">
            <button type=\"submit\" class=\"btn btn-warning\" style=\"margin-left: -225px;\">Mettre dans l'historique</button>
        </form>
    </div>
    <table class=\"table\">
        <thead>
        <tr>
            <th>Id enregistrement</th>
            <th>Heure de creation</th>
            <th>Nom complet</th>
            <th>Telephone</th>
            <th>Chauffage</th>
            <th>Departement</th>
            <th>Commentaire</th>
            <th>technicien</th>
            <th>action</th>

        </tr>
        </thead>
        <tbody>
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 43, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["lead"]) {
            // line 44
            yield "            ";
            if ((is_string($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 44)) && is_string($__internal_compile_1 = "rendez vous") && str_starts_with($__internal_compile_0, $__internal_compile_1))) {
                // line 45
                yield "            <tr data-lead-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "id", [], "any", false, false, false, 45), "html", null, true);
                yield "\" >
                <td contenteditable=\"true\" data-field=\"idEnregistrement\" style=\"";
                // line 46
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 46) == "faux numero")) {
                    yield " background-color: #ff00ff; color: #ffffff; ";
                }
                yield " ";
                if ((is_string($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 46)) && is_string($__internal_compile_3 = "pas interesser") && str_starts_with($__internal_compile_2, $__internal_compile_3))) {
                    yield "  background-color: #FF0000; color: #ffffff; ";
                }
                yield " ";
                if ((is_string($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 46)) && is_string($__internal_compile_5 = "rappel") && str_starts_with($__internal_compile_4, $__internal_compile_5))) {
                    yield "  background-color: #87CEEB; color: #ffffff; ";
                }
                yield " ";
                if ((is_string($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 46)) && is_string($__internal_compile_7 = "rendez vous") && str_starts_with($__internal_compile_6, $__internal_compile_7))) {
                    yield "  background-color: #00FF00; color: #ffffff; ";
                }
                yield " ";
                if ((is_string($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 46)) && is_string($__internal_compile_9 = "NRP") && str_starts_with($__internal_compile_8, $__internal_compile_9))) {
                    yield " background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_10 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 46)) && is_string($__internal_compile_11 = "NRP X 2") && str_starts_with($__internal_compile_10, $__internal_compile_11))) {
                    yield " background-color: #fdfd96; color: #000000; ";
                }
                yield " ";
                if ((is_string($__internal_compile_12 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 46)) && is_string($__internal_compile_13 = "NRP X 3") && str_starts_with($__internal_compile_12, $__internal_compile_13))) {
                    yield " background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 46)) && is_string($__internal_compile_15 = "NRP X 4") && str_starts_with($__internal_compile_14, $__internal_compile_15))) {
                    yield "  background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_16 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 46)) && is_string($__internal_compile_17 = "NRP += 5") && str_starts_with($__internal_compile_16, $__internal_compile_17))) {
                    yield "  background-color: #FFA500; color: #ffffff; ";
                }
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "idEnregistrement", [], "any", false, false, false, 46), "html", null, true);
                yield "</td>
                <td contenteditable=\"true\" data-field=\"heureCreation\" style=\"";
                // line 47
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 47) == "faux numero")) {
                    yield " background-color: #ff00ff; color: #ffffff; ";
                }
                yield " ";
                if ((is_string($__internal_compile_18 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 47)) && is_string($__internal_compile_19 = "pas interesser") && str_starts_with($__internal_compile_18, $__internal_compile_19))) {
                    yield "  background-color: #FF0000; color: #ffffff; ";
                }
                if ((is_string($__internal_compile_20 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 47)) && is_string($__internal_compile_21 = "rappel") && str_starts_with($__internal_compile_20, $__internal_compile_21))) {
                    yield "  background-color: #87CEEB; color: #ffffff; ";
                }
                yield " ";
                if ((is_string($__internal_compile_22 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 47)) && is_string($__internal_compile_23 = "rendez vous") && str_starts_with($__internal_compile_22, $__internal_compile_23))) {
                    yield "  background-color: #00FF00; color: #ffffff; ";
                }
                if ((is_string($__internal_compile_24 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 47)) && is_string($__internal_compile_25 = "NRP") && str_starts_with($__internal_compile_24, $__internal_compile_25))) {
                    yield " background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_26 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 47)) && is_string($__internal_compile_27 = "NRP X 2") && str_starts_with($__internal_compile_26, $__internal_compile_27))) {
                    yield " background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_28 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 47)) && is_string($__internal_compile_29 = "NRP X 3") && str_starts_with($__internal_compile_28, $__internal_compile_29))) {
                    yield " background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_30 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 47)) && is_string($__internal_compile_31 = "NRP X 4") && str_starts_with($__internal_compile_30, $__internal_compile_31))) {
                    yield "  background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_32 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 47)) && is_string($__internal_compile_33 = "NRP += 5") && str_starts_with($__internal_compile_32, $__internal_compile_33))) {
                    yield "  background-color: #FFA500; color: #ffffff; ";
                }
                yield "\">";
                ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "heureCreation", [], "any", false, false, false, 47)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "heureCreation", [], "any", false, false, false, 47), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
                yield "</td>
                <td contenteditable=\"true\" data-field=\"nomComplet\" style=\"";
                // line 48
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 48) == "faux numero")) {
                    yield " background-color: #ff00ff; color: #ffffff; ";
                }
                yield " ";
                if ((is_string($__internal_compile_34 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 48)) && is_string($__internal_compile_35 = "pas interesser") && str_starts_with($__internal_compile_34, $__internal_compile_35))) {
                    yield "  background-color: #FF0000; color: #ffffff; ";
                }
                if ((is_string($__internal_compile_36 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 48)) && is_string($__internal_compile_37 = "rappel") && str_starts_with($__internal_compile_36, $__internal_compile_37))) {
                    yield "  background-color: #87CEEB; color: #ffffff; ";
                }
                if ((is_string($__internal_compile_38 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 48)) && is_string($__internal_compile_39 = "rendez vous") && str_starts_with($__internal_compile_38, $__internal_compile_39))) {
                    yield "  background-color: #00FF00; color: #ffffff; ";
                }
                if ((is_string($__internal_compile_40 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 48)) && is_string($__internal_compile_41 = "NRP") && str_starts_with($__internal_compile_40, $__internal_compile_41))) {
                    yield " background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_42 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 48)) && is_string($__internal_compile_43 = "NRP X 2") && str_starts_with($__internal_compile_42, $__internal_compile_43))) {
                    yield " background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_44 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 48)) && is_string($__internal_compile_45 = "NRP X 3") && str_starts_with($__internal_compile_44, $__internal_compile_45))) {
                    yield " background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_46 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 48)) && is_string($__internal_compile_47 = "NRP X 4") && str_starts_with($__internal_compile_46, $__internal_compile_47))) {
                    yield "  background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_48 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 48)) && is_string($__internal_compile_49 = "NRP += 5") && str_starts_with($__internal_compile_48, $__internal_compile_49))) {
                    yield "  background-color: #FFA500; color: #ffffff; ";
                }
                yield " \">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "nomComplet", [], "any", false, false, false, 48), "html", null, true);
                yield "</td>
                <td contenteditable=\"true\" data-field=\"telephone\" style=\"";
                // line 49
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 49) == "faux numero")) {
                    yield " background-color: #ff00ff; color: #ffffff; ";
                }
                yield " ";
                if ((is_string($__internal_compile_50 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 49)) && is_string($__internal_compile_51 = "pas interesser") && str_starts_with($__internal_compile_50, $__internal_compile_51))) {
                    yield " background-color: #FF0000; color: #ffffff; ";
                }
                if ((is_string($__internal_compile_52 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 49)) && is_string($__internal_compile_53 = "rappel") && str_starts_with($__internal_compile_52, $__internal_compile_53))) {
                    yield "  background-color: #87CEEB; color: #ffffff; ";
                }
                if ((is_string($__internal_compile_54 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 49)) && is_string($__internal_compile_55 = "rendez vous") && str_starts_with($__internal_compile_54, $__internal_compile_55))) {
                    yield "  background-color: #00FF00; color: #ffffff; ";
                }
                if ((is_string($__internal_compile_56 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 49)) && is_string($__internal_compile_57 = "NRP") && str_starts_with($__internal_compile_56, $__internal_compile_57))) {
                    yield " background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_58 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 49)) && is_string($__internal_compile_59 = "NRP X 2") && str_starts_with($__internal_compile_58, $__internal_compile_59))) {
                    yield " background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_60 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 49)) && is_string($__internal_compile_61 = "NRP X 3") && str_starts_with($__internal_compile_60, $__internal_compile_61))) {
                    yield " background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_62 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 49)) && is_string($__internal_compile_63 = "NRP X 4") && str_starts_with($__internal_compile_62, $__internal_compile_63))) {
                    yield "  background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_64 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 49)) && is_string($__internal_compile_65 = "NRP += 5") && str_starts_with($__internal_compile_64, $__internal_compile_65))) {
                    yield "  background-color: #FFA500; color: #ffffff; ";
                }
                yield " \">0";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "telephone", [], "any", false, false, false, 49), "html", null, true);
                yield "</td>
                <td contenteditable=\"true\" data-field=\"chauffage\" style=\"";
                // line 50
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 50) == "faux numero")) {
                    yield " background-color: #ff00ff; color: #ffffff; ";
                }
                yield " ";
                if ((is_string($__internal_compile_66 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 50)) && is_string($__internal_compile_67 = "pas interesser") && str_starts_with($__internal_compile_66, $__internal_compile_67))) {
                    yield "  background-color: #FF0000; color: #ffffff; ";
                }
                if ((is_string($__internal_compile_68 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 50)) && is_string($__internal_compile_69 = "rappel") && str_starts_with($__internal_compile_68, $__internal_compile_69))) {
                    yield "  background-color: #87CEEB; color: #ffffff; ";
                }
                if ((is_string($__internal_compile_70 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 50)) && is_string($__internal_compile_71 = "rendez vous") && str_starts_with($__internal_compile_70, $__internal_compile_71))) {
                    yield "  background-color: #00FF00; color: #ffffff; ";
                }
                if ((is_string($__internal_compile_72 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 50)) && is_string($__internal_compile_73 = "NRP") && str_starts_with($__internal_compile_72, $__internal_compile_73))) {
                    yield " background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_74 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 50)) && is_string($__internal_compile_75 = "NRP X 2") && str_starts_with($__internal_compile_74, $__internal_compile_75))) {
                    yield " background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_76 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 50)) && is_string($__internal_compile_77 = "NRP X 3") && str_starts_with($__internal_compile_76, $__internal_compile_77))) {
                    yield " background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_78 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 50)) && is_string($__internal_compile_79 = "NRP X 4") && str_starts_with($__internal_compile_78, $__internal_compile_79))) {
                    yield "  background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_80 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 50)) && is_string($__internal_compile_81 = "NRP += 5") && str_starts_with($__internal_compile_80, $__internal_compile_81))) {
                    yield "  background-color: #FFA500; color: #ffffff; ";
                }
                yield " \">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "chauffage", [], "any", false, false, false, 50), "html", null, true);
                yield "</td>
                <td contenteditable=\"true\" data-field=\"departement\" style=\"";
                // line 51
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 51) == "faux numero")) {
                    yield " background-color: #ff00ff; color: #ffffff; ";
                }
                yield " ";
                if ((is_string($__internal_compile_82 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 51)) && is_string($__internal_compile_83 = "pas interesser") && str_starts_with($__internal_compile_82, $__internal_compile_83))) {
                    yield "  background-color: #FF0000; color: #ffffff; ";
                }
                if ((is_string($__internal_compile_84 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 51)) && is_string($__internal_compile_85 = "rappel") && str_starts_with($__internal_compile_84, $__internal_compile_85))) {
                    yield "  background-color: #87CEEB; color: #ffffff; ";
                }
                if ((is_string($__internal_compile_86 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 51)) && is_string($__internal_compile_87 = "rendez vous") && str_starts_with($__internal_compile_86, $__internal_compile_87))) {
                    yield "  background-color: #00FF00; color: #ffffff; ";
                }
                if ((is_string($__internal_compile_88 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 51)) && is_string($__internal_compile_89 = "NRP") && str_starts_with($__internal_compile_88, $__internal_compile_89))) {
                    yield " background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_90 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 51)) && is_string($__internal_compile_91 = "NRP X 2") && str_starts_with($__internal_compile_90, $__internal_compile_91))) {
                    yield " background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_92 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 51)) && is_string($__internal_compile_93 = "NRP X 3") && str_starts_with($__internal_compile_92, $__internal_compile_93))) {
                    yield " background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_94 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 51)) && is_string($__internal_compile_95 = "NRP X 4") && str_starts_with($__internal_compile_94, $__internal_compile_95))) {
                    yield "  background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_96 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 51)) && is_string($__internal_compile_97 = "NRP += 5") && str_starts_with($__internal_compile_96, $__internal_compile_97))) {
                    yield "  background-color: #FFA500; color: #ffffff; ";
                }
                yield " \">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "departement", [], "any", false, false, false, 51), "html", null, true);
                yield "</td>
                <td style=\"";
                // line 52
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 52) == "faux numero")) {
                    yield " background-color: #ff00ff; color: #ffffff; ";
                }
                yield " ";
                if ((is_string($__internal_compile_98 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 52)) && is_string($__internal_compile_99 = "pas interesser") && str_starts_with($__internal_compile_98, $__internal_compile_99))) {
                    yield "  background-color: #FF0000; color: #ffffff; ";
                }
                if ((is_string($__internal_compile_100 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 52)) && is_string($__internal_compile_101 = "rappel") && str_starts_with($__internal_compile_100, $__internal_compile_101))) {
                    yield "  background-color: #87CEEB; color: #ffffff; ";
                }
                if ((is_string($__internal_compile_102 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 52)) && is_string($__internal_compile_103 = "rendez vous") && str_starts_with($__internal_compile_102, $__internal_compile_103))) {
                    yield "  background-color: #00FF00; color: #ffffff; ";
                }
                if ((is_string($__internal_compile_104 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 52)) && is_string($__internal_compile_105 = "NRP") && str_starts_with($__internal_compile_104, $__internal_compile_105))) {
                    yield " background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_106 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 52)) && is_string($__internal_compile_107 = "NRP X 2") && str_starts_with($__internal_compile_106, $__internal_compile_107))) {
                    yield " background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_108 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 52)) && is_string($__internal_compile_109 = "NRP X 3") && str_starts_with($__internal_compile_108, $__internal_compile_109))) {
                    yield " background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_110 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 52)) && is_string($__internal_compile_111 = "NRP X 4") && str_starts_with($__internal_compile_110, $__internal_compile_111))) {
                    yield "  background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_112 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 52)) && is_string($__internal_compile_113 = "NRP += 5") && str_starts_with($__internal_compile_112, $__internal_compile_113))) {
                    yield "  background-color: #FFA500; color: #ffffff; ";
                }
                yield " \">
                    <span class=\"commentaire-display\" data-field=\"commentaire\">";
                // line 53
                ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 53)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 53), "html", null, true)) : (yield "N/A"));
                yield "</span>
                    <select class=\"commentaire-select d-none\">
                        <option value=\"\">Choisir un commentaire</option>
                        <option value=\"faux numero\" ";
                // line 56
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 56) == "faux numero")) {
                    yield "selected";
                }
                yield ">faux numero</option>
                        <option value=\"rappel\" ";
                // line 57
                if ((is_string($__internal_compile_114 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 57)) && is_string($__internal_compile_115 = "rappel") && str_starts_with($__internal_compile_114, $__internal_compile_115))) {
                    yield "selected";
                }
                yield ">rappel</option>
                        <option value=\"pas interesser\" ";
                // line 58
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 58) == "pas interesser")) {
                    yield "selected";
                }
                yield ">pas interesser</option>
                        <option value=\"rendez vous\" ";
                // line 59
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 59) == "rendez vous")) {
                    yield "selected";
                }
                yield ">rendez vous</option>
                        <option value=\"NRP\" ";
                // line 60
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 60) == "NRP")) {
                    yield "selected";
                }
                yield ">NRP</option>
                        <option value=\"NRP X 2\" ";
                // line 61
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 61) == "NRP X 2")) {
                    yield "selected";
                }
                yield ">NRP X 2</option>
                        <option value=\"NRP X 3\" ";
                // line 62
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 62) == "NRP X 3")) {
                    yield "selected";
                }
                yield ">NRP X 3</option>
                        <option value=\"NRP X 4\" ";
                // line 63
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 63) == "NRP X 4")) {
                    yield "selected";
                }
                yield ">NRP X 4</option>
                        <option value=\"NRP += 5\" ";
                // line 64
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 64) == "NRP += 5")) {
                    yield "selected";
                }
                yield ">NRP += 5</option>
                    </select>
                    <textarea class=\"commentaire-text d-none\" rows=\"3\">";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 66), "html", null, true);
                yield "</textarea>

                    <div class=\"rappel-form d-none\">
                        <label for=\"rappel-date\">Date:</label>
                        <input type=\"date\" id=\"rappel-date\" name=\"rappelDate\">
                        <label for=\"rappel-time\">Heure:</label>
                        <input type=\"time\" id=\"rappel-time\" name=\"rappelTime\">
                        <button type=\"button\" class=\"save-rappel-btn\">Save</button>
                    </div>
                </td>



                <td style=\"";
                // line 79
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 79) == "faux numero")) {
                    yield " background-color: #ff00ff; color: #ffffff; ";
                }
                yield " ";
                if ((is_string($__internal_compile_116 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 79)) && is_string($__internal_compile_117 = "pas interesser") && str_starts_with($__internal_compile_116, $__internal_compile_117))) {
                    yield " background-color: #FF0000; color: #ffffff; ";
                }
                yield " ";
                if ((is_string($__internal_compile_118 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 79)) && is_string($__internal_compile_119 = "rappel") && str_starts_with($__internal_compile_118, $__internal_compile_119))) {
                    yield "  background-color: #87CEEB; color: #ffffff; ";
                }
                yield " ";
                if ((is_string($__internal_compile_120 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 79)) && is_string($__internal_compile_121 = "rendez vous") && str_starts_with($__internal_compile_120, $__internal_compile_121))) {
                    yield "  background-color: #00FF00; color: #ffffff; ";
                }
                if ((is_string($__internal_compile_122 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 79)) && is_string($__internal_compile_123 = "NRP") && str_starts_with($__internal_compile_122, $__internal_compile_123))) {
                    yield " background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_124 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 79)) && is_string($__internal_compile_125 = "NRP X 2") && str_starts_with($__internal_compile_124, $__internal_compile_125))) {
                    yield " background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_126 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 79)) && is_string($__internal_compile_127 = "NRP X 3") && str_starts_with($__internal_compile_126, $__internal_compile_127))) {
                    yield " background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_128 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 79)) && is_string($__internal_compile_129 = "NRP X 4") && str_starts_with($__internal_compile_128, $__internal_compile_129))) {
                    yield "  background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_130 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 79)) && is_string($__internal_compile_131 = "NRP += 5") && str_starts_with($__internal_compile_130, $__internal_compile_131))) {
                    yield "  background-color: #FFA500; color: #ffffff; ";
                }
                yield " \">
                <span class=\"telepro\" data-field=\"telepro\">
        ";
                // line 81
                ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "technicien", [], "any", false, false, false, 81)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "technicien", [], "any", false, false, false, 81), "prenom", [], "any", false, false, false, 81) . " , ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "technicien", [], "any", false, false, false, 81), "nom", [], "any", false, false, false, 81)), "html", null, true)) : (yield "Choisir à qui assigner la lead"));
                yield "
    </span>

                <select class=\"telepro-select d-none\">
                    <option value=\"\">Choisir à qui assigner la lead</option>
                    ";
                // line 86
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["technicien"]) || array_key_exists("technicien", $context) ? $context["technicien"] : (function () { throw new RuntimeError('Variable "technicien" does not exist.', 86, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tech"]) {
                    // line 87
                    yield "                        <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tech"], "id", [], "any", false, false, false, 87), "html", null, true);
                    yield "\"
                                ";
                    // line 88
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "technicien", [], "any", false, false, false, 88) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "technicien", [], "any", false, false, false, 88), "id", [], "any", false, false, false, 88) == CoreExtension::getAttribute($this->env, $this->source, $context["tech"], "id", [], "any", false, false, false, 88)))) {
                        yield "selected";
                    }
                    yield ">
                            ";
                    // line 89
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tech"], "prenom", [], "any", false, false, false, 89), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tech"], "nom", [], "any", false, false, false, 89), "html", null, true);
                    yield "
                        </option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tech'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                yield "                </select>
                </td>


                <td style=\"";
                // line 96
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 96) == "faux numero")) {
                    yield " background-color: #ff00ff; color: #ffffff; ";
                }
                yield " ";
                if ((is_string($__internal_compile_132 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 96)) && is_string($__internal_compile_133 = "pas interesser") && str_starts_with($__internal_compile_132, $__internal_compile_133))) {
                    yield " background-color: #FF0000; color: #ffffff; ";
                }
                if ((is_string($__internal_compile_134 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 96)) && is_string($__internal_compile_135 = "rappel") && str_starts_with($__internal_compile_134, $__internal_compile_135))) {
                    yield "  background-color: #87CEEB; color: #ffffff; ";
                }
                if ((is_string($__internal_compile_136 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 96)) && is_string($__internal_compile_137 = "rendez vous") && str_starts_with($__internal_compile_136, $__internal_compile_137))) {
                    yield "  background-color: #00FF00; color: #ffffff; ";
                }
                if ((is_string($__internal_compile_138 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 96)) && is_string($__internal_compile_139 = "NRP") && str_starts_with($__internal_compile_138, $__internal_compile_139))) {
                    yield " background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_140 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 96)) && is_string($__internal_compile_141 = "NRP X 2") && str_starts_with($__internal_compile_140, $__internal_compile_141))) {
                    yield " background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_142 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 96)) && is_string($__internal_compile_143 = "NRP X 3") && str_starts_with($__internal_compile_142, $__internal_compile_143))) {
                    yield " background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_144 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 96)) && is_string($__internal_compile_145 = "NRP X 4") && str_starts_with($__internal_compile_144, $__internal_compile_145))) {
                    yield "  background-color: #fdfd96; color: #000000; ";
                }
                if ((is_string($__internal_compile_146 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 96)) && is_string($__internal_compile_147 = "NRP += 5") && str_starts_with($__internal_compile_146, $__internal_compile_147))) {
                    yield "  background-color: #FFA500; color: #ffffff; ";
                }
                yield " \">
                    ";
                // line 97
                if ((is_string($__internal_compile_148 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 97)) && is_string($__internal_compile_149 = "rappel") && str_starts_with($__internal_compile_148, $__internal_compile_149))) {
                    // line 98
                    yield "                        ";
                    $context["parts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 98), " ", 2);
                    // line 99
                    yield "                        ";
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 99, $this->source); })())) > 1)) {
                        // line 100
                        yield "                            ";
                        $context["dateTimeObj"] = $this->extensions['Twig\Extension\CoreExtension']->convertDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 100, $this->source); })()), 1, [], "array", false, false, false, 100));
                        // line 101
                        yield "                            ";
                        $context["startDate"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["dateTimeObj"]) || array_key_exists("dateTimeObj", $context) ? $context["dateTimeObj"] : (function () { throw new RuntimeError('Variable "dateTimeObj" does not exist.', 101, $this->source); })()), "YmdTHis");
                        // line 102
                        yield "                            ";
                        $context["endDateObj"] = $this->extensions['Twig\Extension\CoreExtension']->modifyDate((isset($context["dateTimeObj"]) || array_key_exists("dateTimeObj", $context) ? $context["dateTimeObj"] : (function () { throw new RuntimeError('Variable "dateTimeObj" does not exist.', 102, $this->source); })()), "+30 minutes");
                        // line 103
                        yield "                            ";
                        $context["endDate"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["endDateObj"]) || array_key_exists("endDateObj", $context) ? $context["endDateObj"] : (function () { throw new RuntimeError('Variable "endDateObj" does not exist.', 103, $this->source); })()), "YmdTHis");
                        // line 104
                        yield "
                            ";
                        // line 105
                        $context["description"] = ((("Rappel pour " . CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "nomComplet", [], "any", false, false, false, 105)) . ", Téléphone: 0") . CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "telephone", [], "any", false, false, false, 105));
                        // line 106
                        yield "                            ";
                        $context["googleCalendarUrl"] = ((((("https://calendar.google.com/calendar/u/0/r/eventedit?text=Rappel&dates=" . (isset($context["startDate"]) || array_key_exists("startDate", $context) ? $context["startDate"] : (function () { throw new RuntimeError('Variable "startDate" does not exist.', 106, $this->source); })())) . "/") . (isset($context["endDate"]) || array_key_exists("endDate", $context) ? $context["endDate"] : (function () { throw new RuntimeError('Variable "endDate" does not exist.', 106, $this->source); })())) . "&details=") . Twig\Extension\CoreExtension::urlencode((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 106, $this->source); })())));
                        // line 107
                        yield "
                            <a href=\"";
                        // line 108
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["googleCalendarUrl"]) || array_key_exists("googleCalendarUrl", $context) ? $context["googleCalendarUrl"] : (function () { throw new RuntimeError('Variable "googleCalendarUrl" does not exist.', 108, $this->source); })()), "html", null, true);
                        yield "\" target=\"_blank\" class=\"btn btn-success\">Ajouter au Google Agenda</a>
                        ";
                    } else {
                        // line 110
                        yield "                            <span class=\"text-danger\">Date et heure manquantes</span>
                        ";
                    }
                    // line 112
                    yield "

                    ";
                } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,                 // line 114
$context["lead"], "getPlannings", [], "method", false, false, false, 114)) > 0)) {
                    // line 115
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "getCommentaire", [], "method", false, false, false, 115) == "rendez vous")) {
                        // line 116
                        yield "                            <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planning_for_lead", ["leadId" => CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "id", [], "any", false, false, false, 116)]), "html", null, true);
                        yield "\" class=\"btn btn-primary\">Voir le rendez-vous</a>
                        ";
                    }
                    // line 118
                    yield "                    ";
                } else {
                    // line 119
                    yield "                        <span class=\"text-muted\" style=\"color: grey!important;\">Aucune action</span>
                    ";
                }
                // line 121
                yield "
                </td>

            </tr>
            ";
            }
            // line 126
            yield "        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 127
            yield "            <tr>
                <td colspan=\"10\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lead'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        yield "        </tbody>
    </table>


    <script>


        document.querySelectorAll('[contenteditable]').forEach(cell => {
            cell.addEventListener('dblclick', function() {
                this.setAttribute('contenteditable', 'true');
                this.focus();
            });

            cell.addEventListener('blur', function() {
                this.setAttribute('contenteditable', 'false');
                let leadId = this.closest('tr').dataset.leadId;
                let field = this.dataset.field;
                let value = this.textContent;
                let csrfToken = document.querySelector('input[name=\"_token\"]').value;

                console.log('Sending data:', { field, value });

                fetch(`/lead/\${leadId}/edit-inline-user-2`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        field: field,
                        value: value
                    })
                })
                    .then(response => {
                        if (!response.ok) {
                            alert('Failed to update field');
                        }
                    });
            });
        });

        document.querySelectorAll('.telepro').forEach(span => {
            span.addEventListener('dblclick', function() {
                let select = this.nextElementSibling;
                select.classList.remove('d-none');
                select.focus();
                this.classList.add('d-none');
            });
        });

        document.querySelectorAll('.telepro-select').forEach(select => {
            select.addEventListener('change', function() {
                let span = this.previousElementSibling;
                let leadId = this.closest('tr').dataset.leadId;
                let field = 'telepro';
                let value = this.value;
                let csrfToken = document.querySelector('input[name=\"_token\"]').value;

                console.log('Sending data:', { field, value });

                fetch(`/lead/\${leadId}/edit-inline-user-2`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        field: field,
                        value: value
                    })
                })
                    .then(response => {
                        if (!response.ok) {
                            alert('Failed to update field');
                        } else {
                            span.textContent = this.options[this.selectedIndex].textContent;
                            span.classList.remove('d-none');
                            this.classList.add('d-none');
                        }
                    });
            });
        });

        document.querySelectorAll('.commentaire-display').forEach(span => {
            span.addEventListener('dblclick', function() {
                let select = this.nextElementSibling;
                let textarea = select.nextElementSibling;
                let rappelForm = textarea.nextElementSibling;
                select.classList.remove('d-none');
                textarea.classList.remove('d-none');
                rappelForm.classList.add('d-none');
                select.focus();
                this.classList.add('d-none');
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            let leadId = localStorage.getItem('redirectToPlanning');
            if (leadId) {
                localStorage.removeItem('redirectToPlanning'); // Nettoie l'indicateur
                console.log('Lead ID found:', leadId); // Débogage
                setTimeout(function() {
                    // Redirection avec pré-remplissage du formulaire
                    let redirectUrl = \"";
        // line 234
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planning_new_lead", ["leadId" => "REPLACE_LEAD_ID"]);
        yield "\".replace('REPLACE_LEAD_ID', leadId);
                    console.log('Redirecting to:', redirectUrl); // Débogage
                    window.location.href = redirectUrl;
                }, 2000);  // Délai de 2 secondes avant la redirection
            }
        });


        document.querySelectorAll('.commentaire-select').forEach(select => {
            select.addEventListener('change', function() {
                let span = this.previousElementSibling;
                let textarea = this.nextElementSibling;
                let rappelForm = textarea.nextElementSibling;
                let leadId = this.closest('tr').dataset.leadId;
                let field = 'commentaire';
                let value = this.value;
                let csrfToken = document.querySelector('input[name=\"_token\"]').value;

                console.log('Sending data:', { field, value });

                fetch(`/lead/\${leadId}/edit-inline-user-2`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        field: field,
                        value: value
                    })
                })
                    .then(response => {
                        if (!response.ok) {
                            alert('Failed to update field');
                        } else {
                            span.textContent = value;
                            textarea.value = value;
                            if (value === 'rappel') {
                                rappelForm.classList.remove('d-none');
                            } else {
                                rappelForm.classList.add('d-none');
                            }
                            span.classList.remove('d-none');
                            this.classList.add('d-none');
                            textarea.classList.add('d-none');

                            if (value === 'rendez vous') {
                                localStorage.setItem('redirectToPlanning', leadId);  // Stocker l'ID du lead
                            } else {
                                localStorage.removeItem('redirectToPlanning');
                            }

                            if(value === 'rappel') {    // Recharge la page après 5 secondes
                                setTimeout(function () {
                                    location.reload();
                                }, 10000);
                            }

                            else
                            {
                                setTimeout(function() {
                                    location.reload();    }, 100);
                            } // Recharge la page après 100 ms
                        }
                    });
            });
        });





        document.querySelectorAll('.commentaire-text').forEach(textarea => {
            textarea.addEventListener('blur', function() {
                let span = this.previousElementSibling;
                let select = span.previousElementSibling;
                let rappelForm = this.nextElementSibling;
                let leadId = this.closest('tr').dataset.leadId;
                let field = 'commentaire';
                let value = this.value;
                let csrfToken = document.querySelector('input[name=\"_token\"]').value;

                console.log('Sending data:', { field, value });

                fetch(`/lead/\${leadId}/edit-inline-user-2`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        field: field,
                        value: value
                    })
                })
                    .then(response => {
                        if (!response.ok) {
                            alert('Failed to update field');
                        } else {
                            span.textContent = value;
                            select.value = value;
                            span.classList.remove('d-none');
                            select.classList.add('d-none');
                            this.classList.add('d-none');
                            rappelForm.classList.add('d-none');
                        }
                    });
            });
        });

        document.querySelectorAll('.save-rappel-btn').forEach(button => {
            button.addEventListener('click', function() {
                let rappelForm = this.closest('.rappel-form');
                let leadId = this.closest('tr').dataset.leadId;
                let rappelDate = rappelForm.querySelector('#rappel-date').value;
                let rappelTime = rappelForm.querySelector('#rappel-time').value;
                let csrfToken = document.querySelector('input[name=\"_token\"]').value;

                if (rappelDate && rappelTime) {
                    let rappelValue = `rappel \${rappelDate} \${rappelTime}`;

                    fetch(`/lead/\${leadId}/edit-inline-user-2`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken
                        },
                        body: JSON.stringify({
                            field: 'commentaire',
                            value: rappelValue
                        })
                    })
                        .then(response => {
                            if (!response.ok) {
                                alert('Failed to update field');
                            } else {
                                rappelForm.classList.add('d-none');
                                // Mettez à jour l'affichage pour refléter le changement
                                document.querySelector(`[data-lead-id=\"\${leadId}\"] .commentaire-display`).textContent = rappelValue;
                            }
                        });
                } else {
                    alert('Veuillez entrer une date et une heure valides.');
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
        return "lead/leads.html.twig";
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
        return array (  774 => 234,  669 => 131,  660 => 127,  655 => 126,  648 => 121,  644 => 119,  641 => 118,  635 => 116,  632 => 115,  630 => 114,  626 => 112,  622 => 110,  617 => 108,  614 => 107,  611 => 106,  609 => 105,  606 => 104,  603 => 103,  600 => 102,  597 => 101,  594 => 100,  591 => 99,  588 => 98,  586 => 97,  555 => 96,  549 => 92,  538 => 89,  532 => 88,  527 => 87,  523 => 86,  515 => 81,  481 => 79,  465 => 66,  458 => 64,  452 => 63,  446 => 62,  440 => 61,  434 => 60,  428 => 59,  422 => 58,  416 => 57,  410 => 56,  404 => 53,  373 => 52,  340 => 51,  307 => 50,  274 => 49,  241 => 48,  207 => 47,  170 => 46,  165 => 45,  162 => 44,  157 => 43,  134 => 23,  130 => 22,  126 => 21,  120 => 17,  110 => 16,  91 => 5,  81 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Lead index{% endblock %}
    {% block stylesheets %}

        <style>
            .highlight-fluo {
                background-color: #ff00ff; /* Rose fluo */
                color: #ffffff; /* Texte blanc pour le contraste */
            }

        </style>
    {% endblock %}


{% block body %}
    <br>
    <h1 style=\"text-align: center;\">Lead</h1>
    <br>
    <div class=\"d-flex justify-content-between mb-3\">
        <a href=\"{{ path('upload_excel') }}\" class=\"btn btn-primary\" style=\"margin-left: 15px;\">Importer une lead</a>
        <form method=\"post\" action=\"{{ path('app_lead_change_status_all') }}\"  onsubmit=\"return confirm('Are you sure you want to change the status of all items?');\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('change_status_all') }}\">
            <button type=\"submit\" class=\"btn btn-warning\" style=\"margin-left: -225px;\">Mettre dans l'historique</button>
        </form>
    </div>
    <table class=\"table\">
        <thead>
        <tr>
            <th>Id enregistrement</th>
            <th>Heure de creation</th>
            <th>Nom complet</th>
            <th>Telephone</th>
            <th>Chauffage</th>
            <th>Departement</th>
            <th>Commentaire</th>
            <th>technicien</th>
            <th>action</th>

        </tr>
        </thead>
        <tbody>
        {% for lead in leads %}
            {% if lead.commentaire starts with 'rendez vous' %}
            <tr data-lead-id=\"{{ lead.id }}\" >
                <td contenteditable=\"true\" data-field=\"idEnregistrement\" style=\"{% if lead.commentaire == 'faux numero' %} background-color: #ff00ff; color: #ffffff; {% endif %} {% if lead.commentaire starts with 'pas interesser' %}  background-color: #FF0000; color: #ffffff; {% endif %} {% if lead.commentaire starts with 'rappel' %}  background-color: #87CEEB; color: #ffffff; {% endif %} {% if lead.commentaire starts with 'rendez vous' %}  background-color: #00FF00; color: #ffffff; {% endif %} {% if lead.commentaire starts with 'NRP' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 2' %} background-color: #fdfd96; color: #000000; {% endif %} {% if lead.commentaire starts with 'NRP X 3' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 4' %}  background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP += 5' %}  background-color: #FFA500; color: #ffffff; {% endif %}\">{{ lead.idEnregistrement }}</td>
                <td contenteditable=\"true\" data-field=\"heureCreation\" style=\"{% if lead.commentaire == 'faux numero' %} background-color: #ff00ff; color: #ffffff; {% endif %} {% if lead.commentaire starts with 'pas interesser' %}  background-color: #FF0000; color: #ffffff; {% endif %}{% if lead.commentaire starts with 'rappel' %}  background-color: #87CEEB; color: #ffffff; {% endif %} {% if lead.commentaire starts with 'rendez vous' %}  background-color: #00FF00; color: #ffffff; {% endif %}{% if lead.commentaire starts with 'NRP' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 2' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 3' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 4' %}  background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP += 5' %}  background-color: #FFA500; color: #ffffff; {% endif %}\">{{ lead.heureCreation ? lead.heureCreation|date('Y-m-d H:i:s') : '' }}</td>
                <td contenteditable=\"true\" data-field=\"nomComplet\" style=\"{% if lead.commentaire == 'faux numero' %} background-color: #ff00ff; color: #ffffff; {% endif %} {% if lead.commentaire starts with 'pas interesser' %}  background-color: #FF0000; color: #ffffff; {% endif %}{% if lead.commentaire starts with 'rappel' %}  background-color: #87CEEB; color: #ffffff; {% endif %}{% if lead.commentaire starts with 'rendez vous' %}  background-color: #00FF00; color: #ffffff; {% endif %}{% if lead.commentaire starts with 'NRP' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 2' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 3' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 4' %}  background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP += 5' %}  background-color: #FFA500; color: #ffffff; {% endif %} \">{{ lead.nomComplet }}</td>
                <td contenteditable=\"true\" data-field=\"telephone\" style=\"{% if lead.commentaire == 'faux numero' %} background-color: #ff00ff; color: #ffffff; {% endif %} {% if lead.commentaire starts with 'pas interesser' %} background-color: #FF0000; color: #ffffff; {% endif %}{% if lead.commentaire starts with 'rappel' %}  background-color: #87CEEB; color: #ffffff; {% endif %}{% if lead.commentaire starts with 'rendez vous' %}  background-color: #00FF00; color: #ffffff; {% endif %}{% if lead.commentaire starts with 'NRP' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 2' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 3' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 4' %}  background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP += 5' %}  background-color: #FFA500; color: #ffffff; {% endif %} \">0{{ lead.telephone }}</td>
                <td contenteditable=\"true\" data-field=\"chauffage\" style=\"{% if lead.commentaire == 'faux numero' %} background-color: #ff00ff; color: #ffffff; {% endif %} {% if lead.commentaire starts with 'pas interesser' %}  background-color: #FF0000; color: #ffffff; {% endif %}{% if lead.commentaire starts with 'rappel' %}  background-color: #87CEEB; color: #ffffff; {% endif %}{% if lead.commentaire starts with 'rendez vous' %}  background-color: #00FF00; color: #ffffff; {% endif %}{% if lead.commentaire starts with 'NRP' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 2' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 3' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 4' %}  background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP += 5' %}  background-color: #FFA500; color: #ffffff; {% endif %} \">{{ lead.chauffage }}</td>
                <td contenteditable=\"true\" data-field=\"departement\" style=\"{% if lead.commentaire == 'faux numero' %} background-color: #ff00ff; color: #ffffff; {% endif %} {% if lead.commentaire starts with 'pas interesser' %}  background-color: #FF0000; color: #ffffff; {% endif %}{% if lead.commentaire starts with 'rappel' %}  background-color: #87CEEB; color: #ffffff; {% endif %}{% if lead.commentaire starts with 'rendez vous' %}  background-color: #00FF00; color: #ffffff; {% endif %}{% if lead.commentaire starts with 'NRP' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 2' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 3' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 4' %}  background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP += 5' %}  background-color: #FFA500; color: #ffffff; {% endif %} \">{{ lead.departement }}</td>
                <td style=\"{% if lead.commentaire == 'faux numero' %} background-color: #ff00ff; color: #ffffff; {% endif %} {% if lead.commentaire starts with 'pas interesser' %}  background-color: #FF0000; color: #ffffff; {% endif %}{% if lead.commentaire starts with 'rappel' %}  background-color: #87CEEB; color: #ffffff; {% endif %}{% if lead.commentaire starts with 'rendez vous' %}  background-color: #00FF00; color: #ffffff; {% endif %}{% if lead.commentaire starts with 'NRP' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 2' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 3' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 4' %}  background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP += 5' %}  background-color: #FFA500; color: #ffffff; {% endif %} \">
                    <span class=\"commentaire-display\" data-field=\"commentaire\">{{ lead.commentaire ? lead.commentaire : 'N/A' }}</span>
                    <select class=\"commentaire-select d-none\">
                        <option value=\"\">Choisir un commentaire</option>
                        <option value=\"faux numero\" {% if lead.commentaire == 'faux numero' %}selected{% endif %}>faux numero</option>
                        <option value=\"rappel\" {% if lead.commentaire starts with 'rappel' %}selected{% endif %}>rappel</option>
                        <option value=\"pas interesser\" {% if lead.commentaire == 'pas interesser' %}selected{% endif %}>pas interesser</option>
                        <option value=\"rendez vous\" {% if lead.commentaire == 'rendez vous' %}selected{% endif %}>rendez vous</option>
                        <option value=\"NRP\" {% if lead.commentaire == 'NRP' %}selected{% endif %}>NRP</option>
                        <option value=\"NRP X 2\" {% if lead.commentaire == 'NRP X 2' %}selected{% endif %}>NRP X 2</option>
                        <option value=\"NRP X 3\" {% if lead.commentaire == 'NRP X 3' %}selected{% endif %}>NRP X 3</option>
                        <option value=\"NRP X 4\" {% if lead.commentaire == 'NRP X 4' %}selected{% endif %}>NRP X 4</option>
                        <option value=\"NRP += 5\" {% if lead.commentaire == 'NRP += 5' %}selected{% endif %}>NRP += 5</option>
                    </select>
                    <textarea class=\"commentaire-text d-none\" rows=\"3\">{{ lead.commentaire }}</textarea>

                    <div class=\"rappel-form d-none\">
                        <label for=\"rappel-date\">Date:</label>
                        <input type=\"date\" id=\"rappel-date\" name=\"rappelDate\">
                        <label for=\"rappel-time\">Heure:</label>
                        <input type=\"time\" id=\"rappel-time\" name=\"rappelTime\">
                        <button type=\"button\" class=\"save-rappel-btn\">Save</button>
                    </div>
                </td>



                <td style=\"{% if lead.commentaire == 'faux numero' %} background-color: #ff00ff; color: #ffffff; {% endif %} {% if lead.commentaire starts with 'pas interesser' %} background-color: #FF0000; color: #ffffff; {% endif %} {% if lead.commentaire starts with 'rappel' %}  background-color: #87CEEB; color: #ffffff; {% endif %} {% if lead.commentaire starts with 'rendez vous' %}  background-color: #00FF00; color: #ffffff; {% endif %}{% if lead.commentaire starts with 'NRP' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 2' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 3' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 4' %}  background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP += 5' %}  background-color: #FFA500; color: #ffffff; {% endif %} \">
                <span class=\"telepro\" data-field=\"telepro\">
        {{ lead.technicien ? (lead.technicien.prenom ~ ' , ' ~ lead.technicien.nom) : 'Choisir à qui assigner la lead' }}
    </span>

                <select class=\"telepro-select d-none\">
                    <option value=\"\">Choisir à qui assigner la lead</option>
                    {% for tech in technicien %}
                        <option value=\"{{ tech.id }}\"
                                {% if lead.technicien and lead.technicien.id == tech.id %}selected{% endif %}>
                            {{ tech.prenom }}, {{ tech.nom }}
                        </option>
                    {% endfor %}
                </select>
                </td>


                <td style=\"{% if lead.commentaire == 'faux numero' %} background-color: #ff00ff; color: #ffffff; {% endif %} {% if lead.commentaire starts with 'pas interesser' %} background-color: #FF0000; color: #ffffff; {% endif %}{% if lead.commentaire starts with 'rappel' %}  background-color: #87CEEB; color: #ffffff; {% endif %}{% if lead.commentaire starts with 'rendez vous' %}  background-color: #00FF00; color: #ffffff; {% endif %}{% if lead.commentaire starts with 'NRP' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 2' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 3' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 4' %}  background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP += 5' %}  background-color: #FFA500; color: #ffffff; {% endif %} \">
                    {% if lead.commentaire starts with 'rappel' %}
                        {% set parts = lead.commentaire|split(' ', 2) %}
                        {% if parts|length > 1 %}
                            {% set dateTimeObj = date(parts[1]) %}
                            {% set startDate = dateTimeObj|date('Ymd\\THis') %}
                            {% set endDateObj = dateTimeObj|date_modify('+30 minutes') %}
                            {% set endDate = endDateObj|date('Ymd\\THis') %}

                            {% set description = 'Rappel pour ' ~ lead.nomComplet ~ ', Téléphone: 0' ~ lead.telephone %}
                            {% set googleCalendarUrl = 'https://calendar.google.com/calendar/u/0/r/eventedit?text=Rappel&dates=' ~ startDate ~ '/' ~ endDate ~ '&details=' ~ description|url_encode %}

                            <a href=\"{{ googleCalendarUrl }}\" target=\"_blank\" class=\"btn btn-success\">Ajouter au Google Agenda</a>
                        {% else %}
                            <span class=\"text-danger\">Date et heure manquantes</span>
                        {% endif %}


                    {% elseif lead.getPlannings()|length > 0 %}
                        {% if lead.getCommentaire() == 'rendez vous' %}
                            <a href=\"{{ path('app_planning_for_lead', {'leadId': lead.id}) }}\" class=\"btn btn-primary\">Voir le rendez-vous</a>
                        {% endif %}
                    {% else %}
                        <span class=\"text-muted\" style=\"color: grey!important;\">Aucune action</span>
                    {% endif %}

                </td>

            </tr>
            {% endif %}
        {% else %}
            <tr>
                <td colspan=\"10\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>


    <script>


        document.querySelectorAll('[contenteditable]').forEach(cell => {
            cell.addEventListener('dblclick', function() {
                this.setAttribute('contenteditable', 'true');
                this.focus();
            });

            cell.addEventListener('blur', function() {
                this.setAttribute('contenteditable', 'false');
                let leadId = this.closest('tr').dataset.leadId;
                let field = this.dataset.field;
                let value = this.textContent;
                let csrfToken = document.querySelector('input[name=\"_token\"]').value;

                console.log('Sending data:', { field, value });

                fetch(`/lead/\${leadId}/edit-inline-user-2`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        field: field,
                        value: value
                    })
                })
                    .then(response => {
                        if (!response.ok) {
                            alert('Failed to update field');
                        }
                    });
            });
        });

        document.querySelectorAll('.telepro').forEach(span => {
            span.addEventListener('dblclick', function() {
                let select = this.nextElementSibling;
                select.classList.remove('d-none');
                select.focus();
                this.classList.add('d-none');
            });
        });

        document.querySelectorAll('.telepro-select').forEach(select => {
            select.addEventListener('change', function() {
                let span = this.previousElementSibling;
                let leadId = this.closest('tr').dataset.leadId;
                let field = 'telepro';
                let value = this.value;
                let csrfToken = document.querySelector('input[name=\"_token\"]').value;

                console.log('Sending data:', { field, value });

                fetch(`/lead/\${leadId}/edit-inline-user-2`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        field: field,
                        value: value
                    })
                })
                    .then(response => {
                        if (!response.ok) {
                            alert('Failed to update field');
                        } else {
                            span.textContent = this.options[this.selectedIndex].textContent;
                            span.classList.remove('d-none');
                            this.classList.add('d-none');
                        }
                    });
            });
        });

        document.querySelectorAll('.commentaire-display').forEach(span => {
            span.addEventListener('dblclick', function() {
                let select = this.nextElementSibling;
                let textarea = select.nextElementSibling;
                let rappelForm = textarea.nextElementSibling;
                select.classList.remove('d-none');
                textarea.classList.remove('d-none');
                rappelForm.classList.add('d-none');
                select.focus();
                this.classList.add('d-none');
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            let leadId = localStorage.getItem('redirectToPlanning');
            if (leadId) {
                localStorage.removeItem('redirectToPlanning'); // Nettoie l'indicateur
                console.log('Lead ID found:', leadId); // Débogage
                setTimeout(function() {
                    // Redirection avec pré-remplissage du formulaire
                    let redirectUrl = \"{{ path('app_planning_new_lead', { 'leadId': 'REPLACE_LEAD_ID' }) }}\".replace('REPLACE_LEAD_ID', leadId);
                    console.log('Redirecting to:', redirectUrl); // Débogage
                    window.location.href = redirectUrl;
                }, 2000);  // Délai de 2 secondes avant la redirection
            }
        });


        document.querySelectorAll('.commentaire-select').forEach(select => {
            select.addEventListener('change', function() {
                let span = this.previousElementSibling;
                let textarea = this.nextElementSibling;
                let rappelForm = textarea.nextElementSibling;
                let leadId = this.closest('tr').dataset.leadId;
                let field = 'commentaire';
                let value = this.value;
                let csrfToken = document.querySelector('input[name=\"_token\"]').value;

                console.log('Sending data:', { field, value });

                fetch(`/lead/\${leadId}/edit-inline-user-2`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        field: field,
                        value: value
                    })
                })
                    .then(response => {
                        if (!response.ok) {
                            alert('Failed to update field');
                        } else {
                            span.textContent = value;
                            textarea.value = value;
                            if (value === 'rappel') {
                                rappelForm.classList.remove('d-none');
                            } else {
                                rappelForm.classList.add('d-none');
                            }
                            span.classList.remove('d-none');
                            this.classList.add('d-none');
                            textarea.classList.add('d-none');

                            if (value === 'rendez vous') {
                                localStorage.setItem('redirectToPlanning', leadId);  // Stocker l'ID du lead
                            } else {
                                localStorage.removeItem('redirectToPlanning');
                            }

                            if(value === 'rappel') {    // Recharge la page après 5 secondes
                                setTimeout(function () {
                                    location.reload();
                                }, 10000);
                            }

                            else
                            {
                                setTimeout(function() {
                                    location.reload();    }, 100);
                            } // Recharge la page après 100 ms
                        }
                    });
            });
        });





        document.querySelectorAll('.commentaire-text').forEach(textarea => {
            textarea.addEventListener('blur', function() {
                let span = this.previousElementSibling;
                let select = span.previousElementSibling;
                let rappelForm = this.nextElementSibling;
                let leadId = this.closest('tr').dataset.leadId;
                let field = 'commentaire';
                let value = this.value;
                let csrfToken = document.querySelector('input[name=\"_token\"]').value;

                console.log('Sending data:', { field, value });

                fetch(`/lead/\${leadId}/edit-inline-user-2`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        field: field,
                        value: value
                    })
                })
                    .then(response => {
                        if (!response.ok) {
                            alert('Failed to update field');
                        } else {
                            span.textContent = value;
                            select.value = value;
                            span.classList.remove('d-none');
                            select.classList.add('d-none');
                            this.classList.add('d-none');
                            rappelForm.classList.add('d-none');
                        }
                    });
            });
        });

        document.querySelectorAll('.save-rappel-btn').forEach(button => {
            button.addEventListener('click', function() {
                let rappelForm = this.closest('.rappel-form');
                let leadId = this.closest('tr').dataset.leadId;
                let rappelDate = rappelForm.querySelector('#rappel-date').value;
                let rappelTime = rappelForm.querySelector('#rappel-time').value;
                let csrfToken = document.querySelector('input[name=\"_token\"]').value;

                if (rappelDate && rappelTime) {
                    let rappelValue = `rappel \${rappelDate} \${rappelTime}`;

                    fetch(`/lead/\${leadId}/edit-inline-user-2`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken
                        },
                        body: JSON.stringify({
                            field: 'commentaire',
                            value: rappelValue
                        })
                    })
                        .then(response => {
                            if (!response.ok) {
                                alert('Failed to update field');
                            } else {
                                rappelForm.classList.add('d-none');
                                // Mettez à jour l'affichage pour refléter le changement
                                document.querySelector(`[data-lead-id=\"\${leadId}\"] .commentaire-display`).textContent = rappelValue;
                            }
                        });
                } else {
                    alert('Veuillez entrer une date et une heure valides.');
                }
            });
        });






    </script>
{% endblock %}
", "lead/leads.html.twig", "/Applications/MAMP/htdocs/jsenergie/CRM_project_1/templates/lead/leads.html.twig");
    }
}

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

/* lead/historique.html.twig */
class __TwigTemplate_7bdee5e0e25251553527b4e2b789a78e extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lead/historique.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lead/historique.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lead/historique.html.twig", 1);
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
        yield "    <!-- Place for additional stylesheets -->
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
        yield "<br>
    <h1 style=\"text-align: center;\">Historique de Lead</h1>
    <br>


    <table class=\"table\">
        <thead>
            <tr>
                <th>Id_enregistrement</th>
                <th>Heure_creation</th>
                <th>Nom_complet</th>
                <th>Telephone</th>
                <th>Chauffage</th>
                <th>Departement</th>
                <th>Commentaire</th>
                <th>Télépro</th>
                <th>Ajouter au Google Agenda</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 38, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["lead"]) {
            // line 39
            yield "            <tr data-lead-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "id", [], "any", false, false, false, 39), "html", null, true);
            yield "\" >
                <td contenteditable=\"true\" data-field=\"idEnregistrement\" style=\"";
            // line 40
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 40) == "faux numero")) {
                yield " background-color: #ff00ff; color: #ffffff; ";
            }
            yield " ";
            if ((is_string($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 40)) && is_string($__internal_compile_1 = "pas interesser") && str_starts_with($__internal_compile_0, $__internal_compile_1))) {
                yield "  background-color: #FF0000; color: #ffffff; ";
            }
            yield " ";
            if ((is_string($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 40)) && is_string($__internal_compile_3 = "rappel") && str_starts_with($__internal_compile_2, $__internal_compile_3))) {
                yield "  background-color: #87CEEB; color: #ffffff; ";
            }
            yield " ";
            if ((is_string($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 40)) && is_string($__internal_compile_5 = "rendez vous") && str_starts_with($__internal_compile_4, $__internal_compile_5))) {
                yield "  background-color: #00FF00; color: #ffffff; ";
            }
            yield " ";
            if ((is_string($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 40)) && is_string($__internal_compile_7 = "NRP") && str_starts_with($__internal_compile_6, $__internal_compile_7))) {
                yield " background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 40)) && is_string($__internal_compile_9 = "NRP X 2") && str_starts_with($__internal_compile_8, $__internal_compile_9))) {
                yield " background-color: #fdfd96; color: #000000; ";
            }
            yield " ";
            if ((is_string($__internal_compile_10 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 40)) && is_string($__internal_compile_11 = "NRP X 3") && str_starts_with($__internal_compile_10, $__internal_compile_11))) {
                yield " background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_12 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 40)) && is_string($__internal_compile_13 = "NRP X 4") && str_starts_with($__internal_compile_12, $__internal_compile_13))) {
                yield "  background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 40)) && is_string($__internal_compile_15 = "NRP += 5") && str_starts_with($__internal_compile_14, $__internal_compile_15))) {
                yield "  background-color: #FFA500; color: #ffffff; ";
            }
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "idEnregistrement", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
                <td contenteditable=\"true\" data-field=\"heureCreation\" style=\"";
            // line 41
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 41) == "faux numero")) {
                yield " background-color: #ff00ff; color: #ffffff; ";
            }
            yield " ";
            if ((is_string($__internal_compile_16 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 41)) && is_string($__internal_compile_17 = "pas interesser") && str_starts_with($__internal_compile_16, $__internal_compile_17))) {
                yield "  background-color: #FF0000; color: #ffffff; ";
            }
            if ((is_string($__internal_compile_18 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 41)) && is_string($__internal_compile_19 = "rappel") && str_starts_with($__internal_compile_18, $__internal_compile_19))) {
                yield "  background-color: #87CEEB; color: #ffffff; ";
            }
            yield " ";
            if ((is_string($__internal_compile_20 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 41)) && is_string($__internal_compile_21 = "rendez vous") && str_starts_with($__internal_compile_20, $__internal_compile_21))) {
                yield "  background-color: #00FF00; color: #ffffff; ";
            }
            if ((is_string($__internal_compile_22 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 41)) && is_string($__internal_compile_23 = "NRP") && str_starts_with($__internal_compile_22, $__internal_compile_23))) {
                yield " background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_24 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 41)) && is_string($__internal_compile_25 = "NRP X 2") && str_starts_with($__internal_compile_24, $__internal_compile_25))) {
                yield " background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_26 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 41)) && is_string($__internal_compile_27 = "NRP X 3") && str_starts_with($__internal_compile_26, $__internal_compile_27))) {
                yield " background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_28 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 41)) && is_string($__internal_compile_29 = "NRP X 4") && str_starts_with($__internal_compile_28, $__internal_compile_29))) {
                yield "  background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_30 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 41)) && is_string($__internal_compile_31 = "NRP += 5") && str_starts_with($__internal_compile_30, $__internal_compile_31))) {
                yield "  background-color: #FFA500; color: #ffffff; ";
            }
            yield "\">";
            ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "heureCreation", [], "any", false, false, false, 41)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "heureCreation", [], "any", false, false, false, 41), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
            yield "</td>
                <td contenteditable=\"true\" data-field=\"nomComplet\" style=\"";
            // line 42
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 42) == "faux numero")) {
                yield " background-color: #ff00ff; color: #ffffff; ";
            }
            yield " ";
            if ((is_string($__internal_compile_32 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 42)) && is_string($__internal_compile_33 = "pas interesser") && str_starts_with($__internal_compile_32, $__internal_compile_33))) {
                yield "  background-color: #FF0000; color: #ffffff; ";
            }
            if ((is_string($__internal_compile_34 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 42)) && is_string($__internal_compile_35 = "rappel") && str_starts_with($__internal_compile_34, $__internal_compile_35))) {
                yield "  background-color: #87CEEB; color: #ffffff; ";
            }
            if ((is_string($__internal_compile_36 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 42)) && is_string($__internal_compile_37 = "rendez vous") && str_starts_with($__internal_compile_36, $__internal_compile_37))) {
                yield "  background-color: #00FF00; color: #ffffff; ";
            }
            if ((is_string($__internal_compile_38 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 42)) && is_string($__internal_compile_39 = "NRP") && str_starts_with($__internal_compile_38, $__internal_compile_39))) {
                yield " background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_40 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 42)) && is_string($__internal_compile_41 = "NRP X 2") && str_starts_with($__internal_compile_40, $__internal_compile_41))) {
                yield " background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_42 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 42)) && is_string($__internal_compile_43 = "NRP X 3") && str_starts_with($__internal_compile_42, $__internal_compile_43))) {
                yield " background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_44 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 42)) && is_string($__internal_compile_45 = "NRP X 4") && str_starts_with($__internal_compile_44, $__internal_compile_45))) {
                yield "  background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_46 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 42)) && is_string($__internal_compile_47 = "NRP += 5") && str_starts_with($__internal_compile_46, $__internal_compile_47))) {
                yield "  background-color: #FFA500; color: #ffffff; ";
            }
            yield " \">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "nomComplet", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                <td contenteditable=\"true\" data-field=\"telephone\" style=\"";
            // line 43
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 43) == "faux numero")) {
                yield " background-color: #ff00ff; color: #ffffff; ";
            }
            yield " ";
            if ((is_string($__internal_compile_48 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 43)) && is_string($__internal_compile_49 = "pas interesser") && str_starts_with($__internal_compile_48, $__internal_compile_49))) {
                yield " background-color: #FF0000; color: #ffffff; ";
            }
            if ((is_string($__internal_compile_50 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 43)) && is_string($__internal_compile_51 = "rappel") && str_starts_with($__internal_compile_50, $__internal_compile_51))) {
                yield "  background-color: #87CEEB; color: #ffffff; ";
            }
            if ((is_string($__internal_compile_52 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 43)) && is_string($__internal_compile_53 = "rendez vous") && str_starts_with($__internal_compile_52, $__internal_compile_53))) {
                yield "  background-color: #00FF00; color: #ffffff; ";
            }
            if ((is_string($__internal_compile_54 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 43)) && is_string($__internal_compile_55 = "NRP") && str_starts_with($__internal_compile_54, $__internal_compile_55))) {
                yield " background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_56 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 43)) && is_string($__internal_compile_57 = "NRP X 2") && str_starts_with($__internal_compile_56, $__internal_compile_57))) {
                yield " background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_58 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 43)) && is_string($__internal_compile_59 = "NRP X 3") && str_starts_with($__internal_compile_58, $__internal_compile_59))) {
                yield " background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_60 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 43)) && is_string($__internal_compile_61 = "NRP X 4") && str_starts_with($__internal_compile_60, $__internal_compile_61))) {
                yield "  background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_62 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 43)) && is_string($__internal_compile_63 = "NRP += 5") && str_starts_with($__internal_compile_62, $__internal_compile_63))) {
                yield "  background-color: #FFA500; color: #ffffff; ";
            }
            yield " \">0";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "telephone", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                <td contenteditable=\"true\" data-field=\"chauffage\" style=\"";
            // line 44
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 44) == "faux numero")) {
                yield " background-color: #ff00ff; color: #ffffff; ";
            }
            yield " ";
            if ((is_string($__internal_compile_64 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 44)) && is_string($__internal_compile_65 = "pas interesser") && str_starts_with($__internal_compile_64, $__internal_compile_65))) {
                yield "  background-color: #FF0000; color: #ffffff; ";
            }
            if ((is_string($__internal_compile_66 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 44)) && is_string($__internal_compile_67 = "rappel") && str_starts_with($__internal_compile_66, $__internal_compile_67))) {
                yield "  background-color: #87CEEB; color: #ffffff; ";
            }
            if ((is_string($__internal_compile_68 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 44)) && is_string($__internal_compile_69 = "rendez vous") && str_starts_with($__internal_compile_68, $__internal_compile_69))) {
                yield "  background-color: #00FF00; color: #ffffff; ";
            }
            if ((is_string($__internal_compile_70 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 44)) && is_string($__internal_compile_71 = "NRP") && str_starts_with($__internal_compile_70, $__internal_compile_71))) {
                yield " background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_72 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 44)) && is_string($__internal_compile_73 = "NRP X 2") && str_starts_with($__internal_compile_72, $__internal_compile_73))) {
                yield " background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_74 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 44)) && is_string($__internal_compile_75 = "NRP X 3") && str_starts_with($__internal_compile_74, $__internal_compile_75))) {
                yield " background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_76 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 44)) && is_string($__internal_compile_77 = "NRP X 4") && str_starts_with($__internal_compile_76, $__internal_compile_77))) {
                yield "  background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_78 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 44)) && is_string($__internal_compile_79 = "NRP += 5") && str_starts_with($__internal_compile_78, $__internal_compile_79))) {
                yield "  background-color: #FFA500; color: #ffffff; ";
            }
            yield " \">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "chauffage", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                <td contenteditable=\"true\" data-field=\"departement\" style=\"";
            // line 45
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 45) == "faux numero")) {
                yield " background-color: #ff00ff; color: #ffffff; ";
            }
            yield " ";
            if ((is_string($__internal_compile_80 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 45)) && is_string($__internal_compile_81 = "pas interesser") && str_starts_with($__internal_compile_80, $__internal_compile_81))) {
                yield "  background-color: #FF0000; color: #ffffff; ";
            }
            if ((is_string($__internal_compile_82 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 45)) && is_string($__internal_compile_83 = "rappel") && str_starts_with($__internal_compile_82, $__internal_compile_83))) {
                yield "  background-color: #87CEEB; color: #ffffff; ";
            }
            if ((is_string($__internal_compile_84 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 45)) && is_string($__internal_compile_85 = "rendez vous") && str_starts_with($__internal_compile_84, $__internal_compile_85))) {
                yield "  background-color: #00FF00; color: #ffffff; ";
            }
            if ((is_string($__internal_compile_86 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 45)) && is_string($__internal_compile_87 = "NRP") && str_starts_with($__internal_compile_86, $__internal_compile_87))) {
                yield " background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_88 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 45)) && is_string($__internal_compile_89 = "NRP X 2") && str_starts_with($__internal_compile_88, $__internal_compile_89))) {
                yield " background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_90 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 45)) && is_string($__internal_compile_91 = "NRP X 3") && str_starts_with($__internal_compile_90, $__internal_compile_91))) {
                yield " background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_92 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 45)) && is_string($__internal_compile_93 = "NRP X 4") && str_starts_with($__internal_compile_92, $__internal_compile_93))) {
                yield "  background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_94 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 45)) && is_string($__internal_compile_95 = "NRP += 5") && str_starts_with($__internal_compile_94, $__internal_compile_95))) {
                yield "  background-color: #FFA500; color: #ffffff; ";
            }
            yield " \">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "departement", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                <td style=\"";
            // line 46
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 46) == "faux numero")) {
                yield " background-color: #ff00ff; color: #ffffff; ";
            }
            yield " ";
            if ((is_string($__internal_compile_96 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 46)) && is_string($__internal_compile_97 = "pas interesser") && str_starts_with($__internal_compile_96, $__internal_compile_97))) {
                yield "  background-color: #FF0000; color: #ffffff; ";
            }
            if ((is_string($__internal_compile_98 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 46)) && is_string($__internal_compile_99 = "rappel") && str_starts_with($__internal_compile_98, $__internal_compile_99))) {
                yield "  background-color: #87CEEB; color: #ffffff; ";
            }
            if ((is_string($__internal_compile_100 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 46)) && is_string($__internal_compile_101 = "rendez vous") && str_starts_with($__internal_compile_100, $__internal_compile_101))) {
                yield "  background-color: #00FF00; color: #ffffff; ";
            }
            if ((is_string($__internal_compile_102 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 46)) && is_string($__internal_compile_103 = "NRP") && str_starts_with($__internal_compile_102, $__internal_compile_103))) {
                yield " background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_104 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 46)) && is_string($__internal_compile_105 = "NRP X 2") && str_starts_with($__internal_compile_104, $__internal_compile_105))) {
                yield " background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_106 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 46)) && is_string($__internal_compile_107 = "NRP X 3") && str_starts_with($__internal_compile_106, $__internal_compile_107))) {
                yield " background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_108 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 46)) && is_string($__internal_compile_109 = "NRP X 4") && str_starts_with($__internal_compile_108, $__internal_compile_109))) {
                yield "  background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_110 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 46)) && is_string($__internal_compile_111 = "NRP += 5") && str_starts_with($__internal_compile_110, $__internal_compile_111))) {
                yield "  background-color: #FFA500; color: #ffffff; ";
            }
            yield " \">
                    <span class=\"commentaire-display\" data-field=\"commentaire\">";
            // line 47
            ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 47)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 47), "html", null, true)) : (yield "N/A"));
            yield "</span>
                    <select class=\"commentaire-select d-none\">
                        <option value=\"\">Choisir un commentaire</option>
                        <option value=\"faux numero\" ";
            // line 50
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 50) == "faux numero")) {
                yield "selected";
            }
            yield ">faux numero</option>
                        <option value=\"rappel\" ";
            // line 51
            if ((is_string($__internal_compile_112 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 51)) && is_string($__internal_compile_113 = "rappel") && str_starts_with($__internal_compile_112, $__internal_compile_113))) {
                yield "selected";
            }
            yield ">rappel</option>
                        <option value=\"pas interesser\" ";
            // line 52
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 52) == "pas interesser")) {
                yield "selected";
            }
            yield ">pas interesser</option>
                        <option value=\"rendez vous\" ";
            // line 53
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 53) == "rendez vous")) {
                yield "selected";
            }
            yield ">rendez vous</option>
                        <option value=\"NRP\" ";
            // line 54
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 54) == "NRP")) {
                yield "selected";
            }
            yield ">NRP</option>
                        <option value=\"NRP X 2\" ";
            // line 55
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 55) == "NRP X 2")) {
                yield "selected";
            }
            yield ">NRP X 2</option>
                        <option value=\"NRP X 3\" ";
            // line 56
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 56) == "NRP X 3")) {
                yield "selected";
            }
            yield ">NRP X 3</option>
                        <option value=\"NRP X 4\" ";
            // line 57
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 57) == "NRP X 4")) {
                yield "selected";
            }
            yield ">NRP X 4</option>
                        <option value=\"NRP += 5\" ";
            // line 58
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 58) == "NRP += 5")) {
                yield "selected";
            }
            yield ">NRP += 5</option>
                    </select>
                    <textarea class=\"commentaire-text d-none\" rows=\"3\">";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 60), "html", null, true);
            yield "</textarea>
                    <!-- Formulaire pour choisir une date et une heure, caché par défaut -->
                    <div class=\"rappel-form d-none\">
                        <label for=\"rappel-date\">Date:</label>
                        <input type=\"date\" id=\"rappel-date\" name=\"rappelDate\">
                        <label for=\"rappel-time\">Heure:</label>
                        <input type=\"time\" id=\"rappel-time\" name=\"rappelTime\">
                        <button type=\"button\" class=\"save-rappel-btn\">Save</button>
                    </div>
                </td>
                <td style=\"";
            // line 70
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 70) == "faux numero")) {
                yield " background-color: #ff00ff; color: #ffffff; ";
            }
            yield " ";
            if ((is_string($__internal_compile_114 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 70)) && is_string($__internal_compile_115 = "pas interesser") && str_starts_with($__internal_compile_114, $__internal_compile_115))) {
                yield " background-color: #FF0000; color: #ffffff; ";
            }
            yield " ";
            if ((is_string($__internal_compile_116 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 70)) && is_string($__internal_compile_117 = "rappel") && str_starts_with($__internal_compile_116, $__internal_compile_117))) {
                yield "  background-color: #87CEEB; color: #ffffff; ";
            }
            yield " ";
            if ((is_string($__internal_compile_118 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 70)) && is_string($__internal_compile_119 = "rendez vous") && str_starts_with($__internal_compile_118, $__internal_compile_119))) {
                yield "  background-color: #00FF00; color: #ffffff; ";
            }
            if ((is_string($__internal_compile_120 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 70)) && is_string($__internal_compile_121 = "NRP") && str_starts_with($__internal_compile_120, $__internal_compile_121))) {
                yield " background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_122 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 70)) && is_string($__internal_compile_123 = "NRP X 2") && str_starts_with($__internal_compile_122, $__internal_compile_123))) {
                yield " background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_124 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 70)) && is_string($__internal_compile_125 = "NRP X 3") && str_starts_with($__internal_compile_124, $__internal_compile_125))) {
                yield " background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_126 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 70)) && is_string($__internal_compile_127 = "NRP X 4") && str_starts_with($__internal_compile_126, $__internal_compile_127))) {
                yield "  background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_128 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 70)) && is_string($__internal_compile_129 = "NRP += 5") && str_starts_with($__internal_compile_128, $__internal_compile_129))) {
                yield "  background-color: #FFA500; color: #ffffff; ";
            }
            yield " \">
                    <span class=\"telepro\" data-field=\"telepro\">";
            // line 71
            ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "users", [], "any", false, false, false, 71)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "users", [], "any", false, false, false, 71), "prenom", [], "any", false, false, false, 71), "html", null, true)) : (yield "N/A"));
            yield "</span>
                    <select class=\"telepro-select d-none\">
                        <option value=\"\">Choisir à qui assigner la lead</option>
                        ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 74, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 75
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 75), "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "users", [], "any", false, false, false, 75) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "users", [], "any", false, false, false, 75), "id", [], "any", false, false, false, 75) == CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 75)))) {
                    yield "selected";
                }
                yield ">
                                ";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 76), "html", null, true);
                yield "
                            </option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            yield "                    </select>
                </td>

                <td style=\"";
            // line 82
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 82) == "faux numero")) {
                yield " background-color: #ff00ff; color: #ffffff; ";
            }
            yield " ";
            if ((is_string($__internal_compile_130 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 82)) && is_string($__internal_compile_131 = "pas interesser") && str_starts_with($__internal_compile_130, $__internal_compile_131))) {
                yield " background-color: #FF0000; color: #ffffff; ";
            }
            if ((is_string($__internal_compile_132 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 82)) && is_string($__internal_compile_133 = "rappel") && str_starts_with($__internal_compile_132, $__internal_compile_133))) {
                yield "  background-color: #87CEEB; color: #ffffff; ";
            }
            if ((is_string($__internal_compile_134 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 82)) && is_string($__internal_compile_135 = "rendez vous") && str_starts_with($__internal_compile_134, $__internal_compile_135))) {
                yield "  background-color: #00FF00; color: #ffffff; ";
            }
            if ((is_string($__internal_compile_136 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 82)) && is_string($__internal_compile_137 = "NRP") && str_starts_with($__internal_compile_136, $__internal_compile_137))) {
                yield " background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_138 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 82)) && is_string($__internal_compile_139 = "NRP X 2") && str_starts_with($__internal_compile_138, $__internal_compile_139))) {
                yield " background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_140 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 82)) && is_string($__internal_compile_141 = "NRP X 3") && str_starts_with($__internal_compile_140, $__internal_compile_141))) {
                yield " background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_142 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 82)) && is_string($__internal_compile_143 = "NRP X 4") && str_starts_with($__internal_compile_142, $__internal_compile_143))) {
                yield "  background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_144 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 82)) && is_string($__internal_compile_145 = "NRP += 5") && str_starts_with($__internal_compile_144, $__internal_compile_145))) {
                yield "  background-color: #FFA500; color: #ffffff; ";
            }
            yield " \">
                    ";
            // line 83
            if ((is_string($__internal_compile_146 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 83)) && is_string($__internal_compile_147 = "rappel") && str_starts_with($__internal_compile_146, $__internal_compile_147))) {
                // line 84
                yield "                        ";
                $context["parts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 84), " ", 2);
                // line 85
                yield "                        ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 85, $this->source); })())) > 1)) {
                    // line 86
                    yield "                            ";
                    $context["dateTime"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 86, $this->source); })()), 1, [], "array", false, false, false, 86);
                    // line 87
                    yield "
                            ";
                    // line 89
                    yield "                            ";
                    $context["startDate"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["dateTime"]) || array_key_exists("dateTime", $context) ? $context["dateTime"] : (function () { throw new RuntimeError('Variable "dateTime" does not exist.', 89, $this->source); })()), "YmdTHi00");
                    // line 90
                    yield "                            ";
                    $context["endDate"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate((isset($context["dateTime"]) || array_key_exists("dateTime", $context) ? $context["dateTime"] : (function () { throw new RuntimeError('Variable "dateTime" does not exist.', 90, $this->source); })()), "+30 minutes"), "YmdTHi00");
                    // line 91
                    yield "
                            ";
                    // line 93
                    yield "                            ";
                    $context["startDateFormatted"] = Twig\Extension\CoreExtension::replace((isset($context["startDate"]) || array_key_exists("startDate", $context) ? $context["startDate"] : (function () { throw new RuntimeError('Variable "startDate" does not exist.', 93, $this->source); })()), ["UTC" => "T"]);
                    // line 94
                    yield "                            ";
                    $context["endDateFormatted"] = Twig\Extension\CoreExtension::replace((isset($context["endDate"]) || array_key_exists("endDate", $context) ? $context["endDate"] : (function () { throw new RuntimeError('Variable "endDate" does not exist.', 94, $this->source); })()), ["UTC" => "T"]);
                    // line 95
                    yield "
                            ";
                    // line 96
                    $context["description"] = ((("Rappel pour " . CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "nomComplet", [], "any", false, false, false, 96)) . ", Téléphone: 0") . CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "telephone", [], "any", false, false, false, 96));
                    // line 97
                    yield "
                            ";
                    // line 99
                    yield "                            ";
                    $context["googleCalendarUrl"] = ((((("https://calendar.google.com/calendar/u/0/r/eventedit?text=Rappel&dates=" . (isset($context["startDateFormatted"]) || array_key_exists("startDateFormatted", $context) ? $context["startDateFormatted"] : (function () { throw new RuntimeError('Variable "startDateFormatted" does not exist.', 99, $this->source); })())) . "/") . (isset($context["endDateFormatted"]) || array_key_exists("endDateFormatted", $context) ? $context["endDateFormatted"] : (function () { throw new RuntimeError('Variable "endDateFormatted" does not exist.', 99, $this->source); })())) . "&details=") . Twig\Extension\CoreExtension::urlencode((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 99, $this->source); })())));
                    // line 100
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["googleCalendarUrl"]) || array_key_exists("googleCalendarUrl", $context) ? $context["googleCalendarUrl"] : (function () { throw new RuntimeError('Variable "googleCalendarUrl" does not exist.', 100, $this->source); })()), "html", null, true);
                    yield "\" target=\"_blank\" class=\"btn btn-success\">Ajouter au Google Agenda</a>
                        ";
                } else {
                    // line 102
                    yield "                            <span class=\"text-danger\">Date et heure manquantes</span>
                        ";
                }
                // line 104
                yield "
                    ";
            } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 105
$context["lead"], "getPlannings", [], "method", false, false, false, 105)) > 0)) {
                // line 106
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "getCommentaire", [], "method", false, false, false, 106) == "rendez vous")) {
                    // line 107
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planning_for_lead", ["leadId" => CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "id", [], "any", false, false, false, 107)]), "html", null, true);
                    yield "\" class=\"btn btn-primary\">Voir le rendez-vous</a>
                        ";
                }
                // line 109
                yield "                    ";
            } else {
                // line 110
                yield "                        <span class=\"text-muted\" style=\"color: grey!important; \">Aucune action</span>
                    ";
            }
            // line 112
            yield "

                </td>
                <td style=\"";
            // line 115
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 115) == "faux numero")) {
                yield " background-color: #ff00ff; color: #ffffff; ";
            }
            yield " ";
            if ((is_string($__internal_compile_148 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 115)) && is_string($__internal_compile_149 = "pas interesser") && str_starts_with($__internal_compile_148, $__internal_compile_149))) {
                yield "  background-color: #FF0000; color: #ffffff; ";
            }
            if ((is_string($__internal_compile_150 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 115)) && is_string($__internal_compile_151 = "rappel") && str_starts_with($__internal_compile_150, $__internal_compile_151))) {
                yield "  background-color: #87CEEB; color: #ffffff; ";
            }
            if ((is_string($__internal_compile_152 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 115)) && is_string($__internal_compile_153 = "rendez vous") && str_starts_with($__internal_compile_152, $__internal_compile_153))) {
                yield "  background-color: #00FF00; color: #ffffff; ";
            }
            if ((is_string($__internal_compile_154 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 115)) && is_string($__internal_compile_155 = "NRP") && str_starts_with($__internal_compile_154, $__internal_compile_155))) {
                yield " background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_156 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 115)) && is_string($__internal_compile_157 = "NRP X 2") && str_starts_with($__internal_compile_156, $__internal_compile_157))) {
                yield " background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_158 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 115)) && is_string($__internal_compile_159 = "NRP X 3") && str_starts_with($__internal_compile_158, $__internal_compile_159))) {
                yield " background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_160 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 115)) && is_string($__internal_compile_161 = "NRP X 4") && str_starts_with($__internal_compile_160, $__internal_compile_161))) {
                yield "  background-color: #fdfd96; color: #000000; ";
            }
            if ((is_string($__internal_compile_162 = CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "commentaire", [], "any", false, false, false, 115)) && is_string($__internal_compile_163 = "NRP += 5") && str_starts_with($__internal_compile_162, $__internal_compile_163))) {
                yield "  background-color: #FFA500; color: #ffffff; ";
            }
            yield " \">
                    <form method=\"post\" action=\"";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lead_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "id", [], "any", false, false, false, 116)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "id", [], "any", false, false, false, 117))), "html", null, true);
            yield "\">
                        <button class=\"btn btn-danger\">Delete</button>
                    </form>

                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 124
            yield "            <tr>
                <td colspan=\"10\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lead'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        yield "        </tbody>
    </table>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 134
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 135
        yield "    <script>
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

                fetch(`/lead/\${leadId}/edit-inline-user`, {
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

                fetch(`/lead/\${leadId}/edit-inline-user`, {
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

                fetch(`/lead/\${leadId}/edit-inline-user`, {
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

                            // Recharge la page
                            location.reload();

                        }
                    });
            });
        });

        ";
        // line 278
        yield "        ";
        // line 279
        yield "        ";
        // line 280
        yield "        ";
        // line 281
        yield "        ";
        // line 282
        yield "        ";
        // line 283
        yield "        ";
        // line 284
        yield "        ";
        // line 285
        yield "        ";
        // line 286
        yield "        ";
        // line 287
        yield "
        document.addEventListener('DOMContentLoaded', function() {
            let leadId = localStorage.getItem('redirectToPlanning');
            if (leadId) {
                localStorage.removeItem('redirectToPlanning'); // Nettoie l'indicateur
                setTimeout(function() {
                    // Redirection avec pré-remplissage du formulaire
                    let redirectUrl = \"";
        // line 294
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planning_new_lead", ["leadId" => "REPLACE_LEAD_ID"]);
        yield "\".replace('REPLACE_LEAD_ID', leadId);
                    window.location.href = redirectUrl;
                }, 2000);  // Délai de 2 secondes avant la redirection
            }
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

                fetch(`/lead/\${leadId}/edit-inline-user`, {
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
                            location.reload();
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

                let rappelValue = `rappel \${rappelDate} \${rappelTime}`;

                fetch(`/lead/\${leadId}/edit-inline-user`, {
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
                            location.reload();
                        }
                    });
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
        return "lead/historique.html.twig";
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
        return array (  887 => 294,  878 => 287,  876 => 286,  874 => 285,  872 => 284,  870 => 283,  868 => 282,  866 => 281,  864 => 280,  862 => 279,  860 => 278,  716 => 135,  706 => 134,  691 => 128,  682 => 124,  670 => 117,  666 => 116,  635 => 115,  630 => 112,  626 => 110,  623 => 109,  617 => 107,  614 => 106,  612 => 105,  609 => 104,  605 => 102,  599 => 100,  596 => 99,  593 => 97,  591 => 96,  588 => 95,  585 => 94,  582 => 93,  579 => 91,  576 => 90,  573 => 89,  570 => 87,  567 => 86,  564 => 85,  561 => 84,  559 => 83,  528 => 82,  523 => 79,  514 => 76,  505 => 75,  501 => 74,  495 => 71,  462 => 70,  449 => 60,  442 => 58,  436 => 57,  430 => 56,  424 => 55,  418 => 54,  412 => 53,  406 => 52,  400 => 51,  394 => 50,  388 => 47,  357 => 46,  324 => 45,  291 => 44,  258 => 43,  225 => 42,  191 => 41,  154 => 40,  149 => 39,  144 => 38,  121 => 17,  111 => 16,  92 => 5,  82 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Lead index{% endblock %}
    {% block stylesheets %}
    <!-- Place for additional stylesheets -->
    <style>
    .highlight-fluo {
    background-color: #ff00ff; /* Rose fluo */
    color: #ffffff; /* Texte blanc pour le contraste */
}

    </style>
    {% endblock %}


{% block body %}
<br>
    <h1 style=\"text-align: center;\">Historique de Lead</h1>
    <br>


    <table class=\"table\">
        <thead>
            <tr>
                <th>Id_enregistrement</th>
                <th>Heure_creation</th>
                <th>Nom_complet</th>
                <th>Telephone</th>
                <th>Chauffage</th>
                <th>Departement</th>
                <th>Commentaire</th>
                <th>Télépro</th>
                <th>Ajouter au Google Agenda</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for lead in leads %}
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
                    <!-- Formulaire pour choisir une date et une heure, caché par défaut -->
                    <div class=\"rappel-form d-none\">
                        <label for=\"rappel-date\">Date:</label>
                        <input type=\"date\" id=\"rappel-date\" name=\"rappelDate\">
                        <label for=\"rappel-time\">Heure:</label>
                        <input type=\"time\" id=\"rappel-time\" name=\"rappelTime\">
                        <button type=\"button\" class=\"save-rappel-btn\">Save</button>
                    </div>
                </td>
                <td style=\"{% if lead.commentaire == 'faux numero' %} background-color: #ff00ff; color: #ffffff; {% endif %} {% if lead.commentaire starts with 'pas interesser' %} background-color: #FF0000; color: #ffffff; {% endif %} {% if lead.commentaire starts with 'rappel' %}  background-color: #87CEEB; color: #ffffff; {% endif %} {% if lead.commentaire starts with 'rendez vous' %}  background-color: #00FF00; color: #ffffff; {% endif %}{% if lead.commentaire starts with 'NRP' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 2' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 3' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 4' %}  background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP += 5' %}  background-color: #FFA500; color: #ffffff; {% endif %} \">
                    <span class=\"telepro\" data-field=\"telepro\">{{ lead.users ? lead.users.prenom : 'N/A' }}</span>
                    <select class=\"telepro-select d-none\">
                        <option value=\"\">Choisir à qui assigner la lead</option>
                        {% for user in users %}
                            <option value=\"{{ user.id }}\" {% if lead.users and lead.users.id == user.id %}selected{% endif %}>
                                {{ user.prenom }}
                            </option>
                        {% endfor %}
                    </select>
                </td>

                <td style=\"{% if lead.commentaire == 'faux numero' %} background-color: #ff00ff; color: #ffffff; {% endif %} {% if lead.commentaire starts with 'pas interesser' %} background-color: #FF0000; color: #ffffff; {% endif %}{% if lead.commentaire starts with 'rappel' %}  background-color: #87CEEB; color: #ffffff; {% endif %}{% if lead.commentaire starts with 'rendez vous' %}  background-color: #00FF00; color: #ffffff; {% endif %}{% if lead.commentaire starts with 'NRP' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 2' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 3' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 4' %}  background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP += 5' %}  background-color: #FFA500; color: #ffffff; {% endif %} \">
                    {% if lead.commentaire starts with 'rappel' %}
                        {% set parts = lead.commentaire|split(' ', 2) %}
                        {% if parts|length > 1 %}
                            {% set dateTime = parts[1] %}

                            {# Création des variables de date/heure au format correct #}
                            {% set startDate = dateTime|date('Ymd\\THi00') %}
                            {% set endDate = dateTime|date_modify('+30 minutes')|date('Ymd\\THi00') %}

                            {# Remplacement de 'UTC' par 'T' dans le format des dates #}
                            {% set startDateFormatted = startDate|replace({'UTC': 'T'}) %}
                            {% set endDateFormatted = endDate|replace({'UTC': 'T'}) %}

                            {% set description = 'Rappel pour ' ~ lead.nomComplet ~ ', Téléphone: 0' ~ lead.telephone %}

                            {# Création du lien Google Agenda avec le bon format #}
                            {% set googleCalendarUrl = 'https://calendar.google.com/calendar/u/0/r/eventedit?text=Rappel&dates=' ~ startDateFormatted ~ '/' ~ endDateFormatted ~ '&details=' ~ description|url_encode %}
                            <a href=\"{{ googleCalendarUrl }}\" target=\"_blank\" class=\"btn btn-success\">Ajouter au Google Agenda</a>
                        {% else %}
                            <span class=\"text-danger\">Date et heure manquantes</span>
                        {% endif %}

                    {% elseif lead.getPlannings()|length > 0 %}
                        {% if lead.getCommentaire() == 'rendez vous' %}
                            <a href=\"{{ path('app_planning_for_lead', {'leadId': lead.id}) }}\" class=\"btn btn-primary\">Voir le rendez-vous</a>
                        {% endif %}
                    {% else %}
                        <span class=\"text-muted\" style=\"color: grey!important; \">Aucune action</span>
                    {% endif %}


                </td>
                <td style=\"{% if lead.commentaire == 'faux numero' %} background-color: #ff00ff; color: #ffffff; {% endif %} {% if lead.commentaire starts with 'pas interesser' %}  background-color: #FF0000; color: #ffffff; {% endif %}{% if lead.commentaire starts with 'rappel' %}  background-color: #87CEEB; color: #ffffff; {% endif %}{% if lead.commentaire starts with 'rendez vous' %}  background-color: #00FF00; color: #ffffff; {% endif %}{% if lead.commentaire starts with 'NRP' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 2' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 3' %} background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP X 4' %}  background-color: #fdfd96; color: #000000; {% endif %}{% if lead.commentaire starts with 'NRP += 5' %}  background-color: #FFA500; color: #ffffff; {% endif %} \">
                    <form method=\"post\" action=\"{{ path('app_lead_delete', {'id': lead.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ lead.id) }}\">
                        <button class=\"btn btn-danger\">Delete</button>
                    </form>

                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"10\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>


{% endblock %}

{% block javascripts %}
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

                fetch(`/lead/\${leadId}/edit-inline-user`, {
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

                fetch(`/lead/\${leadId}/edit-inline-user`, {
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

                fetch(`/lead/\${leadId}/edit-inline-user`, {
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

                            // Recharge la page
                            location.reload();

                        }
                    });
            });
        });

        {#document.addEventListener('DOMContentLoaded', function() {#}
        {#    let leadId = localStorage.getItem('redirectToPlanning');#}
        {#    if (leadId) {#}
        {#        localStorage.removeItem('redirectToPlanning'); // Nettoie l'indicateur#}
        {#        setTimeout(function() {#}
        {#            // Redirection avec pré-remplissage du formulaire#}
        {#            window.location.href = \"{{ path('app_planning_new_lead', { 'leadId': 'REPLACE_LEAD_ID' }) }}\".replace('REPLACE_LEAD_ID', leadId);#}
        {#        }, 2000);  // Délai de 2 secondes avant la redirection#}
        {#    }#}
        {#});#}

        document.addEventListener('DOMContentLoaded', function() {
            let leadId = localStorage.getItem('redirectToPlanning');
            if (leadId) {
                localStorage.removeItem('redirectToPlanning'); // Nettoie l'indicateur
                setTimeout(function() {
                    // Redirection avec pré-remplissage du formulaire
                    let redirectUrl = \"{{ path('app_planning_new_lead', { 'leadId': 'REPLACE_LEAD_ID' }) }}\".replace('REPLACE_LEAD_ID', leadId);
                    window.location.href = redirectUrl;
                }, 2000);  // Délai de 2 secondes avant la redirection
            }
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

                fetch(`/lead/\${leadId}/edit-inline-user`, {
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
                            location.reload();
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

                let rappelValue = `rappel \${rappelDate} \${rappelTime}`;

                fetch(`/lead/\${leadId}/edit-inline-user`, {
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
                            location.reload();
                        }
                    });
            });
        });
    </script>
{% endblock %}

", "lead/historique.html.twig", "/Applications/MAMP/htdocs/CRM/CRM_project_1/templates/lead/historique.html.twig");
    }
}

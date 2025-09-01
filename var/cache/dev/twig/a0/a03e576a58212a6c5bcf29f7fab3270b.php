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

/* base.html.twig */
class __TwigTemplate_218a00e5eba0df3865569f31ee4a7ea3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
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
    <link rel=\"icon\" href=\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 128 128'%3E%3Ctext y='1.2em' font-size='96'%3E⚫️%3C/text%3E%3Ctext y='1.3em' x='0.2em' font-size='76' fill='%23fff'%3Esf%3C/text%3E%3C/svg%3E\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    ";
        // line 8
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 18
        yield "</head>
<body>
  ";
        // line 20
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20)) {
            // line 21
            yield "    <nav class=\"navbar navbar-expand-lg bg-dark border-bottom bg-body-tertiary\" data-bs-theme=\"dark\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"";
            // line 23
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main");
            yield "\">
                <img src=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/LOGO_JS_ENERGIE_DEFINITIF2_3_copie-2.png"), "html", null, true);
            yield "\" width=\"100\" style=\"margin-top: -15%; margin-bottom: -12%;\" height=\"96\">
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                <ul class=\"navbar-nav\">
                    ";
            // line 31
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 32
                yield "                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
                // line 33
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "get", ["_route"], "method", false, false, false, 33) == "app_lead_index")) {
                    yield "active";
                }
                yield "\" style=\"font-size: 21px;\" aria-current=\"page\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lead_index");
                yield "\">Lead</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
                // line 36
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "request", [], "any", false, false, false, 36), "get", ["_route"], "method", false, false, false, 36) == "app_lead_index")) {
                    yield "active";
                }
                yield "\" style=\"font-size: 21px;\" aria-current=\"page\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lead_index_leads");
                yield "\">Lead Admin</a>
                        </li>
                    ";
            }
            // line 39
            yield "
                    ";
            // line 40
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER_COMMERCIAL") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 41
                yield "                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
                // line 42
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, false, 42), "get", ["_route"], "method", false, false, false, 42) == "app_lead_index_user")) {
                    yield "active";
                }
                yield "\" style=\"font-size: 21px;\" aria-current=\"page\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lead_index_user");
                yield "\">Lead commercial</a>
                        </li>
                    ";
            }
            // line 45
            yield "

                    ";
            // line 47
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER_TECHNICIEN") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 48
                yield "                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
                // line 49
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "get", ["_route"], "method", false, false, false, 49) == "app_lead_index_user")) {
                    yield "active";
                }
                yield "\" style=\"font-size: 21px;\" aria-current=\"page\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lead_index_user");
                yield "\">Lead technicien</a>
                        </li>
                    ";
            }
            // line 52
            yield "

                    ";
            // line 54
            if ((( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER_TECHNICIEN")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER_COMMERCIAL"))) {
                // line 55
                yield "                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
                // line 56
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "request", [], "any", false, false, false, 56), "get", ["_route"], "method", false, false, false, 56) == "app_lead_index_user")) {
                    yield "active";
                }
                yield "\" style=\"font-size: 21px;\" aria-current=\"page\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lead_index_user");
                yield "\">Lead User</a>
                        </li>
                    ";
            }
            // line 59
            yield "


                     ";
            // line 62
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 63
                yield "                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
                // line 64
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "request", [], "any", false, false, false, 64), "get", ["_route"], "method", false, false, false, 64) == "app_lead_index_historique")) {
                    yield "active";
                }
                yield "\" style=\"font-size: 21px;\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lead_index_historique");
                yield "\">historique Admin</a>
                        </li>
                    ";
            }
            // line 67
            yield "
                    ";
            // line 68
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER_COMMERCIAL") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 69
                yield "                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
                // line 70
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "request", [], "any", false, false, false, 70), "get", ["_route"], "method", false, false, false, 70) == "app_lead_index_user")) {
                    yield "active";
                }
                yield "\" style=\"font-size: 21px;\" aria-current=\"page\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lead_index_user");
                yield "\">historique commercial</a>
                        </li>
                    ";
            }
            // line 73
            yield "

                    ";
            // line 75
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER_TECHNICIEN") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 76
                yield "                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
                // line 77
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "request", [], "any", false, false, false, 77), "get", ["_route"], "method", false, false, false, 77) == "app_lead_index_user")) {
                    yield "active";
                }
                yield "\" style=\"font-size: 21px;\" aria-current=\"page\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lead_index_user");
                yield "\">historique technicien</a>
                        </li>
                    ";
            }
            // line 80
            yield "
                    ";
            // line 81
            if ((( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER_TECHNICIEN")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER_COMMERCIAL"))) {
                // line 82
                yield "                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
                // line 83
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "request", [], "any", false, false, false, 83), "get", ["_route"], "method", false, false, false, 83) == "app_lead_index_historique_user")) {
                    yield "active";
                }
                yield "\" style=\"font-size: 21px;\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lead_index_historique_user");
                yield "\">historique User</a>
                        </li>
                    ";
            }
            // line 86
            yield "                    
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
            // line 88
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "request", [], "any", false, false, false, 88), "get", ["_route"], "method", false, false, false, 88) == "app_planning_index_planning")) {
                yield "active";
            }
            yield "\" style=\"font-size: 21px;\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planning_index_planning");
            yield "\">Planning</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
            // line 91
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "request", [], "any", false, false, false, 91), "get", ["_route"], "method", false, false, false, 91) == "app_bath_index")) {
                yield "active";
            }
            yield "\" style=\"font-size: 21px;\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bath_index");
            yield "\">Bath th</a>
                    </li>

                </ul>


                <span class=\"navbar-text ms-auto\" style=\"font-size: 21px;\">
                       <a class=\"nav-link ";
            // line 98
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "request", [], "any", false, false, false, 98), "get", ["_route"], "method", false, false, false, 98) == "app_bath_index")) {
                yield "active";
            }
            yield "\" style=\"font-size: 21px;\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "user", [], "any", false, false, false, 98), "prenom", [], "any", false, false, false, 98), "html", null, true);
            yield "</a>
                </span>
";
            // line 103
            yield "
            </div>
        </div>
    </nav>
";
        }
        // line 108
        yield "
    
    ";
        // line 110
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 111
        yield "    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
    ";
        // line 112
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 115
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
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

    // line 110
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 112
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 113
        yield "    <!-- Place for additional javascripts -->
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
        return "base.html.twig";
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
        return array (  390 => 113,  380 => 112,  361 => 110,  342 => 9,  332 => 8,  312 => 5,  299 => 115,  297 => 112,  294 => 111,  292 => 110,  288 => 108,  281 => 103,  270 => 98,  256 => 91,  246 => 88,  242 => 86,  232 => 83,  229 => 82,  227 => 81,  224 => 80,  214 => 77,  211 => 76,  209 => 75,  205 => 73,  195 => 70,  192 => 69,  190 => 68,  187 => 67,  177 => 64,  174 => 63,  172 => 62,  167 => 59,  157 => 56,  154 => 55,  152 => 54,  148 => 52,  138 => 49,  135 => 48,  133 => 47,  129 => 45,  119 => 42,  116 => 41,  114 => 40,  111 => 39,  101 => 36,  91 => 33,  88 => 32,  86 => 31,  76 => 24,  72 => 23,  68 => 21,  66 => 20,  62 => 18,  60 => 8,  54 => 5,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 128 128'%3E%3Ctext y='1.2em' font-size='96'%3E⚫️%3C/text%3E%3Ctext y='1.3em' x='0.2em' font-size='76' fill='%23fff'%3Esf%3C/text%3E%3C/svg%3E\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    {% block stylesheets %}
    <!-- Place for additional stylesheets -->
    <style>
    .highlight-fluo {
    background-color: #ff00ff; /* Rose fluo */
    color: #ffffff; /* Texte blanc pour le contraste */
}

    </style>
    {% endblock %}
</head>
<body>
  {% if app.user %}
    <nav class=\"navbar navbar-expand-lg bg-dark border-bottom bg-body-tertiary\" data-bs-theme=\"dark\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"{{path ('app_main')}}\">
                <img src=\"{{ asset('assets/images/LOGO_JS_ENERGIE_DEFINITIF2_3_copie-2.png') }}\" width=\"100\" style=\"margin-top: -15%; margin-bottom: -12%;\" height=\"96\">
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                <ul class=\"navbar-nav\">
                    {% if is_granted('ROLE_ADMIN') %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link {% if app.request.get('_route') == 'app_lead_index' %}active{% endif %}\" style=\"font-size: 21px;\" aria-current=\"page\" href=\"{{ path('app_lead_index') }}\">Lead</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link {% if app.request.get('_route') == 'app_lead_index' %}active{% endif %}\" style=\"font-size: 21px;\" aria-current=\"page\" href=\"{{ path('app_lead_index_leads') }}\">Lead Admin</a>
                        </li>
                    {% endif %}

                    {% if is_granted('ROLE_USER_COMMERCIAL') and not is_granted('ROLE_ADMIN')  %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link {% if app.request.get('_route') == 'app_lead_index_user' %}active{% endif %}\" style=\"font-size: 21px;\" aria-current=\"page\" href=\"{{ path('app_lead_index_user') }}\">Lead commercial</a>
                        </li>
                    {% endif %}


                    {% if is_granted('ROLE_USER_TECHNICIEN') and not is_granted('ROLE_ADMIN') %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link {% if app.request.get('_route') == 'app_lead_index_user' %}active{% endif %}\" style=\"font-size: 21px;\" aria-current=\"page\" href=\"{{ path('app_lead_index_user') }}\">Lead technicien</a>
                        </li>
                    {% endif %}


                    {% if not is_granted('ROLE_ADMIN') and not is_granted('ROLE_USER_TECHNICIEN') and not is_granted('ROLE_USER_COMMERCIAL') %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link {% if app.request.get('_route') == 'app_lead_index_user' %}active{% endif %}\" style=\"font-size: 21px;\" aria-current=\"page\" href=\"{{ path('app_lead_index_user') }}\">Lead User</a>
                        </li>
                    {% endif %}



                     {% if is_granted('ROLE_ADMIN') %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link {% if app.request.get('_route') == 'app_lead_index_historique' %}active{% endif %}\" style=\"font-size: 21px;\" href=\"{{ path('app_lead_index_historique') }}\">historique Admin</a>
                        </li>
                    {% endif %}

                    {% if is_granted('ROLE_USER_COMMERCIAL') and not is_granted('ROLE_ADMIN') %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link {% if app.request.get('_route') == 'app_lead_index_user' %}active{% endif %}\" style=\"font-size: 21px;\" aria-current=\"page\" href=\"{{ path('app_lead_index_user') }}\">historique commercial</a>
                        </li>
                    {% endif %}


                    {% if is_granted('ROLE_USER_TECHNICIEN') and not is_granted('ROLE_ADMIN') %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link {% if app.request.get('_route') == 'app_lead_index_user' %}active{% endif %}\" style=\"font-size: 21px;\" aria-current=\"page\" href=\"{{ path('app_lead_index_user') }}\">historique technicien</a>
                        </li>
                    {% endif %}

                    {% if not is_granted('ROLE_ADMIN') and not is_granted('ROLE_USER_TECHNICIEN') and not is_granted('ROLE_USER_COMMERCIAL') %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link {% if app.request.get('_route') == 'app_lead_index_historique_user' %}active{% endif %}\" style=\"font-size: 21px;\" href=\"{{ path('app_lead_index_historique_user') }}\">historique User</a>
                        </li>
                    {% endif %}
                    
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% if app.request.get('_route') == 'app_planning_index_planning' %}active{% endif %}\" style=\"font-size: 21px;\" href=\"{{ path('app_planning_index_planning') }}\">Planning</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% if app.request.get('_route') == 'app_bath_index' %}active{% endif %}\" style=\"font-size: 21px;\" href=\"{{ path('app_bath_index') }}\">Bath th</a>
                    </li>

                </ul>


                <span class=\"navbar-text ms-auto\" style=\"font-size: 21px;\">
                       <a class=\"nav-link {% if app.request.get('_route') == 'app_bath_index' %}active{% endif %}\" style=\"font-size: 21px;\" href=\"{{ path('app_logout') }}\">{{ app.user.prenom }}</a>
                </span>
{#                <li class=\"nav-item\">#}
{#                    <a class=\"nav-link {% if app.request.get('_route') == 'app_logout' %}active{% endif %}\" style=\"font-size: 21px;\" href=\"{{ path('app_logout') }}\">Se déconnecter</a>#}
{#                </li>#}

            </div>
        </div>
    </nav>
{% endif %}

    
    {% block body %}{% endblock %}
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
    {% block javascripts %}
    <!-- Place for additional javascripts -->
    {% endblock %}
</body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/jsenergie/CRM_project_1/templates/base.html.twig");
    }
}

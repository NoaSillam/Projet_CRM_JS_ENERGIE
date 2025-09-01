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

/* planning/_form.html.twig */
class __TwigTemplate_f85152aea4c7b316f2c705dd5f36c3ac extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planning/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planning/_form.html.twig"));

        // line 1
        yield "
";
        // line 4
        yield "
";
        // line 6
        yield "
";
        // line 9
        yield "
";
        // line 27
        yield "
";
        // line 37
        yield "


";
        // line 54
        yield "
";
        // line 55
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 58
        yield "
";
        // line 59
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 86
        yield "
<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            ";
        // line 90
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), 'form_start');
        yield "

            <!-- Nom et Prénom côte à côte -->
            <div class=\"form-row row mb-3\">
                <h3 style=\"text-align: center;\">Informations personnelles</h3>
                <div class=\"col-md-6\">
                    ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "nom", [], "any", false, false, false, 96), 'row');
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "prenom", [], "any", false, false, false, 99), 'row');
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "ageMRMME", [], "any", false, false, false, 102), 'row');
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "telephone", [], "any", false, false, false, 105), 'row');
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "email", [], "any", false, false, false, 108), 'row');
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "adresse", [], "any", false, false, false, 111), 'row');
        yield "
                </div>

            </div>



            <div class=\"form-row row mb-3\">
                <h3 style=\"text-align: center;\">Informations du dossier</h3>
                <div class=\"col-md-6\">
                    ";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "situationFamiliale", [], "any", false, false, false, 121), 'row');
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "situationPro", [], "any", false, false, false, 124), 'row');
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "nbrePersonneCharge", [], "any", false, false, false, 127), 'row');
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 130
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "salaireMensuel", [], "any", false, false, false, 130), 'row');
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "creditEnCours", [], "any", false, false, false, 133), 'row');
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "RevenuFiscalReference", [], "any", false, false, false, 136), 'row');
        yield "
                </div>

            </div>

            <div class=\"form-row row mb-3\">
                <h3 style=\"text-align: center;\">Informations sur la maison</h3>
                <div class=\"col-md-6\">
                    ";
        // line 144
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "ageMaison", [], "any", false, false, false, 144), 'row');
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 147
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "consommationAnnuelOuMensuelle", [], "any", false, false, false, 147), 'row');
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 150
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "TypeChauffage", [], "any", false, false, false, 150), 'row');
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 153
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "ageChaudiere", [], "any", false, false, false, 153), 'row');
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 156
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), "superficieMursExt", [], "any", false, false, false, 156), 'row');
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 159
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "superficieMaison", [], "any", false, false, false, 159), 'row');
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 162
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "matiereMursExt", [], "any", false, false, false, 162), 'row');
        yield "
                </div>

            </div>

            <div class=\"form-row row mb-3\">
                <h3 style=\"text-align: center;\">Informations du rendez-vous</h3>
                <div class=\"col-md-6\">
                    ";
        // line 170
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "date", [], "any", false, false, false, 170), 'row');
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 173
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "commentaire", [], "any", false, false, false, 173), 'row');
        yield "
                </div>


            </div>


            <!-- Autres champs -->
            ";
        // line 181
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), 'widget');
        yield "

            <!-- Bouton de soumission centré -->
            <div class=\"form-group text-center mt-4\">
                <button type=\"submit\" class=\"btn btn-primary\">
                    ";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 186, $this->source); })()), "Valider")) : ("Valider")), "html", null, true);
        yield "
                </button>
            </div>

            ";
        // line 190
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 55
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 56
        yield "    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN\" crossorigin=\"anonymous\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 59
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        yield "    <script src=\"https://cdn.tiny.cloud/1/xi3fv210yjl2ttd482biaayx94emsrcjs4jc7qx37pccqnwz/tinymce/6/tinymce.min.js\" referrerpolicy=\"origin\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js\" integrity=\"sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            tinymce.init({
                selector: 'textarea.tinymce',
                height: 300,
                plugins: [
                    'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'print', 'preview', 'anchor', 'pagebreak',
                    'searchreplace', 'wordcount', 'visualblocks', 'code', 'fullscreen',
                    'insertdatetime', 'media', 'table', 'emoticons', 'template', 'codesample', 'contextmenu', 'paste', 'code'
                ],
                toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
            });

            // Remove required attribute from the textarea
            const commentaireField = document.querySelector('textarea.tinymce');
            if (commentaireField) {
                commentaireField.removeAttribute('required');
            }
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
        return "planning/_form.html.twig";
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
        return array (  302 => 60,  292 => 59,  280 => 56,  270 => 55,  254 => 190,  247 => 186,  239 => 181,  228 => 173,  222 => 170,  211 => 162,  205 => 159,  199 => 156,  193 => 153,  187 => 150,  181 => 147,  175 => 144,  164 => 136,  158 => 133,  152 => 130,  146 => 127,  140 => 124,  134 => 121,  121 => 111,  115 => 108,  109 => 105,  103 => 102,  97 => 99,  91 => 96,  82 => 90,  76 => 86,  74 => 59,  71 => 58,  69 => 55,  66 => 54,  61 => 37,  58 => 27,  55 => 9,  52 => 6,  49 => 4,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{#{% block stylesheets %}#}
{#    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN\" crossorigin=\"anonymous\">#}

{#    <style>#}

{#    </style>#}
{#{% endblock %}#}

{#{% block javascripts %}#}
{#    <script src=\"https://cdn.tiny.cloud/1/xi3fv210yjl2ttd482biaayx94emsrcjs4jc7qx37pccqnwz/tinymce/6/tinymce.min.js\" referrerpolicy=\"origin\"></script>#}
{#    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL\" crossorigin=\"anonymous\"></script>#}
{#    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js\" integrity=\"sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>#}
{#<script>#}
{#    document.addEventListener('DOMContentLoaded', function() {#}
{#        tinymce.init({#}
{#            selector: 'textarea.tinymce',#}
{#            height: 300,#}
{#            plugins: [#}
{#                'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'print', 'preview', 'anchor', 'pagebreak',#}
{#                'searchreplace', 'wordcount', 'visualblocks', 'code', 'fullscreen',#}
{#                'insertdatetime', 'media', 'table', 'emoticons', 'template', 'codesample', 'contextmenu', 'paste', 'code'#}
{#            ],#}
{#            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',#}
{#            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'#}
{#        });#}

{#        // Remove required attribute from the textarea#}
{#        const commentaireField = document.querySelector('textarea.tinymce');#}
{#        if (commentaireField) {#}
{#            commentaireField.removeAttribute('required');#}
{#        }#}
{#    });#}
{#        #}
{#  </script>#}
{#{% endblock %}#}



{#<div style=\"margin: auto; width: 30%;\">#}
{#    <div style=\"margin-left:auto; margin-right:auto;\">#}
{#        {{ form_start(form) }}#}
{#        {{ form_widget(form) }}#}
{#    <br>#}
{#    <div class=\"form-group\">#}
{#    <div class=\"col-sm-offset-2 col-sm-10\">#}
{#        #}
{#        <button type=\"submit\" style=\"margin-left: 54%;\" class=\"btn btn-primary\" >{{ button_label|default('Valider') }}</button>#}
{#         </div>#}
{#    </div>#}
{#    {{ form_end(form) }}#}
{#</div>#}
{#</div>#}

{% block stylesheets %}
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN\" crossorigin=\"anonymous\">
{% endblock %}

{% block javascripts %}
    <script src=\"https://cdn.tiny.cloud/1/xi3fv210yjl2ttd482biaayx94emsrcjs4jc7qx37pccqnwz/tinymce/6/tinymce.min.js\" referrerpolicy=\"origin\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js\" integrity=\"sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            tinymce.init({
                selector: 'textarea.tinymce',
                height: 300,
                plugins: [
                    'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'print', 'preview', 'anchor', 'pagebreak',
                    'searchreplace', 'wordcount', 'visualblocks', 'code', 'fullscreen',
                    'insertdatetime', 'media', 'table', 'emoticons', 'template', 'codesample', 'contextmenu', 'paste', 'code'
                ],
                toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
            });

            // Remove required attribute from the textarea
            const commentaireField = document.querySelector('textarea.tinymce');
            if (commentaireField) {
                commentaireField.removeAttribute('required');
            }
        });
    </script>
{% endblock %}

<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            {{ form_start(form) }}

            <!-- Nom et Prénom côte à côte -->
            <div class=\"form-row row mb-3\">
                <h3 style=\"text-align: center;\">Informations personnelles</h3>
                <div class=\"col-md-6\">
                    {{ form_row(form.nom) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.prenom) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.ageMRMME) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.telephone) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.email) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.adresse) }}
                </div>

            </div>



            <div class=\"form-row row mb-3\">
                <h3 style=\"text-align: center;\">Informations du dossier</h3>
                <div class=\"col-md-6\">
                    {{ form_row(form.situationFamiliale) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.situationPro) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.nbrePersonneCharge) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.salaireMensuel) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.creditEnCours) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.RevenuFiscalReference) }}
                </div>

            </div>

            <div class=\"form-row row mb-3\">
                <h3 style=\"text-align: center;\">Informations sur la maison</h3>
                <div class=\"col-md-6\">
                    {{ form_row(form.ageMaison) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.consommationAnnuelOuMensuelle) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.TypeChauffage) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.ageChaudiere) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.superficieMursExt) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.superficieMaison) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.matiereMursExt) }}
                </div>

            </div>

            <div class=\"form-row row mb-3\">
                <h3 style=\"text-align: center;\">Informations du rendez-vous</h3>
                <div class=\"col-md-6\">
                    {{ form_row(form.date) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.commentaire) }}
                </div>


            </div>


            <!-- Autres champs -->
            {{ form_widget(form) }}

            <!-- Bouton de soumission centré -->
            <div class=\"form-group text-center mt-4\">
                <button type=\"submit\" class=\"btn btn-primary\">
                    {{ button_label|default('Valider') }}
                </button>
            </div>

            {{ form_end(form) }}
        </div>
    </div>
</div>
", "planning/_form.html.twig", "/Applications/MAMP/htdocs/CRM/CRM_project_1/templates/planning/_form.html.twig");
    }
}

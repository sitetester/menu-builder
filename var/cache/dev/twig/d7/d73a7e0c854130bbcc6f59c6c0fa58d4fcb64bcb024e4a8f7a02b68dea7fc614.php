<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_dff87d1c4b86f36989703c98abf327382c9a6015e814891aac2cdd4eb94ab36a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54d6909c6fe2a405d65dafdce3aa86158c055cde9962afd493c66eae2196b843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d6909c6fe2a405d65dafdce3aa86158c055cde9962afd493c66eae2196b843->enter($__internal_54d6909c6fe2a405d65dafdce3aa86158c055cde9962afd493c66eae2196b843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_4c4bef5184732b0bf240802d20e012e8cd345563a4fac4af88583aeae34714d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c4bef5184732b0bf240802d20e012e8cd345563a4fac4af88583aeae34714d8->enter($__internal_4c4bef5184732b0bf240802d20e012e8cd345563a4fac4af88583aeae34714d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54d6909c6fe2a405d65dafdce3aa86158c055cde9962afd493c66eae2196b843->leave($__internal_54d6909c6fe2a405d65dafdce3aa86158c055cde9962afd493c66eae2196b843_prof);

        
        $__internal_4c4bef5184732b0bf240802d20e012e8cd345563a4fac4af88583aeae34714d8->leave($__internal_4c4bef5184732b0bf240802d20e012e8cd345563a4fac4af88583aeae34714d8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7030b92ab75241fe6ef9faea56d43bfbe830d32383ccf8e191d2a189420e5c53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7030b92ab75241fe6ef9faea56d43bfbe830d32383ccf8e191d2a189420e5c53->enter($__internal_7030b92ab75241fe6ef9faea56d43bfbe830d32383ccf8e191d2a189420e5c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ecaac25829ff37fc9df32c7091e303ed98589531a259c7966c04513090026710 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecaac25829ff37fc9df32c7091e303ed98589531a259c7966c04513090026710->enter($__internal_ecaac25829ff37fc9df32c7091e303ed98589531a259c7966c04513090026710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_ecaac25829ff37fc9df32c7091e303ed98589531a259c7966c04513090026710->leave($__internal_ecaac25829ff37fc9df32c7091e303ed98589531a259c7966c04513090026710_prof);

        
        $__internal_7030b92ab75241fe6ef9faea56d43bfbe830d32383ccf8e191d2a189420e5c53->leave($__internal_7030b92ab75241fe6ef9faea56d43bfbe830d32383ccf8e191d2a189420e5c53_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/khalid/PhpstormProjects/menu-task/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}

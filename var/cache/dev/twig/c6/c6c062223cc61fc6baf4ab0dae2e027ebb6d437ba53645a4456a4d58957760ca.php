<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_762369728d99e6101d6afd8a4b0a1a1eadf795624c13a9da8b8332e84fda32fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47e5a76302897590192bb07516ad35dab797141dc7b7b3f1e0de73e1f482cd4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47e5a76302897590192bb07516ad35dab797141dc7b7b3f1e0de73e1f482cd4e->enter($__internal_47e5a76302897590192bb07516ad35dab797141dc7b7b3f1e0de73e1f482cd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a4dc14e59349bbdfe734299feb489984623974cc42f298ea85d4dbc386fbc5f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4dc14e59349bbdfe734299feb489984623974cc42f298ea85d4dbc386fbc5f7->enter($__internal_a4dc14e59349bbdfe734299feb489984623974cc42f298ea85d4dbc386fbc5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47e5a76302897590192bb07516ad35dab797141dc7b7b3f1e0de73e1f482cd4e->leave($__internal_47e5a76302897590192bb07516ad35dab797141dc7b7b3f1e0de73e1f482cd4e_prof);

        
        $__internal_a4dc14e59349bbdfe734299feb489984623974cc42f298ea85d4dbc386fbc5f7->leave($__internal_a4dc14e59349bbdfe734299feb489984623974cc42f298ea85d4dbc386fbc5f7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_345223c56c8a732d70c1c4186423bd6700e8a781a2bdd9b7c59f3d1da64dbddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_345223c56c8a732d70c1c4186423bd6700e8a781a2bdd9b7c59f3d1da64dbddc->enter($__internal_345223c56c8a732d70c1c4186423bd6700e8a781a2bdd9b7c59f3d1da64dbddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_deb124b81c0792a9d3418b368082477d7652892547a1991d7bfe5b3eb2c33474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deb124b81c0792a9d3418b368082477d7652892547a1991d7bfe5b3eb2c33474->enter($__internal_deb124b81c0792a9d3418b368082477d7652892547a1991d7bfe5b3eb2c33474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_deb124b81c0792a9d3418b368082477d7652892547a1991d7bfe5b3eb2c33474->leave($__internal_deb124b81c0792a9d3418b368082477d7652892547a1991d7bfe5b3eb2c33474_prof);

        
        $__internal_345223c56c8a732d70c1c4186423bd6700e8a781a2bdd9b7c59f3d1da64dbddc->leave($__internal_345223c56c8a732d70c1c4186423bd6700e8a781a2bdd9b7c59f3d1da64dbddc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_201800c45fb3b45d28f4267e811009ba50cfabc1adf3a1b22119bec23442cfe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_201800c45fb3b45d28f4267e811009ba50cfabc1adf3a1b22119bec23442cfe2->enter($__internal_201800c45fb3b45d28f4267e811009ba50cfabc1adf3a1b22119bec23442cfe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_673c83c12065926744ff646e95f595367ac165c56f7ed04aa3ccabf82d626894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_673c83c12065926744ff646e95f595367ac165c56f7ed04aa3ccabf82d626894->enter($__internal_673c83c12065926744ff646e95f595367ac165c56f7ed04aa3ccabf82d626894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_673c83c12065926744ff646e95f595367ac165c56f7ed04aa3ccabf82d626894->leave($__internal_673c83c12065926744ff646e95f595367ac165c56f7ed04aa3ccabf82d626894_prof);

        
        $__internal_201800c45fb3b45d28f4267e811009ba50cfabc1adf3a1b22119bec23442cfe2->leave($__internal_201800c45fb3b45d28f4267e811009ba50cfabc1adf3a1b22119bec23442cfe2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a2ffbf96f81db67788bcf78d8f4b7d2e906a51b309d2402b943241104832c7a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2ffbf96f81db67788bcf78d8f4b7d2e906a51b309d2402b943241104832c7a4->enter($__internal_a2ffbf96f81db67788bcf78d8f4b7d2e906a51b309d2402b943241104832c7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_437d8745c195b4168630fc263f7d5d9f7d7aa2d5c909fe73ac33be2249e20439 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_437d8745c195b4168630fc263f7d5d9f7d7aa2d5c909fe73ac33be2249e20439->enter($__internal_437d8745c195b4168630fc263f7d5d9f7d7aa2d5c909fe73ac33be2249e20439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_437d8745c195b4168630fc263f7d5d9f7d7aa2d5c909fe73ac33be2249e20439->leave($__internal_437d8745c195b4168630fc263f7d5d9f7d7aa2d5c909fe73ac33be2249e20439_prof);

        
        $__internal_a2ffbf96f81db67788bcf78d8f4b7d2e906a51b309d2402b943241104832c7a4->leave($__internal_a2ffbf96f81db67788bcf78d8f4b7d2e906a51b309d2402b943241104832c7a4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/khalid/PhpstormProjects/menu-task/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}

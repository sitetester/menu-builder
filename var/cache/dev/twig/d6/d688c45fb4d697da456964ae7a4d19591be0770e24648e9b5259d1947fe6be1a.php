<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0e607283b7a685241a2e647d7db11e3c36962efc4d879fa714a8c5956977f9e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b31d3ae1fa60253580d768f386fa2ed90054ad73b3e2defd18e2af9e246fb99d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b31d3ae1fa60253580d768f386fa2ed90054ad73b3e2defd18e2af9e246fb99d->enter($__internal_b31d3ae1fa60253580d768f386fa2ed90054ad73b3e2defd18e2af9e246fb99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e785cce2b11f8ecb4d86ecad8665ae3e878d8fa5ce82c044ecc6cac8f5640d00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e785cce2b11f8ecb4d86ecad8665ae3e878d8fa5ce82c044ecc6cac8f5640d00->enter($__internal_e785cce2b11f8ecb4d86ecad8665ae3e878d8fa5ce82c044ecc6cac8f5640d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b31d3ae1fa60253580d768f386fa2ed90054ad73b3e2defd18e2af9e246fb99d->leave($__internal_b31d3ae1fa60253580d768f386fa2ed90054ad73b3e2defd18e2af9e246fb99d_prof);

        
        $__internal_e785cce2b11f8ecb4d86ecad8665ae3e878d8fa5ce82c044ecc6cac8f5640d00->leave($__internal_e785cce2b11f8ecb4d86ecad8665ae3e878d8fa5ce82c044ecc6cac8f5640d00_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4cab37eec4c613135e886417966219e9d6787d468f3f81deaff8f3898c4ce367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cab37eec4c613135e886417966219e9d6787d468f3f81deaff8f3898c4ce367->enter($__internal_4cab37eec4c613135e886417966219e9d6787d468f3f81deaff8f3898c4ce367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5068166359673c3d3dfd892a89ce220f7cc2e33f3042705eae7f203f8b8ee6c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5068166359673c3d3dfd892a89ce220f7cc2e33f3042705eae7f203f8b8ee6c2->enter($__internal_5068166359673c3d3dfd892a89ce220f7cc2e33f3042705eae7f203f8b8ee6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5068166359673c3d3dfd892a89ce220f7cc2e33f3042705eae7f203f8b8ee6c2->leave($__internal_5068166359673c3d3dfd892a89ce220f7cc2e33f3042705eae7f203f8b8ee6c2_prof);

        
        $__internal_4cab37eec4c613135e886417966219e9d6787d468f3f81deaff8f3898c4ce367->leave($__internal_4cab37eec4c613135e886417966219e9d6787d468f3f81deaff8f3898c4ce367_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c0bd75d218598081ed0bdedbd11e259573506d6b816e6f486b502f665f7f4808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0bd75d218598081ed0bdedbd11e259573506d6b816e6f486b502f665f7f4808->enter($__internal_c0bd75d218598081ed0bdedbd11e259573506d6b816e6f486b502f665f7f4808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5abededcc8b8431559b9e05b2804e6df6eee7b101a3632ac0a9cfe135a9c9e98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5abededcc8b8431559b9e05b2804e6df6eee7b101a3632ac0a9cfe135a9c9e98->enter($__internal_5abededcc8b8431559b9e05b2804e6df6eee7b101a3632ac0a9cfe135a9c9e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5abededcc8b8431559b9e05b2804e6df6eee7b101a3632ac0a9cfe135a9c9e98->leave($__internal_5abededcc8b8431559b9e05b2804e6df6eee7b101a3632ac0a9cfe135a9c9e98_prof);

        
        $__internal_c0bd75d218598081ed0bdedbd11e259573506d6b816e6f486b502f665f7f4808->leave($__internal_c0bd75d218598081ed0bdedbd11e259573506d6b816e6f486b502f665f7f4808_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b60cb6262b0444aee89718a7c70d1e316b1b06c579f9606a42202ed99fe33d51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b60cb6262b0444aee89718a7c70d1e316b1b06c579f9606a42202ed99fe33d51->enter($__internal_b60cb6262b0444aee89718a7c70d1e316b1b06c579f9606a42202ed99fe33d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2e67a3cf8ce60046601d123ed9135feb72d706872135f4c208906ba57dbcc083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e67a3cf8ce60046601d123ed9135feb72d706872135f4c208906ba57dbcc083->enter($__internal_2e67a3cf8ce60046601d123ed9135feb72d706872135f4c208906ba57dbcc083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_2e67a3cf8ce60046601d123ed9135feb72d706872135f4c208906ba57dbcc083->leave($__internal_2e67a3cf8ce60046601d123ed9135feb72d706872135f4c208906ba57dbcc083_prof);

        
        $__internal_b60cb6262b0444aee89718a7c70d1e316b1b06c579f9606a42202ed99fe33d51->leave($__internal_b60cb6262b0444aee89718a7c70d1e316b1b06c579f9606a42202ed99fe33d51_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/khalid/PhpstormProjects/menu-task/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}

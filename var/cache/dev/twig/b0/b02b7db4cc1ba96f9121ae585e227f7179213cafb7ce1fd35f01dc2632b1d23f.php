<?php

/* base.html.twig */
class __TwigTemplate_02df2f51bca6ed0e6368c515b705c5790cfcb4c8bae2c318787744ed5e4c51d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_faef187e6d770e3792f6e3a9447ef5fbea2af497a4840ca88a199409691f944f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faef187e6d770e3792f6e3a9447ef5fbea2af497a4840ca88a199409691f944f->enter($__internal_faef187e6d770e3792f6e3a9447ef5fbea2af497a4840ca88a199409691f944f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_256d199d593bd6dd9cab6563ecd6140e68edbe255b24bc5cec3301273fc5f3a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_256d199d593bd6dd9cab6563ecd6140e68edbe255b24bc5cec3301273fc5f3a2->enter($__internal_256d199d593bd6dd9cab6563ecd6140e68edbe255b24bc5cec3301273fc5f3a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "    </body>
</html>
";
        
        $__internal_faef187e6d770e3792f6e3a9447ef5fbea2af497a4840ca88a199409691f944f->leave($__internal_faef187e6d770e3792f6e3a9447ef5fbea2af497a4840ca88a199409691f944f_prof);

        
        $__internal_256d199d593bd6dd9cab6563ecd6140e68edbe255b24bc5cec3301273fc5f3a2->leave($__internal_256d199d593bd6dd9cab6563ecd6140e68edbe255b24bc5cec3301273fc5f3a2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee80eb0cdf636c1f7d4b69ad3c5301bb93525c378979e01620f5108f55cbfb9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee80eb0cdf636c1f7d4b69ad3c5301bb93525c378979e01620f5108f55cbfb9c->enter($__internal_ee80eb0cdf636c1f7d4b69ad3c5301bb93525c378979e01620f5108f55cbfb9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c00a585e6376d3bc1da924464da06e1418e9e78162e84e9314fbba472af6c581 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c00a585e6376d3bc1da924464da06e1418e9e78162e84e9314fbba472af6c581->enter($__internal_c00a585e6376d3bc1da924464da06e1418e9e78162e84e9314fbba472af6c581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c00a585e6376d3bc1da924464da06e1418e9e78162e84e9314fbba472af6c581->leave($__internal_c00a585e6376d3bc1da924464da06e1418e9e78162e84e9314fbba472af6c581_prof);

        
        $__internal_ee80eb0cdf636c1f7d4b69ad3c5301bb93525c378979e01620f5108f55cbfb9c->leave($__internal_ee80eb0cdf636c1f7d4b69ad3c5301bb93525c378979e01620f5108f55cbfb9c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_06bd03b5a2430f24594ea3a0ea3060acc853e17b02642712d327f6bd3e26f5fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06bd03b5a2430f24594ea3a0ea3060acc853e17b02642712d327f6bd3e26f5fa->enter($__internal_06bd03b5a2430f24594ea3a0ea3060acc853e17b02642712d327f6bd3e26f5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9945b6b3f95cb12cbd5ed5901358cb9e86b37c6598b487dd4db12706bb6adf4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9945b6b3f95cb12cbd5ed5901358cb9e86b37c6598b487dd4db12706bb6adf4d->enter($__internal_9945b6b3f95cb12cbd5ed5901358cb9e86b37c6598b487dd4db12706bb6adf4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9945b6b3f95cb12cbd5ed5901358cb9e86b37c6598b487dd4db12706bb6adf4d->leave($__internal_9945b6b3f95cb12cbd5ed5901358cb9e86b37c6598b487dd4db12706bb6adf4d_prof);

        
        $__internal_06bd03b5a2430f24594ea3a0ea3060acc853e17b02642712d327f6bd3e26f5fa->leave($__internal_06bd03b5a2430f24594ea3a0ea3060acc853e17b02642712d327f6bd3e26f5fa_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_52ce432a2b287b61ec3e56b0aa22924780766cb0be0549f99026517f20e22f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52ce432a2b287b61ec3e56b0aa22924780766cb0be0549f99026517f20e22f27->enter($__internal_52ce432a2b287b61ec3e56b0aa22924780766cb0be0549f99026517f20e22f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a70a2e98bd96e83016f06f88ecd5843be85bdc1dc0903d3e482e8a4334dfaad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a70a2e98bd96e83016f06f88ecd5843be85bdc1dc0903d3e482e8a4334dfaad4->enter($__internal_a70a2e98bd96e83016f06f88ecd5843be85bdc1dc0903d3e482e8a4334dfaad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a70a2e98bd96e83016f06f88ecd5843be85bdc1dc0903d3e482e8a4334dfaad4->leave($__internal_a70a2e98bd96e83016f06f88ecd5843be85bdc1dc0903d3e482e8a4334dfaad4_prof);

        
        $__internal_52ce432a2b287b61ec3e56b0aa22924780766cb0be0549f99026517f20e22f27->leave($__internal_52ce432a2b287b61ec3e56b0aa22924780766cb0be0549f99026517f20e22f27_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bae8a5460816ed3031ca9d3b88ca0ab614355e604ffdacb31e6fa60f350a7506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae8a5460816ed3031ca9d3b88ca0ab614355e604ffdacb31e6fa60f350a7506->enter($__internal_bae8a5460816ed3031ca9d3b88ca0ab614355e604ffdacb31e6fa60f350a7506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_723a3928a5e23afdee69a14bd0cd24699b26d80a6c8e82858b49b15d7333385a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_723a3928a5e23afdee69a14bd0cd24699b26d80a6c8e82858b49b15d7333385a->enter($__internal_723a3928a5e23afdee69a14bd0cd24699b26d80a6c8e82858b49b15d7333385a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_723a3928a5e23afdee69a14bd0cd24699b26d80a6c8e82858b49b15d7333385a->leave($__internal_723a3928a5e23afdee69a14bd0cd24699b26d80a6c8e82858b49b15d7333385a_prof);

        
        $__internal_bae8a5460816ed3031ca9d3b88ca0ab614355e604ffdacb31e6fa60f350a7506->leave($__internal_bae8a5460816ed3031ca9d3b88ca0ab614355e604ffdacb31e6fa60f350a7506_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 10,  97 => 9,  80 => 6,  62 => 5,  50 => 11,  47 => 10,  45 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/khalid/PhpstormProjects/menu-task/templates/base.html.twig");
    }
}

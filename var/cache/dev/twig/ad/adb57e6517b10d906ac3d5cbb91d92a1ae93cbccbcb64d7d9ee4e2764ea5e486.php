<?php

/* menu/index.html.twig */
class __TwigTemplate_401fba638d948906f4ed1022b647e8c7c79f57ed1e48e4d256710539c4cd84cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "menu/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc437308e7a44698596df23d30b49069c7e3b739e8b9599c8613ebea8f8e0197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc437308e7a44698596df23d30b49069c7e3b739e8b9599c8613ebea8f8e0197->enter($__internal_fc437308e7a44698596df23d30b49069c7e3b739e8b9599c8613ebea8f8e0197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu/index.html.twig"));

        $__internal_abde7f9871769999f501ba10918fa2932b4c1a3542c804a712dfd2417d033091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abde7f9871769999f501ba10918fa2932b4c1a3542c804a712dfd2417d033091->enter($__internal_abde7f9871769999f501ba10918fa2932b4c1a3542c804a712dfd2417d033091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc437308e7a44698596df23d30b49069c7e3b739e8b9599c8613ebea8f8e0197->leave($__internal_fc437308e7a44698596df23d30b49069c7e3b739e8b9599c8613ebea8f8e0197_prof);

        
        $__internal_abde7f9871769999f501ba10918fa2932b4c1a3542c804a712dfd2417d033091->leave($__internal_abde7f9871769999f501ba10918fa2932b4c1a3542c804a712dfd2417d033091_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5fce589bff3f86a616e1c655f8495a61332fc866cebea7c6eaad24acba6b07e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5fce589bff3f86a616e1c655f8495a61332fc866cebea7c6eaad24acba6b07e->enter($__internal_d5fce589bff3f86a616e1c655f8495a61332fc866cebea7c6eaad24acba6b07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c51b85ca999a7b91487820dc9cbdfa937311d24c919b52a4f4a468b595fd45a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c51b85ca999a7b91487820dc9cbdfa937311d24c919b52a4f4a468b595fd45a6->enter($__internal_c51b85ca999a7b91487820dc9cbdfa937311d24c919b52a4f4a468b595fd45a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Menu Page";
        
        $__internal_c51b85ca999a7b91487820dc9cbdfa937311d24c919b52a4f4a468b595fd45a6->leave($__internal_c51b85ca999a7b91487820dc9cbdfa937311d24c919b52a4f4a468b595fd45a6_prof);

        
        $__internal_d5fce589bff3f86a616e1c655f8495a61332fc866cebea7c6eaad24acba6b07e->leave($__internal_d5fce589bff3f86a616e1c655f8495a61332fc866cebea7c6eaad24acba6b07e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_119874fe42b58e36fa037f2195f44de69a8920d1b090eff1cff48298a02ab456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119874fe42b58e36fa037f2195f44de69a8920d1b090eff1cff48298a02ab456->enter($__internal_119874fe42b58e36fa037f2195f44de69a8920d1b090eff1cff48298a02ab456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_00bbf1efdb72afea889f728aefc2ff762e25690a6529391ee4968f92dfa460f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00bbf1efdb72afea889f728aefc2ff762e25690a6529391ee4968f92dfa460f2->enter($__internal_00bbf1efdb72afea889f728aefc2ff762e25690a6529391ee4968f92dfa460f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

    ";
        // line 8
        if ((isset($context["userLoggedIn"]) || array_key_exists("userLoggedIn", $context) ? $context["userLoggedIn"] : (function () { throw new Twig_Error_Runtime('Variable "userLoggedIn" does not exist.', 8, $this->getSourceContext()); })())) {
            // line 9
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Logout</a> |

        <a href=\"";
            // line 11
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categories_add");
            echo "\">
            Add New Category
        </a>
    ";
        } else {
            // line 15
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Login</a>
    ";
        }
        // line 17
        echo "
    <div style=\"margin-top: 20px\"> ";
        // line 18
        echo (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new Twig_Error_Runtime('Variable "menu" does not exist.', 18, $this->getSourceContext()); })());
        echo " </div>

";
        
        $__internal_00bbf1efdb72afea889f728aefc2ff762e25690a6529391ee4968f92dfa460f2->leave($__internal_00bbf1efdb72afea889f728aefc2ff762e25690a6529391ee4968f92dfa460f2_prof);

        
        $__internal_119874fe42b58e36fa037f2195f44de69a8920d1b090eff1cff48298a02ab456->leave($__internal_119874fe42b58e36fa037f2195f44de69a8920d1b090eff1cff48298a02ab456_prof);

    }

    public function getTemplateName()
    {
        return "menu/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 18,  93 => 17,  87 => 15,  80 => 11,  74 => 9,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Menu Page{% endblock %}

{% block body %}


    {% if userLoggedIn %}
        <a href=\"{{ path('logout') }}\">Logout</a> |

        <a href=\"{{ path('categories_add') }}\">
            Add New Category
        </a>
    {% else %}
        <a href=\"{{ path('login') }}\">Login</a>
    {% endif %}

    <div style=\"margin-top: 20px\"> {{ menu|raw }} </div>

{% endblock %}", "menu/index.html.twig", "/Users/khalid/PhpstormProjects/menu-task/templates/menu/index.html.twig");
    }
}

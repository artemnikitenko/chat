<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_58dca2b0e2c061807718de7baf39777a40170de4a3abed39169c55b23109d46c extends Twig_Template
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
        $__internal_f041efb68dfb962ed9bb41a96f05c0e3850e0ef1ae3384a5a4b5ad6034923455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f041efb68dfb962ed9bb41a96f05c0e3850e0ef1ae3384a5a4b5ad6034923455->enter($__internal_f041efb68dfb962ed9bb41a96f05c0e3850e0ef1ae3384a5a4b5ad6034923455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a125163e3bec5df1dde4c5390e9d68862be94a80467b68593fd8f7298820deb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a125163e3bec5df1dde4c5390e9d68862be94a80467b68593fd8f7298820deb1->enter($__internal_a125163e3bec5df1dde4c5390e9d68862be94a80467b68593fd8f7298820deb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f041efb68dfb962ed9bb41a96f05c0e3850e0ef1ae3384a5a4b5ad6034923455->leave($__internal_f041efb68dfb962ed9bb41a96f05c0e3850e0ef1ae3384a5a4b5ad6034923455_prof);

        
        $__internal_a125163e3bec5df1dde4c5390e9d68862be94a80467b68593fd8f7298820deb1->leave($__internal_a125163e3bec5df1dde4c5390e9d68862be94a80467b68593fd8f7298820deb1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_952b0528bb5d25ff8cdf461d303efb88e9c9d7d1171640326435e161878f942e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_952b0528bb5d25ff8cdf461d303efb88e9c9d7d1171640326435e161878f942e->enter($__internal_952b0528bb5d25ff8cdf461d303efb88e9c9d7d1171640326435e161878f942e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_319724f447f8fbf1efe49f8b7cbc76188f220e100e87780fa50ddc32e1338bcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319724f447f8fbf1efe49f8b7cbc76188f220e100e87780fa50ddc32e1338bcb->enter($__internal_319724f447f8fbf1efe49f8b7cbc76188f220e100e87780fa50ddc32e1338bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_319724f447f8fbf1efe49f8b7cbc76188f220e100e87780fa50ddc32e1338bcb->leave($__internal_319724f447f8fbf1efe49f8b7cbc76188f220e100e87780fa50ddc32e1338bcb_prof);

        
        $__internal_952b0528bb5d25ff8cdf461d303efb88e9c9d7d1171640326435e161878f942e->leave($__internal_952b0528bb5d25ff8cdf461d303efb88e9c9d7d1171640326435e161878f942e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c24e91a992f3cf3204d848dbbddd694ccad7bed84303a62b6517c1ff1e1e7d97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c24e91a992f3cf3204d848dbbddd694ccad7bed84303a62b6517c1ff1e1e7d97->enter($__internal_c24e91a992f3cf3204d848dbbddd694ccad7bed84303a62b6517c1ff1e1e7d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6352e8681c3477ba42515c27759d6079fee59bdab47da1a9c05f852ee2c5d5eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6352e8681c3477ba42515c27759d6079fee59bdab47da1a9c05f852ee2c5d5eb->enter($__internal_6352e8681c3477ba42515c27759d6079fee59bdab47da1a9c05f852ee2c5d5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_6352e8681c3477ba42515c27759d6079fee59bdab47da1a9c05f852ee2c5d5eb->leave($__internal_6352e8681c3477ba42515c27759d6079fee59bdab47da1a9c05f852ee2c5d5eb_prof);

        
        $__internal_c24e91a992f3cf3204d848dbbddd694ccad7bed84303a62b6517c1ff1e1e7d97->leave($__internal_c24e91a992f3cf3204d848dbbddd694ccad7bed84303a62b6517c1ff1e1e7d97_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_798105d2309c3640a1c8ffea82659a3e93372ca316385243020ddcb319636d72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_798105d2309c3640a1c8ffea82659a3e93372ca316385243020ddcb319636d72->enter($__internal_798105d2309c3640a1c8ffea82659a3e93372ca316385243020ddcb319636d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4e53360a27568f97c49c8d4e49fc2cfef98e27195509c4903ea0682a077b130d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e53360a27568f97c49c8d4e49fc2cfef98e27195509c4903ea0682a077b130d->enter($__internal_4e53360a27568f97c49c8d4e49fc2cfef98e27195509c4903ea0682a077b130d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4e53360a27568f97c49c8d4e49fc2cfef98e27195509c4903ea0682a077b130d->leave($__internal_4e53360a27568f97c49c8d4e49fc2cfef98e27195509c4903ea0682a077b130d_prof);

        
        $__internal_798105d2309c3640a1c8ffea82659a3e93372ca316385243020ddcb319636d72->leave($__internal_798105d2309c3640a1c8ffea82659a3e93372ca316385243020ddcb319636d72_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/exception.html.twig", "/home/artem/Develop/chat/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

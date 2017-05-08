<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3ced7019cf1fa1aff3116397c38aad92562476fd584fcbc81543acb7f9b7e441 extends Twig_Template
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
        $__internal_9698de68f877d0eb849dbfe3c21f8b8fa8366291c65c6b9db533e8032d18fd62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9698de68f877d0eb849dbfe3c21f8b8fa8366291c65c6b9db533e8032d18fd62->enter($__internal_9698de68f877d0eb849dbfe3c21f8b8fa8366291c65c6b9db533e8032d18fd62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_34c5fd72460f70bd10a3f69c38904cbb7a55acbbdb4e489fda74fa1e6413bd9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c5fd72460f70bd10a3f69c38904cbb7a55acbbdb4e489fda74fa1e6413bd9b->enter($__internal_34c5fd72460f70bd10a3f69c38904cbb7a55acbbdb4e489fda74fa1e6413bd9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9698de68f877d0eb849dbfe3c21f8b8fa8366291c65c6b9db533e8032d18fd62->leave($__internal_9698de68f877d0eb849dbfe3c21f8b8fa8366291c65c6b9db533e8032d18fd62_prof);

        
        $__internal_34c5fd72460f70bd10a3f69c38904cbb7a55acbbdb4e489fda74fa1e6413bd9b->leave($__internal_34c5fd72460f70bd10a3f69c38904cbb7a55acbbdb4e489fda74fa1e6413bd9b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e066dbd0a6afc53a543c34ef16d93d5bae7f4d87fecc9ca07229ddccf427ae5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e066dbd0a6afc53a543c34ef16d93d5bae7f4d87fecc9ca07229ddccf427ae5a->enter($__internal_e066dbd0a6afc53a543c34ef16d93d5bae7f4d87fecc9ca07229ddccf427ae5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bab0d995128fec25b8ab7abda0f63db9d9b1f63e7d157cb4edc7065cd56b5e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bab0d995128fec25b8ab7abda0f63db9d9b1f63e7d157cb4edc7065cd56b5e62->enter($__internal_bab0d995128fec25b8ab7abda0f63db9d9b1f63e7d157cb4edc7065cd56b5e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bab0d995128fec25b8ab7abda0f63db9d9b1f63e7d157cb4edc7065cd56b5e62->leave($__internal_bab0d995128fec25b8ab7abda0f63db9d9b1f63e7d157cb4edc7065cd56b5e62_prof);

        
        $__internal_e066dbd0a6afc53a543c34ef16d93d5bae7f4d87fecc9ca07229ddccf427ae5a->leave($__internal_e066dbd0a6afc53a543c34ef16d93d5bae7f4d87fecc9ca07229ddccf427ae5a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9692d13922b7643119326707c8f6a3b804a6aa5db6089a13b6729a2f3fbd0ed3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9692d13922b7643119326707c8f6a3b804a6aa5db6089a13b6729a2f3fbd0ed3->enter($__internal_9692d13922b7643119326707c8f6a3b804a6aa5db6089a13b6729a2f3fbd0ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1f8d7d59e1c30b7d61c69ad8b6622359c9f691ca5d84e7160ed749338f1f67b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f8d7d59e1c30b7d61c69ad8b6622359c9f691ca5d84e7160ed749338f1f67b5->enter($__internal_1f8d7d59e1c30b7d61c69ad8b6622359c9f691ca5d84e7160ed749338f1f67b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1f8d7d59e1c30b7d61c69ad8b6622359c9f691ca5d84e7160ed749338f1f67b5->leave($__internal_1f8d7d59e1c30b7d61c69ad8b6622359c9f691ca5d84e7160ed749338f1f67b5_prof);

        
        $__internal_9692d13922b7643119326707c8f6a3b804a6aa5db6089a13b6729a2f3fbd0ed3->leave($__internal_9692d13922b7643119326707c8f6a3b804a6aa5db6089a13b6729a2f3fbd0ed3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_26c0c6052d141223ba722d04a7aaae47cbcea75c573810b80d90a7d647dd7178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26c0c6052d141223ba722d04a7aaae47cbcea75c573810b80d90a7d647dd7178->enter($__internal_26c0c6052d141223ba722d04a7aaae47cbcea75c573810b80d90a7d647dd7178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_09b136f972efc7e7a6dbe2143b92940b0d99b97d0af95846f5deff5b80ff269e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b136f972efc7e7a6dbe2143b92940b0d99b97d0af95846f5deff5b80ff269e->enter($__internal_09b136f972efc7e7a6dbe2143b92940b0d99b97d0af95846f5deff5b80ff269e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_09b136f972efc7e7a6dbe2143b92940b0d99b97d0af95846f5deff5b80ff269e->leave($__internal_09b136f972efc7e7a6dbe2143b92940b0d99b97d0af95846f5deff5b80ff269e_prof);

        
        $__internal_26c0c6052d141223ba722d04a7aaae47cbcea75c573810b80d90a7d647dd7178->leave($__internal_26c0c6052d141223ba722d04a7aaae47cbcea75c573810b80d90a7d647dd7178_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/router.html.twig", "/home/artem/Develop/chat/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_3fd4999c1ef253029e32a8e250a9ab440f276ad6d8e32cc9a92fe159035d4b3e extends Twig_Template
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
        $__internal_e6f2bd0f653ebc1a066a638c7c5b033de39540af19bc5d56ae75f2774e9bc6bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6f2bd0f653ebc1a066a638c7c5b033de39540af19bc5d56ae75f2774e9bc6bf->enter($__internal_e6f2bd0f653ebc1a066a638c7c5b033de39540af19bc5d56ae75f2774e9bc6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_7ab7efc48d06f96c6b1062afe64e6938e551d0c1f7405843beca046b9c1dce71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ab7efc48d06f96c6b1062afe64e6938e551d0c1f7405843beca046b9c1dce71->enter($__internal_7ab7efc48d06f96c6b1062afe64e6938e551d0c1f7405843beca046b9c1dce71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6f2bd0f653ebc1a066a638c7c5b033de39540af19bc5d56ae75f2774e9bc6bf->leave($__internal_e6f2bd0f653ebc1a066a638c7c5b033de39540af19bc5d56ae75f2774e9bc6bf_prof);

        
        $__internal_7ab7efc48d06f96c6b1062afe64e6938e551d0c1f7405843beca046b9c1dce71->leave($__internal_7ab7efc48d06f96c6b1062afe64e6938e551d0c1f7405843beca046b9c1dce71_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8d49ef1d9499209694f2bb065fee900cd97f38da2792cc6b5403227d5a83b058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d49ef1d9499209694f2bb065fee900cd97f38da2792cc6b5403227d5a83b058->enter($__internal_8d49ef1d9499209694f2bb065fee900cd97f38da2792cc6b5403227d5a83b058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a58ff7fb107c5bb2d54226df7c997013652aa13e24755ff17c5451681bf05ca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a58ff7fb107c5bb2d54226df7c997013652aa13e24755ff17c5451681bf05ca8->enter($__internal_a58ff7fb107c5bb2d54226df7c997013652aa13e24755ff17c5451681bf05ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
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
        
        $__internal_a58ff7fb107c5bb2d54226df7c997013652aa13e24755ff17c5451681bf05ca8->leave($__internal_a58ff7fb107c5bb2d54226df7c997013652aa13e24755ff17c5451681bf05ca8_prof);

        
        $__internal_8d49ef1d9499209694f2bb065fee900cd97f38da2792cc6b5403227d5a83b058->leave($__internal_8d49ef1d9499209694f2bb065fee900cd97f38da2792cc6b5403227d5a83b058_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
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
", "@WebProfiler/Collector/ajax.html.twig", "/home/artem/Develop/chat/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}

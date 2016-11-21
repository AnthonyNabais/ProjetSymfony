<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_280d7fbd8f93a00a44497cc77899e79ec7816388eb697802cc01d24718795251 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86135aa68f07e66a950a9de71e66879b59d1fa69d24b2e2fd3467d28c15d465c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86135aa68f07e66a950a9de71e66879b59d1fa69d24b2e2fd3467d28c15d465c->enter($__internal_86135aa68f07e66a950a9de71e66879b59d1fa69d24b2e2fd3467d28c15d465c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86135aa68f07e66a950a9de71e66879b59d1fa69d24b2e2fd3467d28c15d465c->leave($__internal_86135aa68f07e66a950a9de71e66879b59d1fa69d24b2e2fd3467d28c15d465c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_24dbc1a0071c3b8d0077abc2a583e4c2cdf85ead30779c56bee9750b4bf2e6b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24dbc1a0071c3b8d0077abc2a583e4c2cdf85ead30779c56bee9750b4bf2e6b4->enter($__internal_24dbc1a0071c3b8d0077abc2a583e4c2cdf85ead30779c56bee9750b4bf2e6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_24dbc1a0071c3b8d0077abc2a583e4c2cdf85ead30779c56bee9750b4bf2e6b4->leave($__internal_24dbc1a0071c3b8d0077abc2a583e4c2cdf85ead30779c56bee9750b4bf2e6b4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b16710bbe4efaed2d11cd4cf7d2e3a55b831db18b30ac5bca4adb382623d0dc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b16710bbe4efaed2d11cd4cf7d2e3a55b831db18b30ac5bca4adb382623d0dc7->enter($__internal_b16710bbe4efaed2d11cd4cf7d2e3a55b831db18b30ac5bca4adb382623d0dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b16710bbe4efaed2d11cd4cf7d2e3a55b831db18b30ac5bca4adb382623d0dc7->leave($__internal_b16710bbe4efaed2d11cd4cf7d2e3a55b831db18b30ac5bca4adb382623d0dc7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1363bbd34e6794a4ffc6686928f782681730cfa842f8c8ee4c2a89441ed5397f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1363bbd34e6794a4ffc6686928f782681730cfa842f8c8ee4c2a89441ed5397f->enter($__internal_1363bbd34e6794a4ffc6686928f782681730cfa842f8c8ee4c2a89441ed5397f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1363bbd34e6794a4ffc6686928f782681730cfa842f8c8ee4c2a89441ed5397f->leave($__internal_1363bbd34e6794a4ffc6686928f782681730cfa842f8c8ee4c2a89441ed5397f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\ProjetSymfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}

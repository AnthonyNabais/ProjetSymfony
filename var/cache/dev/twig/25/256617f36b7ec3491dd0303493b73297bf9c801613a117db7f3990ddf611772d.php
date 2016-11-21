<?php

/* projet/createmachine.html.twig */
class __TwigTemplate_7f911aa5dea2b017cc4bb46a291ef153453d8e67fe47460b1171d0c70a6b83ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "projet/createmachine.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1ed82048112922ab40644a5a8ef97e96f831b5c431a2ed3d4e2055eaf685fd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1ed82048112922ab40644a5a8ef97e96f831b5c431a2ed3d4e2055eaf685fd9->enter($__internal_c1ed82048112922ab40644a5a8ef97e96f831b5c431a2ed3d4e2055eaf685fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet/createmachine.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1ed82048112922ab40644a5a8ef97e96f831b5c431a2ed3d4e2055eaf685fd9->leave($__internal_c1ed82048112922ab40644a5a8ef97e96f831b5c431a2ed3d4e2055eaf685fd9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e59fe77ba018946cb91ef5da4b2b7b022baede392936aecb603bee965c79cf85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e59fe77ba018946cb91ef5da4b2b7b022baede392936aecb603bee965c79cf85->enter($__internal_e59fe77ba018946cb91ef5da4b2b7b022baede392936aecb603bee965c79cf85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "projet/createmachine.html.twig"));

        // line 4
        echo "\t<h2 class=\"page-header\">Add Machines</h2>
\t";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        
        $__internal_e59fe77ba018946cb91ef5da4b2b7b022baede392936aecb603bee965c79cf85->leave($__internal_e59fe77ba018946cb91ef5da4b2b7b022baede392936aecb603bee965c79cf85_prof);

    }

    public function getTemplateName()
    {
        return "projet/createmachine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
\t<h2 class=\"page-header\">Add Machines</h2>
\t{{form_start(form)}}
\t{{form_widget(form)}}
\t{{form_start(form)}}
{% endblock %}", "projet/createmachine.html.twig", "C:\\wamp64\\www\\ProjetSymfo\\app\\Resources\\views\\projet\\createmachine.html.twig");
    }
}

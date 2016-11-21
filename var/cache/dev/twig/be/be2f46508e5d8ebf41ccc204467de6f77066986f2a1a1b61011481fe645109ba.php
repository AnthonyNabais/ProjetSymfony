<?php

/* projet/createroom.html.twig */
class __TwigTemplate_c21983a4f74093721c01f85554e3d5cbe05105102fd984531bbca1318492541a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "projet/createroom.html.twig", 1);
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
        $__internal_d8d1a8a87fd170244c19bcba81d6efda72281eb94cf684525fb7d27fa581a1d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8d1a8a87fd170244c19bcba81d6efda72281eb94cf684525fb7d27fa581a1d0->enter($__internal_d8d1a8a87fd170244c19bcba81d6efda72281eb94cf684525fb7d27fa581a1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet/createroom.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8d1a8a87fd170244c19bcba81d6efda72281eb94cf684525fb7d27fa581a1d0->leave($__internal_d8d1a8a87fd170244c19bcba81d6efda72281eb94cf684525fb7d27fa581a1d0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2da3abdc81f1e293265733377c412cf4a995dd16efb9eaf8d9df6416693aad0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2da3abdc81f1e293265733377c412cf4a995dd16efb9eaf8d9df6416693aad0f->enter($__internal_2da3abdc81f1e293265733377c412cf4a995dd16efb9eaf8d9df6416693aad0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "projet/createroom.html.twig"));

        // line 4
        echo "\t<h2 class=\"page-header\">Add Rooms</h2>
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
        
        $__internal_2da3abdc81f1e293265733377c412cf4a995dd16efb9eaf8d9df6416693aad0f->leave($__internal_2da3abdc81f1e293265733377c412cf4a995dd16efb9eaf8d9df6416693aad0f_prof);

    }

    public function getTemplateName()
    {
        return "projet/createroom.html.twig";
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
\t<h2 class=\"page-header\">Add Rooms</h2>
\t{{form_start(form)}}
\t{{form_widget(form)}}
\t{{form_start(form)}}
{% endblock %}", "projet/createroom.html.twig", "C:\\wamp64\\www\\ProjetSymfo\\app\\Resources\\views\\projet\\createroom.html.twig");
    }
}

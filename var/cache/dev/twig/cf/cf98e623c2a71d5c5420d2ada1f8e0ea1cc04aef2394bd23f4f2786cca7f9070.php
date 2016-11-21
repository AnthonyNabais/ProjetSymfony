<?php

/* projet/editroom.html.twig */
class __TwigTemplate_dd9e1fd53a747707c0ae1948eb8db55e92f1776810c560ef54fb78cbe83213f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "projet/editroom.html.twig", 1);
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
        $__internal_368decf3eeb2b4f4917c3e519ccd9d87bbd201775ffff56c6f0576a79231fc1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_368decf3eeb2b4f4917c3e519ccd9d87bbd201775ffff56c6f0576a79231fc1e->enter($__internal_368decf3eeb2b4f4917c3e519ccd9d87bbd201775ffff56c6f0576a79231fc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet/editroom.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_368decf3eeb2b4f4917c3e519ccd9d87bbd201775ffff56c6f0576a79231fc1e->leave($__internal_368decf3eeb2b4f4917c3e519ccd9d87bbd201775ffff56c6f0576a79231fc1e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_09a78430c4e0aa561b380340f82b32bbcc551461cd14cd6a359879083de14cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a78430c4e0aa561b380340f82b32bbcc551461cd14cd6a359879083de14cbc->enter($__internal_09a78430c4e0aa561b380340f82b32bbcc551461cd14cd6a359879083de14cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "projet/editroom.html.twig"));

        // line 4
        echo "\t<h2 class=\"page-header\">Edit Room</h2>
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
        
        $__internal_09a78430c4e0aa561b380340f82b32bbcc551461cd14cd6a359879083de14cbc->leave($__internal_09a78430c4e0aa561b380340f82b32bbcc551461cd14cd6a359879083de14cbc_prof);

    }

    public function getTemplateName()
    {
        return "projet/editroom.html.twig";
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
\t<h2 class=\"page-header\">Edit Room</h2>
\t{{form_start(form)}}
\t{{form_widget(form)}}
\t{{form_start(form)}}
{% endblock %}", "projet/editroom.html.twig", "C:\\wamp64\\www\\ProjetSymfo\\app\\Resources\\views\\projet\\editroom.html.twig");
    }
}

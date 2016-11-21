<?php

/* projet/edit.html.twig */
class __TwigTemplate_7ff900d435303f662360f3c5eb77c25603c001e391841e78b4123761855052a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "projet/edit.html.twig", 1);
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
        $__internal_29f05f2ca4312e2b697a5a835b8fd9bd166c9d6478eeb748fd0e1521040647af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29f05f2ca4312e2b697a5a835b8fd9bd166c9d6478eeb748fd0e1521040647af->enter($__internal_29f05f2ca4312e2b697a5a835b8fd9bd166c9d6478eeb748fd0e1521040647af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29f05f2ca4312e2b697a5a835b8fd9bd166c9d6478eeb748fd0e1521040647af->leave($__internal_29f05f2ca4312e2b697a5a835b8fd9bd166c9d6478eeb748fd0e1521040647af_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_10770df520f5fb4d0ce320f813fbb7b35610e47c78a75ba082897fb5034c70e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10770df520f5fb4d0ce320f813fbb7b35610e47c78a75ba082897fb5034c70e6->enter($__internal_10770df520f5fb4d0ce320f813fbb7b35610e47c78a75ba082897fb5034c70e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "projet/edit.html.twig"));

        // line 4
        echo "\t<h2 class=\"page-header\">Edit Machines</h2>
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
        
        $__internal_10770df520f5fb4d0ce320f813fbb7b35610e47c78a75ba082897fb5034c70e6->leave($__internal_10770df520f5fb4d0ce320f813fbb7b35610e47c78a75ba082897fb5034c70e6_prof);

    }

    public function getTemplateName()
    {
        return "projet/edit.html.twig";
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
\t<h2 class=\"page-header\">Edit Machines</h2>
\t{{form_start(form)}}
\t{{form_widget(form)}}
\t{{form_start(form)}}
{% endblock %}", "projet/edit.html.twig", "C:\\wamp64\\www\\ProjetSymfo\\app\\Resources\\views\\projet\\edit.html.twig");
    }
}

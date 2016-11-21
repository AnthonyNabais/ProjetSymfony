<?php

/* projet/details.html.twig */
class __TwigTemplate_75d977f16ccad1171dd1c556691bd59fd5b563a9aeb42839a0ffc25a724f4cc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "projet/details.html.twig", 1);
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
        $__internal_9cb67f431451d00f269b8eb8264b5512f3d45ba610433ce6835a4e7f94459722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cb67f431451d00f269b8eb8264b5512f3d45ba610433ce6835a4e7f94459722->enter($__internal_9cb67f431451d00f269b8eb8264b5512f3d45ba610433ce6835a4e7f94459722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cb67f431451d00f269b8eb8264b5512f3d45ba610433ce6835a4e7f94459722->leave($__internal_9cb67f431451d00f269b8eb8264b5512f3d45ba610433ce6835a4e7f94459722_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1eeb02438679de2a480be6db5890f752e1863e015b498e321ea528b693dd85bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eeb02438679de2a480be6db5890f752e1863e015b498e321ea528b693dd85bf->enter($__internal_1eeb02438679de2a480be6db5890f752e1863e015b498e321ea528b693dd85bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "projet/details.html.twig"));

        // line 4
        echo "\t<h1>Machine Details</h1>
\t<hr>
\t<h2 class=\"page-header\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machine"]) ? $context["machine"] : $this->getContext($context, "machine")), "name", array()), "html", null, true);
        echo "</h2>
\t<ul class=\"list-group\">
\t<li class=\"list-group-item\">IP: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machine"]) ? $context["machine"] : $this->getContext($context, "machine")), "ip", array()), "html", null, true);
        echo "</li>
\t<li class=\"list-group-item\">Creator: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machine"]) ? $context["machine"] : $this->getContext($context, "machine")), "user", array()), "html", null, true);
        echo "</li>
\t<li class=\"list-group-item\">Creation Date: <strong>";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["machine"]) ? $context["machine"] : $this->getContext($context, "machine")), "creationdate", array()), "F j, Y, g:i a"), "html", null, true);
        echo "</strong></li>
\t<li class=\"list-group-item\">Room: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machine"]) ? $context["machine"] : $this->getContext($context, "machine")), "room", array()), "html", null, true);
        echo "</li>
\t<li class=\"list-group-item\">State: ";
        // line 12
        if (($this->getAttribute((isset($context["machine"]) ? $context["machine"] : $this->getContext($context, "machine")), "state", array()) == 0)) {
            echo "<strong>Off since ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["machine"]) ? $context["machine"] : $this->getContext($context, "machine")), "statedate", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</strong>";
        } else {
            echo "<strong>On since ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["machine"]) ? $context["machine"] : $this->getContext($context, "machine")), "statedate", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</strong>";
        }
        echo "</li>
\t<li class=\"list-group-item\">Connection: ";
        // line 13
        if (($this->getAttribute((isset($context["machine"]) ? $context["machine"] : $this->getContext($context, "machine")), "ping", array()) == 0)) {
            echo "<strong>Last seen on ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["machine"]) ? $context["machine"] : $this->getContext($context, "machine")), "pingdate", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</strong>";
        } else {
            echo "<strong>Device connected since ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["machine"]) ? $context["machine"] : $this->getContext($context, "machine")), "pingdate", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</strong>";
        }
        echo "</li>
\t</ul>



";
        
        $__internal_1eeb02438679de2a480be6db5890f752e1863e015b498e321ea528b693dd85bf->leave($__internal_1eeb02438679de2a480be6db5890f752e1863e015b498e321ea528b693dd85bf_prof);

    }

    public function getTemplateName()
    {
        return "projet/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 13,  65 => 12,  61 => 11,  57 => 10,  53 => 9,  49 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
\t<h1>Machine Details</h1>
\t<hr>
\t<h2 class=\"page-header\">{{machine.name}}</h2>
\t<ul class=\"list-group\">
\t<li class=\"list-group-item\">IP: {{machine.ip}}</li>
\t<li class=\"list-group-item\">Creator: {{machine.user}}</li>
\t<li class=\"list-group-item\">Creation Date: <strong>{{machine.creationdate | date('F j, Y, g:i a')}}</strong></li>
\t<li class=\"list-group-item\">Room: {{machine.room}}</li>
\t<li class=\"list-group-item\">State: {% if machine.state == 0 %}<strong>Off since {{machine.statedate | date('F j, Y, g:i a')}}</strong>{% else %}<strong>On since {{machine.statedate | date('F j, Y, g:i a')}}</strong>{% endif %}</li>
\t<li class=\"list-group-item\">Connection: {% if machine.ping == 0 %}<strong>Last seen on {{machine.pingdate | date('F j, Y, g:i a')}}</strong>{% else %}<strong>Device connected since {{machine.pingdate | date('F j, Y, g:i a')}}</strong>{% endif %}</li>
\t</ul>



{% endblock %}", "projet/details.html.twig", "C:\\wamp64\\www\\ProjetSymfo\\app\\Resources\\views\\projet\\details.html.twig");
    }
}

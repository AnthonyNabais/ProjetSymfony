<?php

/* projet/index.html.twig */
class __TwigTemplate_7f5ec750cb85e43af38eb8f7a737179d0542be3b0a01f79ec9d74186984ca28b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "projet/index.html.twig", 1);
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
        $__internal_c7b798a2f46a5996faaf248de69a64aa7c13e550d7218066c8d1b098a11b3810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b798a2f46a5996faaf248de69a64aa7c13e550d7218066c8d1b098a11b3810->enter($__internal_c7b798a2f46a5996faaf248de69a64aa7c13e550d7218066c8d1b098a11b3810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7b798a2f46a5996faaf248de69a64aa7c13e550d7218066c8d1b098a11b3810->leave($__internal_c7b798a2f46a5996faaf248de69a64aa7c13e550d7218066c8d1b098a11b3810_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf665181b83db221e112299006c0f463928d499e50c482038c79749bf455f1a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf665181b83db221e112299006c0f463928d499e50c482038c79749bf455f1a4->enter($__internal_bf665181b83db221e112299006c0f463928d499e50c482038c79749bf455f1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "projet/index.html.twig"));

        // line 4
        echo "
\t<h1>Welcome ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</h1>
\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) ? $context["rooms"] : $this->getContext($context, "rooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            echo "\t
\t<h2 class=\"page-header\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "name", array()), "html", null, true);
            echo " - room #";
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "id", array()), "html", null, true);
            echo " <a href=\"/projetsymfo/web/app_dev.php/projet/editroom/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-info btn-xs\">Rename</a>
\t <a href=\"/projetsymfo/web/app_dev.php/projet/deleteroom/";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger btn-xs \">Delete</a></h2>
\t<table class=\"table table-striped\"> 
\t<thead> 
\t\t<tr> 
\t\t<th><font size=\"4\">Machine Name</font></th>
\t\t<th><font size=\"4\">Machine IP</font></th> 
\t\t<th><font size=\"4\">Creator</font></th>  
\t\t<th><font size=\"4\">State</font></th>
\t\t<th><font size=\"4\">Ping</font></th>



\t\t<th></th>
\t\t</tr> 
\t</thead> 
\t
\t <tbody> 

\t\t ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["machines"]) ? $context["machines"] : $this->getContext($context, "machines")));
            foreach ($context['_seq'] as $context["_key"] => $context["machine"]) {
                if (($this->getAttribute($context["machine"], "room", array()) == $this->getAttribute($context["room"], "id", array()))) {
                    // line 27
                    echo "
\t\t <tr> 
\t\t <td>";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "name", array()), "html", null, true);
                    echo "</td> 
\t\t <td>";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "ip", array()), "html", null, true);
                    echo "</td> 
\t\t <td>";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "user", array()), "html", null, true);
                    echo "</td>  
\t\t <td>";
                    // line 32
                    if (($this->getAttribute($context["machine"], "state", array()) == 0)) {
                        echo "<strong>Off</strong>";
                    } else {
                        echo "<strong>On</strong>";
                    }
                    echo "</td>
\t\t <td>";
                    // line 33
                    if (($this->getAttribute($context["machine"], "ping", array()) == 0)) {
                        echo "<strong>Not OK</strong>";
                    } else {
                        echo "<strong>OK</strong>";
                    }
                    echo "</td>
\t\t <td>
\t\t <a href=\"/projetsymfo/web/app_dev.php/projet/details/";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "id", array()), "html", null, true);
                    echo "\" class=\"btn btn-success\">View</a>
\t\t <a href=\"/projetsymfo/web/app_dev.php/projet/edit/";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "id", array()), "html", null, true);
                    echo "\" class=\"btn btn-default\">Edit</a>
\t\t <a href=\"/projetsymfo/web/app_dev.php/projet/delete/";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "id", array()), "html", null, true);
                    echo "\" class=\"btn btn-danger\">Delete</a>
\t\t <a href=\"/projetsymfo/web/app_dev.php/projet/status/";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "id", array()), "html", null, true);
                    echo "\" class=\"btn btn-warning btn-xs\">On/Off</a>
\t\t <a href=\"/projetsymfo/web/app_dev.php/projet/ping/";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "id", array()), "html", null, true);
                    echo "\" class=\"btn btn-info btn-sm\">Ping</a>
\t  
\t\t </td>
\t\t </tr>  
\t\t ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['machine'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "\t </tbody> 
\t </table>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo " 
";
        
        $__internal_bf665181b83db221e112299006c0f463928d499e50c482038c79749bf455f1a4->leave($__internal_bf665181b83db221e112299006c0f463928d499e50c482038c79749bf455f1a4_prof);

    }

    public function getTemplateName()
    {
        return "projet/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 46,  148 => 44,  136 => 39,  132 => 38,  128 => 37,  124 => 36,  120 => 35,  111 => 33,  103 => 32,  99 => 31,  95 => 30,  91 => 29,  87 => 27,  82 => 26,  61 => 8,  53 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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

\t<h1>Welcome {{ app.user.username }}</h1>
\t{% for room in rooms %}\t
\t<h2 class=\"page-header\">{{room.name}} - room #{{room.id}} <a href=\"/projetsymfo/web/app_dev.php/projet/editroom/{{room.id}}\" class=\"btn btn-info btn-xs\">Rename</a>
\t <a href=\"/projetsymfo/web/app_dev.php/projet/deleteroom/{{room.id}}\" class=\"btn btn-danger btn-xs \">Delete</a></h2>
\t<table class=\"table table-striped\"> 
\t<thead> 
\t\t<tr> 
\t\t<th><font size=\"4\">Machine Name</font></th>
\t\t<th><font size=\"4\">Machine IP</font></th> 
\t\t<th><font size=\"4\">Creator</font></th>  
\t\t<th><font size=\"4\">State</font></th>
\t\t<th><font size=\"4\">Ping</font></th>



\t\t<th></th>
\t\t</tr> 
\t</thead> 
\t
\t <tbody> 

\t\t {% for machine in machines if machine.room == room.id %}

\t\t <tr> 
\t\t <td>{{machine.name}}</td> 
\t\t <td>{{machine.ip}}</td> 
\t\t <td>{{machine.user}}</td>  
\t\t <td>{% if machine.state == 0 %}<strong>Off</strong>{% else %}<strong>On</strong>{% endif %}</td>
\t\t <td>{% if machine.ping == 0 %}<strong>Not OK</strong>{% else %}<strong>OK</strong>{% endif %}</td>
\t\t <td>
\t\t <a href=\"/projetsymfo/web/app_dev.php/projet/details/{{machine.id}}\" class=\"btn btn-success\">View</a>
\t\t <a href=\"/projetsymfo/web/app_dev.php/projet/edit/{{machine.id}}\" class=\"btn btn-default\">Edit</a>
\t\t <a href=\"/projetsymfo/web/app_dev.php/projet/delete/{{machine.id}}\" class=\"btn btn-danger\">Delete</a>
\t\t <a href=\"/projetsymfo/web/app_dev.php/projet/status/{{machine.id}}\" class=\"btn btn-warning btn-xs\">On/Off</a>
\t\t <a href=\"/projetsymfo/web/app_dev.php/projet/ping/{{machine.id}}\" class=\"btn btn-info btn-sm\">Ping</a>
\t  
\t\t </td>
\t\t </tr>  
\t\t {% endfor %}
\t </tbody> 
\t </table>
\t{% endfor %} 
{% endblock %}", "projet/index.html.twig", "C:\\wamp64\\www\\ProjetSymfo\\app\\Resources\\views\\projet\\index.html.twig");
    }
}

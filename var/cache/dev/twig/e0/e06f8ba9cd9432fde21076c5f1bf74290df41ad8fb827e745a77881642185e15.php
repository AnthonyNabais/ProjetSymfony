<?php

/* projet/historyarchive.html.twig */
class __TwigTemplate_025ffbff4a00e675396d93182ac427337abb5017b77945e12fff74bac5009814 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "projet/historyarchive.html.twig", 1);
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
        $__internal_dcb30ccb79cc92164c185900313110b7923a977b8261c46fa7a622f2263f9cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcb30ccb79cc92164c185900313110b7923a977b8261c46fa7a622f2263f9cc5->enter($__internal_dcb30ccb79cc92164c185900313110b7923a977b8261c46fa7a622f2263f9cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet/historyarchive.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcb30ccb79cc92164c185900313110b7923a977b8261c46fa7a622f2263f9cc5->leave($__internal_dcb30ccb79cc92164c185900313110b7923a977b8261c46fa7a622f2263f9cc5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_20f9aedb268ff99cadb82936efc63bcf1c284490b031b13e45aa2ba8f5df55d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f9aedb268ff99cadb82936efc63bcf1c284490b031b13e45aa2ba8f5df55d3->enter($__internal_20f9aedb268ff99cadb82936efc63bcf1c284490b031b13e45aa2ba8f5df55d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "projet/historyarchive.html.twig"));

        // line 4
        echo "<h1>History Archive</h1>
<br>
<table class=\"table table-striped\"> 
<thead> 
\t<tr> 
\t<th><font size=\"5\">Information</font></th> 
\t<th><font size=\"5\">Name</font></th>
\t<th><font size=\"5\">Date</font></th>
\t<th></th>
\t</tr> 
</thead>

<tbody>
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["history"]) ? $context["history"] : $this->getContext($context, "history"))));
        foreach ($context['_seq'] as $context["_key"] => $context["historia"]) {
            // line 18
            echo " 
\t <tr> 
\t <td>";
            // line 20
            if (($this->getAttribute($context["historia"], "type", array()) == 1)) {
                echo "<font size= \"4\" color= \"green\">Room Added</font>";
            }
            echo " ";
            if (($this->getAttribute($context["historia"], "type", array()) == 2)) {
                echo "<font size= \"4\" color= \"green\">Machine Added</font>";
            }
            // line 21
            echo "\t ";
            if (($this->getAttribute($context["historia"], "type", array()) == 3)) {
                echo "<font size= \"4\" color= \"red\">Room Deleted</font>";
            }
            echo " 
\t ";
            // line 22
            if (($this->getAttribute($context["historia"], "type", array()) == 4)) {
                echo "<font size= \"4\" color= \"red\">Machine Deleted</font>";
            }
            echo " 
\t ";
            // line 23
            if (($this->getAttribute($context["historia"], "type", array()) == 5)) {
                echo "<font size= \"4\" color= \"orange\">Room Edited</font>";
            }
            echo " 
\t ";
            // line 24
            if (($this->getAttribute($context["historia"], "type", array()) == 6)) {
                echo "<font size= \"4\" color= \"orange\">Machine Edited</font>";
            }
            echo " 
\t ";
            // line 25
            if (($this->getAttribute($context["historia"], "type", array()) == 7)) {
                echo "<font size= \"4\" color= \"green\">Machine Turned On</font>";
            }
            // line 26
            echo "\t ";
            if (($this->getAttribute($context["historia"], "type", array()) == 8)) {
                echo "<font size= \"4\" color= \"red\">Machine Turned Off </font>";
            }
            echo "  
\t ";
            // line 27
            if (($this->getAttribute($context["historia"], "type", array()) == 9)) {
                echo "<font size= \"4\" color= \"dodgerblue\">Ping Request</font>";
            }
            echo "</td>
\t <td><font size=\"4\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["historia"], "name", array()), "html", null, true);
            echo "</font></td>  
\t <td><font size=\"4\">";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["historia"], "date", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</font></td> 
  
\t </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['historia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</tbody>   
</table>
\t
";
        
        $__internal_20f9aedb268ff99cadb82936efc63bcf1c284490b031b13e45aa2ba8f5df55d3->leave($__internal_20f9aedb268ff99cadb82936efc63bcf1c284490b031b13e45aa2ba8f5df55d3_prof);

    }

    public function getTemplateName()
    {
        return "projet/historyarchive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 33,  117 => 29,  113 => 28,  107 => 27,  100 => 26,  96 => 25,  90 => 24,  84 => 23,  78 => 22,  71 => 21,  63 => 20,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
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
<h1>History Archive</h1>
<br>
<table class=\"table table-striped\"> 
<thead> 
\t<tr> 
\t<th><font size=\"5\">Information</font></th> 
\t<th><font size=\"5\">Name</font></th>
\t<th><font size=\"5\">Date</font></th>
\t<th></th>
\t</tr> 
</thead>

<tbody>
{% for historia in history |reverse %}
 
\t <tr> 
\t <td>{% if historia.type == 1 %}<font size= \"4\" color= \"green\">Room Added</font>{% endif %} {% if historia.type == 2 %}<font size= \"4\" color= \"green\">Machine Added</font>{% endif %}
\t {% if historia.type == 3 %}<font size= \"4\" color= \"red\">Room Deleted</font>{% endif %} 
\t {% if historia.type == 4 %}<font size= \"4\" color= \"red\">Machine Deleted</font>{% endif %} 
\t {% if historia.type == 5 %}<font size= \"4\" color= \"orange\">Room Edited</font>{% endif %} 
\t {% if historia.type == 6 %}<font size= \"4\" color= \"orange\">Machine Edited</font>{% endif %} 
\t {% if historia.type == 7 %}<font size= \"4\" color= \"green\">Machine Turned On</font>{% endif %}
\t {% if historia.type == 8 %}<font size= \"4\" color= \"red\">Machine Turned Off </font>{% endif %}  
\t {% if historia.type == 9 %}<font size= \"4\" color= \"dodgerblue\">Ping Request</font>{% endif %}</td>
\t <td><font size=\"4\">{{historia.name}}</font></td>  
\t <td><font size=\"4\">{{historia.date | date('F j, Y, g:i a')}}</font></td> 
  
\t </tr>
{% endfor %}
</tbody>   
</table>
\t
{% endblock %}", "projet/historyarchive.html.twig", "C:\\wamp64\\www\\ProjetSymfo\\app\\Resources\\views\\projet\\historyarchive.html.twig");
    }
}

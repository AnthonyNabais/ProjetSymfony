<?php

/* projet/login.html.twig */
class __TwigTemplate_efb0d066aa0b8a16dba0a5a7856a238fcd3b26e00daf4c1fdf38158dee440854 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "projet/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00119e536f1113e47b5e389d040b0ca85ed7787665df8b6965014b5a0f50c1f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00119e536f1113e47b5e389d040b0ca85ed7787665df8b6965014b5a0f50c1f6->enter($__internal_00119e536f1113e47b5e389d040b0ca85ed7787665df8b6965014b5a0f50c1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00119e536f1113e47b5e389d040b0ca85ed7787665df8b6965014b5a0f50c1f6->leave($__internal_00119e536f1113e47b5e389d040b0ca85ed7787665df8b6965014b5a0f50c1f6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_44d8f50c758e4a4bda0f1bf0f040b659da8a34676282d71d55707fc7d24f9222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44d8f50c758e4a4bda0f1bf0f040b659da8a34676282d71d55707fc7d24f9222->enter($__internal_44d8f50c758e4a4bda0f1bf0f040b659da8a34676282d71d55707fc7d24f9222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "projet/login.html.twig"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
  ";
        }
        // line 9
        echo "  <br>
  ";
        // line 11
        echo "  <div class=\"login-block\">
  <h2>Sign In</h2>
  <form action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
    <label for=\"username\">Login :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <br>
    <br>
    <input type=\"submit\" value=\"Connection\" id=\"submit\"/>
  </form>
  </div>

";
        
        $__internal_44d8f50c758e4a4bda0f1bf0f040b659da8a34676282d71d55707fc7d24f9222->leave($__internal_44d8f50c758e4a4bda0f1bf0f040b659da8a34676282d71d55707fc7d24f9222_prof);

    }

    public function getTemplateName()
    {
        return "projet/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 15,  59 => 13,  55 => 11,  52 => 9,  46 => 7,  43 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base2.html.twig' %}

{% block body %}

  {# S'il y a une erreur, on l'affiche dans un joli cadre #}
  {% if error %}
    <div class=\"alert alert-danger\">{{ error.message }}</div>
  {% endif %}
  <br>
  {# Le formulaire, avec URL de soumission vers la route « login_check » comme on l'a vu #}
  <div class=\"login-block\">
  <h2>Sign In</h2>
  <form action=\"{{ path('login_check') }}\" method=\"post\">
    <label for=\"username\">Login :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Password :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <br>
    <br>
    <input type=\"submit\" value=\"Connection\" id=\"submit\"/>
  </form>
  </div>

{% endblock %}", "projet/login.html.twig", "C:\\wamp64\\www\\ProjetSymfo\\app\\Resources\\views\\projet\\login.html.twig");
    }
}

<?php

/* base.html.twig */
class __TwigTemplate_04b02e67dbf6f23fc29c0a3469fb36586a53acb9c52d165808f8a0653d13bcd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c259fd9a2cf0b33b7059a3d35e9801a4c9696ce38acdd5bb398b5dc7c7732138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c259fd9a2cf0b33b7059a3d35e9801a4c9696ce38acdd5bb398b5dc7c7732138->enter($__internal_c259fd9a2cf0b33b7059a3d35e9801a4c9696ce38acdd5bb398b5dc7c7732138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">

    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

  </head>
  <body>

    <nav class=\"navbar navbar-inverse\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"/projetsymfo/web/app_dev.php\">Machines' room</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li><a href=\"/projetsymfo/web/app_dev.php/projet/createroom\">Add room</a></li>
            <li><a href=\"/projetsymfo/web/app_dev.php/projet/createmachine\">Add machine</a></li>
            <li><a href=\"/projetsymfo/web/app_dev.php/projet/fullping\">Full Ping</a></li>
            <li><a href=\"/projetsymfo/web/app_dev.php/projet/historyarchive\">History Archive</a></li>
          </ul>
          <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"/projetsymfo/web/app_dev.php/logout\">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "            </div>
        </div>

    </div>
";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "
  </body>
</html>
";
        
        $__internal_c259fd9a2cf0b33b7059a3d35e9801a4c9696ce38acdd5bb398b5dc7c7732138->leave($__internal_c259fd9a2cf0b33b7059a3d35e9801a4c9696ce38acdd5bb398b5dc7c7732138_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_de53bfc0a1fe6e077f19dc942e7d64214cb7523b75df320c9dc1cddf920fdc87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de53bfc0a1fe6e077f19dc942e7d64214cb7523b75df320c9dc1cddf920fdc87->enter($__internal_de53bfc0a1fe6e077f19dc942e7d64214cb7523b75df320c9dc1cddf920fdc87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_de53bfc0a1fe6e077f19dc942e7d64214cb7523b75df320c9dc1cddf920fdc87->leave($__internal_de53bfc0a1fe6e077f19dc942e7d64214cb7523b75df320c9dc1cddf920fdc87_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6e73db115f53a4e1236078ff3ab699a38b0a3d5148e51145175578326d51fef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e73db115f53a4e1236078ff3ab699a38b0a3d5148e51145175578326d51fef5->enter($__internal_6e73db115f53a4e1236078ff3ab699a38b0a3d5148e51145175578326d51fef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_6e73db115f53a4e1236078ff3ab699a38b0a3d5148e51145175578326d51fef5->leave($__internal_6e73db115f53a4e1236078ff3ab699a38b0a3d5148e51145175578326d51fef5_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad72b1bc559011ab0ada90d544fee046bec37cc91e6e5a6fd33cd02a7216839f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad72b1bc559011ab0ada90d544fee046bec37cc91e6e5a6fd33cd02a7216839f->enter($__internal_ad72b1bc559011ab0ada90d544fee046bec37cc91e6e5a6fd33cd02a7216839f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_ad72b1bc559011ab0ada90d544fee046bec37cc91e6e5a6fd33cd02a7216839f->leave($__internal_ad72b1bc559011ab0ada90d544fee046bec37cc91e6e5a6fd33cd02a7216839f_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3f105522343f49c7cbeb6e7e90910385f276de8897cffda8cb9bf343df183b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f105522343f49c7cbeb6e7e90910385f276de8897cffda8cb9bf343df183b65->enter($__internal_3f105522343f49c7cbeb6e7e90910385f276de8897cffda8cb9bf343df183b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_3f105522343f49c7cbeb6e7e90910385f276de8897cffda8cb9bf343df183b65->leave($__internal_3f105522343f49c7cbeb6e7e90910385f276de8897cffda8cb9bf343df183b65_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 54,  127 => 49,  116 => 16,  104 => 11,  94 => 55,  92 => 54,  86 => 50,  84 => 49,  48 => 17,  46 => 16,  38 => 11,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>{% block title %}Welcome!{% endblock %}</title>


    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">

    {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

  </head>
  <body>

    <nav class=\"navbar navbar-inverse\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"/projetsymfo/web/app_dev.php\">Machines' room</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li><a href=\"/projetsymfo/web/app_dev.php/projet/createroom\">Add room</a></li>
            <li><a href=\"/projetsymfo/web/app_dev.php/projet/createmachine\">Add machine</a></li>
            <li><a href=\"/projetsymfo/web/app_dev.php/projet/fullping\">Full Ping</a></li>
            <li><a href=\"/projetsymfo/web/app_dev.php/projet/historyarchive\">History Archive</a></li>
          </ul>
          <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"/projetsymfo/web/app_dev.php/logout\">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                {% block body %}{% endblock %}
            </div>
        </div>

    </div>
{% block javascripts %}{% endblock %}

  </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\ProjetSymfo\\app\\Resources\\views\\base.html.twig");
    }
}

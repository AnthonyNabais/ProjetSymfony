<?php

/* base2.html.twig */
class __TwigTemplate_cdfcb383564d30fa073c0de975728935de9ac27d53f6bd409f9df7a30a58bca9 extends Twig_Template
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
        $__internal_a5a8f8370ce5ff4a0c95a247463e8ea7c45faea821181441118c605fbf6adf4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5a8f8370ce5ff4a0c95a247463e8ea7c45faea821181441118c605fbf6adf4f->enter($__internal_a5a8f8370ce5ff4a0c95a247463e8ea7c45faea821181441118c605fbf6adf4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">

    ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
         <style>
  body {
      background: url('http://i.imgur.com/Eor57Ae.jpg') no-repeat fixed center center;
      background-size: cover;
  }

  h2 {
      text-align: center;
     
  }

  .login-block {
      width: 320px;
      padding: 20px;
      background: #fff;
      border-radius: 5px;
      border-top: 5px solid #ff656c;
      margin: 0 auto;
      margin-top: 15%
  }

  .login-block h1 {
      text-align: center;
      color: #000;
      font-size: 18px;
      text-transform: uppercase;
      margin-top: 0;
      margin-bottom: 20px;
  }

  .login-block input {
      width: 100%;
      height: 42px;
      box-sizing: border-box;
      border-radius: 5px;
      border: 1px solid #ccc;
      margin-bottom: 20px;
      font-size: 14px;
      padding: 0 20px 0 50px;
      outline: none;
  }


  .login-block input#username {
      background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;
      background-size: 16px 80px;
  }

  .login-block input#username:focus {
      background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;
      background-size: 16px 80px;
  }

  .login-block input#password {
      background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
      background-size: 16px 80px;
  }

  .login-block input#password:focus {
      background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
      background-size: 16px 80px;
  }

  .login-block input:active, .login-block input:focus {
      border: 1px solid #ff656c;
  }

  .login-block input#submit {
      width: 100%;
      height: 40px;
      background: #ff656c;
      box-sizing: border-box;
      border-radius: 5px;
      border: 1px solid #e15960;
      color: #fff;
      font-weight: bold;
      text-transform: uppercase;
      font-size: 14px;
      outline: none;
      cursor: pointer;
      padding: 0 20px 0 20px;
  }

  .login-block input#submit:hover {
      background: #ff7b81;
  }

  </style>

  </head>

  <body>
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 115
        $this->displayBlock('body', $context, $blocks);
        // line 116
        echo "            </div>
        </div>


    </div><!-- /.container -->
";
        // line 121
        $this->displayBlock('javascripts', $context, $blocks);
        // line 122
        echo "
  </body>
</html>
";
        
        $__internal_a5a8f8370ce5ff4a0c95a247463e8ea7c45faea821181441118c605fbf6adf4f->leave($__internal_a5a8f8370ce5ff4a0c95a247463e8ea7c45faea821181441118c605fbf6adf4f_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_d404bd290458c421bc698a6f4b31c78eae14f0cfe83fec7dc2d0275d523c6153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d404bd290458c421bc698a6f4b31c78eae14f0cfe83fec7dc2d0275d523c6153->enter($__internal_d404bd290458c421bc698a6f4b31c78eae14f0cfe83fec7dc2d0275d523c6153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base2.html.twig"));

        echo "Welcome!";
        
        $__internal_d404bd290458c421bc698a6f4b31c78eae14f0cfe83fec7dc2d0275d523c6153->leave($__internal_d404bd290458c421bc698a6f4b31c78eae14f0cfe83fec7dc2d0275d523c6153_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_79138d14a321b00ca1136838a0bea6998323e5119ba56a722d52461922c7aa2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79138d14a321b00ca1136838a0bea6998323e5119ba56a722d52461922c7aa2b->enter($__internal_79138d14a321b00ca1136838a0bea6998323e5119ba56a722d52461922c7aa2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base2.html.twig"));

        
        $__internal_79138d14a321b00ca1136838a0bea6998323e5119ba56a722d52461922c7aa2b->leave($__internal_79138d14a321b00ca1136838a0bea6998323e5119ba56a722d52461922c7aa2b_prof);

    }

    // line 115
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8bc01f9be951fce819e1ddfbb215edc8d5e61a49124a53757e83ed93e8c8cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8bc01f9be951fce819e1ddfbb215edc8d5e61a49124a53757e83ed93e8c8cf0->enter($__internal_a8bc01f9be951fce819e1ddfbb215edc8d5e61a49124a53757e83ed93e8c8cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base2.html.twig"));

        
        $__internal_a8bc01f9be951fce819e1ddfbb215edc8d5e61a49124a53757e83ed93e8c8cf0->leave($__internal_a8bc01f9be951fce819e1ddfbb215edc8d5e61a49124a53757e83ed93e8c8cf0_prof);

    }

    // line 121
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_65a98e3d85537cec3605193ab574b0e76951b0c1201818d40b1425092fcf7197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65a98e3d85537cec3605193ab574b0e76951b0c1201818d40b1425092fcf7197->enter($__internal_65a98e3d85537cec3605193ab574b0e76951b0c1201818d40b1425092fcf7197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base2.html.twig"));

        
        $__internal_65a98e3d85537cec3605193ab574b0e76951b0c1201818d40b1425092fcf7197->leave($__internal_65a98e3d85537cec3605193ab574b0e76951b0c1201818d40b1425092fcf7197_prof);

    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 121,  194 => 115,  183 => 17,  171 => 12,  161 => 122,  159 => 121,  152 => 116,  150 => 115,  49 => 18,  47 => 17,  39 => 12,  26 => 1,);
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
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>{% block title %}Welcome!{% endblock %}</title>

    <!-- Bootstrap core CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">

    {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
         <style>
  body {
      background: url('http://i.imgur.com/Eor57Ae.jpg') no-repeat fixed center center;
      background-size: cover;
  }

  h2 {
      text-align: center;
     
  }

  .login-block {
      width: 320px;
      padding: 20px;
      background: #fff;
      border-radius: 5px;
      border-top: 5px solid #ff656c;
      margin: 0 auto;
      margin-top: 15%
  }

  .login-block h1 {
      text-align: center;
      color: #000;
      font-size: 18px;
      text-transform: uppercase;
      margin-top: 0;
      margin-bottom: 20px;
  }

  .login-block input {
      width: 100%;
      height: 42px;
      box-sizing: border-box;
      border-radius: 5px;
      border: 1px solid #ccc;
      margin-bottom: 20px;
      font-size: 14px;
      padding: 0 20px 0 50px;
      outline: none;
  }


  .login-block input#username {
      background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;
      background-size: 16px 80px;
  }

  .login-block input#username:focus {
      background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;
      background-size: 16px 80px;
  }

  .login-block input#password {
      background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
      background-size: 16px 80px;
  }

  .login-block input#password:focus {
      background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
      background-size: 16px 80px;
  }

  .login-block input:active, .login-block input:focus {
      border: 1px solid #ff656c;
  }

  .login-block input#submit {
      width: 100%;
      height: 40px;
      background: #ff656c;
      box-sizing: border-box;
      border-radius: 5px;
      border: 1px solid #e15960;
      color: #fff;
      font-weight: bold;
      text-transform: uppercase;
      font-size: 14px;
      outline: none;
      cursor: pointer;
      padding: 0 20px 0 20px;
  }

  .login-block input#submit:hover {
      background: #ff7b81;
  }

  </style>

  </head>

  <body>
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-md-12\">
                {% block body %}{% endblock %}
            </div>
        </div>


    </div><!-- /.container -->
{% block javascripts %}{% endblock %}

  </body>
</html>
", "base2.html.twig", "C:\\wamp64\\www\\ProjetSymfo\\app\\Resources\\views\\base2.html.twig");
    }
}

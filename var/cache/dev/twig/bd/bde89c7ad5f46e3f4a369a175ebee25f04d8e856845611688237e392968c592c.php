<?php

/* base.html.twig */
class __TwigTemplate_4158a9717a84ac1d17d1f095dc59f55ebc6b1aef8af137fd6214e73ef78c7206 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
      <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <a class=\"navbar-brand\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">WebStutend</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
          <ul class=\"navbar-nav mr-auto\">
            ";
        // line 21
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 21, $this->source); })()), "user", array())) {
            // line 22
            echo "            ";
        } else {
            // line 23
            echo "
            <li class=\"nav-item\">
              <ul><a class=\"nav-link\" href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutEtudiant");
            echo "\">Ajouter un Etudiant </a></ul>

            </li>
            ";
        }
        // line 29
        echo "            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeEtudiant");
        echo "\">Etudiant </a>
            </li>


          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listerMaisonmaison");
        echo "\">Maisons </a>
          </li>


        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listerCompetence");
        echo "\">Compétences </a>
        </li>

        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listerProfesseur");
        echo "\">Professeurs </a>
        </li>

        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listerBaguette");
        echo "\">Baguettes </a>
        </li>
        ";
        // line 51
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 51, $this->source); })()), "user", array())) {
            // line 52
            echo "        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Inscrition");
            echo "\">Inscription <span class=\"sr-only\">(current)</span></a>
        </li>

        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Connexion <span class=\"sr-only\">(current)</span></a>
        </li>
        ";
        } else {
            // line 60
            echo "
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Déconnexion <span class=\"sr-only\">(current)</span></a>
        </li>
        ";
        }
        // line 65
        echo " </li>


          </ul>
        </div>
      </nav>
      <div class=\"container\">


        ";
        // line 74
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "      </div>

        ";
        // line 77
        $this->displayBlock('javascripts', $context, $blocks);
        // line 78
        echo "    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenu sur WebSutend !";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "          <link rel=\"stylesheet\"
            href=\"https://bootswatch.com/4/darkly/bootstrap.min.css\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 74
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  207 => 77,  196 => 74,  187 => 8,  181 => 7,  169 => 6,  160 => 78,  158 => 77,  154 => 75,  152 => 74,  141 => 65,  135 => 62,  131 => 60,  125 => 57,  118 => 53,  115 => 52,  113 => 51,  108 => 49,  101 => 45,  94 => 41,  86 => 36,  77 => 30,  74 => 29,  67 => 25,  63 => 23,  60 => 22,  58 => 21,  48 => 14,  43 => 11,  41 => 7,  37 => 6,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Bienvenu sur WebSutend !{% endblock %}</title>
        {% block stylesheets %}
          <link rel=\"stylesheet\"
            href=\"https://bootswatch.com/4/darkly/bootstrap.min.css\">
        {% endblock %}
    </head>
    <body>
      <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <a class=\"navbar-brand\" href=\"{{ path('accueil') }}\">WebStutend</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
          <ul class=\"navbar-nav mr-auto\">
            {% if not app.user %}
            {% else %}

            <li class=\"nav-item\">
              <ul><a class=\"nav-link\" href=\"{{ path('ajoutEtudiant') }}\">Ajouter un Etudiant </a></ul>

            </li>
            {% endif %}
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('listeEtudiant') }}\">Etudiant </a>
            </li>


          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('listerMaisonmaison') }}\">Maisons </a>
          </li>


        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('listerCompetence') }}\">Compétences </a>
        </li>

        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('listerProfesseur') }}\">Professeurs </a>
        </li>

        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('listerBaguette') }}\">Baguettes </a>
        </li>
        {% if not app.user %}
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"{{ path('Inscrition') }}\">Inscription <span class=\"sr-only\">(current)</span></a>
        </li>

        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"{{ path('login') }}\">Connexion <span class=\"sr-only\">(current)</span></a>
        </li>
        {% else %}

        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"{{ path('logout') }}\">Déconnexion <span class=\"sr-only\">(current)</span></a>
        </li>
        {% endif %}
 </li>


          </ul>
        </div>
      </nav>
      <div class=\"container\">


        {% block body %}{% endblock %}
      </div>

        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\WebStudend\\templates\\base.html.twig");
    }
}

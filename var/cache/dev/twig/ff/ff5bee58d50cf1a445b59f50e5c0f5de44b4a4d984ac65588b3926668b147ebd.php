<?php

/* competences/listerCompetence.html.twig */
class __TwigTemplate_f258edad4669ffbd49162720ccad165130de3a4ab390e51f569e7bf386b01ece extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "competences/listerCompetence.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "competences/listerCompetence.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<h5> Liste des Compétences Disponible </h5>

<table class=\"table table-hover\">
  <tr class=\"table-dark\">
      <td> Code  </td>
      <td> Matière </td>
      <td> Nombre de places disponibles </td>
      <td> Professeur </td>
    </tr>
  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeCompetences"]) || array_key_exists("listeCompetences", $context) ? $context["listeCompetences"] : (function () { throw new Twig_Error_Runtime('Variable "listeCompetences" does not exist.', 15, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["competences"]) {
            // line 16
            echo "  <tr>
    <td> ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competences"], "code", array()), "html", null, true);
            echo " </td>
    <td> ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competences"], "libelle", array()), "html", null, true);
            echo " </td>
    <td> ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competences"], "NombreEtudiantsMax", array()), "html", null, true);
            echo " </td>
    <td> <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ConsulterCompetenceProfesseur", array("id" => twig_get_attribute($this->env, $this->source, $context["competences"], "id", array()))), "html", null, true);
            echo "\"> Professeur </td>
  </tr>

  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "    <tr>
    <td>Aucun etudiant n'a été trouvé.</td>
    </tr>



  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competences'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</talbe>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "competences/listerCompetence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 31,  85 => 24,  76 => 20,  72 => 19,  68 => 18,  64 => 17,  61 => 16,  56 => 15,  44 => 5,  38 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block body %}

<h5> Liste des Compétences Disponible </h5>

<table class=\"table table-hover\">
  <tr class=\"table-dark\">
      <td> Code  </td>
      <td> Matière </td>
      <td> Nombre de places disponibles </td>
      <td> Professeur </td>
    </tr>
  {% for competences in listeCompetences %}
  <tr>
    <td> {{competences.code}} </td>
    <td> {{competences.libelle}} </td>
    <td> {{competences.NombreEtudiantsMax}} </td>
    <td> <a href=\"{{ path('ConsulterCompetenceProfesseur',{'id':competences.id}) }}\"> Professeur </td>
  </tr>

  {% else %}
    <tr>
    <td>Aucun etudiant n'a été trouvé.</td>
    </tr>



  {% endfor %}
</talbe>



{% endblock %}
", "competences/listerCompetence.html.twig", "C:\\wamp64\\www\\WebStudend\\templates\\competences\\listerCompetence.html.twig");
    }
}

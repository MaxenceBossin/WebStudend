<?php

/* competences/consulterCompetenceProfesseur.html.twig */
class __TwigTemplate_471b324f42d5834b5ada7c1938593c141e08e636cbd1fdc80cd0a573caa6e842 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "competences/consulterCompetenceProfesseur.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "competences/consulterCompetenceProfesseur.html.twig"));

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
<h5> Liste des Profeseurs de l'établissement </h5>



<table class=\"table table-hover\">
  <tr class=\"table-dark\">
    <td>Nom</td>
    <td>Prénom</td>

  </tr>
  ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["competence"]) || array_key_exists("competence", $context) ? $context["competence"] : (function () { throw new Twig_Error_Runtime('Variable "competence" does not exist.', 16, $this->source); })()), "professeurs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 17
            echo "  <tr class=\"table-warning\">
    <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "nom", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "prenom", array()), "html", null, true);
            echo "</td>

  </tr>




  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "competences/consulterCompetenceProfesseur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 27,  68 => 19,  64 => 18,  61 => 17,  57 => 16,  44 => 5,  38 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block body %}

<h5> Liste des Profeseurs de l'établissement </h5>



<table class=\"table table-hover\">
  <tr class=\"table-dark\">
    <td>Nom</td>
    <td>Prénom</td>

  </tr>
  {% for e in competence.professeurs %}
  <tr class=\"table-warning\">
    <td>{{e.nom}}</td>
    <td>{{e.prenom}}</td>

  </tr>




  {% endfor %}
</table>

{% endblock %}
", "competences/consulterCompetenceProfesseur.html.twig", "C:\\wamp64\\www\\WebStudend\\templates\\competences\\consulterCompetenceProfesseur.html.twig");
    }
}

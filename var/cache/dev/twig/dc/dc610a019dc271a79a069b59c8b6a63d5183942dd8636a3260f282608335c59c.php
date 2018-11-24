<?php

/* professeur/listerCompetenceProfesseur.html.twig */
class __TwigTemplate_d342b36d2cc47c5d8cc3439be44e212c5392021e7b0596e00b4611bdec97565a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "professeur/listerCompetenceProfesseur.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "professeur/listerCompetenceProfesseur.html.twig"));

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
<h5> Listes des compétence du professeur ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["professeur"]) || array_key_exists("professeur", $context) ? $context["professeur"] : (function () { throw new Twig_Error_Runtime('Variable "professeur" does not exist.', 6, $this->source); })()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["professeur"]) || array_key_exists("professeur", $context) ? $context["professeur"] : (function () { throw new Twig_Error_Runtime('Variable "professeur" does not exist.', 6, $this->source); })()), "nom", array()), "html", null, true);
        echo "  </h5>
<tr>
  <td>Compétences : </td>
</tr>

<table>
  ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["professeur"]) || array_key_exists("professeur", $context) ? $context["professeur"] : (function () { throw new Twig_Error_Runtime('Variable "professeur" does not exist.', 12, $this->source); })()), "competences", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 13
            echo "
  <tr>
    <td> - ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "libelle", array()), "html", null, true);
            echo "</td>
  </tr>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 18
            echo "    <tr>
    <td>Aucun professeur n'a été trouvé.</td>
    </tr>



  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "professeur/listerCompetenceProfesseur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 25,  75 => 18,  67 => 15,  63 => 13,  58 => 12,  47 => 6,  44 => 5,  38 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block body %}

<h5> Listes des compétence du professeur {{professeur.prenom}} {{professeur.nom}}  </h5>
<tr>
  <td>Compétences : </td>
</tr>

<table>
  {% for e in professeur.competences %}

  <tr>
    <td> - {{e.libelle}}</td>
  </tr>
  {% else %}
    <tr>
    <td>Aucun professeur n'a été trouvé.</td>
    </tr>



  {% endfor %}
</table>

{% endblock %}
", "professeur/listerCompetenceProfesseur.html.twig", "C:\\wamp64\\www\\WebStudent\\templates\\professeur\\listerCompetenceProfesseur.html.twig");
    }
}

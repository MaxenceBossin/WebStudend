<?php

/* professeur/listerCompetenceProfesseur.html.twig */
class __TwigTemplate_96dc5cb49933cad5f222aa4df040dbaaebcc6a5821ac179ffcb3b912f1561a98 extends Twig_Template
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
        echo "</br>
<h5> Listes des compétence du professeur <em>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["professeur"]) || array_key_exists("professeur", $context) ? $context["professeur"] : (function () { throw new Twig_Error_Runtime('Variable "professeur" does not exist.', 6, $this->source); })()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["professeur"]) || array_key_exists("professeur", $context) ? $context["professeur"] : (function () { throw new Twig_Error_Runtime('Variable "professeur" does not exist.', 6, $this->source); })()), "nom", array()), "html", null, true);
        echo "</em>  </h5>
</br>

<table class=\"table table-hover\">
  <tr class=\"table-dark\">
      <td>Compétences : </td>

  ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["professeur"]) || array_key_exists("professeur", $context) ? $context["professeur"] : (function () { throw new Twig_Error_Runtime('Variable "professeur" does not exist.', 13, $this->source); })()), "competences", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 14
            echo "
  <tr>
    <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "libelle", array()), "html", null, true);
            echo "</td>
  </tr>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "    <tr>
    <td>Aucun professeur n'a été trouvé.</td>
    </tr>



  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
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
        return array (  88 => 26,  76 => 19,  68 => 16,  64 => 14,  59 => 13,  47 => 6,  44 => 5,  38 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block body %}
</br>
<h5> Listes des compétence du professeur <em>{{professeur.prenom}} {{professeur.nom}}</em>  </h5>
</br>

<table class=\"table table-hover\">
  <tr class=\"table-dark\">
      <td>Compétences : </td>

  {% for e in professeur.competences %}

  <tr>
    <td>{{e.libelle}}</td>
  </tr>
  {% else %}
    <tr>
    <td>Aucun professeur n'a été trouvé.</td>
    </tr>



  {% endfor %}
</table>

{% endblock %}
", "professeur/listerCompetenceProfesseur.html.twig", "C:\\wamp64\\www\\WebStudend\\templates\\professeur\\listerCompetenceProfesseur.html.twig");
    }
}

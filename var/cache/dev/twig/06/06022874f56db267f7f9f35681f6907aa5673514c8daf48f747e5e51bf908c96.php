<?php

/* professeur\listerProfesseur.html.twig */
class __TwigTemplate_9d280a309fb1a6722c05dbf1c2756204f47fcdc75d541c469c6b1e27d148d1e9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "professeur\\listerProfesseur.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "professeur\\listerProfesseur.html.twig"));

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
<h5> Liste des Proffeseurs de l'établissement </h5>
<table class=\"table table-hover\">
  <tr class=\"table-dark\">
      <td> Nom  </td>
      <td> Prenom </td>
      <td>Date de Naissance</td>
      <td>Date de Naissance</td>
    </tr>
  ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["professeurs"]) || array_key_exists("professeurs", $context) ? $context["professeurs"] : (function () { throw new Twig_Error_Runtime('Variable "professeurs" does not exist.', 14, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["professeur"]) {
            // line 15
            echo "  <tr>
    <td> ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["professeur"], "nom", array()), "html", null, true);
            echo " </td>
    <td> ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["professeur"], "prenom", array()), "html", null, true);
            echo " </td>
    <td> ";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["professeur"], "dateNaissance", array()), "m/d/Y"), "html", null, true);
            echo " </td>
    <td> <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Professeur_show", array("id" => twig_get_attribute($this->env, $this->source, $context["professeur"], "id", array()))), "html", null, true);
            echo "\"> Compétences </td>
  </tr>

  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "    <tr>
    <td>Aucun professeur n'a été trouvé.</td>
    </tr>



  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['professeur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</talbe>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "professeur\\listerProfesseur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 30,  84 => 23,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  60 => 15,  55 => 14,  44 => 5,  38 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block body %}

<h5> Liste des Proffeseurs de l'établissement </h5>
<table class=\"table table-hover\">
  <tr class=\"table-dark\">
      <td> Nom  </td>
      <td> Prenom </td>
      <td>Date de Naissance</td>
      <td>Date de Naissance</td>
    </tr>
  {% for professeur in professeurs %}
  <tr>
    <td> {{professeur.nom}} </td>
    <td> {{professeur.prenom}} </td>
    <td> {{professeur.dateNaissance|date(\"m/d/Y\")}} </td>
    <td> <a href=\"{{ path('Professeur_show',{'id':professeur.id}) }}\"> Compétences </td>
  </tr>

  {% else %}
    <tr>
    <td>Aucun professeur n'a été trouvé.</td>
    </tr>



  {% endfor %}
</talbe>

{% endblock %}
", "professeur\\listerProfesseur.html.twig", "C:\\wamp64\\www\\WebStudend\\templates\\professeur\\listerProfesseur.html.twig");
    }
}

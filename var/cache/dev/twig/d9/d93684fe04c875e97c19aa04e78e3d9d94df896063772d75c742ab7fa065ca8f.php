<?php

/* maison/consulterMaisonEtudiant.html.twig */
class __TwigTemplate_0557ac370cf4ddef8a8beb18e3f9096353d8d23750a4dc8766f8e6c14de46963 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "maison/consulterMaisonEtudiant.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "maison/consulterMaisonEtudiant.html.twig"));

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

Bienvenue à ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new Twig_Error_Runtime('Variable "maison" does not exist.', 8, $this->source); })()), "code", array()), "html", null, true);
        echo "

<table class=\"table table-hover\">
  <tr class=\"table-dark\">
    <td>Nom</td>
    <td>Prénom</td>
  </tr>
  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new Twig_Error_Runtime('Variable "maison" does not exist.', 15, $this->source); })()), "etudiants", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["etudiant"]) {
            // line 16
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new Twig_Error_Runtime('Variable "maison" does not exist.', 16, $this->source); })()), "code", array()) == "GFD")) {
                // line 17
                echo "      <tr class=\"table-danger\">
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 18
(isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new Twig_Error_Runtime('Variable "maison" does not exist.', 18, $this->source); })()), "code", array()) == "PFS")) {
                // line 19
                echo "      <tr class=\"table-warning\">
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 20
(isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new Twig_Error_Runtime('Variable "maison" does not exist.', 20, $this->source); })()), "code", array()) == "SRG")) {
                // line 21
                echo "      <tr class=\"table-info\">
    ";
            } else {
                // line 23
                echo "      <tr class=\"table-success\">
    ";
            }
            // line 25
            echo "    <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "nom", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "prenom", array()), "html", null, true);
            echo "</td>
  </tr>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "    <tr>
    <td>Aucun professeur n'a été trouvé.</td>
    </tr>



  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etudiant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "maison/consulterMaisonEtudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 36,  98 => 29,  90 => 26,  85 => 25,  81 => 23,  77 => 21,  75 => 20,  72 => 19,  70 => 18,  67 => 17,  64 => 16,  59 => 15,  49 => 8,  44 => 5,  38 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block body %}

<h5> Liste des Proffeseurs de l'établissement </h5>

Bienvenue à {{maison.code}}

<table class=\"table table-hover\">
  <tr class=\"table-dark\">
    <td>Nom</td>
    <td>Prénom</td>
  </tr>
  {% for etudiant in maison.etudiants %}
    {% if maison.code == 'GFD'%}
      <tr class=\"table-danger\">
    {% elseif maison.code == 'PFS' %}
      <tr class=\"table-warning\">
    {% elseif maison.code == 'SRG' %}
      <tr class=\"table-info\">
    {% else %}
      <tr class=\"table-success\">
    {% endif %}
    <td>{{etudiant.nom}}</td>
    <td>{{etudiant.prenom}}</td>
  </tr>
  {% else %}
    <tr>
    <td>Aucun professeur n'a été trouvé.</td>
    </tr>



  {% endfor %}
</table>

{% endblock %}
", "maison/consulterMaisonEtudiant.html.twig", "C:\\wamp64\\www\\WebStudent\\templates\\maison\\consulterMaisonEtudiant.html.twig");
    }
}

<?php

/* /etudiant/listerEtudiant.html.twig */
class __TwigTemplate_d7a05f4bf49201e5a0bd84bfbfb104cf56cb451a57c9780c8c812c84588e98e9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "/etudiant/listerEtudiant.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/etudiant/listerEtudiant.html.twig"));

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
<h5> Liste des Etudiants </h5>
<table class=\"table table-hover\">
  <tr class=\"table-dark\">
      <td> Nom  </td>
      <td> Prenom </td>
      <td> Date de Naissance </td>
      <td> Ville</td>
      <td> Rue </td>
      <td> Code Postal </td>
      <td> Sexe </td>
      <td> surnom </td>
      <td> Maison </td>
      <td> Modifier</td>
    </tr>
  ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeEtudiant"]) || array_key_exists("listeEtudiant", $context) ? $context["listeEtudiant"] : (function () { throw new Twig_Error_Runtime('Variable "listeEtudiant" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["etudiant"]) {
            // line 21
            echo "  <tr>
    <td> ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, $context["etudiant"], "nom", array(), "any", true, true)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "nom", array()), "html", null, true);
                echo "  ";
            }
            echo " </td>
    <td> ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, $context["etudiant"], "prenom", array(), "any", true, true)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "prenom", array()), "html", null, true);
                echo "  ";
            }
            echo "</td>
    <td> ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, $context["etudiant"], "dateNaissance", array(), "any", true, true)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "dateNaissance", array()), "m/d/Y"), "html", null, true);
                echo "  ";
            }
            echo "</td>
    <td> ";
            // line 25
            if (twig_get_attribute($this->env, $this->source, $context["etudiant"], "ville", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "ville", array()), "html", null, true);
                echo " ";
            }
            echo "</td>
    <td> ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["etudiant"], "rue", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "rue", array()), "html", null, true);
                echo " ";
            }
            echo "</td>
    <td> ";
            // line 27
            if (twig_get_attribute($this->env, $this->source, $context["etudiant"], "codePostal", array(), "any", true, true)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "codePostal", array()), "html", null, true);
                echo " ";
            }
            echo " </td>
    <td>  ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, $context["etudiant"], "sexe", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "sexe", array()), "html", null, true);
                echo "  ";
            }
            echo "</td>
    <td>  ";
            // line 29
            if (twig_get_attribute($this->env, $this->source, $context["etudiant"], "surnom", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "surnom", array()), "html", null, true);
                echo " ";
            }
            echo "</td>
    <td> ";
            // line 30
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["etudiant"], "maison", array(), "any", false, true), "nom", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["etudiant"], "maison", array()), "nom", array()), "html", null, true);
                echo " ";
            }
            echo "</td>
    <td>  <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierInfo", array("id" => twig_get_attribute($this->env, $this->source, $context["etudiant"], "id", array()))), "html", null, true);
            echo "\"> Modifier  </td>

  </tr>

  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "    <tr>
    <td>Aucun etudiant n'a été trouvé.</td>
    </tr>



  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etudiant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</talbe>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/etudiant/listerEtudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 43,  146 => 36,  136 => 31,  129 => 30,  122 => 29,  115 => 28,  107 => 27,  100 => 26,  93 => 25,  85 => 24,  77 => 23,  69 => 22,  66 => 21,  61 => 20,  44 => 5,  38 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block body %}

<h5> Liste des Etudiants </h5>
<table class=\"table table-hover\">
  <tr class=\"table-dark\">
      <td> Nom  </td>
      <td> Prenom </td>
      <td> Date de Naissance </td>
      <td> Ville</td>
      <td> Rue </td>
      <td> Code Postal </td>
      <td> Sexe </td>
      <td> surnom </td>
      <td> Maison </td>
      <td> Modifier</td>
    </tr>
  {% for etudiant in listeEtudiant %}
  <tr>
    <td> {% if etudiant.nom is defined %} {{etudiant.nom}}  {% endif %} </td>
    <td> {% if etudiant.prenom is defined %} {{etudiant.prenom}}  {% endif %}</td>
    <td> {% if etudiant.dateNaissance is defined %} {{etudiant.dateNaissance|date(\"m/d/Y\")}}  {% endif %}</td>
    <td> {% if etudiant.ville is defined %}{{etudiant.ville}} {% endif %}</td>
    <td> {% if etudiant.rue is defined %}{{etudiant.rue}} {% endif %}</td>
    <td> {% if etudiant.codePostal is defined %} {{etudiant.codePostal}} {% endif %} </td>
    <td>  {% if etudiant.sexe is defined %}{{etudiant.sexe }}  {% endif %}</td>
    <td>  {% if etudiant.surnom is defined %}{{etudiant.surnom}} {% endif %}</td>
    <td> {% if etudiant.maison.nom is defined %}{{etudiant.maison.nom}} {% endif %}</td>
    <td>  <a href=\"{{ path('modifierInfo',{'id':etudiant.id}) }}\"> Modifier  </td>

  </tr>

  {% else %}
    <tr>
    <td>Aucun etudiant n'a été trouvé.</td>
    </tr>



  {% endfor %}
</talbe>



{% endblock %}
", "/etudiant/listerEtudiant.html.twig", "C:\\wamp64\\www\\WebStudend\\templates\\etudiant\\listerEtudiant.html.twig");
    }
}

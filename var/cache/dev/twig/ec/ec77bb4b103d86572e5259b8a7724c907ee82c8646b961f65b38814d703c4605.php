<?php

/* maison/listerMaison.html.twig */
class __TwigTemplate_c8f1d336546904e8ed19d19383613fc5a0402e605784357394eab7e101f0583c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "maison/listerMaison.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "maison/listerMaison.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h5> Liste des maisons de Webstudent </h5>
<table>
  <tr>
    <td> Code  </td>
    <td>Nom </td>
    <td>Nombre de bonbons aquis </td>
  </tr>
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["maisons"]) || array_key_exists("maisons", $context) ? $context["maisons"] : (function () { throw new Twig_Error_Runtime('Variable "maisons" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["maison"]) {
            // line 13
            echo "<tr>
  <td> ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maison"], "code", array()), "html", null, true);
            echo " </td>
  <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maison"], "nom", array()), "html", null, true);
            echo " </td>
  <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maison"], "NombreBonbons", array()), "html", null, true);
            echo " </td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maison'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "maison/listerMaison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 19,  68 => 16,  64 => 15,  60 => 14,  57 => 13,  53 => 12,  44 => 5,  38 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block body %}
<h5> Liste des maisons de Webstudent </h5>
<table>
  <tr>
    <td> Code  </td>
    <td>Nom </td>
    <td>Nombre de bonbons aquis </td>
  </tr>
{% for maison in maisons %}
<tr>
  <td> {{maison.code}} </td>
  <td>{{maison.nom}} </td>
  <td>{{maison.NombreBonbons}} </td>
</tr>
{% endfor %}

{% endblock %}
", "maison/listerMaison.html.twig", "C:\\wamp64\\www\\test\\templates\\maison\\listerMaison.html.twig");
    }
}

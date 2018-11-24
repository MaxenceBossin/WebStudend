<?php

/* maison/listerMaison.html.twig */
class __TwigTemplate_d077e437209bd22f7fc91ba4d8524e8f05e8a0d92ba269f7a7de70693b4d4afc extends Twig_Template
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
<table class=\"table table-hover\">
  <tr class=\"table-dark\">
    <td>Code  </td>
    <td>Nom </td>
    <td>Nombre de bonbons aquis </td>
    <td>Etudiants </td>

  </tr>
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["maisons"]) || array_key_exists("maisons", $context) ? $context["maisons"] : (function () { throw new Twig_Error_Runtime('Variable "maisons" does not exist.', 14, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["maison"]) {
            // line 15
            echo "<tr>
  <td> ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maison"], "code", array()), "html", null, true);
            echo " </td>
  <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maison"], "nom", array()), "html", null, true);
            echo " </td>
  <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maison"], "NombreBonbons", array()), "html", null, true);
            echo " </td>
  <td> <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maison_show", array("id" => twig_get_attribute($this->env, $this->source, $context["maison"], "id", array()))), "html", null, true);
            echo "\">etudiants </td>
</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            echo "  <tr>
  <td>Aucune maison n'a été trouvé.</td>
  </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maison'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
</table>
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
        return array (  92 => 26,  83 => 22,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  60 => 15,  55 => 14,  44 => 5,  38 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block body %}
<h5> Liste des maisons de Webstudent </h5>
<table class=\"table table-hover\">
  <tr class=\"table-dark\">
    <td>Code  </td>
    <td>Nom </td>
    <td>Nombre de bonbons aquis </td>
    <td>Etudiants </td>

  </tr>
{% for maison in maisons %}
<tr>
  <td> {{maison.code}} </td>
  <td>{{maison.nom}} </td>
  <td>{{maison.NombreBonbons}} </td>
  <td> <a href=\"{{path('maison_show',{'id':maison.id})}}\">etudiants </td>
</tr>
{% else %}
  <tr>
  <td>Aucune maison n'a été trouvé.</td>
  </tr>
{% endfor %}

</table>
{% endblock %}
", "maison/listerMaison.html.twig", "C:\\wamp64\\www\\WebStudend\\templates\\maison\\listerMaison.html.twig");
    }
}

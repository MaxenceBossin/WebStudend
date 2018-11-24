<?php

/* baguette/listerBaguette.html.twig */
class __TwigTemplate_b47b3e04666ddb2b2a315c6ef83dce8b706665ba9546e6b388482ca3c001d77b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "baguette/listerBaguette.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baguette/listerBaguette.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h5> Liste des baguettes de Webstudent </h5>

<table class=\"table table-hover\">
  <tr class=\"table-dark\">
    <td>Code  </td>
    <td>Nom </td>
    <td>Puissance </td>
  </tr>
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeBaguette"]) || array_key_exists("listeBaguette", $context) ? $context["listeBaguette"] : (function () { throw new Twig_Error_Runtime('Variable "listeBaguette" does not exist.', 13, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["baguette"]) {
            // line 14
            echo "<tr>
  <td> ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["baguette"], "code", array()), "html", null, true);
            echo " </td>
  <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["baguette"], "libelle", array()), "html", null, true);
            echo " </td>
  <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["baguette"], "puissance", array()), "html", null, true);
            echo " </td>
</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 20
            echo "  <tr>
  <td>Aucune baguette n'a été trouvé.</td>
  </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['baguette'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "baguette/listerBaguette.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 24,  78 => 20,  70 => 17,  66 => 16,  62 => 15,  59 => 14,  54 => 13,  44 => 5,  38 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block body %}
<h5> Liste des baguettes de Webstudent </h5>

<table class=\"table table-hover\">
  <tr class=\"table-dark\">
    <td>Code  </td>
    <td>Nom </td>
    <td>Puissance </td>
  </tr>
{% for baguette in listeBaguette %}
<tr>
  <td> {{baguette.code}} </td>
  <td>{{baguette.libelle}} </td>
  <td>{{baguette.puissance}} </td>
</tr>
{% else %}
  <tr>
  <td>Aucune baguette n'a été trouvé.</td>
  </tr>
{% endfor %}

</table>
{% endblock %}
", "baguette/listerBaguette.html.twig", "C:\\wamp64\\www\\WebStudend\\templates\\baguette\\listerBaguette.html.twig");
    }
}

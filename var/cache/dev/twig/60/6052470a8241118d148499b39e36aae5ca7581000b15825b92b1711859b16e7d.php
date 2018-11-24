<?php

/* baguette/listerBaguette.html.twig */
class __TwigTemplate_da3628986b20ef09ca93684eb975b3fbce118e28a472bf5801842520927ef569 extends Twig_Template
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
<table>
  <tr>
    <td>Code  </td>
    <td>Nom </td>
    <td>Nombre de bonbons aquis </td>
  </tr>
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeBaguette"]) || array_key_exists("listeBaguette", $context) ? $context["listeBaguette"] : (function () { throw new Twig_Error_Runtime('Variable "listeBaguette" does not exist.', 12, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["baguette"]) {
            // line 13
            echo "<tr>
  <td> ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["baguette"], "code", array()), "html", null, true);
            echo " </td>
  <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["baguette"], "libelle", array()), "html", null, true);
            echo " </td>
  <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["baguette"], "puissance", array()), "html", null, true);
            echo " </td>
</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "  <tr>
  <td>Aucune maison n'a été trouvé.</td>
  </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['baguette'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
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
        return array (  86 => 23,  77 => 19,  69 => 16,  65 => 15,  61 => 14,  58 => 13,  53 => 12,  44 => 5,  38 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block body %}
<h5> Liste des baguettes de Webstudent </h5>
<table>
  <tr>
    <td>Code  </td>
    <td>Nom </td>
    <td>Nombre de bonbons aquis </td>
  </tr>
{% for baguette in listeBaguette %}
<tr>
  <td> {{baguette.code}} </td>
  <td>{{baguette.libelle}} </td>
  <td>{{baguette.puissance}} </td>
</tr>
{% else %}
  <tr>
  <td>Aucune maison n'a été trouvé.</td>
  </tr>
{% endfor %}

</table>
{% endblock %}
", "baguette/listerBaguette.html.twig", "C:\\wamp64\\www\\test\\templates\\baguette\\listerBaguette.html.twig");
    }
}

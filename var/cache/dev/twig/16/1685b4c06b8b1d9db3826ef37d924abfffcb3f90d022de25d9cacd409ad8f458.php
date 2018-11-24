<?php

/* /etudiant/formEtudiant.html.twig */
class __TwigTemplate_38ed3875ebd6050ef8b75033df7291f639a0373502115af7b084ed17f4775107 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "/etudiant/formEtudiant.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/etudiant/formEtudiant.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new Twig_Error_Runtime('Variable "formEtudiant" does not exist.', 2, $this->source); })()), array(0 => "bootstrap_4_layout.html.twig"), true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new Twig_Error_Runtime('Variable "etudiant" does not exist.', 5, $this->source); })()), "nom", array()))) {
            // line 6
            echo "<h1> Ajout d'un etudiant</h1>
";
        } else {
            // line 8
            echo "<h1> Modification information de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new Twig_Error_Runtime('Variable "etudiant" does not exist.', 8, $this->source); })()), "prenom", array()), "html", null, true);
            echo "</h1>
";
        }
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new Twig_Error_Runtime('Variable "formEtudiant" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new Twig_Error_Runtime('Variable "formEtudiant" does not exist.', 11, $this->source); })()), "nom", array()), 'row', array("attr" => array("placeholder" => "Nom de l'étudiant")));
        echo "
";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new Twig_Error_Runtime('Variable "formEtudiant" does not exist.', 12, $this->source); })()), "prenom", array()), 'row', array("attr" => array("placeholder" => "prenom de l'étudiant")));
        echo "
";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new Twig_Error_Runtime('Variable "formEtudiant" does not exist.', 13, $this->source); })()), "dateNaissance", array()), 'row');
        echo "
";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new Twig_Error_Runtime('Variable "formEtudiant" does not exist.', 14, $this->source); })()), "ville", array()), 'row', array("attr" => array("placeholder" => "Ville de l'étudiant")));
        echo "
";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new Twig_Error_Runtime('Variable "formEtudiant" does not exist.', 15, $this->source); })()), "rue", array()), 'row', array("attr" => array("placeholder" => "Rue de l'étudiant")));
        echo "
";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new Twig_Error_Runtime('Variable "formEtudiant" does not exist.', 16, $this->source); })()), "codePostal", array()), 'row', array("attr" => array("placeholder" => "Code postal")));
        echo "
";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new Twig_Error_Runtime('Variable "formEtudiant" does not exist.', 17, $this->source); })()), "sexe", array()), 'row');
        echo "
";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new Twig_Error_Runtime('Variable "formEtudiant" does not exist.', 18, $this->source); })()), "surnom", array()), 'row', array("attr" => array("placeholder" => "Surnom de l'étudiant")));
        echo "
";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new Twig_Error_Runtime('Variable "formEtudiant" does not exist.', 19, $this->source); })()), "maison", array()), 'row');
        echo "

<button type=\"submit\" class=\"btn btn-success\">

";
        // line 23
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new Twig_Error_Runtime('Variable "etudiant" does not exist.', 23, $this->source); })()), "nom", array()))) {
            // line 24
            echo "Ajout
";
        } else {
            // line 26
            echo "Modification
";
        }
        // line 28
        echo "
";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new Twig_Error_Runtime('Variable "formEtudiant" does not exist.', 29, $this->source); })()), 'form_end');
        echo "




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/etudiant/formEtudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 29,  112 => 28,  108 => 26,  104 => 24,  102 => 23,  95 => 19,  91 => 18,  87 => 17,  83 => 16,  79 => 15,  75 => 14,  71 => 13,  67 => 12,  63 => 11,  59 => 10,  53 => 8,  49 => 6,  47 => 5,  41 => 4,  34 => 1,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
 {% form_theme formEtudiant 'bootstrap_4_layout.html.twig' %}

{% block body %}
{% if etudiant.nom is null %}
<h1> Ajout d'un etudiant</h1>
{% else %}
<h1> Modification information de {{etudiant.prenom}}</h1>
{% endif %}
{{ form_start(formEtudiant) }}
{{form_row(formEtudiant.nom,{'attr' : {'placeholder' : \"Nom de l'étudiant\"}} ) }}
{{form_row(formEtudiant.prenom,{'attr' : {'placeholder' : \"prenom de l'étudiant\"}} ) }}
{{form_row(formEtudiant.dateNaissance)}}
{{form_row(formEtudiant.ville,{'attr' : {'placeholder' : \"Ville de l'étudiant\"}} ) }}
{{form_row(formEtudiant.rue,{'attr' : {'placeholder' : \"Rue de l'étudiant\"}} ) }}
{{form_row(formEtudiant.codePostal,{'attr' : {'placeholder' : \"Code postal\"}} ) }}
{{form_row(formEtudiant.sexe)}}
{{form_row(formEtudiant.surnom,{'attr' : {'placeholder' : \"Surnom de l'étudiant\"}} ) }}
{{form_row(formEtudiant.maison) }}

<button type=\"submit\" class=\"btn btn-success\">

{% if etudiant.nom is null %}
Ajout
{% else %}
Modification
{% endif %}

{{ form_end(formEtudiant) }}




{% endblock %}
", "/etudiant/formEtudiant.html.twig", "C:\\wamp64\\www\\WebStudend\\templates\\etudiant\\formEtudiant.html.twig");
    }
}

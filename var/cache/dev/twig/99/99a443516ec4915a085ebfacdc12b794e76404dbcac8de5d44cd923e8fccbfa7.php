<?php

/* /etudiant/ajouterEtudiant.html.twig */
class __TwigTemplate_cbc18771ed9aad6248c4fab21cc46c79592f2d8e2684941cbf64414e71cd8fbb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "/etudiant/ajouterEtudiant.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/etudiant/ajouterEtudiant.html.twig"));

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
        echo "<h1> Ajout d'un etudiant</h1>

";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new Twig_Error_Runtime('Variable "formEtudiant" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new Twig_Error_Runtime('Variable "formEtudiant" does not exist.', 8, $this->source); })()), "nom", array()), 'row', array("attr" => array("placeholder" => "Nom de l'étudiant")));
        echo "
";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new Twig_Error_Runtime('Variable "formEtudiant" does not exist.', 9, $this->source); })()), "prenom", array()), 'row', array("attr" => array("placeholder" => "prenom de l'étudiant")));
        echo "
";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new Twig_Error_Runtime('Variable "formEtudiant" does not exist.', 10, $this->source); })()), "dateNaissance", array()), 'row');
        echo "
";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new Twig_Error_Runtime('Variable "formEtudiant" does not exist.', 11, $this->source); })()), "ville", array()), 'row', array("attr" => array("placeholder" => "Ville de l'étudiant")));
        echo "
";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new Twig_Error_Runtime('Variable "formEtudiant" does not exist.', 12, $this->source); })()), "rue", array()), 'row', array("attr" => array("placeholder" => "Rue de l'étudiant")));
        echo "
";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new Twig_Error_Runtime('Variable "formEtudiant" does not exist.', 13, $this->source); })()), "codePostal", array()), 'row', array("attr" => array("placeholder" => "Code postal")));
        echo "
";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new Twig_Error_Runtime('Variable "formEtudiant" does not exist.', 14, $this->source); })()), "sexe", array()), 'row');
        echo "
";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new Twig_Error_Runtime('Variable "formEtudiant" does not exist.', 15, $this->source); })()), "surnom", array()), 'row', array("attr" => array("placeholder" => "Surnom de l'étudiant")));
        echo "
";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new Twig_Error_Runtime('Variable "formEtudiant" does not exist.', 16, $this->source); })()), "maison", array()), 'row');
        echo "

<button type=\"submit\" class=\"btn btn-success\">Ajouter un Etudiant</button>

";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new Twig_Error_Runtime('Variable "formEtudiant" does not exist.', 20, $this->source); })()), 'form_end');
        echo "




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/etudiant/ajouterEtudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 20,  87 => 16,  83 => 15,  79 => 14,  75 => 13,  71 => 12,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  51 => 7,  47 => 5,  41 => 4,  34 => 1,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
 {% form_theme formEtudiant 'bootstrap_4_layout.html.twig' %}

{% block body %}
<h1> Ajout d'un etudiant</h1>

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

<button type=\"submit\" class=\"btn btn-success\">Ajouter un Etudiant</button>

{{ form_end(formEtudiant) }}




{% endblock %}
", "/etudiant/ajouterEtudiant.html.twig", "C:\\wamp64\\www\\WebStudent\\templates\\etudiant\\ajouterEtudiant.html.twig");
    }
}

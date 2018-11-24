<?php

/* /security/Inscrition.html.twig */
class __TwigTemplate_05457fd4937841916fbcb44761579fc2cb43d2bdf35cdc7129f79293eb4a583a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "/security/Inscrition.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/security/Inscrition.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new Twig_Error_Runtime('Variable "formInscription" does not exist.', 2, $this->source); })()), array(0 => "bootstrap_4_layout.html.twig"), true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h3> Veuillez remplir de le Formulaire d'inscription </h3>

";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new Twig_Error_Runtime('Variable "formInscription" does not exist.', 6, $this->source); })()), 'form_start');
        echo "
";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new Twig_Error_Runtime('Variable "formInscription" does not exist.', 7, $this->source); })()), "email", array()), 'row', array("label" => "Email  : ", "attr" => array("placeholder" => "Veillez saissir votre Mail")));
        // line 9
        echo "
";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new Twig_Error_Runtime('Variable "formInscription" does not exist.', 10, $this->source); })()), "username", array()), 'row', array("label" => "Identifiant  : ", "attr" => array("placeholder" => "Veillez saissir votre Identifiant")));
        // line 12
        echo "
";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new Twig_Error_Runtime('Variable "formInscription" does not exist.', 13, $this->source); })()), "password", array()), 'row', array("label" => "Saisir votre mot de passe : ", "attr" => array("placeholder" => "Veillez saissir votre mot de passe")));
        // line 15
        echo "
";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new Twig_Error_Runtime('Variable "formInscription" does not exist.', 16, $this->source); })()), "confirmPassword", array()), 'row', array("label" => "Confimer votre mot de passe : ", "attr" => array("placeholder" => "Veillez confirmer votre mot de passe")));
        // line 18
        echo "


<button type=\"submit\" class=\"btn btn-success\">Inscription</button>

";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new Twig_Error_Runtime('Variable "formInscription" does not exist.', 23, $this->source); })()), 'form_end');
        echo "



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/security/Inscrition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 23,  72 => 18,  70 => 16,  67 => 15,  65 => 13,  62 => 12,  60 => 10,  57 => 9,  55 => 7,  51 => 6,  47 => 4,  41 => 3,  34 => 1,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% form_theme formInscription 'bootstrap_4_layout.html.twig' %}
 {% block body %}
<h3> Veuillez remplir de le Formulaire d'inscription </h3>

{{ form_start(formInscription) }}
{{form_row(formInscription.email,
{'label' : 'Email  : '
, 'attr' : {'placeholder' : \"Veillez saissir votre Mail\"}})}}
{{form_row(formInscription.username,
{'label' : 'Identifiant  : '
, 'attr' : {'placeholder' : \"Veillez saissir votre Identifiant\"}})}}
{{form_row(formInscription.password,
{'label' : 'Saisir votre mot de passe : '
, 'attr' : {'placeholder' : \"Veillez saissir votre mot de passe\"}})}}
{{form_row(formInscription.confirmPassword,
{'label' : 'Confimer votre mot de passe : '
, 'attr' : {'placeholder' : \"Veillez confirmer votre mot de passe\"}})}}


<button type=\"submit\" class=\"btn btn-success\">Inscription</button>

{{ form_end(formInscription) }}



{% endblock %}
", "/security/Inscrition.html.twig", "C:\\wamp64\\www\\WebStudend\\templates\\security\\Inscrition.html.twig");
    }
}

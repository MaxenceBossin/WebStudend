<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'baguette' => array(array(), array('_controller' => 'App\\Controller\\BaguetteController::index'), array(), array(array('text', '/baguette')), array(), array()),
        'ajouterBaguette' => array(array(), array('_controller' => 'App\\Controller\\BaguetteController::ajouterBaguette'), array(), array(array('text', '/baguette/ajouter')), array(), array()),
        'listerBaguette' => array(array(), array('_controller' => 'App\\Controller\\BaguetteController::listerMaison'), array(), array(array('text', '/baguette/liste')), array(), array()),
        'competences' => array(array(), array('_controller' => 'App\\Controller\\CompetencesController::index'), array(), array(array('text', '/competences')), array(), array()),
        'ConsulterCompetenceProfesseur' => array(array('id'), array('_controller' => 'App\\Controller\\CompetencesController::ConsulterCompetenceProfesseur'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/competences/ConsulterProfesseur')), array(), array()),
        'listerCompetence' => array(array(), array('_controller' => 'App\\Controller\\CompetencesController::listerCompetence'), array(), array(array('text', '/competences/liste')), array(), array()),
        'ajouterCompetence' => array(array(), array('_controller' => 'App\\Controller\\CompetencesController::ajouterCompetence'), array(), array(array('text', '/competences/ajouter')), array(), array()),
        'accueil' => array(array(), array('_controller' => 'App\\Controller\\EtudiantController::accueil'), array(), array(array('text', '/')), array(), array()),
        'etudiant' => array(array(), array('_controller' => 'App\\Controller\\EtudiantController::index'), array(), array(array('text', '/')), array(), array()),
        'ajoutEtudiant' => array(array(), array('_controller' => 'App\\Controller\\EtudiantController::formEtudiant'), array(), array(array('text', '/etudiant/ajouterEtudiant')), array(), array()),
        'modifierInfo' => array(array('id'), array('_controller' => 'App\\Controller\\EtudiantController::formEtudiant'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/etudiant/modifierInfo')), array(), array()),
        'listeEtudiant' => array(array(), array('_controller' => 'App\\Controller\\EtudiantController::listerEtudiant'), array(), array(array('text', '/etudiant/listerEtudiant')), array(), array()),
        'maison' => array(array(), array('_controller' => 'App\\Controller\\MaisonController::index'), array(), array(array('text', '/maison')), array(), array()),
        'maison_show' => array(array('id'), array('_controller' => 'App\\Controller\\MaisonController::ConsulterMaisonEtudiant'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/maison/consulterEtudiant')), array(), array()),
        'listerMaisonmaison' => array(array(), array('_controller' => 'App\\Controller\\MaisonController::listerMaison'), array(), array(array('text', '/maison/liste')), array(), array()),
        'ajouterMaison' => array(array(), array('_controller' => 'App\\Controller\\MaisonController::ajouterMaison'), array(), array(array('text', '/maison/ajouter')), array(), array()),
        'professeur' => array(array(), array('_controller' => 'App\\Controller\\ProfesseurController::index'), array(), array(array('text', '/professeur')), array(), array()),
        'Professeur_show' => array(array('id'), array('_controller' => 'App\\Controller\\ProfesseurController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/professeur/consulter')), array(), array()),
        'listerProfesseur' => array(array(), array('_controller' => 'App\\Controller\\ProfesseurController::listerProfesseur'), array(), array(array('text', '/professeur/liste')), array(), array()),
        'ProfesseurMaison' => array(array(), array('_controller' => 'App\\Controller\\ProfesseurController::ajouterProfesseur'), array(), array(array('text', '/Professeur/ajouter')), array(), array()),
        'security' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::index'), array(), array(array('text', '/security')), array(), array()),
        'Inscrition' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::formInscrition'), array(), array(array('text', '/security/Inscrition')), array(), array()),
        'login' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::login'), array(), array(array('text', '/security/login')), array(), array()),
        'logout' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::logout'), array(), array(array('text', '/security/logout')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format'), array('variable', '/', '\\d+', 'code'), array('text', '/_error')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}

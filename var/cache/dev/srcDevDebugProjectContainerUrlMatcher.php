<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            case '/':
                // accueil
                return array('_route' => 'accueil', '_controller' => 'App\\Controller\\EtudiantController::accueil');
                // etudiant
                return array('_route' => 'etudiant', '_controller' => 'App\\Controller\\EtudiantController::index');
                break;
            default:
                $routes = array(
                    '/baguette' => array(array('_route' => 'baguette', '_controller' => 'App\\Controller\\BaguetteController::index'), null, null, null),
                    '/baguette/ajouter' => array(array('_route' => 'ajouterBaguette', '_controller' => 'App\\Controller\\BaguetteController::ajouterBaguette'), null, null, null),
                    '/baguette/liste' => array(array('_route' => 'listerBaguette', '_controller' => 'App\\Controller\\BaguetteController::listerMaison'), null, null, null),
                    '/competences' => array(array('_route' => 'competences', '_controller' => 'App\\Controller\\CompetencesController::index'), null, null, null),
                    '/competences/liste' => array(array('_route' => 'listerCompetence', '_controller' => 'App\\Controller\\CompetencesController::listerCompetence'), null, null, null),
                    '/competences/ajouter' => array(array('_route' => 'ajouterCompetence', '_controller' => 'App\\Controller\\CompetencesController::ajouterCompetence'), null, null, null),
                    '/etudiant/ajouterEtudiant' => array(array('_route' => 'ajoutEtudiant', '_controller' => 'App\\Controller\\EtudiantController::formEtudiant'), null, null, null),
                    '/etudiant/listerEtudiant' => array(array('_route' => 'listeEtudiant', '_controller' => 'App\\Controller\\EtudiantController::listerEtudiant'), null, null, null),
                    '/maison' => array(array('_route' => 'maison', '_controller' => 'App\\Controller\\MaisonController::index'), null, null, null),
                    '/maison/liste' => array(array('_route' => 'listerMaisonmaison', '_controller' => 'App\\Controller\\MaisonController::listerMaison'), null, null, null),
                    '/maison/ajouter' => array(array('_route' => 'ajouterMaison', '_controller' => 'App\\Controller\\MaisonController::ajouterMaison'), null, null, null),
                    '/professeur' => array(array('_route' => 'professeur', '_controller' => 'App\\Controller\\ProfesseurController::index'), null, null, null),
                    '/professeur/liste' => array(array('_route' => 'listerProfesseur', '_controller' => 'App\\Controller\\ProfesseurController::listerProfesseur'), null, null, null),
                    '/Professeur/ajouter' => array(array('_route' => 'ProfesseurMaison', '_controller' => 'App\\Controller\\ProfesseurController::ajouterProfesseur'), null, null, null),
                    '/security' => array(array('_route' => 'security', '_controller' => 'App\\Controller\\SecurityController::index'), null, null, null),
                    '/security/Inscrition' => array(array('_route' => 'Inscrition', '_controller' => 'App\\Controller\\SecurityController::formInscrition'), null, null, null),
                    '/security/login' => array(array('_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'), null, null, null),
                    '/security/logout' => array(array('_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'), null, null, null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/competences/ConsulterProfesseur/([^/]++)(*:48)'
                    .'|/etudiant/modifierInfo/([^/]++)(*:86)'
                    .'|/maison/consulterEtudiant/([^/]++)(*:127)'
                    .'|/professeur/consulter/([^/]++)(*:165)'
                    .'|/_error/(\\d+)(?:\\.([^/]++))?(*:201)'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            48 => array(array('_route' => 'ConsulterCompetenceProfesseur', '_controller' => 'App\\Controller\\CompetencesController::ConsulterCompetenceProfesseur'), array('id'), null, null),
                            86 => array(array('_route' => 'modifierInfo', '_controller' => 'App\\Controller\\EtudiantController::formEtudiant'), array('id'), null, null),
                            127 => array(array('_route' => 'maison_show', '_controller' => 'App\\Controller\\MaisonController::ConsulterMaisonEtudiant'), array('id'), null, null),
                            165 => array(array('_route' => 'Professeur_show', '_controller' => 'App\\Controller\\ProfesseurController::show'), array('id'), null, null),
                            201 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (201 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow && !$allowSchemes) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}

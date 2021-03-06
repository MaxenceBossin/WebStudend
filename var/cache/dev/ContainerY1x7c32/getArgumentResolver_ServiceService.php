<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'argument_resolver.service' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\ServiceValueResolver.php';

return $this->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Controller\\BaguetteController::listerMaison' => function () {
    return ($this->privates['.service_locator.J.inxYp'] ?? $this->load('get_ServiceLocator_J_InxYpService.php'));
}, 'App\\Controller\\CompetencesController::ConsulterCompetenceProfesseur' => function () {
    return ($this->privates['.service_locator.q3T6Ejk'] ?? $this->load('get_ServiceLocator_Q3T6EjkService.php'));
}, 'App\\Controller\\CompetencesController::listerCompetence' => function () {
    return ($this->privates['.service_locator.DSuC8HQ'] ?? $this->load('get_ServiceLocator_DSuC8HQService.php'));
}, 'App\\Controller\\EtudiantController::formEtudiant' => function () {
    return ($this->privates['.service_locator.Wpf2VBM'] ?? $this->load('get_ServiceLocator_Wpf2VBMService.php'));
}, 'App\\Controller\\EtudiantController::listerEtudiant' => function () {
    return ($this->privates['.service_locator.7GzW1ZE'] ?? $this->load('get_ServiceLocator_7GzW1ZEService.php'));
}, 'App\\Controller\\MaisonController::ConsulterMaisonEtudiant' => function () {
    return ($this->privates['.service_locator.t6x6YdK'] ?? $this->load('get_ServiceLocator_T6x6YdKService.php'));
}, 'App\\Controller\\MaisonController::listerMaison' => function () {
    return ($this->privates['.service_locator.qv2nQlj'] ?? $this->load('get_ServiceLocator_Qv2nQljService.php'));
}, 'App\\Controller\\ProfesseurController::listerProfesseur' => function () {
    return ($this->privates['.service_locator.jjME_E3'] ?? $this->load('get_ServiceLocator_JjMEE3Service.php'));
}, 'App\\Controller\\ProfesseurController::show' => function () {
    return ($this->privates['.service_locator.54hW3a0'] ?? $this->load('get_ServiceLocator_54hW3a0Service.php'));
}, 'App\\Controller\\SecurityController::formInscrition' => function () {
    return ($this->privates['.service_locator.t7BdSgs'] ?? $this->load('get_ServiceLocator_T7BdSgsService.php'));
}, 'App\\Controller\\BaguetteController:listerMaison' => function () {
    return ($this->privates['.service_locator.J.inxYp'] ?? $this->load('get_ServiceLocator_J_InxYpService.php'));
}, 'App\\Controller\\CompetencesController:ConsulterCompetenceProfesseur' => function () {
    return ($this->privates['.service_locator.q3T6Ejk'] ?? $this->load('get_ServiceLocator_Q3T6EjkService.php'));
}, 'App\\Controller\\CompetencesController:listerCompetence' => function () {
    return ($this->privates['.service_locator.DSuC8HQ'] ?? $this->load('get_ServiceLocator_DSuC8HQService.php'));
}, 'App\\Controller\\EtudiantController:formEtudiant' => function () {
    return ($this->privates['.service_locator.Wpf2VBM'] ?? $this->load('get_ServiceLocator_Wpf2VBMService.php'));
}, 'App\\Controller\\EtudiantController:listerEtudiant' => function () {
    return ($this->privates['.service_locator.7GzW1ZE'] ?? $this->load('get_ServiceLocator_7GzW1ZEService.php'));
}, 'App\\Controller\\MaisonController:ConsulterMaisonEtudiant' => function () {
    return ($this->privates['.service_locator.t6x6YdK'] ?? $this->load('get_ServiceLocator_T6x6YdKService.php'));
}, 'App\\Controller\\MaisonController:listerMaison' => function () {
    return ($this->privates['.service_locator.qv2nQlj'] ?? $this->load('get_ServiceLocator_Qv2nQljService.php'));
}, 'App\\Controller\\ProfesseurController:listerProfesseur' => function () {
    return ($this->privates['.service_locator.jjME_E3'] ?? $this->load('get_ServiceLocator_JjMEE3Service.php'));
}, 'App\\Controller\\ProfesseurController:show' => function () {
    return ($this->privates['.service_locator.54hW3a0'] ?? $this->load('get_ServiceLocator_54hW3a0Service.php'));
}, 'App\\Controller\\SecurityController:formInscrition' => function () {
    return ($this->privates['.service_locator.t7BdSgs'] ?? $this->load('get_ServiceLocator_T7BdSgsService.php'));
})));

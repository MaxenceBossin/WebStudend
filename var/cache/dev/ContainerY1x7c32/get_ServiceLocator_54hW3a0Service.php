<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.54hW3a0' shared service.

return $this->privates['.service_locator.54hW3a0'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('unProfesseur' => function (): \App\Entity\Professeur {
    return ($this->privates['.errored..service_locator.54hW3a0.App\Entity\Professeur'] ?? $this->load('getProfesseurService.php'));
}));

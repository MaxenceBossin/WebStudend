<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.t6x6YdK' shared service.

return $this->privates['.service_locator.t6x6YdK'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('uneMaison' => function (): \App\Entity\Maison {
    return ($this->privates['.errored..service_locator.t6x6YdK.App\Entity\Maison'] ?? $this->load('getMaisonService.php'));
}));

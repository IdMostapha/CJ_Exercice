<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.jfyi06q' shared service.

return $this->services['service_locator.jfyi06q'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('serializer' => function () {
    return ${($_ = isset($this->services['serializer']) ? $this->services['serializer'] : $this->load('getSerializerService.php')) && false ?: '_'};
}));

<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'AppBundle\Handler\UserDeleteHandler' shared autowired service.

include_once $this->targetDirs[3].'/src/AppBundle/Handler/UserDeleteHandler.php';

return $this->services['AppBundle\Handler\UserDeleteHandler'] = new \AppBundle\Handler\UserDeleteHandler(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->load('getDoctrine_Orm_DefaultEntityManagerService.php')) && false ?: '_'});

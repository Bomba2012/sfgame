<?php

require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

$configuration = ProjectConfiguration::getApplicationConfiguration('game', 'dev', true);
#$configuration = ProjectConfiguration::getApplicationConfiguration('game', 'prod', false);
sfContext::createInstance($configuration)->dispatch();

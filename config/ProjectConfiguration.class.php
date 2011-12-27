<?php

require_once (dirname(__FILE__) . '../../symfony-1.4.16/lib/autoload/sfCoreAutoload.class.php');
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
  }
}

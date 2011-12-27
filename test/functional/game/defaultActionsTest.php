<?php

include(dirname(__FILE__) . '/../../bootstrap/functional.php');

$browser = new sfTestFunctional(new sfBrowser());

$browser->info('Working page')->
        get('/')->
        with('request')->begin()->
            isParameter('module', 'default')->
            isParameter('action', 'index')->
        end()->
        with('response')->begin()->
            isStatusCode(200)->
            checkElement('label', 'Throw')->
        end()
;


$browser->info('Post Throw 4')->
        get('/')->
        with('request')->begin()->
            isParameter('module', 'default')->
            isParameter('action', 'index')->
        end()->
        click('Submit Throw', array('throw' => 4))->
        with('request')->begin()->
            isParameter('module', 'default')->
            isParameter('action', 'index')->
            isParameter('throw', 4)->
        end()->
        with('response')->begin()->
            isStatusCode(200)->
            checkElement('ul li', 8)->
        end()
;

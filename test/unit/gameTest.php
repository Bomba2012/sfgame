<?php

include(dirname(__FILE__).'/../bootstrap/unit.php');
require_once(dirname(__FILE__).'/../../apps/game/lib/game.class.php');

$t = new lime_test(6, new lime_output_color());


//5 1 3 4 1   50 + 2 * 100 = 250
$game = new Game(array(5, 1, 3, 4, 1));
$t->diag('Game: 5, 1, 3, 4, 1');
$res = $game->getScore();
$t->is($res, 250, "Scrore is $res");


//1 1 1 3 1   1000 + 100 = 1100
$game = new Game(array(1, 1, 1, 3, 1));
$t->diag('Game: 1, 1, 1, 3, 1');
$res = $game->getScore();
$t->is($res, 1100, "Scrore is $res");


//2 4 4 5 4   400 + 50 = 450
$game = new Game(array(2, 4, 4, 5, 4));
$t->diag('Game: 2, 4, 4, 5, 4');
$res = $game->getScore();
$t->is($res, 450, "Scrore is $res");


//2 4 4 5 4   400 + 50 = 450
//1 1 1 3 1   1000 + 100 = 1100
$results = Game::processGames(array(array(2, 4, 4, 5, 4), array(1, 1, 1, 3, 1)));
$t->diag('Game: 2, 4, 4, 5, 4 and 1, 1, 1, 3, 1');
$t->is($results['t_score'], 1550, "Scrore is {$results['t_score']}");


$t->diag('Game::generateGames(2)');
$games = Game::generateGames(2);
$t->isa_ok($games, 'array', "Return array of 2 games");
$t->diag('Game: ' . var_export($games, true));
$t->is(count($games), 2, "Two games");
<?php

class Game
{

    protected

    /*
     * Three 1 => 1000 points
     * Three 2 =>  200 points
     * Three 3 =>  300 points
     * Three 4 =>  400 points
     * Three 5 =>  500 points
     * Three 6 =>  600 points
     * One   1 =>  100 points
     * One   5 =>   50 points
     */

    $points = array(
        1 => array(1000, 100),
        2 => array(200, 0),
        3 => array(300, 0),
        4 => array(400, 0),
        5 => array(500, 50),
        6 => array(600, 0)
            ),
    $counter = array(
        1 => 0,
        2 => 0,
        3 => 0,
        4 => 0,
        5 => 0,
        6 => 0
            ),
    $game = array(),
    $result = 0;

    /*
     * set array game
     */

    public function __construct(array $game)
    {
        $this->game = $game;
    }

    /*
     * return int score of game
     */

    public function getScore()
    {
        foreach ($this->game as $k => $v)
        {
            $this->counter[$v]++;
        }

        foreach ($this->counter as $k => $can)
        {
            if ($can >= 3)
            {
                $this->result += $this->points[$k][0];
                $can -= 3;
            }

            if ($can)
            {
                $this->result += $this->points[$k][1] * $can;
            }
        }

        return $this->result;
    }

    /*
     * return array random N games
     */

    public static function generateGames($count=1)
    {
        $games = array();
        $count = ((int) $count < 1 ? 1 : (int) $count);

        for ($i = 0; $i < $count; $i++)
        {
            $games[$i] = array();
            for ($j = 0; $j < 5; $j++)
            {
                $games[$i][$j] = rand(1, 6);
            }
        }

        return $games;
    }

    /*
     * return array with game data and scores
     */

    public static function processGames(array $games)
    {
        $results = array(
            'games' => array(),
            't_score' => 0
        );

        foreach ($games as $game)
        {
            $g = new self($game);
            $score = $g->getScore();

            $results['games'][] = array(
                'data' => $game,
                'score' => $score,
            );
            $results['t_score'] += $score;
        }

        return $results;
    }

}

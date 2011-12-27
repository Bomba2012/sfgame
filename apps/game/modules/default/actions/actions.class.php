<?php

class defaultActions extends sfActions
{

    public function executeIndex(sfWebRequest $request)
    {
        $this->form = new ThrowForm();

        $this->throw = (int) $request->getParameter('throw');
        $this->results = Game::processGames(Game::generateGames($this->throw));
    }

}
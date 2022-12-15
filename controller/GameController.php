<?php
require "Game.php";
require "GameManager.php";

class GameController {
    private $gameManager;
    public function __construct(){
        $this->gameManager = new GameManager();
        $this->gameManager->loadGames();
    }

    public function displayGames(){
        $games = $this->gameManager->getGames();
        require_once "view/games.view.php";
    }
}


$gameManager = new GameManager();
$gameManager->loadGames(); 
$games = $gameManager->getGames();

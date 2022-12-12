<?php

require_once "Manager.php";
require_once "Game.php";

class GameManager extends Manager {
    private $games;

    public function addGame($game){
        $this->games[] = $game;
    }
    
    public function getGames(){
        return $this->games;
    }

    public function loadGames(){
        $bdd = $this->getBdd(); // normalement j'ai récup la bdd
        // var_dump($bdd); la on est BIEN ! 

        $req = $bdd->prepare("SELECT * FROM games"); // normalement la req

        $req->execute(); // on shoot ! 

        $myGames = $req->fetchAll(PDO::FETCH_ASSOC);

        $req->closeCursor();

        var_dump($myGames); // pour test

        foreach($myGames as $game){
            $g = new Game($game["id"],$game["title"],$game["nb_players"]);
            $this->addGame($g);
        }


    }

    
}
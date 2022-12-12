<?php 
ob_start(); 
require_once "Game.php";
require_once "GameManager.php";
$gameManager = new GameManager();

// $game1 = new Game(1,"Leagues of Legend",10);
// $game2 = new Game(2,"Among US",15);
// $game3 = new Game(3,"Starcraft 2",8);
// $game4 = new Game(4,"Battlefield 2042",128);
// $game5 = new Game(4,"Escape from Tarkov",14);

// $gameManager->addGame($game1);
// $gameManager->addGame($game2);
// $gameManager->addGame($game3);
// $gameManager->addGame($game4);
// $gameManager->addGame($game5);

// com a supp plus tard 


$gameManager->loadGames(); // charge la bdd - crée jeu en APPLICATION
$games= $gameManager->getGames(); // Renvoi les jeux(objets) de la bdd



?>

<table class="table table-hover text-center shadow">
    <thead class="table-dark">
        <tr>
            <th>Titre</th>
            <th>Nombre de joueurs</th>
            <th colspan="2">Actions</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($games as $game ) :?>
        <tr>
            <td><?= $game->getTitle()?></td>
            <td><?= $game->getNbPlayers()?></td>
            <td><a href=""><i class="fa-solid fa-pen-to-square"></i></a></td>
            <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>

<a href="" class="btn btn-success d-block m-auto w-25">
    Ajouter un jeu    
    <i class="fa-solid fa-gamepad fa-2x"></i>
</a>

<?php
$content = ob_get_clean();
$title = "Liste de jeux";
require_once "base.html.php";

?>
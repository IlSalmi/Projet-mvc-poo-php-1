<?php 
ob_start(); 
require_once "Game.php";
require_once "GameManager.php";
$gameManager = new GameManager();
$gameManager->loadGames(); 
$games= $gameManager->getGames(); 
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
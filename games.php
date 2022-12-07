<?php 
ob_start(); 
require_once "Game.php";

$game1 = new Game(1,"Leagues of Legend",10);
$game2 = new Game(2,"Among US",15);
$game3 = new Game(3,"Starcraft 2",8);
$game4 = new Game(4,"Battlefield 2042",128);

$games= [$game1,$game2,$game3,$game4];

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
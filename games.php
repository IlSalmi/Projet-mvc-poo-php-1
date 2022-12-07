<?php ob_start(); ?>

<table class="table table-hover text-center shadow">
    <thead class="table-dark">
        <tr>
            <th>Titre</th>
            <th>Nombre de joueurs</th>
            <th colspan="2">Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Leagues of Legends</td>
            <td>10</td>
            <td><a href=""><i class="fa-solid fa-pen-to-square"></i></a></td>
            <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
        </tr>
        <tr>
            <td>Among US</td>
            <td>15</td>
            <td><a href=""><i class="fa-solid fa-pen-to-square"></i></a></td>
            <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
        </tr>
        <tr>
            <td>Starcraft 2</td>
            <td>8</td>
            <td><a href=""><i class="fa-solid fa-pen-to-square"></i></a></td>
            <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
        </tr>

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
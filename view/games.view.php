<?php 

ob_start(); ?>


<table class="table table-hover text-center shadow">
  <thead>
    <tr>
      <th scope="col">Titre</th>
      <th scope="col">Nombre de Joueur</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($games as $game) : ?>
      <tr class="table">
      <td><?= $game->getTitle() ?></th>
      <td><?= $game->getNbPlayers() ?></td>
      <td><i class="fa-solid fa-pen-to-square"></i></td>
      <td><i class="fa-solid fa-trash text-danger"></i></td>
    </tr>
    <?php endforeach;?>
    
  </tbody>
</table>

<a href="" class="btn btn-success d-block m-auto w-25">Ad a game <br>
    <i class="fa-solid fa-gamepad"></i>
</a>

<?php
$content = ob_get_clean();
$title="Liste de jeux";

require_once "base.html.php";
?>

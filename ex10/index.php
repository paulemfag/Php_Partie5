<?php
$page = 'Exercice 10';
include '../header.php';
  function monthTer(){
    $departments = [
    02 => 'Aisne',
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas-de-Calais',
    80 => 'Somme',
    ];
    foreach ($departments as $key => $value) {?>
    <p><?= 'Le département ' .$value. ' a le numéro '. $key. '.<br>';?></p>
    <?php
    }
  }
  monthTer();
include '../footer.php'; ?>

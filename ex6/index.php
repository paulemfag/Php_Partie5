<?php
$page = 'Exercice 6';
include '../header.php';
  function monthTer(){
    $departments = [
    02 => 'Aisne',
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas-de-Calais',
    80 => 'Somme',
    ];
    print_r($departments[59]);
  }
?>
<p><?php monthTer(); ?></p>
<?php include '../footer.php'; ?>

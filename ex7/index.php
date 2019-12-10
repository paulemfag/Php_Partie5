<?php
$page = 'Exercice 7';
include '../header.php';
  function monthTer(){
    $departments = [
    02 => 'Aisne',
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas-de-Calais',
    80 => 'Somme',
    ];
    $departments[51] = 'Marne';
    print_r($departments[51]);
  }
?>
<p><?php monthTer(); ?></p>
<?php include '../footer.php'; ?>

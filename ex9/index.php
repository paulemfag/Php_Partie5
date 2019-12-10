<?php
$page = 'Exercice 9';
include '../header.php';
  function monthTer(){
    $result = '';
    $departments = [
    02 => 'Aisne',
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas-de-Calais',
    80 => 'Somme',
    ];
    foreach ($departments as $key => $values) {
      $result .= $values. ', ';
    }
    echo $result;
  }
?>
<p><?php monthTer(); ?></p>
<?php include '../footer.php'; ?>

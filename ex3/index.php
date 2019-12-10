<?php
$page = 'Exercice 3';
include '../header.php';
  function monthTer(){
    $months = [
    1 => 'Janvier',
    2 => 'Février',
    3 => 'Mars',
    4 => 'Avril',
    5 => 'Mai',
    6 => 'Juin',
    7 => 'Juillet',
    8 => 'Aout',
    9 => 'Septembre',
    10 => 'Octobre',
    11 => 'Novembre',
    12 => 'Décembre'
    ];
    print_r($months[5]);
  }
?>
<p><?php monthTer(); ?></p>
<?php include '../footer.php'; ?>

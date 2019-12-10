<?php
$page = 'Exercice 8';
include '../header.php';
  function monthTer(){
    $p = '';
    $months = [
    'Janvier',
    'Février',
    'Mars',
    'Avril',
    'Mai',
    'Juin',
    'Juillet',
    'Aout',
    'Septembre',
    'Octobre',
    'Novembre',
    'Décembre'
    ];
  $taille = count($months);
    for ($i=0; $i < $taille; $i++) {
      $p .= $months[$i]. ', ';
    }?>
<p><?php print_r($months). '<br><br>';?></p>
<p><?= $p;  }?></p>
<?php monthTer();
include '../footer.php'; ?>

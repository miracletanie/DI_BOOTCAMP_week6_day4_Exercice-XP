
<?php
$mois = array('Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre');
$mois_reste = array();

foreach ($mois as $mois) {
  if ($mois !== 'Mars') {
    $mois_reste[] = $mois;
  }
}

$mois = $mois_reste;

echo implode(", ", $mois);
?>

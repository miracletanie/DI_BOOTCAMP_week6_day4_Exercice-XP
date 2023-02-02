<?php
$tableau1 = array(1, 2, 3, 4, 5, 6);
$tableau2 = array(2, 4);

$verifier = true;
foreach ($tableau2 as $value) {
  if (!in_array($value, $tableau1)) {
    $verifier = false;
    break;
  }
}

if ($verifier) {
  echo "Le tableau 2 est un sous-ensemble du tableau 1";
} else {
  echo "Le tableau 2 n'est pas un sous-ensemble du tableau 1";
}
?>

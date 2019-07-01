<?php

  require_once 'Prodotto.php';
  require_once 'Carne.php';

  $carne1 = new Carne('0123', 'Pollo', 'Amadori', '02/08/2019', 'Pollame', 6.95, 0.5);
  echo '<pre>';
  var_dump($carne1);
  echo '</pre>';
  $prezzo = $carne1->calcolaPrezzo();
  var_dump($prezzo);

  $carne2 = new Carne('1234', 'Cavallo', 'Cavallo', '03/10/2019', 'Equina', 10, 1);
  echo '<pre>';
  var_dump($carne2);
  echo '</pre>';
  $prezzo = $carne2->calcolaPrezzo();
  var_dump($prezzo);

?>

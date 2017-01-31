<?php

function dd($data) {
  echo '<pre>';
  die(var_dump($data));
  echo '</pre>';
}

function clubdoor($age) {
  if($age < 18) {
    echo 'Your are to young to enter.';
  } else {
    echo 'You may enter';
  }
}


?>

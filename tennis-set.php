<?php

function tennisSet($score1, $score2) {
  if ($score1 === 7) {
    return $score2 >= 5 && $score2 < 7;
  }
  
  if ($score2 === 7) {
    return $score1 >= 5 && $score1 < 7;
  }
  
  if ($score1 === 6) {
    return $score2 < 5;
  }
  
  if ($score2 === 6) {
    return $score1 < 5;
  }
  
  return false;
}

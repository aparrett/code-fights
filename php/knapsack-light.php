<?php

function knapsackLight($value1, $weight1, $value2, $weight2, $maxW) {
  $max = 0;
  
  if ($weight1 <= $maxW) {
      $max = max($max, $value1);
  }
  
  if ($weight2 <= $maxW) {
      $max = max($max, $value2);
  }
  
  if ($weight1 + $weight2 <= $maxW) {
      $max = max($max, $value1 + $value2);
  }
  
  return $max;
}

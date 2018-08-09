<?php

function phoneCall($costMin1, $costMin2_10, $costMin11, $balance) {
  if ($balance < $costMin1) {
      return 0;
  }
  $balance -= $costMin1;

  if ($balance <= $costMin2_10 * 9) {
      return 1 + floor($balance / $costMin2_10);
  }
  $balance -= 9 * $costMin2_10;
  
  return 10 + floor($balance / $costMin11);
}
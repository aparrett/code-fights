<?php

function lateRide($n) {
  $hours = floor($n / 60);
  $minutes = $n % 60;
  return array_sum(str_split($hours)) + array_sum(str_split($minutes));
}
<?php

function circleOfNumbers($n, $firstNumber) {
  $half = $n / 2;
  return ($half + $firstNumber) % $n;
}
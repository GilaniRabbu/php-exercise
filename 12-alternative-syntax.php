<?php
$Number = 6;

if ($Number == 5):
  echo "$Number equals 5";
  echo PHP_EOL; // End Of Line (EOL)
  echo "Some Text++";
elseif ($Number == 6):
  echo "$Number equals 6";
  echo PHP_EOL;
  echo "Some Text++";
else:
  echo "$Number is neither 5 nor 6";
  echo PHP_EOL;
  echo "Some Text++";
endif;

echo PHP_EOL;

switch ($Number):
  case 5:
    echo "$Number equals 5";
    break;
  case 6:
    echo "$Number equals 6";
    break;
  default:
    echo "$Number is neither 5 nor 6";
endswitch;
?>
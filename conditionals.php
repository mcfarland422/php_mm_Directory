<?php
  # CONDITIONALS

  /*
      ==  equals
      === matches value and data type
      < less than
      > greater than
      <=
      >=
      != Not equal to
      !== Not Identical
  */

  $num = 5;

  if($num == 5){
    echo '5 passed';
  } elseif($num == 6){
    echo '6 passed';
  } else {
    echo 'did not pass';
  }

  # NESTING IF

  $num = 6;

  if($num > 4){
    if($num < 10){
      echo "$num passed";
    }
  }


  /*
      LOGICAL OPERATORS

      and &&
      or ||
      xor   exclussive or // one has to be true, but not both
  */

    if($num > 4 AND $num < 10){
      echo "$num passed";
    }


    if($num > 4 OR $num < 10){
      echo "$num passed";
    }





    # SWITCH

    $favColor = 'red';

    switch($favColor){
      case 'red':
        echo 'Your favorite color is red';
        break;
      case 'blue':
        echo 'Your favorite color is blue';
        break;
      case 'green':
        echo 'Your favorite color is green';
        break;
      case 'red':
        echo 'Your favorite color is something else';
        break;

    }




 ?>

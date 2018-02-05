<?php
  // Single line comment
  # Single line comment
  /*
    Multiline
    comment
  */

  #VARIABLES
      // - Prefix $
      // - Start with a letter or an underscore
      // - Only letters, numbers and underscores
      // - Case sensitive
      //

    #DATA TYPES
    /*
      Sting
      Integers
      Floates
      Booleans
    */

  $output = 'Hello World';
  $num1 = 4;
  $num2 = 10;
  $sum = $num1 + $num2;
  echo $sum;

  $string1 = 'Hello';
  $string2 = 'World';
  $greeting = $string1 .' '. $string2.'!';
  echo $greeting;

  $greeting2 = "$string1 $string2";

  $string3 = 'They\'re Here';
  echo $string3;

  $float1 = 4.4;
  $bool1 = true;

// Constant
  define('GREETING', 'Hello Everyone');

  // if not case sensitive use 'true'
    define('GREETING', 'Hello Everyone', true);

  echo $output;
 ?>

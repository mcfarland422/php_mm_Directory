<?php
  # substr()
  # Returns a portion of a string

  $output = substr('Hello', 1);
  echo $output; // e

  $output = substr('Hello', 1, 3);
  echo $output; // ell

  $output = substr('Hello', -2);  //starting from right = l
  echo $output; // e

  # strlen()
  # Returns the length of a string

  $output = strlen('Hello world');

  # strpos()
  # Finds the position of the first occurence of a sub string

  $output = strpos('Hello World', 'o'); // 4
  echo $output;

  # strrpos()
  # Finds the position of the last occurence of a sub string

  $output = strpos('Hello World', 'o'); // 7
  echo $output;

  # trim()
  # Strips whitespace

  $text = 'Hello World                    ';

  $trimmed = trim($text); // 'Hello World'

  # strtoupper
  # Makes everything uppercase
  $output = strtoupper('Hello World'); // HELLO WORLD

  # strtolower
  # Makes everything lowercase
  $output = strtoupper('Hello World'); // hello world

  # ucwords()
  # Capitalize every word

  $output = ucwords('hello world'); // Hello World

  # str_replace()
  # Replace all occurences of a search string with a replacement

  $text = 'Hello World';
  $output = str_replace('World', 'Everyone', $text); // Hello Everyone

  # is_string()
  # Check if string

  $val = 'Hello';
  $output = is_string($val);  // 1

  echo $output;

  $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', '  ', 0, '0');

  foreach($values as $value){
    if(is_string($value)){
      echo "{$value} is a string<br>";
    }
  }

  // returns all strings in the array ^

  # gzcompress()
  # Compress a string

  $string = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

  $compressed = gzcompress($string);

  //uncompress

  $original = gzuncompress($compressed);
  echo $original;

 ?>

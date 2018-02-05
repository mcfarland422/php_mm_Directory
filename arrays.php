<?php
  # Array -  Variable that holds multiple values
  /*
    - Indexed
    - Associative
    - Multi- dimensional
   */

   // Indexed
   $people = array('Kevin', 'Jeremy', 'Sara');
   $ids = array(23, 55, 12);
   $cars = ['Honda', 'Toyota', 'Ford'];
   $cars[3] = 'Chevy';

   // //echo count($cars);
   // print_r($cars); // echo for arrays
   // var_dump($cars);
   //
   // // echo $people[1];
   // echo $cars[3];

   // Associative arrays
   $people = array('Brad' => 35, 'Jose' => 32, 'William' => 37 );
   $ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];

   //echo $people ['Brad'];
   // echo $ids[22];
   $people['Jill'] = 42;
   // echo $people['Jill'];
   // print_r($people);
   //var_dump($people);

   //Multi-dimensional
   $cars = array(
     array('Honda', 20, 10),
     array('Toytota', 30, 20),
     array('Ford', 23, 12)
   );

   echo $cars[1][2];
   // 1 is the index of the array
   // 2 is the index of the array in the array ex. 20
 ?>

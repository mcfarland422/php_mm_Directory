<?php
    # LOOPS -  Execute code set number of times

    /*
      For
      While
      Do..While
      Foreach
     */

     # For Loop
     # @params - init, condition, inc

     for($i = 5; $i <= 10; $i++){
       echo 'Number '.$i;
       echo '<br>';
     }

     #While Loop
     # @params - condition

     $i = 0;

     while($i < 10){
       echo $i;
       echo '<br>';
       $i++;
     }

     # Do...While
     # @params - condition

     $i = 0;

     do{
       echo $i;
       echo '<br>';
       $i++;
     }

     while($i < 10);


    # Foreach Loop - For Arrays
     $people = array('Kevin', 'Jeremy', 'Sara');

     foreach($people as $person){
       echo $person;
       echo '<br>';
     }


     # Foreach Loop - For Associative Arrays
      $people = array('Kevin' => 'kev@aol.com', 'Jeremy' => 'jermemy@yomoma.com', 'Sara' => 'sara@gmail.com');

      foreach($people as $person => $email){
        echo $person.': '.$email;
        echo '<br>';
      }

 ?>

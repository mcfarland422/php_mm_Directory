<?php
  $loggedIn = true;

/*
  if($loggedIn){
    echo 'You are logged in';
  } else {
    echo 'You are NOT logged in';
  }
*/
  echo ($loggedIn) ? 'You are logged in' : 'You are NOT logged in';
  // same as above, but in one line w/ ternary


  $isRegistered = ($loggedIn == true) ? true : false;
  echo $isRegistered;

  $age = 20;
  $score = 15;

  echo 'Your score is: '.($score > 10 ? : ($age > 10 ? 'Average': 'Exceptional'):($age > 10 ? 'Horrible':'Average'));


 ?>

<div class="">
  <?php if($loggedIn): ?>
    <h1>Welcome User</h1>
  <?php else: ?>
    <h1>Welcome Guest</h1>
  <?php endif; ?>
</div>

<div class="">
  <?php foreach($arr as $val): ?>
    <?php echo $val; ?>
  <?php endforeach; ?>
</div>

<div class="">
  <?php for($i = 0; $i < 10; $i++): ?>
    <li><?php echo $i; ?></li>
  <?php endfor; ?>

</div>

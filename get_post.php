<?php
  // if(isset($_GET['name'])){
  //   // print_r($_GET);
  //   //$name = htmlentities($_GET['name']);
  //   //echo $name;
  // }
  //
  // if(isset($_POST['name'])){
  //   print_r($_POST);
  //   $name = htmlentities($_POST['name']);
  //   //echo $name;
  // }
  //
  // if(isset($_REQUEST['name'])){
  //   // print_r($_GET);
  //   //$name = htmlentities($_REQUEST['name']);
  //   //echo $name;
  // }

  // echo $_SERVER['QUERY_STRING'];

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Website</title>
  </head>
  <body>
    <form method="POST" action="get_post.php">
      <div class="">
        <label>Name</label><br>
        <input type="text" name="name">
      </div>
      <div class="">
        <label>Email</label><br>
        <input type="text" name="email">
      </div>
      <input type="submit" value="Submit">
    </form>
    <ul>
      <li>
        <a href="get_post.php?name=Brad">Brad</a>
      </li>
      <li>
        <a href="get_post.php?name=Steve">Steve</a>
      </li>
    </ul>
    <h1><?php echo "{$name}'s Profile"; ?></h1>
  </body>
</html>

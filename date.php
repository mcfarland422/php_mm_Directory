<?php
  echo date('d');  //Day   = 01
  echo date('m'); // Month  = 03
  echo date('Y'); // Year  = 2017
  echo date('l'); // Day of the week  = Wednesday

  echo date('Y/m/d'); // 2017/03/01
  echo date('m-d-Y'); // month day year

  echo date('h'); // Hour
  echo date('i'); // Min
  echo date('s'); // Seconds
  echo date('a'); // AM or PM

  // Set Time Zone
  date_default_timezone_set('America/New_York'); // Currect time


  echo date('h:i:sa'); // 02:06:24pm


  $timestamp = mktime(10, 14, 54, 9, 10, 1981);

  /*
  Unix timestamp is a long integer containing the number of seconds between the
  Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.
  */

  echo $timestamp;  // 368979294

  echo date('m/d/Y h:i:sa', $timestamp); // 09/10/1981 10:14:54am



  $timestamp2 = strtotime('7:00pm March 22 2016');

  echo $timestamp2;

  echo date('m/d/Y h:i:sa', $timestamp2);


  $timestamp3 = strtotime('tomorrow');
  $timestamp4 = strtotime('next Sunday');
  $timestamp3 = strtotime('+2 Days');

 ?>

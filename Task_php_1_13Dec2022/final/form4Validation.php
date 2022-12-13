<?php
  $firstname= $_POST['firstName'];
  $lastname= $_POST['lastName'];
  $guest= $_POST['guest'];
  $date= $_POST['event'];
  $time= $_POST['time'];
  $radio= $_POST['option'];


  echo "<p>Enter a First Name:  $firstname</p>";
  echo "<p>Enter a Last Name: $lastname</p>";
  echo "<p>Enter number of guest:$guest </p>";
  echo "<p>Enter a date:  $date</p>";
  echo "<p>Enter a time:$time</p>";
  echo "<p>click on radiobutton: $radio</p>";
  ?>
<?php
  $firstname= $_POST['firstName'];
  $lastname= $_POST['lastName'];
  $emailId=  $_POST['emailid'];
  $checkbox1= $_POST['angry'];
  $checkbox2= $_POST['sad'];
  $checkbox2= $_POST['happy'];
  $checkbox4= $_POST['ambivalent']; 
  $radio= $_POST['service'];
  $comment= $_POST['comments'];
  $biophoto= $_POST['biophoto'];
  $location= $_POST['visited'];

  echo "<p>Enter a First Name:  $firstname</p>";
  echo "<p>Enter a Last Name: $lastname</p>";
  echo "<p>Enter a Email Id: $emailId</p>";
  echo "<p>click on checkbox:  $checkbox1</p>";
  echo "<p>click on checkbox: $checkbox2</p>";
  echo "<p>click on checkbox: $checkbox3</p>";
  echo "<p>click on checkbox: $checkbox4</p>";
  echo "<p>click on Radiobutton: $radio </p>";
  echo "<p>Enter a Further comments: $comment </p>";
  echo "<p>Bio Photo:  $biophoto </p>";
  echo "<p>Enter a location: $location</p>";


?>
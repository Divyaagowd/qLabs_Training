<?php
  $firstname= $_POST['firstName'];
  $lastname= $_POST['lastName'];
  $emailId=  $_POST['emailid'];
  $contact=  $_POST['contactNumber'];
  $discription=  $_POST['discription'];


  echo "<p>Enter a First Name:  $firstname</p>";
  echo "<p>Enter a Last Name: $lastname</p>";
  echo "<p>Enter a Email Id: $emailId</p>";
  echo "<p>Enter a Contact Number : $contact</p>";
  echo "<p>Enter a Discription: $discription</p>";

?>
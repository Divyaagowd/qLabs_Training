<?php
   $title= "- Form IV";
 require_once('common_files/header.php');
?>
<div class="container">
<div class="wrapper">
<form action="form4Validation.php" method="POST"> 
<lable for="firstname">First Name:</lable> <br>
<input type="text" id="firstname" name="firstName" placeholder="Enter a firstname" require><br>
  <lable for="lastname">Last Name:</lable> <br>
  <input type="text" id="lastname" name="lastName" placeholder="Enter a lastname" require><br>
  <lable>How many guest are you bringing</lable><br>
  <input type="text" id="guest" name="guest" placeholder="Enter a number" require><br>
  <lable for="event">Event Date</lable><br>
  <input type="date" name="event" id="event" required><br>
  <lable for="time">Event Time</lable><br>
 <input type="time" id="time" name="time" require><br>
 <label for="radio"> How satisfied were you with our service?</label>
  <input type="radio" value="yes" id="yes" name="option">Yes
  <input type="radio" value="yes" id="yes" name="option">No<br>
  <input type="submit" value="submit" id="login"><br>
  <lable><Strong>Fully working RSVP HTML form</Strong></lable><br>
  <input type="submit" value="Get a code" id="login">




</form>
   </div>
   </div>

<?php
 require_once('common_files/footer.php');
?>
<?php
   $title= "- Form II";
 require_once('common_files/header.php');
?>
<div class="container">
<div class="wrapper">
<form action="form2Validation.php" method="POST">   
<lable for="firstname">First Name:</lable></lable> <br>
  <input type="text" id="firstname" name="firstName" placeholder="Enter a firstname" require><br>
  <lable for="lastname">Last Name:</lable> <br>
  <input type="text" id="lastname" name="lastName" placeholder="Enter a lastname" require><br>
  <lable for="email">Email-Id:</lable> <br>
  <input type="email" id="email" name="emailid" placeholder="Enter a emailId" require><br>
  <lable for="contact">Contact Number:</lable> <br>
  <input type="text" id="contact" name="contactNumber" maxlength="10" placeholder="Enter a contact number" require><br>
  <lable for="discription">Discription:</lable> <br>
  <textarea id="discription" name="discription" rows="4" cols="50"></textarea>
   <input type="submit" value="submit" id="login">
</form>
   </div>
   </div>

<?php
 require_once('common_files/footer.php');
?>
   
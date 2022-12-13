<?php
   $title= "- Form I";
 require_once('common_files/header.php');
?>
<div class="container">
  <div class="wrapper">
<form action="form1Validation.php" method="POST">
  <lable for="email">Email-Id</lable> <br>
  <input type="email" id="email" name="emailid" placeholder="Enter a emailId" require><br>
  <lable for="password">Password</lable> <br>
  <input type="text" id="password" name="passwordone" placeholder="Enter a password" require>
  <input type="submit" value="Login" id="login">
</form>
  </div> 
  </div> 


<?php
 require_once('common_files/footer.php');
?>
    

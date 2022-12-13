<?php
   $title= "- Form III";
 require_once('common_files/header.php');
?>
<h1>MY FEEDBACK FORM</h1>
<div class="container">
<div class="wrapper">
<form action="form3Validation.php" method="POST"> 
<lable for="firstname">First Name:</lable> <br>
<input type="text" id="firstname" name="firstName" placeholder="Enter a firstname" require><br>
  <lable for="lastname">Last Name:</lable> <br>
  <input type="text" id="lastname" name="lastName" placeholder="Enter a lastname" require><br>
  <lable for="email">Email-Id:</lable> <br>
  <input type="email" id="email" name="emailid" placeholder="Enter a emailId" require><br>
  <label for="emotions">Please check all the emotions that apply to you:</label>
  <input type="checkbox" checked  name="angry">Angry <br>
  <input type="checkbox"  name="sad">Sad <br>
  <input type="checkbox"  name="happy">Happy <br>
  <input type="checkbox"  name="ambivament">Ambivalent
  <label for="satisfied"> How satisfied were you with our service?</label>
  <input type="radio" value="very satisfied" id="verysatisfied" name="service" checked>Very satisfied<br>
  <input type="radio" value="satisfied" id="satisfied" name="service">Satisfied<br>
  <input type="radio" value="didn't care" id="care" name="service">Didn't care<br>
  <input type="radio" value="dissatisfied" id="dissatisfied" name="service">Dissatisfied<br>
  <input type="radio" value="very dissatisfied" id="vdissatisfied" name="service">Very dissatisfied<br>
  <lable>Further comments </lable><br>
  <textarea id="comments" name="comments" rows="4" cols="50"></textarea>
  <label for="biophoto">Bio photo:</label>
 <input type="text" id= "biophoto" name="biophoto"  >
 <input type="file" id="photo" name="photo"  accept=".pdf">  
 <label for="visited">Visited location:</label>
 <select id="visited"  name="visited" >
           <option>Select location</option>
            <option>Indiranagar</option>
            <option>Rajajinagar</option>
            <option>MG Road</option>
        </select>
 <input type="submit" value="submit" id="login">




  


</form>
   </div>
   </div>

<?php
 require_once('common_files/footer.php');
?>
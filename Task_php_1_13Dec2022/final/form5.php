<?php
   $title= "- Form V";
 require_once('common_files/header.php');
?>
<div class="container">
<div class="wrapper">
<form action="form5Validation.php" method="POST"> 
<lable for="fullname">Full Name:</lable> <br>
<input type="text" id="fullname" name="fullName" placeholder="Enter a fullname" require><br>
<lable for="dob">Date of birth(DOB)</lable><br>
  <input type="date" name="dob" id="dob" required><br>
  <input type="radio" value="tax" id="taxid" name="option">TaxID
  <input type="radio" value="social" id="socialnumber" name="option">Social Security Number<br>
  <input type="text" id="radio" name="radio"  maxlength ="9" placeholder="enter 9 numbers" require><br>
  <lable for="citizenship">Citizenship</lable><br>
  <select id="citizenship"  name="citizenship" >
        <option>Select option</option>
           <option>Indian</option>
            <option>Muslim</option>
            <option>christian</option>
        </select><br>
        <lable for="country">Country</lable><br>
  <select id="country"  name="country" >
          <option>Select option</option>
           <option>India</option>
            <option>China</option>
            <option>Bangladesh</option>
            <option>Brazil</option>
        </select><br>
        <lable for="dayphone">Day Phone:</lable> <br>
        <input type="text" id="dayphone" name="dayphone"  require><br>
        <lable for="eveningphone">Evening Phone:</lable> <br>
        <input type="text" id="eveningphone" name="eveningphone"  require><br>
        <lable for="address1">Address line 1:</lable> <br>
  <textarea id="address1" name="address1" rows="4" cols="50"></textarea><br>
  <lable for="address2">Address line 2:</lable> <br>
  <textarea id="address2" name="address2" rows="4" cols="50"></textarea><br>
  <lable for="city">City:</lable> <br>
<input type="text" id="city" name="city" require><br>
<lable for="state">State:</lable><br>
  <select id="country"  name="country" >
          <option>Select option</option>
           <option>Karnataka</option>
            <option>Bihar</option>
            <option> Bombay</option>
            <option>Punjab</option>
        </select><br>
        <label for="zipcode">Zip Code</label>
        <input type="text" name="zipcode" id="zipcode" required><br>
        <input type="radio" value="subject" id="subject" name="option"  maxlength="6">Subject to  backup withholding
  <input type="radio" value="" id="subject2" name="option" checked>I want to reinvest my dividends<br>
  <input type="submit" value="submit" id="login"><br>
  <input type="submit" value="Back" id="login"><br>





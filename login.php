<!DOCTYPE html>
<html>
<head>
	<form action="action_page.php">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="userid"><b>User Id</b></label>
    <input type="text" placeholder="Enter User id" name="user id" id="user id" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>
<?php

    $arr1 = array('email' => bob@gmail.com, 'password' => '999', 'user id' => 'Bob');
    $json_encoded_text =  json_encode($arr1);

    $json_decoded_text = json_decode($read, true);

    echo $json_decoded_text['email'];
    echo "<br>";
    echo $json_decoded_text['password'];
    echo "<br>";
    echo $json_decoded_text['user id'];
?>php
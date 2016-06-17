<?php
  $email = $_POST['email'];
  $pwd = $_POST['password'];

  if(isset($email) && $pwd == "password"){
    echo "Success!";
  }else{
    echo "Wrong email or password!";
  }
?>

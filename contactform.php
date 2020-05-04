<?php

$name = $_REQUEST['name']
$email = $_REQUEST['email']
$contact = $_REQUEST['contact']
$message = $_REQUEST['message']

if(empty($name) || empty($email) || empty($contact) || empty($message))
{

  echo "pura data de bhai !!!!";

}
else {


  mail("sankha2021@gmail.com",web message,$message, "From: $name <$email> <$contact>");
  echo "<script type='text/javascript'>alert('message milgeya'); window.history.log(-1);<script>";
}
 ?>

<?php
session_start();
include('../functions.php');

  if(empty($_SESSION['email'])){
    include('views/login.php');
  
 } else {
  include("views/admin.php");
}
?>
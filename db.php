<?php
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="dems";
  //create connection
  $conn=mysqli_connect($servername,$username,$password,$dbname);
  //check connection
  if(!$conn){
      die("connection failed : " .mysqli_connect_error());
  }
  ?>
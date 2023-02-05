<?php
$conn = mysqli_connect("localhost","root","","smart_pharmacy");
 //$conn = mysqli_connect("sql107.epizy.com","epiz_31559128","jlibuu33Ck","epiz_31559128_smartpharm");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  //session_start();

   function test_input($data,$conn) {
    $data = mysqli_real_escape_string($conn,$data);
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  } 
?>
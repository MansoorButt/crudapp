<?php

include 'connect.php';
$id = $_GET['updateid'];
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $expense = $_POST['expense'];
  $amount = $_POST['amount'];

  $sql = "update `crud` set Name='$name', ExpenseName='$expense', Amount=$amount where id=$id";

  $result = mysqli_query($con,$sql);

  if($result){
    header('location:index.html');
  }
  else{
    die(mysqli_error($con));
  }
}

?>

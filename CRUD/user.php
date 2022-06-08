<?php

include 'connect.php';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $expense = $_POST['expense'];
  $amount = $_POST['amount'];

  $sql = "insert into `crud` (Name, ExpenseName, Amount) values('$name', '$expense', $amount)";

  $result = mysqli_query($con,$sql);

  if($result){
    header('location:index.html');
  }
  else{
    die(mysqli_error($con));
  }
}

?>


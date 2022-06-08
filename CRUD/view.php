<?php

include "connect.php";

$sql = "Select * from `crud`";
          $result = mysqli_query($con,$sql);

          if($result){
            while($row = mysqli_fetch_assoc($result)){
              $id = $row['id'];
              $name = $row['Name'];
              $expense = $row['ExpenseName'];
              $amount = $row['Amount'];

              echo '
              <tr>
              <th scope="row">'.$id.'</th>
              <td>'.$name.'</td>
              <td>'.$expense.'</td>
              <td>'.$amount.'</td>
              <td>
              <button class="btnn-primary"><a href="./updateuser.html?updateid='.$id.'">Update</a></button>              
              <button class="btnn-danger"><a href="delete.php?deleteid='.$id.'">Delete</a></button>
              </td>
              </tr>';
            }
          }

?>

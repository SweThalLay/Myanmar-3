<?php
//$name = $age = $email = $gender = "";




if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   // die('Work');
  $name=test_input($_POST["name"]);
  $age=test_input($_POST["age"]);
  $email=test_input($_POST["email"]);
  $gender=test_input($_POST["gender"]);
  # code...          
         }

function test_input($data){
  $data=trim($data);
  $data=stripcslashes($data);
  $data=htmlspecialchars($data);
  return $data;
   var_dump($data);die();
}
?>
<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>age</th>
      <th>Email</th>
      <th>Gender</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $name;?></td>
      <td><?php echo $age;?></td>
      <td><?php echo $email;?></td>
      <td><?php echo $gender;?></td>
    </tr>
  </tbody>
</table>
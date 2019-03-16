<?php
$server="localhost";
$username="becky";
$password ="";
$db="learn_php";

// create connection
$conn = mysqli_connect($server, $username, $password, $db);

//  check connection
if(!$conn){
  die("Connection failed: " . mysqli_connect_erro()); 
}
//Inserting data into table
if (isset($_POST['submit'])){
  $user = $_POST['name'];
  $email = $_POST['email'];
  $comment = $_POST['comment'];

  $ins_sql = "INSERT INTO user (name, email, comment) VALUES('$user','$email','$comment')";

  $run = mysqli_query( $conn, $ins_sql);
// if ($run){
//   echo "New record created successfully";
// }else{
//   echo "Error: " . $ins_sql . "<br>" . mysqli_error($conn);
// }
}
header("refresh:2; url = index.html")
?>


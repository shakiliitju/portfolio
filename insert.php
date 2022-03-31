<?php
// include_once 'database-con.php';
// if(isset($_POST['save']))
// {    
//      $cname = $_POST['cname'];
//      $email = $_POST['email'];
//      $subjects = $_POST['subjects'];
//      $messages = $_POST['messages'];
     

//      $sql = "INSERT INTO message(cname,email,subjects,messages)
//      VALUES ('$cname','$email','$subjects','$messages')";
//      if (mysqli_query($conn, $sql)) {
//         echo "New record has been added successfully !";
//      } else {
//         echo "Error: " . $sql . ":-" . mysqli_error($conn);
//      }
//      mysqli_close($conn);
// }

 
// include "database-con.php";
// if (isset($_POST['cname']) && isset($_POST['email']) && isset($_POST['subjects']) && isset($_POST['messages'])) {

//    $cname = $_POST['cname'];
//    $email = $_POST['email'];
//    $subjects = $_POST['subjects'];
//    $messages = $_POST['messages'];

//    $sql = "INSERT INTO message(cname,email,subjects,messages)
//    VALUES('$cname','$email','$subjects','$messages')";

  
// if (mysqli_query($conn, $sql)) {
//            echo "New record has been added successfully !";
//         } else {
//            echo "Error: " . $sql . ":-" . mysqli_error($conn);
//         }
//         mysqli_close($conn);
// }




$link = mysqli_connect("localhost", "root", "", "shakiliitju");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$cname = mysqli_real_escape_string($link, $_REQUEST['cname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$subjects = mysqli_real_escape_string($link, $_REQUEST['subjects']);
$messages = mysqli_real_escape_string($link, $_REQUEST['messages']);


// Attempt insert query execution
$sql = "INSERT INTO message(cname, email, subjects, messages) VALUES ('$cname', '$email','$subjects','$messages')";
if(mysqli_query($link, $sql)){
   echo "Thank You 😍";
    echo " Message send successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

?>



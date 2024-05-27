<?php

include'connect.php';
if(isset($_POST['signUp'])){
$firstname=$_POST['fName'];
$lastname=$_POST['lName'];
$email=$_POST['email'];
$password=$_POST['password'];
$firstname=md5($password);
}
{
$checkEmail="SELECT * From users WHERE email='$email' ";
$result="$conn->query($checkEmail);
if($result->num_rows>0){
    echo  'email exists';
else{ 
    $insertQuery="INSERT INTO users ('firstName', 'lasnAME','email','password')
                    VALUES ('$firstName', '$lastname', '$email', '$password');
                    if($conn->query($insertQuery)==TRUE){
                        else {

                            echo"Error:".$conn->error;

                        }
                
              }
    
         }

if(isset($_POST["signIn"])){
    $email=$_POST["email"];
    $password=$_POST["password"];
}

$sql="SELECT * FROM users WHERE email='$email' and password='$password' ";
$result=$conn->query(sql);
if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['EMAIL']=$row['email'];
    header("Location: homepage.php");
    exit();
}
else {
    echo "Not Found, Incorrect Email or Password";
}
            
?>

<?php

$fristname=$_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
$gender=$_REQUEST['gender'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];

if(isset($_POST['btm'])){
 


    $host="localhost";
    $user="root";
    $db="kitchen";

    $conn = mysqli_connect($host ,$user ,$db);
     
    $insert="insert into signup values('$fristname','$lastname','$gender','$email','$password');
     
    mysqli_query($conn ,$insert );
     
    if($conn ){
        echo ("<h1 style ='color: green ;'> your registeration is done! </h1>");

    }else{
        echo ("<h1  style ='color: red ;'> your registeration is dfailed! </h1>");
    }

}




?>
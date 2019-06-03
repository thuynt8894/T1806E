<?php
session_start();

$username =$_POST["username"];
$password =$_POST["password"];
$confirm =$_POST["confirm"];
if ($password == $confirm){
    if (isset($_POST['sent'])){
        if ($_POST['gender']=='male'){
            echo "Hello, Mr. .$username" ;
        }else{
            echo "Hello, Madam .$username" ;
        }
    }
}else{
    echo "Password doesn't match, re-enter please";
}
<?php 

$host="localhost";
$Username="root";
$Password="";
$db="Guvi";

mysqli_connect($host,$Username,$Password,$db);


if(isset($_POST['Username'])){
    
    $Username=$_POST['Username'];
    $Password=$_POST['Password'];
    
    $sql="select * from registration where user='".$Username."'AND Pass='".$Password."' limit 1";
    
    $result=mysqli_query($sql);
    
    if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>
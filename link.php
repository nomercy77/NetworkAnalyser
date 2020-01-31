<?php
$servername="localhost";
$database="a";
$username="root";
$password="";

$conn=mysqli_connect($servername, $username, $password, $database);
$uname=$_POST['username'];
$pass=$_POST['password'];
$sql="select * from a where username='$uname' AND password= '$pass'";
 $result=mysqli_query($conn, $sql);
 
     $row=mysqli_num_rows($result);
   
if($row==1){
         echo "logged in";
    
        shell_exec("script.sh");
    
        header("Location: <a href=page.html></a>");
    
         }
     else{
         echo "not logged in";
     }
 


?>



<?php
if(isset($_POST['submit']))
  {
    $id=$_POST['username'];
	$ps=$_POST['password'];
	 $con = mysqli_connect("localhost","root","","login");
$q="select * from data where username='$id'";
$run=mysqli_query($con,$q);
$row=mysqli_fetch_array($run);
$p=$row['password'];
$uid=$row['username'];
if($p==$ps){
	session_start();
	$_SESSION['uid']=$uid;
	header("Location: xyz.php");

        exit();
    
    }else{
    	echo "invalid password";
    }
  }
?>
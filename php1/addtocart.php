<?php
session_start();
include 'dbconnect.php';

$pid=$_GET['id'];
echo $pid;
$sql;
       $sql="insert into cart values('".$_SESSION["username"]."',".$pid.",1)";
		echo $sql;
		$result=mysqli_query($conn,$sql);
        
		
		if  ($pid<8){
        header('Location:home.php');
		}
		if ($pid>7 and $pid<15){
		header('Location:home.php');
		} 
		if ($pid>14 and $pid<22) {
		header('Location:home.php');
		}
		if ($pid>21 and $pid<33) {
		  header('Location:home.php');
		}
?>
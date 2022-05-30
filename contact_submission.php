<?php
session_start();

if(1)
{
	include "conn.php";


	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];

if (trim($name)!=""&&trim($email)!=""&&trim($message)!="")
{

	$stmt = $conn->prepare("SELECT name FROM s_contact WHERE name = ? LIMIT 1");
	$stmt->bind_param('s',$name);
	$stmt->execute();
	$r_stmt=$stmt->get_result();
	$result=$r_stmt->num_rows;

	if($result==0)
	{
		$save=$conn->prepare("INSERT INTO s_contact (name, email, message)VALUES(?,?,?)");
		$save->bind_param('sss',$name,$email,$message);
		if($save->execute())
		{
			echo"<script>alert('Submitted successfully');document.location='http:localhost/sapma/index.php'</script>"; 
		}
			else 
	  	{
				echo "<script>alert('Internal error');</script>";
				header('location:http://localhost/sapma/index.php');
			}
		
		}
		else
		{
			echo"<script>alert('user_already_exists');document.location='http:localhost/sapma/index.php'</script>"; 
		}
	}
}
else{
	echo("All fields required");
}
?>
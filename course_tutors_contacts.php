<?php
session_start();

if (isset($_POST['submit']) && isset($_FILES["fileToUpload"]))
{
	include "conn.php";
  	// include "conn1.php";


	$address = $_POST["address"];
	$phone = $_POST["phone"];
	$name = $_POST["sname"];
	$idnumber = $_POST["idnumber"];
	$courses = $_POST["courses"];
	$message = $_POST["message"];
	$target_dir = "uploads/";
  	$fileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"],PATHINFO_EXTENSION));
 	$new_name = strtoupper(uniqid()."_".time().".".$fileType);

if (trim($address)!=""&&trim($phone)!=""&&trim($name)!=""&&trim($idnumber)!=""&&trim($courses)!=""&&trim($message)!=""&&trim($new_name)!="")
{

	$stmt = $conn->prepare("SELECT sname FROM s_course_tutors WHERE sname = ? LIMIT 1");
	$stmt->bind_param('s',$name);
	$stmt->execute();
	$r_stmt=$stmt->get_result();
	$result=$r_stmt->num_rows;

	if($result==0)
	{
		$save=$conn->prepare("INSERT INTO s_course_tutors (address, phone, sname,idnumber,courses, message, fileToUpload)VALUES(?,?,?,?,?,?,?)");
		$save->bind_param('sssssss',$address,$phone,$name,$idnumber,$courses,$message,$new_name);
		if($save->execute())
		{
			echo"<script>alert('Submitted successfully');document.location='applyhere.php'</script>"; 
		}
			else 
	  	{
				echo "<script>alert('Internal error');</script>";
				header('location:applyhere.php');
			}
		
		}
		else
		{
			echo"<script>alert('user_already_exists');document.location='applyhere.php'</script>"; 
		}
	}

}
else{
	echo("All fields required");
}
// session_start();
// include "conn.php";
// if (isset($_POST['submit']) && isset($_FILES["fileToUpload"]))
 {
  
  # O1. Asuming the included (conn.php) contains the next line
  // $conn = mysqli_connect('localhost','root','','test_stuff');

  // $target_dir = "uploads/";
  // $fileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"],PATHINFO_EXTENSION));
  // $new_name = strtoupper(uniqid()."_".time().".".$fileType);

  # O2. This line becomes redundant as per the new file naming scheme
  if (file_exists($new_name)) {
    // echo "File already exist";
    echo"<script>alert('File already exists');</script>";
    return;
  }

  # O3. [ Asuming your filesize limit is 10MB, 10485760 ]
  if ($_FILES["fileToUpload"]["size"] > 10485760)
   {
    echo "Sorry file too large.";
    return;
  }

  # O4.
  $a = [ "jpg" , "png" , "pdf" , "docx" , "docx" , "jpeg" , "txt" ];
  if (!in_array($fileType,$a)) 
  {
    echo "error for unsupported file format and sorry file not uploaded";
    return;
  }

  # O5.
  if (!move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_dir.$new_name))
   {
    echo "Sorry there was an error uploading file";
    return;
  }

  /* O6.
  [ The issue was you forgot to bind your connection
    variable ($conn) with your query.
    NB: Learn and use prepared statements to shield 
    your apps from SQL injection attacks.
  ] 
  */
  

  // $sql = $conn->prepare("INSERT INTO s_course_tutors (fileToUpload) VALUES (?)");
  // $sql->bind_param('s',$new_name);
  if (!$stmt->execute()) 
  {
    echo "Sorry there was an error uploading file";
    return;
  }
  ##
  // echo "File is authentic and has been successfully uploaded";
  alert("File is authenitc and has been submitted successfully");
}


?>
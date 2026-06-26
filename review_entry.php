<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="review123";
 
$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());
 
 
}
echo "Connected successfully";
 
 
if(isset($_POST['save']))
{	
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 $section = $_POST['section'];
	 $email = $_POST['email'];
	 $comment = $_POST['comment'];
     $sql_query ="INSERT INTO lentry_review (first_name,last_name,email,section,comment)
	  VALUES ('$first_name','$last_name','$email','$section','$comment')";
	  echo "$first_name";
 
	  if (mysqli_query($conn, $sql_query)) 
	 {
	 	echo "New Details Entry inserted successfully !";
	  } 
	  else
      {
	 	echo "Error: " . $sql . "" . mysqli_error($conn);
	  }
	  mysqli_close($conn);
 
}

?>
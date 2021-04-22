<?php
require'contact.php';
$query="SELECT name,email FROM test";
if($query_run=mysqli_query($con,$query))
{
	while ($query_row=mysqli_fetch_assoc($query_run)) {

	   $user=$query_row['name'];
	   $email=$query_row['email'];
	   echo "<br>".$name." "."$email"."<br>";

	}
} 
else
{
	echo "not fetch";
}




 ?>
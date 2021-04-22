<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Contact - Food For Foodies</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<div id="logo">
				<a href="index.php"><img src="images/logo.png" alt="LOGO"></a>
			</div>
			<ul id="navigation">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="gallery.php">Gallery</a>
				</li>
				<li>
					<a href="blog.php">Blog</a>
				</li>
				<li class="selected">
					<a href="contact.php">Contact</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div>
			<div class="body" id="contact">
				<div id="sidebar">
					<div class="body">
						<img id="pca" src="images/donuts.jpg" alt="Img">
						<div class="contact">
							<p>
								For Order and Inquiries Please Call: <b>960-862-7541</b> Or you can visit us at: <b>4885 American Street<br> Victoria Palace, CA 92392</b> Or just Email us instead at: <b class="email">info@foodforfoodies.com</b>
							</p>
						</div>
					</div>
				</div>
				<div id="main">
					<h1>Contact</h1>
					<p>
						 <a href="http://www.freewebsitetemplates.com/"></a> Contact us regarding any query. We provide 24x7 hrs customer care support we are always happy to help you. You can reach us by email or by contacting on our mobile number which is mention in our page. <a href="http://www.freewebsitetemplates.com/forums/"></a>.
					</p>
                </div>
<?php 
	$mysql_host='localhost';
    $mysql_name='root';
    $mysql_email='';
    $mysql_db='prachi';
    $con=mysqli_connect('localhost','root','');
?>                   
<?php
 $con=mysqli_connect("localhost","root","","prachi") or die(mysqli_error());
?>
<?php
 error_reporting(0);
 session_start();
 if(isset($_POST['Send Message']))
   {
	 if($_POST['name']==""|| $_POST["email"]=='')
	 {
		$err="Fill your Name and Email First";
	 }
	 else{
		 $d=mysqli_query($con,"SELECT * FROM test where name='{$_POST['name']}'");
		 $row=mysqli_fetch_object($d);
		 $fname=$row->name;
		 $femail=$row->email;
		 if($fname==$_POST['name']&& $femail==$_POST['email'])
		   {
			$_SESSION['sid']=$_POST['name'];
			header('location:index.php');
		    } 
		 else{
			$err="invaild name or email";
		}	
	}
 }

?>
					<form action="#" method="post">
						<label>Name</label>
						<input type="text" name="name" value="">
						<label>Email Address</label>
						<input type="text" name="email" value="">
						<label>Contact Number</label>
						<input type="text" name="contact" value="">
						<label>Message</label>
						<textarea></textarea>
				        <input type="submit" name="message" value="Send Message" class="btn1">
					</form>
					<div>
						<form action="" method="post">
							<tr>
								<th>Login ID</th>
								<td><input type="text" name="loginid"></td>
							</tr>
							<tr>
								<th>Password</th>
								<td><input type="number" name="password"></td>
							</tr>
							<tr>
								<input type="button" value="Sign IN" name="" class="btn1" >
							</tr>
						
						</form>
					</div >	
					<div class="gf">
					  <form action="" method="post">
							<tr>
								<th>Name</th>
								<td><input type="text" name="username"></td>
							</tr>
							<tr>
								<th>Email ID</th>
								<td><input type="text" name="emailid"></td>
							</tr>
							<tr>
								<th>Password</th>
								<td><input type="number" name="password"></td>
							</tr>
							<tr>
								<input type="button" value="Sign UP" name="" class="btn1" >
							</tr>
					    </form>
				    </div>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div>
			<div id="links">
				<div class="showroom">
					<h4>Visit our Shop</h4>
					<a href="gallery.php"><img id="abhi" src="images/show-room.jpg" alt="Img"></a>
					<p>
						4885 American Street<br> Victoria Palace, CA 92392<br><br> 960-862-7541<br><br> <a href="index.html">info@foodforfoodies.com</a>
					</p>
				</div>
				<div>
					<h4>Recent Blog Posts</h4>
					<ul class="posts">
						<li>
							<span class="time">Jan 16</span>
							<p>
								<a href="blog.php">La'Pinos Pizza &amp; Owner</a>Americans eat approximately 100 acres of pizza a day or about 350 slices per second.
							</p>
						</li>
						<li>
							<span class="time">Jan 15</span>
							<p>
								<a href="blog.php">Burger Facts</a>A hamburger is a food consisting of one or more cooked patties of ground meat,placed inside a sliced bread roll or bun.
							</p>
						</li>
						<li>
							<span class="time">Jan 14</span>
							<p>
								<a href="blog.php">Quality Of Our Food</a>We use fresh and non-expirey ingredients in our food.
							</p>
						</li>
					</ul>
				</div>
				<div>
					<form action="#" method="post" id="newsletter">
						<h4>Join Our Newsletter</h4>
						<input type="text" value="Enter Email Address Here For Updates" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">
						<input type="submit" value="Sign up" class="btn2">
					</form>
					<div id="connect">
						<h4>Social Media</h4>
						<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a> <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a> <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a>
					</div>
				</div>
			</div>
			<ul class="navigation">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="gallery.php">Gallery</a>
				</li>
				<li>
					<a href="blog.php">Blog</a>
				</li>
				<li>
					<a href="contact.php">Contact</a>
				</li>
			</ul>
			<p id="footnote">
			</p>
		</div>
	</div>
</body>
</html>
<html>
<head>
<?php 
//host name : devfest.db.10424157.hostedresource.com
	if(isset($_POST['email'])!="" || isset($_POST['contact'])!="" || isset($_POST['name'])!="" || isset($_POST['registratinNumber'])!="")
	{
			//ONLINE CONNECTION $conn=mysql_connect("devfest.db.10424157.hostedresource.com","devfest","Material@123");
			$conn=mysql_connect("localhost","root","");
			$email= $_POST['email'];
			$name = $_POST['name'];
			$regno = $_POST['regno'];
			$contact = $_POST['contact'];
			$gender = $_POST['gender'];

			$db=mysql_select_db("devfest");

			$result=mysql_query("insert into registration (email,contact,name,regno,gender) values('$email','$contact','$name','$regno','$gender')") or die(mysql_error());

			if(isset($result)&&isset($conn))
			{
				echo "Congratulations! Subscribed!";
				?>

				<a href="index.php">Back</a>
				<?php 
			}
			else
			{
				echo "Some error";
			}	
	}
?>
</head>
<body>

<h3>Devfest</h3>
<form action="index.php" method="POST">
<label>Email : </label> <input type = "text" name = "email" required>
<label>name : </label> <input type = "text" name = "name" required>
<label>contact : </label> <input type = "text" name = "contact" required>
<label>regno : </label> <input type = "text" name = "regno" required>
<select name = "gender">
<option value = "MALE"> Male</option>
<option value = "FEMALE">Female</option>
</select>
<input type="submit" value = "Register me For the awesomeness...">
</form> 
</body>

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

				<a href="/"></a>
				<?php 
			}
			else
			{
				echo "Some error";
			}	
	}
?>
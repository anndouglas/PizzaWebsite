<html>
	<h1>Pizza Website</h1>
	
	<p>Welcome : ...</p>
	<form>
	
		Enter email: <input type="text" name="email"><br/>
		
		<input type="submit" name="btn">
	
	</form>
</html>

<?php
	if(isset($_GET['btn'])){
		
		$email = $_GET['email'];
		
		$conn = mysqli_connect("localhost","root","bobbyorr4","pizza");
		
		$q = "select * from user where email='$email'";
		$r = mysqli_query($conn, $q);
		
		$count = 0;
		while(mysqli_fetch_array($r)){
			$count++;
		}
		
		
		if($count>0){
			echo "Old Customer";
		}
		else{
			echo "New Customer";
	
		$q2 = "insert into user values('name','$email')";
		mysqli_query($conn,$q2);
	
		//Question 2 - to call the orderpizza.php
		header('location:orderpizza.php');	
		 
			
		}
		
		
	}

?>
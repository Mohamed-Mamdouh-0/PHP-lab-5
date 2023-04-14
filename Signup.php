
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

   <body>
   <div class="container mt-3">
   <form action = "<?php $PHP_sELF?>" method = "POST">
   <h1>Sign Up</h1> 
   <br>
   <p>Please fill this form to create an account.</p>

  <div class=col-xs-7>
    <label for="name">Username</label>
    <input type="text" class="form-control" name = "username" required>
    
  </div>
  <div class=col-xs-7>
    <label for="Password">Password</label>
    <input type="password" class="form-control" name = "userpass" required>
    
  </div>
  <div class=col-xs-7>
    <label for="Password">Confirm Password</label>
    <input type="password" class="form-control" name = "confpass" required>
    
  </div>
  
  <div class="col-xs-7"> <br>

 <input class="btn btn-primary" type="submit" value="Submit" name = "submit">
  <button type="button" class="btn btn-outline-dark" value="reset" name = "reset">Reset</button>
  <p> Already have an account? <a href="Login.php"target ="blank">Login Here</a></p>  
</div>
</form>
</div>

<?php


		$db_host="localhost";
		$db_user="root";
		$db_pass="";
		$db_name="day5db";
		$con = mysqli_connect($db_host, $db_user, $db_pass);

		mysqli_select_db( $con,$db_name );
		$userName = $userPass = " ";

    echo "$userName $userPass"; 
		if(!empty($_POST['submit'])){
			if( isset($_POST["username"]) &&  isset($_POST["userpass"]) && isset($_POST["confpass"]) && ($_POST["userpass"] === $_POST["confpass"])){
				$userName = $_POST['username'];
        $userPass = $_POST['userpass'];  
				$sql = "INSERT INTO users(username,user_password) VALUES('$userName','$userPass')";
				$retval = mysqli_query( $con,$sql );
				mysqli_close($con);
				header("Location: Login.php");
			}else{
        echo "<h4 style='color:red'>Password didn't Match or a field was empty</h4>";
      }
			}
 ?>
    

</body>
</html>
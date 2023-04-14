<?php 
    session_start();
    $db_host="localhost";
		$db_user="root";
		$db_pass="";
		$db_name="day5db";
		$con = mysqli_connect($db_host, $db_user, $db_pass);

		mysqli_select_db( $con,$db_name );
		$msg = '';
if(!empty($_POST['login'])){
    $userName = mysqli_real_escape_string($con,$_POST['username']);
    $userPass = mysqli_real_escape_string($con,$_POST['userpass']);
    $sql = mysqli_query($con,"SELECT * FROM users WHERE
     username = '$userName' &&
      user_password = '$userPass' ");
      $num =mysqli_num_rows($sql);
      if($num>0){
        //echo "found";
        $row = mysqli_fetch_assoc($sql);
        $_SESSION['USER_ID'] = $row['id'];
        $_SESSION['USER_NAME'] = $row['username'];
        header('location: Home.php');
        exit();
      }else{
        $msg = "Please Enter Valid Data";
      }

    
}

?>

<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

   <body>
   <div class="container mt-3">
   <form action = "<?php $PHP_sELF?>" method = "POST">
   <h1>Login</h1> 
   <br>
   <p>Please fill in your credentials to login</p>

  <div class=col-xs-7>
    <label for="name">Username</label>
    <input type="text" class="form-control" name = "username" required>
    
  </div>
  <div class=col-xs-7>
    <label for="Password">Password</label>
    <input type="password" class="form-control" name = "userpass" required>  
  </div>
  
  <div class="col-xs-7"> <br>

 <button class="btn btn-primary" type="submit" value="Submit" name = "login"> Login </button>
  <p>Don't have an account? <a href="Signup.php" target ="blank">Sign up Now</a></p>  
</div>
</form>
</div>
 
</body>
</html>
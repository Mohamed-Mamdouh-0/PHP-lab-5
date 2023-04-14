
<?php

 session_start();
 if(isset($_SESSION['USER_ID']) && isset($_SESSION['USER_NAME'])){

echo $_SESSION['USER_ID'];
echo $_SESSION['USER_NAME'];

?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
    <header>
       <h1 style="text-align:center"><?php echo 'Hi,'.$_SESSION['USER_NAME'].' Welcome to Our Site'?></h1>
    </header>
    <div>

    </div>
    
</body>
<footer>
    <br>
    <div>
<a href="Logout.php"><button type="button" class="btn btn-danger"style="Display:block;
   Margin: auto; width:350px" ><h4> Sign OUT of Your Account </h4></button></a>
</div>
</footer>


<?php
 }else{
    header('location:Login.php');
    exit();
 }

        ?>
</html>
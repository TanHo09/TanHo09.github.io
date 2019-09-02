<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Sign in</title>
<link rel="stylesheet" href="../Cloud/style.css" />
</head>
<body>
<?php
  require('db.php');
  session_start();
    if (isset($_POST['username'])){
    
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con,$username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
    $result = mysqli_query($con,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
        if($rows==1){
      $_SESSION['username'] = $username;
      header("Location: dashboard.php");
            }else{
        echo "<div class='form'><h3>Username or password incorrect!</h3></br><a href='login.php'>Re-login</a></div>";
        }
    }else{
?>
<div class="Account">
<h1>Sign In</h1>
<form action="" method="post" name="login">
<p>
  <input type="text" name="username" placeholder="Username" required />
</p>
<p>
  <input type="password" name="password" placeholder="Password" required />
</p>
<p>
  <input class="Submit" name="submit" type="submit" value="Submit" />
</p>
</form>
</div>
<?php } ?>
</body>
</html>
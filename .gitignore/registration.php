<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="../Cloud/style.css" />
</head>
<body>
<?php
  require('db.php');
    if (isset($_REQUEST['username'])){
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con,$username);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
    $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You have successfully registered</h3><br/>Click to<a href='login.php'>Log in</a></div>";
        }
    }else{
?>
<div class="Account">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<p>
    <input type="text" name="username" placeholder="Username" required />
</p>
<p>
    <input type="email" name="email" placeholder="Email" required />
</p>
<p>
    <input type="password" name="password" placeholder="Password" required />
</p>
<p>
    <input class="Submit" type="submit" name="submit" value="Registration" />
</p>
</form>
</div>
<?php } ?>
</body>
</html>
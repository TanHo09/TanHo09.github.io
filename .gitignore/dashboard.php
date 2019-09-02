<?php
include("auth.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../Cloud/dashboard.css">
</head>
<body>
    <div class="main-menu">
            <div class="container-fluid menu">
                <ul>
                    <p>HI <?php echo $_SESSION['username']; ?>!
                    <li> <a href="dashboard.php">Product</a></li>
                    <li> <a href="emloyees.php">Employees</a></li>  
                    <li> <a href="money.php">Money revenue statistics</a></li>
                    <li> <a href='registration.php'>Resitration new user</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>        
    </div> <!-- Menu -->
    <table border ="1">
        <tr class="table-head">
            <th>Image</th>
            <th>Barcode</th>
            <th>Product Name</th>
            <th>Price (VND)</th>
            <th>Quantity of goods</th>
            <th>Customized</th>
        </tr>
        <tr>
            <th><img src="../Cloud/Image/JTT.jpg" alt="" width="195px" height="200px" ></th>
            <th>159786</th>
            <th>Moto Toys</th>
            <th>500.000</th>
            <th>500</th>
            <th><a href="#">Update Quantity</a></br><a href="#">Delete</a></th>
            
        </tr>
        <tr>
            <th><img src="../Cloud/Image/s-l300.jpg" alt="" width="195px" height="200px" ></th>
            <th>257947</th>
            <th>Car Toys</th>
            <th>700.000</th>
            <th>1000</th>
            <th><a href="#">Update Quantity</a></br><a href="#">Delete</a></th>
        </tr>
    </table>

</body>
</html>
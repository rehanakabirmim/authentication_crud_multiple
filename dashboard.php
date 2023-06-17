<?php 
session_start();
if(!isset($_SESSION['userName'])){
    header("location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Welcome To <?php echo $_SESSION['userName'];?></h1>
    <h1>Your Email Address <?php echo $_SESSION['email'];?></h1>
    <div class="menu">
<ul>
    <li><a href="profile.php">Profile</a></li>
    <?php if($_SESSION["role"]==='admin'){ ?>
    <li><a href="addproduct.php">Add New Product</a></li>
    <li><a href="users.php">Users</a></li>
    <?php } ?>
    <li><a href="viewproduct.php">Manage Product</a></li>
    
    <li><a href="#">Registration</a></li>
    <li><a href="logout.php">Log out</a></li>
</ul>

    </div>
    
</body>
</html>

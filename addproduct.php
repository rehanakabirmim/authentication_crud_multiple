<?php 
session_start();
if(!$_SESSION['userName']){
    header('location:index.php');
}
else if(!$_SESSION['role'] !='admin'){
    
    header('location:dashboard.php');

}
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <h1>Add Product Page </h1>
    
</body>
</html>
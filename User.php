<?php 
class User{
    private $con = "";
    function __construct(){
        $this->con= new mysqli("localhost","root","","batch13");
    }
    function login($userName,$password){
        if(empty($userName)){
            echo'<div class="alert alert-danger"><strong>Error:
            </strong>User Name/Email is required</div>';

        }
        else if(empty($password)){
            echo'<div class="alert alert-danger"><strong>Error:
            </strong>User password is required</div>';

        }
        else{
            $result = $this->con->query("SELECT * FROM tbl_users WHERE (userName ='$userName' OR email='$userName' OR phone='$userName')AND pass='$password'");

            if($result->num_rows>0){
                session_start();
                $data = $result->fetch_assoc();
                $_SESSION['userName']=$data['userName'];
                $_SESSION['email']=$data['email'];
                $_SESSION['phone']=$data['phone'];
                $_SESSION['role']=$data['role'];
                header("location:dashboard.php");
            }
            else{
                echo'<div class="alert alert-danger"><strong>Error:
                </strong>Invalid UserName/Password</div>';
    
            }
        }
    }
}

?>
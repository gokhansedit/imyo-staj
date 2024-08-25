<?php
include("settings.php");

if(!isset($_POST['email'],$_POST['password']))
{
    exit("Kullanıcı adı veya şifre boş girildi.");
}

if($stmt = $con->prepare("SELECT id,password,role from user where mail = ?"))
{
    $stmt->bind_param('s',$_POST['email']);
    $stmt->execute();
    $stmt->store_result();
    
    if($stmt->num_rows > 0)
    {
        $stmt->bind_result($id,$password,$role);
        $stmt->fetch();
        $home_page = "../index.php";

        if(password_verify($_POST['password'],$password)){
            session_regenerate_id();
            $_SESSION['login'] = true;
            $_SESSION['mail'] = $_POST['email'];
            $_SESSION['user_id'] = kodla($id);
            $_SESSION['role']= $role;
            if(isset($_GET['redirect']))
            {
                header("Location: ../../../".$_GET['redirect']);
            }
            else {
                header("Location: ../graph-1.php");
            }
           
        }
        else {
            header("Location: ../index.php?error=1");
            exit;
        }

    }
    else {
        header("Location: ../index.php?error=2");
        exit;
    }
}

?>
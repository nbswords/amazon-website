<?php include"../php/readdb_php.php";?>
<?php
   ob_start();
   session_start();
?>
<?php
    header("Content-Type: text/html; charset=utf8");
    if(!isset($_POST["submit"])){
           exit("錯誤執行");
    }

    $email=$_POST["email"];
    $password=$_POST["password"];

    if ($email && $password){

        $sql = "select * from `user` where `Email` = '$email' and `Passwords`='$password'";
        $result = mysqli_query($conn,$sql);
        $rows=mysqli_num_rows($result);

        if($rows){//0 false 1 true
            setcookie('email',$email);
            $_SESSION['email']=$email;
            echo "登入成功";
            header('Location:http://localhost/test/Admin/Admin.php');
            exit;
        }

     else{
        echo"使用者名稱或密碼錯誤！";
     }
    }

    else{
        echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."請正確填寫信箱與密碼！"."\"".")".";"."</script>";
        echo "<script type='text/javascript'>";
        echo "window.location.href='http://localhost/test/Admin/login/login.php'";
        echo "</script>";
        exit;
    }
?>

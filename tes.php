<?php  
 //login.php  
 session_start();  
 if(isset($_POST["submit"]))  
 {  
      $_SESSION["nama"] = $_POST["nama"];  
      $_SESSION['last_login_timestamp'] = time();  
      header("location:index.php");       
 }  

 if(isset($_POST["remember"])){
    setcookie('nama',$_POST['nama'], time() + (86400 * 30));
    $nama = $_COOKIE['$nama'];
    header("location:index.php");
 }
 ?>  
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>Login Session & Cookies</title>
    <style>
        a{
            text-decoration: none;
            color: grey;
        }
    *{
        margin:0;
        padding: 0;
        box-sizing: border-box;
    }
    html{
        height: 100%;
    }
    body{
        background-image: url('cover.jpg');
        background-size: cover;
        font-family: 'Montserrat';
        font-size: 1rem;
        line-height: 1.6;
        height: 100%;
    }
    .wrap {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .login-form{
        border-radius: 2rem;
        box-shadow : 2px 2px 8px  #5786ad;
        width: 350px;
        margin: 0 auto;
        padding: 2rem;
        background: #ffffff;
    }
    .form-input{
        border-radius: 1rem;
        background: #fafafa;
        border: 1px solid #eeeeee;
        padding: 12px;
        width: 100%;
    }
    .form-group{
        margin-bottom: 1rem;
    }
    .form-button{background-image: linear-gradient(to right, #00d2ff 0%, #3a7bd5  51%, #00d2ff  100%)}
    .form-button{
        border-radius: 2rem;
        border: 1px solid #ddd;
        color: #ffffff;
        background-size: 200% auto;
        box-shadow: 0 0 20px #eee;
        padding: 10px;
        width: 100%;
        text-transform: uppercase;
        transition: 0.5s;
    }
    .form-button:hover{
        background-position: right center;
        border-radius: 1rem;
        color: #fff;
    }
    .form-header{
        text-align: center;
        margin-bottom : 2rem;
    }
    .form-footer{
        text-align: center;
    }
    </style>
</head>
<body background="cover.jpg">

    <div class="wrap">
        <form method="post">
            <div class="login-form"> 
            <div class="form-header">
                <h3>Login</h3>
            </div>
            
            <div class="form-group">
                <input type="text" name="nama" id="nama" class="form-input" placeholder="username">
            </div>
            
            <div class="form-group">
                <input type="password" name="password" id="password" class="form-input" placeholder="password">
                <div style="text-align: right;">
                <a href="#" style="font-size: 15px;text-align:right">Forgot your password?</a>
            </div>
               
            </div>
                
            <div class="form-group">
                <input type="submit" class="form-button" name="submit" id="submit" value="Log in" ></input>
            </div>
            <input type="checkbox" id="remember" name="remember" value="remember">
            <label for="remember"> Remember me</label><br>
        </form>
    </div>
    </div>
</body>
</html>
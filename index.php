<!DOCTYPE html>  
 <html>  
     <head>  
          <title>Login session & Cookies</title>  
          <style>
               body{
               font-family: 'Helvetica', sans-serif;;
               font-size: 1rem;
               line-height: 1.6;
               height: 100%;
               }  
          </style>  
     </head>  
     <body>  
     <?php

?>
     <?php  
     session_start();  
     if(isset($_SESSION["nama"]))  
     {  
           if((time() - $_SESSION['last_login_timestamp']) > 300) // 300 = 5 * 60  5 menit
          {  
               header("location:logout.php");  
          }  
          else  
          {  
               $_SESSION['last_login_timestamp'] = time();  
               echo "<h1 align='center'>You are logged in as  ".$_SESSION["nama"]."</h1>";    
               echo "<p align='center'><a href='logout.php'>Logout</a></p>";  
          }  
     }  
     else  
     {  
          header('location:login.php');  
     }  
     ?>  
     </body>  
</html>
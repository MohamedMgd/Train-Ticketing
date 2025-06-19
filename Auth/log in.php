<?php
    require_once '../../Models/user.php';
    require_once '../../Controllers/AuthController.php';
    $errMsg="";
    
    if(isset($_GET["logout"]))
    {
        session_start();
        session_destroy();
    }
    if(isset($_POST['email']) && isset($_POST['password']))
    {
        if(!empty($_POST['email']) && !empty($_POST['password']) )
       {   
           $user=new User;
           $auth=new AuthController;
           $user->email=$_POST['email'];
           $user->password=$_POST['password'];
           if(!$auth->login($user))
           {
               if(!isset($_SESSION["userId"]))
               {
                   session_start();
               }
               $errMsg=$_SESSION["errMsg"];
           }
           else
           {
               if(!isset($_SESSION["userId"]))
               {
                   session_start();
               }
               if($_SESSION["userRole"]=="Admin")
               {
                
                   header("location:../Admin/index.php");
                //  echo  "ok";
               }
               else
            {
                header("location:../Client/index.php");
                // echo  "no";
            }
   
           }
   
           
       }
       else
       {
           $errMsg="Please fill all fields";
       }
   }
?>

<?php
require_once '../../Models/user.php';
require_once '../../Controllers/AuthController.php';

if(!isset($_SESSION["userId"]))
{
  session_start();
}
$errMssg="";
if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['name'])) 
{
  if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['name'])) 
  {
    $user=new User;
    $auth=new AuthController;
    $user->name=$_POST['name'];
    $user->email=$_POST['email'];
    $user->password=$_POST['password'];
    if($auth->register($user))
    {
      header("location: ../Client/index.php");
    }
    else
    {
      $errMsg=$_SESSION["errMsg"];
    }

  }
  else
  {
    $errMssg="Please fill all fields";
  }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script type="text/javascript">
        window.onload = function () {
            window.setTimeout(
                function () { window.scrollTo(0, 0); },
                10
            );
        };
    </script>


    <title>Journey</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="../assets/css/log in.css" rel="stylesheet">

<body>


    <div class="container" id="container">
    
        <div class="form-container register-container">
           
            <form id="formAuthentication"  action="log in.php" method="POST">
                <h1>Register here.</h1>
                <?php
        if($errMssg!="")
        {
            ?>
                <div style="color:red ;"><?php echo $errMssg ?></div>
            <?php
        }
      
      ?>
                <input type="text" placeholder="Name" name="name">
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="password">
                <button type="submit">Register</button>

            </form>
           
        </div>

        <div class="form-container login-container">
       
            <form action="log in.php" method="POST" id="formAuthentication">
                <h1>Login here.</h1>
                <?php 
              
              if($errMsg!="")
              {
                  ?>
                      <div style="color:red;"><?php echo $errMsg ?></div>
                  <?php
              }
            
            ?>
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Password"name="password" >
                <div class="content">
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox" id="checkbox">
                        <label>Remember me</label>
                    </div>
                    <div class="pass-link">
                        <a href="#">Forgot password?</a>
                    </div>
                </div>
                <button type="submit">Login</button>

            </form>
           
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1 class="title">Passenger? <br> </h1>
                    <p>if You have an account, login here </p>
                    <button class="ghost" id="login">Login
                        <i class="lni lni-arrow-left login"></i>
                    </button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1 class="title">Hey <br> There!</h1>
                    <p>We're lucky to have you!</p>
                    <button class="ghost" id="register">Register
                        <i class="lni lni-arrow-right register"></i>
                    </button>
                </div>
            </div>
        </div>

    </div>

    <script src="script.js"></script>
    <script>const registerButton = document.getElementById("register");
        const loginButton = document.getElementById("login");
        const container = document.getElementById("container");

        registerButton.addEventListener("click", () => {
            container.classList.add("right-panel-active");
        });

        loginButton.addEventListener("click", () => {
            container.classList.remove("right-panel-active");
        });</script>

</body>
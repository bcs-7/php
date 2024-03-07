<?php
    session_start();
    if(isset($_SESSION) && $_SESSION['islogin'] == true){
        header("Location:abc.php");
        exit();  
    }
    $error="";
    if($_POST){
    // var_dump($_POST);
    $user=$_POST['usr'];
    $pd=$_POST['password'];
    
    if($user == "admin" && $pd == "admin"){
        $_SESSION['user'] = $user;
        $_SESSION['islogin'] = true;
        header("Location:abc.php");
    }
    else{
        $error="login unsuccessful";
    }
    }
 ?>
 <style>
    *{
        margin:0;
        padding:0;
    }
    body{
        width:100%;
        height:90vh;
        justify-content:center;
        align-items:center;
        display:flex;

    }
    form{
        text-align: center;
    }
 </style>
<html>
    <head><head>
        <body>
           <form method="post">
        <div style="color:red">
            <?php echo $error; ?>
        </div>
            USERNAME : <input type="text" id="usrtxt" name="usr"></br>
            Password : <input type="password" id="pwd" name="password"></br>
            <button>Login</button>
           </form>
</body>

</html>

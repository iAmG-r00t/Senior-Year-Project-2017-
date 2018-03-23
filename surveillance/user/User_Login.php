<?php
    if(isset($_GET['msg'])){
        $error_msg = $_GET['msg'];
    }else{
        $error_msg ="";
    }
?>
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="shortcut icon" href="http://www.iconexperience.com/_img/o_collection_png/green_dark_grey/512x512/plain/door_open.png" /> 
    <title>USER LOGIN</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
  
</style>  
  
<body>  
  
  
<div class="container">
<center><img class="w3-round w3-grayscale-min" src="http://www.daminion.net/assets/images/tours/tour-icon-multi-user.png"></center>  
    <div class="row">  
        <div class="col-md-4 col-md-offset-4">  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <center><h3 class="panel-title">USER LOGIN</h3></center>  
                </div>  
                <div class="panel-body">
                <div align="center"> 
                    <form action="User_Check_Login.php" method="post"> <!--calls the login.php script for log in-->

                        <div class="user_form">

                        <fieldset> 

                            <div class="form-group"  >  
                               <input class="form-control" placeholder="E-MAIL" name="user_email" type="email" autofocus>  
                            </div>

                            <div class="frorm-group">
                               <input class="form-control" placeholder="PASSWORD" name="user_pass" type="password" value="">
                            </div>  
  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="LOGIN" name="submit" >

                            <span style="color: #FF0000; font-weight: bold;"> <?php echo $error_msg; ?></span>
                        </fieldset>

                        </div>  
                    </form>  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
  
</body>  
  
</html>

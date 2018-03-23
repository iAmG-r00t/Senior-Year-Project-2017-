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
    <link rel="shortcut icon" href="http://www.grimetime.com/wp-content/uploads/2017/01/open-door-icon.png" />
    <title>Admin Login</title>  
</head>  
<style>
body, html
    .login-panel {  
        margin-top: 150px;
    }
</style>

<body>
<div class="container">
<center><img class="w3-round w3-grayscale-min" src="https://s17.postimg.org/50b81w3zz/sysadmin.png"></center> 
    <div class="row">  
        <div class="col-md-4 col-md-offset-4">  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <center><h3 class="panel-title">ADMIN LOGIN</h3></center>  
                </div>  
                <div class="panel-body">
                <div align="center"> 
                    <form action="Admin_Check_Login.php" method="post"> <!--calls the login.php script for log in-->

                        <fieldset> 

                            <div class="form-group">  
                        <input class="form-control" placeholder="USER NAME" name="admin_name" type="text" autofocus>  
                            </div>

                            <div class="frorm-group">
                        <input class="form-control" placeholder="PASSWORD" name="admin_pass" type="password" value="">
                            </div>  
  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="LOGIN" name="submit" >  

                            <span style="color: #FF0000; font-weight: bold;"> <?php echo $error_msg; ?></span>
                        </fieldset>  
                    </form>  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
  
  
</body>  
  
</html>
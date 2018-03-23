<?php   
    //Connecting to the database
    $connect = mysqli_connect("localhost", "root", "Cod3lamp", "surveillance") or die("Error connecting to the database");
    
    if(isset($_POST['delete'])){
        $id         = mysqli_real_escape_string($connect, $_POST['id']);
        $query = "DELETE FROM uploaded_files WHERE id='$id'";
        $result = mysqli_query($connect, $query) or die("Unable to get record");
    }
?>
<html>  
<head lang="en">
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <link rel="shortcut icon" href="http://xperiaminicyanogen.files.wordpress.com/2011/03/backup.jpg"/>
    <title>BACKUP</title>  
</head> 
<style>

body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}  

    .table {  
        margin-top: 50px;  
  
    }  
  
</style>  
  
  <!--Begin of Page-->
<body>

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
  <a href="Admin_Home.php" onclick="w3_close()" class="w3-bar-item w3-button">Back-Home</a>
  <a href="user_function/Users_Portal.php" onclick="w3_close()" class="w3-bar-item w3-button">Users Portal</a>
  <a href="#files" onclick="w3_close()" class="w3-bar-item w3-button">File Logs</a>
  <a href="#backup_file" onclick="w3_close()" class="w3-bar-item w3-button">Backup</a>
  <a href="Logout_Button.php" onclick="w3_close()" class="w3-bar-item w3-button">LogOut</a>
</nav>

<div class="w3-top">
  <!-- active users container -->
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class="w3-center w3-padding-64"><span class="w3-tag w3-wide">-BACKUP PORTAL-</span></div>
  </div>
</div>

<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
    <h1 id= "files" class="w3-center w3-padding-64" class="w3-tag w3-wide">-FILES-</h1>
    <center><img class="w3-round w3-grayscale-min" src="http://www.computerhowtoguide.com/wp-content/uploads/2016/08/dont-forget-to-backup.jpg"></center>
</div>
<div class="table-scrol">


<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  <center><table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
   
            <th> Name </th>
            <th> Image </th>
        </tr>  
        </thead>  
  
       <?php
                
                $query = "SELECT * FROM uploaded_files ORDER BY given_name ASC";
                $result = mysqli_query($connect, $query) or die("Unable to get record");
                //$num_rows = mysqli_num_rows($result);
                
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['id'];
                    $image = $row['given_name'];
                    echo"<tr>";
                    echo"<td>". $row['file_name']."</td>";
                    echo"<td> <img src = 'uploads/". $image."' style='width:40px;'/></td>";
                    
                    echo"<td> <a href='delete.php?id=".urlencode($id)."' class='btn red btn btn-danger btn-outline sbold uppercase' id='demo_3'> Delete </a> </td>";
                    echo"</tr>";
                }
            ?>

        </table></center>
    </div>
</div>

<div class="w3-content" style="max-width:700px">
  <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i>"Before you head on, to back up your active directory logs, have you retrieved them from your <strong>I.O.T BOX</strong> ?, I you have go on ahead to Backing up your files and enjoy if not dear ADMIN click <strong><a href="../config-files/LOG_FILES_BACKUP.pdf" target="open" class="w3-hover-text-green"">HERE</a></strong> and follow the steps enjoy!!"</i></p>
      <p>By: Backup-Buddy <strong>:)</strong></p>
  </div>
</div>



    <!--backup file container-->
    <div class="w3-container" id="backup_file">
            <h1 class="w3-center w3-padding-64" class="w3-tag w3-wide">-BACKUP FILE-</h1>
          
            <center><img class="w3-round w3-grayscale-min" src="http://icons.iconarchive.com/icons/creative-freedom/shimmer/256/Document-Add-icon.png"></center>

    <!--<div class="row">-->  
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">

            <div class="panel-heading">  
                    <center><h2 class="panel-title">BACKUP DETAILS</h2></center>  
                </div>

                <div class="panel-body">
                <div align="center"> 

            <form method="POST" action="upload.php" enctype="multipart/form-data">
            <table>
                <tr>
                    <td> FILE NAME: </td>
                    <td> <input type="text" name="new_file_name" placeholder"File name"> </td>
                </tr>
                <tr>
                    <td> FILE: </td>
                    <td> <input type="file" name="upload"> </td>
                </tr>
                <tr>
                    <td> <input class="btn btn-lg btn-success btn-block w3-center" type = "submit" name = "submit" value = "Upload" > </td>
                </tr>
            </table>            
        </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

<script>

// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>    
  
</body> 
</html>
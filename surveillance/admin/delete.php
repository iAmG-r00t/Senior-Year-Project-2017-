<?php
	if(isset($_GET['id'])){
        $id = $_GET['id'];                
    }
	?>
<html>
<head lang="en">
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <link rel="shortcut icon" href="http://2.bp.blogspot.com/-vtOexMs_ITA/VD1B05FwIZI/AAAAAAAABV4/G0jIniqtBWE/s1600/Man_Pressing_Delete_Question.jpg"/>
    <title>DELETE-FILE</title>  
</head> 
<style>

body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}  

    .table {  
        margin-top: 50px;  
  
    }  
  
</style>  
	<body>

		<table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
			<thead>
				<tr>
					<th> Name </th>
					<th> Image </th>
				</tr>
			</thead>
			<tbody>
				<?php				
	
					//Connecting to the database
					$connect = mysqli_connect("localhost", "root", "Cod3lamp", "surveillance") or die("Error connecting to the database");

					//getting  id        
					$query  = "SELECT * FROM uploaded_files WHERE id = '$id'";
					$result = mysqli_query($connect, $query) or die("Unable to get record");
					//$num_rows = mysqli_num_rows($result);
					
					while($row = mysqli_fetch_assoc($result)){ 

					  echo"<tr>";

						echo"<td style='text-align: center; color:#000000;'>". $row['file_name']."</td>";

						echo"<td> <img src = 'uploads/". $row['given_name']."' style='width:40px;'/></td>";						
					  echo"</tr>";

					  echo"<tr>";

						echo "<td colspan='2' style='text-align: center; color:#e7505a;' > Are you sure you want to delete this record?</td>";

					  echo"</tr>";

					  echo"<tr>";
				
						echo"<td style='text-align: center;'> <form action='Backup.php' method='POST'> <input type='text' value='$id' hidden='true' name='id'> <input type='submit' name='delete' value='Delete' class='btn uppercase btn-danger' /> </form> </td>";

						echo"<td style='text-align: center;'> <a href='Backup.php' class='btn btn-warning uppercase'> Cancel </a> </td>";

					  echo"</tr>";                                                                                     
					}                                                                                
				?>                                                                                                                
			</tbody>
                            </table> 
	</body>
</html>
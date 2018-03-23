<html>  
<head lang="en">
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <link rel="shortcut icon" href="http://xperiaminicyanogen.files.wordpress.com/2011/03/backup.jpg"/>
    <title>UPLOADED</title>
</head>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}

</style>
<body>
	<div class= "w3-center">

<?php
	
	//Connecting to the database
	$connect = mysqli_connect("localhost", "root", "Cod3lamp", "surveillance") or die("Error connecting to the database");
	
	if(isset($_POST['submit'])){
		$file			= $_FILES['upload'];
		$file_name		= $file['name'];
		$file_temp 		= $file['tmp_name'];
		$file_size 		= $file['size'];
		$file_error 	= $file['error'];
		
		//Get file extension
		$file_ext = explode('.', $file_name);
		$file_ext = strtolower(end($file_ext));
		
		$file_name_new 		= time().".".$file_ext;
		$file_destination 	= "uploads/".$file_name_new;
		
		if(move_uploaded_file($file_temp, $file_destination)){
			$given_name = $file_name_new;
			
			//getting the file name you input
			$file = mysqli_real_escape_string($connect, $_POST["new_file_name"]);
			
			//GENERATING NEW ID NUMBER
			$query = "SELECT * FROM uploaded_files ORDER BY id DESC LIMIT 1";
			$result = mysqli_query($connect, $query) or die("Unable to get record");
			$num_rows = mysqli_num_rows($result);
			if($num_rows==0){
				$id = 1;
				$insert_query = "INSERT INTO uploaded_files (id, given_name, file_name) VALUES ('$id', '$given_name', '$file')";
				$insert_results = mysqli_query($connect, $insert_query) or die("Not to save record in first instance");
				//$incoming_error_message = "Record successfully saved!";
			}
			else
			{
				while($row = mysqli_fetch_assoc($result))
				{
					$num_id = $row['id'];
					$new_id = $num_id + 1;
					$insert_query = "INSERT INTO uploaded_files (id, given_name, file_name) VALUES ('$new_id', '$given_name', '$file')";
					$insert_results = mysqli_query($connect, $insert_query) or die("Unable to save record in second instance");
					echo "!!File Successfully Uploaded!! ";
					echo "<a href='Backup.php' class='btn btn-info active uppercase'> Backup-Page </a>";  
				}

			}
		}
	}
		else
		{
			echo"Error uploading file to server";
		}
?>

</div>
</body>
</html>

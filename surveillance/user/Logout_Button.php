<?php  

	session_start();//session is a way to store information (in variables) to be used across multiple pages.  

	session_destroy();

?>

<!--refresh page after loging out-->
<html>

<head>
	<title> </title>
</head>

<body>
<meta http-equiv="refresh" content="1;url=../Welcome_Page.php"/>
</body>

</html>
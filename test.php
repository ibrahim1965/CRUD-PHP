<?php
	
	// if($_POST){
	// 	var_dump("post");die();
	// }else{
	// 	var_dump($_GET);die();
	// }
	if($_GET){
		var_dump("get");
	}else{
		
		var_dump("not get");
	}


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
	<input type="text" name="name">
	<input type="text" name="email">

	<input type="submit" value="send">
</form>
</body>
</html>
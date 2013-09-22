<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Welcome</title>
</head>
<body>
	<h1>User Page</h1>
<?php
if(file_exists('users/' . $_SESSION['username'] . '.xml')){
	echo "Welcome <a href=\"admin.php\">" . $_SESSION['username'] . "</a>";
	echo "<a href=\"logout.php\">Logout</a>";
	echo dirname($_SERVER['SCRIPT_NAME']);	
}
	else{
		echo "<a href=\"login.php\">Login</a>";
		echo "<a href=\"register.php\">Register</a>";
	}
?>

	<h2>Welcome, <?php echo $_SESSION['username']; ?></h2>
	<p>
		Example Page. Woo, content.


	</p>
	<hr />
</body>
</html>
<?php 
/*
echo $_SESSION['username'] ? $_SESSION['username'] : 'Guest';
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="jquery.js"></script>
<title>Login Form</title>
<link rel="stylesheet" href="login.css" type="text/css" />
<script type="text/javascript">
$(document).ready(function(){
	$("#login_a").click(function(){
        $(".login_placeholder").load("login_wrapper.php", function(){
        $("#shadow").fadeIn("normal");
         $(".login_form").fadeIn("normal");
         $("#user_name").focus();
	 });
    });
});

</script>
</head>
<body>

<?php session_start(); ?>
	<div id="profile">
		<?php
		if(file_exists('users/' . $_SESSION['username'] . '.xml')){
			echo "Welcome " . $_SESSION['username'] . "<br/>";
			echo "<a href='logout.php' id='logout' class=\"red\" >Logout</a>";
		}
			else{
				echo "<a id=\"login_a\" href=\"javascript:void(0);\" class=\"green\">Login/Register</a>";
			}
		?>
	</div> 
	
  <div class="login_placeholder"></div>
	
</body>
</html>
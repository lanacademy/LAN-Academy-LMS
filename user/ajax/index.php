<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="jquery.js"></script>
<link rel="stylesheet" href="styles.css" type="text/css" />
<title>Login Form</title>
<script type="text/javascript">
$(document).ready(function(){
	$("#login_a").click(function(){
        $("#shadow").fadeIn("normal");
         $(".login_form").fadeIn("normal");
         $("#user_name").focus();
    });
	$("#cancel_hide").click(function(){
        $(".login_form").fadeOut("normal");
        $("#shadow").fadeOut();
   });
	$("#reg_switch").click(function(){
    	$(".login_form").fadeOut("normal");
		$(".register_form").fadeIn("normal");
        $("#user_name").focus();
   });
	$("#log_switch").click(function(){
   	$(".register_form").fadeOut("normal");
	$(".login_form").fadeIn("normal");
       $("#user_name").focus();
  });
   $("#login").click(function(){
    
        username=$("#user_name").val();
        password=$("#password").val();
         $.ajax({
            type: "POST",
            url: "login.php",
            data: "username="+username+"&password="+password,
            success: function(html){
			
			  if(html=='true')
              {
                $(".login_form").fadeOut("normal");
				$("#shadow").fadeOut();
				$("#profile").html("Welcome "+username+"<br/><a href='logout.php' class='red' id='logout'>Logout</a>");
				
              }
              else
              {
                    $("#add_err").html("Wrong username or password");
              }
            },
            beforeSend:function()
			{
                 $("#add_err").html("Loading...")
            }
        });
         return false;
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
	<div id="wrapper" class="login_form">
		<form name="login-form" class="login-form" action="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>/login.php" method="post">
			<div class="header">
	        <div class="cancel" id="cancel_hide"><a href="#"> X</a></div>
			<h1>Login</h1>
			<span>Track your progress and save your quiz results by logging in.</span>
			</div>
	
			<div class="content">
			<input id="user_name" type="text" class="input username" placeholder="Username" />
			<div class="user-icon"></div>
			<input id="password" type="password" class="input password" placeholder="Password" />
			<div class="pass-icon"></div>		
			</div>
			<?php
			if($error){
				echo '<span>Invalid username and/or password</span>';
			}
			?>
			<div class="footer">
			<input type="submit" id="login" value="Login" class="button" />
			<input type="button" id="reg_switch" value="Register" class="register" />
			</div>
			</form>
	</div>


		<div id="wrapper" class="register_form">
			<form name="login-form" class="login-form" action="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>/register.php" method="post">
				<div class="header">
		        <div class="cancel" id="cancel_hide"><a href="#"> X</a></div>
				<h1>Register</h1>
				<span>Sign up to track your progress and save your quiz results by logging in.</span>
				</div>
				<?php
				if(count($errors) > 0){
					echo '<ul>';
					foreach($errors as $e){
						echo '<li>' . $e . '</li>';
					}
					echo '</ul>';
				}
				?>
				<div class="content">
				<input id="user_name" type="text" name="username"  class="input username" placeholder="Username" size="20" />
								<input id="user_name" type="text" name="email"  class="input password" placeholder="Email" size="20" />
				<input id="user_name" type="password" name="password" class="input password" placeholder="Password" size="20" />

				<input id="password" type="password"  name="c_password" class="input password" placeholder="Password" size="20" />	
				</div>
				<?php
				if($error){
					echo '<span>Invalid username and/or password</span>';
				}
				?>
				<div class="footer">
				<input type="submit" id="register" value="Register" class="button" />
				<input type="button" id="log_switch" value="Login" class="register" />
				</div>
				</form>

   	 	</div>

	
	
	
	<div id="shadow" class="popup"></div>
</body>
</html>
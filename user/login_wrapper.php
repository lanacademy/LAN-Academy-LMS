<script type="text/javascript" src="user/login.js"></script>
	
	<div id="wrapper" class="login_form">
		<form name="login-form" class="login-form" action="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>/login.php" method="post">
			<div class="header">
	        <div class="cancel" id="cancel_hide"><a href=""> X</a></div>
			<h1>Login</h1>
			<span>Track your progress and save your quiz results by logging in. Meanwhile, we'll track you with http://discolytics.com/</span>
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
			<form name="register-form" class="login-form" action="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>/register.php" method="post">
				<div class="header">
		        <div class="cancel" id="cancel_hide"><a href=""> X</a></div>
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
								<input id="email" type="text" name="email"  class="input password" placeholder="Email" size="20" />
				<input id="password" type="password" name="password" class="input password" placeholder="Password" size="20" />

				<input id="c_password" type="password"  name="c_password" class="input password" placeholder="Password" size="20" />	
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
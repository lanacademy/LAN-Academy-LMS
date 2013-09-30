$(document).ready(function(){

	$("#cancel_hide").click(function(){
        $(".login_form").fadeOut("normal");
        $(".register_form").fadeOut("normal");
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
    $("#register").click(function(){
    
         username=$("#user_name").val();
		 email=$("#email").val();
         password=$("#password").val();
         c_password=$("#c_password").val();
          $.ajax({
             type: "POST",
             url: "register.php",
             data: "username="+username+"&email="+email+"&password="+password+"&c_password="+c_password,
             success: function(html){
			
 			  if(html=='true')
               {
                 $(".register_form").fadeOut("normal");
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
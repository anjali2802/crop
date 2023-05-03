$(document).ready(function(){
/*
		Here #login is login form id and this form is available in index.php page
		from here input data is sent to login.php page
		if you get login_success string from login.php page means user is logged in successfully and window.location is 
		used to redirect user from home page to profile.php page
	*/
	$("#login").on("submit",function(event){
		event.preventDefault();
		$(".overlay").show();
		$.ajax({
			url	:	"login.php",
			method:	"POST",
			data	:$("#login").serialize(),
			success	:function(data){
				console.log(data, "hjghsjdgfhfg")
				if(data == "login_success"){
					$("#desc").html("Logged in successfully");
					window.location.href = "index.php";
					// launch_toast();
				}else if(data == "login_error"){
					$("#desc").html(data);
					// launch_toast();
					$("#e_msg").html('Please register first!!');
					$(".overlay").hide();
				}
			}
		})
	})
	//end
	
	//Get User Information before checkout
	$("#signup_form").on("submit",function(event){
		event.preventDefault();
		$(".overlay").show();
		$.ajax({
			url : "register.php",
			method : "POST",
			data : $("#signup_form").serialize(),
			success : function(data){
				$(".overlay").hide();
				if (data == "register_success") {
					$("#desc").html("Registered successfully");
					window.location.href = "index.php";
					// launch_toast();
				}else{
					$("#signup_msg").html(data);
				}
				
			}
		})
	})
	//end

	$("#contact").on("submit",function(event){
		event.preventDefault();
		$.ajax({
			url	:	"contact.php",
			method:	"POST",
			data	:$("#contact").serialize(),
			success	:function(data){
				if(data == "contact_success"){
					$("#desc").html("Contact details send successfully");
					window.location.href = "contact_form.php";
				}else{
					$("#contact_error_msg").html('Something went wrong!!');
				}
			}
		})
	})

})
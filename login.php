<?php
include "db.php";

session_start();

#Login script is begin here
#If user given credential matches successfully with the data available in database then we will echo string login_success
#login_success string will go back to called Anonymous funtion $("#login").click() 

if(isset($_POST["email"]) && isset($_POST["password"])){
	$email = mysqli_real_escape_string($con,$_POST["email"]);
	$password = $_POST["password"];
	$sql = "SELECT * FROM user_info WHERE email = '$email' AND password = '$password'";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);
    $row = mysqli_fetch_array($run_query);
		
		//we have created a cookie in login_form.php page so if that cookie is available means user is not login
        
	//if user record is available in database then $count will be equal to 1
	if($count == 1){
			//if user is login from page we will send login_success
		$_SESSION["uid"] = $row["user_id"];
		$_SESSION["name"] = $row["first_name"];
		// $ip_add = getenv("REMOTE_ADDR");
		if(mysqli_query($con,$sql)){
				
			echo "login_success";
			// $BackToMyPage = $_SERVER['HTTP_REFERER'];
			// if(mysqli_query($con,$wishlist_sql)){
			// 	if(!isset($BackToMyPage)) {
			// 		header('Location: '.$BackToMyPage);
			// 		echo"<script type='text/javascript'>
					
			// 		</script>";
			// 	} else {
			// 		echo "<script> location.href='index.php'; </script>" ;// default page
			// 	} 
			// }
		}
		// $sql = "UPDATE cart SET user_id = '$_SESSION[uid]' WHERE ip_add='$ip_add' AND user_id = -1";
		// $wishlist_sql = "UPDATE wishlist SET user_id = '$_SESSION[uid]' WHERE ip_add='$ip_add' AND user_id = -1";
		// if(mysqli_query($con,$sql)){
		// 	echo "login_success";
		// 	$BackToMyPage = $_SERVER['HTTP_REFERER'];
		// 	if(mysqli_query($con,$wishlist_sql)){
		// 		if(!isset($BackToMyPage)) {
		// 			header('Location: '.$BackToMyPage);
		// 			echo"<script type='text/javascript'>
					
		// 			</script>";
		// 		} else {
		// 			echo "<script> location.href='index.php'; </script>" ;// default page
		// 		} 
		// 	}
		// }
		exit;
		} else {    
			echo "login_error";  
		    // echo "<span style='color:red;'>Please register before login..!</span>";
		    exit();
        }
}

?>
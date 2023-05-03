<?php
session_start();
include "db.php";

if (isset($_POST["first_name"])) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $phone_no = $_POST["phone_no"];
    $message = $_POST["message"];

    $sql = "INSERT INTO `contact_details` 
		(`first_name`, `last_name`, `email`, 
		`phone_no`, `message`) 
		VALUES ('$first_name', '$last_name', '$email', 
		'$phone_no', '$message')";
		$run_query = mysqli_query($con,$sql);
		$_SESSION["uid"] = mysqli_insert_id($con);
		$_SESSION["name"] = $first_name;
		$ip_add = getenv("REMOTE_ADDR");
        $BackToMyPage = $_SERVER['HTTP_REFERER'];
        if(mysqli_query($con,$sql)){
			echo "contact_success";
            header('Location: '.$BackToMyPage);
			// echo "<script> location.href='index.php'; </script>";
            exit;
		}

    // $stmt = $conn->prepare("INSERT INTO contact_details (first_name, last_name, email, 
	// // 	phone_no, message) VALUES ('$first_name', '$last_name', '$email', 
	// // 	'$phone_no', '$message')");
    // $stmt->bind_param("ssss", $first_name, $last_name, $email, 
	// 	$phone_no, $message);
    // $stmt->execute();
    // $message = "Your contact information is saved successfully.";
    // $type = "success";
    // $stmt->close();
    // $conn->close();
}
// require_once "contact_form.php";
?>
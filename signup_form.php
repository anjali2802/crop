<?php
if(isset($_SESSION["uid"])){
	header('Location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/login_reg.css">
    <link rel="stylesheet" type="text/css" href="css/utils.css">
    

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script src="https://kit.fontawesome.com/728d1d3dec.js" crossorigin="anonymous"></script>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">


    <link rel="stylesheet" type="text/css" href="css/login_reg.css">
    <link rel="stylesheet" type="text/css" href="css/utils.css">

</head>

<body style="background-color: #999999;">
    <div class="limiter">
        <div class="container-login100">

        <div class="container">
           <!-- <div class="login100-more" style="background-image: url('assets/imgs/signin-bg.jpg');"></div> -->

            <div class="row align-items-center">

            <div class="m-auto">

                <div class="main-heading position-relative">
                    <h2 class="mb-3">Welcome to <br> Sign Up</h2>
                    <p>A whole find predection<br> starts here!</p>
                    <img class="w-100" src="assets/imgs/register-bg-img.png" />
                </div>
               
            </div>

             <div class="wrap-login100 wrap-signup100 p-l-50 p-r-50 p-t-30 p-b-20">
                <form id="signup_form" onsubmit="return false" class="login100-form validate-form">
                    <!-- <span class="login100-form-title p-b-25">
                        Please enter details for register
                    </span> -->
                    <div class="wrap-input100 validate-input" data-validate="Name is required">
                        <input class="input100" type="text" name="f_name" id="f_name" placeholder="Enter your first name">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Name is required">
                        <input class="input100" type="text" name="l_name" id="l_name" placeholder="Enter your last name">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="email" name="email" placeholder="Enter your email address...">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Mobile no is required">
                        <input class="input100" type="text" name="mobile" id="mobile" placeholder="Enter your mobile no.">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input id="password-field"  class="input100" type="password" name="password" id="password"
                            placeholder="Password">
                            <span style="padding-right: 28px; bottom: 9px;" toggle="#password-field" class="fa fa-fw fa-eye field-icon1 toggle-password"></span>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Repeat Password is required">
                        <input id="password-field"  class="input100" type="password" name="repassword" id="repassword"
                            placeholder="Confirm Password">
                            <span style="padding-right: 28px; bottom: 9px;" toggle="#password-field" class="fa fa-fw fa-eye field-icon1 toggle-password"></span>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Address is required">
                        <input class="input100" type="text" name="address1" id="address1" placeholder="Enter your full address">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="City is required">
                        <input class="input100" type="text" name="address2" id="address2" placeholder="Enter your city or town">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="flex-m w-full p-b-33">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100 signup-label-box text-white" for="ckb1">
                                <span class="txt1 text-white">
                                  Remember Me
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn w-100">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn w-100" type="submit">
                                Sign Up
                            </button>

                        </div>

                        <div class="d-flex or-section w-100 mt-3 mb-2 align-items-center">
                            <span class="horizontal-line"></span>
                            <span class="or-txt">OR</span>
                            <span class="horizontal-line"></span>
                            </div>

                        <a href="signin_form.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30 w-100 text-center text-white">
                            Sign in
                            <i class="fa fa-long-arrow-right m-l-5"></i>
                        </a>

                        <!-- <a href="index.php" class="dis-block txt3 hov1 p-r-30 p-t-40 p-b-10 p-l-180">
                            Skip SignUp
                            <i class="fa fa-long-arrow-right m-l-5"></i>
                        </a> -->
                        <div class="col-md-8" id="signup_msg"></div>
                    </div>
                </form>
            </div>
        

            <!-- <div class="login100-more signup-page-bg"></div> -->
        
        </div>

        </div>
        </div>

    </div>
    <!-- <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script> -->

    <script src="js/login_reg.js"></script>
    <script src="js/actions.js"></script>


</body>

</html>


    <!-- <div class="limiter">
        <div class="container-login100">
            <div class="login100-more" style="background-image: url('img/erik-mclean-nfoRa6NHTbU-unsplash.jpg');-webkit-transform: scaleX(-1);
  transform: scaleX(-1);"></div>
            <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
                <form id="signup_form" onsubmit="return false" class="login100-form validate-form">
                    <span class="login100-form-title p-b-59">
                        Sign Up
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Name is required">
                        <span class="label-input100">Full Name</span>
                        <input class="input100" type="text" name="f_name" id="f_name" placeholder="First Name">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Name is required">
                        <span class="label-input100">Last Name</span>
                        <input class="input100" type="text" name="l_name" id="l_name" placeholder="Last Name">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="email" name="email" placeholder="Email addess...">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Mobile no is required">
                        <span class="label-input100">Mobile</span>
                        <input class="input100" type="text" name="mobile" id="mobile" placeholder="mobile....">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" id="password"
                            placeholder="*************">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Repeat Password is required">
                        <span class="label-input100">Repeat Password</span>
                        <input class="input100" type="password" name="repassword" id="repassword"
                            placeholder="*************">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Address is required">
                        <span class="label-input100">Address</span>
                        <input class="input100" type="text" name="address1" id="address1" placeholder="Address">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="City is required">
                        <span class="label-input100">City</span>
                        <input class="input100" type="text" name="address2" id="address2" placeholder="City">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="flex-m w-full p-b-33">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                <span class="txt1">
                                    I agree to the
                                    <a href="#" class="txt2 hov1">
                                        Terms of User
                                    </a>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" type="submit">
                                Sign Up
                            </button>

                        </div>

                        <a href="signin_form.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                            Sign in
                            <i class="fa fa-long-arrow-right m-l-5"></i>
                        </a>

                        <a href="index.php" class="dis-block txt3 hov1 p-r-30 p-t-40 p-b-10 p-l-180">
                            Skip SignUp
                            <i class="fa fa-long-arrow-right m-l-5"></i>
                        </a>
                        <div class="col-md-8" id="signup_msg"></div>
                    </div>
                </form>
            </div>
        </div>
    </div> -->
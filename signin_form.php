<?php
#this is Login form page , if user is already logged in then we will not allow user to access this page by executing isset($_SESSION["uid"])
#if below statment return true then we will send user to their profile.php page
//in action.php page if user click on "ready to checkout" button that time we will pass data in a form from action.php page
if(isset($_SESSION["uid"])){
	header('Location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Page</title>
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
    <style>
    #toast {
        visibility: hidden;
        max-width: 50px;
        height: 50px;
        /*margin-left: -125px;*/
        margin: auto;
        background-color: #333;
        color: #fff;
        text-align: center;
        border-radius: 2px;

        position: fixed;
        z-index: 10;
        left: 0;
        right: 0;
        bottom: 30px;
        font-size: 17px;
        white-space: nowrap;
    }

    #toast #img {
        width: 50px;
        height: 50px;

        float: left;

        padding-top: 16px;
        padding-bottom: 16px;

        box-sizing: border-box;


        background-color: #111;
        color: #fff;
    }

    #toast #desc {


        color: #fff;

        padding: 16px;

        overflow: hidden;
        white-space: nowrap;
    }

    #toast.show {
        visibility: visible;
        -webkit-animation: fadein 0.5s, expand 0.5s 0.5s, stay 3s 1s, shrink 0.5s 2s, fadeout 0.5s 2.5s;
        animation: fadein 0.5s, expand 0.5s 0.5s, stay 3s 1s, shrink 0.5s 4s, fadeout 0.5s 4.5s;
    }

    @-webkit-keyframes fadein {
        from {
            bottom: 0;
            opacity: 0;
        }

        to {
            bottom: 30px;
            opacity: 1;
        }
    }

    @keyframes fadein {
        from {
            bottom: 0;
            opacity: 0;
        }

        to {
            bottom: 30px;
            opacity: 1;
        }
    }

    @-webkit-keyframes expand {
        from {
            min-width: 50px
        }

        to {
            min-width: 350px
        }
    }

    @keyframes expand {
        from {
            min-width: 50px
        }

        to {
            min-width: 350px
        }
    }

    @-webkit-keyframes stay {
        from {
            min-width: 350px
        }

        to {
            min-width: 350px
        }
    }

    @keyframes stay {
        from {
            min-width: 350px
        }

        to {
            min-width: 350px
        }
    }

    @-webkit-keyframes shrink {
        from {
            min-width: 350px;
        }

        to {
            min-width: 50px;
        }
    }

    @keyframes shrink {
        from {
            min-width: 350px;
        }

        to {
            min-width: 50px;
        }
    }

    @-webkit-keyframes fadeout {
        from {
            bottom: 30px;
            opacity: 1;
        }

        to {
            bottom: 60px;
            opacity: 0;
        }
    }

    @keyframes fadeout {
        from {
            bottom: 30px;
            opacity: 1;
        }

        to {
            bottom: 60px;
            opacity: 0;
        }
    }
    </style>
</head>

<body style="background-color: #999999;">
    <div id="toast">
        <div id="desc"> login desc</div>
    </div>
    <div class="limiter">
        <div class="container-login100 login-screen-area">

        <div class="container">
           <!-- <div class="login100-more" style="background-image: url('assets/imgs/signin-bg.jpg');"></div> -->

            <div class="row align-items-center">
            <div class="main-heading position-relative">
                <h2 class="mb-3">Welcome to our <br> Community</h2>
                <p>A whole new prodective journey <br> starts right here</p>
                <img class="position-absolute login-bg-img" src="assets/imgs/crop-predection-login.png" />
            </div>

                <div class="wrap-login100 p-l-50 p-r-50 p-t-72 ml-auto">
                    <form onsubmit="return false" id="login" class="login100-form validate-form">
                        <!-- <span class="login100-form-title p-b-59">
                            Please enter the details for login
                        </span> -->
                        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                            <input class="input100" type="email" name="email" placeholder="Enter your email address">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <input id="password-field"  class="input100" type="password" name="password" placeholder="Password">
                            <span style="padding-right: 28px; bottom: 9px;" toggle="#password-field" class="fa fa-fw fa-eye field-icon1 toggle-password"></span>
                            <span class="focus-input100"></span>
                        </div>
                        <div class="flex-m w-full p-b-33">
                            <div class="contact100-form-checkbox">
                                <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                                <label class="label-checkbox100 mt-1" for="ckb1">
                                    <span class="txt1">
                                    Keep me login
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn w-100">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn" type="submit">
                                    Sign in
                                </button>
                            </div>

                            <div class="d-flex or-section w-100 mt-5 mb-4 align-items-center">
                            <span class="horizontal-line"></span>
                            <span class="or-txt">OR</span>
                            <span class="horizontal-line"></span>
                            </div>

                            <a href="signup_form.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30 m-auto signup-txt">
                                Sign up
                                <i class="fa fa-long-arrow-right m-l-5"></i>
                            </a>
                            <!-- <a href="index.php" class="dis-block txt3 hov1 p-r-30 p-t-40 p-b-10 p-l-150">
                                Skip SignIn
                                <i class="fa fa-long-arrow-right m-l-5"></i>
                            </a> -->
                        </div>
                        <!-- <div class="alert alert-danger">
                            <h4 id="e_msg"></h4>
                        </div> -->
                    </form>
                </div>
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
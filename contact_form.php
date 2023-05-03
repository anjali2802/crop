<?php include "includes/header.php"; ?>

        <section class="position-relative">
            <div class="home-banner-area contact-banner">
                <div class="custom-container home-banner-container">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <h1 class="text-center">Contact Us</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="m-5">
             <div class="contact__wrapper shadow-lg mt-n9">
                <div class="row no-gutters">
                    <div class="col-lg-5 contact-info__wrapper gradient-brand-color p-5 order-lg-2">
                        <h3 class="color--white mb-5">Contact</h3>
            
                        <ul class="contact-info__list list-style--none position-relative z-index-101">
                            <li class="mb-4 pl-4">
                                <span class="position-absolute"><i class="fas fa-envelope"></i></span> info@khetibadi.com
                            </li>
                            <li class="mb-4 pl-4">
                                <span class="position-absolute"><i class="fas fa-phone"></i></span> +91-9876543210
                            </li>
                            
                        </ul>
            
                        <figure class="figure position-absolute m-0 opacity-06 z-index-100" style="bottom:0; right: 10px">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="444px" height="626px">
                                <defs>
                                    <linearGradient id="PSgrad_1" x1="0%" x2="81.915%" y1="57.358%" y2="0%">
                                        <stop offset="0%" stop-color="rgb(255,255,255)" stop-opacity="1"></stop>
                                        <stop offset="100%" stop-color="rgb(0,54,207)" stop-opacity="0"></stop>
                                    </linearGradient>
            
                                </defs>
                                <path fill-rule="evenodd" opacity="0.302" fill="rgb(72, 155, 248)" d="M816.210,-41.714 L968.999,111.158 L-197.210,1277.998 L-349.998,1125.127 L816.210,-41.714 Z"></path>
                                <path fill="url(#PSgrad_1)" d="M816.210,-41.714 L968.999,111.158 L-197.210,1277.998 L-349.998,1125.127 L816.210,-41.714 Z"></path>
                            </svg>
                        </figure>
                    </div>
            
                    <div class="col-lg-7 contact-form__wrapper p-5 order-lg-1">
                        <form method="post" action="contact.php">
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label class="required-field" for="firstName">First name</label>
                                        <!-- <span id="firstname-info" class="info"></span><br /> -->
                                        <input required type="text" class="form-control" id="firstName" name="first_name" placeholder="Enter your first name">
                                    </div>
                                </div>
            
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="lastName">Last Name</label>
                                        <!-- <span id="lastname-info" class="info"></span><br /> -->
                                        <input required type="text" class="form-control" id="lastName" name="last_name" placeholder="Enter your last name">
                                    </div>
                                </div>
            
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label class="required-field" for="email">Email</label>
                                        <!-- <span id="email-info" class="info"></span><br /> -->
                                        <input  required type="text" class="form-control" id="email" name="email" placeholder="Enter email address">
                                    </div>
                                </div>
            
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <!-- <span id="phone-info" class="info"></span><br /> -->
                                        <input required type="number" class="form-control" id="phone" name="phone_no" placeholder="Enter mobile number">
                                    </div>
                                </div>
            
                                <div class="col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label class="required-field" for="message">How can we help you?</label>
                                        <!-- <span id="message-info" class="info"></span><br /> -->
                                        <textarea required class="form-control" id="message" name="message" rows="4" placeholder="How can we help you?..."></textarea>
                                    </div>
                                </div>
            
                                <div class="col-sm-12 mb-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>

                                <!-- <div class="alert alert-danger">
                                    <h4 id="contact_error_msg"></h4>
                                </div> -->
                            </div>
                        </form>
                    </div>
                    <!-- End Contact Form Wrapper -->
                </div>
            </div> 
            </div>

        </section>
       
<?php include "includes/footer.php"; ?>
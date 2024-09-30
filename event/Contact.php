<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>SK Events</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        
        <!-- Navbar start -->
        <div class="container-fluid nav-bar">
            <div class="container">
                <nav class="navbar navbar-light navbar-expand-lg py-4">
                    <a href="index.html" class="navbar-brand">
                        <img src="img/_20201112_091931.jpg"  alt="HTML tutorial" style="width:205px;height:99px;float:right;">
                    </a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                            <a href="index.html" class="nav-item nav-link active">Home</a>
                            <a href="service.html" class="nav-item nav-link">Services</a>
                            <a href="about.html" class="nav-item nav-link">About us</a>
                            <a href="gallery.html" class="nav-item nav-link">Gallery</a>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                        </div>
                        <a href="" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block rounded-pill">Book Now</a>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->


        <!-- Hero Start -->
        <div class="container-fluid bg-light py-6 my-6 mt-0">
            <div class="container text-center animated bounceInDown">
                <h1 class="display-1 mb-4">Contact</h1>
                <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item text-dark" aria-current="page">Contact</li>
                </ol>
            </div>
        </div>
        <!-- Hero End -->


        <div class="container-fluid contact py-2 wow bounceInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="p-5 bg-light rounded contact-form">
                    <div class="row g-4">
                        <div class="col-12">
                            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Get in touch</small>
                            <h1 class="display-5 mb-0">Contact Us For Any Queries!</h1>
                        </div>
                        <div class="col-md-6 col-lg-7">
                            <form action="contact.php" method="POST">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" maxlength="32" class="w-100 form-control p-3 mb-4 border-primary bg-light" name="name" title = "enter valid name" required>
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="w-100 form-control p-3 mb-4 border-primary bg-light" name="email"  title = "Enter valid email-id"  required>
                                </div>

                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" class="w-100 form-control p-3 mb-4 border-primary bg-light" name="subject" required>
                                </div>

                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea name="message" id="" class="w-100 form-control p-3 mb-4 border-primary bg-light"></textarea>
                                </div>
                                
</br></br>
                                <div class="text-center">
                                    <button class="w-100 btn btn-primary form-control p-3 border-primary bg-primary rounded-pill"  type="submit" name="submit">
                                    <i class="fa fa-user-md"></i> Send Message
                                    </button>
                                    
                                </div>
                            </form>


                            <?php
                                  if(isset($_POST['submit'])){
                                    /// Admin receives message with this ///

                                    $sender_name= $_POST['name'];
                                    $sender_email= $_POST['email'];
                                    $sender_subject= $_POST['subject'];
                                    $sender_message= $_POST['message'];

                                    $receiver_email= "sbhaskar0819@gmail.com";

                                    mail($receiver_email, $sender_name, $sender_subject, $sender_message);
                                    
                                    /// Auto reply to sender with this ///

                                    $email= $_POST['email'];
                                    $subject= "Welcome to SK EVENT MANAGEMENT";
                                    $msg= "Thanks for sending us message. ASAP we will reply your message";
                                    $from= "SK Events admin";

                                    mail($email, $subject, $msg, $from);

                                    echo "<h2 align='center'> Your message has sent successfully....</h2>";
                                    
                                }

                            ?>
</div>
                        <div class="col-md-6 col-lg-5">
                            <div>
                                <div class="d-inline-flex w-100 border border-primary p-4 rounded mb-4">
                                    <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                                    <div class="">
                                        <h4>Address</h4>
                                        <p>Bannerghatta road Weavers Colony Maruthi badavane 3rd cross Bangalore - 560083</p>
                                    </div>
                                </div>
                                <div class="d-inline-flex w-100 border border-primary p-4 rounded mb-4">
                                    <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                                    <div class="">
                                        <h4>Mail Us</h4>
                                        <a class="text-body mb-3" href="https://www.google.com/gmail/about/" target="_blank"><i></i>skcreativeworks165@gmail.com</a>
                                    </div>
                                </div>
                                <div class="d-inline-flex w-100 border border-primary p-4 rounded">
                                    <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                                    <div class="">
                                        <h4>Telephone</h4>
                                        <p class="mb-2">+91 93536 50750</p>
                                        <p class="mb-0">+91 83102 47149</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Start -->
        <div class="container-fluid footer py-6 my-6 mb-0 bg-light wow bounceInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h1 class="text-primary">SK <span class="text-dark">Events</span></h1>
                            <p class="display-7 mb-22 animated bounceInDown"> <span class="text-primary">Captivate</span> Engage, Inspire: Unveil Your Event's Story with SK Events, <span class="text-primary">Make Your Story Soon</span></p>
                            <div class="footer-icon d-flex">
                                <a class="btn btn-primary btn-sm-square me-2 rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square me-2 rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/sk_events_official_/" target="_blank" class="btn btn-primary btn-sm-square me-2 rounded-circle"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="mb-4">Quick Links</h4>
                            <div class="d-flex flex-column align-items-start">
                                <a class="text-body mb-3" href="service.html"><i class="fa fa-check text-primary me-2"></i>Services</a>
                                <a class="text-body mb-3" href="gallery.html"><i class="fa fa-check text-primary me-2"></i>Gallery</a>
                                <a class="text-body mb-3" href="about.html"><i class="fa fa-check text-primary me-2"></i>About Us </a>
                                <a class="text-body mb-3" href="Contact.php"><i class="fa fa-check text-primary me-2"></i>Contact</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="mb-4">Contact Us</h4>
                            <div class="d-flex flex-column align-items-start">
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Bannerghatta road Weavers Colony Maruthi badavane 3rd cross Bangalore - 560083</p>
                                <p><i class="fa fa-phone-alt text-primary me-2"></i>+91 93536 50750</p>
                                <a class="text-body mb-3" href="https://www.google.com/gmail/about/" target="_blank"><i class="fas fa-envelope text-primary me-1"></i>skcreativeworks165@gmail.com</a>
                                <p><i class="fa fa-clock text-primary me-2"></i> 24/7 Hours Service</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="mb-4">Social Gallery</h4>
                            <div class="row g-2">
                                <div class="col-4">
                                     <img src="img/Home3.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                                </div>
                                <div class="col-4">
                                     <img src="img/Birthday5.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                                </div>
                                <div class="col-4">
                                     <img src="img/wedding4.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                                </div>
                                <div class="col-4">
                                     <img src="img/anniv2.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                                </div>
                                <div class="col-4">
                                     <img src="img/anniv4.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                                </div>
                                <div class="col-4">
                                     <img src="img/baby2.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->



        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>SK Events</a>, All right reserved.</span>
                        <span style="margin-left: 10.6%; font-size: 15px;" class="text-light"><a href="">Developed by</a>, Bhaskar S and Arpita</span>
                    </div>
                    <div class="col-md-6 my-auto text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-md-square btn-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>
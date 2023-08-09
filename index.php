<!DOCTYPE html>
<html lang="en">

<head>
    <title>Forgetel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

            <div class="container-fluid">
                <div class="d-flex align-items-center">
                    <div class="site-logo mr-auto w-25"><a href="index.php">Forgetel</a></div>

                    <div class="mx-auto text-center">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                                <li><a href="#home-section" class="nav-link">Home</a></li>
                                <li><a href="#programs-section" class="nav-link">Mission</a></li>
                                <li><a href="#invite-section" class="nav-link">Invite</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="ml-auto w-25">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                    </div>
                </div>
            </div>

        </header>

        <div class="intro-section" id="home-section">
            <div class="slide-1" style="background-image: url('images/background.jpg');" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="sign">
                                <!--sign-->
                                <div class="container <?php echo (isset($_GET['errorp']) || isset($_GET['signup'])) ? 'right-panel-active' : ''; ?>" id="container">
                                    <div class="form-container sign-up-container">
                                        <form action="includes/signup1.inc.php" method="post" id="signup_form">
                                            <h1 class="title">Sign Up</h1>
                                            <br>
                                            <?php
                                            if (isset($_GET['errorp'])) {
                                                if ($_GET['errorp'] == "emptyfields") {
                                                    echo '<div style="color:red;">Fill in all fields !</div>';
                                                } else if ($_GET['errorp'] == "invalidmailuid") {
                                                    echo '<div style="color:red;">Invalid username and e-mail !</div>';
                                                } else if ($_GET['errorp'] == "invaliduid") {
                                                    echo '<div style="color:red;">Invalid username !</div>';
                                                } else if ($_GET['errorp'] == "invalidmail") {
                                                    echo '<div style="color:red;">Invalid e-mail !</div>';
                                                } else if ($_GET['errorp'] == "passwordcheck") {
                                                    echo '<div style="color:red;">Passwords don\'t match!</div>';
                                                } else if ($_GET['errorp'] == "usertaken") {
                                                    echo '<div style="color:red;">Username is already taken!</div>';
                                                }
                                            } elseif (isset($_GET['signup'])) {
                                                if ($_GET['signup'] == "success")
                                                    echo '<div style="color:green;">Signup Successful ! Feel free to login !</div>';
                                            }
                                            ?>
                                            <div id="error_signup_name"></div>
                                            <input type="text" id="name_signup" name="uid" placeholder="Name" value="<?php if (isset($_GET['errorp'])) {
                                                                                                                            if ($_GET['errorp'] == 'invalidmail' || $_GET['errorp'] == 'passwordcheck' || $_GET['errorp'] == 'emptyfields') {
                                                                                                                                echo  isset($_GET['uid']) ? $_GET['uid'] : '';
                                                                                                                            } else {
                                                                                                                                echo '';
                                                                                                                            }
                                                                                                                        }  ?>" />
                                            <div id="error_signup_email"></div>
                                            <input type="email" id="mail_signup" name="mail" placeholder="E-mail" value="<?php if (isset($_GET['errorp'])) {
                                                                                                                                if ($_GET['errorp'] == 'invaliduid' || $_GET['errorp'] == 'passwordcheck' || $_GET['errorp'] == 'emptyfields' || $_GET['errorp'] == 'usertaken') {
                                                                                                                                    echo  isset($_GET['mail']) ? $_GET['mail'] : '';
                                                                                                                                } else {
                                                                                                                                    echo '';
                                                                                                                                }
                                                                                                                            }  ?>" />
                                            <div id="error_signup_pwd1"></div>
                                            <input type="password" id="pwd1_signup" name="pwd" placeholder="Password" />
                                            <div id="error_signup_pwd2"></div>
                                            <input type="password" id="pwd2_signup" name="pwd-repeat" placeholder="Repeat Password" />
                                            <button>Sign Up</button>
                                        </form>

                                    </div>
                                    <div class="form-container sign-in-container">
                                        <form action="includes/login.inc.php" method="post" id="signin_form">
                                            <h1 class="title">Sign in</h1>
                                            <br>
                                            <?php
                                            if (isset($_GET['error'])) {
                                                if ($_GET['error'] == "emptyfields") {
                                                    echo '<div style="color:red;">Fill in all fields !</div>';
                                                } else if ($_GET['error'] == "wrongpwd") {
                                                    echo '<div style="color:red;">Wrong password!</div>';
                                                } else if ($_GET['error'] == "nomatch") {
                                                    echo '<div style="color:red;">There\'s no match for your email !</div>';
                                                } elseif (isset($_GET['login'])) {
                                                    if ($_GET['signup'] == "success")
                                                        echo '<div style="color:green;">Sign in Successful !</div>';
                                                }
                                            } ?>
                                            <div id="error_signin_mail"></div>
                                            <input type="email" id="mailsignin" placeholder="Email" name="mailuid" placeholder="Username/E-mail" value="<?php if (isset($_GET['error'])) {
                                                                                                                                                            if ($_GET['error'] == "wrongpwd" || $_GET['error'] == "emptyfields") {
                                                                                                                                                                echo  isset($_GET['mail']) ? $_GET['mail'] : '';
                                                                                                                                                            } else {
                                                                                                                                                                echo '';
                                                                                                                                                            }
                                                                                                                                                        }  ?>" />
                                            <div id="error_signin_pwd"></div>
                                            <input type="password" id="pwdsignin" name="pwd" placeholder="Password" />
                                            <a href="mail_input.php">Forgot your password?</a>
                                            <button>Sign In</button>
                                        </form>
                                    </div>
                                    <div class="overlay-container">
                                        <div class="overlay">
                                            <div id="overlay-left" class="overlay-panel overlay-left">
                                                <h1>Welcome Back!</h1>
                                                <p>To keep connected with us please login with your info!</p>
                                                <button class="ghost" id="signIn">Sign In</button>
                                            </div>
                                            <div class="overlay-panel overlay-right">
                                                <h1>Hello!</h1>
                                                <p>Enter your details and start journey with us!</p>
                                                <button class="ghost" id="signUp">Sign Up</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <div class="site-section" id="programs-section">
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Share</h5>
                    </div>
                    <div class="modal-body">
                        <div class="border border-dark rounded p-2 d-flex justify-content-between">
                            <input class="border-0 bg-white" type="text" value="127.0.0.1/index.php" id="link" disabled>
                            <button class="btn btn-primary" onclick="copy()">Copy</button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
                    <h2 class="section-title">Our Mission</h2>
                    <p>Our aim is to encourage people to be engaged in utilising the website to increase their dementia
                        knowledge.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section" id="invite-section">
        <div class="site-section bg-image overlay" style="background-image: url('images/background.jpg');">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-8 text-center testimony">
                        <h2 class="section-title">Invitation</h2>
                        <blockquote>
                            <p>Kindly forward this link with those who are close to you to assist us on our
                                mission
                                to urge others to use the website to widen their understanding of dementia
                                awareness. We
                                are
                                capable of making improvements if we work together!</p>
                        </blockquote>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Invite Friends
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>


    </div> <!-- .site-wrap -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
    <script>
        function copy() {
            // Get the text field
            var copyText = document.getElementById("link");

            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);

            // Optionally, provide some feedback to the user
            alert("Link copied to clipboard!");
        }
    </script>

</body>
<?php require "./footer.php" ?>

</html>
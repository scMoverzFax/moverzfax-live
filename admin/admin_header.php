<?php
session_start();
if (isset($_SESSION['catagory']) && $_SESSION['catagory'] == "customer") {
    $user_id = $_SESSION["id"];
    $user_first_name = $_SESSION["first_name"];
    $user_last_name = $_SESSION["last_name"];
    $user_email = $_SESSION["email"];
    $role = $_SESSION['catagory'];
    define("LOGIN", "Login true");
} elseif (isset($_SESSION['catagory']) && $_SESSION['catagory'] == "mover") {
    $user_id = $_SESSION["id"];
    $usdot = $_SESSION["usdot"];
    $company_name = $_SESSION['company_name'];
    $user_email = $_SESSION["email"];
    $role = $_SESSION['catagory'];
    $states = $_SESSION['states'];
    define("LOGIN", "Login true");
} elseif (isset($_SESSION['catagory']) && $_SESSION['catagory'] == "admin") {
    $user_id = $_SESSION["id"];
    $adminName = $_SESSION["name"];
    $user_email = $_SESSION["email"];
    $role = $_SESSION['catagory'];
    define("LOGIN", "Login true");
} else {
    $user_id = NULL;
    $user_email = "email@email.com";
    $role = "role";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoverZfax - Admin</title>
    <script src="https://kit.fontawesome.com/bb12bcec8e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/bootstrap_4/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/bb12bcec8e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="fSbR7179ytQFETKa3rkDvn1fFmhbAymvwBsjj9JC">
    <meta content="MoverZfax UI description" name="description">
    <meta content="MoverZfax Shop UI keywords" name="keywords">
    <meta content="keenthemes" name="author">
    <meta property="og:site_name" content="Consumer Protection Portal: Moverzfax">
    <meta property="og:title" content="Consumer Protection Portal: Moverzfax">
    <meta property="og:description" content="Consumer Protection Portal: Moverzfax">
    <meta property="og:type" content="website">
    <meta property="og:image" content="Consumer Protection Portal: Moverzfax"><!-- link to image for socio -->
    <meta property="og:url" content="Consumer Protection Portal: Moverzfax">

    <link rel="shortcut icon" href="https://www.moversfax.com/frontend/m_icon.png">

    <!-- Fonts START -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
    <link href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts END -->

    <!-- Global styles START -->
    <link href="https://www.moversfax.com/frontend/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://www.moversfax.com/frontend/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Global styles END -->

    <!-- Page level plugin styles START -->
    <link href="https://www.moversfax.com/frontend/pages/css/animate.css" rel="stylesheet">
    <link href="https://www.moversfax.com/frontend/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
    <link href="https://www.moversfax.com/frontend/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
    <!-- Page level plugin styles END -->

    <!-- Theme styles START -->
    <!-- <link href="https://www.moversfax.com/frontend/pages/css/components.css" rel="stylesheet"> -->
    <link href="https://www.moversfax.com/frontend/pages/css/slider.css" rel="stylesheet">
    <link href="https://www.moversfax.com/frontend/corporate/css/style.css" rel="stylesheet">
    <link href="https://www.moversfax.com/frontend/corporate/css/style-responsive.css" rel="stylesheet">
    <link href="https://www.moversfax.com/frontend/corporate/css/themes/green.css" rel="stylesheet" id="style-color">

    <!-- formwidzard css -->
    <!-- <link href="https://www.moversfax.com/backend/css/style-metronic.css" rel="stylesheet"> -->
    <link href="https://www.moversfax.com/backend/css/plugins.css" rel="stylesheet">
    <!-- <link href="css/uikit.min.css" rel="stylesheet"> -->

    <!-- this is a review_modal css -->
    <link href="https://www.moversfax.com/frontend/corporate/css/examples.css" rel="stylesheet">
    <link href="https://www.moversfax.com/frontend/corporate/css/bars-movie.css" rel="stylesheet">
    <link href="https://www.moversfax.com/frontend/corporate/css/star_style.css" rel="stylesheet">

    <link href="https://www.moversfax.com/frontend/corporate/css/custom.css" rel="stylesheet">
    <link href="https://www.moversfax.com/frontend/corporate/css/modal.css" rel="stylesheet">
    <!-- Theme styles END -->

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <link rel="stylesheet" href="css/skeleton/skeleton.css"> -->
    <link rel="stylesheet" href="../css/animation.css">
    <!-- <link rel="stylesheet" href="css/main_body.css"> -->
    <link rel="stylesheet" href="../css/myheader_style.css">
    <link rel="stylesheet" href="../css/footer_style.css">
    <!-- <link rel="stylesheet" href="../css/truck-loader.css"> -->
    <style>
        html {
            font-size: 14px;
        }

        *,
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        .main-body {
            background: #eff0eb;
            background-image: url('../img/bg.avif');
            background-size: cover;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            min-height: 80vh;
            width: 100vw;
            display: flex;
            justify-content: center;
        }
    </style>
    <!-- Loader CSS -->
    <!-- <style>

    </style> -->

</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FD3P4DJW8V"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FD3P4DJW8V');
</script>

<body>
    <?php
    //  include 'truck_loader.php'; 
     ?>
    <!-- <div class="loader-wrapper" id="loader-wrapper">
        <div class="truck-wrapper">
            <div class="truck">
                <div class="truck-container"></div>
                <div class="glases"></div>
                <div class="bonet"></div>
                <div class="base"></div>
                <div class="base-aux"></div>
                <div class="wheel-back"></div>
                <div class="wheel-front"></div>
                <div class="smoke"></div>
            </div>
        </div>
    </div> -->
    <script>
        function loaderHideFunction() {
            var loader = document.getElementById('loader-wrapper');
            // loader.style.display = 'none';
        }

        function loaderShowFunction() {
            var loader = document.getElementById('loader-wrapper');
            // loader.style.display = 'block';
        }
        // function onloadFunctions() {
        // // // // loaderFunction();
        // // }
        // setTimeout(loaderFunction, 2500);
    </script>

    <div class="h-body">
        <div class="nav-header">
            <!-------------------------- side menu start  -------------------------->
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <!-- <a href="index.php">Home</a>
                <a href="about.php">About</a> -->
                <!-- <a href="show_review.php">My Review</a>
                <a href="show_jobs.php">My Jobs</a> -->
                <!-- <button class="collapsible">Mover Job</button> -->
                <!-- <div class="content1">
                    <a href="job_post.php" >Add Job</a>
                    <a href="show_jobs.php" >My Jobs</a>
                  </div> -->
                <!-- <button class="collapsible">Service</button>
                  <div class="content1">
                    <a href="find_a_mover.php" >Find a Mover</a>
                    <a href="order_report.php" >Order Report</a>
                    <a href="add_review.php" >Add a Review</a>
                  </div> -->
                <!-- <button class="collapsible">Support</button>
                <div class="content1">
                    <a href="contact.php">Contact Us</a> -->
                    <!-- <a href="support.php">Send a Message</a> -->
                <!-- </div>
                <button class="collapsible">More Links</button>
                <div class="content1">
                    <a href="blog.php">Blog</a>
                    <a href="link_to_us.php">Link to us</a>
                    <a href="pro.php">Promotional Video</a>
                    <a href="#" class="sub-link">Testimonials</a>
                    <a href="video.php">Video Testimonials</a>
                </div> -->

                <a href="admin_dashboard.php">Dashboard</a>
                <a href="admin_reports.php">Generate Reports</a>

                    <button class="collapsible">Transactions</button>
                        <div class="content1">
                            <a href="admin_cs_transaction.php">Customer Transactions</a>
                            <a href="admin_mv_transaction.php">Mover Transactions</a>
                        </div>

                    <button class="collapsible">All Users</button>
                        <div class="content1">
                            <a href="admin_cs_user.php">Customer Users</a>
                            <a href="admin_mv_user.php">Mover Users</a>
                            <a href="admin_mv_approval.php">Mover Approval</a>
                            <a href="admin_mv_scammer.php">Mover Scam System</a>
                        </div>

                <a href="admin_review.php">Reviews</a>

            </div>

            <!-- ------------------------ side menu end  -------------------------- -->
            <div class="row-one">
                <div class="cotacts-signing">
                    <!--Contacts-->
                    <div class="cotacts">
                        <a href="tel:8668289688" id="call"><i class="fa fa-phone"></i>866-828-9688</a><span> | </span>
                        <a href="mailto:support@moverzfax.com"><i class="fa fa-envelope"></i>support@moverzfax.com</a>
                    </div>
                    <!-- <div class="signing anim">
                    <a href="signin.php">Sign In</a><span>|</span><a href="register.php">Sign Up</a>
                </div> -->
                    <div class="signing anim" <?php if (isset($_SESSION["email"])) {
                                                    echo 'style="display:none"';
                                                } ?>>
                        <a href="../home/signin.php">Login</a><span>|</span><a href="register.php">Register</a>
                    </div>

                    <div class="signing" <?php if (isset($_SESSION["email"])) {
                                                echo 'style="display:block"';
                                            } else {
                                                echo 'style="display:none"';
                                            } ?>>
                        <span>Welcome <?php if ($role == "customer") {
                                            echo '<b>' . $_SESSION["first_name"] . " " . $_SESSION["last_name"] . '</b>';
                                        } elseif ($role == "mover") {
                                            echo '<b>' . strtoupper($_SESSION["company_name"]) . '</b>';
                                        } elseif ($role == "admin") {
                                            echo '<b>' . strtoupper($_SESSION["name"]) . '</b>';
                                        }
                                        ?></span>
                        <?php if ($role == "customer") { ?><a class="me-3" style="color:green;" href="profile.php"><i class="fas fa-user-circle me-1 fs-5"></i>Edit Profile</a> <?php } ?>
                        <a href="../home/logout.php" style="color:red;text-decoration:none;"><i class="fas fa-sign-out-alt"></i>LOGOUT</a>
                        <div class="cart-logo shadow" style="<?php if (isset($_SESSION["email"]) && $role == "customer") {
                                                                    echo "";
                                                                } else {
                                                                    echo 'display:none;';
                                                                } ?>"><a href="select_company.php" style="text-decoration:none;"><i class="fas fa-shopping-cart text-white"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="row-two">
                <div class="logo">
                    <!-- <a href="admin_dashboard.php"><img src="../img/MoverZfax.png" alt="logo"></a> -->
                    <a href="admin_dashboard.php"><img src="../img/logo2023.jpeg" alt="logo"></a>
                </div>
                <!-- ------------------------ side menu button start  -------------------------- -->

                <span class="menu-btn" style="font-size:20px; cursor:pointer" onclick="openNav()">&#9776; <label>MENU</label></span>

                <!-- ------------------------ side menu button end  -------------------------- -->

                <!-- ------------------------  Main menu Start  -------------------------- -->
                <div class="nav-menu">
                    <a href="admin_dashboard.php" class="nav-link nav-dropdown">Dashboard</a>
                    <a href="admin_reports.php" class="nav-link nav-dropdown">Generate Reports</a>
                    <div class="nav-dropdown" data-dropdown>
                    <button class="nav-link" data-dropdown-button>All Transactions</button>
                            <div class="nav-dropdown-menu infomation-grid">
                                <div>
                                    <div class="dropdown-heading"></div>
                                    <div class="nav-dropdown-links">
                                        <a href="admin_cs_transaction.php" class="sub-link">Customer Transactions</a>
                                        <a href="admin_mv_transaction.php" class="sub-link">Mover Transactions</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="nav-dropdown" data-dropdown>
                    <button class="nav-link" data-dropdown-button>All Users</button>
                            <div class="nav-dropdown-menu infomation-grid">
                                <div>
                                    <div class="dropdown-heading"></div>
                                    <div class="nav-dropdown-links">
                                        <a href="admin_cs_user.php" class="sub-link">Customer Users</a>
                                        <a href="admin_mv_user.php" class="sub-link">Mover Users</a>
                                        <a href="admin_mv_approval.php" class="sub-link">Mover Approval</a>
                                        <a href="admin_mv_scammer.php" class="sub-link">Mover Scam System</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <a href="admin_review.php" class="nav-link nav-dropdown">Reviews</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('click', e => {
            const isDropdownButton = e.target.matches("[data-dropdown-button]")
            if (!isDropdownButton && e.target.closest('[data-dropdown]') != null) return

            let currentDropdown
            if (isDropdownButton) {
                currentDropdown = e.target.closest('[data-dropdown]')
                currentDropdown.classList.toggle('active')
            }

            document.querySelectorAll("[data-dropdown].active").forEach(dropdown => {
                if (dropdown === currentDropdown) return
                dropdown.classList.remove('active')
            });
        });


        function openNav() {
            document.getElementById("mySidenav").style.right = "0";

        }

        function closeNav() {
            document.getElementById("mySidenav").style.right = "-300px";
            document.body.style.backgroundColor = "white";
        }

        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active1");
                var content = this.nextElementSibling;
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        }
    </script>
    <!-- **************** Main Body Start ***************************-->
    <div class="main-body">
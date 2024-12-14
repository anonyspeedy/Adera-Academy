<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">

    <!--Font Awesome css-->
    <link rel="stylesheet" href="CSS/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

    <!-- Custom Font -->
    <link rel="stylesheet" href="CSS/style.css">

    <title>Adera Academy</title>
</head>
<body>

    <!-- Strat Navigation-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark custom-padding fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Adera-Academy</a>
            <span class="navbar-text">Learn and Implement</span>
            <button class="navbar-toggler" type="button" 
            data-toggle="collapse" data-target="#navbarNavAltMarkup" 
            aria-controls="navbarNavAltMarkup" aria-expanded="false" 
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav custom-nav custom-padding">
                        <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
                        <li class="nav-item custom-nav-item"><a href="" class="nav-link">Course</a></li>
                        <li class="nav-item custom-nav-item"><a href="" class="nav-link">Payment Status</a></li>
                        <li class="nav-item custom-nav-item"><a href="" class="nav-link">My profile</a></li>
                        <li class="nav-item custom-nav-item"><a href="" class="nav-link">Logout</a></li>
                        <li class="nav-item custom-nav-item"><a href="" class="nav-link">Login</a></li>
                        <li class="nav-item custom-nav-item"><a href="" class="nav-link">Signup</a></li>
                        <li class="nav-item custom-nav-item"><a href="" class="nav-link">Feedback</a></li>
                        <li class="nav-item custom-nav-item"><a href="" class="nav-link">Contact</a></li>
                    </ul>
                </div>
        </div>
    </nav>
    <!-- End Navigation-->

    <!-- Strat video background -->

    <div class="container-fluid remove-vid-marg">
        <div class="vid-parent">
            <video playsinline autoplay muted loop>
                <source src="video/edu_dis.mp4">
            </video>
            <div class="vid-overlay"></div>
        </div>
        <div class="vid-con">
            <h1 class="my-content">Welcome to school</h1>
            <small class="my-content">Learn and Implement</small> <br>
            <a href="#" class="btn btn-danger">Get Started</a>
        </div>
    </div>
    <!-- End video background -->
    
    <!-- Start Text Banner -->
    <div class="container-fluid bg-danger txt-baner">
        <div class="row bottom-banner">
            <div class="col-sm">
                <h5><i class="fas fa-book-open mr-3"></i> 100+ Online Courses</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fas fa-users mr-3"></i>Expert Instructors</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fas fa-keyboard mr-3"></i>Lifetime Access</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fa-solid fa-dollar-sign"></i>Money Back Guarantee</h5>
            </div>
        </div>
    </div>
    <!-- End Text Banner -->

    <!--jquery and bootstrap javascript-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/all.min.js"></script>

</body>
</html>
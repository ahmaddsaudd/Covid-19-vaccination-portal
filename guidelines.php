<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style3.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Guidelines</title>
</head>
<body>

    <!-- header section  -->
    <header>
        <a href="index.php" class="logo">c<span class="fas fa-virus"></span>vid-19</a>

        <div id="menu" class="fas fa-bars" ></div>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="registration.php">make appointment</a>
            <a class="active" href="guidelines.php">Guidelines</a>
            <a href="info.php">More Info</a>
        </nav>
    </header>

    <!-- slider section  -->
    <section class="slider" id="slider">
        <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval = "3000">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="img/slider3.jpg" class="d-block w-100" alt="...">
                </div>   
                <div class="carousel-item">
                    <img src="img/slider2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/slider5.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/slider4.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>

    <!-- Guidelines section  -->
    <section class="guidelines" id="guidelines">
        <h1 class="heading">Guidelines for Vaccination</h1>

        <div class="row box-container">
            <div class="col-md-5 box reveal1">
                <img src="img/guideline1.png" alt="">
                <div class="info">
                    <h3>registration</h3>
                    <p>Fill in the registration form and wait for appointment confirmation text.</p>
                </div>
            </div>
            <div class="col-md-5 box reveal">
                <img src="img/guideline2.png" alt="">
                <div class="info">
                    <h3>vaccination center</h3>
                    <p>Walk-in to any nearby vaccination center.</p>
                </div>
            </div>
            <div class="col-md-5 box reveal1">
                <img src="img/guideline3.png" alt="">
                <div class="info">
                    <h3>verification</h3>
                    <p>Verification of your CNIC and confirmation of your entry in our database.</p>
                </div>
            </div>
            <div class="col-md-5 box reveal">
                <img src="img/guideline4.png" alt="">
                <div class="info">
                    <h3>vaccination counter</h3>
                    <p>Get vaccinated in any available counter.</p>
                </div>
            </div>
            <div class="col-md-5 box reveal1">
                <img src="img/guideline5.png" alt="">
                <div class="info">
                    <h3>confirmation</h3>
                    <p>Check your vaccination record on our website.</p>
                </div>
            </div>
            <div class="col-md-5 box reveal">
                <img src="img/guideline6.png" alt="">
                <div class="info">
                    <h3>monitoring</h3>
                    <p>After vaccination, you will be required to stay for 30 minutes for monitoring.</p>
                </div>
            </div>
        </div>
        
    </section>

    <!-- eligibility section -->
    <section class="eligibility" id="eligibility">
        <h1 class="heading">Eligible Citizens</h1>
        <div class="row box-container reveal">
            <div class="box">
                <div class="card-header card-1"></div>
                <img src="img/18+people.png" alt="">
                <h3>All 18+ Citizens</h3>
                <p>Register yourself by filling out the appointment request form on our website and walk-in to any nearby vaccination center.</p>
                <div class="card-footer card-1"></div>
            </div>
            <div class="box">
                <div class="card-header card-2"></div>
                <img src="img/text.png" alt="">
                <h3>2nd Dose</h3>
                <p>Message will be automatically sent to all eligible citizens waiting of the second dose in 24-48 hours before the due date.</p>
                <div class="card-footer card-2"></div>
            </div>
        </div>
    </section>

    <!-- footer section  -->
    <section class="footer" id="footer">
        <div class="box-container">
            <div class="box">
                <h3>about us</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus a fuga ipsam expedita molestiae quis minima cupiditate at corrupti dolor.</p>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="index.php">home</a>
                <a href="registration.php">Make Appointment</a>
                <a href="guidelines.php">Guidelines</a>
                <a href="info.php">More Info</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="">facebook</a>
                <a href="">twitter</a>
                <a href="">instagram</a>
                <a href="">linkedin</a>
                <a href="">youtube</a>
            </div>

            <div class="box">
                <h3>location</h3>
                <div class="location">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.929228357212!2d67.07351171452423!3d24.900395549789273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33edf57c0d5f5%3A0x956c5a189579b59d!2sExpo%20Centre%20karachi!5e0!3m2!1sen!2s!4v1627825711251!5m2!1sen!2s" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>

        <h1 class="credit">created by <a href="">hassaan siddiqui & ahmad bin saud</a> &copy; copyright @ 2021</h1>
    </section>

    <!-- scroll top  -->
    <a href="#slider" class="scroll-top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- Bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- jquery cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script3.js"></script>

</body>
</html>
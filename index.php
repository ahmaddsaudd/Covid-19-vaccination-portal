<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- font awesom -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

    <title>Covid-19 Vaccination</title>
</head>
<body>
    <!-- header section  -->
    <header>
        <a href="index.php" class="logo">c<span class="fas fa-virus"></span>vid-19</a>

        <div id="menu" class="fas fa-bars" ></div>

        <nav class="navbar">
            <a class="active" href="#home">home</a>
            <a href="#covid">covid-19 Stats</a>
            <a href="#prevent">prevention</a>
            <a href="#symptoms">symptoms</a>
            <a href="#precautions">precautions<precautions/a>
            <a href="#hand-wash">hand-wash</a>
            <a href="#doctor">doctor</a>
        </nav>
    </header>

    <!-- home section  -->
    <section class="home" id="home">
        <!-- overlay -->
        <div class="overlay"></div>
        
        <div class="content">
            <h1>Prevention from Corona Virus</h1>
            <h3>covid-19 vaccine:</h3>
            <h4>it's safe, effective & free</h4>
            <a href="registration.php" target="_blank" id="appointment" class="btn">MAKE APPOINTMENT</a>
            <a href="info.php" target="_blank" id="info" class="btn">MORE INFO</a>
            
        </div>
        
    </section>

    <!-- covid stats  -->
    <section class="covid" id="covid">
        <h1 class="heading">Pakistan Covid-19 Live Stats</h1>
        <div class="column">
            <div class="box-container">
                <div class="box reveal" id="one">
                    <div class="icons">
                        <img src="img/confirmed-cases.png" alt="">
                    </div>
                    <div class="number"></div>
                    <span class="heading">Confirmed Cases</span>
                    <div class="newCases subDiv one">
                        <span class="label">Last 24 hours: </span>
                        <span class="number"></span>
                    </div>
                </div>
                <div class="box reveal" id="two">
                    <div class="icons">
                        <img src="img/recovered.png" alt="">
                    </div>
                    <div class="number" id="recovered"></div>
                    <span class="heading">Recovered</span>
                    <div class="newRecovered subDiv two">
                        <span class="label">Last 24 hours: </span>
                        <span class="number"></span>
                    </div>
                </div>
                <div class="box reveal" id="three">
                    <div class="icons">
                        <img src="img/death.png" alt="">
                    </div>
                    <div class="number" id="deaths"></div>
                    <span class="heading">Deaths</span>
                    <div class="newDeaths subDiv three">
                        <span class="label">Last 24 hours: </span>
                        <span class="number"></span>
                    </div>
                </div>
                <div class="box reveal" id="four">
                    <div class="icons">
                        <img src="img/active.png" alt="">
                    </div>
                    <div class="number" id="active"></div>
                    <span class="heading">Active</span>
                    <div class="critical subDiv four">
                        <span class="label">Critical: </span>
                        <span class="number"></span>
                    </div>
                </div>

                <div class="box reveal" id="five">
                    <div class="icons">
                        <img src="img/total-tests.png" alt="">
                    </div>
                    <span class="heading">Total Tests:</span>
                    <div class="number" id="tests"></div>
                </div>
            </div>

            <div class="main-image reveal">
                <img src="https://covid.gov.pk/v2/img/header-b.png" alt="">
                <div class="pulse" id="one">
                    <i class="phone"></i>
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                </div>
                <div class="pulse" id="two">
                    <i class="phone"></i>
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                </div>
                <div class="pulse" id="three">
                    <i class="phone"></i>
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                </div>
                <div class="pulse" id="four">
                    <i class="phone"></i>
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                </div>
                <div class="pulse" id="five">
                    <i class="phone"></i>
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                </div>
                <div class="pulse" id="six">
                    <i class="phone"></i>
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                </div>
                <div class="pulse" id="seven">
                    <i class="phone"></i>
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                </div>
            </div>
        </div>  
    </section>

    <!-- prevent section  -->
    <section class="prevent" id="prevent">
        <h1 class="heading"> how to prevent virus</h1>

        <div class="box-container">
            <div class="box reveal">
                <img src="img/pre-1.png" alt="">
                <h3>wash your place</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque officia pariatur ea deleniti tempora corrupti! Temporibus iure quis officiis fugiat.</p>
            </div>

            <div class="box reveal">    
                <img src="img/pre-2.png" alt="">
                <h3>maintain distance</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque officia pariatur ea deleniti tempora corrupti! Temporibus iure quis officiis fugiat.</p>
            </div>

            <div class="box reveal">
                <img src="img/pre-3.png" alt="">
                <h3>don't touch your face</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque officia pariatur ea deleniti tempora corrupti! Temporibus iure quis officiis fugiat.</p>
            </div>

            <div class="box reveal">
                <img src="img/pre-4.png" alt="">
                <h3>wash your hands</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque officia pariatur ea deleniti tempora corrupti! Temporibus iure quis officiis fugiat.</p>
            </div>

            <div class="box reveal">
                <img src="img/pre-5.png" alt="">
                <h3>use napkin</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque officia pariatur ea deleniti tempora corrupti! Temporibus iure quis officiis fugiat.</p>
            </div>

            <div class="box reveal">
                <img src="img/pre-6.png" alt="">
                <h3>wear a mask</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque officia pariatur ea deleniti tempora corrupti! Temporibus iure quis officiis fugiat.</p>
            </div>
        </div>
    </section>

    <!-- symptoms section  -->
    <section class="symptoms" id="symptoms">
        <h1 class="heading">covid-19 symptoms</h1>

        <div class="column">
            <div class="main-image reveal">
                <img src="img/main-symp-img.png" alt="">
            </div>

            <div class="box-container">
                <div class="box reveal">
                    <img src="img/symp-a.png" alt="">
                    <h3>dry cough</h3>
                </div>

                <div class="box reveal">
                    <img src="img/symp-b.png" alt="">
                    <h3>soar throat</h3>
                </div>

                <div class="box reveal">
                    <img src="img/symp-c.png" alt="">
                    <h3>cold</h3>
                </div>

                <div class="box reveal">
                    <img src="img/symp-d.png" alt="">
                    <h3>fever</h3>
                </div>

                <div class="box reveal">
                    <img src="img/symp-e.png" alt="">
                    <h3>headache</h3>
                </div>

                <div class="box reveal">
                    <img src="img/symp-f.png" alt="">
                    <h3>vomiting</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- precautions section  -->
    <section class="precautions" id="precautions">
        <h1 class="heading">take precautions against covid-19</h1>

        <div class="column">
            <div class="box-container reveal">
                <h3 class="title">things you should DO</h3>

                <div class="box">
                    <img src="img/do-img1.png" alt="">
                    <div class="info">
                        <h3>wash your hands</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae reiciendis accusantium facilis quidem aliquid voluptate eum ipsum voluptatibus cupiditate harum?</p>
                    </div>
                </div>

                <div class="box">
                    <img src="img/do-img2.png" alt="">
                    <div class="info">
                        <h3>always wear a mask</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae reiciendis accusantium facilis quidem aliquid voluptate eum ipsum voluptatibus cupiditate harum?</p>
                    </div>
                </div>

                <div class="box">
                    <img src="img/do-img3.png" alt="">
                    <div class="info">
                        <h3>stay home during fever</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae reiciendis accusantium facilis quidem aliquid voluptate eum ipsum voluptatibus cupiditate harum?</p>
                    </div>
                </div>

            </div>

            <div class="box-container reveal">
                <h3 class="title">things you should NOT DO</h3>

                <div class="box">
                    <img src="img/dont-img1.png" alt="">
                    <div class="info">
                        <h3>Avoid Close Contact With Animals</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae reiciendis accusantium facilis quidem aliquid voluptate eum ipsum voluptatibus cupiditate harum?</p>
                    </div>
                </div>

                <div class="box">
                    <img src="img/dont-img2.png" alt="">
                    <div class="info">
                        <h3>Avoid Close Contact With Peoples</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae reiciendis accusantium facilis quidem aliquid voluptate eum ipsum voluptatibus cupiditate harum?</p>
                    </div>
                </div>

                <div class="box">
                    <img src="img/dont-img3.png" alt="">
                    <div class="info">
                        <h3>Avoid Crowded Area</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae reiciendis accusantium facilis quidem aliquid voluptate eum ipsum voluptatibus cupiditate harum?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- hand-wash section  -->
    <section class="hand-wash" id="hand-wash">
        <h1 class="heading">HOW TO WASH HAND PROPERLY</h1>

        <div class="column">
            

            <div class="box-container">
                <div class="box reveal">
                    <img src="img/wash-a.png" alt="">
                    <h3>water and soap</h3>
                </div>

                <div class="box reveal">
                    <img src="img/wash-b.png" alt="">
                    <h3>Palm To Palm</h3>
                </div>

                <div class="box reveal">
                    <img src="img/wash-c.png" alt="">
                    <h3>Between Fingers</h3>
                </div>

                <div class="box reveal">
                    <img src="img/wash-d.png" alt="">
                    <h3>Focus On Thumbs</h3>
                </div>

                <div class="box reveal">
                    <img src="img/wash-e.png" alt="">
                    <h3>Back Of Hands</h3>
                </div>

                <div class="box reveal">
                    <img src="img/wash-f.png" alt="">
                    <h3>Focus On Wrist</h3>
                </div>
            </div>

            <div class="main-image reveal">
                <img src="img/main-wash-img.png" alt="">
            </div>
        </div>
    </section>

    <!-- doctor section  -->
    <section class="doctor" id="doctor">
        <h1 class="heading">consult to our doctors</h1>
        
        <div class="box-container">
            <div class="box reveal">
                <img src="img/doc1.png" alt="">
                <h3>John Doe</h3>
                <span>senior expert</span>
                <div class="share">
                    <a href="#" class="fab fa-whatsapp"></a>
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box reveal">
                <img src="img/doc2.png" alt="">
                <h3>John Doe</h3>
                <span>senior expert</span>
                <div class="share">
                    <a href="#" class="fab fa-whatsapp"></a>
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box reveal">
                <img src="img/doc3.png" alt="">
                <h3>John Doe</h3>
                <span>senior expert</span>
                <div class="share">
                    <a href="#" class="fab fa-whatsapp"></a>
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section  -->
    <section class="footer">
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
    <a href="#home" class="scroll-top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- jquery cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
</body>
</html>
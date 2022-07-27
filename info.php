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
    <link rel="stylesheet" href="css/style4.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>More Info</title>
</head>
<body>

    <!-- header section  -->
    <header>
        <a href="index.php" class="logo">c<span class="fas fa-virus"></span>vid-19</a>

        <div id="menu" class="fas fa-bars" ></div>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="registration.php">make appointment</a>
            <a href="guidelines.php">Guidelines</a>
            <a class="active" href="info.php">More Info</a>
        </nav>
    </header>

    <!-- whatis section  -->
    <section class="whatis" id="whatis">
        <h1 class="heading">What is Covid-19?</h1>
        <div class="row box-container">
            <div class="col-md-6 box">
                <p>The coronavirus, or COVID-19, is inciting panic for a number of reasons. It's a new virus, meaning no one has immunity.It is highly contagious, meaning it spreads fast. Its novelty means that scientists aren't completely sure as to how it behaves since they have very little history to go on.</p>
            </div>
            <div class="col-md-6 box">
                <img src="img/virus.png" class="img-fluid" alt="">
            </div>
        </div>
    </section>

    <!-- FAQ section  -->
    <section class="faq" id="faq">
        <h1 class="heading">Covid Vaccine Related FAQ's</h1>

        <div class="container">
            <ul class="nav nav-pills nav-justified flex-column flex-md-row" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active flex-md-fill text-md-center" id="home-tab" data-bs-toggle="tab" data-bs-target="#generalInfo" type="button" role="tab" aria-controls="generalInfo" aria-selected="true">General Information</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link flex-md-fill text-md-center" id="profile-tab" data-bs-toggle="tab" data-bs-target="#vaccineSafety" type="button" role="tab" aria-controls="vaccineSafety" aria-selected="false">Vaccine Safety</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link flex-md-fill text-md-center" id="contact-tab" data-bs-toggle="tab" data-bs-target="#vaccineEfficiency" type="button" role="tab" aria-controls="vaccineEfficiency" aria-selected="false">Vaccine Efficiency</button>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="generalInfo" role="tabpanel" aria-labelledby="home-tab">
                    <div class="accordion form-control-lg accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    How does a vaccine work?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Vaccines reduce risks of getting a disease by working with your body’s natural defenses to build protection. <br><br>
                                    When you get a vaccine, your immune system responds in these ways: <br><br>
                                    <ul>
                                        <li>Recognizes the invading germ, such as the virus or bacteria.</li>
                                        <li>Produces antibodies. Antibodies are proteins produced naturally by the immune system to fight disease.</li>
                                        <li>Remembers the disease and how to fight it. If you are then exposed to the germ in the future, your immune system can quickly destroy it before you become unwell.</li>
                                    </ul>
                                    
                                    The vaccine is therefore a safe and clever way to produce an immune response in the body, without causing illness. Our immune systems are designed to remember. Once exposed to one or more doses of a vaccine, we typically remain protected against a disease for years, decades or even a lifetime. This is what makes vaccines so effective. Rather than treating a disease after it occurs, vaccines prevent us in the first instance from getting sick.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    How is the COVID-19 vaccine given?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    The COVID-19 vaccine is given through an injection in the upper arm muscle. Some COVID-19 vaccines are single-dose while others are given in two (2) doses three to four weeks apart.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Are all vaccines made against viruses?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    No! There are different types of germs that cause infection, and vaccines are made accordingly. For example, diseases like tuberculosis, tetanus, pneumonia, meningitis, and diphtheria are caused by bacteria; vaccines available for these work against respective bacteria. Measles, hepatitis, chicken pox, influenza, and now COVID-19 are viral diseases, with vaccines available. A vaccine against malaria, which is caused by another type of germ (plasmodium), is under development
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    Is it mandatory to have a COVID-19 antibodies test before getting vaccinated?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    No such obligation is under consideration at this point in time.
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="tab-pane fade" id="vaccineSafety" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="accordion form-control-lg accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    How will we know if COVID-19 vaccines are safe?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    There are many strict protections in place to help ensure that COVID-19 vaccines will be safe. Like all vaccines, COVID-19 vaccines have been and are being carried through a rigorous, multi-stage testing process, including large (phase III) trials that involved tens of thousands of people. These trials, which include people at high risk for COVID-19, are specifically designed to identify any common side effects or other safety concerns. If a clinical trial shows that a COVID-19 vaccine is safe and effective, a series of independent reviews of the efficacy and safety evidence is required, including regulatory review and approval in the country where the vaccine is manufactured, before WHO considers a vaccine product for prequalification. Part of this process also involves a review of all the safety evidence by the Global Advisory Committee on Vaccine Safety.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    What are the likely side effects of COVID-19 vaccine?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    The reported side effects of COVID-19 vaccine are minor. They include sore arm, muscle pain (possibly with local redness), fatigue or headache.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Can pregnant and breastfeeding/lactating women receive the vaccine?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Yes, both pregnant and breastfeeding/lactating women can now receive any of the COVID-19 vaccines available in Pakistan. The COVID-19 vaccines proved to be safe and effective for them during trials and use in general population.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    What if someone develops side effects after receiving the vaccine? Where can they register the complaint?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Complaints can be registered on our helpline number.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                    Will other vaccines help protect me from COVID-19?
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Currently, there is no evidence that any existing vaccines will protect against COVID-19.
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="tab-pane fade" id="vaccineEfficiency" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="accordion form-control-lg accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Will the COVID-19 vaccine stop the pandemic?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    The vaccine development and information about its effectiveness is a work in progress. The initial vaccines are reported to be protective against severe illness, a factor that will avert high numbers of deaths and pressure on health systems. More information is required, which we will have over time, to describe the role of vaccines in curbing the pandemic.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Do we still need to wear mask after getting the COVID-19 vaccine?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Yes. Wearing masks, washing hands and keeping a distance of 6 feet from others remain the cornerstone of protection from COVID-19, even when someone has received the vaccine..
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Are the COVID-19 vaccines currently available in Pakistan, authenticated?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Yes, all vaccines procured and administered are approved by the Drug Regulatory Authority of Pakistan (DRAP).
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    How will I know which COVID-19 vaccine is the best?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    All vaccines have gone through clinical trials and approved by the Drug Regulatory Authority of Pakistan (DRAP), as well as WHO under Emergency Utilization Listing (EUL) and are good to use.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                    Can children be vaccinated and what is the lower age limit for vaccination eligibility?
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    International health experts have allowed the emergency use of COVID-19 vaccines in individuals 18 years of age and older.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                    Do I need to wear a mask and avoid close contact with others if I have received 2 doses of the vaccine?
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Yes. While experts learn more about the protection that COVID-19 vaccines provide under real-life conditions, it will be important for everyone to continue using all the tools available to us to help stop this pandemic, like covering your mouth and nose with a mask, washing hands often, and staying at least 6 feet away from others.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                    What are the charges/cost of COVID-19 vaccine?
                                </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    The Government of Pakistan is providing the vaccine free of cost.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

    <a href="#whatis" class="scroll-top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- Bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- jquery cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script4.js"></script>

</body>
</html>
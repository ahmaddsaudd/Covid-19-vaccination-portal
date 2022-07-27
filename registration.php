<!DOCTYPE html>

<?php
include 'appointment_entries.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- JQuery Plugin -->
    <link rel="stylesheet" href="Plug-in/jquery-ui.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Register</title>
    
</head>
<body>
    <!-- header section  -->
    <header>
        <a href="index.php" class="logo">c<span class="fas fa-virus"></span>vid-19</a>

        <div id="menu" class="fas fa-bars" ></div>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a class="active register-btn" href="registration.php">Make Appointment</a>
            <a href="guidelines.php">Guidelines</a>
            <a href="info.php">More Info</a>
        </nav>
    </header>
    
   <?php
   if($submitted):
   ?>

        <!-- acknowledgement section  -->
        <section class="ack" id="ack">
            <div class="column">
                <div class="row wrapper">
                    <div class="col-10">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="ack-title">Request Submitted!</h1>
                                <p class="ack-para">Thankyou for getting yourself registered for Covid-19 Vaccination. You will soon receive a confirmation text with date and time of your appointment.</p>
                                <hr>
                            </div>
                            <div class="col-12 check">
                                <i class="far fa-check-circle"></i>
                            </div>
                            <div class="col-12">
                                <p class="ack-para qoute">Getting vaccinated is one of the most important ways to help stop this pandemic, but we still need to make sure we’re taking other precautions, like wearing a mask and practicing social distancing</p>
                            </div>
                            <div class="col-12">
                                <a href="index.php" class="btn-home">Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php
    else:
    ?>

        <!-- registration form section  -->
        <section class="registration" id="registration">
            <div class="container-fluid">
                <div class="row justify-content-center form-div">
                    <div class="col-10">
                        <form action="" method="POST" onsubmit="return validateForm()" id="myform" autocomplete="off">
                            <div class="row form-header">
                                <div class="col-12">
                                    <h1 class="header-title">Appointment Request</h1>
                                    <p class="header-para">Fill in your details correctly.</p>
                                    <hr>
                                </div>
                            </div>

                            <div class="row form-body">
                                <div class="accordion form-control-lg">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                General Information
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-md-11">
                                                        <h4>Full Name <span>*</span></h4>
                                                        <div class="row">
                                                            <div class="col-lg-5 name">
                                                                <div class="input-group input-group-lg full-name">
                                                                    <span class="input-group-text">First Name</span>
                                                                    <input autocomplete="autocomplete_off_hack_xfr4!k" type="text" aria-label="First name" class="form-control" id="fname" placeholder="john" name="first-name">
                                                                </div>
                                                                <div id="fnameError" class="form-text invalid-feedback error">
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="input-group input-group-lg full-name">
                                                                    <span class="input-group-text">Last Name</span>
                                                                    <input autocomplete="autocomplete_off_hack_xfr4!k" type="text" aria-label="Last name" class="form-control" id="lname" placeholder="doe" name="last-name">
                                                                </div>
                                                                <div id="lnameError" class="form-text invalid-feedback error">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                    
                                                    <div class="col-md-8">
                                                            <h4>CNIC <span>*</span></h4>
                                                            <div class="input-group input-group-lg cnic-m">
                                                                <input autocomplete="autocomplete_off_hack_xfr4!k" type="text" size="5" maxlength="5" class="form-control cnic-1 cnic" placeholder="XXXXX" name="cnic[]">
                                                                <span class="input-group-text cnic-span">-</span>
                                                                <input autocomplete="autocomplete_off_hack_xfr4!k" type="text" size="7" maxlength="7" class="form-control cnic-2 cnic" placeholder="XXXXXXX" name="cnic[]">
                                                                <span class="input-group-text cnic-span">-</span>
                                                                <input autocomplete="autocomplete_off_hack_xfr4!k" type="text" size="1" maxlength="1" class="form-control cnic-3 cnic" placeholder="X" name="cnic[]">
                                                            </div>
                                                            <div id="cnicError" class="form-text invalid-feedback error">
                                                                
                                                            </div>
                                                    </div>
                        
                                                    <div class="col-lg-5">
                                                        <h4>Date of Birth <span>*</span></h4>
                                                        <div class="input-group input-group-lg">
                                                            <input autocomplete="autocomplete_off_hack_xfr4!k" type="text" class="form-control datePicker" id="dob" name="date-of-birth">
                                                        </div>
                                                        <div id="dobError" class="form-text invalid-feedback error">
                                                                
                                                        </div>
                                                    </div>
                        
                                                    <div class="col-lg-6">
                                                        <h4>Gender <span>*</span></h4>
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="form-check form-control-lg">
                                                                    <input class="form-check-input gender" type="radio" name="gender" id="male" value="male">
                                                                    <label class="form-check-label" for="gender">
                                                                        Male
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="form-check form-control-lg">
                                                                    <input class="form-check-input gender" type="radio" name="gender" id="female" value="female">
                                                                    <label class="form-check-label" for="gender">
                                                                        Female
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="form-check form-control-lg">
                                                                    <input class="form-check-input gender" type="radio" name="gender" id="other" value="other">
                                                                    <label class="form-check-label" for="gender">
                                                                        Other
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="genderError" class="form-text invalid-feedback error">
                                                                
                                                        </div>
                                                    </div>
                        
                                                    <div class="col-lg-5">
                                                        <h4>Phone <span>*</span></h4>
                                                        <div class="input-group input-group-lg">
                                                            <span class="input-group-text">+92</span>
                                                            <input autocomplete="autocomplete_off_hack_xfr4!k" type="text" size="10" maxlength="10" aria-label="Phone" class="form-control" id="phone" placeholder="3001234567" name="phone">
                                                        </div>
                                                        <div id="phoneError" class="form-text invalid-feedback error">
                                                            
                                                        </div>
                                                    </div>
                        
                                                    <div class="col-lg-6">
                                                        <h4>Email <span>*</span></h4>
                                                        <input autocomplete="autocomplete_off_hack_xfr4!k" type="text" class="form-control form-control-lg" id="email" aria-describedby="emailHelp" placeholder="example@email.com" name="email">
                                                        <div id="emailError" class="form-text invalid-feedback error">
                                                            
                                                        </div>
                                                    </div>
                        
                                                    <div class="col-md-11">
                                                        <h4>Address</h4>
                                                        <div class="row">
                                                            <div class="col-lg-11">
                                                                <div class="input-group input-group-lg mb-3">
                                                                    <span class="input-group-text" id="basic-addon1">Line 1</span>
                                                                    <input autocomplete="autocomplete_off_hack_xfr4!k" type="text" class="form-control" aria-label="Address" aria-describedby="basic-addon1" id="address1" name="address-line1">
                                                                </div>
                                                            </div>
                        
                                                            <div class="col-lg-11">
                                                                <div class="input-group input-group-lg mb-3">
                                                                    <span class="input-group-text" id="basic-addon1">Line 2</span>
                                                                    <input autocomplete="autocomplete_off_hack_xfr4!k" type="text" class="form-control" aria-label="Address" aria-describedby="basic-addon1" id="address2" name="address-line2">
                                                                </div>
                                                            </div>
                        
                                                            <div class="col-xl-3">
                                                                <div class="input-group input-group-lg mb-3">
                                                                    <label class="input-group-text" for="city">City</label>
                                                                    <select name="city" class="form-select" id="city">
                                                                        <option selected>Choose...</option>
                                                                        <option value="Karachi">Karachi</option>
                                                                        <option value="Lahore">Lahore</option>
                                                                        <option value="Islamabad">Islamabad</option>
                                                                        <option value="Peshawar">Peshawar</option>
                                                                        <option value="Rawalpindi">Rawalpindi</option>
                                                                        <option value="Multan">Multan</option>
                                                                        <option value="Faisalabad">Faisalabad</option>
                                                                        <option value="Gujranwala">Gujranwala</option>
                                                                        <option value="Quetta">Quetta</option>
                                                                        <option value="Hyderabad">Hyderabad</option>
                                                                        <option value="Sialkot">Sialkot</option>
                                                                        <option value="Bahawalpur">Bahawalpur</option>
                                                                        <option value="Sahiwal">Sahiwal</option>
                                                                        <option value="Sargodha">Sargodha</option>
                                                                        <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                                                                        <option value="Sheikhupura">Sheikhupura</option>
                                                                        <option value="Sukkur">Sukkur</option>
                                                                        <option value="D G Khan">D G Khan</option>
                                                                        <option value="Abbottabad">Abbottabad</option>
                                                                        <option value="Kasur">Kasur</option>
                                                                        <option value="Larkana">Larkana</option>
                                                                        <option value="Chiniot">Chiniot</option>
                                                                        <option value="Jhelum">Jhelum</option>
                                                                        <option value="Dera Ismail Khan">Dera Ismail Khan</option>
                                                                        <option value="Chakwal">Chakwal</option>
                                                                        <option value="Kohat">Kohat</option>
                                                                        <option value="Gawadar">Gawadar</option>
                                                                        <option value="Mirpur Khas">Mirpur Khas</option>
                                                                        <option value="Khairpur">Khairpur</option>
                                                                        <option value="Attock">Attock</option>
                                                                        <option value="Mianwali">Mianwali</option>
                                                                        <option value="Nawabshah">Nawabshah</option>
                                                                        <option value="Hafizabad">Hafizabad</option>
                                                                        <option value="Nowshera">Nowshera</option>
                                                                        <option value="Sadiqabad">Sadiqabad</option>
                                                                        <option value="Swat">Swat</option>
                                                                        <option value="Khuzdar">Khuzdar</option>
                                                                        <option value="Burewala">Burewala</option>
                                                                        <option value="Gilgit">Gilgit</option>
                                                                        <option value="Chitral">Chitral</option>
                                                                        <option value="Muzaffarabad">Muzaffarabad</option>
                                                                        <option value="Muzaffargarh">Muzaffargarh</option>
                                                                        
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <div class="input-group input-group-lg mb-3">
                                                                    <label class="input-group-text" for="state">Province</label>
                                                                    <select name="province" class="form-select" id="state">
                                                                        <option selected>Choose...</option>
                                                                        <option value="Sindh">Sindh</option>
                                                                        <option value="Punjab">Punjab</option>
                                                                        <option value="Khyber Pakhtunkhwa">Khyber Pakhtunkhwa</option>
                                                                        <option value="Balochistan">Balochistan</option>
                                                                        <option value="Islamabad">Islamabad</option>
                                                                        <option value="Gilgit-Baltistan">Gilgit-Baltistan</option> 
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <div class="input-group input-group-lg mb-3">
                                                                    <label class="input-group-text" for="zipCode">Zip Code</label>
                                                                    <input autocomplete="autocomplete_off_hack_xfr4!k" type="text" class="form-control" aria-label="zipCode" aria-describedby="basic-addon1" id="zipCode" name="zip-code">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Medical History
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-lg-11">
                                                        <h4>Please check all symptoms that apply: <span>*</span></h4>
                                                        <div class="row">
                                                            <div class="col-md-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input symptom-check" type="checkbox" value="none" name="symptom[]">
                                                                    <label class="form-check-label" for="symptom">
                                                                        None
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input symptom-check" type="checkbox" value="Loss of taste or smell" name="symptom[]">
                                                                    <label class="form-check-label" for="symptom">
                                                                        Loss of taste or smell
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input symptom-check" type="checkbox" value="Difficulty breathing" name="symptom[]">
                                                                    <label class="form-check-label" for="symptom">
                                                                        Difficulty breathing
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input symptom-check" type="checkbox" value="Cough" name="symptom[]">
                                                                    <label class="form-check-label" for="symptom">
                                                                        Cough
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input symptom-check" type="checkbox" value="Runny Nose" name="symptom[]">
                                                                    <label class="form-check-label" for="symptom">
                                                                        Runny Nose
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input symptom-check" type="checkbox" value="Body Aches" name="symptom[]">
                                                                    <label class="form-check-label" for="symptom">
                                                                        Body Aches
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input symptom-check" type="checkbox" value="Fever" name="symptom[]">
                                                                    <label class="form-check-label" for="symptom">
                                                                        Fever
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input symptom-check" type="checkbox" value="Diarrhea" name="symptom[]">
                                                                    <label class="form-check-label" for="symptom">
                                                                        Diarrhea
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input symptom-check" type="checkbox" value="Sore throat" name="symptom[]">
                                                                    <label class="form-check-label" for="symptom">
                                                                        Sore throat
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-11 others">
                                                                <div class="form-check">
                                                                    <input class="form-check-input symptom-check" type="checkbox" value="other" name="symptom[]">
                                                                    <label class="form-check-label" for="symptom">
                                                                        Other:
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-11">
                                                                <div class="mb-3">
                                                                    <textarea class="form-control form-control-lg" id="symptom-textbox" name="other-symptom" rows="3"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="symptomError" class="form-text invalid-feedback error">
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-11">
                                                        <h4>Have you been diagnosed with Covid-19? <span>*</span></h4>
                                                        <div class="form-check form-control-lg">
                                                            <input class="form-check-input covid-check" type="radio" name="covid" id="no" value="no">
                                                            <label class="form-check-label" for="covid">
                                                                No
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-control-lg">
                                                            <input class="form-check-input covid-check" type="radio" name="covid" id="yes" value="yes">
                                                            <label class="form-check-label" for="covid">
                                                                Yes
                                                            </label>
                                                        </div>
                                                        <p>If yes, please provide further details (treatment received, hospitalized, etc.)</p>
                                                        <div class="col-lg-11">
                                                            <div class="mb-3">
                                                                <textarea class="form-control form-control-lg" id="covid-textbox" rows="4" name="covid-details"></textarea>
                                                            </div>
                                                        </div>
                                                        <div id="covidError" class="form-text invalid-feedback error">
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-11">
                                                        <h4>Medical History <span>*</span></h4>
                                                        <div class="row">
                                                            <div class="col-sm-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input medical-check" type="checkbox" value="none" name="medical[]">
                                                                    <label class="form-check-label" for="medical">
                                                                        None
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input medical-check" type="checkbox" value="allergies" name="medical[]">
                                                                    <label class="form-check-label" for="medical">
                                                                        Allergies
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input medical-check" type="checkbox" value="anemia" name="medical[]">
                                                                    <label class="form-check-label" for="medical">
                                                                        Anemia
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input medical-check" type="checkbox" value="angina" name="medical[]">
                                                                    <label class="form-check-label" for="medical">
                                                                        Angina
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input medical-check" type="checkbox" value="anxiety" name="medical[]">
                                                                    <label class="form-check-label" for="medical">
                                                                        Anxiety
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input medical-check" type="checkbox" value="arthritis" name="medical[]">
                                                                    <label class="form-check-label" for="medical">
                                                                        Arthritis
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input medical-check" type="checkbox" value="asthma" name="medical[]">
                                                                    <label class="form-check-label" for="medical">
                                                                        Asthma
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input medical-check" type="checkbox" value="atrial fibrillation" name="medical[]">
                                                                    <label class="form-check-label" for="medical">
                                                                        Atrial Fibrillation
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input medical-check" type="checkbox" value="blood clots" name="medical[]">
                                                                    <label class="form-check-label" for="medical">
                                                                        Blood Clots
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input medical-check" type="checkbox" value="cancer" name="medical[]">
                                                                    <label class="form-check-label" for="medical">
                                                                        Cancer
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input medical-check" type="checkbox" value="COPD" name="medical[]">
                                                                    <label class="form-check-label" for="medical">
                                                                        COPD
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input medical-check" type="checkbox" value="coronary artery disease" name="medical[]">
                                                                    <label class="form-check-label" for="medical">
                                                                        Coronary Artery Disease
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input medical-check" type="checkbox" value="cerebrovascular accident" name="medical[]">
                                                                    <label class="form-check-label" for="medical">
                                                                        Cerebrovascular Accident
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input medical-check" type="checkbox" value="crohn's disease" name="medical[]">
                                                                    <label class="form-check-label" for="medical">
                                                                        Crohn's Disease
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input medical-check" type="checkbox" value="depression" name="medical[]">
                                                                    <label class="form-check-label" for="medical">
                                                                        Depression
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input medical-check" type="checkbox" value="diabetes" name="medical[]">
                                                                    <label class="form-check-label" for="medical">
                                                                        Diabetes
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input medical-check" type="checkbox" value="gallbladder disease" name="medical[]">
                                                                    <label class="form-check-label" for="medical">
                                                                        Gallbladder Disease
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input medical-check" type="checkbox" value="GERD (Reflux)" name="medical[]">
                                                                    <label class="form-check-label" for="medical">
                                                                        GERD (Reflux)
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input medical-check" type="checkbox" value="hepatitis c" name="medical[]">
                                                                    <label class="form-check-label" for="medical">
                                                                        Hepatitis C
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input medical-check" type="checkbox" value="hyperlipidemia" name="medical[]">
                                                                    <label class="form-check-label" for="medical">
                                                                        Hyperlipidemia
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input medical-check" type="checkbox" value="hypertension" name="medical[]">
                                                                    <label class="form-check-label" for="medical">
                                                                        Hypertension
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input medical-check" type="checkbox" value="irritable bowel disease" name="medical[]">
                                                                    <label class="form-check-label" for="medical">
                                                                        Irritable Bowel Disease
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input medical-check" type="checkbox" value="liver disease" name="medical[]">
                                                                    <label class="form-check-label" for="medical">
                                                                        Liver Disease
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input medical-check" type="checkbox" value="migraine headaches" name="medical[]">
                                                                    <label class="form-check-label" for="medical">
                                                                        Migraine Headaches
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input medical-check" type="checkbox" value="myocardial infarction" name="medical[]">
                                                                    <label class="form-check-label" for="medical">
                                                                        Myocardial Infarction
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input medical-check" type="checkbox" value="osteoporosis" name="medical[]">
                                                                    <label class="form-check-label" for="medical">
                                                                        Osteoporosis
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input medical-check" type="checkbox" value="peptic ulcer disease" name="medical[]">
                                                                    <label class="form-check-label" for="medical">
                                                                        Peptic Ulcer Disease
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input medical-check" type="checkbox" value="renal disease" name="medical[]">
                                                                    <label class="form-check-label" for="medical">
                                                                        Renal Disease
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input medical-check" type="checkbox" value="seizure disorder" name="medical[]">
                                                                    <label class="form-check-label" for="medical">
                                                                        Seizure Disorder
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input medical-check" type="checkbox" value="thyroid disease" name="medical[]">
                                                                    <label class="form-check-label" for="medical">
                                                                        Thyroid Disease
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-11 others">
                                                                <div class="form-check">
                                                                    <input class="form-check-input medical-check" type="checkbox" value="other" name="medical[]">
                                                                    <label class="form-check-label" for="medical">
                                                                        Other:
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-11">
                                                                <div class="mb-3">
                                                                    <textarea class="form-control form-control-lg" id="medical-textbox" rows="4" name="other-medical"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="medicalError" class="form-text invalid-feedback error">
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-11">
                                                        <h4>Do you use tobacco?</h4>
                                                        <div class="row">
                                                            <div class="col-md-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="tobacco" value="no">
                                                                    <label class="form-check-label" for="tobacco">
                                                                    No
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="tobacco" value="daily">
                                                                    <label class="form-check-label" for="tobacco">
                                                                    Daily
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="tobacco" value="weekly">
                                                                    <label class="form-check-label" for="tobacco">
                                                                    Weekly
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="tobacco" value="less">
                                                                    <label class="form-check-label" for="tobacco">
                                                                    Less
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="tobacco" value="former user">
                                                                    <label class="form-check-label" for="tobacco">
                                                                    Former User
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-11">
                                                        <h4>Do you suffer from any known allergies? <span>*</span></h4>
                                                        <div class="form-check form-control-lg">
                                                            <input class="form-check-input allergy-check" type="radio" name="allergy" value="no">
                                                            <label class="form-check-label" for="allergy">
                                                            No
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-control-lg">
                                                            <input class="form-check-input allergy-check" type="radio" name="allergy" value="yes">
                                                            <label class="form-check-label" for="allergy">
                                                            Yes
                                                            </label>
                                                        </div>
                                                        <p>If Yes, what causes your allergic reactions?</p>
                                                        <div class="col-lg-11">
                                                            <div class="mb-3">
                                                                <textarea class="form-control form-control-lg" id="allergy-textbox" rows="3" name="allergy-details"></textarea>
                                                            </div>
                                                        </div>
                                                        <div id="allergyError" class="form-text invalid-feedback error">
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-11">
                                                        <h4>Please list in greater detail your specific allergy and allergic reactions.</h4>
                                                        <div class="col-lg-11">
                                                            <div class="mb-3">
                                                                <textarea class="form-control form-control-lg" rows="4" name="allergy-greater-details"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-11">
                                                        <h4>Prescribing Doctor's Name</h4>
                                                        <div class="row">
                                                            <div class="col-lg-6 name">
                                                                <div class="input-group input-group-lg full-name">
                                                                    <span class="input-group-text">First Name</span>
                                                                    <input autocomplete="autocomplete_off_hack_xfr4!k" type="text" aria-label="Doctor first name" class="form-control" id="docfname" placeholder="john" name="doc-first-name">
                                                                </div>
                                                                <div id="docfnameError" class="form-text invalid-feedback error">
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="input-group input-group-lg full-name">
                                                                    <span class="input-group-text">Last Name</span>
                                                                    <input autocomplete="autocomplete_off_hack_xfr4!k" type="text" aria-label="Doctor last name" class="form-control" id="doclname" placeholder="doe" name="doc-last-name">
                                                                </div>
                                                                <div id="doclnameError" class="form-text invalid-feedback error">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-5">
                                                        <h4>Prescribing Doctor's Phone Number</h4>
                                                        <div class="input-group input-group-lg">
                                                            <span class="input-group-text">+92</span>
                                                            <input autocomplete="autocomplete_off_hack_xfr4!k" type="text" size="10" maxlength="10" aria-label="Doctor phone" class="form-control" id="docphone" placeholder="3001234567" name="doc-phone">
                                                        </div>
                                                        <div id="docphoneError" class="form-text invalid-feedback error">

                                                        </div>
                                                    </div>

                                                    <div class="col-lg-11 terms">
                                                        <div class="col-sm-auto">
                                                            <div class="form-check">
                                                                <input class="form-check-input term-check" type="checkbox" value="agree" name="terms">
                                                                <label class="form-check-label" for="terms">
                                                                    I HEREBY AGREE AND CONFIRM THAT ALL MY PERSONAL INFORMATION AND DATA ABOVE ARE ACCURATE.
                                                                </label>
                                                                <div id="termError" class="form-text invalid-feedback error">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <input class="btn btn-lg" type="submit" id="submit" value="submit" name="submit">
                            <input class="btn btn-lg" type="reset" value="Reset">
                        </form>
                    </div>
                </div>
            </div>
        </section>

    <?php
    endif;
    ?>
    
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
    <a href="#registration" class="scroll-top">
        <i class="fas fa-arrow-up"></i>
    </a>


    <!-- Bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- jquery cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- JQuery Plugin  -->
    <script src="Plug-in/jquery-3.6.0.min.js"></script>
    <script src="Plug-in/jquery-ui.min.js"></script>


    <!-- custom js file link  -->
    <script src="js/script2.js"></script>
    <script src="js/form.js"></script>

    
</body>
</html>
<?php

require 'connection.php';
$submitted = false;

if(isset($_POST['submit']) && isset($_POST['first-name']) && isset($_POST['last-name']) && isset($_POST['cnic']) && isset($_POST['date-of-birth']) && isset($_POST['gender']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['address-line1']) && isset($_POST['address-line2']) && isset($_POST['city']) && isset($_POST['province']) && isset($_POST['zip-code']) && isset($_POST['symptom']) && isset($_POST['other-symptom']) && isset($_POST['covid']) && isset($_POST['covid-details']) && isset($_POST['medical']) && isset($_POST['other-medical']) && isset($_POST['tobacco']) && isset($_POST['allergy']) && isset($_POST['allergy-details']) && isset($_POST['allergy-greater-details']) && isset($_POST['doc-first-name']) && isset($_POST['doc-last-name']) && isset($_POST['doc-phone'])){

    $fname = $_POST['first-name'];
    $lname = $_POST['last-name'];
    $cnic = implode('-',$_POST['cnic']);
    $dob = $_POST['date-of-birth'];
    $gender = $_POST['gender'];
    $phone = '+92'.$_POST['phone'];
    $email = $_POST['email'];
    $address1 = $_POST['address-line1'];
    $address2 = $_POST['address-line2'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $zip = $_POST['zip-code'];

    $symptom = implode(', ', $_POST['symptom']);
    $otherSymptom = $_POST['other-symptom'];
    $covid = $_POST['covid'];
    $covidDetails = $_POST['covid-details'];
    $medical = implode(', ', $_POST['medical']);
    $otherMedical = $_POST['other-medical'];
    $tobacco = $_POST['tobacco'];
    $allergy = $_POST['allergy'];
    $allergyDetails = $_POST['allergy-details'];
    $greaterDetails = $_POST['allergy-greater-details'];
    $docFname = $_POST['doc-first-name'];
    $docLname = $_POST['doc-last-name'];
    $docPhone = '+92'.$_POST['doc-phone'];



    $query1 = " INSERT INTO `general_information`(`first-name`, `last-name`, `cnic`, `date-of-birth`, `gender`, `phone`, `email`, `address-line1`, `address-line2`, `city`, `province`, `zip-code`) VALUES ('$fname','$lname','$cnic','$dob','$gender','$phone','$email','$address1','$address2','$city','$province','$zip') ";

    $query = mysqli_query($conn, $query1);

    if($query){

        $query2 = "INSERT INTO `medical_history`(`symptom`, `other-symptom`, `covid`, `covid-details`, `medical`, `other-medical`, `tobacco`, `allergy`, `allergy-details`, `allergy-greater-details`, `doc-first-name`, `doc-last-name`, `doc-phone`) VALUES ('$symptom','$otherSymptom','$covid','$covidDetails','$medical','$otherMedical','$tobacco','$allergy','$allergyDetails','$greaterDetails','$docFname', '$docLname', '$docPhone') ";

        $result = mysqli_query($conn, $query2);

    }
    $submitted = true;
}

?>
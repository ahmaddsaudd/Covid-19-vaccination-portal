const fnameValidate = () => {
    if($('#fname').val() == ''){
        $('#fnameError').html('First name is required');
        $('#fnameError').css('display','block');
        $('#fname').addClass('is-invalid');
        $('#fname').focus();
        return false;
    }else if(!validateName($('#fname').val())){
        $('#fnameError').html('Incorrect format! Please use letters only(A-Z, a-z)');
        $('#fnameError').css('display','block');
        $('#fname').addClass('is-invalid');
        $('#fname').focus();
        return false;
    }else{
        $('#fnameError').css('display','none');
        $('#fname').removeClass('is-invalid');
        $('#fname').addClass('is-valid');
        return true
    }
}

const lnameValidate = () => {
    if($('#lname').val() == ''){
        $('#lnameError').html('Last name is required');
        $('#lnameError').css('display','block');
        $('#lname').addClass('is-invalid');
        $('#lname').focus();
        return false;
    }else if(!validateName($('#lname').val())){
        $('#lnameError').html('Incorrect format! Please use letters only(A-Z, a-z)');
        $('#lnameError').css('display','block');
        $('#lname').addClass('is-invalid');
        $('#lname').focus();
        return false;
    }else{
        $('#lnameError').css('display','none');
        $('#lname').removeClass('is-invalid');
        $('#lname').addClass('is-valid');
        return true
    }
}

const cnicValidate1 = () => {
    if($('.cnic-1').val() == ''){
        $('#cnicError').html('CNIC is required');
        $('#cnicError').css('display','block');
        $('.cnic-1').addClass('is-invalid');
        $('.cnic-1').focus();
        return false;
    }
    else if(!validateCnic($('.cnic-1').val())){
        $('#cnicError').html('Incorrect format! Please use numbers only(0-9)');
        $('#cnicError').css('display','block');
        $('.cnic-1').addClass('is-invalid');
        $('.cnic-1').focus();
        return false;
    }
    else{
        $('#cnicError').css('display','none');
        $('.cnic-1').removeClass('is-invalid');
        $('.cnic-1').addClass('is-valid');
        return true;
    }
}

const cnicValidate2 = () => {
    if($('.cnic-2').val() == ''){
        $('#cnicError').html('CNIC is required');
        $('#cnicError').css('display','block');
        $('.cnic-2').addClass('is-invalid');
        $('.cnic-2').focus();
        return false;
    }

    else if(!validateCnic($('.cnic-2').val())){
        $('#cnicError').html('Incorrect format! Please use numbers only(0-9)');
        $('#cnicError').css('display','block');
        $('.cnic-2').addClass('is-invalid');
        $('.cnic-2').focus();
        return false;
    }
    else{
        $('#cnicError').css('display','none');
        $('.cnic-2').removeClass('is-invalid');
        $('.cnic-2').addClass('is-valid');
        return true;
    }
}

const cnicValidate3 = () => {
    if($('.cnic-3').val() == ''){
        $('#cnicError').html('CNIC is required');
        $('#cnicError').css('display','block');
        $('.cnic-3').addClass('is-invalid');
        $('.cnic-3').focus();
        return false;
    }
    else if(!validateCnic($('.cnic-3').val())){
        $('#cnicError').html('Incorrect format! Please use numbers only(0-9)');
        $('#cnicError').css('display','block');
        $('.cnic-3').addClass('is-invalid');
        $('.cnic-3').focus();
        return false;
    }
    else{
        $('#cnicError').css('display','none');
        $('.cnic-3').removeClass('is-invalid');
        $('.cnic-3').addClass('is-valid');
        return true;
    }
}

const dobValidate = () => {
    if($('#dob').val() == ''){
        $('#dobError').html('Date of Birth is required');
        $('#dobError').css('display','block');
        $('#dob').addClass('is-invalid');
        $('#dob').focus();
        return false;
    }else{
        $('#dobError').css('display','none');
        $('#dob').removeClass('is-invalid');
        $('#dob').addClass('is-valid');
        return true;
    }
}

const genderValidate = () => {
    if($('.gender:checked').length == ''){
        $('#genderError').html('Gender is required');
        $('#genderError').css('display','block');
        $('.gender').addClass('is-invalid');
        $('.gender').focus();
        return false;
    }else{
        $('#genderError').css('display','none');
        $('.gender').removeClass('is-invalid');
        $('.gender').addClass('is-valid');
        return true;
    }
}

const phoneValidate = () => {
    if($('#phone').val() == ''){
        $('#phoneError').html('Phone number is required');
        $('#phoneError').css('display','block');
        $('#phone').addClass('is-invalid');
        $('#phone').focus();
        return false;
    }else if(!validatePhone($('#phone').val())){
        $('#phoneError').html('Incorrect format! Please use numbers only(0-9)');
        $('#phoneError').css('display','block');
        $('#phone').addClass('is-invalid');
        $('#phone').focus();
        return false;
    }else{
        $('#phoneError').css('display','none');
        $('#phone').removeClass('is-invalid');
        $('#phone').addClass('is-valid');
        return true;
    }
}

const emailValidate = () => {
    if($('#email').val() == ''){
        $('#emailError').html('Email Address is required');
        $('#emailError').css('display','block');
        $('#email').addClass('is-invalid');
        $('#email').focus();
        return false;
    }else if(!validateEmail($('#email').val())){
        $('#emailError').html('Incorrect email format!');
        $('#emailError').css('display','block');
        $('#email').addClass('is-invalid');
        $('#email').focus();
        return false;
    }else{
        $('#emailError').css('display','none');
        $('#email').removeClass('is-invalid');
        $('#email').addClass('is-valid');
        return true;
    }
}

const symptomValidate = () => {

    if($('.symptom-check:checked').length == ''){
        $('#symptomError').html('Please select at least one option');
        $('#symptomError').css('display','block');
        $('.symptom-check').addClass('is-invalid');
        $('.symptom-check').focus();
        return false;
    }
    else if($('.symptom-check[value=other]').is(':checked')){
        if($('#symptom-textbox').val() == ''){
            $('#symptomError').html('Please enter other symptoms');
            $('#symptomError').css('display','block');
            $('#symptom-textbox').addClass('is-invalid');
            $('.symptom-check').removeClass('is-invalid');
            $('.symptom-textbox').focus();
            return false;
        }else{
            $('#symptomError').css('display','none');
            $('#symptom-textbox').removeClass('is-invalid');
            $('#symptom-textbox').addClass('is-valid');
            return true;
        }
    }
    else{
        $('#symptomError').css('display','none');
        $('.symptom-check').removeClass('is-invalid');
        $('.symptom-check').addClass('is-valid');
        $('#symptom-textbox').removeClass('is-invalid');
        return true;
    }
}

const covidValidate = () => {
    if($('.covid-check:checked').length == ''){
        $('#covidError').html('Please select an option');
        $('#covidError').css('display','block');
        $('.covid-check').addClass('is-invalid');
        $('.covid-check').focus();
        return false;
    }
    else if($('.covid-check[value=yes]').is(':checked')){
        if($('#covid-textbox').val() == ''){
            $('#covidError').html('Please enter details');
            $('#covidError').css('display','block');
            $('#covid-textbox').addClass('is-invalid');
            $('.covid-check').removeClass('is-invalid');
            $('.covid-textbox').focus();
            return false;
        }else{
            $('#covidError').css('display','none');
            $('#covid-textbox').removeClass('is-invalid');
            $('#covid-textbox').addClass('is-valid');
            return true;
        }
    }
    else{
        $('#covidError').css('display','none');
        $('.covid-check').removeClass('is-invalid');
        $('.covid-check').addClass('is-valid');
        $('#covid-textbox').removeClass('is-invalid');
        return true;
    }
}

const medicalValidate = () => {
    if($('.medical-check:checked').length == ''){
        $('#medicalError').html('Please select at least one option');
        $('#medicalError').css('display','block');
        $('.medical-check').addClass('is-invalid');
        $('.medical-check').focus();
        return false;
    }
    else if($('.medical-check[value=other]').is(':checked')){
        if($('#medical-textbox').val() == ''){
            $('#medicalError').html('Please enter other medical history');
            $('#medicalError').css('display','block');
            $('#medical-textbox').addClass('is-invalid');
            $('.medical-check').removeClass('is-invalid');
            $('.medical-textbox').focus();
            return false;
        }else{
            $('#medicalError').css('display','none');
            $('#medical-textbox').removeClass('is-invalid');
            $('#medical-textbox').addClass('is-valid');

            return true;
        }
    }

    else{
        $('#medicalError').css('display','none');
        $('.medical-check').removeClass('is-invalid');
        $('.medical-check').addClass('is-valid');
        $('#medical-textbox').removeClass('is-invalid');
        return true;
    }
}

const allergyValidate = () => {
    if($('.allergy-check:checked').length == ''){
        $('#allergyError').html('Please select an option');
        $('#allergyError').css('display','block');
        $('.allergy-check').addClass('is-invalid');
        $('.allergy-check').focus();
        return false;
    }
    else if($('.allergy-check[value=yes]').is(':checked')){
        if($('#allergy-textbox').val() == ''){
            $('#allergyError').html('Please enter details');
            $('#allergyError').css('display','block');
            $('#allergy-textbox').addClass('is-invalid');
            $('.allergy-check').removeClass('is-invalid');
            $('.allergy-textbox').focus();
            return false;
        }else{
            $('#allergyError').css('display','none');
            $('#allergy-textbox').removeClass('is-invalid');
            $('#allergy-textbox').addClass('is-valid');
            return true;
        }
    }
    
    else{
        $('#allergyError').css('display','none');
        $('.allergy-check').removeClass('is-invalid');
        $('.allergy-check').addClass('is-valid');
        $('#allergy-textbox').removeClass('is-invalid');
        return true;
    }
}

const docfnameValidate = () => {
    if($('#docfname').val() == ''){
        $('#docfnameError').css('display','none');
        $('#docfname').removeClass('is-invalid')
        return true;
    }else if(!validatedocName($('#docfname').val())){
        $('#docfnameError').html('Incorrect format! Please use letters only(A-Z, a-z)');
        $('#docfnameError').css('display','block');
        $('#docfname').addClass('is-invalid');
        $('#docfname').focus();
        return false;
    }else{
        $('#docfnameError').css('display','none');
        $('#docfname').removeClass('is-invalid');
        $('#docfname').addClass('is-valid');
        return true;
    }
}

const doclnameValidate = () => {
    if($('#doclname').val() == ''){
        $('#doclnameError').css('display','none');
        $('#doclname').removeClass('is-invalid');
        return true;
    }else if(!validatedocName($('#doclname').val())){
        $('#doclnameError').html('Incorrect format! Please use letters only(A-Z, a-z)');
        $('#doclnameError').css('display','block');
        $('#doclname').addClass('is-invalid');
        $('#doclname').focus();
        return false;
    }else{
        $('#doclnameError').css('display','none');
        $('#doclname').removeClass('is-invalid');
        $('#doclname').addClass('is-valid');
        return true;
    }
}

const docphoneValidate = () => {
    if($('#docphone').val() == ''){
        $('#docphoneError').css('display','none');
        $('#docphone').removeClass('is-invalid');
        return true;
    }else if(!validatePhone($('#docphone').val())){
        $('#docphoneError').html('Incorrect format! Please use numbers only(0-9)');
        $('#docphoneError').css('display','block');
        $('#docphone').addClass('is-invalid');
        $('#docphone').focus();
        return false;
    }else{
        $('#docphoneError').css('display','none');
        $('#docphone').removeClass('is-invalid');
        $('#docphone').addClass('is-valid');
        return true;
    }
}

const termsValidate = () => {
    if($('.term-check:checked').length == ''){
        $('#termError').html('You have to agree with the terms to move forward');
        $('#termError').css('display','block');
        $('.term-check').addClass('is-invalid');
        $('.term-check').focus();
        return false;
    }else{
        $('#termError').css('display','none');
        $('.term-check').removeClass('is-invalid');
        $('.term-check').addClass('is-valid');
        return true;
    }
}

//form validation
const validateForm = () => {

    let valid = true;

    //terms
    if(!termsValidate()) valid = false;

    //doctor phone
    if(!docphoneValidate()) valid = false;

    // doctor last name
    if(!doclnameValidate()) valid = false;

    // doctor first name
    if(!docfnameValidate()) valid = false;

    // allergy
    if(!allergyValidate()) valid = false;

    //medical
    if(!medicalValidate()) valid = false;
    
    //covid
    if(!covidValidate()) valid = false;

    //symptoms
    if(!symptomValidate()) valid = false;

    //email
    if(!emailValidate()) valid = false;

    //phone
    if(!phoneValidate()) valid = false;

    //gender
    if(!genderValidate()) valid = false;

    // DoB
    if(!dobValidate()) valid = false;

    //cnic
    if(!cnicValidate3()) valid = false;
    if(!cnicValidate2()) valid = false;
    if(!cnicValidate1()) valid = false;

    //last name
    if(!lnameValidate()) valid = false;

    // first name
    if(!fnameValidate()) valid = false;
    
    return valid;
}

//pattern validation
const validateEmail = (email) => {
    let pattern = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    return pattern.test(email);
}

const validateName = (name) => {
    let pattern = /^[a-zA-Z ]{2,30}$/;
    return pattern.test(name);
}

const validatedocName = (docname) => {
    let pattern = /^[a-zA-Z ]{0,30}$/;
    return pattern.test(docname);
}

const validateCnic = (cnic) => {
    let pattern = /^\d*\.?\d*$/;
    return pattern.test(cnic);
}

const validatePhone = (phone) => {
    let pattern = /^\d{10}$/;
    return pattern.test(phone);
}

//on input validation after submitting

$('#submit').on('click',function(){
    $('#fname').on('input', function(){
        fnameValidate();
    });
    $('#lname').on('input', function(){
        lnameValidate();
    });
    $('.cnic-1').on('input', function(){
        cnicValidate1();
    });
    $('.cnic-2').on('input', function(){
        cnicValidate2();
    });
    $('.cnic-3').on('input', function(){
        cnicValidate3();
    });
    $('#dob').on('input', function(){
        dobValidate();
    });
    $('.gender').on('input', function(){
        genderValidate();
    });
    $('#phone').on('input', function(){
        phoneValidate();
    });
    $('#email').on('input', function(){
        emailValidate();
    });
    $('.symptom-check, #symptom-textbox').on('input', function(){
        symptomValidate();
    });
    $('.covid-check, #covid-textbox').on('input', function(){
        covidValidate();
    });
    $('.medical-check, #medical-textbox').on('input', function(){
        medicalValidate();
    });
    $('.allergy-check, #allergy-textbox').on('input', function(){
        allergyValidate();
    });
    $('#docfname').on('input', function(){
        docfnameValidate();
    });
    $('#doclname').on('input', function(){
        doclnameValidate();
    });
    $('#docphone').on('input', function(){
        docphoneValidate();
    });
    $('.term-check').on('input', function(){
        termsValidate();
    });
})

$(document).ready(function(){
    
    //auto-tab on cnic
    const el = $('.cnic');
    const inputLength = el.length;

    Array.prototype.forEach.call(el, function(e, index){
        $(e).on('keyup', function(e){
            const maxlength = $(e.target).attr('maxlength');
            const length = $(e.target).val().length;
            if(maxlength == length && index < (inputLength-1)){
                el[index + 1].focus();
            }
        })
    })

    //date picker
    $('.datePicker').datepicker({
        dateFormat: 'yy/mm/dd',
        changeMonth: true,
        changeYear: true,
        maxDate: '-18Y'
    });
})
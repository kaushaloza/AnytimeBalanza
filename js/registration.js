var firstNameError = document.getElementById('first-name-error');
var lastNameError = document.getElementById('last-name-error');
var emailError = document.getElementById('email-error');
var roleError = document.getElementById('role-error');
var passwordError = document.getElementById('password-error');
var confirmPasswordError = document.getElementById('confirm-password-error');
var phoneNumberError = document.getElementById('phone-number-error');
var submitError = document.getElementById('submit-error');
var icon = document.getElementsByClassName("icon-valid");

function validate(){
    var firstName = document.getElementById('first-name').value;
    var lastName = document.getElementById('last-name').value;

    if(firstName.length == 0){
        firstNameError.style.color = "red";
        firstNameError.innerHTML = "Name is required";
        return false;
    }
    if(!firstName.match(/^[a-zA-Z]/)){
        firstNameError.style.color = "red";
        firstNameError.innerHTML = "First character should not be number";
        return false;
    }
    if(lastName.length == 0){
        lastNameError.style.color = "red";
        lastNameError.innerHTML = "Name is required";
        return false;
    }
    if(!lastName.match(/^[a-zA-Z]/)){
        lastNameError.style.color = "red";
        lastNameError.innerHTML = "First character should not be number";
        return false;
    }
    else{
        firstNameError.style.color = "green";
        lastNameError.style.color = "green";
        firstNameError.innerHTML = "Perfect";
        lastNameError.innerHTML = "Perfect";
        allErrors = true;
        return true;
    }

    

}

function validatePhone(){
     var number = document.getElementById("phone-number").value;

     if(number.length === 0){
        phoneNumberError.style.color = "red";
        phoneNumberError.innerHTML = 'Phone no is required';
        return false;
     }
     if(number.length != 10){
        phoneNumberError.style.color = "red";
        phoneNumberError.innerHTML = 'Enter 10 digit number';
        return false;
     }
     if(!number.match(/^[0-9]{10}$/)){
        phoneNumberError.style.color = "red";
        phoneNumberError.innerHTML = 'Phone no is invalid';
        return false;
     }

     else{
         phoneNumberError.style.color = "green";
        phoneNumberError.innerHTML = 'Valid';
        allErrors = true;
        return true;
     }

}

function validateEmail(){
    var email = document.getElementById("email").value

    if(email.length === 0){
        emailError.style.color = "red";
        emailError.innerHTML = "Email is required";
        return false;
    }
    if(!email.match(/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/)){
        emailError.style.color = "red";
        emailError.innerHTML = "Email is not valid";
        return false;
    }
    else{
        emailError.style.color = "green";
        emailError.innerHTML = "validation successful";
        allErrors = true;
        return true;
    }
}

function validateRole(){
    var role = document.getElementById("role").value;

    if(role.length === 0){
        roleError.style.color = "red";
        roleError.innerHTML = "Enter role";
        return false;
    }

    if(role.match(/^[a-zA-Z]{0,5}$/)){
        roleError.style.color = "red";
        roleError.innerHTML = "Enter role properly";
        return false;
    }
    if(role.match(/^[0-9]/)){
        roleError.style.color = "red";
        roleError.innerHTML = "Enter role properly";
        return false;
    }

    else{
        roleError.style.color = "green";
        roleError.innerHTML = "verified";
        allErrors = true;
        return true;
    }
}

function validatePassword(){
    var pwd = document.getElementById("password").value;
    var cpwd = document.getElementById("confirm-password").value;

    if(pwd.length === 0){
        passwordError.style.color = "red";
        passwordError.innerHTML = "Password required";
        return false;
    }
    if(pwd.length < 6 || pwd.length > 13){
        passwordError.style.color = "red";
        passwordError.innerHTML = "length should be in between 6 to 13";
        return false;
    }
    if(pwd.length > 6 && pwd.length < 13){
        passwordError.style.color = "green";
        passwordError.innerHTML = "valid";
        return true;
    }
    
    if(cpwd.length === 0){
        confirmPasswordError.style.color = "red";
        confirmPasswordError.innerHTML = "Confirm password please";
        return false;
    }
    // if(!pwd.match(/^[0-9a-zA-Z]+[@{1..}][0-9a-zA-Z]+$/) && !pwd.match(/^[0-9a-zA-Z]+[#{1..}][0-9a-zA-Z]+$/) && !pwd.match(/^[0-9a-zA-Z]+[!{1..}][0-9a-zA-Z]+$/)){
    //     passwordError.style.color = "red";
    //     passwordError.innerHTML = "Include one special character";
    //     return false;
    // }

    if(pwd != cpwd){
        confirmPasswordError.style.color = "red";
        confirmPasswordError.innerHTML = "Password are not matching";
        return false;
    }

  
    

    else{
        passwordError.style.color = "green";
        confirmPasswordError.style.color = "green";
        passwordError.innerHTML = "verified";
        confirmPasswordError.innerHTML = "verified";
        allErrors = true;
        return true;
    }
}




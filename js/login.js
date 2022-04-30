
var nameError = document.getElementById("name-error");
var passwordError = document.getElementById("password-error");

function validateName(){
    var name = document.getElementById("user-name").value;

    if(name.length === 0){
        nameError.style.color = "red";
        nameError.innerHTML = "Name is required!";
        return false;
    }

    if(name.match(/^[0-9][a-zA-Z]+/)){
        nameError.style.color = "red";
        nameError.innerHTML = "First name should not be digit";
        return false;
    }

    else{
        nameError.style.color = "green";
        nameError.innerHTML = "Success";
        return true;
    }

}

function validatePassword(){
    var pwd = document.getElementById("user-password").value;

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

    else{
        passwordError.style.color = "green";
        
        passwordError.innerHTML = "verified";
       
        
        return true;
    }
}
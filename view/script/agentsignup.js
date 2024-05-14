
function validateName(name) {
    if (name.trim() === "") {
        return false; 
    }

    var words = name.split("");
    if (words.length < 2) {
        return false; 
    }

    return true;
}


function validatePhone(phone) {
    if (phone.trim() === "") {
        return false; 
    }

    if (phone.length !== 11 || isNaN(phone)) {
        return false; 
    }

    return true;
}


function validateUsername(username) {
    if (username.trim() === "" || username.indexOf(" ") !== -1) {
        return false; 
    }

    return true;
}


function validateEmail(email) {
    if (email.trim() === "") {
        return false; 
    }

    var atIndex = email.indexOf("@");
    var dotIndex = email.lastIndexOf(".");
    if (atIndex < 1 || dotIndex < atIndex + 2 || dotIndex + 2 >= email.length) {
        return false;
    }

    return true;
}


function validateDOB(dob) {
    return dob.trim() !== ""; 
}


function validateForm() {
    var name = document.forms["signupForm"]["name"].value;
    var phone = document.forms["signupForm"]["number"].value;
    var username = document.forms["signupForm"]["username"].value;
    var email = document.forms["signupForm"]["email"].value;
    var dob = document.forms["signupForm"]["DOB"].value;
    var password = document.forms["signupForm"]["password"].value;
    var confirmPassword = document.forms["signupForm"]["confirm_password"].value;

    if (!validateName(name)) {
        alert("Please enter a valid name.");
        return false;
    }

    if (!validatePhone(phone)) {
        alert("Please enter a valid phone number.");
        return false;
    }

    if (!validateUsername(username)) {
        alert("Please enter a valid username.");
        return false;
    }

    if (!validateEmail(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    if (!validateDOB(dob)) {
        alert("Please enter your date of birth.");
        return false;
    }

    if (document.forms["signupForm"]["cname"].value.trim() === "") {
        alert("Please enter your company name.");
        return false;
    }

    if (!document.forms["signupForm"]["type"].value) {
        alert("Please select the house type.");
        return false;
    }

    if (!document.forms["signupForm"]["gender"].value) {
        alert("Please select your gender.");
        return false;
    }

    if (!password || password.length < 8 || password.length > 32) {
        alert("Please enter a valid password (8-32 characters).");
        return false;
    }

    if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }

    return true;
}

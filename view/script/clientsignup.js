
function validateName(name) {
    if (name.trim() === "") {
        return false; 
    }

    var words = name.split(" ");
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
        alert("Username cannot be empty or contain spaces.");

        return false; 
    }

    if (!/\d/.test(username)) {
        alert("Username must contain at least one number.");
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


function validateGender(gender) {
    return gender !== ""; 
}


function validatePassword(password) {
    if (password.length < 8 || password.length > 32) {
        return false; 
    }

    var hasNumber = false;
    var hasCapital = false;
    var hasSmall = false;

    for (var i = 0; i < password.length; i++) {
        var charCode = password.charCodeAt(i);
        if (charCode >= 48 && charCode <= 57) {
            hasNumber = true;
        } else if (charCode >= 65 && charCode <= 90) {
            hasCapital = true; 
        } else if (charCode >= 97 && charCode <= 122) {
            hasSmall = true; 
        }
    }

    return hasNumber && hasCapital && hasSmall;
}


function validateForm() {
    var name = document.forms["signupForm"]["name"].value;
    var phone = document.forms["signupForm"]["number"].value;
    var username = document.forms["signupForm"]["username"].value;
    var email = document.forms["signupForm"]["email"].value;
    var dob = document.forms["signupForm"]["DOB"].value;
    var gender = document.forms["signupForm"]["gender"].value;
    var password = document.forms["signupForm"]["password"].value;
    var confirmPassword = document.forms["signupForm"]["confirm_password"].value;

    if (!validateName(name)) {
        alert("Please enter a valid name");
        return false;
    }

    if (!validatePhone(phone)) {
        alert("Phone Number must be 11 numbers.");
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

    if (!validateGender(gender)) {
        alert("Please select your gender.");
        return false;
    }

    if (!validatePassword(password)) {
        alert("Please enter a valid password. Password must contain at least 8 characters, at least 1 capital letter and at least 1 number.");
        return false;
    }

    if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }

    return true;
}

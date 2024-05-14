function validateForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username.trim() === "") {
        alert("Please enter your username.");
        return false;
    }


    if (!/\d/.test(username)) {
        alert("Username must contain at least one integer number.");
        return false;
    }

    if (password.trim() === "") {
        alert("Please enter your password.");
        return false;
    }


    if (password.length > 32) {
        alert("Password must be at most 32 characters long.");
        return false;
    }

    if (password.length < 8) {
        alert("Password must be at least 8 characters long.");
        return false;
    }

    return true;
}
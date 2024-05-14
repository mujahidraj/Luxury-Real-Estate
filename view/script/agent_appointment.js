// validation_agent.js

function validateForm() {
    var name = document.forms["appointmentForm"]["name"].value;
    var email = document.forms["appointmentForm"]["email"].value;
    var phone = document.forms["appointmentForm"]["phn_no"].value;
    var date = document.forms["appointmentForm"]["date"].value;
    var time = document.forms["appointmentForm"]["time"].value;
    var duration = document.forms["appointmentForm"]["duration"].value;
    var proAdd = document.forms["appointmentForm"]["pro_add"].value;
    var mlsNo = document.forms["appointmentForm"]["mls_no"].value;
    var aName = document.forms["appointmentForm"]["a_name"].value;
    var aEmail = document.forms["appointmentForm"]["a_email"].value;
    var aPhone = document.forms["appointmentForm"]["a_phn"].value;

    if (name.trim() == "" || !name.match(/^[a-zA-Z\s]{2,}$/)) {
        alert("Please enter a valid agent name with at least 2 words and only letters.");
        return false;
    }

    if (email.trim() == "" || !email.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
        alert("Please enter a valid agent email address.");
        return false;
    }

    if (phone.trim() == "" || !phone.match(/^\d{11}$/)) {
        alert("Please enter a valid agent phone number (11 digits).");
        return false;
    }

    if (date.trim() == "") {
        alert("Please select a date for the appointment.");
        return false;
    }

    if (time.trim() == "") {
        alert("Please select a time for the appointment.");
        return false;
    }

    if (duration.trim() == "") {
        alert("Please enter the duration of the appointment.");
        return false;
    }

    if (proAdd.trim() == "") {
        alert("Please enter the property address.");
        return false;
    }

    if (mlsNo.trim() == "") {
        alert("Please enter the MLS number.");
        return false;
    }

    if (aName.trim() == "" || !aName.match(/^[a-zA-Z\s]{2,}$/)) {
        alert("Please enter a valid client name with at least 2 words and only letters.");
        return false;
    }

    if (aEmail.trim() == "" || !aEmail.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
        alert("Please enter a valid client email address.");
        return false;
    }

    if (aPhone.trim() == "" || !aPhone.match(/^\d{11}$/)) {
        alert("Please enter a valid client phone number (11 digits).");
        return false;
    }
    if (Name.trim() == "" || !Name.match(/^[a-zA-Z\s]{2,}$/)) {
        alert("Please enter a valid client name with at least 2 words and only letters.");
        return false;
    }

    if (Email.trim() == "" || !Email.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
        alert("Please enter a valid client email address.");
        return false;
    }

    if (Phone.trim() == "" || !Phone.match(/^\d{11}$/)) {
        alert("Please enter a valid client phone number (11 digits).");
        return false;
    }

    return true;
}

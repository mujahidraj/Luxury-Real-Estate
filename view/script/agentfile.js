function validateForm() {
    var nidFile = document.getElementById("nidFile").files[0];
    var tradeLicenseFile = document.getElementById("tradeLicenseFile").files[0];

    if (!nidFile || !tradeLicenseFile) {
        alert("Please upload both NID card and Trade license files.");
        return false;
    }

    return true;
}

function validateForm() {
    var searchInput = document.getElementById('search').value.trim();
    

    if (searchInput === '') {
        alert('Please enter a valid property name.');
        return false; 
    }

    return true;
}



function validateForm() {
    var agentName = document.getElementById("agent_name").value;

    if (agentName.trim() == "") {
        alert("Please enter an agent name");
        return false;
    } else if (agentName.trim().length < 3) {
        alert("Agent name must be at least 3 characters long");
        return false;
    }
    return true;
}



// Function to send a message
function sendMessage() {
  var sender = document.getElementById("sender").value='Client';
  var message = document.getElementById("messageInput").value;
  // Send message if it's not empty
  if (message.trim() !== "") {
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "chat.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
          if (xhr.readyState == 4 && xhr.status == 200) {


              // Handle response here
              console.log(xhr.responseText);
              // Clear message input after sending message
              document.getElementById("messageInput").value = "";
              document.getElementById("sender").value = "";

              document.getElementById("sender").focus();
              // Update message box after sending message
              fetchMessages();
          }
      };
      xhr.send("sender=" + sender + "&message=" + message);
  }
}

// Function to send message when Enter key is pressed
function sendMessageOnEnter(event) {
  if (event.keyCode === 13) { // Enter key
      event.preventDefault(); // Prevent default Enter key behavior (e.g., adding newline)
      sendMessage(); // Call sendMessage function to send the message
  }
}

// Function to fetch messages from the server and update message box
function fetchMessages() {
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "chat.php", true);
  xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
          var messages = JSON.parse(xhr.responseText);
          var messagesDiv = document.getElementById("messages");
          messagesDiv.innerHTML = ""; // Clear previous messages
          messages.reverse(); // Reverse the order of messages

          messages.forEach(function(msg) {
            messagesDiv.innerHTML += "<div class='message'><p><strong>" + msg.sender + ":</strong> " + msg.message + "</p><p class='timestamp'>Sent on: " + msg.timestamp + "</p></div>";
          });
          // Scroll to bottom of message box
          messagesDiv.scrollTop = messagesDiv.scrollHeight;
      }
  };
  xhr.send();
}


// Call fetchMessages() when the page loads to load existing messages
window.onload = function() {
  fetchMessages();
};

// Function to clear chats from chatbox and database
function clearChats() {
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "clear_chats.php", true);
  xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
          // Clear messages from chatbox
          document.getElementById("messages").innerHTML = "";
      }
  };
  xhr.send();
}





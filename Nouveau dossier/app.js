const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});
document.addEventListener("DOMContentLoaded", function() {
  // Check if the messages array is set
  var urlParams = new URLSearchParams(window.location.search);
  var messagesParam = urlParams.get('messages');
  
  if (messagesParam !== null) {
      var messages = JSON.parse(decodeURIComponent(messagesParam));
      
      if (messages.length > 0) {
          var messageContainer = document.getElementById("message-container");
          
          // Loop through each message and create a div to display it
          messages.forEach(function(message) {
              var messageDiv = document.createElement("div");
              messageDiv.className = "message";
              messageDiv.textContent = message;
              
              messageContainer.appendChild(messageDiv);
          });
      }
  }
});

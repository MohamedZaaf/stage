var myButton = document.getElementById("myButton");
var overlay = document.getElementById("overlay");
var myForm = document.getElementById("myForm");

var isFormVisible = false;

myButton.addEventListener("click", function(event) {
  event.stopPropagation(); // Prevents the click event from propagating to the window

  if (isFormVisible) {
    overlay.classList.remove("visible");
    myForm.classList.remove("visible");
    isFormVisible = false;
  } else {
    overlay.classList.add("visible");
    myForm.classList.add("visible");
    isFormVisible = true;
  }
});

overlay.addEventListener("click", function() {
  overlay.classList.remove("visible");
  myForm.classList.remove("visible");
  isFormVisible = false;
});

window.addEventListener("click", function(event) {
  if (!myForm.contains(event.target) && !myButton.contains(event.target)) {
    overlay.classList.remove("visible");
    myForm.classList.remove("visible");
    isFormVisible = false;
  }
});


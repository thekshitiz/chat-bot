// $("#textInput").keypress(function (e) {
//     if (e.which == 13) {
//         getResponse();
//     }
// });

// function sendButton() {
//     getResponse();
// }

// Get the input field
var input = document.getElementById("data");


input.addEventListener("keyup", (event) => {
    if (event.key === "Enter") {
        // Cancel the default action, if needed
        event.preventDefault();
        // Trigger the button element with a click
        document.getElementById("send-btn").click();
    }
})

function openForm() {
    document.getElementById("myForm").style.display = "block";
  }
  
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }


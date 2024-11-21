document.getElementById("login-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the form from submitting the default way
    
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;
    const responseMessage = document.getElementById("response-message");
    const submitButton = document.getElementById("submit");
    
    // Show loading message
    responseMessage.innerHTML = "Verifying Password...";
    
    // Send data via AJAX
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "login.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    
    // When the request finishes
    xhr.onload = function() {
        if (xhr.status === 200) {
            console.log("Server Response: " + xhr.responseText); // Log server response
            if (xhr.responseText === "success") {
                responseMessage.innerHTML = "Login successful!";
                window.location.href = "dashbord.html"; // Redirect to dashboard
            } else {
                responseMessage.innerHTML = xhr.responseText;
            }
        } else {
            responseMessage.innerHTML = "An error occurred. Please try again.";
        }
    };
    
    
    // Send the form data
    xhr.send("username=" + encodeURIComponent(username) + "&password=" + encodeURIComponent(password));
});

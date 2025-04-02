
function togglePasswordVisibility(inputId, eyeIconId) {
    var inputField = document.getElementById(inputId);
    var eyeIcon = document.getElementById(eyeIconId);

    // Check if the input field type is password or text
    if (inputField.type === "password") {
        inputField.type = "text"; // Change type to text to show the password
        eyeIcon.src = "assets/images/eye-open.png"; // Change eye icon to open
    } else {
        inputField.type = "password"; // Change type to password to hide the password
        eyeIcon.src = "assets/images/eye-close.png"; // Change eye icon to close
    }
}

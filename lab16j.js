function validateForm() {
    var email = document.forms["registrationForm"]["email"].value;
    var age = document.forms["registrationForm"]["age"].value;
    var password = document.forms["registrationForm"]["password"].value;
    var confirmPassword = document.forms["registrationForm"]["confirmPassword"].value;
    var zipCode = document.forms["registrationForm"]["zipCode"].value;
    var terms = document.forms["registrationForm"]["terms"].checked;
    var url = document.forms["registrationForm"]["url"].value;
    var date = new Date(document.forms["registrationForm"]["date"].value);
    var fileSize = document.forms["registrationForm"]["file"].files[0].size;
    var country = document.forms["registrationForm"]["country"].value;
    var passwordRegex = /^(?=.\d)(?=.[a-z])(?=.[A-Z])(?=.[a-zA-Z]).{8,}$/;
    var emailRegex = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/;
    var zipCodeRegex = /^\d{5}(-\d{4})?$/;
    var urlRegex = /^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-])\/?$/;

    if (!email.match(emailRegex)) {
        alert("Please enter a valid email address.");
        return false;
    }
    if (isNaN(age) || age < 1 || age > 120) {
        alert("Please enter a valid age between 1 and 120.");
        return false;
    }
    if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }
    if (!zipCode.match(zipCodeRegex)) {
        alert("Please enter a valid zip code.");
        return false;
    }
    if (!terms) {
        alert("You must agree to the terms and conditions.");
        return false;
    }
    if (!url.match(urlRegex)) {
        alert("Please enter a valid URL.");
        return false;
    }
    if (date > new Date()) {
        alert("The date cannot be in the future.");
        return false;
    }
    if (fileSize > 1048576) { // 1MB in bytes
        alert("File size must be less than 1MB.");
        return false;
    }
    if (country === "") {
        alert("Please select a country.");
        return false;
    }
    if (!password.match(passwordRegex)) {
        alert("Password must be at least 8 characters long and include a mix of uppercase, lowercase, numeric, and special characters.");
        return false;
    }
    return true;
}
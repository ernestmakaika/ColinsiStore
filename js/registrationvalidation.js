// Defining a function to display error messages
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form 
function validateForm() {
    // Retrieving the values of form elements 
    var customer_name = document.signup.customer_name.value;
    var customer_email = document.signup.email.value;
    var password = document.applicationForm.passwrd.value;
    var passwordconn = document.applicationForm.passwordconn.value;
   
	// Defining error variables with a default value
    var nameErr = emailErr = passErr = passconErr = true;
    
    // Validate name
    if(customer_name == "") {
        printError("nameErr", "Please enter your name");
    } else {
            printError("nameErr", "");
            nameErr = false;
        }
    
    // Validate email address
    if(email == "") {
        printError("emailErr", "Please enter your email address");
    } 
    else {
        // Regular expression for basic email validation
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else{
            printError("emailErr", "");
            emailErr = false;
        }
    }
    
    if(password == "") {
        printError("passErr", "Please enter your password");
    } else {
        printError("passErr", "");
        passErr = false;
        }


    if(passwordconn == "") {
        printError("passconErr", "Please confirm your password");
    } 
    else {
        // Check if the password matches with the previous one
        if(passwordconn !== password) {
            printError("passconErr", "The two passwords do not match");
        }
        else{
            printError("passconErr", "");
            passconErr = false;
        }
    }

    // Prevent the form from being submitted if there are any errors
    if((nameErr||emailErr ||passErr || passconErr) == true) {
        return false;
     } 
    };
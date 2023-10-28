<?php

$m1 = "";

if (isset($_POST['email'])) {

    if (!is_uva_email($_POST['email'])) {
        $m1 .= "The email is not a valid uva email, make sure the domain is @virginia.edu <br>";
    }

    else {
        // SAVE INFORMATION HERE
    }
}

else {
    $m1 .= "No email address was provided";
}



if (isset($_POST['username'])) {

    // SAVE USERNAME HERE
    
}

else {
    $m1 .= "No username address was provided <br>";
}

if (isset($_POST['password1']) && isset($_POST['password2'])) {

    if ($_POST['password1'] !== $_POST['password2]') {
        $m1 .= "Your passwords didn't match<br>"
    }

    else {
        
        if (!verifyPassword($_POST['password1'])) {
            $m1 .= "Your password didn't contain at Minimum eight characters, at least one letter, one number and one special character <br>";
        }

        else {
            // SAVE THE PASSWORD HERE
        }
    }
}

else {
    $m1 .= "You didn't enter your password twice<br>";
}



function is_uva_email($email) {

    $email_regex =  $email_regex = '/^[A-Za-z0-9]+@virginia.edu$/';
    
    return preg_match($email_regex, $email);

}


function verifyPassword($password1) {

    // Minimum eight characters, at least one letter, one number and one special character:
    
    $password_regex = '/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/';

    if (preg_match($password_regex, $password1) === 1) {
            return true;
    }

    return false;

}


<?php
/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections

$email = mysqli_real_escape_string($connect,$_POST['email']);
$result =mysqli_query($connect,"SELECT * FROM users WHERE uemail='$email'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User with that email doesn't exist!";
    header("location: error.php");
}
else { // User exists
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['password'], $user['upassword']) ) {
        
        $_SESSION['email'] = $user['uemail'];
        $_SESSION['first_name'] = $user['ufirstname'];
        mysqli_query($connect,"UPDATE users set active=1 WHERE uemail='$email'");
        
        
        if($user['urole']=='Admin'){
        header("location:../admin/index.php");}
           if($user['urole']=='Customer'){
        header("location:../customer/index.php");}
    }
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: error.php");
    }
}

?>
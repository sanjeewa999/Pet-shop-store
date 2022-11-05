<?php
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */

// Set session variables to be used on profile.php page
$_SESSION['email'] = $_POST['email'];
$_SESSION['first_name'] = $_POST['fname'];


// Escape all $_POST variables to protect against SQL injections
$email = mysqli_real_escape_string($connect,$_POST['email']);
$first_name = mysqli_real_escape_string($connect,$_POST['fname']);
$password = mysqli_real_escape_string($connect,password_hash($_POST['password'], PASSWORD_BCRYPT));
$hash = mysqli_real_escape_string( $connect,md5( rand(0,1000) ) );
$phone = mysqli_real_escape_string($connect,$_POST['phone']);
$date=date('d-m-y');
// Check if user with that email already exists
$result = mysqli_query($connect,"SELECT * FROM users WHERE uemail='$email'") or die(mysqli_error($connect));

// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {

    $_SESSION['message'] = 'User with this email already exists!';
    header("location: error.php");

}
else { // Email doesn't already exist in a database, proceed...

    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO users (upassword,ufirstname,urole, uemail,utnumber,date) VALUES ('$password','$first_name','Customer','$email','$phone',now())";
    $result=mysqli_query($connect,$sql);
    if (!$result){
        die("Mysqli error".mysqli_error());
    }else{
        $_SESSION['message'] = 'You have successfully registered.You can login now';
    header("location: regsiterokay.php");
    }
}

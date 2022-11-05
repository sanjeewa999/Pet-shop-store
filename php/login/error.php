
<?php  require 'db.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Petcare.lk Login</title>
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>
    <body>

        <div class="login-wrap" align="center">
            <div class="login-html">
                <font color="red" size='7' ><center>Error !</center><br>
                </font>
                <p>
                    <?php 
                    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): ?>
                    <font color="yellow" size='5' ><p><?php echo $_SESSION['message'];    ?></p> 
                        <?php  else:
                        //                    header( "location: index.php" );
                        endif;
                        ?>
                        </p><br> 
                    <a href="index.php"><center>  <button type="button" class="btn btn-warning" >Try agin</button></center></a>
            </div>
        </div>
    </body>
</html>

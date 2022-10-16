<?php

session_start();
include('connection.php');

    if (isset($_POST['uname']) && isset($_POST['password'])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $uname  = validate($_POST['uname']);
        $pass = validate($_POST['password']);

        if(empty($uname)){
            header("Location: adminlogin.php?error=User Name is required");
            exit();
        }else if(empty($pass)){
            header("Location: adminlogin.php?error=Password is required");
            exit();
        }else{
            $sql = "SELECT * FROM admin WHERE user_name='$uname' AND admin_password='$pass'";
            $result = mysqli_query($con, $sql);

            if(mysqli_num_rows($result) == 1){
                $row = mysqli_fetch_assoc($result);
                if ($row['user_name'] === $uname && $row['admin_password'] === $pass){
                    $_SESSION['user_name'] = $row['user_name'];
                    $_SESSION['name'] = $row['admin_name'];
                    $_SESSION['id'] = $row['admin_id'];
                    header("Location: admindashboard.php?error=Incorrect User Name or Password");
                    exit();
                }else{
                    header("Location: adminlogin.php?error=Incorrect User Name or Password");
                    exit();
                }
            }else{
                header("Location: adminlogin.php?error=Incorrect User Name or Password");
                exit();
            }
        }

    }
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/adminlogin.css">
    </head>
    <body>
        <form action="adminlogin.php" method="post">
            <h2> ADMIN LOGIN</h2>
            <?php if (isset($_GET['error'])){ ?>
                <p class="error"><?php echo $_GET['error'] ; ?></p>
            <?php } ?>
            <label>User Name</label>
            <input type="text" name="uname" placeholder="User Name"><br>
            <label>Password</label>
            <input type="password" name="password" placeholder="Password"><br>
            <button type="submit">Login</button>
        </form>
    </body>
</html>
<?php
    include('connection.php');
    include('myfunction.php');
?>

<html>
    <head>
        <title>Customer Dashboard</title>
        <link rel="stylesheet" href="css/admincustomers.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
    <body>

        <input type="checkbox" id="check">

        <!--header area start-->
        <header>
            <label for="check">
                <i class="fa fa-bars" id="sidebar_btn"></i>
            </label>
            <div class="left_area">
                <h3>PET <span>CARE</span></h3>
            </div>
            <div class="right_area">
                <a href="adminlogin.php" class="logout_btn">Sign out</a>
            </div>
        </header>
        <!--header area end-->
    
        <!--sliderbar start-->
        <div class="sidebar">
            <center>
                <img src="imgs/dashadmin.jpg" class="profile_image" alt="profile image">
                <h4>Admin</h4>
            </center>
            <a href="admindashboard.php"><i class="fa fa-home"></i><span>Dashboard</span></a>
            <a href="adminorders.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i><span>Orders</span></a>
            <a href="adminproducts.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Products</span></a>
            <a href="admincategories.php"><i class="fa fa-list" aria-hidden="true"></i><span>Categories</span></a>
            <a class="active" href="#"><i class="fa fa-users" aria-hidden="true"></i><span>Customers</span></a>
            <a href="#"><i class="fa fa-user"></i></i><span>Admin Profile</span></a>
        </div>
        <!--slider bar end-->
        
        <div class="container">
            <div class="content">
                <a href="addcategory.php"><input type="submit" class="add-cate" value="Add new category"></a>

                <div class="card" >
            
                    <div class="card-header">
                        <h4 style="color:rgb(247, 8, 84); font-size:40px; font-style:arial;"><center>Customers</center></h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" style="margin-left:auto; margin-right:auto; align-content:center; margin-top:100px; ">
                            <thead>
                                <tr>
                                    <!-- <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">User ID</th> -->
                                    <!-- <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Password</th>-->
                                    <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Customer Name</th>
                                    <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Role</th>
                                    <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">E-mail</th>
                                    <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Contact</th>
                                    <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Date</th>
                                    <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Active</th>
                                    <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $users = getAll("users");

                                    if(mysqli_num_rows($users) > 0)
                                    {
                                        foreach($users as $item)
                                        {
                                            ?>
                                            <tr>
                                                <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;"> <?= $item['ufirstname']; ?></td>
                                                <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;"> <?= $item['urole']; ?></td>
                                                <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;"> <?= $item['uemail']; ?></td>
                                                <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;"> <?= $item['utnumber']; ?></td>
                                                <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;"> <?= $item['date']; ?></td>
                                                <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;"> <?= $item['active']; ?></td>

                                                <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">
                                                <!-- <a href="#" style="background-color:rgb(247, 8, 84); color:white; text-decoration:none; padding:15px 32px; border-radius:15px;">Delete</a> -->
                                                <form method="POST">
                                                    <input type="hidden" name="usr_mail" value="<?= $item['mail']; ?>">
                                                    <button type="submit" name="delete_user_btn" style="background-color:rgb(247, 8, 84); color:white; text-decoration:none; padding:12px 32px; border-radius:15px; cursor:pointer;"> <a href="?id=<?php echo $item['mail'];?>" style="color:white; text-decoration:none;">Delete</a> </button>
                                                </form>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "No records found";
                                    }
                                ?>
                               
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

        
            <!-- today -->
            <?php
                if(isset($_GET['id']))
                {
                    $usr_mail = $_GET['id'];

                    $delete_query = "DELETE FROM user WHERE mail='$usr_mail'";
                    $delete_query_run = mysqli_query($con, $delete_query);

                    if($delete_query_run)
                    {
                        echo "<script>
                            swal({
                                title: 'Deleted',
								text: 'Data deleted successfully!',
								icon: 'success',
								button: 'done',
                            });
                   </script>";
                    }
                    else
                    {
                        echo "<script>
                        swal({
                            title: 'Error',
                            text: 'something went wrong!',
                            icon: 'warning',
                            button: 'Ok',
                        });
                       </script>";
                echo "Error:".mysqli_error($con);
                    }
                }
            ?>

    </body>
</html>
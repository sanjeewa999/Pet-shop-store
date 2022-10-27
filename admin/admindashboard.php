<?php
    include('connection.php');
?>

<html>
    <head>
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="css/admindashboard.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
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
            <a class="active" href="#"><i class="fa fa-home"></i><span>Dashboard</span></a>
            <a href="adminorders.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i><span>Orders</span></a>
            <a href="adminproducts.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Products</span></a>
            <a href="admincategories.php"><i class="fa fa-list" aria-hidden="true"></i><span>Categories</span></a>
            <a href="admincustomers.php"><i class="fa fa-users" aria-hidden="true"></i><span>Customers</span></a>
        </div>
        <!--slider bar end-->
        <div class="container">
            <!--Today-->
            <div class="content">
                <div class="cards">
                    <div class="card">
                        <div class="box">
                            <?php
                                    $query = "SELECT cart_id FROM orders ORDER BY cart_id";
                                    $query_run = mysqli_query($con, $query);

                                    $row = mysqli_num_rows($query_run);

                                    echo '<h1>'.$row.'</h1>'
                            ?>
                            <h3>Orders</h3>
                        </div>
                        <div class="icon-design">
                            <img src="imgs/orders.jpg">
                        </div>
                    </div>
                    
                        <div class="card">
                            <div class="box">
                                <?php
                                        $query = "SELECT product_id FROM product ORDER BY product_id";
                                        $query_run = mysqli_query($con, $query);

                                        $row = mysqli_num_rows($query_run);

                                        echo '<h1>'.$row.'</h1>'
                                ?>
                                <h3>Products</h3>
                            </div>
                            <div class="icon-design">
                                <img src="imgs/products.jpg">
                            </div>
                        </div>
                        
                            <div class="card">
                                <div class="box">
                                    <?php
                                        $query = "SELECT category_id FROM category ORDER BY category_id";
                                        $query_run = mysqli_query($con, $query);

                                        $row = mysqli_num_rows($query_run);

                                        echo '<h1>'.$row.'</h1>'
                                    ?>
                                   
                                    <h3>Categories</h3>
                                </div>
                                <div class="icon-design">
                                    <img src="imgs/categories.jpg">
                                </div>
                            </div>
                            
                                <div class="card">
                                    <div class="box">

                                    <?php
                                        $query = "SELECT mail FROM user ORDER BY mail";
                                        $query_run = mysqli_query($con, $query);

                                        $row = mysqli_num_rows($query_run);

                                        echo '<h1>'.$row.'</h1>'
                                    ?>

                                        <h3>Customers</h3>
                                    </div>
                                    <div class="icon-design">
                                        <img src="imgs/customers.jpg">
                                    </div>
                                </div>
                </div>
                
                <div class="content-ii"></div>
            </div>
        </div>
    </body>
</html>
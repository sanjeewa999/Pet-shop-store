<?php
    include('connection.php');
    include('myfunction.php');
?>

<html>
    <head>
        <title>Product Dashboard</title>
        <link rel="stylesheet" href="css/adminproducts.css">
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
                <a href="admin.php" class="logout_btn">Sign out</a>
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
            <a class="active" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Products</span></a>
            <a href="admincategories.php"><i class="fa fa-list" aria-hidden="true"></i><span>Categories</span></a>
            <a href="admincustomers.php"><i class="fa fa-users" aria-hidden="true"></i><span>Customers</span></a>
        </div>
        <!--slider bar end-->
        <div class="container">
            <div class="content">
                <a href="addproduct.php"><input type="submit" class="add-pro" value="Add new product" style="margin-top: 5rem; padding: 15px 25px;  border: none; background-color: #5e0bed; color: #fff; font-size: 20px; font-family: Georgia, 'Times New Roman', Times, serif;"></a>

            <div class="card">
                <div class="card-header">
                    <h4 style="color:rgb(247, 8, 84); font-size:40px; font-style:arial;"><center>Products</center></h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" style="margin-left:auto; margin-right:auto; align-content:center; margin-top:100px;  ">
                        <thead>
                            <tr>
                                <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Product ID</th>
                                <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Category ID</th>
                                <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Product Name</th>
                                <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Selling Price</th>
                                <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Quantity</th>
                                <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Image</th>
                                <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $products = getAll("product");

                                if(mysqli_num_rows($products) > 0)
                                {
                                    foreach($products as $item)
                                    {
                                        ?>
                                        <tr>
                                            <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;"> <?= $item['product_id']; ?></td>
                                            <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;"> <?= $item['category_id']; ?></td>
                                            <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;"> <?= $item['product_name']; ?></td>
                                            <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;"> <?= $item['selling_price']; ?></td>
                                            <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;"> <?= $item['pro_qty']; ?></td>
                                            <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">
                                                <img src="uploads/<?= $item['pro_img']; ?>" width="80px" height="80px" alt="<?= $item['product_name']; ?>">
                                            </td>

                                            <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">
                                                <!-- <a href="#" style="background-color:rgb(247, 8, 84); color:white; text-decoration:none; padding:12px 32px; border-radius:15px;">Delete</a> -->
                                                <form method="POST">
                                                    <input type="hidden" name="pro_id" value="<?= $item['product_id']; ?>">
                                                    <button type="submit" name="delete_product_btn" style="background-color:rgb(247, 8, 84); color:white; text-decoration:none; padding:12px 32px; border-radius:15px; cursor:pointer;"> <a style="color:white; text-decoration:none;" href="?id=<?php echo $item['product_id'];?>">Delete</a> </button>
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
                    $products_id = $_GET['id'];

                    $product_query = "SELECT * FROM product WHERE product_id='$products_id'";
                    $product_query_run = mysqli_query($con, $product_query);

                    $delete_query = "DELETE FROM product WHERE product_id='$products_id'";
                    $delete_query_run = mysqli_query($con, $delete_query);

                    $product_data = mysqli_fetch_array($product_query_run);
                    $image = $product_data['pro_img'];

                    if($delete_query_run)
                    {
                        if(file_exists("uploads/".$image))
                        {
                            unlink("uploads/".$image);
                        }

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
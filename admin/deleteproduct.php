 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 </head>
 <body>
    
 </body>
 </html>
 <?php
  include ("connection.php");

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
                           alert('Product deleted !')
                           window.location = 'adminproducts.php';  
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
<?php
    include ("connection.php");
?>

<html>
    <head>
        <title>Add Product</title>
    </head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <style type="text/css">

        body
		{
			margin: 0;
			padding: 0;
			background: url(imgs/background5.jpg);
			background-size: cover;
			height: 850px;
			background-position: center;
			font-family: sans-serif;
		}

        .container
		{
			width: 520px;
			height: 600px;
			color: rgb(255, 252, 252);
			top: 50%;
			left: 20%;
			position: absolute;
			transform: translate(-50%,-50%);
			box-sizing: border-box;
		}

        .head
		{
			text-align: center;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: rgb(45, 4, 4);
		}   

        .container input[type="text"], input[type="number"],input[type="file"]
		{
			border:none;
			border-bottom: 1px solid rgb(12, 12, 12);
			background: transparent;
			outline: none;
			height:40px;
			color: rgb(3, 3, 3);
			font-size: 16px;
		}

        .container label{
            color: black;
        }

        .container textarea
		{
			border:none;
			border-bottom: 1px solid rgb(12, 12, 12);
			background: transparent;
			outline: none;
			height:40px;
			color: rgb(3, 3, 3);
			font-size: 16px;
		}

        .container input[type="submit"]
		{
			border:none;
			outline: none;
			height: 40px;
            width: 180px;
			background: #07df90;
			color: #fff;
			font-size: 18px;
			border-radius: 10px;
            align-content: center;
		}

		.container input[type="submit"]:hover
		{
			cursor: pointer;
			background: #1bd5cf;
			color: #000;
		}


    </style>
    <body>
        <div class="container">
            <h1 class="head">Add new product</h1>
                <div class="content">
                    <form method="POST" enctype="multipart/form-data">
                        <label for="">Select category</label>
                            <select name="cat_id">
                                <option selected>Select Category</option>
                                <?php
                              
                                    $res=mysqli_query($con,"SELECT category_id,category_name FROM category");
                                    while($row=mysqli_fetch_assoc($res)){
                                        if($row['category_id']==$cat_id){
                                            echo "<option selected value=".$row['category_id'].">".$row['category_name']."</option>";
                                        }else{
                                            echo "<option value=".$row['category_id'].">".$row['category_name']."</option>";
                                        }
                                    }
                                ?>
                             </select>
                            <br>
                        <label for="">Product Name : </label>
                            <input type="text" required name="product_name" placeholder="Enter product name"><br>
                        <label for="">Originalprice : </label>
                            <input type="text" required name="original_price" placeholder="Enter original price"><br>
                        <label for="">Selling price : </label>
                            <input type="text" required name="selling_price" placeholder="Enter selling price"><br>
                        <label for="">Product Description : </label>
                            <textarea rows="6" required name="p_description" placeholder="Enter description"></textarea><br><br>
                        <label for="">Upload image : </label>
                            <input type="file" required name="file"><br>
                        <label for="">Quantity : </label>
                            <input type="number" required name="p_qty" placeholder="Enter quantity"><br><br> 
                        <input type="submit" value="Add product" name="add_product_btn">
                </div> 
            </form>            
        </div>

        <?php
    
    if(isset($_POST['add_product_btn']))
    {
        $cat_id='';

       // $dir="uploads/";
        //$filename=basename($_FILES["file"]["name"]);
       // $filepath=$dir.$filename;
       // $filetype=pathinfo($filepath,PATHINFO_EXTENSION);

        $filename=$_FILES['file']['name'];
        $cat_id=$_POST['cat_id'];
        $imageFileType=strtolower(pathinfo($filename,PATHINFO_EXTENSION));
        $extensions_arr = array("jpg","jpeg","png","gif");
        $product_name = $_POST['product_name'];
        $original_price = $_POST['original_price'];
        $selling_price = $_POST['selling_price'];
        $p_description = $_POST['p_description'];
        $p_qty = $_POST['p_qty'];
       
        if(in_array($imageFileType,$extensions_arr)){

            if(move_uploaded_file($_FILES["file"]["tmp_name"],'uploads/'.$filename)){
                $sql="INSERT INTO `product` (`category_id`, `product_name`, `original_price`, `selling_price`, `pro_desc`, `pro_img`, `pro_qty`)
                VALUES ('$cat_id', '$product_name', '$original_price', '$selling_price', '$p_description', '$filename', '$p_qty')";

                if(mysqli_query($con,$sql)){
                   echo "<script>
                            swal({
                                title: 'Successfuly Added',
								text: 'Data added successfully!',
								icon: 'success',
								button: 'Wow!',
                            });
                   </script>";
                   //echo '<script language="javascript">window.location.href="addproduct.php"</script>'; 
                }
                else{
                    echo "<script>
							swal({
								title: 'Error',
								text: 'Data didnot add!',
								icon: 'warning',
								button: 'Ok',
							});
                   		</script>";
                    echo "Error:".mysqli_error($con);
                }
            }else{
                echo 'Error in uploading file - '.$_FILES['file']['name'].'';
            }
        }     
    }
?>

       
    </body>
</html>



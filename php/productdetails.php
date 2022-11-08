<?php
    include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Pet Shop</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="../productdetails.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="stylesheet" href="../css/fp.css">
        <!-- <link rel="stylesheet" href="../css/ab.css"> -->
        <link rel="styleshhet" href="../bootstrap-5.2.2-dist/css/bootstrap.min.css">
        <script src="text/javascript" src="../bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/619bc20a51.js" crossorigin="anonymous"></script>
</head>
<body>




	<a href="home.php">

	<a href="../Main/home.php">

		<div class="sizes1">
			<button>Back</button>
		</div>
	</a>

	<div class="container">
		<form action="manage_cart.php" method="POST">
		<?php


if(isset($_POST['addcart'])){
	if(isset($_SESSION['uid'])){
		
	// echo "Form submitted";
	//getting the data
	//$uid=$_SESSION['uid'];
	$pid=$_GET['p_id'];
	$p_name=$_GET['p_name'];
	$up=$_GET['unit_price'];
	$qty=$_GET['qty'];
	$t_price=$_GET['total_product_price'];
	$date=$_SESSION['time'];
	

	   $sql="INSERT INTO cart(p_id,p_name,unit_price,qty,total_product_price,time) VALUES('$pid','$p_name','$up','$qty','$t_price','$date')";
		 $res=mysqli_query($conn,$sql);
		 echo mysqli_error($conn);

			 if($res){
				 echo  "<script type=\"text/javascript\">
				 Swal.fire('Added!!',
					   'Product is added to the cart',
					   'success'
				 )
			   </script>";
			   header("location:cart.php?quantity=".$_POST['quantity']);
			 }
			 else{
			   echo "<script>
				 swal({
				 title: 'Error',
				 text: 'product didnot add!',
				 icon: 'warning',
				 button: 'Ok',
				 });
			   </script>";
			 }

			}}


			if(isset($_GET['id'])){
				$product_id=$_GET['id'];
				$sql="SELECT * FROM product WHERE product_id='$product_id'";
				$res=mysqli_query($con,$sql);
				$row=mysqli_fetch_assoc($res);
		?>
		<div class="card">
			<div class="sneaker">
				<div class="circle"></div>
					  <img src="<?php echo "../admin/uploads/".$row['pro_img']?>" > 
			</div>
			<div class="info">
				<h1 class ="title"><?php echo $row['product_name'];?></h1>
				<p><?php echo $row['pro_desc'];?></p>
				<div class="sizes">
				<b><?php echo "Rs.". $row['selling_price'];?></b>
				</div>
				<a href="">
				<div class="purchase">
					<button type="submit" name="addcart">Add to Cart</button>
				</div></a><br>
				<input type="hidden" name="p_id" value="<?php echo $product_id;?>">
				<input type="hidden" name="p_name" value="<?php echo $row['product_name'];?>">
				<input type="hidden" name="p_price" value="<?php echo $row['selling_price'];?>">
				<input type="hidden" name="p_img" value="<?php echo $row['pro_img'];?>"> 
			</div>
		</div>
		<?php
			}
		?>
		</form>
	</div>

	<a href="home.php">
		<div class="sizes1">
			<button>Home</button>
		</div>
	</a>



	

</body>
</html>
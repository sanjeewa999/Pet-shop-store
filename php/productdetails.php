<?php
    include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Pet Shop</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="../style.css">
	<link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="footer.css">

	  <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="../css/navstyle.css">
        <link rel="stylesheet" href="../css/slider.css">
        <link rel="stylesheet" href="../css/searchbar.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="stylesheet" href="../css/fp.css">
        <!-- <link rel="stylesheet" href="../css/ab.css"> -->
        <link rel="styleshhet" href="../bootstrap-5.2.2-dist/css/bootstrap.min.css">
        <script src="text/javascript" src="../bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/fp1.js"></script>
        <script type="text/javascript" src="../js/ab.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/619bc20a51.js" crossorigin="anonymous"></script>
</head>
<body>



	<a href="../Main/home.php">
		<div class="sizes1">
			<button>Back</button>
		</div>
	</a>

	<div class="container">
		<form action="manage_cart.php" method="POST">
		<?php
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

	<a href="../Main/home.php">
		<div class="sizes1">
			<button>Home</button>
		</div>
	</a>



	

</body>
</html>

<?php
	
    include ("connection.php");
    
?>



<html>
    <head>
        <title>Add Category</title>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
    <style type="text/css">

        body
		{
			margin: 0;
			padding: 0;
			background: url(imgs/background3.jpg);
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
			left: 80%;
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
            <h1 class="head">Add new category</h1>
                <div class="content">
                    <form action="#" method="POST">
                        <label for="">Name : </label><br>
                            <input type="text" required name="category_name" placeholder="Enter category name"><br><br>
                        <label for="">Description : </label><br>
                            <textarea rows="6" required name="c_description" placeholder="Enter description"></textarea><br><br>
                        <input type="submit" value="Add category" name="add_category_btn">
                </div>             
        </div>

		<?php
			if(isset($_POST['add_category_btn']))
			{
				$category_name = $_POST['category_name'];
				$c_description = $_POST['c_description'];

				$sql="INSERT INTO category(category_name,c_description) VALUES ('$category_name','$c_description')";

				$res=mysqli_query($con,$sql);

				if($res)
				{
					echo "<script>
							swal({
								title: 'Successfuly Added',
								text: 'Data added successfully!',
								icon: 'success',
								button: 'Wow!',
							});
                   </script>";
					//header('Location:admincategories.php');
				}
				else
				{
					echo "<script>
							swal({
								title: 'Error',
								text: 'Data didnot add!',
								icon: 'warning',
								button: 'Ok',
							});
                   		</script>";
					//echo "Error:".mysqli_error($con);
				}

			}
?>

    </body>
</html>
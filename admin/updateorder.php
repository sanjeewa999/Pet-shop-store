<?php
	
    include ("connection.php");
    
?>



<html>
    <head>
        <title>Update Order</title>
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
            <h1 class="head">Update Orders</h1>
                <div class="content">
                    <form action="#" method="POST">
                        <label for="">First Name : </label><br>
                            <input type="text" required name="f_name" placeholder="Enter first name"><br><br>
                        <label for="">Last Name : </label><br>
                            <input type="text" required name="l_name" placeholder="Enter last name"><br><br>
                        <label for="">Country : </label><br>
                        <select name="country" id="country" required>
                            <option value="">Please select a country</option>
                            <option value="Sri lanka">Sri lanka</option>
                        </select><br><br>
                        <label for="">Address : </label><br>
                            <input type="text" required name="address" placeholder="Enter address"><br><br>
                        <label for="">Town : </label><br>
                            <input type="text" required name="town" placeholder="Enter town"><br><br>
                        <label for="">Email : </label><br>
                            <input type="text" required name="email" placeholder="Enter email"><br><br>
                        <label for="">Phone : </label><br>
                            <input type="text" required name="phone" placeholder="Enter mobile number"><br><br>
                        <label for="">Provice : </label><br>
                            <select name="province" id="country" required>
                                <option value="">Please select a province</option>
                                <option value="N">Northern</option>
                                <option value="NW">North Western</option>
                                <option value="W">Western</option>
                                <option value="NC">North Central</option>
                                <option value="C">Central</option>
                                <option value="S">Sabaragamuwa</option>
                                <option value="E">Eastern</option>
                                <option value="U">Uva</option>
                                <option value="SO">Southern</option>
                            </select><br><br>
                        <label for="">Post Code : </label><br>
                            <input type="text" required name="code" placeholder="Enter post code"><br><br>

                        <input type="submit" value="Update order" name="update_order_btn">
                </div>             
        </div>

		<?php
			if(isset($_POST['update_order_btn']))
			{
				$fname=$_POST['f_name'];
                $lname=$_POST['l_name'];
                $country=$_POST['country'];
                $address=$_POST['address'];
                $town=$_POST['town'];
                $email=$_post['email'];
                $phone=$_POST['phone'];
                $province=$_POST['province'];
                $postcode=$_POST['code'];

				$sql="UPDATE orderdetails SET f_name='$fname', l_name='$lname', country='$country', address='$address', town='$town', email='$email', phone='$phone', province='$province', postcode='$postcode' WHERE order_id='$order_id'";

				$res=mysqli_query($con,$sql);

				if($res)
				{
					echo "<script>
							swal({
								title: 'Successfuly Updated',
								text: 'Data updated successfully!',
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
								text: 'Data didnot update!',
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
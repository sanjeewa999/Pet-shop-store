<?php
   include ("connection.php");
   session_start();
 
   
   if(isset($_POST['checkout'])){
       $fname=$_POST['fname'];
       $lname=$_POST['lname'];
       $country=$_POST['country'];
       $address=$_POST['address'];
       $town=$_POST['city'];
       $email=$_post['email2'];
       $phone=$_POST['tel'];
       $province=$_POST['province'];
       $postcode=$_POST['postcode'];
       $pmethod=$_POST['payment'];
       $product_id=$_POST['product_id'];
       $product_name=$_POST['product_name'];
       $total=$_POST['total'];

   
   $sql="INSERT INTO orderdetails(f_name,l_name,country,address,town,email,phone,province,postcode,p_method,product_id,product_name,total) VALUES('$fname','$lname','$country','$address','$town','$email','$phone','$province','$postcode','$pmethod','$product_id','$product_name','$total')";
   $res=mysqli_query($con,$sql);
   if($res){
      echo "<script>
           alert('Purchase success');
           window.location.href = 'checkoutcart.php';
       </script>";
   }else{
       echo mysqli_error($con);
   }
   
   }
   ?>




<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>checkout page </title>

<link rel="stylesheet" href="../css/checkoutcart.css">

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
</head>
<body>




<header>
      <h1>Pet shop store Checkout</h1>
</header>
    
    <div class="wrapper">
     
      <div class="row">
        <form method="post">
          <div class="col-7 col">
            <h3 class="topborder"><span>Shipping Details</span></h3>
            
            <div class="width50 padright">
              <label for="fname">First Name</label>
              <input type="text" name="fname" id="fname" required>
            </div>
            <div class="width50">
              <label for="lname">Last Name</label>
              <input type="text" name="lname" id="lname" required>
            </div>
            <label for="country">Country</label>
            <select name="country" id="country" required>
              <option value="">Please select a country</option>
              <option value="Sri lanka">Sri lanka</option>
              
            </select>
           
            <label for="address">Address</label>
            <input type="text" name="address" id="address" required>
            
            <label for="city">Town / City</label>
            <input type="text" name="city" id="city" required>

            <label for="email2">Email Address</label>
              <input type="text" name="email2" id="email2" required>
              <label for="tel">Phone</label>
              <input type="text" name="tel" id="tel" required maxlength="10">

            <div class="width50 padright">
              <label for="province">Province</label>
              <select name="province" id="province" required>
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
                
              </select>
            </div>
            <div class="width50">
              <label for="postcode">Postcode</label>
              <input type="text" name="postcode" id="postcode" placeholder="Postcode / Zip" required>
            </div>
            <div class="">
              
            </div>
            <div class="width50">
              
            </div>
           
          </div>
          <div class="col-5 col order">
            <h3 class="topborder"><span>Your Order</span></h3>
            <div class="row">
              <h4 class="inline">Product</h4>
              <h4 class="inline alignright">Total</h4>
            </div>
            <?php
              $total=0;
               foreach ($_SESSION['cart'] as $key=>$value) {
                
            ?>
            <div>
              <p class="prod-description inline"><?php echo $value['p_name'];?><div class="qty inline"><span class="smalltxt">x</span> 1</div><p class="inline alignright">Rs.<?php echo $value['p_price'];?>.00</p></p> 
              <img class="img-fluid mx-auto d-block image" style="width:150px;height:150px;" src="<?php echo "../Admin/uploads/".$value['p_img']?>"> 
              <input type="hidden" name="product_id" value="<?php echo $value['p_id']?>">
              <input type="hidden" name="product_name" value="<?php echo $value['p_name']?>">
              
            </div>
            <?php
                $total=$total+$value['p_price'];
                 } 
            ?>
            <input type="hidden" name="total" value="<?php echo $total?>">
            
            <div><h5 class="inline">Order Total</h5><h5 class="inline alignright">Rs.<?php echo $total;?>.00</h5></div>
            
            <div>
              <h5 class="inline difwidth">Shipping and Handling</h5>
              <p class="inline alignright center">Free Shipping</p>
            </div>
            

            <div>
              <h3 class="topborder"><span>Payment Method</span></h3>
              <input type="radio" value="banktransfer" name="payment" required><p>Direct Bank Transfer</p>
              <p class="padleft">
                Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won't be shipped until the funds have cleared in our account.
              </p>
            </div>

            <div><input type="radio" value="cash on delivery" name="payment" required><p>Chash On Delivery</p></div>
            <div>
              <input type="radio" value="paypal" name="payment" required><p>Paypal</p>
              <fieldset class="paymenttypes">
                
                <img src="../imgs/checkoutcart/paypal.png" alt="Visa, Mastercard, Maestro and Amex Credit Cards" class="cards">
              </fieldset>
              
            </div>
            <input type="submit"  onclick="alert()" name="checkout" value="Place Order" class="redbutton">
          </div>
        </form>
      </div>
    </div>
    <?php

?>
</body>
<script>
      /*function alert(){
         swal("Purchase successfully!", "Your order has been Placed!", "success");

      }*/
   </script>
</html>

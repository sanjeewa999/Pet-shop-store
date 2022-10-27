<?php
   include ("connection.php");
   
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
       $pmethod=$POST['payment'];
   
   $sql="INSERT INTO orderdetails(f_name,l_name,country,address,town,email,phone,province,postcode,p_method) VALUES('$fname','$lname','$country','$address','$town','$email','$phone','$province','$postcode','$pmethod')";
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
    <!--<div class="white-space"></div>-->
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
              <option value="Canada">Sri lanka</option>
              
            </select>
           
            <label for="address">Address</label>
            <input type="text" name="address" id="address" required>
            
            <label for="city">Town / City</label>
            <input type="text" name="city" id="city" required>

            <label for="email2">Email Address</label>
              <input type="text" name="email2" id="email2" required>
              <label for="tel">Phone</label>
              <input type="text" name="tel" id="tel" required>

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
            <div>
              
              <p class="prod-description inline">pedegree 5Kg<div class="qty inline"><span class="smalltxt">x</span> 1</div></p>

            </div>
            <div><h5>Cart Subtotal</h5></div>
            <div>
              <h5 class="inline difwidth">Shipping and Handling</h5>
              <p class="inline alignright center">Free Shipping</p>
            </div>
            <div><h5>Order Total</h5></div>

            <div>
              <h3 class="topborder"><span>Payment Method</span></h3>
              <input type="radio" value="banktransfer" name="payment" checked><p>Direct Bank Transfer</p>
              <p class="padleft">
                Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won't be shipped until the funds have cleared in our account.
              </p>
            </div>

            <div><input type="radio" value="cash on delivery" name="payment"><p>Chash On Delivery</p></div>
            <div>
              <input type="radio" value="paypal" name="payment"><p>Paypal</p>
              <fieldset class="paymenttypes">
                
                <img src="../imgs/checkoutcart/paypal.png" alt="Visa, Mastercard, Maestro and Amex Credit Cards" class="cards">
              </fieldset>
              
            </div>
            <input type="submit" name="checkout" value="Place Order" class="redbutton">
          </div>
        </form>
      </div>
    </div>

</body>
</html>

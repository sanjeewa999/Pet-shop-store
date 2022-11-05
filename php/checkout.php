<html>
<head>


            
            <!--<link rel="stylesheet" href="../css/checkout.css">-->
          
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <title>
            pet-shop-store Checkout page
        </title>

        <style type="text/css">
            

.checkout{

display: inline-block;
float: left;
width: 100%;
padding: 45px 0;
}


.checkout h2{

font-size: 22px;
font-weight: 1000;
color:#222;
border-bottom: 1px solid;
padding-bottom: 15px ;
margin-bottom: 15px;
text-transform: uppercase;

}
.checkout-inner{

    width:70%;
    float:left;
    border-right: 1px solid #c5c5c5;
    padding-right: 25px;

}
.checkout-form-steps{
width:100%;
padding :15px;
display:inline-block;

}
.checkout-form-steps h4{

font-size:18px;
font-weight:700;
border-bottom:1px solid;
color:#ff9800;
padding-bottom:15px;
margin-bottom: 25px;
}

.checkout-form-steps .textfield{

    width:100%;
    height: 45px;
    border-radius: 4px;
    border: 2px solid#d0d0d0;
    margin-bottom: 15px;
    padding:10px;
    font-size:15px;

}
.checkout-form-steps .textfield:focus, .checkout-form-steps label:hover{

    border-color: #ffa800;
}

.checkout-form-steps label{

    width:100%;
    float: left;
    border: 2px solid #d0d0d0;
    border-radius: 4px;
    margin-bottom: 15px;
    padding: 10px;
    font-size: 15px;
    
}
.submitorder-button{

width:300px;
height: 50px;
margin:15px;
border-radius: 4px;
float:right;
font-size: 22px;
color:#fff;
border:none;
font-weight: 600;
background-color: #ffa800;


}





.orderlist{

    width:28%;
    float:right;

}
.orderlist h3{
    font-size: 18px;
    padding: 15px 0;
    line-height: 22px;
}
.orderlist p{

    padding: 15px 10px;
    background-color: #00000010;
    font-size: 18px;
    border-bottom: 1px solid #00000020;


}
.orderlist p span{

float:right;

}
.orderlist .textfield{

width:100%;
height:45px;
padding: 15px;
border-radius: 4px;
margin: 15px 0;
border: 1px solid #00000040;
font-size: 16px;

}
.orderlist .applycode-button{

width: 100%;
height: 45px;
padding: 15px;
border-radius: 4px;
margin-bottom: 25px;
border: none;
font-size: 16px;
background-color: #ffa80050;



}


        </style>

</head>

<body>
  <div class="checkout">
        <div class="container">
      <!--  <img src="../imgs/main/logo.png" alt="petlogo" width="200px" height="200px">-->
            <h2 class="checkout-topic">Pet Shop Store Checkout</h2>
            <!-- check out inner Start-->
            <div class="checkout-inner">
                <form action="">
                    <div class="checkout-form-steps">
                        <h4>Personal Details</h4>
                        <input type="text" class="textfield" placeholder="Your Name" required=" ">
                        <input type="email" class="textfield" placeholder="Your Email" required>
                        <input type="text" class="textfield" placeholder="Your PhoneNumber" required>

                    </div>
                    <div class="checkout-form-steps">
                        <h4>Shipping Address</h4>
                        <select name="" id="" class="textfield">
                            <option value="">Select Country</option>
                             <option value="">Sri Lanka</option>  
                             <option value="">UK</option> 
                             <option value="">Italy</option> 
                             <option value="">UAE</option> 
                             <option value="">India</option>          
                        </select>
                       <!-- <select name="" id="" class="textfield">
                            <option value="">Select State</option>
                             <option value="">state 1 </option>  
                             <option value="">state 2</option> 
                             <option value="">state 3</option> 
                                 
                        </select>-->
                        <input type="text" class="textfield" placeholder="State">
                        <input type="text" class="textfield" placeholder="Full Address">
                    </div>
                    <div class="checkout-form-steps">
                        <h4>Shipping Options</h4>
                        <label for="radio1">
                            <input type="radio" name="shippingoptions" id="radio1">
                            Cash on Delivery

                        </label>
                        <label for="radio2">
                            <input type="radio" name="shippingoptions" id="radio2">
                            Urgent Delivery in 1 Hour -  free Shipping

                        </label>
                        <label for="radio3">
                            <input type="radio" name="shippingoptions" id="radio3">
                            Pickup - you can pickup 9AM to 8PM

                        </label>
                    </div>
                    <div class="checkout-form-steps">
                            <h4>Billing Options</h4>
                        <label for="radio4">
                            <input type="radio" name="billingoptios" id="radio4">
                            In Cash
                        </label>
                        <label for="radio5">
                            <input type="radio" name="billingoptios" id="radio5">
                            Visa
                        </label>
                        <label for="radio6">
                            <input type="radio" name="billingoptios" id="radio6">
                            MObile Banking
                        </label>
                        <label for="radio7">
                            <input type="radio" name="billingoptios" id="radio7">
                            Wallet
                        </label>

                    </div>
                    <input type="submit" class="submitorder-button" value="Submit Order">
                </form>

            </div>
            <!-- check out inner end-->
            <!-- order list start-->
                <div class="orderlist">
                  <img src="../imgs/checkout/dog1.png" width="100px" height="100px">
                  <h3>pedegree - sings of 5 Nutritions Adult dog food Large</h3>  
                  <p>Quantity : <span>1</span></p>
                  <p>Price : <span>Rs.2500.00</span></p>
                  <input type="text" class="textfield" placeholder="Promo Code : PET0800">
                  <input type="submit" class="applycode-button" value="Apply Promo Code">
                  <p>Order Total : <span>Rs.2500.00</span></p>
                  </div>
            <!-- order list end-->

        </div>
  </div>  







<?php 
include ('footer.php')
?>
</body>



</html>
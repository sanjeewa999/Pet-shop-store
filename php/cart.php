<?php
session_start();

   ?>
<!DOCTYPE html>
<html>
   <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
      <link rel="stylesheet" href="stylesheet.css">
      <title>Shopping Cart</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="footer.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
      <link rel="stylesheet" href="../cart/assets/css/style.css">

   </head>
   <body>

      <!--Cart View--------------------------------------------------->
      <main class="page">
         <section class="shopping-cart dark">
            <div class="container">
               <div class="block-heading">
                  <h2>Shopping Cart</h2>
                  <p>Haay.lk provides a reliable, secure shopping cart solution for your order.
                     Haay.lk allows you to accept credit cards, Amazon Pay, Apple Pay and PayPal payments
                     by integrating with over 10 payment gateways.
                  </p>
               </div>
               <div class="content">
                  <div class="row">
                     <div class="col-md-12 col-lg-8">
                        <div class="items">
							<?php
                      $tot=0;
                      if(isset($_SESSION['cart'])){
                         foreach($_SESSION['cart'] as $key=>$value){

                           $tot=$tot+$value['p_price'];
							?>
                           <div class="product">
                              <div class="row">
                                 <div class="col-md-3">
                                    <img class="img-fluid mx-auto d-block image" src="<?php echo "../Admin/uploads/".$value['p_img']?>">
                                 </div>
                                 <div class="col-md-8">
                                    <div class="info">
                                       <div class="row">
                                          <div class="col-md-5 product-name">
                                             <div class="product-name">
                                                <a href="#"><?php echo $value['p_name']?></a>
                                                <div class="product-info">

                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-4 quantity">
                                             <label for="quantity">Quantity:</label>
                                             <!--<form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">-->

                                          </div>
                                          <div class="col-md-3 price">
                                             <td ><?php echo $value['p_price']?><input type="hidden" class="iprice" value="<?php echo $value['p_price']?>"></td>
                                          </div>

                                             <form action="manage_cart.php" method="POST">
                                             &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn-update">Update</button>
                                          &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn-update" name="remove">Remove</button>
                                          <input type="hidden" name="p_id" value="<?php echo $value['p_id'];?>">
                                             </form>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
						   <?php
                   }
                      }

                     ?>
                        </div>
                     </div>
                     <div class="col-md-12 col-lg-4">
                        <div class="summary">
                           <h3>Summary</h3>
                           <div class="summary-item"><span class="text">Subtotal</span><span class="price"><?php if($tot>0){echo $tot;} ?></span></div>
                           <div class="summary-item"><span class="text">Discount</span><span class="price">$0</span></div>
                           <div class="summary-item"><span class="text">Shipping</span><span class="price">$0</span></div>
                           <div class="summary-item"><span class="text">Total</span><span class="price"><?php if($tot>0){echo $tot;} ?></span></div>
                           <button type="button" class="btn btn-primary btn-lg btn-block"><a href="purchase.php"> Checkout</button></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
      </form>

      <?php
	require('footer.php');
?>
   </body>
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script>
      var price=document.getElementsByClassName('iprice');
      var qty=document.getElementsByClassName('iquantity');
      var tot=document.getElementsByClassName('tot');

      function subtotal(){
         for(i=0;i<price.length;i++)
         {
               tot[i].innerText=(price[i].value)*(qty[i].value);
         }
      }
      subtotal();
</script>
</html>

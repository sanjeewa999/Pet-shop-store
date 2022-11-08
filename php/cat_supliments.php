<?php
    include ("connection.php");
?>

<html>
    <head>
        <title>Pet Shop</title>
        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="../css/navstyle.css">
        <link rel="stylesheet" href="../css/slider.css">
        <link rel="stylesheet" href="../css/searchbar.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
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
    
        <sb>
            <div class="topnav">
                <label class="topic" style="font-family:arial; font-size:20px; padding-top:20px; margin: top 20px;"> An Exclusive Pet Shopping Experience </label>
                <a  href="login/logout.php"><i class="fa fa-sign-out"></i>Logout</a>
                <a href="#about"><i class="fa-solid fa-cart-shopping"></i>Cart</a>
                <input type="text" class="search-box"  placeholder="Search..">
            </div>
        </sb>
        <!-- navigation bar begin -->
         <br>
         <?php include "navbar.php"?>
        <br><br><br> <br>
        <!-- slider begin -->
         <h1> Cat Supliments </h1>

        <!-- fp begin -->
        
        <fp>
        <div class="container-fluid">
            <div class="row">
            <?php $sql="SELECT * FROM product , category WHERE category.category_id = product.category_id AND category.category_name = 'cats supplements'";
               $result=mysqli_query($con,$sql);
               

               while($row=mysqli_fetch_array($result)){
  
               ?>
               

               <div class='col-lg-3 col-md-4 mb-3 ml-5 mr-5 mt-5'>
          <div class='card h-100'> 
            <a href='#'><img class='card-img-top' src="../admin/uploads/<?php echo $row['pro_img'] ?>"></a>
                <div class='card-body'>
                    <h4 class='card-title'>

                    <a href="productdetails.php?id=<?php echo $row['product_id'];?>">
                    <!-- <img src="<?php echo "../Admin/uploads/".$row['p_image']?>" width="300">  -->
                    <h4><?php echo $row['product_name'] ?></h4> 
                    <h5>Rs.<?php echo $row['selling_price'] ?></h5>
                </div> 
                <div class='card-footer'>
                    <small class='text-muted'>&#9733; &#9733; &#9733; &#9733; &#9734;</small> 
                </div>
            </div>
        </div>
            <?php
                }
            ?>
            </div>
        </div>
        </fp>

        <!-- ab begin -->



        <!-- footer begin-->
        <footer>
         <div class = "row">
            <div class="col">
               <img src="../imgs/logo.png" class="logo">
               <h4>Pet Care.lk - Pet Shop Sri & Aquarium Lanka</h4>
               <p>Pet Care.lk is your One-stop shop for all things Pet related, selling a range of Top quality, correctly formulated Industry-trusted Pet supplies brands. We only work with official product agents in Sri Lanka and offer online payment and Islandwide delivery</p>
            </div>
            <div class="col">
               <h3>
                  Office 
                  <div class="underline"><span></span></div>
               </h3>
               <p>Galle road,</p>
               <p>Colombo, Sri Lanka</p>
               <p class="email-id">petcarelk@outlook.com</p>
               <h4>+94 - 0114567852</h4>
            </div>
            <div class="col">
               <h3>
                  Links 
                  <div class="underline"><span></span></div>
               </h3>
               <ul>
                  <li><a href="">Home</a></li>
                  <li><a href="">Services</a></li>
                  <li><a href="">About Us</a></li>
                  <li><a href="">Features</a></li>
                  <li><a href="">Contacts</a></li>
               </ul>
            </div>
            <div class="col">
               <h3>
                  Newsletter 
                  <div class="underline"><span></span></div>
               </h3>
               <form>
                  <input type="email" placeholder="Enter your email">
               </form>
               <div class="social-icons"></div>
               <i class="fa-brands fa-facebook"></i></a>
               <i class="fa-brands fa-twitter"></i></a>
               <i class="fa-brands fa-whatsapp"></i></a>
               <i class="fa-brands fa-pinterest"></i></i></a>
            </div>
         </div>
         </div>	
         <hr>
         <p class="copyright">© Pet Care.lk - All rights reserved</p>
      </footer>

      
      <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
      <script>
         const swiper = new Swiper('.swiper', {
           autoplay: {
         		delay:2500,
         		disableOnInteraction:false,
           },
           loop: true,
         
           
           pagination: {
             el: '.swiper-pagination',
         	clickable:true,
           },
         
           navigation: {
             nextEl: '.swiper-button-next',
             prevEl: '.swiper-button-prev',
           },
         
          
         }); 
      </script>
       
    </body>
</html>

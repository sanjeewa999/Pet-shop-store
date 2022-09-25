<?php

?>

<html>
    <head>
        <title>Pet Shop</title>
        <link rel="stylesheet" href="css/footer.css">
        <script src="https://kit.fontawesome.com/619bc20a51.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <h1>Pet Shop</h1>
        <footer>
         <div class = "row">
            <div class="col">
               <img src="imgs/logo.png" class="logo">
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

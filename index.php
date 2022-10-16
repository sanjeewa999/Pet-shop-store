<?php
    include ("php/connection.php");
?>

<html>
    <head>
        <title>Pet Shop</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/fp.css">
    </head>
    <body>
        <div class="container">
            <div class="navbar">
                <!-- <img src="imgs/logo.png" class="logo"> -->
                <nav>
                    <ul>
                        <li><a href="php/home.php">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Log in</a></li>
                    </ul>
                </nav>
                <img src="imgs/main/menu.png" class="menu-icon">
            </div>
            <div class="row">
                <div class="col">
                    <h1>Pet Care</h1>
                    <p>MyPets.lk is your One-stop shop for all things Pet related, selling a range of Top quality, correctly formulated Industry-trusted Pet supplies brands. We only work with official product agents in Sri Lanka and offer online payment and Islandwide delivery</p>
                    <button type="button"><a href="php/home.php">SHOP NOW</a></button>
                </div>
                <div class="col">
                    <div class="card card1">
                        <h5>Dogs</h5>
                        <!--<p>Dogs do speak, but only to those who know how to listen.</p> -->
                    </div>
                    <div class="card card2">
                        <h5>Cats & Dogs</h5>
                        <!-- <p>Cats are smarter than dogs. You can't get eight cats to pull a sled through snow.</p> -->
                    </div>
                    <div class="card card3">
                        <h5>Dogs & Cats</h5>
                        <!-- <p>Dogs come when they're called; cats take a message and get back to you later.</p> -->
                    </div>
                    <div class="card card4">
                        <h5>Cats</h5>
                        <!--<p>Cats are inquisitive, but hate to admit it.</p> -->
                    </div>
                </div>
            </div>
        </div>
       
        <fp>
        <div class="container-fluid">
            <div class="row">
            <?php $sql="SELECT * FROM product LIMIT 4";
               $result=mysqli_query($con,$sql);
               

               while($row=mysqli_fetch_array($result)){
  
               ?>
               

         <div class='col-lg-3 col-md-4 mb-3 ml-5 mr-5 mt-5'>
          <div class='card h-100'> 
          <a href="admin/adminlogin.php"><img class='card-img-top' src="admin/uploads/<?php echo $row['pro_img']?>"></a>
         <div class='card-body'>
            <h4 class='card-title'>
                   <a href='#'></a>
               <h4><?php echo $row['product_name'] ?></h4> 
                 <h5>Rs.<?php echo $row['selling_price'] ?></h5> 
                 <p class='card-text'><?php echo $row['product_name'] ?></p>
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

    </body>
</html>

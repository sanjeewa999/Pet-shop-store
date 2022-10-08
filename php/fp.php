
<?php
    include ("connection.php");
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="../css/fp.css">
        <link rel="styleshhet" href="../bootstrap-5.2.2-dist/css/bootstrap.min.css">
        <script src="text/javascript" src="../bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/fp1.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="../css/lightslider.css"> -->
        <!-- <script type="text/javascript" src="../js/fp2.js"></script> -->
        <!-- <script type="text/javascript" src="../js/lightslider.js"></script> -->
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
            <?php $sql="SELECT * FROM product";
               $result=mysqli_query($con,$sql);
               

               while($row=mysqli_fetch_array($result)){
  
               ?>
               

         <div class='col-lg-3 col-md-4 mb-3 ml-5 mr-5 mt-5'>
          <div class='card h-100'> 
          <a href='#'><img class='card-img-top' src="../imgs/home/<?php echo $row['pro_img'] ?>"></a>
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
    </body>
</html>
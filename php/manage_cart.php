<?php
session_start();

   include('connection.php');
   if (isset($_POST['addcart'])) {
      if(isset($_SESSION['cart'])){

         $items=array_column($_SESSION['cart'],'p_id');
         if (in_array($_POST['p_id'],$items)) {
            echo"<script>
                  alert('Item already added');
                  window.location.href='home.php';
            </script>";
         }else{

         $count=count($_SESSION['cart']);
         $_SESSION['cart'][$count]=array('p_id'=>$_POST['p_id'],'p_name'=>$_POST['p_name'],'p_img'=>$_POST['p_img'],'p_price'=>$_POST['p_price'],'p_qty'=>1);

         echo"<script>
                  alert('Item added');
                  window.location.href='home.php';
            </script>";
         }
      }else{
          $_SESSION['cart'][0]=array('p_id'=>$_POST['p_id'],'p_name'=>$_POST['p_name'],'p_img'=>$_POST['p_img'],'p_price'=>$_POST['p_price'],'p_qty'=>1);

          echo"<script>
                  alert('Item added');
                  window.location.href='home.php';
            </script>";
      }
  }
  if(isset($_POST['remove'])){
      foreach($_SESSION['cart']as $key=>$value){
          if ($value['p_id']==$_POST['p_id']) {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart']=array_values($_SESSION['cart']);
            echo"<script>
                alert('Item removed');
                window.location.href='cart.php';
            </script>";
          }
      }
  }

?>

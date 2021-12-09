<?php
require('../settings/core.php');
require('../controllers/product_controller.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Colins' iStore</title>
  <link rel="icon" href="../img/Colins.png" type="image/png">

</head>
<body>
  <?php include('menu2.php')?>

    <!-- ================ trending product section start ================= -->  
    <section style="padding-top: 20px;">
      <div class="container">
        <div class="section-intro pb-60px">
         
          <h2>Browse <span class="section-intro__style">iPhones</span></h2>
        </div>
        <div class="row">
        <?php  $products = select_all_products_controller(); 

        foreach($products as $product){
          echo "
            <div class='col-md-6 col-lg-4 col-xl-3'>
              <div class='card text-center card-product'>
                <div class='card-product__img'>
                  <img class='card-img' src='../images/products/{$product["product_image"]}' alt=''>
                </div>
                <div class='card-body'>
                  <p>{$product['cat_name']}</p>
                  <h4 class='card-product__title'>{$product['product_title']}</a></h4>
                  <p class='card-product__price'>GHS{$product['product_price']}</p>
                </div>
              </div>
            </div>
          ";
                    }
                    ?>
        </div>
      </div>
    </section>
    <!-- ================ trending product section end ================= -->  
    

  </main>


  <!--================ Start footer Area  =================-->	
	<?php include('footer.php')?>
	<!--================ End footer Area  =================-->



  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/skrollr.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>
  
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
        <script>
            $(".js-select2").each(function(){
                $(this).select2({
                    minimumResultsForSearch: 20,
                    dropdownParent: $(this).next('.dropDownSelect2')
                });
            })
        </script>
    <!--===============================================================================================-->
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/slick/slick.min.js"></script>
        <script src="js/slick-custom.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/parallax100/parallax100.js"></script>
        <script>
            $('.parallax100').parallax100();
        </script>
    <!--===============================================================================================-->
</body>
</html>
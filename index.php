<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Collins' iStore</title>
    <link rel="icon" href="img/Colins.png" type="image/png">
</head>
<body>
  <!--================ Start Header Menu Area =================-->
  <?php include('menu.php')?>
	<!--================ End Header Menu Area =================-->

  <main class="site-main">
    
    <!--================ Hero banner start =================-->
    <section class="">
      <div class="container">
        <div class="row no-gutters align-items-center">
          <div class="col-5 d-none d-sm-block">
            <div class="hero-banner__img">
              <img class="img-fluid" src="images/products/iphone-13-midnight-select-2021.png" alt="">
            </div>
          </div>
          <div class="col-sm-7 col-lg-6 offset-lg-1 pl-4 pl-md-5 pl-lg-0">
            <div class="hero-banner__content">
              <h4>Collins' iStore</h4>
              <h1>Get Your Dream iPhone</h1>
              <p>Collins' iStore is the best place to buy your iPhone in Lilongwe.</p>
              <a class="button" href="views/store.php">Shop Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Hero banner start =================-->
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
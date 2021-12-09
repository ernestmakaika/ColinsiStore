<?php

require('../settings/core.php');
require('../controllers/cart_controller.php');
check_login();
$customer_id= $_SESSION['user_id'];
$products = select_all_from_cart_controller($customer_id);
$amount = total_amount_controller($customer_id);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Aroma Shop - Cart</title>
	<link rel="icon" href="../img/Colins.png" type="../image/png">
</head>
<body>
  <!--================ Start Header Menu Area =================-->
    <?php include('menu.php')?>
	<!--================ End Header Menu Area =================-->

  <!--================Cart Area =================-->
  <section class="cart_area">
      <div class="container">
          <div class="cart_inner">
              <div class="table-responsive">
             
                  <table class="table">
                      <thead>
                          <tr>
                              <th scope="col"></th>
                              <th scope="col">Item</th>
                              <th scope="col"></th>
                              <th scope="col">Price</th>                     
                              <th scope="col">Quantity</th>
                              <th scope="col"></th>
                              <th scope="col"></th>
                              
                             
                          </tr>
                      </thead>
                      <tbody>
                      <?php foreach($products as $product){echo"
                          <tr class='text-nowrap'>
                              <td>
                                  <div class='media'>
                                      <div class='d-flex'>
                                          <img  src=../images/products/{$product['product_image']} width='100' height='100'>
                                      </div>
                                      <div class='media-body'>
                                          
                                      </div>
                                  </div>
                              </td>

                              <td>
                                <h5>{$product['product_title']}</h5>
                              </td>

                              <td>
                              </td>


                              <td>
                                  <h5>GHS {$product['product_price']}</h5>
                              </td>

                              

                              <form method = 'post' action='../actions/update_quantity.php'>
                              <input type='hidden' name='product_id' value= {$product['product_id']} ?>	
                              
                              <td>
                                  <div class='product_count'>
                                      <input type='number'  id='qty' name='quantity' maxlength='12' value={$product['qty']}>
                                  </div>
                              </td>



                              <td>
                              
                              <input class='flex-c-m stext-101 cl0 size-101 bg5 bor1 hov-btn1 p-lr-15' name = 'updateQty' type = 'submit'  value = 'Update Qty'>

                              </td>
                              </form>
                              <td>
                              <a class='flex-c-m stext-101 cl0 size-101 bg5 bor1 hov-btn1 p-lr-15 trans-04' href='../actions/remove_from_cart.php?product_id={$product['p_id']}'>Remove</a>

                              </td>
                              
                              <td>
                              </td>
                              
                          </tr>
                          
                          ";
                }

                echo"
                    <tr class='bottom_button'>
                      </tr>
                          <tr>
                              <td>

                              </td>
                              <td>

                              </td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td>
                                  <h5>Subtotal</h5>
                              </td>
                              <td>
                                  <h5>GHS{$amount['Amount']}</h5>
                              </td>
                              <td></td>
                              
                          </tr>

                          
                          <tr class='out_button_area'>
                              <td class='d-none-l'>

                              </td><td></td><td></td><td>
                              </td>
                              
                              <td>
                                  <div class='checkout_btn_inner d-flex align-items-center'>
                                      <a class='flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 ml-2' href='store.php'>Continue Shopping</a>
                                      <a class='flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 ml-2' href='checkout.php'>Proceed to checkout</a>
                                  </div>
                              </td>
                          </tr>
                          ";?>
                
                      </tbody>
                  </table>
               
              </div>
                <!-- script to update cart -->
    <script>
      function updatecart(product){
      $.ajax({
              url:'../actions/update_quantity.php',
              type:'POST',
              data:{
                  'pid':product.getAttribute('data-pid'),
                  'cid':ptoduct.getAttribute('data-cid'),
                  'qty':product.value
              },
         
          });
      }
    </script>
          </div>
      </div>
  </section>
  <!--================End Cart Area =================-->




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
</body>
</html>
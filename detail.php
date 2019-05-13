<?php
require_once('funciones.php');

// if (!isset($_GET['productID'])) {
//     var_dump('Producto no encontrado');
//     exit;
// }else {
//     $productID = $_GET['productID'];
//     $product = traerPorID($productID);
//     var_dump($product);
//     exit;
// }
 ?>
 <!DOCTYPE html>
 <html dir="ltr" lang="en">
 <head>

 <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
 <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
 <title>WinlerMarket - Products</title>

 <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
 <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
 <link href="css/animate.css" rel="stylesheet" type="text/css">
 <link href="css/css-plugin-collections.css" rel="stylesheet"/>
 <link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
 <link href="css/style-main.css" rel="stylesheet" type="text/css">
 <link href="css/preloader.css" rel="stylesheet" type="text/css">
 <link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
 <link href="css/responsive.css" rel="stylesheet" type="text/css">

 <link href="css/colors/theme-skin-orange.css" rel="stylesheet" type="text/css">

 <script src="js/jquery-2.2.4.min.js"></script>
 <script src="js/jquery-ui.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/jquery-plugin-collection.js"></script>

 </head>
 <body class="">
 <div id="wrapper" class="clearfix">

   <!-- Header -->
   <header id="header" class="header">
     <div class="header-top sm-text-center bg-theme-colored">
       <div class="container">
         <div class="row">

           <h3>Product list</h3>

         </div>
       </div>
     </div>

   </header>

   <!-- Start main-content -->
   <div class="main-content">

     <!-- Section: inner-header -->
     <section>
       <div class="container">
         <div class="section-content">
           <div class="row">
             <div class="product">
               <div class="col-md-5">
                 <div class="product-image">
                   <div class="zoom-gallery">
                     <a href="http://placehold.it/460x460" title="Title Here 1"><img src="http://placehold.it/460x460" alt=""></a>
                   </div>
                 </div>
               </div>
               <div class="col-md-7">
                 <div class="product-summary">
                   <h2 class="product-title">Saddles</h2>
                   <div class="product_review">
                     <ul class="review_text list-inline">
                       <li>
                         <div title="Rated 4.50 out of 5" class="star-rating"><span style="width: 90%;">4.50</span></div>
                       </li>
                       <li><a href="#"><span>2</span>Reviews</a></li>
                       <li><a href="#">Add reviews</a></li>
                     </ul>
                   </div>
                   <div class="price"> <del><span class="amount">$165.00</span></del> <ins><span class="amount">$160.00</span></ins> </div>
                   <div class="short-description">
                     <p>Donec volutpat purus tempor sem molestie, sed blandit lacus posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut posuere mollis nulla ut consectetur.</p>
                   </div>
                   <div class="tags"><strong>SKU:</strong> EA34</div>
                   <div class="category"><strong>Category:</strong> <a href="#">Helmets</a>, <a href="#">Horse Rugs</a></div>
                   <div class="tags"><strong>Tags:</strong> <a href="#">Saddles</a>, <a href="#">Whip</a></div>
                   <div class="cart-form-wrapper mt-30">
                     <form enctype="multipart/form-data" method="post" class="cart">
                       <input type="hidden" value="productID" name="add-to-cart">
                       <table class="table variations no-border">
                         <tbody>
                           <tr>
                             <td class="name">Size</td>
                             <td class="value">
                               <select class="form-control">
                                 <option value="">Choose an option...</option>
                                 <option value="large">Large</option>
                                 <option selected="selected" value="medium">Medium</option>
                                 <option value="small">Small</option>
                               </select>
                             </td>
                           </tr>
                           <tr>
                             <td class="name">Amount</td>
                             <td class="value">
                               <div class="quantity buttons_added">
                                 <input type="button" class="minus" value="-">
                                 <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                 <input type="button" class="plus" value="+">
                               </div>
                             </td>
                           </tr>
                         </tbody>
                       </table>
                       <button class="single_add_to_cart_button btn btn-theme-colored" type="submit">Add to cart</button>
                     </form>
                   </div>
                 </div>
               </div>
               <div class="col-md-12">
                 <div class="horizontal-tab product-tab">
                   <ul class="nav nav-tabs">
                     <li class="active"><a href="#tab1" data-toggle="tab">Description</a></li>
                     <li><a href="#tab2" data-toggle="tab">Additional Information</a></li>
                     <li><a href="#tab3" data-toggle="tab">Reviews</a></li>
                   </ul>
                   <div class="tab-content">
                     <div class="tab-pane fade in active" id="tab1">
                       <h3>Product Description</h3>
                       <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus voluptates nisi hic alias libero explicabo reiciendis sint ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae. One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus voluptates nisi hic alias libero explicabo reiciendis sint ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.</p>
                       <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus voluptates nisi hic alias libero explicabo reiciendis sint ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.</p>
                     </div>
                     <div class="tab-pane fade" id="tab2">
                       <table class="table table-striped">
                         <tbody>
                           <tr>
                             <th>Brand</th>
                             <td><p>Envato</p></td>
                           </tr>
                           <tr>
                             <th>Color</th>
                             <td><p>Brown</p></td>
                           </tr>
                           <tr>
                             <th>Size</th>
                             <td><p>Large, Medium</p></td>
                           </tr>
                           <tr>
                             <th>Weight</th>
                             <td>27 kg</td>
                           </tr>
                           <tr>
                             <th>Dimensions</th>
                             <td>16 x 22 x 123 cm</td>
                           </tr>
                         </tbody>
                       </table>
                     </div>
                     <div class="tab-pane fade" id="tab3">
                       <div class="reviews">
                         <ol class="commentlist">
                           <li class="comment">
                             <div class="media"> <a href="#" class="media-left"><img class="img-circle" alt="" src="https://placehold.it/75x75" width="75"></a>
                               <div class="media-body">
                                 <ul class="review_text list-inline">
                                   <li>
                                     <div title="Rated 5.00 out of 5" class="star-rating"><span style="width: 100%;">5.00</span></div>
                                   </li>
                                   <li>
                                     <h5 class="media-heading meta"><span class="author">Tom Joe</span> – Mar 15, 2015:</h5>
                                   </li>
                                 </ul>
                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat purus tempor sem molestie, sed blandit lacus posuere. Lorem ipsum dolor sit amet.</div>
                             </div>
                           </li>
                           <li class="comment">
                             <div class="media"> <a href="#" class="media-left"><img class="img-circle" alt="" src="https://placehold.it/75x75" width="75"></a>
                               <div class="media-body">
                                 <ul class="review_text list-inline">
                                   <li>
                                     <div title="Rated 4.00 out of 5" class="star-rating"><span style="width: 80%;">4.00</span></div>
                                   </li>
                                   <li>
                                     <h5 class="media-heading meta"><span class="author">Mark Doe</span> – Jan 23, 2015:</h5>
                                   </li>
                                 </ul>
                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat purus tempor sem molestie, sed blandit lacus posuere. Lorem ipsum dolor sit amet.</div>
                             </div>
                           </li>
                         </ol>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>

           </div>
         </div>
       </div>
     </section>

   <!-- end main-content -->

   </div>

   <!-- Footer -->
   <footer id="footer" class="footer" data-bg-img="images/footer-bg.png" data-bg-color="#25272e">


   </footer>
 <!-- end wrapper -->

 <!-- Footer Scripts -->
 <!-- JS | Custom script for all pages -->
 <script src="js/custom.js"></script>

 </body>
 </html>

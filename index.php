<?php
require_once('funciones.php');
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

     <section class="">
       <div class="container mt-30 mb-30 p-30">
         <div class="section-content">
           <div class="row">
             <div class="col-sm-12 col-md-9">
               <div class="row multi-row-clearfix">
                 <div class="products">

                     <?php if (count($products) == 0): ?>
                         <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                             <h3>No contamos constock</h3>
                         </div>
                     <?php else: ?>
                         <?php foreach ($products as $product): ?>
                             <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                               <div class="product pb-0">
                                 <span class="tag-sale"><?=$product->Category?></span>
                                 <div class="product-thumb">
                                   <img alt="" src="http://placehold.it/320x360" class="img-responsive img-fullwidth">
                                   <div class="overlay">
                                     <div class="btn-product-view-details">
                                       <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="detail.php?productID=<?=$product->ProductId?>">View detail</a>
                                     </div>
                                   </div>
                                 </div>
                                 <div class="product-details text-center bg-lighter pt-15 pb-10">
                                   <a href="detail.php"><h5 class="product-title mt-0"><?=$product->Name?></h5></a>

                                   <div class="price">
                                       <span><?=$product->SupplierName?></span>
                                   </div>
                                 </div>
                               </div>
                             </div>
                         <?php endforeach; ?>
                     <?php endif; ?>




                 </div>
               </div>
             </div>
             <div class="col-sm-12 col-md-3">
                 <a href="index.php">Limpiar Filtros</a>

               <div class="sidebar sidebar-right mt-sm-30">
                 <div class="widget">
                   <h5 class="widget-title line-bottom">Categories</h5>
                   <div class="categories">
                     <ul class="list list-border angle-double-right">
                         <?php foreach ($categories as $category): ?>
                             <li><a href="index.php?category=<?=$category->text?>"><?=$category->text?></a></li>
                         <?php endforeach; ?>
                     </ul>
                   </div>
                 </div>

               </div>
             </div>
             <div class="col-sm-12 col-md-3">
               <div class="sidebar sidebar-right mt-sm-30">
                 <div class="widget">
                   <h5 class="widget-title line-bottom">Brands</h5>
                   <div class="categories">
                     <ul class="list list-border angle-double-right">
                         <?php foreach ($brands as $brand): ?>
                             <li><a href="index.php?brand=<?=$brand->text?>"><?=$brand->text?></a></li>
                         <?php endforeach; ?>
                     </ul>
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
       <br>
       <h3 style="color:white; text-align:center">Contacto</h3>
       <div class="row">
           <div class="col-sm-8 col-sm-offset-2">
               <form class="contact-form-transparent" id="contact_form" action="submit-contact.php" name="contact-form" method="post">
                 <div class="row">
                   <div class="col-sm-12">
                     <div class="form-group">
                       <input id="form_name" name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                     </div>
                   </div>
                   <div class="col-sm-12">
                     <div class="form-group">
                       <input id="form_phone" name="form_phone" class="form-control" type="text" placeholder="Enter Phone" required="">
                     </div>
                   </div>
                   <div class="col-sm-6">
                     <div class="form-group">
                       <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                     </div>
                   </div>
                   <div class="col-sm-6">
                     <div class="form-group">
                       <input id="form_subject" name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                     </div>
                   </div>
                 </div>
                 <div class="form-group">
                   <textarea id="form_message" name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                 </div>
                 <div id="contact-form-result" class="alert alert-success" role="alert" style="display: none;">
                 </div>
                 <div class="form-group text-center mb-0">
                   <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                   <button data-loading-text="Please wait..." class="btn btn-colored btn-rounded btn-theme-colored pl-30 pr-30" type="submit">Send your message</button>
                 </div>
               </form>
           </div>
       </div>
   </footer>
 <script src="js/custom.js"></script>

 </body>
 </html>

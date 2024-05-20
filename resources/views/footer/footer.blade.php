 @include('index.home')

 <!-- Footer -->
 <footer class="text-center text-lg-start  d-flex flex-column mt-5"
     style="background-color: #766784; color:white !important">
     <!-- Grid container -->
     <div class="container-fluid p-4 pb-0 ">
         <!-- Section: Links -->
         <section>
             <!--Grid row-->
             <div class="row">
                 <!-- Grid column -->
                 <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 mb-3">
                     <h6 class="text-uppercase mb-4 font-weight-bold">CATEGORIES </h6>
                     <div class="widget_title" style="margin-bottom:10px;">
                         <a href="#">Women</a>
                     </div>
                     <div class="widget_title" style="margin-bottom:10px;">
                         <a href="# ">Men</a>
                     </div>
                     <div class="widget_title" style="margin-bottom:10px;">
                         <a href="# ">Shoes</a>
                     </div>
                     <div class="widget_title" style="margin-bottom:10px;">
                         <a href="# ">Watches</a>
                     </div>

                 </div>

                 <!-- Grid column -->

                 <hr class="w-100 clearfix d-md-none" />

                 <!-- Grid column -->
                 <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 mb-3">
                     <h6 class="text-uppercase mb-4 font-weight-bold">HELP</h6>
                     <div class="widget_title" style="margin-bottom:10px;">
                         <a href="#">Track Order</a>
                     </div>
                     <div class="widget_title" style="margin-bottom:10px;">
                         <a href="# ">Returns</a>
                     </div>
                     <div class="widget_title" style="margin-bottom:10px;">
                         <a href="# ">Shipping</a>
                     </div>
                     <div class="widget_title" style="margin-bottom:10px;">
                         <a href="# ">FAQs</a>
                     </div>

                 </div>
                 <!-- Grid column -->
                 <hr class="w-100 clearfix d-md-none" />
                 <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3 mb-3">
                     <h6 class="text-uppercase mb-4 font-weight-bold" style="margin-bottom:2px;">
                         GET IN TOUCH
                     </h6>
                     <p>Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us
                         on (+1) 96 716 6879
                     </p>
                     <div class="row d-flex justify-content-center align-item-center">
                         <div class="col-6 ">
                             <a> <i class="fa fa fa-facebook" style="font-size: 25px"> </i> </a>
                             <a> <i class="fa fa fa-instagram" style="font-size: 25px; margin-left:10px"> </i> </a>
                         </div>
                     </div>
                 </div>


                 <!-- Grid column -->
                 <hr class="w-100 clearfix d-md-none" />
                 <!-- Grid column -->
                 <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3 foot">
                     <h6 class="text-uppercase mb-4 font-weight-bold">News Letter</h6>
                     <div class="row">
                         <div class="col-md-6">
                             <div class="row">
                                 <div class="col-lg-12 col-md-12 col-sm-12 footer-email">
                                     <div class="input-container ">
                                         <input type="email" class="form-control" id="inputEmail"
                                             placeholder="Email address..">
                                     </div>
                                     <hr class="w-100">
                                 </div>

                             </div>

                             <div class="row">
                                 <div class="col-lg-12 col-md-12 col-sm-12 footer-button">
                                     <button type="button" class="oval-button mt-4" data-toggle="modal"
                                         data-target="#exampleModalCenter">
                                         Subscribe Us
                                     </button>
                                 </div>


                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <hr class="my-3">
         </section>
     </div>



 </footer>
 <script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
 <script>
     window.botpressWebChat.init({
         "composerPlaceholder": "Write a message",
         "botConversationDescription": "Shop With Us ",
         "botId": "716c4a25-2c38-40e3-b1dd-56dc013d9726",
         "hostUrl": "https://cdn.botpress.cloud/webchat/v1",
         "messagingUrl": "https://messaging.botpress.cloud",
         "clientId": "716c4a25-2c38-40e3-b1dd-56dc013d9726",
         "webhookId": "a75b040a-b690-4a7b-ac9f-e3f41cbd3c27",
         "lazySocket": true,
         "themeName": "prism",
         "botName": "E-commerce Site",
         "stylesheet": "https://webchat-styler-css.botpress.app/prod/370303c9-e1ca-4eca-8618-77002540d68f/v84425/style.css",
         "frontendVersion": "v1",
         "useSessionStorage": true,
         "theme": "prism",
         "themeColor": "rgb(154,77,227)"
     });
 </script>

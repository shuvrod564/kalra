
    <!-- Footer Wrapper Start -->
    <footer class="bg-dark"> 
        <div class="border-bottom pb-4 mb-4 pb-md-5 mb-lg-5" style="border-color:#fff3 !important">
            <div class="container"> 
                <div class="row g-3">
                    <div class="col-lg-8 text-center text-sm-start"> 
                        <h2 class="fs-2 fw-semibold text-white">Contact information</h2>
                        <p class="text-white fs-15 col-lg-8">Contact us today for a consultation, and let’s take the first step towards achieving financial success together.</p>
                    </div>
                    <div class="col-lg-4 contact__list">
                        <div class="d-flex gap-3 align-items-center pb-4">
                           <img src="assets/images/icon/email.webp" class="img-fluid" width="26" height="20" alt="email">
                           <div class="col"> 
                               <a class="text-white fw-semibold lead text-lowercase" href="#">hello@finteam.com</a>
                           </div>
                        </div>
                        <div class="d-flex gap-3 align-items-center pb-4">
                           <img src="assets/images/icon/tell-white.webp" class="img-fluid" width="27" height="27" alt="tell">
                           <div class="col"> 
                               <a class="text-white fw-semibold lead" href="tel:+447872908711">+44 7872 908711</a>
                           </div>
                        </div>
                        <div class="d-flex gap-3 align-items-center">
                           <img src="assets/images/icon/location-white.webp" class="img-fluid" width="22" height="30" alt="location">
                           <div class="col"> 
                               <address class="text-white fw-semibold mb-0 lead-sm">4140 Parker Rd. Allentown, India 56022</address>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">  
            <div class="row g-4">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <p class="lead fw-bold text-white">Services</p>
                    <ul class="links text-white">
                        <li class="mb-2"><a href="<?php echo $base_url;?>accounting-bookkeeping.php">Accounting & Bookkeeping</a></li>
                        <li class="mb-2"><a href="<?php echo $base_url;?>business-start-up.php">Business Start-Up & Business Development</a></li>
                        <li class="mb-2"><a href="<?php echo $base_url;?>company-formation.php">Company Formation</a></li>
                        <li class="mb-2"><a href="<?php echo $base_url;?>payroll-management.php">Payroll Management</a></li>
                        <li class="mb-2"><a href="<?php echo $base_url;?>financial-analysis.php">Financial Analysis & Business Advisory Services</a></li>
                        <li class="mb-2"><a href="<?php echo $base_url;?>vat-services.php">VAT Services</a></li>
                        <li class="mb-2"><a href="<?php echo $base_url;?>tax-planning.php">Tax Planning and Preparation</a></li>
                        <li class="mb-2"><a href="<?php echo $base_url;?>auditing-services-tax-planning.php">Auditing Services</a></li> 
                    </ul>
                </div><!--.//col-->
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6">
                    <p class="lead fw-semibold text-white">Company</p>        
                    <ul class="links text-white"> 
                        <li class="mb-2"><a href="<?php echo $base_url;?>about-us.php">About us</a></li>
                        <li class="mb-2"><a href="#">Careers</a></li>
                        <li class="mb-2"><a href="#">Press</a></li>
                        <li class="mb-2"><a href="#">News</a></li>
                        <li class="mb-2"><a href="<?php echo $base_url;?>contact-us.php">Contact</a></li>      
                        
                    </ul>
                </div><!--.//col-->
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="ps-lg-5"> 
                        <p class="lead fw-semibold text-white">Resources</p>
                        <ul class="links text-white"> 
                            <li class="mb-2"><a href="<?php echo $base_url;?>blog/">Blog</a></li>
                            <li class="mb-2"><a href="#">Help</a></li>
                            <li class="mb-2"><a href="#">center</a></li>
                            <li class="mb-2"><a href="#">Tutorials</a></li>
                            <li class="mb-2"><a href="#">Support</a></li>        
                        </ul>
                    </div>
                </div><!--.//col-->
                <div class="col-xl-2 col-lg-3 col-6">
                    <div class="ps-xl-5">
                        <p class="lead fw-semibold text-white">Other Links</p>
                        <ul class="links text-white">
                            <li class="mb-2"><a href="#">Legal</a></li>
                            <li class="mb-2"><a href="#">Terms</a></li>
                            <li class="mb-2"><a href="#">Privacy</a></li>
                            <li class="mb-2"><a href="#">Cookies</a></li>
                        </ul>
                    </div>
                </div><!--.//col-->
                <div class="col-xl-2 col-lg-3 col-6">
                    <div class="ps-xl-5">
                        <p class="lead fw-semibold text-white">Social Media</p>
                        <?php $classes="footer"; include('_social-links.inc.php'); ?>
                    </div>
                </div><!--.//col-->
                    
            </div><!--.//row--> 
        </div><!--.//container-->
        
        <div class="copyright__wrapp bg-dark py-3 mt-4 position-relative">
            <div class="container"> 
                <div class="row g-2 align-items-center">
                    <div class="col-md-12"> 
                        <div class="text-center mb-0 text-white fw-medium">
                            &copy; <?php echo date('Y'); ?> fin team | Designed by
                            <a href="#" target="_blank" class="d-inline text-white">
                                 Techpullers
                            </a>
                        </div>
                    </div>
                </div><!--.//row-->  
            </div><!--.//container-fluid-->
        </div>
    </footer>
    <!-- Footer Wrapper End -->
        
        <!-- <div class="copyright__wrapp bg-primary py-3 mt-4 mt-md-5 position-relative">
            <div class="container-fluid"> 
                <div class="row g-2 align-items-center">
                    
                    <div class="col-md-12"> 
                        <div class="text-center mb-0 text-white fw-medium">© Copyright <?php echo date('Y');?>. All rights reserved. Developed by <a href="https://techpullers.com/website-dev.php" target="_blank" class="d-inline text-white">Techpullers</a></div>
                    </div>
                </div> 
            </div>
        </div> -->
    </footer>
    <!-- Footer Wrapper End -->
     
 
    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="backTop" class="btn backTop position-fixed p-0 rounded-circle justify-content-center align-items-center" title="Go to top">
        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path fill="#fff" d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"/></svg>
    </button>

    <!-- JS: All Vendors --> 
    <script src="<?php echo $base_url;?>assets/js/vendors.min.js"></script>  
    <!-- JS: Designer Script -->
    <script src="<?php echo $base_url;?>assets/js/script.js"></script>  
   
 
  





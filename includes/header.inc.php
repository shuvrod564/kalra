
    <!-- Preloader, Main Navigation Menu --> 
    <!-- Top Nav Start -->
    <nav class="py-2 d-none d-md-block" style="background-color:#181818">
        <div class="container">
            <div class="d-flex flex-wrap gap-2 align-items-center justify-content-center justify-content-sm-between">
                <a href="tel:+919829195898" class="d-inline-flex align-items-center gap-2 fs-15 fw-normal text-white" aria-label="+91 98291 95898">
                <span>Have any questions?</span>
                    <span>+91 98291 95898</span>
                </a>
                <?php $classes="header_links"; include('_social-links.inc.php'); ?>   
            </div><!--.//flex-->
        </div><!--.//container-->
    </nav>
    <!-- Top Nav End -->
    
    <!-- navigation start --> 
    <nav class="navbar navbar-expand-lg smart-scroll" id="mainNav">
        <div class="container postion-relative">   
            <a href="<?php echo $base_url;?>" class="navbar-brand p-0 m-0 d-inline-block" aria-label="Kalra">
                <img src="<?php echo $base_url;?>assets/images/logo.svg" width="211" height="66" class="w-auto" alt="logo">
            </a>
            
            
            <div class="d-inline-flex align-items-center"> 
                <ul class="navbar-nav d-none d-lg-flex align-items-center position-relative">    
                    <li class="nav-item"> 
                        <a href="<?php echo $base_url;?>" class="nav-link">    
                            Home 
                        </a>   
                    </li>         
                    <li class="nav-item ms-lg-1 ms-xl-4"> 
                        <a href="<?php echo $base_url;?>about.php" class="nav-link">    
                            About Us
                        </a>   
                    </li>         
                    <li class="nav-item dropdown position-static ms-lg-1 ms-xl-4"> 
                        <a href="about.php" class="nav-link" id="drop1"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                            Services  
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg>
                        </a> 
                        <div class="dropdown-menu border-0 bg-white" aria-labelledby="drop1"> 
                            <ul class="row g-0 row-cols-2"> 
                                <li class="mb-2"><a href="<?php echo $base_url;?>teeth-removal.php" class="dropdown-item fw-medium">Teeth Removal And Surgery</a></li>
                                <li class="mb-2"><a href="<?php echo $base_url;?>teeth-whitening.php" class="dropdown-item fw-medium">Teeth Whitening / Bleaching</a></li>
                                <li class="mb-2"><a href="<?php echo $base_url;?>smile-designing.php" class="dropdown-item fw-medium">Smile Designing</a></li>
                                <li class="mb-2"><a href="<?php echo $base_url;?>cosmetic-dental-treatments.php" class="dropdown-item fw-medium">Cosmetic Dental Treatments</a></li>
                                <li class="mb-2"><a href="<?php echo $base_url;?>root-canal-treatment.php" class="dropdown-item fw-medium">Root Canal Treatment</a></li>
                                <li class="mb-2"><a href="<?php echo $base_url;?>preventive-treatments.php" class="dropdown-item fw-medium">Preventive Treatments</a></li> 
                                <li class="mb-2"><a href="<?php echo $base_url;?>children’s-dentistry.php" class="dropdown-item fw-medium">Children’s Dentistry</a></li> 
                                <li class="mb-2"><a href="<?php echo $base_url;?>dental-implants.php" class="dropdown-item fw-medium">Dental Implants</a></li> 
                                <li class="mb-2"><a href="<?php echo $base_url;?>dental-filling.php" class="dropdown-item fw-medium">Dental Filling</a></li> 
                                <li class="mb-2"><a href="<?php echo $base_url;?>gum-treatments.php" class="dropdown-item fw-medium">Gum Treatments</a></li> 
                                <li class="mb-2"><a href="<?php echo $base_url;?>dentures.php" class="dropdown-item fw-medium">Dentures</a></li> 
                                <li class="mb-2"><a href="<?php echo $base_url;?>braces-treatment.php" class="dropdown-item fw-medium">Braces Treatment</a></li> 
                                <li class="mb-2"><a href="<?php echo $base_url;?>tooth-bridge-and-crown-dentistry.php" class="dropdown-item fw-medium">Tooth Bridge And Crown Dentistry</a></li> 
                                <!-- <li class="mb-2"><a href="<?php echo $base_url;?>mastering-your-smile-makeover.php" class="dropdown-item fw-medium">Mastering Your Smile Makeover With India’s Top Cosmetic Dentistry Treatments</a></li> 
                                <li class="mb-2"><a href="<?php echo $base_url;?>unraveling-the-role-of-attachments.php" class="dropdown-item fw-medium">Unraveling The Role Of Attachments And Elastics In Invisalign Treatment</a></li> 
                                <li class="mb-2"><a href="<?php echo $base_url;?>a-key-oral-health.php" class="dropdown-item fw-medium">A Key To Oral Health</a></li>  -->
                            </ul> 
                        </div>
                    </li>                   
                    <li class="nav-item ms-lg-1 ms-xl-4"> 
                        <a href="#" class="nav-link"> 
                            Before After 
                        </a>  
                    </li>       
                    <li class="nav-item ms-lg-1 ms-xl-4"> 
                        <a href="#" class="nav-link"> 
                            Dental Tourism 
                        </a>  
                    </li>       
                    <li class="nav-item ms-lg-1 ms-xl-4"> 
                        <a href="<?php echo $base_url;?>blog/" class="nav-link"> 
                            Blog 
                        </a>  
                    </li>       
                    <li class="nav-item ms-lg-1 ms-xl-4"> 
                        <a href="#" class="nav-link"> 
                            Contact Us 
                        </a>  
                    </li>       
                </ul>
                 
            
            <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" class="navbar-toggler rounded p-0 d-block ms-1 ms-xl-3 d-lg-none border-0" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                </svg>
            </button>   
            <!-- <button onclick="openSideMenu()" class="navbar-toggler d-xl-none" type="button"><span></span><span></span><span></span></button>   -->
        </div>
    </nav> 
    <!-- navigation end --> 

   

    <div class="offcanvas offcanvas-end sideNav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header bg-primary pe-3">
            <p class="offcanvas-title lead-sm fw-semibold text-white mb-0" id="offcanvasExampleLabel">Kalra Dental Care</p>
            <button type="button" class="btn-close bg-white me-2 d-inline-block opacity-100" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body px-0">
        <ul class="links__list">
                <li><a href="<?php echo $base_url;?>" class="nav-link">Home</a></li>    
                <li><a href="<?php echo $base_url;?>about.php">About Us</a></li>
                <li> 
                    <a class="btn__link collapsed" data-bs-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1">
                        Services
                    </a>
                    <ul class="collapse" id="collapse1"> 
                        <li class="mb-2"><a href="<?php echo $base_url;?>teeth-removal.php">Teeth Removal And Surgery</a></li>
                        <li class="mb-2"><a href="<?php echo $base_url;?>teeth-whitening.php">Teeth Whitening / Bleaching</a></li>
                        <li class="mb-2"><a href="<?php echo $base_url;?>smile-designing.php">Smile Designing</a></li>
                        <li class="mb-2"><a href="<?php echo $base_url;?>cosmetic-dental-treatments.php">Cosmetic Dental Treatments</a></li>
                        <li class="mb-2"><a href="<?php echo $base_url;?>root-canal-treatment.php">Root Canal Treatment</a></li>
                        <li class="mb-2"><a href="<?php echo $base_url;?>preventive-treatments.php">Preventive Treatments</a></li> 
                        <li class="mb-2"><a href="<?php echo $base_url;?>children’s-dentistry.php">Children’s Dentistry</a></li> 
                        <li class="mb-2"><a href="<?php echo $base_url;?>dental-implants.php">Dental Implants</a></li> 
                        <li class="mb-2"><a href="<?php echo $base_url;?>dental-filling.php">Dental Filling</a></li> 
                        <li class="mb-2"><a href="<?php echo $base_url;?>gum-treatments.php">Gum Treatments</a></li> 
                        <li class="mb-2"><a href="<?php echo $base_url;?>dentures.php">Dentures</a></li> 
                        <li class="mb-2"><a href="<?php echo $base_url;?>braces-treatment.php">Braces Treatment</a></li> 
                        <li class="mb-2"><a href="<?php echo $base_url;?>tooth-bridge-and-crown-dentistry.php">Tooth Bridge And Crown Dentistry</a></li> 
                        <li class="mb-2"><a href="<?php echo $base_url;?>mastering-your-smile-makeover.php">Mastering Your Smile Makeover With India’s Top Cosmetic Dentistry Treatments</a></li> 
                        <li class="mb-2"><a href="<?php echo $base_url;?>unraveling-the-role-of-attachments.php">Unraveling The Role Of Attachments And Elastics In Invisalign Treatment</a></li> 
                        <li class="mb-2"><a href="<?php echo $base_url;?>a-key-oral-health.php">A Key To Oral Health</a></li> 
                    </ul>
                </li> 
                <li> 
                    <a href="#">
                        Before After 
                    </a> 
                </li> 
                <li> 
                    <a href="#">
                        Dental Tourism
                    </a> 
                </li>    
                <li><a href="<?php echo $base_url;?>blog/">Blog</a></li>
                <li><a href="#">Contact Us</a></li>   
            </ul>
        </div>
    </div><!--.//off-canvas-->
   
 
     
    <!-- navigation start --> 
    <nav class="navbar navbar-expand-lg smart-scroll postion-relative" id="mainNav">
        <div class="container">   
            <a href="<?php echo $base_url;?>" class="navbar-brand p-0 m-0 d-inline-block" aria-label="Kerala Cruises">
                <img src="<?php echo $base_url;?>assets/images/logo-01.svg" width="166" height="36" class="w-auto" alt="logo">
            </a>
            <ul class="navbar-nav d-none d-lg-flex align-items-center">    
                <li class="nav-item"> 
                    <a href="about-us.php" class="nav-link">    
                        About Us 
                    </a>   
                </li>         
                <li class="nav-item dropdown ms-lg-1 ms-xl-4"> 
                    <a href="#" class="nav-link" id="drop1"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                        Services 
                    </a> 
                    <ul class="dropdown-menu border-0 bg-white" aria-labelledby="drop1"> 
                        <li class="mb-2"><a href="<?php echo $base_url;?>accounting-bookkeeping.php" class="dropdown-item fw-medium">Accounting & Bookkeeping</a></li>
                        <li class="mb-2"><a href="<?php echo $base_url;?>business-start-up.php" class="dropdown-item fw-medium">Business Start-Up & Business Development</a></li>
                        <li class="mb-2"><a href="<?php echo $base_url;?>company-formation.php" class="dropdown-item fw-medium">Company Formation</a></li>
                        <li class="mb-2"><a href="<?php echo $base_url;?>payroll-management.php" class="dropdown-item fw-medium">Payroll Management</a></li>
                        <li class="mb-2"><a href="<?php echo $base_url;?>financial-analysis.php" class="dropdown-item fw-medium">Financial Analysis & Business Advisory Services</a></li>
                        <li class="mb-2"><a href="<?php echo $base_url;?>vat-services.php" class="dropdown-item fw-medium">VAT Services</a></li>
                        <li class="mb-2"><a href="<?php echo $base_url;?>tax-planning.php" class="dropdown-item fw-medium">Tax Planning and Preparation</a></li>
                        <li class="mb-2"><a href="<?php echo $base_url;?>auditing-services-tax-planning.php" class="dropdown-item fw-medium">Auditing Services</a></li> 
                    </ul> 
                </li>         
                <li class="nav-item ms-lg-1 ms-xl-4"> 
                    <a href="#" class="nav-link"> 
                        Your partner 
                    </a>  
                </li>       
                <li class="nav-item ms-lg-1 ms-xl-4"> 
                    <a href="#" class="nav-link"> 
                        Our expertise 
                    </a>  
                </li>       
                <li class="nav-item ms-lg-1 ms-xl-4"> 
                    <a href="<?php echo $base_url;?>contact-us.php" class="nav-link"> 
                        Contact us 
                    </a>  
                </li>       
            </ul>
             
            
            <div class="d-inline-flex align-items-center">

                <a href="#" class="nav-link btn btn-white px-4 height rounded-pill d-none d-sm-inline-flex" aria-label="Enquiry Now">
                    Enquiry Now
                </a>  
                
                <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" class="navbar-toggler rounded p-2 ms-3" type="button"><span></span><span></span><span></span></button>   
            </div>
            
            <!-- <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" class="navbar-toggler rounded p-2 d-block ms-1 ms-xl-3" type="button"><span></span><span></span><span></span></button>    -->
            <!-- <button onclick="openSideMenu()" class="navbar-toggler d-xl-none" type="button"><span></span><span></span><span></span></button>   -->
        </div>
    </nav> 
    <!-- navigation end --> 

   

    <div class="offcanvas offcanvas-end sideNav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header bg-primary">
            <p class="offcanvas-title lead-sm fw-semibold text-white mb-0" id="offcanvasExampleLabel">Finteam</p>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body px-0">
        <ul class="links__list">
                <li><a href="about-us.php">About Us</a></li>
                <li> 
                    <a class="btn__link collapsed" data-bs-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1">
                        Services
                    </a>
                    <ul class="collapse" id="collapse1"> 
                        <li class="mb-2"><a href="<?php echo $base_url;?>accounting-bookkeeping.php">Accounting & Bookkeeping</a></li>
                        <li class="mb-2"><a href="<?php echo $base_url;?>business-start-up.php">Business Start-Up & Business Development</a></li>
                        <li class="mb-2"><a href="<?php echo $base_url;?>company-formation.php">Company Formation</a></li>
                        <li class="mb-2"><a href="<?php echo $base_url;?>payroll-management.php">Payroll Management</a></li>
                        <li class="mb-2"><a href="<?php echo $base_url;?>financial-analysis.php">Financial Analysis & Business Advisory Services</a></li>
                        <li class="mb-2"><a href="<?php echo $base_url;?>vat-services.php">VAT Services</a></li>
                        <li class="mb-2"><a href="<?php echo $base_url;?>tax-planning.php">Tax Planning and Preparation</a></li>
                        <li class="mb-2"><a href="<?php echo $base_url;?>auditing-services-tax-planning.php">Auditing Services</a></li> 
                    </ul>
                </li> 
                <li> 
                    <a class="btn__link collapsed" data-bs-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">
                        Our expertise
                    </a>
                     
                </li> 
                <li>
                    
                    <ul class="collapse" id="collapse3"> 
                        <!-- <li><a href="<?php echo $base_url;?>houseboat-alleppey.php">Houseboat in Alleppey</a></li>
                        <li><a href="<?php echo $base_url;?>kayaking-alleppey.php">Kayaking in Alleppey</a></li>
                        <li><a href="<?php echo $base_url;?>shikara-ride-alleppey.php">Shikara Ride in Alleppey</a></li>
                        <li><a href="<?php echo $base_url;?>canoeing-alleppey.php"> Canoeing in Alleppey</a></li>  -->
                    </ul>
                </li>   
                <li><a href="<?php echo $base_url;?>blog/">Blog</a></li>
                <li><a href="contact-us.php">Contact Us</a></li>
            </ul>
        </div>
    </div><!--.//off-canvas-->
   
 
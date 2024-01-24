<?php include_once('../includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon"> 
    <title>Blogs | Kerala Cruises</title>
 
    <!-- All Stylesheets -->
    <?php $folder='blog'; include_once('../includes/stylesheets.inc.php'); ?> 
</head>
<body> 

    <!-- Preloader, Main Navigation Menu --> 
    <?php $folder='inside'; include_once('../includes/header.inc.php'); ?> 

    <!-- Header section Start -->
    <?php $title="Blogs"; include_once('../includes/page-header.inc.php');?>
    <!-- Header section End -->

    <!-- Blog Wrapper Start -->
    <section class="py-5">
        <div class="container py-lg-4">
            <div class="row g-3 g-xl-4">
                <div class="col-lg-4 col-md-6">
                    <div class=" border bg-white rounded-3">
                        <a href="mastering-your-smile-makeover.php">
                            <img 
                                class="img-fluid w-100 rounded-3" 
                                width="414" height="217" 
                                src="images/mastering-your-smile-makeover-sm.webp" 
                                alt="blog-img"
                            >  
                        </a>
                        <div class="p-3"> 
                            <p class="mb-3 opacity-25 fw-semibold">January 21, 2024</p>
                            <h3 class="lead fw-bold">
                                <a href="mastering-your-smile-makeover.php" class="link">
                                    Mastering Your Smile Makeover With India’s Top Cosmetic Dentistry Treatments
                                </a>
                            </h3>
                            <p class="fs-15 ellipsis-3">
                                Welcome to the realm of transformative smiles! At Kalra Dental Care, we understand that a smile makeover is not just a dental procedure; it's a journey towards a new you. Let's embark on an exploration of how our top-tier cosmetic dentistry treatments in India can redefine your smile and, indeed, your life.
                            </p>
                        </div>
                    </div>
                </div><!--//.col--> 
                <div class="col-lg-4 col-md-6">
                    <div class=" border bg-white rounded-3">
                        <a href="treatment-at-kalra-dental-care.php">
                            <img 
                                class="img-fluid w-100 rounded-3" 
                                width="414" height="217" 
                                src="images/treatment-at-kalra-dental-care-sm.webp" 
                                alt="blog-img"
                            >  
                        </a>
                        <div class="p-3"> 
                            <p class="mb-3 opacity-25 fw-semibold">January 22, 2024</p>
                            <h3 class="lead fw-bold">
                                <a href="treatment-at-kalra-dental-care.php" class="link">
                                    Unraveling the Role of Attachments and Elastics in Invisalign Treatment at Kalra Dental Care
                                </a>
                            </h3>
                            <p class="fs-15 ellipsis-3">
                                Welcome to our latest blog at Kalra Dental Care, where we're diving deep into the intricacies of Invisalign treatment, specifically focusing on the often-overlooked yet crucial components: attachments and elastics.
                            </p>
                        </div>
                    </div>
                </div><!--//.col--> 
                <div class="col-lg-4 col-md-6">
                    <div class=" border bg-white rounded-3">
                        <a href="oral-health.php">
                            <img 
                                class="img-fluid w-100 rounded-3" 
                                width="414" height="217" 
                                src="images/oral-health-sm.webp" 
                                alt="blog-img"
                            >  
                        </a>
                        <div class="p-3"> 
                            <p class="mb-3 opacity-25 fw-semibold">January 22, 2024</p>
                            <h3 class="lead fw-bold">
                                <a href="oral-health.php" class="link">
                                    Importance Of Regular Dental Check-Ups: A Key To Oral Health
                                </a>
                            </h3>
                            <p class="fs-15 ellipsis-3">
                                Welcome to our latest blog at Kalra Dental Care, where we're diving deep into the intricacies of Invisalign treatment, specifically focusing on the often-overlooked yet crucial components: attachments and elastics.
                            </p>
                        </div>
                    </div>
                </div><!--//.col--> 
                 
            </div><!--//.row--> 

            <!-- Pagination -->
            <?php 
                // $firstArrow="false"; $lastArrow="true"; 
                // $prevPageUrl="index.php";
                // $nextPageUrl="page-2.php"; 
                // $active="1";
                // include_once('_pagination.inc.php'); 
            ?>
 
        </div><!--.//container-->
    </section>
    <!-- Blog Wrapper End -->
 

    <!-- Footer and Script List --> 
    <?php $folder='inside'; include_once('../includes/footer.inc.php'); ?>
    
</body>
</html>
<?php include_once('../includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon"> 
    <title>Blogs | Kelra</title>
 
    <!-- All Stylesheets -->
    <?php $folder='blog'; include_once('../includes/stylesheets.inc.php'); ?> 
</head>
<body> 

    <!-- Preloader, Main Navigation Menu --> 
    <?php $folder='inside'; include_once('../includes/header.inc.php'); ?> 

    <!-- Header Wrapper Start -->
    <header class="page__header d-flex align-items-center bgi py-5" style="background-image: url('<?php echo $base_url;?>assets/images/home/startup-meting.webp');background-position: center bottom;">
        <div class="container-fluid py-3 py-sm-5 mt-md-5">
            <h1 class="display-4 text-white fw-semibold text-center mb-0 pt-lg-5 text-uppercase">Blogs</h1>
        </div>
    </header>
    <!-- Header Wrapper End -->

    <!-- Blog Wrapper Start -->
    <section class="py-5">
        <div class="container">
            <div class="row g-3 g-xl-4">
                <div class="col-lg-4">
                    <div class=" border bg-white p-2 p-sm-3 rounded-3">
                        <a href="top-cosmetic-dentistry-treatments.php">
                            <img 
                                class="img-fluid w-100 rounded-3" 
                                width="377" height="241" 
                                src="<?php echo $base_url;?>assets/images/blog/blog-img-01.webp" 
                                alt="blog-img"
                                >  
                        </a>
                        <div class="pt-2"> 
                            <p class="mb-3 opacity-25 fw-semibold">22 Jun, 2024</p>
                            <h3 class="lead fw-bold">
                                <a href="top-cosmetic-dentistry-treatments.php" class="link">
                                    Unraveling the Role of Attachments and Elastics in Invisalign Treatment at Kalra Dental Care
                                </a>
                            </h3>
                            <p class="fs-15 ellipsis-3">
                                Welcome to our latest blog at Kalra Dental Care, where we're diving deep into the intricacies of Invisalign treatment, specifically focusing on the often-overlooked yet crucial components: attachments and elastics.
                            </p>
                        </div>
                    </div>
                </div><!--//.col--> 
                <div class="col-lg-4">
                    <div class=" border bg-white p-2 p-sm-3 rounded-3">
                        <a href="elastics-invisalign-treatment.php">
                            <img 
                                class="img-fluid w-100 rounded-3" 
                                width="377" height="241" 
                                src="<?php echo $base_url;?>assets/images/blog/blog-img-01.webp" 
                                alt="blog-img"
                                >  
                        </a>
                        <div class="pt-2"> 
                            <p class="mb-3 opacity-25 fw-semibold">22 Jun, 2024</p>
                            <h3 class="lead fw-bold">
                                <a href="elastics-invisalign-treatment.php" class="link">
                                    Mastering Your Smile Makeover With India’s Top Cosmetic Dentistry Treatments
                                </a>
                            </h3>
                            <p class="fs-15 ellipsis-3">
                                Welcome to the realm of transformative smiles! At Kalra Dental Care, we understand that a smile makeover is not just a dental procedure; it's a journey towards a new you. Let's embark on an exploration of how our top-tier cosmetic dentistry treatments in India can redefine your smile and, indeed, your life.
                            </p>
                        </div>
                    </div>
                </div><!--//.col--> 
                <div class="col-lg-4">
                    <div class=" border bg-white p-2 p-sm-3 rounded-3">
                        <a href="key-to-oral-health.php">
                            <img 
                                class="img-fluid w-100 rounded-3" 
                                width="377" height="241" 
                                src="<?php echo $base_url;?>assets/images/blog/blog-img-01.webp" 
                                alt="blog-img"
                                >  
                        </a>
                        <div class="pt-2"> 
                            <p class="mb-3 opacity-25 fw-semibold">22 Jun, 2024</p>
                            <h3 class="lead fw-bold">
                                <a href="key-to-oral-health.php" class="link">
                                    Importance Of Regular Dental Check-Ups: A Key To Oral Health
                                </a>
                            </h3>
                            <p class="fs-15 ellipsis-3">
                                Welcome to our latest blog post at Kalra Dental Care, where we delve into the often-underestimated value of regular dental check-ups.
                            </p>
                        </div>
                    </div>
                </div><!--//.col--> 
            </div><!--//.row--> 

            <!-- Pagination -->
            <?php 
                $firstArrow="false"; $lastArrow="true"; 
                $prevPageUrl="index.php";
                $nextPageUrl="page-2.php"; 
                $active="1";
                include_once('_pagination.inc.php'); 
            ?>
 
        </div><!--.//container-->
    </section>
    <!-- Blog Wrapper End -->
 

    <!-- Footer and Script List --> 
    <?php $folder='inside'; include_once('../includes/footer.inc.php'); ?>
    
</body>
</html>
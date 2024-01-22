<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo $base_url;?>assets/images/favicon.ico" type="image/x-icon"> 
    <title>Kalra</title>
    
    <!-- All Stylesheets -->
    <?php $folder='root'; include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body class="pt-0"> 
    
    <!-- Preloader, Main Navigation Menu --> 
    <?php $folder='root'; include_once('includes/header.inc.php'); ?> 

    
    <!-- header section start -->
    <header class="header__wrapper py-4 d-flex align-items-end align-items-sm-center position-relative"> 
        <img 
            srcset="assets/images/home/hero-banner-sm.webp 575w, 
                assets/images/home/hero-banner-md.webp 992w,
                assets/images/home/hero-banner-lg.webp 1500w,
                assets/images/home/hero-banner.webp 2000w" 
            src="assets/images/home/hero-banner.webp" 
            sizes="(max-width:575px) 450px, (max-width:992px) 1000px, (max-width:1500px) 1400px"
            width="1903" height="600"
            alt="Kalra Detail Care"
            class="img-fluid position-absolute top-0 start-0 w-100 h-100 object-cover thumbnail"
        >
        <div class="w-100"> 
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7 text-center text-md-start z-index">
                        <h1 class="display-5 fw-bold">
                            <span class="text-primary">TOMORROW’S DENTISTRY</span>
                            <span class="text-white">PRACTICED TODAY.</span>
                        </h1>
                        <p class="fs-4 fw-medium text-white mb-2">Precise, Meticulous, Human.</p>
                        <p class="text-white mb-2 col-lg-9 col-md-8">Experience personalized care, enhanced precision, and remarkable results that will leave you smiling with confidence.</p>
                        <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-md-start py-3">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#enquireModal" class="btn btn-white height px-4" aria-label="Enquire Now">
                                APPOINTMENT
                            </button>  
                            <a href="tel:+919987654321" class="btn btn-outline-white blue height px-4 " aria-label="+919987654321">
                                +91 9987 654321
                            </a>  
                        </div>
                    </div><!--.//col-->
                     
                </div><!--.//row-->
            </div>
        </div><!--.//container-->
    </header>
    <div class="py-5" style="background: #535353;">
        <div class="container">
            <form action="#" method="post" id="contactPageForm" class="row g-3 align-items-end large__form">
                <div class="col-lg-3 col-md-6">
                    <label for="cname" class="mb-1 d-block text-3b text-white">Full Name</label>
                    <input type="text" name="name" id="cname" class="form-control py-3" placeholder="Enter Name">
                    <small class="text-danger error" id="cname_error"></small>
                </div><!--.//col-->
                <div class="col-lg-3 col-md-6">
                    <label for="cphone" class="mb-1 d-block text-3b text-white">Phone No</label>
                    <input type="text" name="phone" id="cphone" class="form-control py-3" placeholder="Enter Name">
                    <small class="text-danger error" id="cphone_error"></small>
                </div><!--.//col--> 
                <div class="col-lg-3 col-md-6">
                    <label for="cemail" class="mb-1 d-block text-3b text-white">Select Service</label>
                    <input type="text" name="email" id="cemail" class="form-control py-3" placeholder="Select Service">
                    <small class="text-danger error" id="cemail_error"></small>
                </div><!--.//col-->
                <div class="col-lg-3 col-md-6">
                    <button type="button" class="btn btn-primary light height py-3 rounded-2 px-5 w-100" aria-label="Enquire Now">
                        BOOK APPOINTMENT
                    </button>   
                </div><!--.//col-->
            </form>
        </div>
    </div><!--.//container-->
    <!-- header section end -->

    <!-- provide section Start -->
    <section class="provied__wraper py-5 scroller">
        <div class="container">
            <div class="row g-4 gx-lg-5">
                <div class="col-xl-3">
                    <div class="mb-3 text-center text-xl-start">
                        <span class="top__title">WHAT WE PROVIDE</span>
                        <h2 class="fs-1 text-primary fw-bold mb-xl-3">OUR DENTAL SERVICES</h2>
                        <p class="fw-medium">
                            Experience personalized care, enhanced precision, and remarkable results that will leave you smiling with confidence.
                        </p>
                        <div class="text-center text-xl-start mt-3 mt-lg-4 d-none d-xl-block">
                            <a href="#" class="btn btn-primary fw-semibold px-4 rounded-0 py-2"  aria-label="VIEW ALL">VIEW ALL</a> 
                        </div>
                    </div>
                </div><!--//.col-->
                <div class="col-xl-9">
                    <div class="ps-lg-4"> 
                        <div class="owl-carousel provideSlider"> 
                            <div class="service__card p-3 p-xl-4">
                                <figure class="m-0 icon__box bg-primary-light d-flex align-items-center justify-content-center">
                                    <img src="assets/images/icons/dantal-01.svg" width="42" height="56" class="img-fluid icon" alt="dantal">
                                </figure> 
                                <h3 class="fs-6 title text-dark mt-4 lead fw-bold mb-2 text-uppercase">
                                    <a href="#">RESTORATIVE / GENERAL DENTISTRY</a>
                                </h3>
                                <p class="card__text fs-15 overflow-auto">
                                    The goal of restorative dentistry is to restore the function and aesthetics of teeth that are broken, decaying, or missing. Fillings, crowns, bridges, implants, dentures, root canals, bonding, and veneers are just a few of the operations that are involved.
                                </p>
                                <div>
                                    <a href="#" class="link fw-medium fs-15"  aria-label="READ MORE">READ MORE</a> 
                                </div>
                            </div><!--.//card-->       
                            <div class="service__card p-3 p-xl-4">
                                <figure class="m-0 icon__box bg-yellow d-flex align-items-center justify-content-center">
                                    <img src="assets/images/icons/dantal-02.svg" width="42" height="56" class="img-fluid icon" alt="dantal">
                                </figure> 
                                <h3 class="fs-6 title text-dark mt-4 lead fw-bold mb-2 text-uppercase">
                                    <a href="#">COSMETIC DENTISTRY</a>
                                </h3>
                                <p class="card__text fs-15 overflow-auto">
                                    The goal of cosmetic dentistry is to improve the appearance of the teeth, gums, and smile. Dental implants for cosmetic purposes, gum contouring, crowns, veneers, bonding, orthodontics (such as Invisalign), and smile makeovers are among the procedures performed.
                                </p>
                                <div>
                                    <a href="#" class="link fw-medium fs-15"  aria-label="READ MORE">READ MORE</a> 
                                </div>
                            </div><!--.//card-->       
                            <div class="service__card p-3 p-xl-4">
                                <figure class="m-0 icon__box bg-primary d-flex align-items-center justify-content-center">
                                    <img src="assets/images/icons/dantal-03.svg" width="42" height="23" class="img-fluid icon" alt="dantal">
                                </figure> 
                                <h3 class="fs-6 title text-dark mt-4 lead fw-bold mb-2 text-uppercase">
                                    <a href="#">DENTAL IMPLANT</a>
                                </h3>
                                <p class="card__text fs-15 overflow-auto">
                                    Dental implant services include a comprehensive tooth replacement procedure. This include the initial evaluation and consultation to determine suitability, treatment planning, surgical implant insertion into the jawbone, osseointegration time, abutment placement, and the attachment of customised prosthetic teeth. The goal is to provide a safe and aesthetically pleasing tooth replacement option.
                                </p>
                                <div>
                                    <a href="#" class="link fw-medium fs-15"  aria-label="READ MORE">READ MORE</a> 
                                </div>
                            </div><!--.//card-->       
                        </div><!--.//carousel-->   
                    </div>
                    <div class="text-center mt-3 mt-lg-4 d-xl-none">
                        <a href="#" class="btn btn-primary fw-semibold px-4 rounded-0 py-2"  aria-label="VIEW ALL">VIEW ALL</a> 
                    </div>
                </div><!--//.col-->
            </div><!--//.row-->
        </div><!--//.container-->
    </section>
    <!-- provide section End -->
        
    <!--about us section Start -->
    <section class="about__wraper py-5">
        <div class="container">
            <div class="row gx-4 gx-lg-5">
                <div class="col-xxl-5 col-lg-6 text-center text-lg-start">
                    <div class="mb-3 text-center text-lg-start text-md-center">
                        <span class="top__title">ABOUT US</span>
                        <h2 class="fs-1 text-primary text-center text-lg-start fw-bold">KALARA DENTAL CARE</h2>
                        <p class="lead text-dark fw-semibold">ONE VISIT , ONE SMILE , ONE LIFETIME</p>
                        <p class="fs-15 text-dark">
                            Located in the centre of Bikaner, Kalra Dental Care offers a top medical facility committed to providing top-notch dental care. Our organisation, which is well-known for its dedication to patient care, has a staff of skilled and sympathetic dentists. These professionals are skilled at providing complete care, from simple examinations to intricate dental operations, guaranteeing that patients' oral health receives the highest priority. The institution takes great satisfaction in using modern techniques and cutting-edge equipment to provide the best possible dental care.
                        </p>
                        <div class="text-center text-lg-start mt-3 mt-lg-4">
                            <a href="about.php" class="btn btn-primary fw-semibold px-4 rounded-0 py-2" aria-label="KNOW MORE">KNOW MORE</a> 
                        </div>
                    </div>
                </div><!--//.col-->
                <div class="col-xxl-7 col-lg-6">
                    <div class="row g-3"> 
                        <div class="col-xxl-6 col-lg-12 col-md-6">
                            <div class=""> 
                                <div class="about__card">
                                    <div class="icon__round d-flex text-center align-items-center justify-content-center">
                                        <figure class="m-0">
                                            <img src="assets/images/icons/round.svg" width="40" height="40" class="img-fluid icon" alt="">
                                        </figure>
                                    </div>
                                    <h4 class="title text-dark mt-4 lead fw-semibold mb-2">
                                        Our Mission
                                    </h4>
                                    <p>
                                        Aware people on oral health so as to help in early diagnosis and treatment of diseases at initial stages thus to limit the further complications.
                                    </p>
                                </div><!--.//card-->       
                            </div>
                        </div><!--//.col-->
                        <div class="col-xxl-6 col-lg-12 col-md-6">
                            <div class=""> 
                                <div class="about__card">
                                    <div class="icon__round d-flex align-items-center justify-content-center">
                                        <figure class="m-0">
                                            <img src="assets/images/icons/ellipse.svg" width="40" height="40" class="img-fluid icon" alt="">
                                        </figure>
                                    </div>
                                    <h4 class="title text-dark mt-4 lead fw-semibold mb-2">
                                        Our Vision
                                    </h4>
                                    <p>
                                        Provide the highest quality dental care as an outstanding hospital chain through exceptional services to our community people.
                                    </p>
                                </div><!--.//card-->       
                            </div>
                        </div><!--//.col-->
                    </div>
                </div>
            </div><!--//.row-->
        </div><!--//.container-->
    </section>
    <!--about us section End -->

    <!--  Dr section Start -->
    <section class="py-5">
        <div class="container py-xl-5">
            <div class="row g-4 g-xxl-5">
                <div class="col-lg-6">
                    <img class="img-fluid w-100 object-fit-cover" width="624" height="624" src="assets/images/home/dr-puneet-bhushan.webp" alt="DR. PUNEET BHUSHAN KALRA">
                </div><!--//.col-->
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="py-lg-2  text-center text-lg-start"> 
                        <h2 class="fs-1 text-primary fw-bold">DR. PUNEET BHUSHAN KALRA</h2>
                        <p class="text-dark fw-semibold">MDS, <i>PERIODONTOLOGY AND ORAL IMPLANTOLOGY</i></p>
                        <p class="text-dark fs-15 mb-2">
                            With over twenty years of experience, Dr. Puneet Kalra has devoted his professional life to treating people and easing their dental agony. Dr. Kalra started his own dental clinic in 2000 and began an 18-year career in private practice after graduating with distinction from Rural Dental College, Pravanagar, Loni, Maharashtra, in the second year of his BDS programme in 1996. Then, in 2018, they enrolled in an MDS programme at Surendera Dental College in Sriganganagar, Rajasthan, with a focus on oral implantology and periodontology. He finished the programme in 2021, achieving distinction in the first year of study.
                        </p>
                        <p class="text-dark fs-15">
                            Kalra Dental Care, Dental Implant, Laser & Digital Dentistry Centre, provides individuals with a wide range of general dentistry services, such as esthetic fillings, advanced gum disease treatments, and routine cleanings. With state-of-the-art equipment like CBCT, Digital OPG, Primescan, and Primemill, chair-side zirconia crowns and bridges can be created in about an hour, and customised 3D printed dental solutions like crowns, aligners, and dentures can be similarly created. With a goal of bringing high-quality digital dentistry to every region of the state, Dr. Kalra’s purpose is to bring quality dental care to neglected communities. He advocates for individualised treatment and has a single-day, single-visit digital dentistry solution in mind.
                        </p>
                        <div>
                            <img src="assets/images/home/signature.webp" width="210" height="27" alt="signature">
                        </div>
                        <h3 class="fs-5 text-primary text-center text-lg-start fw-bold mt-3">DR. PUNEET BHUSHAN KALRA</h3>
                    </div>
                </div><!--//.col-->
            </div><!--//.row-->
        </div><!--//.container-->
    </section>
    <!--  Dr section End -->
      
    <!-- Promo Section start -->
    <?php include('includes/promo-section.inc.php'); ?>
    <!-- Promo Section End --> 

    <!-- center excellence section start --> 
    <section class="py-5 scroller">
        <div class="container pt-lg-3"> 
            <p class="top__title text-center">WHAT WE DO</p>
            <h2 class="fs-1 text-primary text-center fw-bold mb-3 mb-lg-4">CENTRE OF EXCELLENCE</h2>
            <div class="owl-carousel excellenceCarousel">
                <div class="border bg-white rounded-3 service__card large">
                    <div class="">
                        <img 
                            class="img-fluid w-100 rounded-3" 
                            width="419" height="176" 
                            src="assets/images/home/close-up.webp" 
                            alt="SINGLE SITTING ROOT CANAL (PAINLESS)"
                        >  
                    </div>
                    <div class="px-3 pb-3 px-lg-4 caption"> 
                        <figure class="m-0 icon__box bg-primary-light d-flex align-items-center justify-content-center">
                            <img src="assets/images/icons/dantal-01.svg" width="40" height="53" class="img-fluid icon" alt="SINGLE SITTING ROOT CANAL (PAINLESS)">
                        </figure> 
                        <h3 class="title text-dark mt-4 lead fw-bold mb-2">
                            SINGLE SITTING ROOT CANAL (PAINLESS)
                        </h3>
                        <p class="card__text fs-15 overflow-auto">
                            Experience painless, single-sitting root canal procedures, made possible by advanced techniques and state-of-the-art technology. We deliver exceptional care that provides a comfortable, pain-free and effective solution in just one session.
                        </p>
                        <div>
                            <a href="#" class="fw-semibold"  aria-label="READ MORE">READ MORE</a> 
                        </div>
                    </div>
                </div><!--//.card-->
                <div class="border bg-white rounded-3 service__card large">
                    <div>
                        <img 
                            class="img-fluid w-100 rounded-3" 
                            width="419" height="176" 
                            src="assets/images/home/portrait-female.webp" 
                            alt="DENTAL IMPLANTS"
                        >  
                    </div>
                    <div class="px-3 pb-3 px-lg-4 caption"> 
                        <figure class="m-0 icon__box bg-yellow d-flex align-items-center justify-content-center">
                            <img src="assets/images/icons/dantal-02.svg" width="39" height="53" class="img-fluid icon" alt="DENTAL IMPLANTS">
                        </figure> 
                        <h3 class="title text-dark mt-4 lead fw-bold mb-2">
                            DENTAL IMPLANTS
                        </h3>
                        <p class="card__text fs-15 overflow-auto">
                            Specialised dental implant treatments, state-of-the-art methods and individualised attention can restore the appearance and functionality of your smile. Using premium materials and cutting-edge technology, experience a smooth procedure from consultation to implantation.
                        </p>
                        <div>
                            <a href="#" class="fw-semibold"  aria-label="READ MORE">READ MORE</a> 
                        </div>
                    </div>
                </div><!--//.card-->
                <div class="border bg-white rounded-3 service__card large">
                    <div>
                        <img 
                            class="img-fluid w-100 rounded-3" 
                            width="419" height="176" 
                            src="assets/images/home/close-up.webp" 
                            alt="ORTHODONTIC BRACES"
                        >  
                    </div>
                    <div class="px-3 pb-3 px-lg-4 caption"> 
                        <figure class="m-0 icon__box bg-primary d-flex align-items-center justify-content-center">
                            <img src="assets/images/icons/dantal-03.svg" width="53" height="29" class="img-fluid icon teeth" alt="ORTHODONTIC BRACES">
                        </figure>
                        
                        <h3 class="title text-dark mt-4 lead fw-bold mb-2">
                            ORTHODONTIC BRACES
                        </h3>
                        <p class="card__text fs-15 overflow-auto">
                            Premium orthodontic braces procedures intended to improve and align your smile. With efficient individualised treatment programmes and an emphasis on accuracy and attention, enjoy a smile that is straighter, healthier, and has a lasting improvement in your oral health.
                        </p>
                        <div>
                            <a href="#" class="fw-semibold"  aria-label="READ MORE">READ MORE</a> 
                        </div>
                    </div>
                </div><!--//.card--> 
            </div><!--//.owl-carousel-->
        </div><!--//.container-->
    </section><!-- center excellence section end -->
     
    <!-- What Cerec Section Start -->
    <section class="py-sm-5 scroller"> 
        <div class="container">
            <div class="row g-4 gx-xl-5 align-items-center">
                <div class="col-lg-5 order-lg-2">
                    <div class="text-center text-lg-start pt-4">
                        <p class="lead mb-0">CEREC</p>
                        <h2 class="fs-1 text-26 fw-bold mb-3">What is CEREC?</h2>
                        <p class="">
                        <strong>CEREC is the short term for Chairside Economical Restoration of Esthetic Ceramics, or CEramic REConstruction.</strong></p>
                        <p>
                            CAD/CAM (computer aided design/computer aided manufacturing) technology to take impressions quickly and generate a precisely fitted filling so you can leave Discovery Dental sooner.
                        </p>
                        <div class="btns mt-3">
                            <div class="mt-4">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#enquireModal" class="btn btn-dark height py-3 rounded-3 px-5" aria-label="KNOW MORE">
                                    KNOW MORE
                                </button>  
                            </div>
                        </div>  
                    </div>
                </div><!--//.col-->
                <div class="col-lg-7 order-lg-1">
                    <div class="wraper__section">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="card transition mt-lg-5">
                                    <div class="p-3 p-lg-4">
                                        <div class="icon__round d-flex align-items-center justify-content-center">
                                            <figure class="m-0">
                                                <img src="assets/images/icons/growing.svg" width="40" height="40" class="img-fluid icon" alt="">
                                            </figure>
                                        </div>
                                        <h4 class="fs-5 title text-dark mt-4  fw-medium mb-2">
                                            Growing patient satisfaction and practice image
                                        </h4>
                                        <p class="card__text fs-15 overflow-auto">
                                            Offers patients the convenience of high-quality restorations and a modern treatment in a single visit. No impression trays, fewer injections, and abstinence of temporaries lead to patient recommendations.
                                        </p>
                                    </div>
                                </div><!--.//card-->   
                                <div class="card transition mt-4">
                                    <div class="p-3 p-lg-4">
                                        <div class="icon__round d-flex align-items-center justify-content-center">
                                            <figure class="m-0">
                                                <img src="assets/images/icons/growing.svg" width="40" height="40" class="img-fluid icon" alt="">
                                            </figure>
                                        </div>
                                        <h4 class="fs-5 title text-dark mt-4  fw-medium mb-2">
                                            Clinical safety and full quality control
                                        </h4>
                                        <p class="card__text fs-15 overflow-auto">
                                            CEREC users are in control of the whole workflow, from scanning to the completed restoration. This leads to clinically reliable results with no surprises and no extensive reworking. Every part of the latest CEREC system works in seamless harmony with the others, like a perfectly synchronized team.
                                        </p>
                                    </div>
                                </div><!--.//card-->     
                            </div><!--./col-->
                            <div class="col-md-6">
                                <div class="card transition">
                                    <div class="p-3 p-lg-4">
                                        <div class="icon__round d-flex align-items-center justify-content-center">
                                            <figure class="m-0">
                                                <img src="assets/images/icons/expansion.svg" width="40" height="40" class="img-fluid icon" alt="">
                                            </figure>
                                        </div>
                                        <h4 class="fs-5 title text-dark mt-4  fw-medium mb-2">
                                            Expansion of the range of indications
                                        </h4>
                                        <p class="card__text fs-15 overflow-auto">
                                            From bridges to crowns, from abutments to veneers: Expand the range of indications with CEREC seamless and validated workflows for restorative, implantology and orthodontics. The added value remains in your dental office and increases profitability.
                                        </p>
                                    </div>
                                </div><!--.//card--> 
                                <div class="card transition tran mt-4">
                                    <div class="p-3 p-lg-4">
                                        <div class="icon__round d-flex align-items-center justify-content-center">
                                            <figure class="m-0">
                                                <img src="assets/images/icons/expansion.svg" width="40" height="40" class="img-fluid icon" alt="">
                                            </figure>
                                        </div>
                                        <h4 class="fs-5 title text-dark mt-4 fw-medium mb-2">
                                            Easy practice integration
                                        </h4>
                                        <p class="card__text fs-15 overflow-auto">
                                            The integration of CEREC into your practice is fully supported, so you can start to streamline workflows straight away. Automated workflows between the intraoral scanner, design software, milling machine and furnace allow for treatment steps to be delegated to the practice team and increase efficiency.
                                        </p>
                                    </div>
                                </div><!--.//card-->     
                            </div><!--./col--> 
                        </div><!--.//row--> 
                    </div><!--.//werper__section--> 
                </div><!--.//col-->
               
            </div><!--.//row-->        
        </div><!--.//container-->
    </section>
    <!-- What Cerec Section End -->

    <!-- Our Gallery section Start -->
    <section class="py-5">
        <div class="container mt-lg-3">
            <p class="lead text-center mb-0">Photos and videos</p>
            <h2 class="fs-1 text-primary text-center fw-bold mb-3">Our Gallery</h2>
            <div class="row g-2">
                <div class="col-md-6 d-flex">
                    <figure class="mb-0 d-flex w-100">
                        <img 
                            class="img-fluid w-100 border" 
                            width="642" height="512" 
                            src="assets/images/gallery/gallery-01.webp" 
                            alt="Kalra Dental Care Gallery"
                        >
                    </figure> 
                </div><!--//.col-->
                <div class="col-md-6">
                    <div class="row g-2">
                        <div class="col-md-6"> 
                            <div class="gallery__item border-0"> 
                                <figure class="mb-0">
                                    <img 
                                        class="img-fluid w-100" 
                                        width="313" height="252" 
                                        src="assets/images/gallery/gallery-02.webp" 
                                        alt="Kalra Dental Care Gallery"
                                    >   
                                </figure>
                            </div>
                            <div class="gallery__item border-0 mt-2"> 
                                <figure class="mb-0">
                                    <img 
                                        class="img-fluid w-100" 
                                        width="313" height="252" 
                                        src="assets/images/gallery/gallery-03.webp" 
                                        alt="Kalra Dental Care Gallery"
                                    >   
                                </figure>
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <figure class="mb-0">
                                <img 
                                    class="img-fluid w-100 border" 
                                    width="316" height="512" 
                                    src="assets/images/gallery/gallery-04.webp" 
                                    alt="Kalra Dental Care Gallery"
                                >
                            </figure> 
                        </div>
                    </div>
                </div><!--//.col--> 
            </div><!--//.row--> 
        </div><!---//.container-->
    </section>
    <!-- Our Gallery section End -->


    <!-- Testimional Section Start -->
    <section class="py-5" style="background-color: #F4F9FC">
        <div class="container mb-lg-4">
            <h2 class="fs-1 text-primary text-center fw-bold mb-3">Testimonials</h2>
            <p class="col-lg-8 mx-auto text-center">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
            </p>
            <div class="owl-carousel testimionalSlider mt-4 mt-md-5"> 
                <div class="testi__card pt-5 position-relative">
                    <div class="thumbnail position-absolute start-50 translate-middle-x">
                        <img 
                            class="img-fluid rounded-circle" 
                            width="100" height="101" 
                            src="assets/images/home/testimonial.webp" 
                            alt=""
                        >
                    </div>
                    <div class="caption p-4"> 
                        <p class="fst-italic">
                            “Dude, your stuff is the bomb! Your company is truly upstanding and is behind its product 100%. Man, this thing is getting better and better as I learn more about it. Buy this now. “
                        </p>
                        <div class="round__box d-flex d-block align-items-center justify-content-center">
                            <p class="text-white fw-semibold mb-0">5.0</p>
                        </div>
                        <div class="d-flex gap-3 align-items-center">
                            <img src="assets/images/home/star-logo.webp" class="img-fluid rating" width="160" height="" alt="star"> 
                            <div class="col">
                                <p class="lead text-primary fw-bold mb-0 lh-1">- Lorne V.</p>
                                <p class="fs-15 mb-0">Customer</p>
                            </div>
                        </div> 
                    </div> 
                </div>
            </div><!--//.testi__card-->
        </div><!--//.container-->
    </section>
    <!-- Testmional Section End -->
    
    <!--Make Appointment section Start -->
    <?php include_once('includes/make-mppointment.php'); ?> 
    <!--Make Appointment section End -->
    
    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
 
</body>
</html>
 
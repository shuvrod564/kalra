<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon(1).ico" type="image/x-icon"> 
    <title>Kalra</title>
    
    <!-- All Stylesheets -->
    <?php $folder='root'; include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body> 
    
    <!-- Preloader, Main Navigation Menu --> 
    <?php $folder='root'; include_once('includes/header.inc.php'); ?> 
    
    
    
    <!-- header section start -->
    <header class="header__wrapper pt-3">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="fs-1 fw-bold">
                        <span class="lg text-primary">TOMORROW’S DENTISTRY</span>
                        <span class="md text-white">PRACTICED TODAY.</span>
                        <span class="fs-4 fw-semibold text-white d-block">Precise, Meticulous, Human.</span>
                    </h1>
                    <p class="text-white">Experience personalized care, enhanced precision, and remarkable results that will leave you smiling with confidence.</p>
                    <div class="d-flex flex-wrap gap-4 justify-content-center justify-content-lg-start">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#enquireModal" class="btn btn-white height" aria-label="Enquire Now">
                            APPOINTMENT
                        </button>  
                        <a href="#" class="btn btn-outline-primary blue height" aria-label="+919987654321">
                            +91 9987 654321
                        </a>  
                    </div>
                </div><!--.//col-->
                <div class="col-lg-6 mt-2">
                    <img 
                    src="assets/images/home/hero-bg.webp" 
                    width="600" height="600"
                    alt=""
                    class="img-fluid hero__thamnail z-index: 0; w-100 h-100"
                    >
                </div><!--.//col-->
            </div><!--.//row-->
        </div><!--.//container-->
        <div class="py-5" style="background: #535353;">
            <div class="container">
                <form action="#" method="post" id="contactPageForm" class="row">
                    <div class="col-lg-3">
                        <label for="cname" class="mb-0 text-3b text-white">Full Name</label>
                        <input type="text" name="name" id="cname" class="form-control py-3" placeholder="Enter Name">
                        <small class="text-danger error" id="cname_error"></small>
                    </div><!--.//col-->
                    <div class="col-lg-3">
                        <label for="cphone" class="mb-0 text-3b text-white">Phone No</label>
                        <input type="text" name="phone" id="cphone" class="form-control py-3" placeholder="Enter Name">
                        <small class="text-danger error" id="cphone_error"></small>
                    </div><!--.//col--> 
                    <div class="col-lg-3">
                        <label for="cemail" class="mb-0 text-3b text-white">Select Service</label>
                        <input type="text" name="email" id="cemail" class="form-control py-3" placeholder="Select Service">
                        <small class="text-danger error" id="cemail_error"></small>
                    </div><!--.//col-->
                    <div class="col-lg-3 mb-0">
                        <label for="cemail" class="text-3b mb-0"></label>
                        <input type="text" name="email" id="cemail" class="form-control py-3">
                        <small class="text-danger error" id="cemail_error"></small>
                    </div><!--.//col-->
                </form>
            </div>
        </div><!--.//container-->
    </header>
    <!-- header section end -->

    <!-- provide section Start -->
    <section class="provied__wraper py-5">
        <div class="container">
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 text-center text-lg-start">
                    <div class="mb-3 text-start text-lg-start text-md-center">
                        <span class="fw-medium lead text-primary mt-3 mb-0">WHAT WE PROVIDE</span>
                        <h2 class="fs-2 text-dark text-center text-lg-start fw-bold mb-3">OUR DENTAL SERVICES</h2>
                        <p class="text-center fw-medium text-lg-start">
                            Experience personalized care, enhanced precision, and remarkable results that will leave you smiling with confidence.
                        </p>
                        <div class="text-center text-lg-start mt-3 mt-lg-4">
                            <a href="#" class="btn btn-primary fw-semibold px-4 rounded-0 py-2"  aria-label="VIEW ALL">VIEW ALL</a> 
                        </div>
                    </div>
                </div><!--//.col-->
                <div class="col-lg-9">
                    <div class="ps-lg-4"> 
                        <div class="owl-carousel provideSlider"> 
                            <div class="service__card p-3 p-xl-4">
                                <div class="icon__box d-flex align-items-center justify-content-center">
                                    <figure class="m-0">
                                        <img src="assets/images/icons/dantal-01.svg" width="40" height="40" class="img-fluid icon" alt="">
                                    </figure>
                                </div>
                                <h3 class="fs-6 title text-grey mt-4 lead fw-bold mb-2">
                                    RESTORATIVE / GENERAL DENTISTRY
                                </h3>
                                <p class="card__text">
                                    The goal of restorative dentistry is to restore the function and aesthetics of teeth that are broken, decaying, or missing. Fillings, crowns, bridges, implants, dentures, root canals, bonding, and veneers are just a few of the operations that are involved.
                                    <div>
                                        <a href="#" class="fw-semibold"  aria-label="READ MORE">READ MORE</a> 
                                    </div>
                                </p>
                            </div><!--.//card-->       
                            <div class="service__card p-3 p-xl-4">
                                <div class="icon__box d-flex align-items-center justify-content-center">
                                    <figure class="m-0">
                                        <img src="assets/images/icons/dantal-02.svg" width="40" height="40" class="img-fluid icon" alt="">
                                    </figure>
                                </div>
                                <h3 class="fs-6 title text-grey mt-4 lead fw-bold mb-2">
                                    COSMETIC DENTISTRY
                                </h3>
                                <p class="card__text">
                                        The goal of cosmetic dentistry is to improve the appearance of the teeth, gums, and smile. Dental implants for cosmetic purposes, gum contouring, crowns, veneers, bonding, orthodontics (such as Invisalign), and smile makeovers are among the procedures performed.
                                    <div>
                                        <a href="#" class="fw-semibold"  aria-label="READ MORE">READ MORE</a> 
                                    </div>
                                </p>
                            </div><!--.//card-->       
                            <div class="service__card p-3 p-xl-4">
                                <div class="icon__box d-flex align-items-center justify-content-center">
                                    <figure class="m-0">
                                        <img src="assets/images/icons/dantal-03.svg" width="40" height="40" class="img-fluid icon" alt="">
                                    </figure>
                                </div>
                                <h3 class="fs-6 title text-grey mt-4 lead fw-bold mb-2">
                                    DENTAL IMPLANT
                                </h3>
                                <p class="card__text">
                                        Dental implant services include a comprehensive tooth replacement procedure. This include the initial evaluation and consultation to determine suitability, treatment planning, surgical implant insertion into the jawbone, osseointegration time, abutment placement, and the attachment of customised prosthetic teeth. The goal is to provide a safe and aesthetically pleasing tooth replacement option.
                                    <div>
                                        <a href="#" class="fw-semibold"  aria-label="READ MORE">READ MORE</a> 
                                    </div>
                                </p>
                            </div><!--.//card-->       
                        </div><!--.//carousel-->   
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
                <div class="col-lg-4 text-center text-lg-start">
                    <div class="mb-3 text-start text-lg-start text-md-center">
                        <span class="fw-medium lead text-primary mt-3 mb-0">ABOUT US</span>
                        <h2 class="fs-2 text-dark text-center text-lg-start fw-bold mb-3">KALARA DENTAL CARE</h2>
                        <span class="lead text-grey fw-semibold mt-3 mb-o">ONE VISIT , ONE SMILE , ONE LIFETIME</span>
                        <p class="text-center fw-medium text-lg-start">
                            Experience personalized care, enhanced precision, and remarkable results that will leave you smiling with confidence.
                        </p>
                        <div class="text-center text-lg-start mt-3 mt-lg-4">
                            <a href="#" class="btn btn-primary fw-semibold px-4 rounded-0 py-2"  aria-label="VIEW ALL">VIEW ALL</a> 
                        </div>
                    </div>
                </div><!--//.col-->
                <div class="col-lg-4">
                    <div class="ps-lg-4"> 
                        <div class="about__card">
                            <div class="icon__round d-flex align-items-center justify-content-center">
                                <figure class="m-0">
                                    <img src="assets/images/icons/round.svg" width="40" height="40" class="img-fluid icon" alt="">
                                </figure>
                            </div>
                            <h4 class="title text-grey mt-4 lead fw-semibold mb-2">
                                Our Mission
                            </h4>
                            <p>
                                Aware people on oral health so as to help in early diagnosis and treatment of diseases at initial stages thus to limit the further complications.
                            </p>
                        </div><!--.//card-->       
                    </div>
                </div><!--//.col-->
                <div class="col-lg-4">
                    <div class="ps-lg-4"> 
                        <div class="about__card">
                            <div class="icon__round d-flex align-items-center justify-content-center">
                                <figure class="m-0">
                                    <img src="assets/images/icons/ellipse.svg" width="40" height="40" class="img-fluid icon" alt="">
                                </figure>
                            </div>
                            <h4 class="title text-grey mt-4 lead fw-semibold mb-2">
                                Our Vision
                            </h4>
                            <p>
                                Provide the highest quality dental care as an outstanding hospital chain through exceptional services to our community people.
                            </p>
                        </div><!--.//card-->       
                    </div>
                </div><!--//.col-->
            </div><!--//.row-->
        </div><!--//.container-->
    </section>
    <!--about us section End -->

    <!--  Dr section Start -->
    <section class="py-4 py-lg-5">
        <div class="container py-xl-5">
            <div class="row g-4 g-lg-5">
                <div class="col-lg-6 d-flex mt-md-0">
                    <img class="img-fluid w-100 object-fit-cover" width="624" height="624" src="assets/images/home/dr-img.webp" alt="Dr">
                </div><!--//.col-->
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="w-100 py-lg-4"> 
                        <h2 class="fs-2 text-dark text-center text-lg-start fw-bold mb-3">DR. PUNEET BHUSHAN KALRA</h2>
                        <p class="desc fs-15">
                            With over twenty years of experience, Dr. Puneet Kalra has devoted his professional life to treating people and easing their dental agony. Dr. Kalra started his own dental clinic in 2000 and began an 18-year career in private practice after graduating with distinction from Rural Dental College, Pravanagar, Loni, Maharashtra, in the second year of his BDS programme in 1996. Then, in 2018, they enrolled in an MDS programme at Surendera Dental College in Sriganganagar, Rajasthan, with a focus on oral implantology and periodontology. He finished the programme in 2021, achieving distinction in the first year of study.
                        </p>
                        <div>
                            <img src="assets/images/home/signature.webp" width="" height="" alt="signature">
                        </div>
                        <h3 class="fs-5 text-dark text-center text-lg-start fw-bold mt-3">DR. PUNEET BHUSHAN KALRA</h3>
                    </div>
                </div><!--//.col-->
            </div><!--//.row-->
        </div><!--//.container-->
    </section>
    <!--  Dr section End -->
      
    <!-- Dental section start -->
    <section class="py-4 py-lg-5">
    <div class="container promo__wrapper p-5  position-relative">
        <div class="">
        <img  
            srcset="assets/images/home/arab-people.webp
            "
            src="assets/images/home/arab-people.webp" 
            sizes=""
            alt="arab-people"
            class="img-fluid position-absolute top-0 start-0 w-100 h-100 object-cover z-0 "
            width="1739" height="594"
        />
        <div class="position-absolute top-0 start-0 w-100 h-100 z-2 bg-dark" style="opacity:.9"></div>
        <div class=" py-5 z-index">
            <div class="row g-4 g-lg-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="fs-2 text-white fw-bold mb-3">DENTAL TOURISM BIKANER</h2>
                    <p class="text-white">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                    </p>
                </div><!--//.col-->
                <div class="col-lg-6">
                    <div class="btns d-flex flex-wrap gap-4 justify-content-center">
                        <a href="#" class="btn__service btn btn-outline-white px-4 height z-index " aria-label="LET’S GET STARTED.">
                            <span class="fw-semibold">LET’S GET STARTED.</span> 
                        </a>  
                        <a href="#" class="btn__service btn btn-white px-4 height py-2" aria-label="CONTACT US">
                            <span class="fw-semibold">CONTACT US</span> 
                        </a>  
                    </div>
                </div><!--//.col-->
            </div><!--//.row-->
        </div><!--//.container-->
    </div>
    </section> 
    <!-- Dental section End --> 

    <!-- center excellence section start --> 
    <section class="services__wrapper py-4 py-lg-5">
        <div class="container"> 
            <p class="fw-medium text-center lead text-primary mt-3 mb-0">WHAT WE DO</p>
            <h2 class="fs-2 text-dark text-center fw-bold mb-3">CENTRE OF EXCELLENCE</h2>
            <div class="owl-carousel excellenceCarousel">
                <div class="border bg-white rounded-3">
                    <a href="#">
                        <img 
                            class="img-fluid w-100 rounded-3" 
                            width="377" height="241" 
                            src="assets/images/home/close-up.webp" 
                            alt="blog-img"
                        >  
                    </a>
                    <div class="p-3 p-lg-4"> 
                        <div class="icon__box d-flex align-items-center justify-content-center">
                            <figure class="m-0">
                                <img src="assets/images/icons/dantal-01.svg" width="40" height="40" class="img-fluid icon" alt="">
                            </figure>
                        </div>
                        <h3 class="fs-6 title text-grey mt-4 lead fw-bold mb-2">
                            SINGLE SITTING ROOT CANAL (PAINLESS)
                        </h3>
                        <p class="card__text">
                            Experience painless, single-sitting root canal procedures, made possible by advanced techniques and state-of-the-art technology. We deliver exceptional care that provides a comfortable, pain-free and effective solution in just one session.
                        </p>
                        <div>
                            <a href="#" class="fw-semibold"  aria-label="READ MORE">READ MORE</a> 
                        </div>
                    </div>
                </div><!--//.card-->
                <div class="border bg-white rounded-3">
                    <a href="#">
                        <img 
                            class="img-fluid w-100 rounded-3" 
                            width="377" height="241" 
                            src="assets/images/home/close-up.webp" 
                            alt="blog-img"
                        >  
                    </a>
                    <div class="p-3 p-lg-4"> 
                        <div class="icon__box d-flex align-items-center justify-content-center">
                            <figure class="m-0">
                                <img src="assets/images/icons/dantal-01.svg" width="40" height="40" class="img-fluid icon" alt="">
                            </figure>
                        </div>
                        <h3 class="fs-6 title text-grey mt-4 lead fw-bold mb-2">
                            DENTAL IMPLANTS
                        </h3>
                        <p class="card__text">
                            Specialised dental implant treatments, state-of-the-art methods and individualised attention can restore the appearance and functionality of your smile. Using premium materials and cutting-edge technology, experience a smooth procedure from consultation to implantation.
                        </p>
                        <div>
                            <a href="#" class="fw-semibold"  aria-label="READ MORE">READ MORE</a> 
                        </div>
                    </div>
                </div><!--//.card-->
                <div class="border bg-white rounded-3">
                    <a href="#">
                        <img 
                            class="img-fluid w-100 rounded-3" 
                            width="377" height="241" 
                            src="assets/images/home/close-up.webp" 
                            alt="blog-img"
                        >  
                    </a>
                    <div class="p-3 p-lg-4"> 
                        <div class="icon__box d-flex align-items-center justify-content-center">
                            <figure class="m-0">
                                <img src="assets/images/icons/dantal-01.svg" width="40" height="40" class="img-fluid icon" alt="">
                            </figure>
                        </div>
                        <h3 class="fs-6 title text-grey mt-4 lead fw-bold mb-2">
                            ORTHODONTIC BRACES
                        </h3>
                        <p class="card__text">
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
     
    <!--Growing patient Section Start -->
    <section class="py-5"> 
        <div class="container">
            <div class="row gx-4 align-items-center">
                <div class="col-lg-6">
                    <div class="wraper__section">
                        <div class="row gx-4 gx-lg-5">
                            <div class="col-lg-6">
                                <div class="card mb-4 mb-lg-5">
                                    <div class="p-3 p-lg-4">
                                        <div class="icon__round d-flex align-items-center justify-content-center">
                                            <figure class="m-0">
                                                <img src="assets/images/icons/growing.svg" width="40" height="40" class="img-fluid icon" alt="">
                                            </figure>
                                        </div>
                                        <h4 class="fs-5 title text-gary mt-4  fw-medium mb-2">
                                            Growing patient satisfaction and practice image
                                        </h4>
                                        <p class="card__text s">
                                            Offers patients the convenience of high-quality restorations and a modern treatment in a single visit. No impression trays, fewer injections, and abstinence of temporaries lead to patient recommendations.
                                        </p>
                                    </div>
                                </div><!--.//card-->       
                            </div><!--./col-->
                            <div class="col-lg-6">
                                <div class="card mb-4 mb-lg-5">
                                    <div class="p-3 p-lg-4">
                                        <div class="icon__round d-flex align-items-center justify-content-center">
                                            <figure class="m-0">
                                                <img src="assets/images/icons/expansion.svg" width="40" height="40" class="img-fluid icon" alt="">
                                            </figure>
                                        </div>
                                        <h4 class="fs-5 title text-gary mt-4  fw-medium mb-2">
                                            Expansion of the range of indications
                                        </h4>
                                        <p class="card__text s">
                                            From bridges to crowns, from abutments to veneers: Expand the range of indications with CEREC seamless and validated workflows for restorative, implantology and orthodontics. The added value remains in your dental office and increases profitability.
                                        </p>
                                    </div>
                                </div><!--.//card-->   
                            </div><!--./col-->
                            <div class="col-lg-6">
                                <div class="card mb-4 mb-lg-5">
                                    <div class="p-3 p-lg-4">
                                        <div class="icon__round d-flex align-items-center justify-content-center">
                                            <figure class="m-0">
                                                <img src="assets/images/icons/growing.svg" width="40" height="40" class="img-fluid icon" alt="">
                                            </figure>
                                        </div>
                                        <h4 class="fs-5 title text-gary mt-4  fw-medium mb-2">
                                            Clinical safety and full quality control
                                        </h4>
                                        <p class="card__text s">
                                            CEREC users are in control of the whole workflow, from scanning to the completed restoration. This leads to clinically reliable results with no surprises and no extensive reworking. Every part of the latest CEREC system works in seamless harmony with the others, like a perfectly synchronized team.
                                        </p>
                                    </div>
                                </div><!--.//card--> 
                            </div><!--./col-->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="p-3 p-lg-4">
                                        <div class="icon__round d-flex align-items-center justify-content-center">
                                            <figure class="m-0">
                                                <img src="assets/images/icons/expansion.svg" width="40" height="40" class="img-fluid icon" alt="">
                                            </figure>
                                        </div>
                                        <h4 class="fs-5 title text-grey mt-4 lead fw-medium mb-2">
                                            Easy practice integration
                                        </h4>
                                        <p class="card__text s">
                                            The integration of CEREC into your practice is fully supported, so you can start to streamline workflows straight away. Automated workflows between the intraoral scanner, design software, milling machine and furnace allow for treatment steps to be delegated to the practice team and increase efficiency.
                                        </p>
                                    </div>
                                </div><!--.//card-->   
                            </div><!--./col-->
                        </div><!--.//row--> 
                    </div><!--.//werper__section--> 
                </div><!--.//col-->
                <div class="col-lg-6 ps-4 ps-lg-5">
                    <p class="lead mb-0">CEREC</p>
                    <h2 class="fs-2 text-gary fw-bold mb-3">What is CEREC?</h2>
                    <p class="">
                       <strong>CEREC is the short term for Chairside Economical Restoration of Esthetic Ceramics, or CEramic REConstruction.</strong></p>
                       <p>
                        CAD/CAM (computer aided design/computer aided manufacturing) technology to take impressions quickly and generate a precisely fitted filling so you can leave Discovery Dental sooner.
                       </p>
                       <div class="btns mt-3">
                        <a href="#" class="btn__service btn btn-dark px-4 height py-3 rounded-3" aria-label="KNOW MORE">
                            <span class="fw-semibold">KNOW MORE</span> 
                        </a>  
                    </div>
                </div><!--//.col-->
            </div><!--.//row-->        
        </div><!--.//container-->
    </section>
    <!--Growing patient Section End -->

    <!-- Our Gallery section Start -->
    <section class="py-5">
        <div class="container mt-lg-3">
            <p class="lead text-center mb-0">Photos and videos</p>
            <h2 class="fs-2 text-dark text-center fw-bold mb-3">Our Gallery</h2>
            <div class="row g-2">
                <div class="col-lg-4">
                    <figure class="mb-0">
                        <img 
                        class="img-fluid w-100 border" 
                        width="" height="" 
                        src="assets/images/home/gallery-03.webp" 
                        alt=""
                        >
                    </figure> 
                </div><!--//.col-->
                <div class="col-md-4">
                    <div class="gallery__item border-0"> 
                        <figure class="mb-0">
                            <img 
                            class="img-fluid w-100" 
                            width="427" height="318" 
                            src="assets/images/home/gallery-02.webp" 
                            alt="our projects"
                            >   
                        </figure>
                    </div>
                    <div class="gallery__item border-0 mt-3"> 
                        <figure class="mb-0">
                            <img 
                            class="img-fluid w-100" 
                            width="427" height="318" 
                            src="assets/images/home/gallery-022.webp" 
                            alt="our projects"
                            >   
                        </figure>
                    </div> 
                </div><!--//.col-->
                <div class="col-lg-4">
                    <figure class="mb-0">
                        <img 
                        class="img-fluid w-100 border" 
                        width="" height="" 
                        src="assets/images/home/gallery-03.webp" 
                        alt=""
                        >
                    </figure> 
                </div><!--//.col-->
            </div><!--//.row--> 
        </div><!---//.container-->
    </section>
    <!-- Our Gallery section End -->


    <!-- Testimional Section Start -->
    <section class="py-5 position-relative" style="background-color: #F4F9FC">
        <div class="container mb-lg-4">
            <h2 class="fs-2 text-dark text-center fw-bold mb-3">Testimonials</h2>
            <p class="col-lg-8 mx-auto text-center">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
            </p>
            <div class="owl-carousel testimionalSlider mt-4 mt-md-5"> 
                <div class="testi__card">
                    <div class="authore__box text-center pt-4">
                        <div class="thumbnail text-center mx-auto">
                            <img 
                            class="img-fluid rounded-circle" 
                            width="" height="" 
                            src="assets/images/home/testimonial.webp" 
                            alt=""
                            >
                        </div>
                        <div class="caption ps-3"> 
                            <p class="">
                                “Dude, your stuff is the bomb! Your company is truly upstanding and is behind its product 100%. Man, this thing is getting better and better as I learn more about it. Buy this now. “
                            </p>
                            <div class="round__box d-flex align-items-center justify-content-center">
                                <p class="text-white fw-semibold mb-0">5.0</p>
                            </div> 
                            <div class="mb-0 ps-3">
                                <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.2786 7.18509C19.1266 6.68535 18.6866 6.31978 18.156 6.25239L13.1205 5.57475L11.1278 0.936245C10.8369 0.257296 10.036 -0.0633105 9.33909 0.220103C9.00685 0.355244 8.74268 0.612548 8.604 0.936206L6.61132 5.57471L1.57578 6.25235C0.82551 6.35412 0.301975 7.02909 0.406444 7.75995C0.451324 8.07403 0.609396 8.36231 0.85243 8.57326L4.64634 11.8691L3.86685 17.0409C3.7824 17.566 4.03 18.0892 4.49477 18.3677C4.95301 18.6532 5.54244 18.6425 5.98946 18.3407L9.86591 15.7726L13.7424 18.3433C14.3679 18.7569 15.2191 18.5982 15.6437 17.9889C15.8366 17.7119 15.9156 17.3745 15.865 17.0435L15.0855 11.8697L18.8794 8.57396C19.2823 8.22836 19.4387 7.68421 19.2786 7.18509Z" fill="#ED7F06"/>
                                  </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--//.testi__card-->
        </div><!--//.container-->
    </section>
    <!-- Testmional Section End -->
    
    <!--Make Appointment section Start -->
    <section class="py-3 py-xl-5">
        <div class="container py-sm-3">
            <div class="row g-2 g-lg-3">
                <div class="col-lg-6">
                    <h2 class="fs-1 text-gary fw-bold mb-3">Make An Appointment</h2>
                    <p>Now you don’t have to wait hours in line, book your appointment today. Enter your details to request an appointment.</p> 
                    <div class="py-5">
                        <h2 class="fs-3 pb-4 text-primary fw-bold border-bottom">Our Location</h2>
                        <div class="d-flex align-items-center gap-4 mt-4">
                            <img src="assets/images/icons/Location.svg" alt="">
                            <p class="mb-0 col-lg-5 text-gary fw-medium">
                                3 KA 13, Pawarnpuri Main Road, Pawanpuri, Near SBBJ Bank, Bikaner, Rajasthan - 334003
                            </p> 
                        </div>
                        <div class="d-flex align-items-center gap-4 mt-4">
                            <img src="assets/images/icons/phone.svg" alt="">
                            <p class="mb-0 col-lg-5 text-gary fw-medium">
                                +91 98291 95898 <br>
                                +91 98291 95898
                            </p> 
                        </div>
                        <div class="d-flex align-items-center gap-4 mt-4">
                            <img src="assets/images/icons/Page.svg" alt="">
                            <p class="mb-0 col-lg-5 text-gary fw-medium">
                                enquiry@kalradentalcare.com
                            </p> 
                        </div>
                    </div>
                </div><!--./col-->
                <div class="col-lg-6">
                    <div class="row g-3 gx-lg-4">
                        <h2 class="fs-1 text-gary fw-bold mb-3">Appointments</h2>
                        <p>Book your next appointment effortlessly – complete this section with your details to secure your time slot.</p>  
                        <div class="col-lg-12">
                            <form action="http://localhost/flc/submit-contact-form.php" method="post" id="contactPageForm" class="row g-3"> 
                                <div class="col-md-6">
                                    <label for="cfirst name" class="form-label text-3b">First Name *</label>
                                    <input type="text" first name="first name" id="cfirst name" class="form-control py-3" placeholder="First Name">
                                    <small class="text-danger error" id="cfirst name_error"></small>
                                </div>
                                <div class="col-md-6">
                                    <label for="cLast Name *" class="form-label text-3b">Last Name *</label>
                                    <input type="text" name="Last Name *" id="cLast Name *" class="form-control py-3" placeholder="Last Name ">
                                    <small class="text-danger error" id="cLast Name *_error"></small>
                                </div> 
                                <div class="col-md-6">
                                    <label for="cPhone No" class="form-label text-3b">Phone No *</label>
                                    <input type="text" name="Phone No" id="cPhone No" class="form-control py-3" placeholder=" Phone No">
                                    <small class="text-danger error" id="cPhone No_error"></small>
                                </div>
                                <div class="col-md-6">
                                    <label for="cEmail Id" class="form-label text-3b">Email Id *</label>
                                    <input type="text" name="Email Id" id="cEmail Id" class="form-control py-3" placeholder=" Email Id">
                                    <small class="text-danger error" id="cEmail Id_error"></small>
                                </div>  
                                <div class="col-md-6">
                                    <label for="cSelect Services" class="form-label text-3b">Select Services *</label>
                                    <input type="text" name="Select Services" id="cSelect Services" class="form-control py-3" placeholder="Select Services">
                                    <small class="text-danger error" id="cemail_error"></small>
                                </div>
                                <div class="col-md-6">
                                    <label for="cSelect Date" class="form-label text-3b">Select Date *</label>
                                    <input type="text" name="Select Date" id="cSelect Date" class="form-control py-3" placeholder="Select Date">
                                    <small class="text-danger error" id="cSelect Date_error"></small>
                                </div>  
                                <div class="col-12">
                                    <label for="Any Messages" class="form-label text-3b">Any Messages</label>
                                    <textarea name="Any Messages" id="Any Messages" cols="30" rows="2" class="form-control py-3" placeholder="Any Messages"></textarea>
                                </div> 
                                <div class="col-12">
                                    <button type="submit" class="btn btn-dark height fs-15 text-uppercase px-4 mt-3 rounded-2">BOOK APPOINTMENT</button>
                                </div>
                            </form>
                        </div><!--./col-->
                    </div><!--.//row-->
                </div><!--./col--> 
            </div><!--.//row-->
        </div><!--.//container-->
    </section>
    <!--Make Appointment section End -->
    
    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
 
</body>
</html>
 
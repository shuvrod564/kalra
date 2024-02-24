<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>Innovare Construction</title>
    
    <!-- All Stylesheets -->
    <?php $folder='root'; include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body class="pt-0"> 
    
    <!-- Preloader, Main Navigation Menu --> 
    <?php $folder='root'; include_once('includes/header.inc.php'); ?> 

    
    <!-- header section start -->
    <header class="header__wrapper py-4 d-flex align-items-end align-items-sm-center position-relative">
        <img 
            src="assets/images/home/hero-banner.webp" 
            width="1903" height="600"
            alt=""
            class="img-fluid position-absolute top-0 start-0 w-100 h-100 object-cover thumbnail"
        >
        <div class="position-absolute text-center text-lg-start extra__box p-2 p-sm-3 p-lg-4 bottom-0 end-0">
            <h2 class="fs-3 text-white fw-semibold mb-0">Welcome To Innovare Constructions</h2>
            <p class="lead text-white">At Innovare Constructions, we’re not just building spaces;</p>
        </div>
    </header>
    <!-- header section end -->

    <!--  Welcome section Start -->
    <section class="py-5 bg-primary">
        <div class="container py-xl-5">
            <div class="row g-4 g-xxl-5">
                <div class="col-lg-6">
                    <img class="img-fluid w-100 object-fit-cover" width="624" height="636" src="assets/images/home/welcome-home.webp" alt="">
                </div><!--//.col-->
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="py-lg-2 text-white  text-center text-lg-start"> 
                        <p class="top__title text-white fw-semibold lead-lg">WELCOME TO</p>
                        <h2 class="fs-1 fw-bold spacing-x">INNOVARE CONSTRUCTIONS</h2>
                        <p class=" mt-3">
                            At Innovare Constructions, we’re not just building spaces; we’re crafting your future. Our dedication is to not only meet but exceed your expectations, ensuring every project is handled with the utmost professionalism and care. This ethos is embedded in every layer of our operations, from the initial consultation to the final handover of your project. We understand that embarking on a construction project, be it commercial, residential, or anything in between, is a significant step towards realizing a dream for many of our clients. That’s why we approach every task with a blend of precision, creativity, and a deep understanding of our clients’ visions.
                        </p>
                        <div class="text-center text-lg-start mt-4 mt-lg-5">
                            <a href="#" class="btn btn-outline-white fw-semibold px-4 rounded-0 py-2" aria-label="READ MORE">READ MORE</a> 
                        </div>
                    </div>
                </div><!--//.col-->
            </div><!--//.row-->
        </div><!--//.container-->
    </section>
    <!--  Welcome section End -->

    <!-- Explore Our Services Start --> 
    <section class="py-5 bg-primary scroller">
        <div class="container">
            <h2 class="fs-3 text-center spacing-x text-white pb-5">EXPLORE OUR SERVICES</h2>
            <div class="owl-carousel exploreSlider">
                <div class="service__card position-relative active p-3 p-lg-4"> 
                    <div class="z-index pt-lg-4">
                        <div class="my-4">
                            <h3 class="fs-5 title fw-semibold"> 
                                <a class="text-white" href="#">COMMERCIAL CONSTRUCTION</a> 
                            </h3>
                            <p class="card__text fw-medium lead-sm mt-4 text-white overflow-auto">Our team specializes in bringing commercial visions to life. From office buildings to retail spaces, we ensure every project is completed on time, within budget, and beyond expectations.</p>
                        </div>
                        <a href="#" class="icon"> <img src="assets/images/icons/right-arrow.svg" alt=""></a>
                    </div> 
                    <div class="overlay__wrap bgi w-100 h-100 position-absolute top-0 start-0" style="background-image: url('assets/images/home/about__bg.webp');box-shadow: inset 0 0 0 800px rgba(0, 0, 0, 0.66);">
                    </div>
                </div><!--//.service__card-->
                <div class="service__card position-relative active p-3 p-lg-4"> 
                    <div class="z-index pt-lg-4">
                        <div class="my-4">
                            <h3 class="fs-5 title fw-semibold"> 
                                <a class="text-white" href="#">RESIDENTIAL CONSTRUCTION</a> 
                            </h3>
                            <p class="card__text fw-medium lead-sm mt-4 text-white overflow-auto">Your home should be a reflection of your individuality. At Innovare, we understand this, which is why we take great care in constructing residential spaces that feel as unique as you are.</p>
                        </div>
                        <a href="#" class="icon"><img src="assets/images/icons/right-arrow.svg" alt=""></a>
                    </div> 
                    <div class="overlay__wrap bgi w-100 h-100 position-absolute top-0 start-0" style="background-image: url('assets/images/home/about__bg.webp');box-shadow: inset 0 0 0 800px rgba(0, 0, 0, 0.66);">
                    </div>
                </div><!--//.service__card-->
                <div class="service__card position-relative active p-3 p-lg-4"> 
                    <div class="z-index pt-lg-4">
                        <div class="my-4">
                            <h3 class="fs-5 title fw-semibold"> 
                                <a class="text-white" href="#">PWD WORKS</a> 
                            </h3>
                            <p class="card__text fw-medium lead-sm mt-4 text-white overflow-auto">We are committed to creating accessible spaces for all. Our expertise in PWD works ensures inclusivity and functionality in every design.</p>
                        </div>
                        <a href="#" class="icon"> <img src="assets/images/icons/right-arrow.svg" alt=""></a>
                    </div> 
                    <div class="overlay__wrap bgi w-100 h-100 position-absolute top-0 start-0" style="background-image: url('assets/images/home/about__bg.webp');box-shadow: inset 0 0 0 800px rgba(0, 0, 0, 0.66);">
                    </div>
                </div><!--//.service__card-->
            </div><!--//.owl-carousel-->
        </div><!--//.container-->
    </section>
    <!-- Explore Our Services End --> 

    <!-- Innovare Constructions section Start -->
    <section class="py-5 bg-primary">
        <div class="container py-xl-5">
            <div class="row g-4 g-xxl-5">
                <div class="col-lg-6 order-lg-2">
                    <img class="img-fluid w-100 object-fit-cover" width="624" height="811" src="assets/images/home/best-home.webp" alt="">
                </div><!--//.col-->
                <div class="col-lg-6 order-lg-1 d-flex align-items-center">
                    <div class="py-lg-2 text-white text-center text-lg-start"> 
                        <h2 class="fs-1 fw-bold spacing-x">INNOVARE CONSTRUCTIONS</h2>
                        <p class=" mt-3">
                            At Innovare Constructions, our philosophy is deeply rooted in the power of connections. As a cherished family-owned enterprise, we place immense value on family principles, mirroring these ideals in every facet of our client interactions and business operations. Our commitment extends beyond mere transactions; we endeavor to forge lasting relationships, understanding that every project we undertake is a personal journey for our clients. This belief in strong, personal connections is what sets us apart, guiding us to tailor our services to reflect the unique visions and aspirations of those we serve.
                        </p>
                        <p class=" mt-3">
                            Our journey paints a story of humble beginnings, fueled by an unwavering passion and dedication. It’s a narrative of transformation, from a modest startup to a beacon of excellence within the construction industry. This journey has been shaped by a continuous pursuit of growth, not just in scale but in the mastery of our craft. Our evolution is marked by an enduring commitment to innovation, quality, and the cultivation of a skilled team that shares our vision and values. As we look back on our path to becoming an industry leader, it’s clear that our foundation of family values, combined with our passion for construction, has been instrumental in our success. It’s this unique blend that enables us to create not just buildings, but legacies.
                        </p>
                        <div class="text-center text-lg-start mt-4 mt-lg-5">
                            <a href="#" class="btn btn-outline-white fw-semibold px-4 rounded-0 py-2" aria-label="KNOW MORE">KNOW MORE</a> 
                        </div>
                    </div>
                </div><!--//.col-->
            </div><!--//.row-->
        </div><!--//.container-->
    </section>
    <!-- Innovare Constructions section End -->

    <!-- Why Partner Services Start --> 
    <section class="py-5 bg-primary scroller">
        <div class="container"> 
            <h2 class="fs-3 text-center text-white spacing-x pb-5">WHY PARTNER WITH INNOVARE?</h2>
            <div class="carousel__wrapper">
                <div class="owl-carousel exploreSlider">
                    <div class="item text-white">
                        <div class="services__card">
                            <div class="height">
                                <div class="my-4">
                                    <h3 class="fs-5 title fw-semibold"> 
                                        <a class="text-white" href="#">CLIENT-CENTRIC APPROACH</a> 
                                    </h3>
                                    <p class="card__text fw-medium lead-sm mt-4 overflow-auto">At Innovare Constructions, your satisfaction is not just a goal; it’s our driving force. We believe in a client-centric approach, placing your needs and preferences at the core of every decision and strategy. This personalized touch ensures that each project we undertake is aligned with your vision, guaranteeing a final product that exceeds expectations. Our commitment to understanding and adapting to your unique requirements is what makes our partnership truly collaborative and fulfilling.</p>
                                </div>
                            </div>
                        </div>
                    </div><!--//.item-->
                    <div class="item text-white">
                        <div class="services__card">
                            <div class="height">
                                <div class="my-4">
                                    <h3 class="fs-5 title fw-semibold"> 
                                        <a class="text-white" href="#">CLIENT-CENTRIC APPROACH</a> 
                                    </h3>
                                    <p class="card__text fw-medium lead-sm mt-4 overflow-auto">At Innovare Constructions, your satisfaction is not just a goal; it’s our driving force. We believe in a client-centric approach, placing your needs and preferences at the core of every decision and strategy. This personalized touch ensures that each project we undertake is aligned with your vision, guaranteeing a final product that exceeds expectations. Our commitment to understanding and adapting to your unique requirements is what makes our partnership truly collaborative and fulfilling.</p>
                                </div>
                            </div>
                        </div>
                    </div><!--//.item-->
                    <div class="item text-white">
                        <div class="services__card">
                            <div class="height">
                                <div class="my-4">
                                    <h3 class="fs-5 title fw-semibold"> 
                                        <a class="text-white" href="#">QUALITY AND CRAFTSMANSHIP</a> 
                                    </h3>
                                    <p class="card__text fw-medium lead-sm mt-4 overflow-auto">Quality and craftsmanship are the hallmarks of Innovare Constructions. Our dedication to excellence is evident in every cut, join, and finish. We take immense pride in our meticulous attention to detail and our unwavering commitment to delivering superior quality in all aspects of our work. By choosing Innovare, you are assured of a project that not only meets the highest standards of construction but also stands as a testament to the skill and dedication of our team.</p>
                                </div>
                            </div>
                        </div>
                    </div><!--//.item-->
                    <div class="item text-white">
                        <div class="services__card">
                            <div class="height">
                                <div class="my-4">
                                    <h3 class="fs-5 title fw-semibold"> 
                                        <a class="text-white" href="#">INNOVATION AT EVERY STEP</a> 
                                    </h3>
                                    <p class="card__text fw-medium lead-sm mt-4 overflow-auto">Innovation lies at the core of our operations. At Innovare Constructions, we continuously strive to push the boundaries of traditional construction methods and materials. Our pursuit of innovation is a commitment to not just keeping pace with industry advancements but leading the charge. From leveraging the latest in sustainable building practices to employing cutting-edge technologies, we ensure that innovation permeates every step of our construction process. This forward-thinking approach is what enables us to deliver projects that are not only aesthetically pleasing and functional but also future-ready.</p>
                                </div>
                            </div>
                        </div>
                    </div><!--//.item-->
                </div><!--//.owl-carousel-->
            </div><!--//.carousel__weraper-->
        </div><!--//.container-fluid-->
    </section>
    <!-- Why Partner Services end -->
    
    <!-- Client View Services Start -->
    <section class="py-5 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-white d-flex align-items-center gap-3">
                        <h2 class="display-4 fw-bold">820+</h2>
                        <h3 class="fs-5 fw-bold">CLIENT SATISFACTION GUARANTEED</h3>
                    </div>
                </div><!--//.col-->
                <div class="col-lg-4">
                    <div class="text-white d-flex align-items-center gap-3">
                        <h2 class="display-4 fw-bold">650+</h2>
                        <h3 class="fs-5 fw-bold">EMPLOYEE ON WORLDWIDE</h3>
                    </div>
                </div><!--//.col-->
                <div class="col-lg-4">
                    <div class="text-white d-flex align-items-center gap-3">
                        <h2 class="display-4 fw-bold">987+</h2>
                        <h3 class="fs-5 fw-bold col-7">PROJECTS COMPLETED ON 60 COUNTRIES</h3>
                    </div>
                </div><!--//.col-->
            </div><!--//row-->
        </div><!--//.container-->
        <div class="container-fluid mt-5">
            <img src="assets/images/home/3d-rendering.webp" class="img-fluid" width="6441662" heig554ht="587" alt="">
        </div><!--//.container-fluid-->
    </section>
    <!-- Client View Services End -->

    <!-- Why Choose Us section Start -->
    <section class="py-4 bg-primary">
        <div class="container py-xl-5">
            <div class="row g-4 g-xxl-5">
                <div class="col-lg-6">
                    <img class="img-fluid w-100 object-fit-cover" width="624" height="367" src="assets/images/home/about.webp" alt="">
                </div><!--//.col-->
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="py-lg-2 text-white  text-center text-lg-start"> 
                        <h2 class="fs-1 fw-bold spacing-x">WHY CHOOSE US</h2>
                        <p class="mt-3">
                            Choosing Innovare Constructions is a decision to embrace unparalleled quality, cutting-edge innovation, and a deeply personalized construction experience. Our ethos is centered around not just meeting, but exceeding your expectations, transforming your vision into reality with minimal stress. Our approach is tailored, recognizing the unique aspirations of each client and meticulously crafting spaces that resonate with their vision.
                        </p>
                    </div>
                </div><!--//.col-->
            </div><!--//.row-->
        </div><!--//.container-->
    </section>
    <!-- Why Choose Us section End -->

    <!-- Our Vision section Start -->
    <section class=" py-3 promo__wraper bg-primary scroller">
        <div class="container">
            <div class="row g-4 g-xxl-5">
                <div class="col-lg-6">
                    <div class="services__card text-white">
                        <div class="my-4">
                            <h3 class="fs-5 title fw-semibold"> 
                                <a class="text-white" href="#">OUR VISION</a> 
                            </h3>
                            <p class="card__text fw-medium lead-sm mt-4 overflow-auto">Our vision is to ascend as the premier construction brand, distinguished by our unwavering commitment to quality, innovation, and the well-being of our community and staff. We strive to set new standards in the construction industry, driving forward with the ambition to innovate and excel in every project undertaken.</p>
                        </div>
                    </div>
                </div><!--//.col-->
                <div class="col-lg-6">
                    <div class="services__card text-white">
                        <div class="my-4">
                            <h3 class="fs-5 title fw-semibold"> 
                                <a class="text-white" href="#">OUR MISSION</a> 
                            </h3>
                            <p class="card__text fw-medium lead-sm mt-4 overflow-auto">Our mission is grounded in a profound understanding of our clients’ needs, ensuring the delivery of high-caliber buildings within the agreed timeframe and budget. We aim to cultivate enduring relationships, built on trust and the consistent delivery of exceptional results. This commitment to understanding, quality, and long-term partnership is what fuels our mission, guiding us toward our vision of being the contractor of choice, renowned for our innovative solutions and dedication to excellence.</p>
                        </div>
                    </div>
                </div><!--//.col-->
            </div><!--//.row-->
        </div><!--//.container-->
    </section>
    <!-- Our Vision section End -->

    <!-- Successful Projects Start -->
    <section class="py-5 bg-primary">
        <div class="container">  
            <h2 class="h2 text-uppercase text-white text-center">OUR SUCCESSFUL PROJECTS</h2>
            <nav class="mt-4 text-white">
                <div class="nav nav-tabs mx-auto border-0 justify-content-center" id="nav-tab" role="tablist">
                    <button class="nav-link border-0 m-0 lead fw-bold" id="nav-tab1-tab" data-bs-toggle="tab" data-bs-target="#nav-tab1" type="button" role="tab" aria-controls="nav-tab1" aria-selected="true">Commercial Highlights</button>
                    <button class="nav-link border-0 m-0 lead fw-bold active" id="nav-tab2-tab" data-bs-toggle="tab" data-bs-target="#nav-tab2" type="button" role="tab" aria-controls="nav-tab2" aria-selected="false">Residential Highlights</button>
                    <button class="nav-link border-0 m-0 lead fw-bold" id="nav-tab3-tab" data-bs-toggle="tab" data-bs-target="#nav-tab3" type="button" role="tab" aria-controls="nav-tab3" aria-selected="false">Unique Interior Designs</button>
                    <button class="nav-link border-0 m-0 lead fw-bold" id="nav-tab4-tab" data-bs-toggle="tab" data-bs-target="#nav-tab4" type="button" role="tab" aria-controls="nav-tab4" aria-selected="false">Transformative Landscaping</button>
                </div>
            </nav>
            <div class="tab-content pt-4 pt-lg-5" id="nav-tabContent">
                <p class="text-white text-center mb-5">Our portfolio includes a wide range of successful commercial projects, each showcasing our commitment to quality and innovation.</p> 
                <div class="tab-pane" id="nav-tab1" role="tabpanel" aria-labelledby="nav-tab1-tab">
                    <div class="row g-2">
                        <div class="col-lg-6">
                            <div class="position-relative">
                                <img src="assets/images/home/gallery/gallery-01.webp" class="img-fluid" width="644" height="554" alt="">
                                <div class="bg-primary position-absolute p-2 p-sm-3 p-lg-4 bottom-0 end-0" style="width: 52%;">
                                    <h2 class="lead-lg text-white fw-semibold mb-0">Dileep & Nitha</h2>
                                    <p class="d-block fs-12 text-white">Kalarkode, Alappuzha</p>
                                    <p class="fs-13 text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="">
                                        <a href="#" class="text-white fs-15" aria-label="KNOW MORE">KNOW MORE</a> 
                                    </div>
                                </div>
                            </div>
                        </div><!--.//col-->
                        <div class="col-lg-6">
                            <div>
                                <img src="assets/images/home/gallery/gallery-02.webp" class="img-fluid" width="644" height="554" alt="">
                            </div>
                        </div><!--.//col-->
                        <div class="col-lg-6">
                            <div>
                                <img src="assets/images/home/gallery/gallery-03.webp" class="img-fluid" width="644" height="554" alt="">
                            </div>
                        </div><!--.//col-->
                        <div class="col-lg-6">
                            <div>
                                <img src="assets/images/home/gallery/gallery-04.webp" class="img-fluid" width="644" height="554" alt="">
                            </div>
                        </div><!--.//col-->
                    </div><!--.//row-->
                </div><!--.//tab_pane_1-->

                <div class="tab-pane fade fade show active" id="nav-tab2" role="tabpanel" aria-labelledby="nav-tab2-tab">
                    <div class="row g-2">
                        <div class="col-lg-6">
                            <div class="position-relative">
                                <img src="assets/images/home/gallery/gallery-01.webp" class="img-fluid" width="644" height="554" alt="">
                                <div class="bg-primary position-absolute p-2 p-sm-3 p-lg-4 bottom-0 end-0" style="width: 52%;">
                                    <h2 class="lead-lg text-white fw-semibold mb-0">Dileep & Nitha</h2>
                                    <p class="d-block fs-12 text-white">Kalarkode, Alappuzha</p>
                                    <p class="fs-13 text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="">
                                        <a href="#" class="text-white fs-15" aria-label="KNOW MORE">KNOW MORE</a> 
                                    </div>
                                </div>
                            </div>
                        </div><!--.//col-->
                        <div class="col-lg-6">
                            <div>
                                <img src="assets/images/home/gallery/gallery-02.webp" class="img-fluid" width="644" height="554" alt="">
                            </div>
                        </div><!--.//col-->
                        <div class="col-lg-6">
                            <div>
                                <img src="assets/images/home/gallery/gallery-03.webp" class="img-fluid" width="644" height="554" alt="">
                            </div>
                        </div><!--.//col-->
                        <div class="col-lg-6">
                            <div>
                                <img src="assets/images/home/gallery/gallery-04.webp" class="img-fluid" width="644" height="554" alt="">
                            </div>
                        </div><!--.//col-->
                    </div><!--.//row-->
                </div><!--.//tab_pane_2-->

                <div class="tab-pane fade" id="nav-tab3" role="tabpanel" aria-labelledby="nav-tab3-tab">
                    <div class="row g-2">
                        <div class="col-lg-6">
                            <div class="position-relative">
                                <img src="assets/images/home/gallery/gallery-01.webp" class="img-fluid" width="644" height="554" alt="">
                                <div class="bg-primary position-absolute p-2 p-sm-3 p-lg-4 bottom-0 end-0" style="width: 52%;">
                                    <h2 class="lead-lg text-white fw-semibold mb-0">Dileep & Nitha</h2>
                                    <p class="d-block fs-12 text-white">Kalarkode, Alappuzha</p>
                                    <p class="fs-13 text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="">
                                        <a href="#" class="text-white fs-15" aria-label="KNOW MORE">KNOW MORE</a> 
                                    </div>
                                </div>
                            </div>
                        </div><!--.//col-->
                        <div class="col-lg-6">
                            <div>
                                <img src="assets/images/home/gallery/gallery-02.webp" class="img-fluid" width="644" height="554" alt="">
                            </div>
                        </div><!--.//col-->
                        <div class="col-lg-6">
                            <div>
                                <img src="assets/images/home/gallery/gallery-03.webp" class="img-fluid" width="644" height="554" alt="">
                            </div>
                        </div><!--.//col-->
                        <div class="col-lg-6">
                            <div>
                                <img src="assets/images/home/gallery/gallery-04.webp" class="img-fluid" width="644" height="554" alt="">
                            </div>
                        </div><!--.//col-->
                    </div><!--.//row-->
                </div><!--.//tab_pane_3-->

                <div class="tab-pane fade" id="nav-tab4" role="tabpanel" aria-labelledby="nav-tab4-tab">
                    <div class="row g-2">
                        <div class="col-lg-6">
                            <div class="position-relative">
                                <img src="assets/images/home/gallery/gallery-01.webp" class="img-fluid" width="644" height="554" alt="">
                                <div class="bg-primary position-absolute p-2 p-sm-3 p-lg-4 bottom-0 end-0" style="width: 52%;">
                                    <h2 class="lead-lg text-white fw-semibold mb-0">Dileep & Nitha</h2>
                                    <p class="d-block fs-12 text-white">Kalarkode, Alappuzha</p>
                                    <p class="fs-13 text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="">
                                        <a href="#" class="text-white fs-15" aria-label="KNOW MORE">KNOW MORE</a> 
                                    </div>
                                </div>
                            </div>
                        </div><!--.//col-->
                        <div class="col-lg-6">
                            <div>
                                <img src="assets/images/home/gallery/gallery-02.webp" class="img-fluid" width="644" height="554" alt="">
                            </div>
                        </div><!--.//col-->
                        <div class="col-lg-6">
                            <div>
                                <img src="assets/images/home/gallery/gallery-03.webp" class="img-fluid" width="644" height="554" alt="">
                            </div>
                        </div><!--.//col-->
                        <div class="col-lg-6">
                            <div>
                                <img src="assets/images/home/gallery/gallery-04.webp" class="img-fluid" width="644" height="554" alt="">
                            </div>
                        </div><!--.//col-->
                    </div><!--.//row-->
                </div><!--.//tab_pane_4-->
            </div><!--.//tab__content-->
              
        </div><!--.//container--> 
    </section>
    <!-- Successful Projects End -->

    <!-- Testminal Section Start -->
    <section class="py-5 bg-primary">
        <div class="container">
            <h2 class="fs-3 text-center text-white spacing-x pb-5">WHAT OUR HAPPY CLIENTS SAYS</h2> 
            <div class="owl-carousel testimonialSlider mt-4 mt-md-5">
                <div class="testi__card text-white d-flex align-items-center p-4 p-lg-5">
                    <div class="">
                        <h4 class="lead text-grey mb-0 fw-semibold spacing-x">GREAT INTERIOR WORK</h4>
                        <p class="mt-3 mb-0">
                            There are many variations passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
                        </p>
                    </div>
                    <div class="ps-4 col-4">
                        <img 
                            class="img-fluid rounded-circle img__wrap mx-auto" 
                            width="88" height="88" 
                            src="assets/images/home/gallery/mila-peters.webp" class="img-fluid"
                            alt="Student"
                        >
                        <p class="lead text-grey mb-0 fw-semibold spacing-x text-center">MILA PETERS</p>
                    </div>
                </div><!--//.testi__card-->
                <div class="testi__card text-white d-flex align-items-center p-4 p-lg-5">
                    <div class="">
                        <h4 class="lead text-grey mb-0 fw-semibold spacing-x">GREAT INTERIOR WORK</h4>
                        <p class="mt-3 mb-0">
                            There are many variations passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
                        </p>
                    </div>
                    <div class="ps-4 col-4">
                        <img 
                            class="img-fluid rounded-circle img__wrap mx-auto" 
                            width="88" height="88" 
                            src="assets/images/home/gallery/mila-peters.webp" class="img-fluid"
                            alt="Student"
                        >
                        <p class="lead text-grey mb-0 fw-semibold spacing-x text-center">MILA PETERS</p>
                    </div>
                </div><!--//.testi__card-->
                <div class="testi__card text-white d-flex align-items-center p-4 p-lg-5">
                    <div class="">
                        <h4 class="lead text-grey mb-0 fw-semibold spacing-x">GREAT INTERIOR WORK</h4>
                        <p class="mt-3 mb-0">
                            There are many variations passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
                        </p>
                    </div>
                    <div class="ps-4 col-4">
                        <img 
                            class="img-fluid rounded-circle img__wrap mx-auto" 
                            width="88" height="88" 
                            src="assets/images/home/gallery/mila-peters.webp" class="img-fluid"
                            alt="Student"
                        >
                        <p class="lead text-grey mb-0 fw-semibold spacing-x text-center">MILA PETERS</p>
                    </div>
                </div><!--//.testi__card-->
                <div class="testi__card text-white d-flex align-items-center p-4 p-lg-5">
                    <div class="">
                        <h4 class="lead text-grey mb-0 fw-semibold spacing-x">GREAT INTERIOR WORK</h4>
                        <p class="mt-3 mb-0">
                            There are many variations passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
                        </p>
                    </div>
                    <div class="ps-4 col-4">
                        <img 
                            class="img-fluid rounded-circle img__wrap mx-auto" 
                            width="88" height="88" 
                            src="assets/images/home/gallery/mila-peters.webp" class="img-fluid"
                            alt="Student"
                        >
                        <p class="lead text-grey mb-0 fw-semibold spacing-x text-center">MILA PETERS</p>
                    </div>
                </div><!--//.testi__card-->
                <div class="testi__card text-white d-flex align-items-center p-4 p-lg-5">
                    <div class="">
                        <h4 class="lead text-grey mb-0 fw-semibold spacing-x">GREAT INTERIOR WORK</h4>
                        <p class="mt-3 mb-0">
                            There are many variations passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
                        </p>
                    </div>
                    <div class="ps-4 col-4">
                        <img 
                            class="img-fluid rounded-circle img__wrap mx-auto" 
                            width="88" height="88" 
                            src="assets/images/home/gallery/mila-peters.webp" class="img-fluid"
                            alt="Student"
                            >
                            <p class="lead text-grey mb-0 fw-semibold spacing-x text-center">MILA PETERS</p>
                        </div>
                </div><!--//.testi__card-->
                <div class="testi__card text-white d-flex align-items-center p-4 p-lg-5">
                    <div class="">
                        <h4 class="lead text-grey mb-0 fw-semibold spacing-x">GREAT INTERIOR WORK</h4>
                        <p class="mt-3 mb-0">
                            There are many variations passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
                        </p>
                    </div>
                    <div class="ps-4 col-4">
                        <img 
                            class="img-fluid rounded-circle img__wrap mx-auto" 
                            width="88" height="88" 
                            src="assets/images/home/gallery/mila-peters.webp" class="img-fluid"
                            alt="Student"
                        >
                        <p class="lead text-grey mb-0 fw-semibold spacing-x text-center">MILA PETERS</p>
                    </div>
                </div><!--//.testi__card-->
                <div class="testi__card text-white d-flex align-items-center p-4 p-lg-5">
                    <div class="">
                        <h4 class="lead text-grey mb-0 fw-semibold spacing-x">GREAT INTERIOR WORK</h4>
                        <p class="mt-3 mb-0">
                            There are many variations passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
                        </p>
                    </div>
                    <div class="ps-4 col-4">
                        <img 
                            class="img-fluid rounded-circle img__wrap mx-auto" 
                            width="88" height="88" 
                            src="assets/images/home/gallery/mila-peters.webp" class="img-fluid"
                            alt="Student"
                        >
                        <p class="lead text-grey mb-0 fw-semibold spacing-x text-center">MILA PETERS</p>
                    </div>
                </div><!--//.testi__card-->
                <div class="testi__card text-white d-flex align-items-center p-4 p-lg-5">
                    <div class="">
                        <h4 class="lead text-grey mb-0 fw-semibold spacing-x">GREAT INTERIOR WORK</h4>
                        <p class="mt-3 mb-0">
                            There are many variations passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
                        </p>
                    </div>
                    <div class="ps-4 col-4">
                        <img 
                            class="img-fluid rounded-circle img__wrap mx-auto" 
                            width="88" height="88" 
                            src="assets/images/home/gallery/mila-peters.webp" class="img-fluid"
                            alt="Student"
                            >
                            <p class="lead text-grey mb-0 fw-semibold spacing-x text-center">MILA PETERS</p>
                        </div>
                    </div><!--//.testi__card-->
                </div><!--.//carousel-->
            </div><!--//.container-->
    </section>
    <!-- Testminal Section End -->
        
    <!-- Blogs Services Start --> 
    <section class="py-5 bg-primary">
            <div class="container"> 
                <h2 class="fs-3 text-center text-white spacing-x pb-5">LATEST BLOGS</h2>
                <div class="blog__wrapper text-white">
                    <div class="owl-carousel exploreSlider">
                        <div class="services__card">
                            <div class="height">
                                <div class="my-4">
                                    <p class="mb-4">NOVEMBER 14, 2023</p>
                                    <h3 class="fs-3 title fw-semibold"> 
                                        Transforming spaces for maximum utility 
                                    </h3>
                                    <p class="fw-medium lead-sm mt-4">Ever felt like your living or working space could be more functional and efficient? In this blog series, we explore the art of transforming spaces for maximum utility. From clever storage solutions to innovative…</p>
                                </div>
                            </div>
                            <div class="icon mt-4 mt-lg-5 d-flex align-items-center gap-2">
                                <a href="#" class="text-white" aria-label="Read More">Read More</a> 
                                <img src="assets/images/icons/right-arrow.svg" class="img-fluid" width="28" height="16" alt="">
                            </div>
                        </div>
                        <div class="services__card">
                            <div class="height">
                                <div class="my-4">
                                    <p class="mb-4">NOVEMBER 14, 2023</p>
                                    <h3 class="fs-3 title fw-semibold"> 
                                        Transforming spaces for maximum utility 
                                    </h3>
                                    <p class="fw-medium lead-sm mt-4">Ever felt like your living or working space could be more functional and efficient? In this blog series, we explore the art of transforming spaces for maximum utility. From clever storage solutions to innovative…</p>
                                </div>
                            </div>
                            <div class="icon mt-4 mt-lg-5 d-flex align-items-center gap-2">
                                <a href="#" class="text-white" aria-label="Read More">Read More</a>
                                <img src="assets/images/icons/right-arrow.svg" class="img-fluid" width="28" height="16" alt=""> 
                            </div>
                        </div>
                        <div class="services__card">
                            <div class="height">
                                <div class="my-4">
                                    <p class="mb-4">NOVEMBER 14, 2023</p>
                                    <h3 class="fs-3 title fw-semibold"> 
                                        Transforming spaces for maximum utility 
                                    </h3>
                                    <p class="fw-medium lead-sm mt-4">Ever felt like your living or working space could be more functional and efficient? In this blog series, we explore the art of transforming spaces for maximum utility. From clever storage solutions to innovative…</p>
                                </div>
                            </div>
                            <div class="icon mt-4 mt-lg-5 d-flex align-items-center gap-2">
                                <a href="#" class="text-white" aria-label="Read More">Read More</a> 
                                <img src="assets/images/icons/right-arrow.svg" class="img-fluid" width="28" height="16" alt="">
                            </div>
                        </div>
                    </div><!--//.owl-carousel-->
                </div><!--//.blog__weraper-->
            </div><!--//.container-fluid-->
    </section>
    <!-- Blogs Services end -->

    <!-- Lets Discuss section Start -->
    <section class="py-5 bg-primary">
        <div class="container">
            <div class="row g-4 g-xl-5">
                <div class="col-lg-6">
                    <div class="text-center text-white text-lg-start">
                        <h2 class="display-4">
                            LET’S DISCUSS <span class="d-block"></span> NEXT PROJECTS
                        </h2>
                        <p class="pb-lg-5 mt-4">
                            The talent at Mrittik runs wide and deep. Across many markets, geographies and typologies, our team members are some of the finest professionals in the industry.. We’ve grouped our work into five categories: places, venues, spaces, experiences and events.
                        </p> 
                    </div>
                </div><!--./col-->
                <div class="col-lg-6">
                    <form class="form-bg" id="contact-form" method="post" action="contact-from.php">
                        <div class="messages"></div>
                        <div class="controls row g-3">
                            <div class="col-12 pb-4 mb-1">
                                <div class="form-group">
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="YOUR NAME">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-12 pb-4 mb-1">
                                <div class="form-group">
                                    <input id="form_email" type="email" name="email" class="form-control"
                                    placeholder="YOUR EMAIL" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-12 pb-4 mb-1">
                                <div class="form-group">
                                    <input id="form_phone" type="text" name="phone" class="form-control"
                                    placeholder="YOUR PHONE NO">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-12 mb-1">
                                <div class="form-group pb-4">
                                    <textarea id="form_message" name="message" class="form-control"
                                    placeholder="YOUR MESSAGE" rows="4"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-12 text-center text-lg-start">
                                <a href="#formWrapp" class="btn btn-white fw-semibold py-3 px-5 rounded-4">SEND MAIL</a>
                            </div>
                        </div>
                    </form>
                </div><!--./col--> 
            </div><!--.//row-->
        </div><!--.//container-->
    </section> 
    <!-- Lets Discuss section End -->

    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
 
</body>
</html>
 
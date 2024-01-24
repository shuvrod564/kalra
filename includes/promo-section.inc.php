<div class="">
    <div class="container ">
        <div class="promo__wrapper py-5 px-3 px-sm-4 px-md-5 position-relative">
        <img  
            srcset="assets/images/home/arab-people.webp"
            src="assets/images/home/arab-people.webp" 
            sizes=""
            alt="arab-people"
            class="img-fluid position-absolute top-0 start-0 w-100 h-100 object-cover z-0 "
            width="1320" height="341"
        />
        <div class="position-absolute top-0 start-0 w-100 h-100 z-2 bg-primary-light" style="opacity:0.82"></div>
        <div class=" py-lg-5 z-index">
            <div class="row g-4 g-lg-5 align-items-center">
                <div class="col-lg-8">
                    <h2 class="fs-1 text-white text-center text-lg-start fw-bold mb-3 text-uppercase">
                            <?php if(isset($heading)) { ?>
                                <?php echo $heading; ?>
                        <?php } else { ?>
                            DENTAL TOURISM BIKANER
                        <?php } ?>
                    </h2>
                    <?php if(isset($boldText)) { ?>
                    <p class="text-white text-center text-lg-start fw-bold mb-1 lead">
                        <?php echo $boldText; ?>
                    </p>  
                    <?php } ?>  
                    <p class="text-white text-center text-lg-start">
                        <?php if(isset($description)) { ?>
                            <?php echo $description; ?>
                        <?php } else { ?> 
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                        <?php } ?>
                    </p>  
                </div><!--//.col-->
                <div class="col-lg-4">
                    <div class="btns d-flex flex-wrap flex-column gap-3 gap-sm-4 justify-content-center">
                        <a href="#appointment" class="btn__service btn btn-outline-white px-4 height col z-index " aria-label="LET’S GET STARTED.">
                            <span class="fw-semibold">LET’S GET STARTED.</span> 
                        </a>  
                        <a href="contact.php" class="btn__service btn btn-white px-4 height col py-2" aria-label="CONTACT US">
                            <span class="fw-semibold">CONTACT US</span> 
                        </a>  
                    </div>
                </div><!--//.col-->
            </div><!--//.row-->
        </div><!--//.container-->
    </div>
</div> 
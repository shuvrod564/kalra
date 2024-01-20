<section class="py-5">
        <div class="container py-sm-3">
            <div class="row g-4 g-xl-5">
                <div class="col-lg-6">
                    <div class="text-center text-lg-start">
                        <h2 class="display-5 text-26 fw-bold">
                            <?php if(isset($title)) { ?>
                                <?php echo $title; ?>
                            <?php } else { ?>
                            Make An <span class="d-lg-block">Appointment</span>
                            <?php } ?>
                        </h2>
                        <p class="pb-lg-5">
                            <?php if(isset($desc)) { ?>
                                <?php echo $desc; ?>
                            <?php } else { ?> 
                                Now you don’t have to wait hours in line, book your appointment today. Enter your details to request an appointment.
                            <?php } ?>
                        </p> 
                        <div class="p-4 p-sm-4 p-md-5 rounded-4 text-start contact__info__box" style="background-color: rgba(185, 185, 185, 0.1);">
                            <div class="ps-sm-4">
                                <h3 class="d-inline-block fs-2 mb-3 text-primary-light fw-bold">
                                    Our Location
                                    <span class="d-block bg-primary-light w-50 mt-3" style="height: 1px;"></span>
                                </h3>
                                <div class="d-flex gap-md-1 mt-sm-4">
                                    <figure class="mb-0 icon"> 
                                        <img src="assets/images/icons/Location.svg" class="img-fluid" width="30" height="35" alt="Location">
                                    </figure>
                                    <p class="mb-0 lead col text-50 fw-medium">
                                        3 KA 13, Pawarnpuri Main Road, Pawanpuri, Near SBBJ Bank, Bikaner, Rajasthan - 334003
                                    </p> 
                                </div>
                                <div class="d-flex gap-md-1 mt-4">
                                    <figure class="mb-0 pt-2 icon">  
                                        <img src="assets/images/icons/phone.svg" width="31" height="31" class="img-fluid" alt="">
                                    </figure>
                                    <p class="mb-0 lead col text-50 fw-medium">
                                        <a href="tel:+91 98291 95898" class="text-50">+91 98291 95898</a> <br>
                                        <a href="tel:+91 98291 95898" class="text-50">+91 98291 95898</a>
                                    </p> 
                                </div>
                                <div class="d-flex gap-md-1 mt-4">
                                    <figure class="mb-0 icon">  
                                        <img src="assets/images/icons/Page.svg" width="31" height="25" class="img-fluid" alt="">
                                    </figure>
                                    <p class="mb-0 lead col text-50 fw-medium">
                                        enquiry@kalradentalcare.com
                                    </p> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--./col-->
                <div class="col-lg-6">
                    <div class="py-5 px-4 rounded-4 w-100" style="background-color: rgba(185, 185, 185, 0.1);">
                        <h3 class="fs-2 text-26 fw-bold mb-3">Appointments</h3>
                        <p class="fs-15">Book your next appointment effortlessly – complete this section with your details to secure your time slot.</p>  
                        <div class="col-lg-12">
                            <form action="http://localhost/flc/submit-contact-form.php" method="post" id="contactForm" class="row g-3 form__wrapper"> 
                                <div class="col-md-6">
                                    <label for="cfirst name" class="form-label text-3b">First Name *</label>
                                    <input type="text" first name="first name" id="cfirst name" class="form-control">
                                    <small class="text-danger error" id="cfirst name_error"></small>
                                </div>
                                <div class="col-md-6">
                                    <label for="cLast Name *" class="form-label text-3b">Last Name *</label>
                                    <input type="text" name="Last Name *" id="cLast Name *" class="form-control">
                                    <small class="text-danger error" id="cLast Name *_error"></small>
                                </div> 
                                <div class="col-md-6">
                                    <label for="cPhone No" class="form-label text-3b">Phone No *</label>
                                    <input type="text" name="Phone No" id="cPhone No" class="form-control">
                                    <small class="text-danger error" id="cPhone No_error"></small>
                                </div>
                                <div class="col-md-6">
                                    <label for="cEmail Id" class="form-label text-3b">Email Id *</label>
                                    <input type="text" name="Email Id" id="cEmail Id" class="form-control">
                                    <small class="text-danger error" id="cEmail Id_error"></small>
                                </div>  
                                <div class="col-md-6">
                                    <label for="cSelect Services" class="form-label text-3b">Select Services *</label>
                                    <input type="text" name="Select Services" id="cSelect Services" class="form-control">
                                    <small class="text-danger error" id="cemail_error"></small>
                                </div>
                                <div class="col-md-6">
                                    <label for="cSelect Date" class="form-label text-3b">Select Date *</label>
                                    <input type="text" name="Select Date" id="cSelect Date" class="form-control">
                                    <small class="text-danger error" id="cSelect Date_error"></small>
                                </div>  
                                <div class="col-12">
                                    <label for="Any Messages" class="form-label text-3b">Any Messages</label>
                                    <textarea name="Any Messages" id="Any Messages" cols="30" rows="2" class="form-control" placeholder=""></textarea>
                                </div> 
                                <div class="col-12">
                                    <button type="submit" name="submit" class="btn btn-dark height py-3 rounded-3 px-5 mt-3" aria-label="BOOK APPOINTMENT">
                                        BOOK APPOINTMENT
                                    </button> 
                                </div>
                            </form>
                        </div><!--./col-->
                    </div> 
                </div><!--./col--> 
            </div><!--.//row-->
        </div><!--.//container-->
    </section>
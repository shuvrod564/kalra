<section class="py-3 py-xl-5">
        <div class="container py-sm-3">
            <div class="row gx-4 g-xl-5">
                <div class="col-lg-6">
                    <div class="text-center text-lg-start">
                        <h2 class="fs-1 heading text-gary fw-bold mb-5">Make An Appointment</h2>
                        <p class="pb-5">Now you don’t have to wait hours in line, book your appointment today. Enter your details to request an appointment.</p> 
                        <div class="p-5 rounded-4" style="background-color: rgba(185, 185, 185, 0.1);">
                            <div class="ps-5" style="border-color: #0086C6;">
                                <h2 class="extra__btn fs-2 pb-4 text-primary fw-bold">Our Location</h2>
                                <div class="d-flex align-items-center gap-4 mt-5">
                                    <img src="assets/images/icons/Location.svg" class="img-fluid" width="30" height="35" alt="Location">
                                    <p class="mb-0 col-lg-7 text-gary fw-medium">
                                        3 KA 13, Pawarnpuri Main Road, Pawanpuri, Near SBBJ Bank, Bikaner, Rajasthan - 334003
                                    </p> 
                                </div>
                                <div class="d-flex align-items-center gap-4 mt-5">
                                    <img src="assets/images/icons/phone.svg" width="31" height="31" class="img-fluid" alt="">
                                    <p class="mb-0 col-lg-5 text-gary fw-medium">
                                        +91 98291 95898 <br>
                                        +91 98291 95898
                                    </p> 
                                </div>
                                <div class="d-flex align-items-center gap-4 mt-5">
                                    <img src="assets/images/icons/Page.svg" width="31" height="25" class="img-fluid" alt="">
                                    <p class="mb-0 col-lg-5 text-gary fw-medium">
                                        enquiry@kalradentalcare.com
                                    </p> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--./col-->
                <div class="col-lg-6">
                    <div class="row g-3 gx-lg-4">
                        <div class="py-5 px-4 rounded-4 text-center text-lg-start" style="background-color: rgba(185, 185, 185, 0.1);">
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
                                        <textarea name="Any Messages" id="Any Messages" cols="30" rows="2" class="form-control py-3" placeholder=""></textarea>
                                    </div> 
                                    <div class="col-12">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#enquireModal" class="btn btn-dark height py-3 rounded-3 px-5" aria-label="BOOK APPOINTMENT">
                                            BOOK APPOINTMENT
                                        </button> 
                                    </div>
                                </form>
                            </div><!--./col-->
                        </div>
                    </div><!--.//row-->
                </div><!--./col--> 
            </div><!--.//row-->
        </div><!--.//container-->
    </section>
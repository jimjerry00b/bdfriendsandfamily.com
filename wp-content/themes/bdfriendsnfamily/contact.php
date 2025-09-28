<?php get_header(); ?>

<?php

/*
        Template Name: Contact Page
    */

?>



<section class="container-fluid d-flex justify-content-center align-items-center" id="contact_section_one">
    <div class="row">
        <div class="col-11 col-md-8 offset-4 p-0 text-end text-md-center">
            <h1>Let’s Plan Your Next Event Together</h1>
        </div>
    </div>
</section>


<section class="container d-flex justify-content-center align-items-center py-5" id="contact_section_two">
    <div class="row">
        <div class="col-12 text-center">
            <h2>Contact Us</h2>
        </div>
        <div class="col-12 text-center">
            <p>We’re here to make your party stress-free with delicious Bangladeshi catering. Contact us today to discuss your event menu, quantity, and special requests.</p>
            <div class="pt-3">
                <span class="px-2">Phone: +1 301-873-8643</span><span class="px-2">email: contact@friendsfamilyfood.com</span>
            </div>
            <h4 class="py-3">Minimum catering order applies. All dishes are available in half-tray & full-tray sizes.</h4>
        </div>
    </div>
</section>


<section class="container-fluid py-2 py-md-5" id="contact_form">
    <div class="row">
        <div class="col-12">
            <div class="form-container">

                <?php
                    echo do_shortcode('[contact-form-7 id="2291bfd" title="Contact Page Form"]');
                ?>

                <!-- <form class="p-4 p-lg-5" action="" method="post">
                    <div class="mb-4">
                        <label for="name" class="form-label">Your Name <span class="required">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Your Email <span class="required">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="form-label">Your Phone Number <span class="required">*</span></label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="form-label">Your Message <span class="required">*</span></label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </div>
                </form> -->
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>
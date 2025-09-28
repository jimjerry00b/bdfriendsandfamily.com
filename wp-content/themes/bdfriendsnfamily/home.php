<?php get_header(); ?>

<?php

/*
        Template Name: Home Page
    */

?>
<section id="banner" class="d-flex justify-content-center align-items-center">
    <div class="overlay"></div>
    <div class="container px-3">
        <div class="row">
            <div class="col-lg-5 col-7 align-self-center">
                <h1 class="">Authentic Bangladeshi Catering in Maryland</h1>
                <p class="home_title" style="transition-delay: 0.2s">Perfect for weddings, birthdays, office parties, and community gatherings</p>
            </div>
            <div class="col-lg-7 col-12 position-relative">
                <div class="d-flex align-items-center position-absolute order_today_box">
                    <button class="order_today_btn"><span>Order Today<span></button>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="why_choose_us" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2>Why Choose Us?</h2>
                <p class="text-start text-sm-center">At Friends and Family, we bring the rich flavors of Bangladesh straight to your party table. From aromatic biriyani to mouthwatering kababs, fresh naan to flavorful curries – every dish is made to perfection. Whether it’s a wedding, birthday, office event, or family gathering, we ensure your guests leave with happy hearts and full plates.</p>
                <a href="<?= site_url();?>/menu/"><button class="btn btn-primary">View our Menu</button></a>
            </div>
        </div>
    </div>
</section>

<section id="section_three" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 text-center mb-4">
                <div class="section_three_img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/icon1.svg" alt="icon1" class="mb-3"></div>
                <h3>Large-Quantity Catering Only</h3>
                <p class="text-center">No small orders, perfect for parties.</p>
            </div>

            <div class="col-12 col-md-6 col-lg-3 text-center mb-4">
                <div class="section_three_img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/icon2.svg" alt="icon1" class="mb-3"></div>
                <h3>Authentic<br>Taste</h3>
                <p class="text-center">Traditional recipes, just like home.</p>
            </div>

            <div class="col-12 col-md-6 col-lg-3 text-center mb-4">
                <div class="section_three_img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/icon3.svg" alt="icon1" class="mb-3"></div>
                <h3>Wide Menu<br>Variety</h3>
                <p class="text-center">Appetizers, mains, rice dishes, breads & more.</p>
            </div>

            <div class="col-12 col-md-6 col-lg-3 text-center mb-4">
                <div class="section_three_img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/icon4.svg" alt="icon1" class="mb-3"></div>
                <h3>Freshly<br>Prepared</h3>
                <p class="text-center">Cooked on the day of your event.</p>
            </div>

        </div>
    </div>
</section>

<section id="section_four" class="py-5">
    <div class="container-fluid">
        <div class="row section_four_row">
            <div class="col-12 col-md-4 p-0 section_four_img_side">
                <div class="section_four_img"></div>
            </div>
            <div class="col-12 col-md-8 p-5 section_four_text_side">
                <div class="section_four_text">
                    <h3>How to Order</h3>
                    <ul id="how_to_order" class="ps-3">
                        <li>We believe every event is unique—and so is every menu. That’s why we don’t use online ordering or fixed pricing. Instead, we take all orders directly over the phone. This way, we can:</li>
                        <li>Understand your exact needs and party size Customize the menu to your preferences Ensure freshness, accuracy, and personal attention</li>
                        <li>Simply give us a call, share your event details, and we’ll create the perfect menu for your gathering.</li>
                    </ul>
                    <a href="tel:+13018738643" class="btn btn-secondary">Call Now</a>
                </div>
            </div>
        </div>
</section>


<section id="section_five" class="py-5 testimonials-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2>What people say about us</h2>
            </div>
        </div>
        <div class="testimonial-slider">
            <div class="testimonial-item">
                <div class="testimonial-content">
                    <p>"We hosted a birthday party for 60 people and ordered a full spread - appetizers, biriyani, kababs, and curry. Everything was flavorful and authentic. My guests said it was the best Bangladeshi food they've had in the US!"</p>
                    <div class="testimonial-author">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/slider_img.jpg" alt="Vin D'Costa">
                        <div class="author-info">
                            <span class="author-name">-Vin D'Costa</span>
                            <div class="rating">⭐⭐⭐⭐⭐</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-content">
                    <p>"As an event organizer, I need reliable catering partners, and this kitchen exceeded my expectations. On-time, large portions, and food that impressed every guest!"</p>
                    <div class="testimonial-author">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/slider_img2.jpg" alt="Farhana S.">
                        <div class="author-info">
                            <span class="author-name">– Albert G.</span>
                            <div class="rating">⭐⭐⭐⭐⭐</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-content">
                    <p>"This catering service made our family reunion unforgettable. The fish curry and kababs tasted just like back home in Bangladesh. Their team was so professional, and the delivery was seamless."</p>
                    <div class="testimonial-author">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/slider_img3.jpg" alt="Farhana S.">
                        <div class="author-info">
                            <span class="author-name">– William R.</span>
                            <div class="rating">⭐⭐⭐⭐⭐</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
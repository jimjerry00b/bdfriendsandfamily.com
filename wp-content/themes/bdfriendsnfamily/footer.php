<?php wp_footer(); ?>
<section class="call-to-action py-4">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9 text-center text-lg-start">
                <h2>Plan Your Party Menu Today!</h2>
                <p>To Place your order call us at +1301-873-8643</p>
                <p>Our Service available only based in Maryland, USA</p>
            </div>
            <div class="col-12 col-lg-3 text-end align-items-center justify-content-center d-flex">
                <a href="tel:+13018738643" class="btn btn-secondary">Call Now</a>
            </div>

        </div>
    </div>
  </section>

<footer class="p-0">
    <div class="container py-5">
      <div class="row">

        <div class="col-12 col-lg-4 mb-4 mb-md-0 d-grid align-items-center justify-content-center justify-content-lg-start">
          <div class="">
              <p class="location">Silver Spring, Maryland</p>
              <p class="phone">Phone: +1 301-873-8643</p>
              <p class="email">contact@friendsandfamilyfood.com</p>
          </div>
        </div>
        <div class="col-12 col-lg-4 mb-4 mb-md-0 text-center">

          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="BD Friends and Family" class="footer-logo mb-3">
          
          <?php
            wp_nav_menu([
                'theme_location'  => 'footer',
                'container'       => false,
                'menu_class'     => 'nav quick-links justify-content-center',
                'fallback_cb'    => false,
                'depth'          => 1,
                'walker'         => new Bootstrap_Nav_Walker(),
                'items_wrap'     => '<ul class="nav quick-links justify-content-center">%3$s</ul>'
            ]);
          ?>

        </div>
        <div class="col-12 col-lg-4 d-grid align-items-center justify-content-center">
            <div class="">
              <h3>Social Media:</h3>
              <div class="social-links">
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="youtube"><i class="bi bi-youtube"></i></a>
                <a href="#" class="tiktok"><i class="bi bi-tiktok"></i></a>
              </div>
            </div>
        </div>
      </div>
    </div>

    <div class="container-fluid copyright-section">
      <div class="row">
        <div class="col-12 text-center">
          <p class="copyright">&copy; 2025 BD Friends and Family. All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script>
    $(document).ready(function(){
      // Banner Slider
      $('.banner-slider').slick({
        dots: true,
        infinite: true,
        speed: 800,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        fade: true,
        cssEase: 'linear',
        arrows: false,
        pauseOnHover: false
      });

      // Testimonial Slider
      $('.testimonial-slider').slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
    });
  </script>

  <script>
    // Get the button
    const scrollBtn = document.getElementById("scrollTopBtn");

    // Show button when user scrolls down 200px
    window.onscroll = function() {
      if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        scrollBtn.style.display = "block";
      } else {
        scrollBtn.style.display = "none";
      }
    };

    // Scroll to top smoothly when clicked
    scrollBtn.onclick = function() {
      window.scrollTo({
        top: 0,
        behavior: "smooth"
      });
    };
  </script>
</body>

</html>
<?php get_header(); ?>

<!-- Call to Action-->
<div class="card text-white bg-secondary my-5 py-4 text-center">
    <div class="card-body">
        <h5><?php echo esc_html( get_field('slogan') ); ?></h5>
    </div>
</div>

<!-- Contact Information -->
<div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <h2 class="text-center mb-4">Contact Us</h2>
            <p class="text-center">You can reach out to us through the following methods:</p>
            <ul class="list-unstyled text-center">
                <li>Email: <a href="mailto:info@example.com">info@example.com</a></li>
                <li>Phone: +1234567890</li>
                <li>Address: 123 Main Street, City, Country</li>
            </ul>
        </div>
    </div>
</div>



<?php get_footer(); ?>
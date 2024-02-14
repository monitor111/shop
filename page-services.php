<?php get_header(); ?>

<!-- Call to Action-->
<div class="card text-white bg-secondary my-5 py-4 text-center">
    <div class="card-body">
        <h5><?php echo esc_html( get_field('slogan') ); ?></h5>
    </div>
</div>

<!-- Service Details -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h2 class="text-center mb-4"><?php the_title(); ?></h2>
            
            <img src="<?php echo esc_url( get_field('services_img') ); ?>" class="img-fluid mb-4" alt="Service Image">

            <p><?php the_content(); ?></p>
            <h4 class="mt-4">Additional Information</h4>
            <ul>
                <li><strong>Duration:</strong> <?php echo esc_html( get_field('duration') ); ?></li>
                <li><strong>Price:</strong> <?php echo esc_html( get_field('price') ); ?></li>
                <li><strong>Location:</strong> <?php echo esc_html( get_field('location') ); ?></li>
            </ul>
        </div>
    </div>
</div>

 

<?php get_footer(); ?>

<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 text-center">
            <?php

            $banner_image = get_field('banner_image');

            if( !empty($banner_image) ): ?>

                <img class="img-fluid mb-3" src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center banner">
            <div class="my-auto col p-5">
                <?php the_field('banner_content'); ?>
                <p>
                    <a href="<?php echo site_url('/menu') ?>" class="btn btn-orange btn-lg">
                        View Our Menu
                    </a>
                    <a href="<?php echo site_url('/book') ?>" class="btn btn-orange-line btn-lg">
                        Book Your Experience
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('includes/why'); ?>


<div class="p-5 mb-5" style="background: url('<?php the_field('what_do_we_offer_image'); ?>') no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <?php the_field('what_do_we_offer_content'); ?>
                <p>
                    <a href="<?php the_field('what_do_we_offer_link'); ?>" class="btn btn-lg btn-orange pl-5 pr-5">
                        And More
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>


<?php get_template_part('includes/what'); ?>
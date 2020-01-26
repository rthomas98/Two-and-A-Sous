<div class="container-fluid p-0 banner">
    <div class="row">
        <div class="col">
            <div class="txt-overlay">
                <?php

                $chefs_banner_image = get_field('chefs_banner_image');

                if( !empty($chefs_banner_image) ): ?>

                    <img class="img-fluid mb-3" src="<?php echo $chefs_banner_image['url']; ?>" alt="<?php echo $chefs_banner_image['alt']; ?>" width="" />

                <?php endif; ?>
                <div class="centered">
                        <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="col my-auto">
                <?php

                $chef_kirk_image = get_field('chef_kirk_image');

                if( !empty($chef_kirk_image) ): ?>

                    <img class="img-fluid mb-3" src="<?php echo $chef_kirk_image['url']; ?>" alt="<?php echo $chef_kirk_image['alt']; ?>" width="" />

                <?php endif; ?>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="col my-auto">
                <?php the_field('chef_kirk_bio_'); ?>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('includes/contact'); ?>

<div class="mb-5"></div>

<div class="container mb-5">
    <div class="row mb-5">
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="col my-auto">
                <?php

                $chef_ray_image = get_field('chef_ray_image');

                if( !empty($chef_ray_image) ): ?>

                    <img class="img-fluid mb-3" src="<?php echo $chef_ray_image['url']; ?>" alt="<?php echo $chef_ray_image['alt']; ?>" width="" />

                <?php endif; ?>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="col my-auto">
                <?php the_field('chef_ray_bio'); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
                <?php

                $services_cta_image = get_field('services_cta_image');

                if( !empty($services_cta_image) ): ?>

                    <img class="img-fluid mb-3" src="<?php echo $services_cta_image['url']; ?>" alt="<?php echo $services_cta_image['alt']; ?>" width="600" />

                <?php endif; ?>

                <?php the_field('services_cta_content'); ?>

        <p>
            <a href="<?php the_field('services_cta_link'); ?>" class="btn btn-orange btn-lg pl-5 pr-5">
                View Our Services
            </a>
        </p>

        </div>
    </div>
</div>

<?php get_template_part('includes/what'); ?>
<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 text-center">
            <?php

            $services_banner_image = get_field('services_banner_image');

            if( !empty($services_banner_image) ): ?>

                <img class="img-fluid mb-3" src="<?php echo $services_banner_image['url']; ?>" alt="<?php echo $services_banner_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center banner">
            <div class="my-auto col p-5">
                <?php the_field('services_banner_content'); ?>
                <p>
                    <a href="<?php echo site_url('/menu') ?>" class="btn btn-orange btn-lg pl-5 pr-5">
                        View Our Menu
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col text-center">
            <?php the_field('services_banner_intro'); ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto col">
                <?php the_field('private_event_content'); ?>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 text-center">
            <?php

            $private_event_image = get_field('private_event_image');

            if( !empty($private_event_image) ): ?>

                <img class="img-fluid mb-3" src="<?php echo $private_event_image['url']; ?>" alt="<?php echo $private_event_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_template_part('includes/why'); ?>

<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-smh-12 col-md-12 col-lg-6 text-center">
            <?php

            $personal_event_image = get_field('personal_event_image');

            if( !empty($personal_event_image) ): ?>

                <img class="img-fluid mb-3" src="<?php echo $personal_event_image['url']; ?>" alt="<?php echo $personal_event_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto col">
                <?php the_field('personal_event_content'); ?>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('includes/contact'); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 text-center">
            <?php

            $wedding_catering_image = get_field('wedding_catering_image');

            if( !empty($wedding_catering_image) ): ?>

                <img class="img-fluid mb-3" src="<?php echo $wedding_catering_image['url']; ?>" alt="<?php echo $wedding_catering_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto col">
                <?php the_field('wedding_catering_content'); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto col">
                <?php the_field('intimate_dinner_for_two_content'); ?>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 text-center">
            <?php

            $intimate_dinner_for_two_image = get_field('intimate_dinner_for_two_image');

            if( !empty($intimate_dinner_for_two_image) ): ?>

                <img class="img-fluid mb-3" src="<?php echo $intimate_dinner_for_two_image['url']; ?>" alt="<?php echo $intimate_dinner_for_two_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 text-center">
            <?php

            $corporate_events_image = get_field('corporate_events_image');

            if( !empty($corporate_events_image) ): ?>

                <img class="img-fluid mb-3" src="<?php echo $corporate_events_image['url']; ?>" alt="<?php echo $corporate_events_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto col">
                <?php the_field('corporate_events_content'); ?>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('includes/what'); ?>

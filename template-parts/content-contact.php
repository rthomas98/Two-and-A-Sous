
<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-md-6 offset-md-3 text-center banner">
            <?php the_field('contact_content'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <?php

            $contact_image = get_field('contact_image');

            if( !empty($contact_image) ): ?>

                <img class="img-fluid mb-3" src="<?php echo $contact_image['url']; ?>" alt="<?php echo $contact_image['alt']; ?>" width="1000" />

            <?php endif; ?>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row mb-4">
        <div class="col">
            <?php the_field('get_in_touch_content'); ?>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <?php the_field('contact_form'); ?>
        </div>
    </div>
</div>

<?php get_template_part('includes/why'); ?>

<div class="mb-5"></div>

<?php get_template_part('includes/what'); ?>


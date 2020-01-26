<div class="bg-black p-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <h2>
                    <?php the_field('why_title', 'option'); ?>
                </h2>
                <p class="lead">
                    <?php the_field('why_sub_title', 'option'); ?>
                </p>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-sm-12 col-md-12 col-lg-4 d-flex justify-content-center">
                <div class="my-auto col text-center">
                    <h4><?php the_field('time_title', 'option'); ?></h4>
                    <i class="fad fa-watch fa-4x mb-4 mt-4"></i>
                    <p>
                        <?php the_field('time_content', 'option'); ?>
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 d-flex justify-content-center">
                <div class="my-auto col text-center">
                    <h4><?php the_field('healthy_title_', 'option'); ?></h4>
                    <i class="fad fa-salad fa-4x mb-4 mt-4"></i>
                    <p>
                        <?php the_field('healthy_content', 'option'); ?>
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 d-flex justify-content-center">
                <div class="my-auto col text-center">
                    <h4><?php the_field('eat_title', 'option'); ?></h4>
                    <i class="fad fa-utensils fa-4x mb-4 mt-4"></i>
                    <p>
                        <?php the_field('eat_content', 'option'); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <p>
                    <a href="<?php echo site_url('/meet-the-chefs') ?>" class="btn btn-orange-line btn-lg pl-5 pr-5">
                        Meet the Chefs
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>


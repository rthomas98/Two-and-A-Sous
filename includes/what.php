<div class="container mb-5">
    <div class="row mb-4">
        <div class="col text-center">
            <h2>
                <?php the_field('how_title', 'option'); ?>
            </h2>
            <p class="lead">
                <?php the_field('how_sub_title', 'option'); ?>
            </p>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-sm-12 col-md-12 col-lg-4 text-center">
            <?php

            $how_section_one_img = get_field('how_section_one_img', 'option');

            if( !empty($how_section_one_img) ): ?>

                <img class="img-fluid mb-3" src="<?php echo $how_section_one_img['url']; ?>" alt="<?php echo $how_section_one_img['alt']; ?>" width="" />

            <?php endif; ?>

            <h4>
                <?php the_field('how_section_one_title', 'option'); ?>
            </h4>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 text-center">
            <?php

            $how_section_two_img = get_field('how_section_two_img', 'option');

            if( !empty($how_section_two_img) ): ?>

                <img class="img-fluid mb-3" src="<?php echo $how_section_two_img['url']; ?>" alt="<?php echo $how_section_two_img['alt']; ?>" width="" />

            <?php endif; ?>

            <h4>
                <?php the_field('how_section_two_title', 'option'); ?>
            </h4>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 text-center">
            <?php

            $how_section_three_img = get_field('how_section_three_img', 'option');

            if( !empty($how_section_three_img) ): ?>

                <img class="img-fluid mb-3" src="<?php echo $how_section_three_img['url']; ?>" alt="<?php echo $how_section_three_img['alt']; ?>" width="" />

            <?php endif; ?>

            <h4>
                <?php the_field('how_three_section_title', 'option'); ?>
            </h4>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <p>
                <a href="<?php the_field('how_link', 'option'); ?>" class="btn btn-orange-line btn-lg pl-5 pr-5">
                    Book your Experience
                </a>
            </p>
        </div>
    </div>
</div>
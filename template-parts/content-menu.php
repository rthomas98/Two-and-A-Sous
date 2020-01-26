<div class="container mb-5">
    <div class="row">
        <div class="col text-center banner">
            <?php

            $menu_image = get_field('menu_image');

            if( !empty($menu_image) ): ?>

                <img class="img-fluid mb-3" src="<?php echo $menu_image['url']; ?>" alt="<?php echo $menu_image['alt']; ?>" width="" />

            <?php endif; ?>

            <h1>
                <?php the_field('menu_title'); ?>
            </h1>

            <?php the_field('menu_content'); ?>
        </div>
    </div>
</div>

<div class="container mb-5 text-center">
    <div class="row mb-5">
        <div class="col">
            <h2 class="txt-orange mb-3">
                Appetizers
            </h2>

            <p class="lead">
                Panko-Crusted Lump Crab Cake w/Louisiana Remoulade & Arugula Salad
            </p>
            <p class="lead">
                Smoked Pork Belly w/Ancho Chile Bbq Glaze & Apple Chutney
            </p>
            <p class="lead">
                Fried Lobster Tempura w/Sweet Chile Sauce
            </p>
            <p class="lead">
                Chicken Lollipops w/ Cognac Honey Mustard Sauce
            </p>
            <p class="lead">
                BBQ Shrimp w/White Wine Cajun Butter Dip
            </p>
            <p class="lead">
                Seared Flat Iron Steak w/Romesco Sauce
            </p>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col">
            <h2 class="txt-orange mb-3">
                Salads
            </h2>

            <p class="lead">
                Arugula Salad w/Blood Orange, Feta Cheese, Almond Slivers, Champagne Vinaigrette
            </p>
            <p class="lead">
                Chopped Salad w/Craisins, Feta Cheese, Candied Bacon, Raspberry Vinaigrette
            </p>
            <p class="lead">
                Bibb Salad w/Cinnamon Roasted Apple, Spicy Pecan, Blue Cheese Crumbles, Maple Vinaigrette
            </p>
            <p class="lead">
                Wedged Caesar Salad w/Garlic Croutons, Shaved Parmesan, Caesar Dressing
            </p>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col">
            <h2 class="txt-orange mb-3">
                Entrees
            </h2>

            <p class="lead">
                Seared Delmonico Ribeye w/Dill Garlic Mash, Caramelized Pearl Onion Haricot Verts
            </p>
            <p class="lead">
                Smoked Blackened Salmon w/Southwest Quinoa Pilaf, Citrus Beurre Blanc
            </p>
            <p class="lead">
                Sous Vide Lamb w/Lavender Bean Stew, Blackberry Gastrique
            </p>
            <p class="lead">
                Crispy Half Chicken, Wild Rice w/Bourbon Demi-Mushroom Sauce
            </p>
            <p class="lead">
                Herb Crusted Pork Tenderloin w/Cranberry Reduction, Sweet Potato Mash & Roasted Brussel Sprouts
            </p>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col">
            <h2 class="txt-orange mb-3">
                Desserts
            </h2>

            <p class="lead">
                Bananas Foster
            </p>
            <p class="lead">
                N.Y. Style Cheesecake
            </p>
            <p class="lead">
                White Chocolate Panna Cotta
            </p>
            <p class="lead">
                Chocolate & Vanilla Trifle
            </p>
        </div>
    </div>
</div>

<?php get_template_part('includes/why'); ?>

<div class="mb-5"></div>

<?php get_template_part('includes/what'); ?>
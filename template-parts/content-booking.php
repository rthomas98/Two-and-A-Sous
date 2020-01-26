<div class="container-fluid mb-5 h-75">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 text-center p-0">
            <?php

            $booking_image = get_field('booking_image');

            if( !empty($booking_image) ): ?>

                <img class="img-fluid mb-3" src="<?php echo $booking_image['url']; ?>" alt="<?php echo $booking_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center banner">
            <div class="my-auto col p-5">
                <?php the_field('booking_content'); ?>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row mb-4">
        <div class="col">
                <h2 class="text-center">Contact a Two and A Sous Chef</h2>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <form>

                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6">

                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name" name="name">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="form-group">
                            <label for="email">Email Address:</label>
                            <input type="email" class="form-control" id="name" aria-describedby="email" name="email" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="text" class="form-control" id="phone" aria-describedby="phone" name="phone" required>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="form-group">
                            <label for="budget">What's your estimated budget?</label>
                            <select class="form-control" id="budget" name="budget">
                                <option>Select and option</option>
                                <option>0 - 500</option>
                                <option>500 - 1000</option>
                                <option>1000 - 2000</option>
                                <option>2000+</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="form-group">
                            <label for="date">Event Date:</label>
                            <input type="text" class="form-control" id="phone" aria-describedby="phone" name="phone" placeholder="mm/dd/yyyy" required>

                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="form-group">
                            <label for="people">How many people will be at your event?</label>
                            <input type="text" class="form-control" id="people" aria-describedby="people" name="people" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">How can we help you:</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Wedding Catering</option>
                                <option>Private Events</option>
                                <option>Personal Chef</option>
                                <option>Intimate Dinner For Two</option>
                                <option>Corporate Events</option>
                                <option>Other</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Questions or Comments</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">

                        <button type="submit" class="btn btn-orange btn-lg pl-5 pr-5">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php get_template_part('includes/faqs'); ?>

<?php get_template_part('includes/what'); ?>

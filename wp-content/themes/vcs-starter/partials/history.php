<section  id="about"class="history-section">
<?php
    $image = get_field('hhs_image');
    ?>
        <div class="text-block-1">
            <h2><?php the_field('hhs_heading-1'); ?></h2>
            <p><?php the_field('hhs_description-1'); ?>
                <img src="<?php echo $image['sizes']['large'] ?>" alt="British Royal Guard">
            </p>
        </div>
        <div class="text-block-2">
            <h3><?php the_field('hhs_heading-2'); ?></h3>
            <p><?php the_field('hhs_description-2'); ?>
            </p>
        </div>
        <div class="text-block-3">
            <h5><?php the_field('hhs_pre-title'); ?></h5>
            <div class="text-block-3-container">
                <h2><?php the_field('hhs_heading-3'); ?></h2>
                <p><?php the_field('hhs_description-3'); ?>
                </p>
            </div>

        </div>
        <img src="<?php echo $image['sizes']['large'] ?>" alt="British Royal Guard" class="head-img-responsive">
    </section>
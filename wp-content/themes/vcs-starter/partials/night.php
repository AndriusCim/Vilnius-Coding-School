<section class="night-section">
<?php
    $image = get_field('hn_image');
    ?>
        <h3><?php the_field('hn_title'); ?></h3>
        <div class="night-container">
            <div class="night-img-container">
                <img src="<?php echo $image['sizes']['large'] ?>" alt="Nighttime London">
                <div class="night-text">
                    <h2><?php the_field('hn_image-title'); ?></h2>
                    <p><?php the_field('hn_image-description'); ?></p>
                </div>
            </div>

        </div>

    </section>
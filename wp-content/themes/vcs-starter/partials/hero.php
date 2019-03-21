    <!-- Hero Section -->

    <section id="home" class="head-section">
    <?php
    $image = get_field('hh_image');
    ?>
        <h3><?php the_field('hh_pre-title'); ?></h3>
        <div class="word-bg">
            <h1><?php the_field('hh_title'); ?></h1>
        </div>
        <div class="head-img">
            <img src="<?php echo $image['sizes']['large'] ?>" alt="London bridge">
        </div>
    </section>
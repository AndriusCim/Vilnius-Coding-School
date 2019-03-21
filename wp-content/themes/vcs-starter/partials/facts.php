<section class="fact-section">
<?php
    $image = get_field('hf_image');
    ?>
        <div class="fact-title">
            <h2><?php the_field('hf_title'); ?></h2>
            <h4><?php the_field('hf_pre-title'); ?></h4>
        </div>
        <div class="fact-container">
            <div class="fact-text-left">
                <p><?php the_field('hf_description-1'); ?></p>
                <img src="<?php echo $image['sizes']['large'] ?>" alt="Letter L">
            </div>
            <div class="fact-text-middle">
                <p><?php the_field('hf_description-2'); ?></p>
            </div>
            <div class="fact-text-right">
                <p><?php the_field('hf_description-3'); ?></p>
            </div>

        </div>

    </section>
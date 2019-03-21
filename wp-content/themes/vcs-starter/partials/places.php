<section id="travel" class="places-section">
<?php 
     $imageBig = get_field('hp_image');
     $image1 = get_field('hp_image_small-1');
     $image2 = get_field('hp_image_small-2');
     $image3 = get_field('hp_image_small-3');
?>
        <div class="places-text">
            <h2><?php the_field('hp_title'); ?></h2>
            <p><?php the_field('hp_description'); ?></p>
        </div>
        <div class="places-images">
            <div class="places-big-img">
                <img src="<?php echo $imageBig['sizes']['large'] ?>" alt="London Eye">
                <div class="places-big-text">
                    <h3><?php the_field('hp_image_title');?></h3>
                    <p><?php the_field('hp_image_description'); ?></p>
                </div>
            </div>
            <div class="places-gallery">
                <div class="places-gal-img">
                    <img src="<?php echo $image1['sizes']['large'] ?>" alt="Tower bridge">
                    <h4><?php the_field('hp_image_small_title-1');?></h4>
                </div>
                <div class="places-gal-img">
                    <img src="<?php echo $image2['sizes']['large'] ?>" alt="Big Ben">
                    <h4 class="places-font-color"><?php the_field('hp_image_small_title-2');?></h4>
                </div>
                <div class="places-gal-img">
                    <img src="<?php echo $image3['sizes']['large'] ?>" alt="London Museum">
                    <h4><?php the_field('hp_image_small_title-3');?></h4>
                </div>
            </div>
        </div>
    </section>
<section class="transport-section">
<?php
    $imageBig = get_field('ht_image_big');
    $image = get_field('ht_gallery_image_1');
    $image2 = get_field('ht_gallery_image_2');
    $image3 = get_field('ht_gallery_image_3');
    ?>
<div class="transport-box">
    <h2><?php the_field('ht_title'); ?></h2>
    <div class="transport-img">
        <img src="<?php echo $imageBig['sizes']['large'] ?>" alt="London Tube Train">
        <div class="transport-img-text">
            <h3><?php the_field('ht_image_header'); ?></h3>
            <p><?php the_field('ht_image_description'); ?></p>
        </div>
    </div>
</div>
<div class="transport-sidetext">
    <p><?php the_field('ht_side_description'); ?></p>
    <p class="transport-wiki"><strong><?php the_field('ht_side_source'); ?></strong></p>
</div>
</section>
<h4 class="transport-more"><?php the_field('ht_side-title'); ?></h4>
<div class="transport-container">
<div class="transport-gal-name">
    <h3><?php the_field('ht_gallery-title'); ?></h3>
    <p><?php the_field('ht_gallery-pre-title'); ?></p>
</div>
<div class="transport-gallery">
    <div class="transport-gal-img"><img src="<?php echo $image['sizes']['large'] ?>"   alt="London Bus"></div>
    <div class="transport-gal-img"><img src="<?php echo $image2['sizes']['large'] ?>"  alt="London Metro Train"></div>
    <div class="transport-gal-img-small"><img src="<?php echo $image3['sizes']['large'] ?>"  alt="London Busy Street"></div>
</div>
</div>

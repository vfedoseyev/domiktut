<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package domiktut
 */

?>
<article class="popular__card">
    <div class="card">
        <div class=" card__image">
            <div class="catalog-slider uno">
                <?php $images = acf_photo_gallery('house_photo', $post->ID);

                if ($images[0]) :
                    $full_image_url = $images[0]['full_image_url']; //Full size image url
                    $full_image_url = acf_photo_gallery_resize_image($full_image_url, 480, 320);
                    //echo var_dump($images[0]);
                    //echo $full_image_url;
                ?>
                    <img src="<?php echo $full_image_url ?>" alt="">
                <?php
                endif;
                ?>
                <?php $images = acf_photo_gallery('house_photo', $post->ID);

                if ($images[0]) :
                    $full_image_url = $images[1]['full_image_url']; //Full size image url
                    $full_image_url = acf_photo_gallery_resize_image($full_image_url, 480, 320);
                    //echo var_dump($images[0]);
                    //echo $full_image_url;
                ?>
                    <img src="<?php echo $full_image_url ?>" alt="">
                <?php
                endif;
                ?>
                <?php $images = acf_photo_gallery('house_photo', $post->ID);

                if ($images[0]) :
                    $full_image_url = $images[2]['full_image_url']; //Full size image url
                    $full_image_url = acf_photo_gallery_resize_image($full_image_url, 480, 320);
                    //echo var_dump($images[0]);
                    //echo $full_image_url;
                ?>
                    <img src="<?php echo $full_image_url ?>" alt="">
                <?php
                endif;
                ?>
                <?php $images = acf_photo_gallery('house_photo', $post->ID);

                if ($images[0]) :
                    $full_image_url = $images[3]['full_image_url']; //Full size image url
                    $full_image_url = acf_photo_gallery_resize_image($full_image_url, 480, 320);
                    //echo var_dump($images[0]);
                    //echo $full_image_url;
                ?>
                    <img src="<?php echo $full_image_url ?>" alt="">
                <?php
                endif;
                ?>
                <?php $images = acf_photo_gallery('house_photo', $post->ID);

                if ($images[0]) :
                    $full_image_url = $images[4]['full_image_url']; //Full size image url
                    $full_image_url = acf_photo_gallery_resize_image($full_image_url, 480, 320);
                    //echo var_dump($images[0]);
                    //echo $full_image_url;
                ?>
                    <img src="<?php echo $full_image_url ?>" alt="">
                <?php
                endif;
                ?>
            </div>
            <div class="number-of-people">
                <img src="<?php bloginfo('template_url'); ?>/images/svg/icon_people_grey.svg" alt="">
                <span>до <?php the_field('number_of_people'); ?></span>
            </div>
            <button data-id="<?php echo $post->ID ?>" class="like-btn catalog-like">
                <svg width="26" height="26" viewBox="0 0 26 26" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.0004 4.90639C15.5452 2.62164 19.4777 2.69748 21.9293 5.1534C24.3798 7.61039 24.4643 11.5234 22.1849 14.0757L12.9983 23.2754L3.81377 14.0757C1.53444 11.5234 1.62002 7.6039 4.06944 5.1534C6.52319 2.70073 10.4481 2.61839 13.0004 4.90639ZM20.3953 6.68415C18.7703 5.05698 16.1486 4.9909 14.4478 6.5184L13.0015 7.81623L11.5542 6.51948C9.84794 4.98981 7.23169 5.05698 5.60236 6.68631C3.98819 8.30048 3.90694 10.8842 5.39436 12.5916L12.9994 20.2085L20.6044 12.5926C22.0929 10.8842 22.0116 8.30373 20.3953 6.68415Z" />
                </svg>
            </button>
        </div>
        <div class="card_description">
            <a href="<?php echo get_permalink() ?>">
                <h4 id="card__name" class="card__name"><?php echo get_the_title() ?></h4>
            </a>
            <div><?php the_field('adress'); ?></div>
            <div class="card__parameters mobile-hidden">
                <?php if (get_field('number_of_beds')) : ?>
                    <div class="card__item ">
                        <img src="<?php bloginfo('template_url'); ?>/images/svg/icon_bed.svg" alt="">
                        <span class="number_of_beds"><?php the_field('number_of_beds'); ?></span>
                    </div>
                <?php else : ?><div class="card-item">&nbsp</div>
                <?php endif;
                ?>
                <?php if (get_field('entertainment_catalog')) : ?>
                    <div class="card__item ">
                        <img src="<?php bloginfo('template_url'); ?>/images/svg/icon_entertainment.svg" alt=""><?php the_field('entertainment_catalog'); ?>
                    </div>
                <?php else : ?><div class="card-item">&nbsp</div>
                <?php endif;
                ?>

                <?php if (get_field('sauna_catalog')) : ?>
                    <div class="card__item ">
                        <img src="<?php bloginfo('template_url'); ?>/images/svg/sauna.svg" alt=""><?php the_field('sauna_catalog'); ?>
                    </div>
                <?php else : ?><div class="card-item">&nbsp</div>
                <?php endif;
                ?>
                <?php if (get_field('waterpool_catalog')) : ?>
                    <div class="card__item ">
                        <img src="<?php bloginfo('template_url'); ?>/images/svg/icon_waterpool.svg" alt=""><?php the_field('waterpool_catalog'); ?>
                    </div>
                <?php else : ?><div class="card-item">&nbsp</div>
                <?php endif;
                ?>
            </div>
            <div class="card__foot">
                <p class="card__price">от <?php the_field('weekday_price'); ?> ₽ <span class="laptop-hidden">/ сутки</span>
                </p>
                <a href="<?php echo get_permalink() ?>" class="card__link">Подробнее</a>
            </div>
        </div>
    </div>
</article>
<script>
    window.onload = function() {

        if (document.getElementsByClassName("list_comm")[0].textContent == "") {

            document.getElementsByClassName("main_block")[0].style.display = "none";

        }

    };
</script>
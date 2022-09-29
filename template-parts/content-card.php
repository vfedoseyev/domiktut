<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package domiktut
 */

?>

<article class="card">

    <div class="card__img">
        <button data-id="<?php echo $post->ID ?>" class="catalog-like">
            <svg width="20" height="39" viewBox="0 0 18 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.99957 1.32512C11.0354 -0.502684 14.1814 -0.442017 16.1426 1.52272C18.103 3.48832 18.1706 6.61872 16.3472 8.66058L8.99784 16.0203L1.65024 8.66058C-0.17323 6.61872 -0.104763 3.48312 1.85477 1.52272C3.81777 -0.439417 6.9577 -0.505284 8.99957 1.32512ZM14.9154 2.74732C13.6154 1.44558 11.5181 1.39272 10.1574 2.61472L9.00044 3.65298L7.84257 2.61558C6.47757 1.39185 4.38457 1.44558 3.0811 2.74905C1.78977 4.04038 1.72477 6.10738 2.9147 7.47325L8.9987 13.5668L15.0827 7.47411C16.2735 6.10738 16.2085 4.04298 14.9154 2.74732Z" />
            </svg>
        </button>
        <div href="<?php echo get_permalink() ?>" class="catalog-slider">
            <a href="<?php echo get_permalink() ?>">
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
            </a>
            <a href="<?php echo get_permalink() ?>">
                <?php
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
            </a>
            <a href="<?php echo get_permalink() ?>">
                <?php
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
            </a>
            <a href="<?php echo get_permalink() ?>">
                <?php

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
            </a>
            <a href="<?php echo get_permalink() ?>">
                <?php

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
            </a>
        </div>
    </div>
    <div class="card-description">
        <div class="card-description__item">
            <a href="<?php echo get_permalink() ?>">
                <h4 id="card__name" class="card__name"><?php echo get_the_title() ?></h4>
            </a>
            <div><?php the_field('adress'); ?></div>
            <div class="number-of-people">
                <img src="<?php bloginfo('template_url'); ?>/images/svg/icon_people_grey.svg" alt="">
                <span>до <?php the_field('number_of_people'); ?></span>
            </div>
        </div>
        <div class="card-description__item">
            <div class="card__parameters mobile-hidden">
                <?php if (get_field('number_of_beds')) : ?>
                    <div class="card__item card__item_number-of-beds">
                        <img src="<?php bloginfo('template_url'); ?>/images/svg/icon_bed.svg" alt="">
                        <span class="number_of_beds"><?php the_field('number_of_beds'); ?></span>
                    </div>

                <?php endif;
                ?>
                <?php if (get_field('entertainment_catalog')) : ?>
                    <div class="card__item card__item_entertainment-catalog">
                        <img src="<?php bloginfo('template_url'); ?>/images/svg/icon_entertainment.svg" alt=""><?php the_field('entertainment_catalog'); ?>
                    </div>
                <?php endif;
                ?>
                <?php if (get_field('sauna_catalog')) : ?>
                    <div class="card__item card__item_sauna-catalog">
                        <img src="<?php bloginfo('template_url'); ?>/images/svg/sauna.svg" alt=""><?php the_field('sauna_catalog'); ?>
                    </div>
                <?php endif;
                ?>
                <?php if (get_field('waterpool_catalog')) : ?>
                    <div class="card__item card__item_waterpool-catalog">
                        <img src="<?php bloginfo('template_url'); ?>/images/svg/icon_waterpool.svg" alt=""><?php the_field('waterpool_catalog'); ?>
                    </div>
                <?php endif;
                ?>
            </div>
            <div class="price__list-data">
                <div class="price__list_catalog">
                    <div class="parameters3">
                        <div id="" class="prise__value-data"><span>от </span><?php the_field('weekday_price'); ?><span> ₽</span></div>
                    </div>

                </div>
            </div>
        </div>
        <div class="card__buttons">
            <?php if (is_user_logged_in()) { ?>
                <input data-id="<?php echo $post->ID ?>" class="checkbox-collection" type="checkbox" name="checkbox-collection">
            <?php } ?>



            <a href="<?php echo get_permalink() ?>" class="show-map-btn"><svg width="20" height="20" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.33366 5.11916V15.8058L6.55449 13.9975L11.5545 16.4975L15.667 14.7333V4.04749L16.7528 3.58249C16.8162 3.55531 16.8854 3.5443 16.9541 3.55044C17.0228 3.55659 17.0889 3.5797 17.1465 3.61769C17.2041 3.65569 17.2513 3.70739 17.284 3.76816C17.3167 3.82892 17.3337 3.89684 17.3337 3.96582V15.8333L11.5003 18.3333L6.50033 15.8333L1.24783 18.0842C1.18442 18.1113 1.11526 18.1223 1.04655 18.1162C0.977836 18.1101 0.911725 18.0869 0.854148 18.0489C0.796571 18.0109 0.74933 17.9592 0.716665 17.8985C0.683999 17.8377 0.666931 17.7698 0.666992 17.7008V5.83332L2.33366 5.11916ZM12.5362 9.36915L9.00033 12.9042L5.46449 9.36915C4.76531 8.66986 4.28919 7.77894 4.09634 6.80906C3.90348 5.83918 4.00255 4.83389 4.38101 3.92031C4.75947 3.00673 5.40033 2.22589 6.22256 1.67652C7.04479 1.12715 8.01145 0.833923 9.00033 0.833923C9.9892 0.833923 10.9559 1.12715 11.7781 1.67652C12.6003 2.22589 13.2412 3.00673 13.6196 3.92031C13.9981 4.83389 14.0972 5.83918 13.9043 6.80906C13.7115 7.77894 13.2353 8.66986 12.5362 9.36915ZM9.00033 10.5475L11.357 8.18999C11.8233 7.72385 12.1408 7.12991 12.2695 6.48328C12.3982 5.83665 12.3323 5.16638 12.08 4.55723C11.8278 3.94809 11.4005 3.42743 10.8523 3.06112C10.3041 2.6948 9.65964 2.49928 9.00033 2.49928C8.34101 2.49928 7.69651 2.6948 7.14832 3.06112C6.60013 3.42743 6.17289 3.94809 5.92063 4.55723C5.66837 5.16638 5.60242 5.83665 5.73111 6.48328C5.85981 7.12991 6.17738 7.72385 6.64366 8.18999L9.00033 10.5475Z" fill="#333333" />
                </svg>
            </a>
            <!-- <a href="<?php echo get_permalink() ?>" class="card-info-btn">Карта</a> -->
            <a href="<?php echo get_permalink() ?>" class="card-info-btn">Подробнее</a>
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
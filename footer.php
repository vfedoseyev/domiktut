<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package domiktut
 */

?>
<script>
    var map_card_name = '<?php echo get_the_title() ?>';
    var map_card_price = `<span>от </span><?php the_field('weekday_price'); ?><span> ₽</span>`;
    var map_card_link = '<?php echo get_permalink() ?>';
</script>
<script src="https://api-maps.yandex.ru/2.1/?apikey=1a85384c-60e6-4fa6-b488-9cde697ed582&lang=ru_RU" type="text/javascript">
</script>
<script src="<?php echo get_template_directory_uri(); ?>/map.js"></script>


</html>
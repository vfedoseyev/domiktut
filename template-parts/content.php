<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package domiktut
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if (is_singular()) :
			the_title('<h1 class="entry-title">', '</h1>');
		else :
			the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
		endif;

		if ('post' === get_post_type()) :
		?>
			<div class="entry-meta">
				<?php
				domiktut_posted_on();
				domiktut_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php domiktut_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'domiktut'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post(get_the_title())
			)
		); ?>
		<p><?php the_field('number_of_people'); ?> </p>
		<h2><?php the_field('house_name'); ?> </h2>
		<p><?php the_field('adress'); ?> </p>
		<!-- Галерея с фотографиями -->
		<div><?php
				//Get the images ids from the post_metadata
				$images = acf_photo_gallery('house_photo', $post->ID);
				//Check if return array has anything in it
				if (count($images)) :
					//Cool, we got some data so now let's loop over it
					foreach ($images as $image) :
						$id = $image['id']; // The attachment id of the media
						$title = $image['title']; //The title
						$caption = $image['caption']; //The caption
						$full_image_url = $image['full_image_url']; //Full size image url
						$full_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160); //Resized size to 262px width by 160px height image url
						$thumbnail_image_url = $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
						$url = $image['url']; //Goto any link when clicked
						$target = $image['target']; //Open normal or new tab
						$alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
						$class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
				?>
					<div class="col-xs-6 col-md-3">
						<div class="thumbnail">
							<?php if (!empty($url)) { ?><a href="<?php echo $url; ?>" <?php echo ($target == 'true') ? 'target="_blank"' : ''; ?>><?php } ?>
								<img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
								<?php if (!empty($url)) { ?></a><?php } ?>
						</div>
					</div>
			<?php endforeach;
				endif; ?>
		</div>
		<p><?php the_field('type_of_house'); ?> </p>
		<p><?php the_field('floors'); ?> </p>
		<p><?php the_field('area'); ?> </p>
		<p><?php the_field('land_area'); ?> </p>
		<p><?php the_field('number_of_people'); ?> </p>
		<p><span>до </span><?php the_field('number_of_people_description'); ?> <span>человек</span></p>
		<p><?php the_field('number_of_beds'); ?> <span>спальных мест</span></p>
		<p><?php the_field('number_of_bedrooms'); ?> <span>спальен</span></p>
		<p>Описание</p>
		<p><?php the_field('description'); ?> </p>
		<p>Доп платы</p>
		<p><?php the_field('additional_fees'); ?> </p>
		<p>Важная информация</p>
		<p><?php the_field('important_information'); ?> </p>
		<p>Видео</p>
		<p><?php the_field('video'); ?> </p>
		<p>Цена в будни</p>
		<p><?php the_field('weekday_price'); ?> <span>₽</span></p>
		<p>Цена в пятницу</p>
		<p><?php the_field('friday_price'); ?> <span>₽</span></p>
		<p>Цена в субботу</p>
		<p><?php the_field('saturday_price'); ?> <span>₽</span></p>
		<p>Цена в воскресение</p>
		<p><?php the_field('sunday_price'); ?> <span>₽</span></p>
		<p>Полные выходные</p>
		<p><?php the_field('weekend_price'); ?> <span>₽</span></p>
		<p>Новый год (2 дня)</p>
		<p><?php the_field('new_year_price'); ?> <span>₽</span></p>
		<p>Январские празднкии (сутки)</p>
		<p><?php the_field('january_holidays_price'); ?> <span>₽</span></p>
		<p>Отзывы</p>
		<?php
		//Get the images ids from the post_metadata
		$images = acf_photo_gallery('reviews', $post->ID);
		//Check if return array has anything in it
		if (count($images)) :
			//Cool, we got some data so now let's loop over it
			foreach ($images as $image) :
				$id = $image['id']; // The attachment id of the media
				$title = $image['title']; //The title
				$caption = $image['caption']; //The caption
				$full_image_url = $image['full_image_url']; //Full size image url
				$full_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160); //Resized size to 262px width by 160px height image url
				$thumbnail_image_url = $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
				$url = $image['url']; //Goto any link when clicked
				$target = $image['target']; //Open normal or new tab
				$alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
				$class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
		?>
				<div class="col-xs-6 col-md-3">
					<div class="thumbnail">
						<?php if (!empty($url)) { ?><a href="<?php echo $url; ?>" <?php echo ($target == 'true') ? 'target="_blank"' : ''; ?>><?php } ?>
							<img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
							<?php if (!empty($url)) { ?></a><?php } ?>
					</div>
				</div>
		<?php endforeach;
		endif; ?>
		<p>КАРТА<?php var_dump(the_field('map')); ?> </p>
		<?php wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'domiktut'),
				'after'  => '</div>',
			)
		);

		?>

		<p>Расположение</p>
		<p><?php the_field('location'); ?> </p>
		<p>Удобства</p>
		<p><?php the_field('comfort'); ?> </p>
		<p>Развлечения</p>
		<p><?php the_field('entertainment'); ?> </p>
		<p>Подборки</p>
		<p><?php the_field('selections'); ?> </p>
		<p>Время заезда</p>
		<p><?php the_field('check_in_time'); ?> </p>
		<p>Время выезда</p>
		<p><?php the_field('check_out_time'); ?> </p>
		<p>Порядковый номер в каталоге</p>
		<p><?php the_field('index_number'); ?> </p>
		<p>Тип бассейна</p>
		<p><?php the_field('waterpool_type'); ?> </p>
		<p>Условия</p>
		<p><?php the_field('conditions'); ?> </p>
		<p>Подборки</p>
		<p><?php the_field('selections'); ?> </p>
		<p>Баня(карточка для каталога)</p>
		<p><?php the_field('sauna_catalog'); ?> </p>
		<p>Бассейн(карточка в каталоге)</p>
		<p><?php the_field('waterpool_catalog'); ?> </p>
		<p>Развлечения(карточка в каталоге)</p>
		<p><?php the_field('entertainment_catalog'); ?> </p>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php domiktut_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
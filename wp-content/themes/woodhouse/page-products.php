<?php
/**
 * Template name: Страница продукции
 */

get_header();

$images = get_post_meta( $post->ID, 'product_images_items', true );
?>


    <section class="content py-5">
        <div class="container py-3">

			<?php while ( have_posts() ) : the_post(); ?>
                <h2 class="title text-center pb-3 text-uppercase"><?php the_title(); ?></h2>
                <div class="mx-3">
                    <div class="row bg-white py-3">
						<?php
						if ( $images ) :
							if ( get_post_meta( $post->ID,
									'product_images_show', true ) === 'on'
							) : ?>
                                <div class="col-12 col-lg-6">
                                    <div class="row no-gutters">
                                        <div class="col-6 text-center">
                                            <img class="border border-primary image-selected"
                                                 src="<?php echo $images[0]['image']; ?>"
                                                 alt="">
                                        </div>
                                        <div class="col">
                                            <div class="row no-gutters">
												<?php foreach (
													$images as $key => $item
												) : ?>
                                                    <div class="col-6 col-sm-4">
                                                        <img class="mx-1 image-select border
                                                    <?php echo $key === 0
															? 'border-primary'
															: ''; ?>"
                                                             src="<?php echo $item['image']; ?>"
                                                             alt="">
                                                    </div>
												<?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							<?php endif;
						endif; ?>
                        <div class="col">
                            <div class="description my-3">
								<?php the_content(); ?>
                            </div>
                            <button class="btn content-btn">Узнать цену</button>
                        </div>
                    </div>
                </div>
			<?php endwhile; ?>

        </div>
    </section>

    <section class="content py-5">
        <div class="container py-3">
        </div>
    </section>

<?php
get_footer();

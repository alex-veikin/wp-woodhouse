<?php
/**
 * Template name: Главная страница
 */

get_header();

$portfolio = get_post_meta( $post->ID, 'portfolio_items', true );
$examples  = get_post_meta( $post->ID, 'examples_items', true );
?>

<?php if ( get_post_meta( $post->ID, 'about_show', true ) === 'on' ) : ?>
    <section class="about py-5">
        <div class="container about-content py-3">
            <img class="image float-right d-none d-sm-inline"
                 src="<?php echo get_post_meta( $post->ID, 'about_image1',
				     true ); ?>"
                 alt="">
            <h2 class="title text-center pb-3 text-uppercase">
				<?php echo get_post_meta( $post->ID, 'about_title', true ); ?>
            </h2>
            <p class="description">
				<?php echo get_post_meta( $post->ID, 'about_text1', true ); ?>
            </p>
            <div class="row d-sm-none no-gutters mb-3">
                <div class="col">
                    <img class="w-100 h-100"
                         src="<?php echo get_post_meta( $post->ID,
						     'about_image1', true ); ?>"
                         alt="">
                </div>
                <div class="col">
                    <img class="w-100 h-100"
                         src="<?php echo get_post_meta( $post->ID,
						     'about_image2', true ); ?>"
                         alt="">
                </div>
            </div>
            <p class="description">
				<?php echo get_post_meta( $post->ID, 'about_text2', true ); ?>
            </p>
            <img class="image float-left d-none d-sm-inline"
                 src="<?php echo get_post_meta( $post->ID, 'about_image2',
				     true ); ?>"
                 alt="">
            <p class="description">
				<?php echo get_post_meta( $post->ID, 'about_text3', true ); ?>
            </p>
            <p class="description">
				<?php echo get_post_meta( $post->ID, 'about_text4', true ); ?>
                <span class="phone">
	            <?php echo get_post_meta( $post->ID, 'about_phone', true ); ?>
                </span>
            </p>
        </div>
    </section>
<?php endif; ?>

<?php if ( get_post_meta( $post->ID, 'portfolio_show', true ) === 'on' ) : ?>
    <section class="portfolio py-5">
        <div class="container">
            <div>
				<?php foreach ( $portfolio as $item ) : ?>
                    <div class="item row mb-5 pb-5">
                        <div class="item-content col-md-6 col-lg-12 py-3 mx-3 mx-sm-auto">
                            <h3 class="item-title text-uppercase text-center mb-3">
								<?php echo $item['title']; ?>
                            </h3>
                            <p class="mx-2 mx-sm-0">
								<?php echo $item['content']; ?>
                            </p>
                            <div class="arrow"></div>
                        </div>
                        <div class="col mt-4 mt-md-0 mt-lg-4 images d-flex flex-column justify-content-center">
                            <div class="row no-gutters">
                                <div class="col-4 col-md-6 col-lg-2">
                                    <img src="<?php echo $item['image1']; ?>"
                                         alt="">
                                </div>
                                <div class="col-4 col-md-6 col-lg-2">
                                    <img src="<?php echo $item['image2']; ?>"
                                         alt="">
                                </div>
                                <div class="col-4 col-md-6 col-lg-2">
                                    <img src="<?php echo $item['image3']; ?>"
                                         alt="">
                                </div>
                                <div class="col-4 col-md-6 col-lg-2">
                                    <img src="<?php echo $item['image4']; ?>"
                                         alt="">
                                </div>
                                <div class="col-4 col-md-6 col-lg-2">
                                    <img src="<?php echo $item['image5']; ?>"
                                         alt="">
                                </div>
                                <div class="col-4 col-md-6 col-lg-2">
                                    <img src="<?php echo $item['image6']; ?>"
                                         alt="">
                                </div>
                            </div>
                        </div>
                    </div>
				<?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ( get_post_meta( $post->ID, 'examples_show', true ) === 'on' ) : ?>
    <section class="examples">
        <div class="container py-3">
            <h2 class="title text-center mb-3 text-uppercase">Примеры наших
                работ</h2>
            <div class="owl-carousel owl-theme">
				<?php foreach ( $examples as $item ) : ?>
                    <div class="example border border-secondary p-2">
                        <div class="row">
                            <div class="col-8 offset-2 offset-sm-0 col-sm-6 d-flex justify-content-center align-items-center">
                                <img src="<?php echo $item['image']; ?>"
                                     alt="">
                            </div>
                            <div class="example-content col-12 col-sm-6">
                                <div class="mb-2">
                                    <div class="example-title">
                                        Тип <?php echo $item['example_type']
										               === 'les' ? 'лестницы'
											: 'паркета' ?>
                                    </div>
                                    <div class="example-text">
										<?php echo $item['description']; ?>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="example-title">Материал</div>
                                    <div class="example-text">
										<?php echo $item['material']; ?>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="example-title">Срок изготовления
                                    </div>
                                    <div class="example-text">
										<?php echo $item['term']; ?>
                                    </div>
                                </div>
                                <button class="btn example-btn">Узнать цену
                                </button>
                            </div>
                        </div>
                    </div>
				<?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php
get_footer();

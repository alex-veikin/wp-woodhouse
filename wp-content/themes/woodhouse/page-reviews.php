<?php
/**
 * Template name: Страница отзывов
 */

get_header();

$reviews = get_post_meta( $post->ID, 'reviews_items', true );
?>

    <section class="content py-5">
        <div class="container py-3">
            <h2 class="title text-center pb-3 text-uppercase">Отзывы наших клиентов</h2>
            <div class="owl-carousel owl-theme mt-3">
		        <?php foreach ( $reviews as $item ) : ?>
                    <blockquote class="review-item p-3">
                        <div class="row">
                            <div class="col-sm-3 text-center">
                                <img class="rounded-circle" src="<?php echo $item['image']; ?>" style="width:100px;height:100px;object-fit:cover">
                            </div>
                            <div class="col-sm-9">
                                <p><?php echo $item['review']; ?></p>
                                <p class="font-weight-bold font-italic"><?php echo $item['name']; ?></p>
                            </div>
                        </div>
                    </blockquote>
		        <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php
get_footer();

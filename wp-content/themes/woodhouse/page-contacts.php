<?php
/**
 * Template name: Страница контактов
 */

get_header();
?>

    <section class="content py-5">
        <div class="container py-3">
            <h2 class="title text-center pb-3 text-uppercase">Контакты</h2>
            <div class="contacts-text">
                <p class="row mb-3 no-gutters">
                    <span class="col text-md-right font-weight-bold pr-3"><i class="fas fa-map-marker"></i>Адрес:</span>
                    <span class="col-12 col-md-6 font-italic">
                        <?php echo get_post_meta( $post->ID, 'contacts_address', true ); ?>
                    </span>
                </p>
                <p class="row mb-3 no-gutters">
                    <span class="col text-md-right font-weight-bold pr-3"><i class="fas fa-phone"></i>Телефон/факс:</span>
                    <span class="col-12 col-md-6 font-italic">
                        <?php echo get_post_meta( $post->ID, 'contacts_phone', true ); ?>
                    </span>
                </p>
                <p class="row mb-3 no-gutters">
                    <span class="col text-md-right font-weight-bold pr-3"><i class="fas fa-mobile-alt"></i>Мобильный (Vel):</span>
                    <span class="col-12 col-md-6 font-italic">
                        <?php echo get_post_meta( $post->ID, 'contacts_mobile', true ); ?>
                    </span>
                </p>
                <p class="row mb-3 no-gutters">
                    <span class="col text-md-right font-weight-bold pr-3"><i class="fas fa-at"></i>E-mail:</span>
                    <span class="col-12 col-md-6 font-italic">
                        <?php echo get_post_meta( $post->ID, 'contacts_email', true ); ?>
                    </span>
                </p>
            </div>
            <div class="contacts-map">
	            <?php echo get_post_meta( $post->ID, 'contacts_map', true ); ?>
            </div>
        </div>
    </section>

<?php
get_footer();

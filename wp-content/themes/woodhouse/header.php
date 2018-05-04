<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="app">
    <header class="header <?php echo is_front_page() ? 'header-home' : ''; ?>">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-sm navbar-light col">
                        <a class="navbar-brand d-sm-none"
                           href="<?php bloginfo( 'home' ); ?>">
							<?php if ( ot_get_option( 'logo-menu_upload' ) ) : ?>
                                <img src="<?php echo ot_get_option( 'logo-menu_upload' ); ?>"
                                     alt="logo" class="header-navbar-logo">
							<?php else : ?>
                                WoodHouse
							<?php endif; ?>
                        </a>
                        <button class="navbar-toggler" type="button"
                                data-toggle="collapse" data-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="fas fa-bars"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-sm-center"
                             id="navbarNav">
	                        <?php
	                        wp_nav_menu( array(
		                        'theme_location' => 'menu-header',
		                        'menu_id'        => 'primary-menu',
		                        'container'      => false,
		                        'depth'          => 2,
		                        'menu_class'     => 'navbar-nav',
		                        'walker'         => new Bootstrap_NavWalker(),
		                        'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
	                        ) );
	                        ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="text-center py-4 d-none d-sm-block">
				<?php if ( ot_get_option( 'logo-main_upload' ) ) : ?>
                    <img src="<?php echo ot_get_option( 'logo-main_upload' ); ?>"
                         alt="logo" class="header-logo">
				<?php endif; ?>
            </div>
			<?php if ( is_front_page() ): ?>
                <div class="text-center mt-3 header-text">
					<?php if ( ot_get_option( 'header_text1' ) ) : ?>
                        <h1 class="text-1"><?php echo ot_get_option( 'header_text1' ); ?></h1>
					<?php endif; ?>
					<?php if ( ot_get_option( 'header_text2' ) ) : ?>
                        <p class="text-2"><?php echo ot_get_option( 'header_text2' ); ?></p>
					<?php endif; ?>
					<?php if ( ot_get_option( 'header_text3' ) ) : ?>
                        <p class="text-3"><?php echo ot_get_option( 'header_text3' ); ?></p>
					<?php endif; ?>
                </div>
			<?php endif; ?>
        </div>
        <div class="header-side header-side-left d-none d-md-flex">
			<?php if ( ot_get_option( 'social_ok_link' ) ) : ?>
                <a href="<?php echo ot_get_option( 'social_ok_link' ); ?>">
                    <i class="fab fa-odnoklassniki"></i>
                </a>
			<?php endif; ?>
			<?php if ( ot_get_option( 'social_vk_link' ) ) : ?>
                <a href="<?php echo ot_get_option( 'social_vk_link' ); ?>">
                    <i class="fab fa-vk"></i>
                </a>
			<?php endif; ?>
			<?php if ( ot_get_option( 'social_in_link' ) ) : ?>
                <a href="<?php echo ot_get_option( 'social_in_link' ); ?>">
                    <i class="fab fa-instagram"></i>
                </a>
			<?php endif; ?>
			<?php if ( ot_get_option( 'social_fb_link' ) ) : ?>
                <a href="<?php echo ot_get_option( 'social_fb_link' ); ?>">
                    <i class="fab fa-facebook"></i>
                </a>
			<?php endif; ?>
			<?php if ( ot_get_option( 'social_tw_link' ) ) : ?>
                <a href="<?php echo ot_get_option( 'social_tw_link' ); ?>">
                    <i class="fab fa-twitter"></i>
                </a>
			<?php endif; ?>
        </div>
        <div class="header-side header-side-right d-none d-md-flex">
            <a class="circle" href="#"><i class="fas fa-phone"></i></a>
        </div>
    </header>
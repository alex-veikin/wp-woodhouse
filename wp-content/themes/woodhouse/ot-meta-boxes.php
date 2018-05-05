<?php

add_action( 'admin_init', 'custom_meta_boxes' );

function custom_meta_boxes() {

	$page_main = [
		'id'       => 'page_main',
		'title'    => 'Настройки главной страницы',
		'desc'     => '',
		'pages'    => [ 'page' ],
		'context'  => 'normal',
		'priority' => 'high',
		'fields'   => [
			// About
			[
				'label' => 'Секция "О нас"',
				'id'    => 'about_tab',
				'type'  => 'tab',
			],
			[
				'label' => 'Показывать секцию',
				'id'    => 'about_show',
				'type'  => 'on-off',
				'std'   => 'on',
			],
			[
				'label' => 'Заголовок',
				'id'    => 'about_title',
				'type'  => 'text',
			],
			[
				'label' => 'Абзац 1',
				'id'    => 'about_text1',
				'type'  => 'textarea',
			],
			[
				'label' => 'Абзац 2',
				'id'    => 'about_text2',
				'type'  => 'textarea',
			],
			[
				'label' => 'Абзац 3',
				'id'    => 'about_text3',
				'type'  => 'textarea',
			],
			[
				'label' => 'Абзац 4',
				'id'    => 'about_text4',
				'type'  => 'textarea',
			],
			[
				'label' => 'Телефон',
				'id'    => 'about_phone',
				'type'  => 'text',
			],
			[
				'label' => 'Фото 1',
				'id'    => 'about_image1',
				'type'  => 'upload',
			],
			[
				'label' => 'Фото 2',
				'id'    => 'about_image2',
				'type'  => 'upload',
			],


			// Portfolio
			[
				'label' => 'Секция "Портфолио"',
				'id'    => 'portfolio_tab',
				'desc'  => '',
				'type'  => 'tab',
			],
			[
				'label' => 'Показывать секцию',
				'id'    => 'portfolio_show',
				'type'  => 'on-off',
				'std'   => 'on',
			],
			[
				'id'       => 'portfolio_items',
				'label'    => 'Секции портфолио',
				'type'     => 'list-item',
				'settings' => [
					[
						'label' => 'Заголовок',
						'id'    => 'title',
						'type'  => 'text',
					],
					[
						'label' => 'Контент',
						'id'    => 'content',
						'type'  => 'textarea',
						'rows'  => '10',
					],
					[
						'label' => 'Фото 1',
						'id'    => 'image1',
						'type'  => 'upload',
					],
					[
						'label' => 'Фото 2',
						'id'    => 'image2',
						'type'  => 'upload',
					],
					[
						'label' => 'Фото 3',
						'id'    => 'image3',
						'type'  => 'upload',
					],
					[
						'label' => 'Фото 4',
						'id'    => 'image4',
						'type'  => 'upload',
					],
					[
						'label' => 'Фото 5',
						'id'    => 'image5',
						'type'  => 'upload',
					],
					[
						'label' => 'Фото 6',
						'id'    => 'image6',
						'type'  => 'upload',
					],
				],
			],


			// Examples
			[
				'label' => 'Секция "Примеры работ"',
				'id'    => 'examples_tab',
				'type'  => 'tab',
			],
			[
				'label' => 'Показывать секцию',
				'id'    => 'examples_show',
				'type'  => 'on-off',
				'std'   => 'on',
			],
			[
				'id'       => 'examples_items',
				'label'    => 'Секции портфолио',
				'desc'     => '',
				'type'     => 'list-item',
				'settings' => [
					[
						'id'      => 'example_type',
						'label'   => 'Тип',
						'type'    => 'radio',
						'choices' => [
							[
								'value' => 'les',
								'label' => 'Лестница',
								'src'   => '',
							],
							[
								'value' => 'par',
								'label' => 'Паркет',
								'src'   => '',
							],
						],
					],
					[
						'label' => 'Краткое описание',
						'id'    => 'description',
						'type'  => 'text',
					],
					[
						'label' => 'Марериал',
						'id'    => 'material',
						'type'  => 'textarea',
						'rows'  => '10',
					],
					[
						'label' => 'Срок изготовления',
						'id'    => 'term',
						'type'  => 'text',
						'rows'  => '10',
					],
					[
						'label' => 'Фото',
						'id'    => 'image',
						'type'  => 'upload',
					],
				],
			],
		],
	];

	$page_products = [
		'id'       => 'page_products',
		'title'    => 'Галерея продукции',
		'desc'     => '',
		'pages'    => [ 'page' ],
		'context'  => 'normal',
		'priority' => 'high',
		'fields'   => [
			[
				'label' => 'Показывать секцию',
				'id'    => 'product_images_show',
				'type'  => 'on-off',
				'std'   => 'on',
			],
			[
				'id'       => 'product_images_items',
				'label'    => 'Галерея',
				'type'     => 'list-item',
				'settings' => [
					[
						'label' => 'Фото',
						'id'    => 'image',
						'type'  => 'upload',
					],
				],
			],
		],
	];

	$page_reviews = [
		'id'       => 'page_reviews',
		'title'    => 'Настройки страницы отзывов',
		'desc'     => '',
		'pages'    => [ 'page' ],
		'context'  => 'normal',
		'priority' => 'high',
		'fields'   => [
			[
				'id'       => 'reviews_items',
				'label'    => 'Отзывы',
				'type'     => 'list-item',
				'settings' => [
					[
						'label' => 'Имя',
						'id'    => 'name',
						'type'  => 'text',
					],
					[
						'label' => 'Отзыв',
						'id'    => 'review',
						'type'  => 'textarea',
						'rows'  => '10',
					],
					[
						'label' => 'Фото',
						'id'    => 'image',
						'type'  => 'upload',
					],
				],
			],
		],
	];

	$page_contacts = [
		'id'       => 'page_contacts',
		'title'    => 'Настройки страницы контактов',
		'desc'     => '',
		'pages'    => [ 'page' ],
		'context'  => 'normal',
		'priority' => 'high',
		'fields'   => [
			[
				'label' => 'Адрес',
				'id'    => 'contacts_address',
				'type'  => 'text',
			],
			[
				'label' => 'Телефон/факс',
				'id'    => 'contacts_phone',
				'type'  => 'text',
			],
			[
				'label' => 'Мобильный',
				'id'    => 'contacts_mobile',
				'type'  => 'text',
			],
			[
				'label' => 'E-mail',
				'id'    => 'contacts_email',
				'type'  => 'text',
			],
			[
				'label' => 'Крата',
				'desc'  => 'Код карты (iframe)',
				'id'    => 'contacts_map',
				'type'  => 'textarea',
			],
		],
	];


	if ( function_exists( 'ot_register_meta_box' ) ) {
		$post_id       = isset( $_GET['post'] ) ? $_GET['post']
			: ( isset( $_POST['post_ID'] ) ? $_POST['post_ID'] : 0 );
		$template_file = get_post_meta( $post_id, '_wp_page_template', true );

		if ( $template_file == 'page-main.php' ) {
			ot_register_meta_box( $page_main );
		}

		if ( $template_file == 'page-products.php' ) {
			ot_register_meta_box( $page_products );
		}

		if ( $template_file == 'page-reviews.php' ) {
			ot_register_meta_box( $page_reviews );
		}

		if ( $template_file == 'page-contacts.php' ) {
			ot_register_meta_box( $page_contacts );
		}
	}

}
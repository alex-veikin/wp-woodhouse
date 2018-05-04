<?php
/**
 * Initialize the custom Meta Boxes.
 */
add_action( 'admin_init', 'custom_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in ot-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */
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

	/**
	 * Create a custom meta boxes array that we pass to
	 * the OptionTree Meta Box API Class.
	 */
	$my_meta_box = [
		'id'       => 'demo_meta_box',
		'title'    => __( 'Demo Meta Box', 'theme-text-domain' ),
		'desc'     => '',
		'pages'    => [ 'post' ],
		'context'  => 'normal',
		'priority' => 'high',
		'fields'   => [
			[
				'label' => __( 'Conditions', 'theme-text-domain' ),
				'id'    => 'demo_conditions',
				'type'  => 'tab',
			],
			[
				'label' => __( 'Show Gallery', 'theme-text-domain' ),
				'id'    => 'demo_show_gallery',
				'type'  => 'on-off',
				'desc'  => sprintf( __( 'Shows the Gallery when set to %s.',
					'theme-text-domain' ), '<code>on</code>' ),
				'std'   => 'off',
			],
			[
				'label'     => '',
				'id'        => 'demo_textblock',
				'type'      => 'textblock',
				'desc'      => __( 'Congratulations, you created a gallery!',
					'theme-text-domain' ),
				'operator'  => 'and',
				'condition' => 'demo_show_gallery:is(on),demo_gallery:not()',
			],
			[
				'label'     => __( 'Gallery', 'theme-text-domain' ),
				'id'        => 'demo_gallery',
				'type'      => 'gallery',
				'desc'      => sprintf( __( 'This is a Gallery option type. It displays when %s.',
					'theme-text-domain' ),
					'<code>demo_show_gallery:is(on)</code>' ),
				'condition' => 'demo_show_gallery:is(on)',
			],
			[
				'label' => __( 'More Options', 'theme-text-domain' ),
				'id'    => 'demo_more_options',
				'type'  => 'tab',
			],
			[
				'label' => __( 'Text', 'theme-text-domain' ),
				'id'    => 'demo_text',
				'type'  => 'text',
				'desc'  => __( 'This is a demo Text field.',
					'theme-text-domain' ),
			],
			[
				'label' => __( 'Textarea', 'theme-text-domain' ),
				'id'    => 'demo_textarea',
				'type'  => 'textarea',
				'desc'  => __( 'This is a demo Textarea field.',
					'theme-text-domain' ),
			],
		],
	];

	/**
	 * Register our meta boxes using the
	 * ot_register_meta_box() function.
	 */
	if ( function_exists( 'ot_register_meta_box' ) ) {
//		ot_register_meta_box( $meta_box_review );

		$post_id = isset( $_GET['post'] ) ? $_GET['post']
			: ( isset( $_POST['post_ID'] ) ? $_POST['post_ID'] : 0 );
		$template_file = get_post_meta( $post_id, '_wp_page_template', true );

		if ( $template_file == 'page-main.php' ) {
			ot_register_meta_box( $page_main );
		}

		if ( $template_file == 'page-contacts.php' ) {
			ot_register_meta_box( $page_contacts );
		}

	}

}
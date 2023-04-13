<?php

// Metaboxes para el Home

add_action( 'cmb2_admin_init', 'MyAgency_home_fields' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function MyAgency_home_fields() {
    $prefix = "MyAgency_home_";

    $id_home = get_option('page_on_front');
	/**
	 * Metabox to be displayed on a single page ID
	 */
	$MyAgency_home_fields = new_cmb2_box( array(
		'id'           => $prefix . 'homepage',
		'title'        => esc_html__( 'Homepage fields', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
			'id' => array($id_home),
		), // Specific post IDs to display this metabox
	) );

    // FIELDS
    // imagennnn
    $MyAgency_home_fields->add_field( array(
		'name' => esc_html__( 'Image Hero', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'image_hero', //image
		'type' => 'file',
	) );

    $MyAgency_home_fields->add_field( array(
		'name'    => esc_html__( 'Title Text 1', 'cmb2' ),
		'desc'    => esc_html__( 'Main Title page, Hero section', 'cmb2' ),
		'id'      => $prefix . 'main_title_1',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );

    $MyAgency_home_fields->add_field( array(
		'name'    => esc_html__( 'Title Text 2', 'cmb2' ),
		'desc'    => esc_html__( 'Main Title page, Hero section', 'cmb2' ),
		'id'      => $prefix . 'main_title_2',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );

    //buttons
    $MyAgency_home_fields->add_field( array(
		'name'    => esc_html__( 'Left Button', 'cmb2' ),
		'desc'    => esc_html__( 'Left Button, Hero section', 'cmb2' ),
		'id'      => $prefix . 'left_button',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 1,
		),
	) );

    $MyAgency_home_fields->add_field( array(
		'name'    => esc_html__( 'right Button', 'cmb2' ),
		'desc'    => esc_html__( 'right Button, Hero section', 'cmb2' ),
		'id'      => $prefix . 'right_button',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 1,
		),
	) );

	$MyAgency_home_fields->add_field( array(
		'name' => esc_html__( 'event_title', 'cmb2' ),
		'desc' => esc_html__( 'Events Title', 'cmb2' ),
		'id'   => $prefix . 'event_title',
		'type' => 'text',
	) );

	$MyAgency_home_fields->add_field( array(
		'name'         => esc_html__( 'Imágenes', 'cmb2' ),
		'desc'         => esc_html__( 'Add images', 'cmb2' ),
		'id'           => $prefix . 'image_portfolio',
		'type'         => 'file_list',
		'preview_size' => array( 100, 300 ), // Default: array( 50, 50 )
	) );

	$MyAgency_home_fields->add_field( array(
		'name' => esc_html__( 'Image Increase Home', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'image_home_increase', //image
		'type' => 'file',
	) );

	$MyAgency_home_fields->add_field( array(
		'name' => esc_html__( 'Who we are title', 'cmb2' ),
		'desc' => esc_html__( 'Add Who we are title', 'cmb2' ),
		'id'   => $prefix . 'who_title',
		'type' => 'text',
	) );

	$MyAgency_home_fields->add_field( array(
		'name' => esc_html__( 'Image Who We Are', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'who_image', //image
		'type' => 'file',
	) );

	$MyAgency_home_fields->add_field( array(
		'name'    => esc_html__( 'Description Who We Are', 'cmb2' ),
		'desc'    => esc_html__( 'Description', 'cmb2' ),
		'id'      => $prefix . 'who_text',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );

}

/***************************** PAGE ABOUT ******************************/

add_action( 'cmb2_admin_init', 'MyAgency_about' );
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function MyAgency_about() {
    $prefix = 'MyAgency_about_icons_';

	/**
	 * Repeatable Field Groups
	 */
	$MyAgency_about_icons = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => esc_html__( 'Icons with description', 'cmb2' ),
		'object_types' => array( 'page' ),
        'context' 	=> 'normal',
		'priority'	=> 'high',
		'show_names'   => 'true',
		'show_on'		=> array(
			'key'	=> 'page-template',
			'value'   => 'page-about.php'
		)
	) );

        //descripción paginaaaaaa

    $MyAgency_about_icons->add_field( array(
		'name' => esc_html__( 'Description Page', 'cmb2' ),
		'desc' => esc_html__( 'field description', 'cmb2' ),
		'id'   => $prefix . 'description_page_title',
		'type' => 'textarea_small',
	) );

    //imagen about
    $MyAgency_about_icons->add_field( array(
		'name' => esc_html__( 'Image About page', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'image_about', //image
		'type' => 'file',
	) );

    // group tileeeeee
		$MyAgency_about_icons->add_field( array(
			'name' => esc_html__( 'Titulo de Icons', 'cmb2' ),
			'desc' => esc_html__( 'Type the title icons', 'cmb2' ),
			'id'   => $prefix . 'titulo_icons',
			'type' => 'text',
		) );

    $MyAgency_about_icons->add_field( array(
		'name' => esc_html__( 'Description icons', 'cmb2' ),
		'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'   => $prefix . 'description_titulo_icons',
		'type' => 'textarea_small',
	) );

	// $group_field_id is the field id string, so in this case: 'yourprefix_group_demo'
	$group_field_id_about = $MyAgency_about_icons->add_field( array(
		'id'          => $prefix . 'about',
		'type'        => 'group',
		'description' => esc_html__( 'GAdd option if need it', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Group {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Add Another Group', 'cmb2' ),
			'remove_button'  => esc_html__( 'Remove Group', 'cmb2' ),
			'sortable'       => true,
			'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

	$MyAgency_about_icons->add_group_field( $group_field_id_about, array(
		'name'       => esc_html__( 'Entry Title', 'cmb2' ),
		'id'         => 'title_icon',
		'type'       => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$MyAgency_about_icons->add_group_field( $group_field_id_about, array(
		'name'        => esc_html__( 'Description', 'cmb2' ),
		'description' => esc_html__( 'Write a short description for this entry', 'cmb2' ),
		'id'          => 'description_icon',
		'type'        => 'textarea_small',
	) );

	$MyAgency_about_icons->add_group_field( $group_field_id_about, array(
		'name' => esc_html__( 'Entry Image', 'cmb2' ),
		'id'   => 'image_icon',
		'type' => 'file',
	) );
}


/***************************** PAGE SERVICES ******************************/

add_action( 'cmb2_admin_init', 'MyAgency_services' );
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function MyAgency_services() {
    $prefix = 'MyAgency_services_';

	/**
	 * Repeatable Field Groups
	 */
	$MyAgency_services_content = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => esc_html__( 'Services with description', 'cmb2' ),
		'object_types' => array( 'page' ),
        'context' 	=> 'normal',
		'priority'	=> 'high',
		'show_names'   => 'true',
		'show_on'		=> array(
			'key'	=> 'page-template',
			'value'   => 'page-services.php'
		)

	) );

        //descripción paginaaaaaa

    $MyAgency_services_content->add_field( array(
		'name' => esc_html__( 'Description Page Services', 'cmb2' ),
		'desc' => esc_html__( 'field description services', 'cmb2' ),
		'id'   => $prefix . 'description_title_services',
		'type' => 'textarea_small',
	) );

	// $group_field_id is the field id string, so in this case: 'yourprefix_group_demo'
	$group_field_id = $MyAgency_services_content->add_field( array(
		'id'          => $prefix . 'services',
		'type'        => 'group',
		'description' => esc_html__( 'GAdd option if need it', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Group {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Add Another Group', 'cmb2' ),
			'remove_button'  => esc_html__( 'Remove Group', 'cmb2' ),
			'sortable'       => true,
			'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

	$MyAgency_services_content->add_group_field( $group_field_id, array(
		'name'       => esc_html__( 'Entry Title', 'cmb2' ),
		'id'         => 'title_service',
		'type'       => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$MyAgency_services_content->add_group_field( $group_field_id, array(
		'name'        => esc_html__( 'Description', 'cmb2' ),
		'description' => esc_html__( 'Write a short description for this entry', 'cmb2' ),
		'id'          => 'description_service',
		'type'        => 'textarea_small',
	) );

	$MyAgency_services_content->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Entry Image', 'cmb2' ),
		'id'   => 'icon_service',
		'type' => 'file',
	) );
}



/***************************** PAGE TEAM ******************************/

add_action( 'cmb2_admin_init', 'MyAgency_team' );
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function MyAgency_team() {
    $prefix = 'MyAgency_team_';

	/**
	 * Repeatable Field Groups
	 */
	$MyAgency_team_content = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => esc_html__( 'Team with description', 'cmb2' ),
		'object_types' => array( 'page' ),
        'context' 	=> 'normal',
		'priority'	=> 'high',
		'show_names'   => 'true',
		'show_on'		=> array(
			'key'	=> 'page-template',
			'value'   => 'page-team.php'
		)
	) );

        //descripción paginaaaaaa

    $MyAgency_team_content->add_field( array(
		'name' => esc_html__( 'Description Page', 'cmb2' ),
		'desc' => esc_html__( 'field description', 'cmb2' ),
		'id'   => $prefix . 'description_title_team',
		'type' => 'textarea_small',
	) );

	// $group_field_id is the field id string, so in this case: 'yourprefix_group_demo'
	$group_field_id_about = $MyAgency_team_content->add_field( array(
		'id'          => $prefix . 'team',
		'type'        => 'group',
		'description' => esc_html__( 'GAdd option if need it', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Group {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Add Another Group', 'cmb2' ),
			'remove_button'  => esc_html__( 'Remove Group', 'cmb2' ),
			'sortable'       => true,
			'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

	$MyAgency_team_content->add_group_field( $group_field_id_about, array(
		'name'       => esc_html__( 'Entry Title', 'cmb2' ),
		'id'         => 'title_team',
		'type'       => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$MyAgency_team_content->add_group_field( $group_field_id_about, array(
		'name'        => esc_html__( 'Description', 'cmb2' ),
		'description' => esc_html__( 'Write a short description for this entry', 'cmb2' ),
		'id'          => 'description_team',
		'type'        => 'textarea_small',
	) );

	$MyAgency_team_content->add_group_field( $group_field_id_about, array(
		'name' => esc_html__( 'Entry Image', 'cmb2' ),
		'id'   => 'icon_team',
		'type' => 'file',
	) );
}



/**************** PORTFOLIO **********************/

add_action( 'cmb2_admin_init', 'MyAgency_portfolio' );
/**
 * Hook in and add a metabox that only appears on the 'Contactt' page
 */
function MyAgency_portfolio() {
    $prefix = "MyAgency_portfolio_";

    // $id_portfolio = get_option('page_on_front');
	/**
	 * Metabox to be displayed on a single page ID
	 */
	$MyAgency_portfolio_content = new_cmb2_box( array(
		'id'           => $prefix . 'portfolio',
		'title'        => esc_html__( 'Portfolio fields', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true,
        'show_on'		=> array(
			'key'	=> 'page-template',
			'value'   => 'page-portfolio.php'
		) // Show field names on the left
		// 'show_on'      => array(
		// 	'id' => array($id_portfolio),
		// ), // Specific post IDs to display this metabox
	) );

    // FIELDS

    $MyAgency_portfolio_content->add_field( array(
		'name'    => esc_html__( 'Title Text', 'cmb2' ),
		'desc'    => esc_html__( 'Main title page portfolio', 'cmb2' ),
		'id'      => $prefix . 'main_title_portfolio',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 1,
		),
	) );

    $MyAgency_portfolio_content->add_field( array(
		'name'    => esc_html__( 'Description Text', 'cmb2' ),
		'desc'    => esc_html__( 'Main Title page, Hero section', 'cmb2' ),
		'id'      => $prefix . 'description_title_portfolio',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );

	$MyAgency_portfolio_content->add_field( array(
		'name'         => esc_html__( 'Imágenes', 'cmb2' ),
		'desc'         => esc_html__( 'Add images', 'cmb2' ),
		'id'           => $prefix . 'image_portfolio',
		'type'         => 'file_list',
		'preview_size' => array( 100, 300 ), // Default: array( 50, 50 )
	) );
}




/**************** CONTACT **********************/

add_action( 'cmb2_admin_init', 'MyAgency_contact' );
/**
 * Hook in and add a metabox that only appears on the 'Contactt' page
 */
function MyAgency_contact() {
    $prefix = "MyAgency_contact_";

    // $id_contact = get_option('page_on_front');
	/**
	 * Metabox to be displayed on a single page ID
	 */
	$MyAgency_contact_content = new_cmb2_box( array(
		'id'           => $prefix . 'contact',
		'title'        => esc_html__( 'Contact fields', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true,
        'show_on'		=> array(
			'key'	=> 'page-template',
			'value'   => 'page-contact.php'
		) // Show field names on the left
		// 'show_on'      => array(
		// 	'id' => array($id_contact),
		// ), // Specific post IDs to display this metabox
	) );

    // FIELDS
    // imagennnn
    $MyAgency_contact_content->add_field( array(
		'name' => esc_html__( 'Image Contact', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'image_contact', //image
		'type' => 'file',
	) );

    $MyAgency_contact_content->add_field( array(
		'name'    => esc_html__( 'Title Text', 'cmb2' ),
		'desc'    => esc_html__( 'Main title page contact', 'cmb2' ),
		'id'      => $prefix . 'main_title_contact',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 1,
		),
	) );

    $MyAgency_contact_content->add_field( array(
		'name'    => esc_html__( 'Description Text', 'cmb2' ),
		'desc'    => esc_html__( 'Main Title page, Hero section', 'cmb2' ),
		'id'      => $prefix . 'description_title_contact',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );
}


/**************** CLASSES **********************/

add_action( 'cmb2_admin_init', 'MyAgency_classes' );
/**
 * Hook in and add a metabox that only appears on the 'Contactt' page
 */
function MyAgency_classes() {
    $prefix = "MyAgency_classes_";

    // $id_classes = get_option('page_on_front');
	/**
	 * Metabox to be displayed on a single page ID
	 */
	$MyAgency_classes_content = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => esc_html__( 'subtitle fields', 'cmb2' ),
		'object_types' => array( 'myclasses_clases' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true,

		// Show field names on the left
		// 'show_on'      => array(
		// 	'id' => array($id_contact),
		// ), // Specific post IDs to display this metabox
	) );

	$MyAgency_classes_content->add_field( array(
		'name' => esc_html__( 'Subtitle', 'cmb2' ),
		'desc' => esc_html__( 'Subtitle Class', 'cmb2' ),
		'id'   => $prefix . 'subtitle_class',
		'type' => 'text',
	) );
	
		//horas y dias
	$MyAgency_classes_content->add_field( array(
		'name' => esc_html__( 'Days', 'cmb2' ),
		'desc' => esc_html__( 'Days fo classes, Ex: weekdays or Only Saturdays...', 'cmb2' ),
		'id'   => $prefix . 'day_class',
		'type' => 'text',
	) );

	$MyAgency_classes_content->add_field( array(
		'name' => esc_html__( 'Date Picker', 'cmb2' ),
		'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'   => $prefix . 'textdate_class',
		'type' => 'text_date',
		// 'date_format' => 'Y-m-d',
		'column' => true //display in the Dashboard
	) );

	$MyAgency_classes_content->add_field( array(
		'name' => esc_html__( 'Class start time', 'cmb2' ),
		'desc' => esc_html__( 'Add Class start time (optional)', 'cmb2' ),
		'id'   => $prefix . 'time_class_start',
		'type' => 'text_time',
		'time_format' => 'H:i', // Set to 24hr format
	) );

	$MyAgency_classes_content->add_field( array(
		'name' => esc_html__( 'Class end time', 'cmb2' ),
		'desc' => esc_html__( 'Add Class end time (optional)', 'cmb2' ),
		'id'   => $prefix . 'time_class_end',
		'type' => 'text_time',
		'time_format' => 'H:i', // Set to 24hr format
	) );

	$MyAgency_classes_content->add_field( array(
		'name' => esc_html__( 'more info', 'cmb2' ),
		'desc' => esc_html__( 'Add more info', 'cmb2' ),
		'id'   => $prefix . 'block_class',
		'type' => 'title',
	) );

	$MyAgency_classes_content->add_field( array(
		'name' => esc_html__( 'Price', 'cmb2' ),
		'desc' => esc_html__( 'Add rpices', 'cmb2' ),
		'id'   => $prefix . 'price_class',
		'type' => 'text_money',
		'before_field' => '$',
	) );

	$MyAgency_classes_content->add_field( array(
		'name' => esc_html__( 'Quota', 'cmb2' ),
		'desc' => esc_html__( 'Add Quota', 'cmb2' ),
		'id'   => $prefix . 'quota_class',
		'type' => 'text',
	) );

	$MyAgency_classes_content->add_field( array(
		'name' => esc_html__( 'Include', 'cmb2' ),
		'desc' => esc_html__( 'Add Include', 'cmb2' ),
		'id'   => $prefix . 'include_class',
		'type' => 'text',
		'repeatable' => true
	) );

	$MyAgency_classes_content->add_field( array(
		'name' => esc_html__( 'Instructor', 'cmb2' ),
		'desc' => esc_html__( 'Add Instructor', 'cmb2' ),
		'id'   => $prefix . 'Instructor_class',
		'limit' => 10,
		'type' => 'post_search_ajax',
		'query_args'	=> array(
			'post_type'			=> array( 'Instructors' ), //instructor post type
			'post_status'		=> array( 'publish' ),
			'posts_per_page'	=> -1
		)
	) );

}


/**************** INSTRUCTORS **********************/

add_action( 'cmb2_admin_init', 'MyAgency_instructors' );
/**
 * Hook in and add a metabox that only appears on the 'Contactt' page
 */
function MyAgency_instructors() {
    $prefix = "MyAgency_instructors_";

    // $id_instructors = get_option('page_on_front');
	/**
	 * Metabox to be displayed on a single page ID
	 */
	$MyAgency_instructors_content = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => esc_html__( 'Instructor info', 'cmb2' ),
		'object_types' => array( 'Instructors' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true,
		
		// Show field names on the left
		// 'show_on'      => array(
		// 	'id' => array($id_contact),
		// ), // Specific post IDs to display this metabox
	) );

	$MyAgency_instructors_content->add_field( array(
		'name' => esc_html__( 'Email address', 'cmb2' ),
		'desc' => esc_html__( 'Add email address', 'cmb2' ),
		'id'   => $prefix . 'instructor_email',
		'type' => 'text_email',
	) );

	$MyAgency_instructors_content->add_field( array(
		'name'    => esc_html__( 'Review', 'cmb2' ),
		'desc'    => esc_html__( 'Add Review', 'cmb2' ),
		'id'      => $prefix . 'review_instructor',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 1,
		),
	) );


	$MyAgency_instructors_content->add_field( array(
		'name' => esc_html__( 'Class', 'cmb2' ),
		'desc' => esc_html__( 'Add Class', 'cmb2' ),
		'id'   => $prefix . 'instructor_class',
		'limit' => 10,
		'type' => 'post_search_ajax',
		'query_args'	=> array(
			'post_type'			=> array( 'myclasses_clases' ), //class post type
			'post_status'		=> array( 'publish' ),
			'posts_per_page'	=> -1
		)
	) );

}


?>
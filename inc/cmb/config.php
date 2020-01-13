<?php 
add_action( 'cmb2_init', 'cmb2_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_metaboxes() {
	
	/**
	 * Initiate the metabox for (terms oage)
	 */
	$cmb_banner = new_cmb2_box( array(
    'id'           => 'home_page',
  	'title'        => 'Banner section',
  	'object_types' => array( 'page' ), // post type
  	'show_on'      => array( 'key' => 'page-template', 'value' => 'homepage.php' ),
  	'context'      => 'normal', //  'normal', 'advanced', or 'side'
  	'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
  	'show_names'   => true, // Show field names on the left
	) );

	// Regular text field
	$cmb_banner ->add_field( array(
		'name'       => 'Title text',
		'desc'       => 'Type here',
		'id'         => 'banner_title',
		'type'       => 'text',
	) );
	
	$cmb_banner ->add_field( array(
		'name'       => 'Description text',
		'desc'       => 'Type here',
		'id'         => 'banner_desc',
		'type'       => 'textarea',
	) );
	
	$cmb_banner ->add_field( array(
		'name'       => 'Background image',
		'desc'       => 'upload here',
		'id'         => 'banner_bg',
		'type'       => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Add Background Image' // Change upload button text. Default: "Add or Upload File"
		),
	) );
	
	/**
	 * Initiate the metabox
	 */
	$cmb_parallax = new_cmb2_box( array(
    'id'           => 'parallax_banner',
  	'title'        => 'parallax image',
  	'object_types' => array( 'page' ), // post type
  	'show_on'      => array( 'key' => 'page-template', 'value' => 'homepage.php' ),
  	'context'      => 'normal', //  'normal', 'advanced', or 'side'
  	'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
  	'show_names'   => true, // Show field names on the left
	) );

	
	
	// Regular text field
	$cmb_parallax ->add_field( array(
		'name'       => 'parallax Background Image',
		'desc'       => 'upload here',
		'id'         => 'parallax_bg',
		'type'       => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Add Background Image' // Change upload button text. Default: "Add or Upload File"
		),
	) );
	
	// Regular text field
	$cmb_parallax ->add_field( array(
		'name'       => 'parallax Background Image for Tabs (768px screen)',
		'desc'       => 'upload here',
		'id'         => 'parallax_bg_tab',
		'type'       => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Add Background Image' // Change upload button text. Default: "Add or Upload File"
		),
	) );
	
	// Regular text field
	$cmb_parallax ->add_field( array(
		'name'       => 'parallax Background Image for Mobile (575px screen)',
		'desc'       => 'upload here',
		'id'         => 'parallax_bg_mobile',
		'type'       => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Add Background Image' // Change upload button text. Default: "Add or Upload File"
		),
	) );
	
	/**
	 * Initiate the metabox
	 */
	$cmb_technology = new_cmb2_box( array(
	    'id'           => 'technology',
	  	'title'        => 'Technology Top Section',
	  	'object_types' => array( 'page' ), // post type
	  	'show_on'      => array( 'key' => 'page-template', 'value' => 'homepage.php' ),
	  	'context'      => 'normal', //  'normal', 'advanced', or 'side'
	  	'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
	  	'show_names'   => true, // Show field names on the left
	) );

	// Regular text field
	
	// Regular text field
	$cmb_technology ->add_field( array(
		'name'       => 'Section Title',
		'desc'       => 'type here',
		'id'         => 'top_tech_title',
		'type'       => 'text',
	) );
	
	// Regular text field
	$cmb_technology ->add_field( array(
		'name'       => 'Section Description',
		'desc'       => 'type here',
		'id'         => 'top_tech_desc',
		'type'       => 'textarea',
	) );
	
	// Regular text field
	$cmb_technology ->add_field( array(
		'name'       => 'Background Image',
		'desc'       => 'upload here',
		'id'         => 'top_tech_bg',
		'type'       => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Upload Background Image' // Change upload button text. Default: "Add or Upload File"
		),
	) );
	
	$cmb_technology_id = $cmb_technology->add_field( array(
		'id'          => 'tech_icon_content',
		'type'        => 'group',
		'options'     => array(
		'add_button'        => ( 'Add' ),
		'remove_button'     => ( 'Remove' ),
		'sortable'          => true,
		),
	) );
	
	// Id's for group's fields only need to be unique for the group. Prefix is not needed.
	$cmb_technology->add_group_field( $cmb_technology_id, array(
		'name' => 'Icon',
		'id'   => 'tech_icon',
		'type' => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Upload icon' // Change upload button text. Default: "Add or Upload File"
		),
	// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );
	
	// Id's for group's fields only need to be unique for the group. Prefix is not needed.
	$cmb_technology->add_group_field( $cmb_technology_id, array(
		'name' => 'Icon Content',
		'id'   => 'icon_content',
		'type' => 'textarea',
	// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );
	
	// Regular text field
	$cmb_technology ->add_field( array(
		'name'       => 'Section Bottom content',
		'desc'       => 'type here',
		'id'         => 'top_tech_bottom_content',
		'type'       => 'textarea',
	) );
	
	/**
	 * Initiate the metabox
	 */
	$cmb_bottom_technology = new_cmb2_box( array(
	    'id'           => 'technology_bottom',
	  	'title'        => 'Technology Bottom Section',
	  	'object_types' => array( 'page' ), // post type
	  	'show_on'      => array( 'key' => 'page-template', 'value' => 'homepage.php' ),
	  	'context'      => 'normal', //  'normal', 'advanced', or 'side'
	  	'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
	  	'show_names'   => true, // Show field names on the left
	) );

	// Regular text field
	
	// Regular text field
	$cmb_bottom_technology ->add_field( array(
		'name'       => 'Section Title',
		'desc'       => 'type here',
		'id'         => 'bottom_tech_title',
		'type'       => 'text',
	) );
	
	// Regular text field
	$cmb_bottom_technology ->add_field( array(
		'name'       => 'Section Description',
		'desc'       => 'type here',
		'id'         => 'bottom_tech_desc',
		'type'       => 'textarea',
	) );
	
	$cmb_bottom_technology ->add_field( array(
		'name'       => 'Background Image',
		'desc'       => 'upload here',
		'id'         => 'bottom_tech_bg',
		'type'       => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Upload Background Image' // Change upload button text. Default: "Add or Upload File"
		),
	) );
	
	/**
	 * Initiate the metabox
	 */
	$cmb_insights = new_cmb2_box( array(
	    'id'           => 'insights',
	  	'title'        => 'Insights Section',
	  	'object_types' => array( 'page' ), // post type
	  	'show_on'      => array( 'key' => 'page-template', 'value' => 'homepage.php' ),
	  	'context'      => 'normal', //  'normal', 'advanced', or 'side'
	  	'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
	  	'show_names'   => true, // Show field names on the left
	) );

	// Regular text field
	
	// Regular text field
	$cmb_insights ->add_field( array(
		'name'       => 'Title',
		'desc'       => 'type here',
		'id'         => 'insights_title',
		'type'       => 'text',
	) );
	
	// Regular text field
	$cmb_insights ->add_field( array(
		'name'       => 'Description',
		'desc'       => 'type here',
		'id'         => 'insights_desc',
		'type'       => 'textarea',
	) );
	
	// Regular text field
	$cmb_insights ->add_field( array(
		'name'       => 'Pink text',
		'desc'       => 'type here',
		'id'         => 'insights_pink',
		'type'       => 'text',
	) );
	
	$cmb_insights ->add_field( array(
		'name'       => 'Parallax Image (for Desktop)',
		'desc'       => 'upload here',
		'id'         => 'insights_parallax',
		'type'       => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Upload parallax Image' // Change upload button text. Default: "Add or Upload File"
		),
	) );
	
	$cmb_insights ->add_field( array(
		'name'       => 'Parallax Image for Tab (768px screen)',
		'desc'       => 'upload here',
		'id'         => 'insights_parallax_tab',
		'type'       => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Upload parallax Image' // Change upload button text. Default: "Add or Upload File"
		),
	) );
	
	$cmb_insights ->add_field( array(
		'name'       => 'Parallax Image for Mobile (575px screen)',
		'desc'       => 'upload here',
		'id'         => 'insights_parallax_mobile',
		'type'       => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Upload parallax Image' // Change upload button text. Default: "Add or Upload File"
		),
	) );
	
	/**
	 * Initiate the metabox
	 */
	$cmb_vision = new_cmb2_box( array(
		'id'           => 'vision',
		'title'        => 'Vision Section',
		'object_types' => array( 'page' ), // post type
		'show_on'      => array( 'key' => 'page-template', 'value' => 'homepage.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );

	
	// Regular text field
	$cmb_vision ->add_field( array(
		'name'       => 'Title',
		'desc'       => 'type here',
		'id'         => 'vision_title',
		'type'       => 'text',
	) );
	
	// Regular text field
	$cmb_vision ->add_field( array(
		'name'       => 'Description',
		'desc'       => 'type here',
		'id'         => 'vision_desc',
		'type'       => 'textarea',
	) );

	
	$cmb_vision ->add_field( array(
		'name'       => 'Background Image',
		'desc'       => 'upload here',
		'id'         => 'vision_parallax',
		'type'       => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Upload Background Image' // Change upload button text. Default: "Add or Upload File"
		),
	) );
	
	/**
	 * Initiate the metabox
	 */
	$cmb_another_parallax = new_cmb2_box( array(
		'id'           => 'parallax_2nd',
		'title'        => 'Parallax Image',
		'object_types' => array( 'page' ), // post type
		'show_on'      => array( 'key' => 'page-template', 'value' => 'homepage.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );

	
	// Regular text field
	$cmb_another_parallax ->add_field( array(
		'name'       => 'Parallax Image (for Desktop)',
		'desc'       => 'upload here',
		'id'         => 'another_parallax',
		'type'       => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Upload Parallax Image' // Change upload button text. Default: "Add or Upload File"
		),
	) );
	
	// Regular text field
	$cmb_another_parallax ->add_field( array(
		'name'       => 'Parallax Image for Tab (768 px screen))',
		'desc'       => 'upload here',
		'id'         => 'another_parallax_tab',
		'type'       => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Upload Parallax Image' // Change upload button text. Default: "Add or Upload File"
		),
	) );
	
	// Regular text field
	$cmb_another_parallax ->add_field( array(
		'name'       => 'Parallax Image for Mobile (575 px screen))',
		'desc'       => 'upload here',
		'id'         => 'another_parallax_mobile',
		'type'       => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Upload Parallax Image' // Change upload button text. Default: "Add or Upload File"
		),
	) );
	
	/**
	 * Initiate the metabox
	 */
	$cmb_news = new_cmb2_box( array(
		'id'           => 'homepage_news',
		'title'        => 'News Carousel Section',
		'object_types' => array( 'page' ), // post type
		'show_on'      => array( 'key' => 'page-template', 'value' => 'homepage.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	
	
	// Regular text field
	
	// Regular text field
	$cmb_news ->add_field( array(
		'name'       => 'Title',
		'desc'       => 'type here',
		'id'         => 'news_title',
		'type'       => 'text',
	) ); 
	
	$cmb_news ->add_field( array(
		'name'       => 'Background Image',
		'desc'       => 'upload here',
		'id'         => 'news_bg',
		'type'       => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Upload Background Image' // Change upload button text. Default: "Add or Upload File"
		),
	) );

	$truvia_about = new_cmb2_box( array(
		'id'           => 'truvia_about',
		'title'        => 'About Us Section',
		'object_types' => array( 'page' ), // post type
		'show_on'      => array( 'key' => 'page-template', 'value' => 'homepage.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );

	
	// Regular text field
	$truvia_about ->add_field( array(
		'name'       => 'Title',
		'desc'       => 'type here',
		'id'         => 'truvia_about_title',
		'type'       => 'text',
	) );
	
	// Regular text field
	$truvia_about ->add_field( array(
		'name'       => 'Description',
		'desc'       => 'type here',
		'id'         => 'truvia_about_desc',
		'type'       => 'textarea',
	) );
	
	// Regular text field
	$truvia_about ->add_field( array(
		'name'       => 'Executive Section Header',
		'desc'       => 'type here',
		'id'         => 'truvia_executive_header',
		'type'       => 'text',
	) );
	
	// Regular text field
	$truvia_about ->add_field( array(
		'name'       => 'Directors Section Header',
		'desc'       => 'type here',
		'id'         => 'truvia_director_header',
		'type'       => 'text',
	) );
	
	$truvia_executive = new_cmb2_box( array(
		'id'           => 'truvia_executive',
		'title'        => 'Truvia Evecutive',
		'object_types' => array('executive' ), // post type
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );

	
	// Regular text field
	$truvia_executive ->add_field( array(
		'name'       => 'Name',
		'desc'       => 'type here',
		'id'         => 'truvia_executive_name',
		'type'       => 'text',
	) );
	
	// Regular text field
	$truvia_executive ->add_field( array(
		'name'       => 'Designation',
		'desc'       => 'type here',
		'id'         => 'truvia_executive_designation',
		'type'       => 'text',
	) );
	
	// Regular text field
	$truvia_executive ->add_field( array(
		'name'       => 'Linkedin Url',
		'desc'       => 'paste here',
		'id'         => 'truvia_executive_link_url',
		'type' 		 => 'text_url',
	) );
	
	//truvia directors 
	
	$truvia_directors = new_cmb2_box( array(
		'id'           => 'truvia_directors',
		'title'        => 'Truvia Director',
		'object_types' => array('directors' ), // post type
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );

	
	// Regular text field
	$truvia_directors ->add_field( array(
		'name'       => 'Name',
		'desc'       => 'type here',
		'id'         => 'truvia_director_name',
		'type'       => 'text',
	) );

	
	/**
	 * Initiate the metabox
	 */
	$cmb_career = new_cmb2_box( array(
		'id'           => 'career',
		'title'        => 'Career Section',
		'object_types' => array( 'page' ), // post type
		'show_on'      => array( 'key' => 'page-template', 'value' => 'homepage.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );

	
	// Regular text field
	$cmb_career ->add_field( array(
		'name'       => 'Description',
		'desc'       => 'type here',
		'id'         => 'career_desc',
		'type'       => 'textarea',
	) ); 
	
	$cmb_career ->add_field( array(
		'name'       => 'Background Image',
		'desc'       => 'upload here',
		'id'         => 'career_bg',
		'type'       => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Upload Background Image' // Change upload button text. Default: "Add or Upload File"
		),
	) );
	
	// Regular text field
	$cmb_career ->add_field( array(
		'name'       => 'Button link',
		'desc'       => 'paste here',
		'id'         => 'career_btn_link',
		'type' 		 => 'text_url',
	) ); 
	
	// Regular text field
	$cmb_career ->add_field( array(
		'name'       => 'Button Text',
		'desc'       => 'type here',
		'id'         => 'career_btn_text',
		'type' 		 => 'text',
	) ); 
	
	/**
	 * Initiate the metabox
	 */
	$cmb_career = new_cmb2_box( array(
		'id'           => 'culture',
		'title'        => 'Culture Section',
		'object_types' => array( 'page' ), // post type
		'show_on'      => array( 'key' => 'page-template', 'value' => 'homepage.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );

	
	// Regular text field
	$cmb_career ->add_field( array(
		'name'       => 'Culture Images',
		'desc'       => 'upload here',
		'id'         => 'culture_img',
		'type' => 'file_list',
	) ); 
	

	
	//truvia directors 
	
	$truvia_posts = new_cmb2_box( array(
		'id'           => 'truvia_posts',
		'title'        => 'Truvia Post Url',
		'object_types' => array( 'post' ), // post type
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	
			// Regular text field
	$truvia_posts ->add_field( array(
		'name'       => 'Post Url',
		'desc'       => 'paste here',
		'id'         => 'truvia_post_url',
		'type' 		 => 'text_url',
	) );
}	
	
?>
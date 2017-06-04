<?php

/**
 * Element Controls : Post Carousel
 */

return array(

	// Post Type

	'post_type' => array(
		'type' => 'select',
		'ui'   => array(
			'title' => __( 'Post Type', 'essential-addons-cs' ),
      'tooltip' => __( 'Choose between standard posts or portfolio posts.', 'essential-addons-cs' ),
		),
		'options' => array(
			'choices' => array(
        array( 'value' => 'post',        'label' => __( 'Post', 'essential-addons-cs' ) ),
        array( 'value' => 'portfolio',    'label' => __( 'Portfolio', 'essential-addons-cs' ) )
      ),
		),
	),

	// Post Count

	'max_post_count' => array(
		'type'    => 'number',
		'ui' => array(
			'title'   => __( 'Post Count', 'essential-addons-cs' ),
			'tooltip' => __( 'Set how many post you want to display.', 'essential-addons-cs' ),
		),
    'suggest' => __( '4', 'essential-addons-cs' ),
	),

	// Show Excerpt

	'show_excerpt' => array(
		'type'    => 'toggle',
		'ui' => array(
			'title'   => __( 'Show Excerpt?', 'essential-addons-cs' ),
			'tooltip' => __( 'Show or hide excerpt', 'essential-addons-cs' ),
		)
	),

	// Hide Featured Image

	'hide_featured_image' => array(
		'type'    => 'toggle',
		'ui' => array(
			'title'   => __( 'Hide Featured Image', 'essential-addons-cs' ),
			'tooltip' => __( 'Hide or Show featured image', 'essential-addons-cs' ),
		)
	),


	// Offset

	'offset' => array(
	'type' => 'text',
	'ui' => array(
	  'title' => __( 'Offset', 'essential-addons-cs' ),
	  'tooltip' => __( 'Enter a number to offset initial starting post of your Recent Posts.', 'essential-addons-cs' )
	),
	'context' => 'offset',
	'suggest' => ''
	),

	// Category

	'category' => array(
	'type' => 'text',
	'ui' => array(
	  'title' => __( 'Category', 'essential-addons-cs' ),
	  'tooltip' => __( 'To filter your posts by category, enter in the slug of your desired category. To filter by multiple categories, enter in your slugs separated by a comma.', 'essential-addons-cs' )
	),
	'context' => 'category',
	'suggest' => ''
	),

	// Max Items

	'max_visible_items' => array(
		'type'    => 'number',
		'ui' => array(
			'title'   => __( 'Max visible items', 'essential-addons-cs' ),
			'tooltip' => __( 'Carousel will automatically show less items to fit smaller screens. Limit the max amount here.', 'essential-addons-cs' ),
		),
    'suggest' => __( '3', 'essential-addons-cs' ),
	),

	// Slide to scroll

	'slide_to_scroll' => array(
		'type'    => 'number',
		'ui' => array(
			'title'   => __( 'Slide to scroll', 'essential-addons-cs' ),
			'tooltip' => __( 'Set how many items will slide at a time', 'essential-addons-cs' ),
		),
    'suggest' => __( '3', 'essential-addons-cs' ),
	),
	
	// Max Items for Tablet

	'max_visible_items_tablet' => array(
		'type'    => 'number',
		'ui' => array(
			'title'   => __( 'Max visible items for Tablet', 'essential-addons-cs' ),
			'tooltip' => __( 'Carousel will automatically show less items to fit smaller screens. Limit the max amount here.', 'essential-addons-cs' ),
		),
    'suggest' => __( '2', 'essential-addons-cs' ),
	),

	// Max Items for Mobile

	'max_visible_items_mobile' => array(
		'type'    => 'number',
		'ui' => array(
			'title'   => __( 'Max visible items for Mobile', 'essential-addons-cs' ),
			'tooltip' => __( 'Carousel will automatically show less items to fit smaller screens. Limit the max amount here.', 'essential-addons-cs' ),
		),
    'suggest' => __( '1', 'essential-addons-cs' ),
	),



	// Auto Play

	'auto_play' => array(
		'type'    => 'toggle',
		'ui' => array(
			'title'   => __( 'Auto Play', 'essential-addons-cs' ),
			'tooltip' => __( 'Will automatically play the carousel', 'essential-addons-cs' ),
		)
	),

	// Loop (instead of rewind)

	'loop' => array(
		'type'    => 'toggle',
		'ui' => array(
			'title'   => __( 'Loop', 'essential-addons-cs' ),
			'tooltip' => __( 'Instead of rewinding at the end, simulate eternal looping.', 'essential-addons-cs' ),
		)
	),

	// Pause on Hover

	'pause_hover' => array(
		'type'    => 'toggle',
		'ui' => array(
			'title'   => __( 'Pause on Hover?', 'essential-addons-cs' ),
			'tooltip' => __( 'Will pause the carousel when the user hovers their mouse over it.', 'essential-addons-cs' ),
		)
	),

	// Draggable

	'draggable' => array(
		'type'    => 'toggle',
		'ui' => array(
			'title'   => __( 'Draggable?', 'essential-addons-cs' ),
			'tooltip' => __( 'Carousel items will be draggable by mouse', 'essential-addons-cs' ),
		)
	),

	// Pagination Type

	'pagination_type' => array(
		'type' => 'select',
		'ui'   => array(
			'title' => __( 'Navigation & Pagination', 'essential-addons-cs' ),
      'tooltip' => __( 'Select the pagination style.', 'essential-addons-cs' ),
		),
		'options' => array(
			'choices' => array(
        array( 'value' => 'none',        'label' => __( 'None', 'essential-addons-cs' ) ),
        array( 'value' => 'dots',        'label' => __( 'Dots Only', 'essential-addons-cs' ) ),
        array( 'value' => 'prev_next',   'label' => __( 'Prev/Next Only', 'essential-addons-cs' ) ),
        array( 'value' => 'dots_nav',    'label' => __( 'Dots and Prev/Next', 'essential-addons-cs' ) )
      ),
		),
	),

	// Pagination Position

	'pagination_position' => array(
		'type' => 'select',
		'ui'   => array(
			'title' => __( 'Navigation Position', 'essential-addons-cs' ),
      'tooltip' => __( 'Select the navigation poisition', 'essential-addons-cs' ),
		),
		'options' => array(
			'choices' => array(
        array( 'value' => 'normal',          'label' => __( 'Normal', 'essential-addons-cs' ) ),
        array( 'value' => 'nav_top_left',  'label' => __( 'Navigation Top Left', 'essential-addons-cs' ) ),
        array( 'value' => 'nav_top_right', 'label' => __( 'Navigation Top Right', 'essential-addons-cs' ) ),
      ),
		),
	),

	// Add spacing

	'slide_spacing' => array(
	 	'type' => 'dimensions',
	 	'ui' => array(
			'title'   => __( 'Spacing between slides',  'essential-addons-cs' ),
			'tooltip' => __( 'Select spacing between the slide items.', 'essential-addons-cs' ),
		)
	),

	// Navigation Color


	'slide_nav_color' => array(
	    'type' => 'color',
	    'ui' => array(
	        'title'   => __( 'Navigation Color (Arrows &amp; Bullets)', 'essential-addons-cs' ),
	        'tooltip' => __( 'Set color for arrows and bullets', 'essential-addons-cs' ),
	    )
	),

	// Navigation Background Color


	'slide_nav_bg_color' => array(
	    'type' => 'color',
	    'ui' => array(
	        'title'   => __( 'Navigation Background Color', 'essential-addons-cs' ),
	        'tooltip' => __( 'Set background color for arrows', 'essential-addons-cs' ),
	    )

	),

	// Add border

	'add_border' => array(
		'type'    => 'toggle',
		'ui' => array(
			'title'   => __( 'Add border to items?', 'essential-addons-cs' ),
			'tooltip' => __( 'Add border to each item', 'essential-addons-cs' ),
		)
	),

	// Border width

	'post_border_width' => array(
		'type'    => 'number',
		'ui' => array(
			'title'   => __( 'Border width', 'essential-addons-cs' ),
			'tooltip' => __( 'Set border width in pixel value', 'essential-addons-cs' ),
		),
    'suggest' => __( '1', 'essential-addons-cs' ),

		'condition' => array(
      'add_border' => true
    )
	),

	// Border Color

	'post_border_color' => array(
	    'type' => 'color',
	    'ui' => array(
	        'title'   => __( 'Border Color', 'essential-addons-cs' ),
	        'tooltip' => __( 'Set border color', 'essential-addons-cs' ),
	    ),

		'condition' => array(
      'add_border' => true
    )

	),

	//
	// Visibility
	//

	'visibility' => array(
		'type' => 'multi-choose',
		'ui' => array(
			'title' => __( 'Hide based on screen width', 'essential-addons-cs' ),
			'toolip' => __( 'Hide this element at different screen widths. Keep in mind that the &ldquo;Extra Large&rdquo; toggle is 1200px+, so you may not see your element disappear if your preview window is not large enough.', 'cornerstone' )
		),
		'options' => array(
			'columns' => '5',
			'choices' => array(
				array( 'value' => 'xl', 'icon' => fa_entity( 'desktop' ), 'tooltip' => __( 'XL', 'essential-addons-cs' ) ),
				array( 'value' => 'lg', 'icon' => fa_entity( 'laptop' ),  'tooltip' => __( 'LG', 'essential-addons-cs' ) ),
				array( 'value' => 'md', 'icon' => fa_entity( 'tablet' ),  'tooltip' => __( 'MD', 'essential-addons-cs' ) ),
				array( 'value' => 'sm', 'icon' => fa_entity( 'tablet' ),  'tooltip' => __( 'SM', 'essential-addons-cs' ) ),
				array( 'value' => 'xs', 'icon' => fa_entity( 'mobile' ),  'tooltip' => __( 'XS', 'essential-addons-cs' ) ),
			)
		)
	)

);
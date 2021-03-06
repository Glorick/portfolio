<?php

// Setup
require get_template_directory() . '/lib/setup.php';

// Enqueue-scripts
require get_template_directory() . '/lib/enqueue-scripts.php';

// Filters and hooks
require get_template_directory() . '/lib/filters.php';

// Widgets
require get_template_directory() . '/lib/widgets.php';

// Nav walker
require get_template_directory() . '/lib/nav-walker.php';

// templates Tags
require get_template_directory() . '/lib/template-tags.php';

update_option( 'siteurl', 'http://localhost/portfolio' );
update_option( 'home', 'http://localhost/portfolio' );

//update_option( 'siteurl', 'https://muffatto-anthony.fr' );
//update_option( 'home', 'https://muffatto-anthony.fr' );

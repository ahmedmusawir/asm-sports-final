<?php

/**
 *
 * THIS IS THE LINK FOR ALL REACT APPS WHILE IN DEV
 *
 */
// wp_enqueue_script( 'cyberize-react-todo-app', 'http://localhost:8080/bundle.js', array(), '20151215', true );


function moose_react_setup() {
  if ( is_page_template( 'template-react1.php' ) ) {
  	//CYBERIZE FRAMEWORK 1.0 JAVASCRIPTS UNIFIED AND MINIFIED
	wp_enqueue_script( 'cyberize-react-script-1', get_template_directory_uri() . '/assets/dist/js/react-script-1.min.js', array(), '20151215', true );

  } else if ( is_page_template( 'template-react-todo-app.php' ) )  {
    //CYBERIZE FRAMEWORK 1.0 JAVASCRIPTS UNIFIED AND MINIFIED
  wp_enqueue_script( 'cyberize-react-todo-app',  get_template_directory_uri() . '/assets/react-apps/todo-wp-react/public/bundle.js', array(), '111', true );

  } else if ( is_page_template( 'template-react-youtube-app.php' ) )  {
    //CYBERIZE FRAMEWORK 1.0 JAVASCRIPTS UNIFIED AND MINIFIED
  wp_enqueue_script( 'cyberize-react-routing-app',  get_template_directory_uri() . '/assets/react-apps/youtube-wp-react/public/bundle.js', array(), '222', true );

  } else if ( is_page_template( 'template-react-routing-app.php' ) )  {
    //CYBERIZE FRAMEWORK 1.0 JAVASCRIPTS UNIFIED AND MINIFIED
  wp_enqueue_script( 'cyberize-react-routing-app',  get_template_directory_uri() . '/assets/react-apps/routing-wp-react/public/bundle.js', array(), '333', true );

  } else if ( is_page_template( 'template-react-redux-app.php' ) )  {
    //CYBERIZE FRAMEWORK 1.0 JAVASCRIPTS UNIFIED AND MINIFIED
  wp_enqueue_script( 'cyberize-react-redux-app',  get_template_directory_uri() . '/assets/react-apps/redux-wp-react/public/bundle.js', array(), '444', true );

  }
}
add_action( 'wp_enqueue_scripts', 'moose_react_setup' );


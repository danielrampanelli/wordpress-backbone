<?php

add_action('after_setup_theme', function() {
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    
    // TODO add image sizes
    
    // TODO register navigation menus
});

?>
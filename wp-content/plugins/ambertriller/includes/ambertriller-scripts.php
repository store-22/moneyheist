<?php
    // add scripts
    function as_add_scripts(){
        //Add Main Css
           wp_enqueue_style('as_main_style', plugins_url(). '/ambertriller/css/style.css');
        //Add Main Js
           wp_enqueue_script('as_main_script', plugins_url(). '/ambertriller/js/main.js');

        //Add google scripts
        wp_register_script('google', 'https://apis.google.com/js/platform.js');   
        wp_enqueue_script('google');
    }

    add_action('wp_enqueue_scripts', 'as_add_scripts');
?>
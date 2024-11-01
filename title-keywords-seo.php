<?php
/**
* Plugin Name: Title Keywords SEO
* Plugin URI: http://9am.com.br/
* Description: This plugin transforms the title into a shortcode to repeat for all content. add a shortcode [the_title]
* Version: 0.9
* Author: Farid Marconi
* Author URI: https://www.linkedin.com/in/faridmarconi/
**/

function page_title_sc( ){
   return get_the_title();
}
add_shortcode( 'the_title', 'page_title_sc' );
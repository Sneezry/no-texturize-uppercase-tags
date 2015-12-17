<?PHP
/**
* Plugin Name: No Texturize Uppercase Tags
* Description:  WordPress Plugin to Disable auto Smart quote conversion for uppercase default no-texturize tags
* Version: 1.0
* Author:  Zhe Li
* Author URI: https://sneezry.com/
* License: MIT
* License URI: https://opensource.org/licenses/MIT
**/

add_filter( 'no_texturize_tags', 'uppercase_code_tags' );

function uppercase_tag( $tag ) {
    return strtoupper( $tag );
}

function uppercase_code_tags( $tags ) {
    return array_merge($tags, array_map( 'uppercase_tag', $tags ));
}
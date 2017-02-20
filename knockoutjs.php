<?php

/**
 *
 * @link              http://knockoutjs.com/
 * @since             3.4.1
 * @package           KnockoutJS
 *
 * @wordpress-plugin
 * Plugin Name:       Knockout JS
 * Plugin URI:        http://knockoutjs.com/
 * Description:       Integrates knockoutjs into wordpress.
 * Version:           3.4.1
 * Author:            Elio Schmutz
 * Author URI:        www.kultagentur-hauta.ch
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

if ( ! defined( 'WPINC' ) ) {
    die;
}

function knockout_enqueue_script() {
    wp_enqueue_script('knockoutjs', plugins_url( 'js/knockout.js' , __FILE__ ), $ver = '3.4.1');
}

add_action( 'wp_enqueue_scripts', 'knockout_enqueue_script' );

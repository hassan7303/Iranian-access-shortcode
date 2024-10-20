<?php

/**
 * Plugin Name: Iranian Access Shortcode
 * 
 * Description: Create a Iranian Access Shortcode from an input field.
 * 
 * Version: 1.0.0
 * 
 * Author: hassan Ali Askari
 * Author URI: https://t.me/hassan7303
 * Plugin URI: https://github.com/hassan7303
 * 
 * License: MIT
 * License URI: https://opensource.org/licenses/MIT
 * 
 * Email: hassanali7303@gmail.com
 * Domain Path: https://t.me/hassan7303
 */


/**
 * Adds a menu item to the admin panel.
 *
 * @return void
 */
function custom_shortcode_menu(): void
{
    add_menu_page('Iranian Access Shortcode', 'Iranian Access Shortcode', 'manage_options', 'iranian-access-shortcode', 'custom_shortcode_page');
}
add_action('admin_menu', 'custom_shortcode_menu');


/**
 * Displays the settings page content.
 *
 * @return void
 */
function custom_shortcode_page(): void
{
    ?>
    <div class="wrap">
        <h1>Iranian Access Shortcode</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('custom_shortcode_options');
            do_settings_sections('iranian-access-shortcode');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}


/**
 * Registers settings and adds sections and fields to the settings page.
 *
 * @return void
 */
function custom_shortcode_settings(): void
{
    register_setting('custom_shortcode_options', 'custom_shortcode_content');

    add_settings_section('custom_shortcode_section', 'پس از ذخیره از این شورت کد استفاده کنید [custom_html]', null, 'custom_shortcode');

    add_settings_field('custom_shortcode_field', 'شورتکد خود را وارد کنید', 'custom_shortcode_field_callback', 'custom_shortcode', 'custom_shortcode_section');
}
add_action('admin_init', 'custom_shortcode_settings');


/**
 * Callback function to display the input field for the shortcode content.
 *
 * @return void
 */
function custom_shortcode_field_callback(): void
{
    $content = get_option('custom_shortcode_content', '');
    echo '<textarea name="custom_shortcode_content" rows="10" cols="50" class="large-text code">' . esc_textarea($content) . '</textarea>';
}


/**
 * Shortcode function to return the stored HTML content.
 *
 * @return string
 */
function custom_shortcode_function(): string
{
    // Get user's IP address
    $user_ip = $_SERVER['REMOTE_ADDR'];

    // Use a geolocation API to check if the user is from Iran
    $access_key = 'bdf8a469699bc45fe0ec4b580d9688be';
    $response = wp_remote_get('https://api.ipapi.com/'. $user_ip .'?access_key=' . $access_key . '&format=1');

    if (is_wp_error($response)) { 
        return get_option('custom_shortcode_content', ''); // If there's an error with the API request, don't load the HTML.
    }

    $data = json_decode(wp_remote_retrieve_body($response), true);

    // Check if the country is Iran (IR)
    if (isset($data['country_name']) && $data['country_name'] === 'Iran') {
        return get_option('custom_shortcode_content', '');
    } else {
        return '<p> برای کاربران خارج از ایران قابل نمایش نیست.</p>';
    }
}
add_shortcode('custom_html', 'custom_shortcode_function');

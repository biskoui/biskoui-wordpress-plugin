<?php
/**
 * Plugin Name: biskoui
 * Plugin URI: https://biskoui.ch/en
 * Description: WordPress plugin for biskoui, the Swiss consent management platform.
 * Version: 1.0
 * Author: Chewy Labs Sàrl
 * Author URI: https://biskoui.ch/en/contact
 **/

// Load text domain
function load_plugin_text_domain() {
    $user_language = get_user_meta(get_current_user_id(), 'locale', true);

    if (!empty($user_language)) {
        load_textdomain('biskoui', plugin_dir_path(__FILE__) . "/languages/biskoui-$user_language.mo");
    } else {
        load_plugin_textdomain('biskoui', false, dirname(plugin_basename(__FILE__)) . '/languages/');
    }
}

add_action('plugins_loaded', 'load_plugin_text_domain');

function ti_custom_javascript() {
    $clientId = get_option('biskoui_plugin_client_id');
    if (!empty($clientId)) {
        ?>
        <script>
            window.biskouiSettings = {
                clientId: "<?php echo esc_js($clientId) ?>",
                configuredByWordPress: true
            };

            (function (d, s) {
                var t = d.getElementsByTagName(s)[0],
                    e = d.createElement(s);
                e.async = true;
                e.src = "https://static.biskoui.ch/sdk.js";
                t.parentNode.insertBefore(e, t);
            })(document, "script");
        </script>
        <?php
    }
}

add_action('wp_head', 'ti_custom_javascript');

function biskoui_section_callback() {
    ?>
    <h2><?php esc_html_e('Biskoui integration', 'biskoui'); ?></h2>
    <p><?php esc_html_e('In order to integrate biskoui, you simply need to inform your domain’s integration key below.', 'biskoui'); ?></p>
    <?php
}

function biskoui_plugin_client_id_callback() {
    $integration_key = esc_attr(get_option('biskoui_plugin_client_id'));
    ?>
    <input name="biskoui_plugin_client_id" value="<?php echo $integration_key; ?>" style="width: 200px;" />
    <p><?php esc_html_e('Where to find the key ?', 'biskoui'); ?>
        <a href="https://biskoui.ch/en/blog/biskoui-installation-guide-via-wordpress-plugin/" target="_blank">
            <?php esc_html_e('Instructions in English', 'biskoui'); ?>
        </a>&nbsp;
<a href="https://biskoui.ch/blog/guide-dinstallation-de-biskoui-via-le-plugin-wordpress/" target="_blank">
            <?php esc_html_e('Instructions en français', 'biskoui'); ?>
        </a>&nbsp;

<a href="https://biskoui.ch/de/blog/anleitung-zur-installation-von-biskoui-ueber-ein-wordpress-plugin/" target="_blank">
            <?php esc_html_e('Anweisungen auf Deutsch', 'biskoui'); ?>
        </a>
    </p>
    <?php
}

function biskoui_plugin_register_settings() {
    register_setting('biskoui', 'biskoui_plugin_client_id');
    add_settings_section('biskoui_general', '', 'biskoui_section_callback', 'biskoui');
    add_settings_field('biskoui_plugin_client_id', esc_html__('Integration key', 'biskoui'), 'biskoui_plugin_client_id_callback', 'biskoui', 'biskoui_general');
}

add_action('admin_init', 'biskoui_plugin_register_settings');

function biskoui_menu_callback() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e('Biskoui', 'biskoui'); ?></h1>
        <form method="post" action="options.php">
            <div style="background: white; padding: 20px; border-radius: 6px; margin: 20px 0 5px 0; border: solid black 1px;">
                <?php
                settings_fields('biskoui');
                do_settings_sections('biskoui');
                ?>
            </div>
            <?php submit_button(esc_html__('Save changes', 'biskoui')); ?>
        </form>
    </div>
    <?php
}

function configure_menu() {
    add_menu_page('biskoui', esc_html__('Biskoui', 'biskoui'), 'manage_options', 'biskoui', 'biskoui_menu_callback');
}

add_action('admin_menu', 'configure_menu');
?>

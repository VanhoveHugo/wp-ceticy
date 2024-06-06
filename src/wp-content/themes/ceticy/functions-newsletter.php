<?php
function install_wpforms_plugin() {
    if (!class_exists('WPForms')) {
        include_once ABSPATH . 'wp-admin/includes/plugin-install.php';
        $api = plugins_api('plugin_information', array(
            'slug' => 'wpforms-lite',
            'fields' => array(
                'sections' => false,
                'downloaded' => true,
                'downloadlink' => true,
            ),
        ));

        if (is_wp_error($api)) {
            return false;
        }

        $result = install_plugin_install_status('wpforms-lite', 'wpforms-lite', $api);

        if ($result['status'] === 'install_failed') {
            return false;
        } elseif ($result['status'] === 'install_success') {
            return true;
        }
    }

    return true;
}

// Installez le plugin WPForms
install_wpforms_plugin();
?>

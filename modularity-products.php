<?php

/**
 * Plugin Name:       Modularity Products
 * Plugin URI:        https://github.com/helsingborg-stad/modularity-products
 * Description:       An addon for displaying products.
 * Version: 3.0.0
 * Author:            Freya Liljeberg
 * Author URI:        https://github.com/helsingborg-stad
 * License:           MIT
 * License URI:       https://opensource.org/licenses/MIT
 * Text Domain:       mod-products
 * Domain Path:       /languages
 */

 // Protect agains direct file access
if (! defined('WPINC')) {
    die;
}

define('MODULARITY_PRODUCTS_PATH', plugin_dir_path(__FILE__));
define('MODULARITY_PRODUCTS_URL', plugins_url('', __FILE__));
define('MODULARITY_PRODUCTS_TEMPLATE_PATH', MODULARITY_PRODUCTS_PATH . 'templates/');
define('MODULARITY_PRODUCTS_VIEW_PATH', MODULARITY_PRODUCTS_PATH . 'views/');
define('MODULARITY_PRODUCTS_MODULE_VIEW_PATH', plugin_dir_path(__FILE__) . 'source/php/Module/views');
define('MODULARITY_PRODUCTS_MODULE_PATH', MODULARITY_PRODUCTS_PATH . 'source/php/Module/');

load_plugin_textdomain('modularity-products', false, plugin_basename(dirname(__FILE__)) . '/languages');

// Autoload from plugin
if (file_exists(MODULARITY_PRODUCTS_PATH . 'vendor/autoload.php')) {
    require_once MODULARITY_PRODUCTS_PATH . 'vendor/autoload.php';
}
require_once MODULARITY_PRODUCTS_PATH . 'Public.php';

// Acf auto import and export
add_action('acf/init', function () {
    $acfExportManager = new \AcfExportManager\AcfExportManager();
    $acfExportManager->setTextdomain('modularity-products');
    $acfExportManager->setExportFolder(MODULARITY_PRODUCTS_PATH . 'source/php/AcfFields/');
    $acfExportManager->autoExport(array(
        'products-module' => 'group_62a30b29785f0', //Update with acf id here, module view
    ));
    $acfExportManager->import();
});

// Modularity 3.0 ready - ViewPath for Component library
add_filter('/Modularity/externalViewPath', function ($arr) {
    $arr['mod-products'] = MODULARITY_PRODUCTS_MODULE_VIEW_PATH;
    return $arr;
}, 10, 3);

// Start application
new ModularityProducts\App();

<?php

namespace ModularityProducts;

use ModularityProducts\Helper\CacheBust;

class App
{
    public function __construct()
    {

        //Init subset
        new Admin\Settings();

        //Register module
        add_action('init', array($this, 'registerModule'));
    }

    /**
     * Register the module
     * @return void
     */
    public function registerModule()
    {
        if (function_exists('modularity_register_module')) {
            modularity_register_module(
                MODULARITY_PRODUCTS_MODULE_PATH,
                'Products'
            );
        }
    }
}

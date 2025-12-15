<?php

declare(strict_types=1);

namespace ModularityProducts\Admin;

class Settings
{
    public function __construct()
    {
        add_action('acf/init', [$this, 'registerSettings']);
    }

    /**
     * Register settings
     * @return void
     */
    public function registerSettings()
    {
        if (function_exists('acf_add_options_sub_page')) {
            acf_add_options_sub_page([
                'page_title' => __('Modularity Products', 'modularity-products'),
                'menu_title' => __('Modularity Products Settings', 'modularity-products'),
                'menu_slug' => 'modularity-products-settings',
                'parent_slug' => 'options-general.php',
                'capability' => 'manage_options',
            ]);
        }
    }
}

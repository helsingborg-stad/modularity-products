<?php

namespace ModularityProducts\Module;

use ModularityProducts\Helper\CacheBust;

/**
 * Class Products
 * @package Products\Module
 */
class Products extends \Modularity\Module
{
    public $slug = 'products';
    public $supports = array();

    public function init()
    {
        $this->nameSingular = __("Products", 'modularity-products');
        $this->namePlural = __("Products", 'modularity-products');
        $this->description = __("An addon for displaying products.", 'modularity-products');
    }

    /**
     * Data array
     * @return array $data
     */
    public function data(): array
    {
        $data = array();

        //Append field config
        $data = array_merge($data, (array) \Modularity\Helper\FormatObject::camelCase(
            get_fields($this->ID)
        ));

        if (!empty($data['prices'])) {
            foreach ($data['prices'] as &$price) {
                $price['frequency'] = $this->showAsToFrequency($price['showAs']);
            }
        }

        return $data;
    }

    /**
     * Blade Template
     * @return string
     */
    public function template(): string
    {
        return "products.blade.php";
    }

    /**
     * Style - Register & adding css
     * @return void
     */
    public function style()
    {
        //Register custom css
        wp_register_style(
            'modularity-products',
            MODULARITY_PRODUCTS_URL . '/dist/' . CacheBust::name('css/modularity-products.css'),
            null,
            '1.0.0'
        );

        //Enqueue
        wp_enqueue_style('modularity-products');
    }

    /**
     * Script - Register & adding scripts
     * @return void
     */
    public function script()
    {
        //Register custom css
        wp_register_script(
            'modularity-products',
            MODULARITY_PRODUCTS_URL . '/dist/' . CacheBust::name('js/modularity-products.js'),
            null,
            '1.0.0'
        );

        //Enqueue
        wp_enqueue_script('modularity-products');
    }

    private function showAsToFrequency($showAs)
    {
        switch ($showAs) {
            case "mon":
                return __('mon', 'modularity-products');
            case "yr":
                return __('yr', 'modularity-products');
            case "pc":
                return __('pc', 'modularity-products');
            case "person":
                return __('person', 'modularity-products');
        }
    }

    /**
     * Available "magic" methods for modules:
     * init()            What to do on initialization
     * data()            Use to send data to view (return array)
     * style()           Enqueue style only when module is used on page
     * script            Enqueue script only when module is used on page
     * adminEnqueue()    Enqueue scripts for the module edit/add page in admin
     * template()        Return the view template (blade) the module should use when displayed
     */
}

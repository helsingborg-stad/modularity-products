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

        foreach ($data['products'] as &$product) {
            if (!empty($product['prices'])) {
                foreach ($product['prices'] as &$price) {
                    $price['frequency'] = $this->showAsToFrequency($price['showAs']);
                }
            }

            if (!empty($product['image'])) {
                $product['image']['url'] = wp_get_attachment_image_url($product['image']['id'], [128, 128]);
            }

            if (!empty($product['button']) && !empty($product['button']['label'])) {
                $product['button']['text'] = $product['button']['label'];
            } else {
                $product['button'] = false;
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

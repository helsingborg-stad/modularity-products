<?php 

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
    'key' => 'group_62a30b29785f0',
    'title' => __('Products module', 'modularity-products'),
    'fields' => array(
        0 => array(
            'key' => 'field_62a3176ec4838',
            'label' => __('Products', 'modularity-products'),
            'name' => 'products',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'collapsed' => '',
            'min' => 0,
            'max' => 0,
            'layout' => 'block',
            'button_label' => __('Add Row', 'modularity-products'),
            'rows_per_page' => 20,
            'sub_fields' => array(
                0 => array(
                    'key' => 'field_62a30b3dd22dc',
                    'label' => __('Heading', 'modularity-products'),
                    'name' => 'heading',
                    'type' => 'text',
                    'instructions' => __('The module heading', 'modularity-products'),
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'parent_repeater' => 'field_62a3176ec4838',
                ),
                1 => array(
                    'key' => 'field_62bd9870be7e2',
                    'label' => __('Background color', 'modularity-products'),
                    'name' => 'background_color',
                    'type' => 'select',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(
                        'primary' => __('Primary', 'modularity-products'),
                        'secondary' => __('Secondary', 'modularity-products'),
                        'custom' => __('Custom', 'modularity-products'),
                    ),
                    'default_value' => __('primary', 'modularity-products'),
                    'allow_null' => 0,
                    'multiple' => 0,
                    'ui' => 0,
                    'return_format' => 'value',
                    'ajax' => 0,
                    'placeholder' => '',
                    'parent_repeater' => 'field_62a3176ec4838',
                ),
                2 => array(
                    'key' => 'field_62bd98ba05426',
                    'label' => __('Custom color', 'modularity-products'),
                    'name' => 'custom_color',
                    'type' => 'color_picker',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        0 => array(
                            0 => array(
                                'field' => 'field_62bd9870be7e2',
                                'operator' => '==',
                                'value' => 'custom',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'enable_opacity' => 0,
                    'return_format' => 'string',
                    'parent_repeater' => 'field_62a3176ec4838',
                ),
                3 => array(
                    'key' => 'field_62a30c3233379',
                    'label' => __('Label', 'modularity-products'),
                    'name' => 'label',
                    'type' => 'text',
                    'instructions' => __('Description of the product', 'modularity-products'),
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'parent_repeater' => 'field_62a3176ec4838',
                ),
                4 => array(
                    'key' => 'field_62a30c6831f43',
                    'label' => __('Prices', 'modularity-products'),
                    'name' => 'prices',
                    'type' => 'repeater',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'collapsed' => '',
                    'min' => 1,
                    'max' => 2,
                    'layout' => 'table',
                    'button_label' => __('Add Row', 'modularity-products'),
                    'rows_per_page' => 20,
                    'sub_fields' => array(
                        0 => array(
                            'key' => 'field_62a30c8f31f44',
                            'label' => __('Amount', 'modularity-products'),
                            'name' => 'amount',
                            'type' => 'number',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '20',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'min' => '',
                            'max' => '',
                            'placeholder' => '',
                            'step' => '',
                            'prepend' => '',
                            'append' => '',
                            'parent_repeater' => 'field_62a30c6831f43',
                        ),
                        1 => array(
                            'key' => 'field_62a30caa31f45',
                            'label' => __('Currency', 'modularity-products'),
                            'name' => 'currency',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '20',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => __('kr', 'modularity-products'),
                            'maxlength' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'parent_repeater' => 'field_62a30c6831f43',
                        ),
                        2 => array(
                            'key' => 'field_62a30cb131f46',
                            'label' => __('Show as', 'modularity-products'),
                            'name' => 'show_as',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '20',
                                'class' => '',
                                'id' => '',
                            ),
                            'choices' => array(
                                'mon' => __('Monthly', 'modularity-products'),
                                'yr' => __('Annually', 'modularity-products'),
                                'pc' => __('Pieces', 'modularity-products'),
                                'person' => __('Person', 'modularity-products'),
                            ),
                            'default_value' => __('mon', 'modularity-products'),
                            'return_format' => 'value',
                            'multiple' => 0,
                            'allow_null' => 0,
                            'ui' => 0,
                            'ajax' => 0,
                            'placeholder' => '',
                            'parent_repeater' => 'field_62a30c6831f43',
                        ),
                        3 => array(
                            'key' => 'field_64ad194a2e738',
                            'label' => __('No cost text', 'modularity-products'),
                            'name' => 'no_cost_text',
                            'type' => 'text',
                            'instructions' => __('The text shown when the product is free (Amount has no value or the value is equal to 0).', 'modularity-products'),
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '20',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'maxlength' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'parent_repeater' => 'field_62a30c6831f43',
                        ),
                        4 => array(
                            'key' => 'field_62a30cd531f47',
                            'label' => __('Background colour', 'modularity-products'),
                            'name' => 'background_color',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '20',
                                'class' => '',
                                'id' => '',
                            ),
                            'choices' => array(
                                'primary' => __('Primary', 'modularity-products'),
                                'secondary' => __('Secondary', 'modularity-products'),
                                'none' => __('None', 'modularity-products'),
                            ),
                            'default_value' => __('Primary', 'modularity-products'),
                            'return_format' => 'value',
                            'multiple' => 0,
                            'allow_null' => 0,
                            'ui' => 0,
                            'ajax' => 0,
                            'placeholder' => '',
                            'parent_repeater' => 'field_62a30c6831f43',
                        ),
                    ),
                    'parent_repeater' => 'field_62a3176ec4838',
                ),
                5 => array(
                    'key' => 'field_62a30d133eecd',
                    'label' => __('Image', 'modularity-products'),
                    'name' => 'image',
                    'type' => 'image',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                    'parent_repeater' => 'field_62a3176ec4838',
                ),
                6 => array(
                    'key' => 'field_62a314d65409b',
                    'label' => __('Meta', 'modularity-products'),
                    'name' => 'meta_text',
                    'type' => 'text',
                    'instructions' => __('Text displayed above bullet points', 'modularity-products'),
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'parent_repeater' => 'field_62a3176ec4838',
                ),
                7 => array(
                    'key' => 'field_62a30d2530170',
                    'label' => __('Bullet points', 'modularity-products'),
                    'name' => 'bullet-points',
                    'type' => 'repeater',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'collapsed' => '',
                    'min' => 0,
                    'max' => 0,
                    'layout' => 'table',
                    'button_label' => __('Add Row', 'modularity-products'),
                    'rows_per_page' => 20,
                    'sub_fields' => array(
                        0 => array(
                            'key' => 'field_62a30d3e30171',
                            'label' => __('Label', 'modularity-products'),
                            'name' => 'label',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                            'parent_repeater' => 'field_62a30d2530170',
                        ),
                        1 => array(
                            'key' => 'field_62a30d4830172',
                            'label' => __('Link', 'modularity-products'),
                            'name' => 'href',
                            'type' => 'url',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'parent_repeater' => 'field_62a30d2530170',
                        ),
                    ),
                    'parent_repeater' => 'field_62a3176ec4838',
                ),
                8 => array(
                    'key' => 'field_62a30d6bda2a4',
                    'label' => __('Button', 'modularity-products'),
                    'name' => 'button',
                    'type' => 'group',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'layout' => 'block',
                    'sub_fields' => array(
                        0 => array(
                            'key' => 'field_62a30de7da2a6',
                            'label' => __('Button label', 'modularity-products'),
                            'name' => 'label',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                        1 => array(
                            'key' => 'field_62a30df2da2a7',
                            'label' => __('Button link', 'modularity-products'),
                            'name' => 'href',
                            'type' => 'url',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                        ),
                    ),
                    'parent_repeater' => 'field_62a3176ec4838',
                ),
                9 => array(
                    'key' => 'field_62a30eb1493b9',
                    'label' => __('Featured', 'modularity-products'),
                    'name' => 'featured',
                    'type' => 'true_false',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'message' => '',
                    'default_value' => 0,
                    'ui' => 0,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                    'parent_repeater' => 'field_62a3176ec4838',
                ),
            ),
        ),
    ),
    'location' => array(
        0 => array(
            0 => array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'mod-products',
            ),
        ),
        1 => array(
            0 => array(
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/products',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
    'acfe_display_title' => '',
    'acfe_autosync' => '',
    'acfe_form' => 0,
    'acfe_meta' => '',
    'acfe_note' => '',
));
}
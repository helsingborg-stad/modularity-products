@if (!$hideTitle)
    @typography([
        'element' => 'h2',
        'classList' => ['u-margin--0']
    ])
        {{ $postTitle }}
    @endtypography
@endif

<div class="o-grid modularity-products-container">
    @foreach ($products as $product)
        <div class="o-grid-{{ 12/count($products) }}@md">
            @product([
                'heading' => $product['heading'],
                'backgroundColor' => $product['backgroundColor'] ?? 'primary',
                'label' => $product['label'],
                'image' => [
                    'src' => $product['image']['url'],
                    'alt' => $product['image']['alt'] ?? $product['image']['name']
                ],
                'meta' => $product['metaText'] ?? '',
                'prices' => $product['prices'],
                'bulletPoints' => $product['bulletPoints'],
                'button' => [
                    'type' => 'filled',
                    'text' => $product['button']['label'],
                    'href' => $product['button']['href']
                ],
                'featured' => $product['featured'],
                'attributeList' => $product['backgroundColor'] === 'custom' ? [
                    'style' => '--c-product-custom-color: ' . $product['customColor'] . ';'
                ] : []
            ])
            @endproduct
        </div>
    @endforeach
</div>

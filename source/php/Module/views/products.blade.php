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
        <div class="o-grid-{{ 12/count($products) }}">
            @product([
                'heading' => $product['heading'],
                'label' => $product['label'],
                'image' => [
                    'src' => $product['image']['url'],
                    'alt' => $product['image']['alt'] ?? $product['image']['name'],
                    'backgroundColor' => 'secondary'
                ],
                'meta' => $product['metaText'] ?? '',
                'prices' => $product['prices'],
                'bulletPoints' => $product['bulletPoints'],
                'button' => [
                    'type' => 'filled',
                    'color' => 'primary',
                    'text' => $product['button']['label'],
                    'href' => $product['button']['href']
                ],
                'featured' => $product['featured']
            ])
            @endproduct
        </div>
    @endforeach
</div>

<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_action( 'wp_enqueue_scripts', function () {
    $ver = '6.6.2';
    wp_enqueue_script( 'wavesurfer', "https://unpkg.com/wavesurfer.js@$ver", [], $ver, true );
    wp_enqueue_script( 'wavesurfer-regions', "https://unpkg.com/wavesurfer.js@$ver/dist/plugin/wavesurfer.regions.min.js", [ 'wavesurfer' ], $ver, true );
}, 5 );

add_action( 'wp_enqueue_scripts', function () {
    if ( ! is_page( 'editor' ) ) return;
    $ver = filemtime( get_stylesheet_directory() . '/assets/js/custom-editor.js' );
    wp_enqueue_script( 'custom-editor', get_stylesheet_directory_uri() . '/assets/js/custom-editor.js', [ 'jquery', 'wavesurfer', 'wavesurfer-regions' ], $ver, true );
    wp_localize_script( 'custom-editor', 'ytSettings', [ 'apiKey' => '' ] );
}, 15 );

add_action( 'wp_enqueue_scripts', function () {
    if ( is_page( 'editor' ) ) {
        wp_enqueue_script( 'youtube-iframe-api', 'https://www.youtube.com/iframe_api', [], null, true );
    }
}, 20 );

add_action( 'wp_ajax_save_canvas_image', 'save_canvas_image' );
add_action( 'wp_ajax_nopriv_save_canvas_image', 'save_canvas_image' );

function save_canvas_image() {
    if ( empty( $_POST['image'] ) ) {
        wp_send_json_error( 'No image data.' );
    }
    $image_data = $_POST['image'];
    $image_data = preg_replace( '#^data:image/\w+;base64,#i', '', $image_data );
    $decoded = base64_decode( $image_data );
    if ( ! $decoded ) {
        wp_send_json_error( 'Invalid base64.' );
    }
    $upload_dir = wp_upload_dir();
    $filename = 'custom_wave_' . time() . '.png';
    $file_path = trailingslashit( $upload_dir['path'] ) . $filename;
    file_put_contents( $file_path, $decoded );
    $file_url = trailingslashit( $upload_dir['url'] ) . $filename;
    wp_send_json_success( [ 'url' => esc_url_raw( $file_url ) ] );
}

add_action( 'wp_enqueue_scripts', function () {
    if ( ! is_page( 'editor' ) ) return;
    $shop_items = [
        [
            'id' => 292,
            'name' => 'Ram',
            'variations' => [
                [
                    'label' => 'Plasticni',
                    'dimensions' => [
                        [ 'size' => '20x30', 'price' => 2600 ],
                        [ 'size' => '30x40', 'price' => 3000 ],
                        [ 'size' => '40x60', 'price' => 3300 ]
                    ]
                ],
                [
                    'label' => 'Drveni',
                    'dimensions' => [
                        [ 'size' => '20x30', 'price' => 2900 ],
                        [ 'size' => '30x40', 'price' => 3600 ],
                        [ 'size' => '40x60', 'price' => 3800 ]
                    ]
                ]
            ]
        ],
        [
            'id' => 226,
            'name' => 'Poster',
            'variations' => [
                [
                    'label' => 'Standard',
                    'dimensions' => [
                        [ 'size' => '30x40', 'price' => 1800 ],
                        [ 'size' => '40x60', 'price' => 2000 ],
                        [ 'size' => '50x70', 'price' => 2100 ]
                    ]
                ]
            ]
        ],
        [
            'id' => 225,
            'name' => 'Canvas na ramu',
            'variations' => [
                [
                    'label' => 'Standard',
                    'dimensions' => [
                        [ 'size' => '30x40', 'price' => 4400 ],
                        [ 'size' => '40x60', 'price' => 4900 ],
                        [ 'size' => '50x70', 'price' => 5300 ]
                    ]
                ]
            ]
        ],
        [
            'id' => 229,
            'name' => 'Foreks',
            'variations' => [],
            'price' => 3000
        ]
    ];
    wp_localize_script( 'shop-custom', 'shopItems', $shop_items );
}, 25 );

add_action( 'wp_enqueue_scripts', function () {
    if ( ! is_page( 'editor' ) ) return;
    $ver = filemtime( get_stylesheet_directory() . '/assets/js/shop-custom.js' );
    wp_enqueue_script( 'shop-custom', get_stylesheet_directory_uri() . '/assets/js/shop-custom.js', [ 'jquery' ], $ver, true );
    wp_localize_script( 'shop-custom', 'shopCustom', [
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'cart_url' => wc_get_cart_url()
    ] );
}, 20 );

add_filter( 'woocommerce_add_cart_item_data', function( $cart_item_data, $product_id, $variation_id ) {
    if ( isset( $_POST['cart_item_data'] ) ) {
        foreach ( $_POST['cart_item_data'] as $key => $value ) {
            $cart_item_data[ $key ] = sanitize_text_field( $value );
        }
    }
    return $cart_item_data;
}, 10, 3 );

add_filter( 'woocommerce_get_item_data', function( $item_data, $cart_item ) {
    if ( isset( $cart_item['wave_image'] ) ) {
        $item_data[] = [
            'name' => 'Your design',
            'value' => '<img src="' . esc_url( $cart_item['wave_image'] ) . '" style="max-width:150px;"/>',
            'display' => '',
        ];
    }
    if ( isset( $cart_item['variation_label'] ) && isset( $cart_item['variation_size'] ) ) {
        $item_data[] = [
            'name' => 'Variation',
            'value' => $cart_item['variation_label'] . ' - ' . $cart_item['variation_size'] . ' (' . $cart_item['variation_price'] . ' RSD)',
            'display' => '',
        ];
    }
    return $item_data;
}, 10, 2 );

add_action( 'woocommerce_checkout_create_order_line_item', function( $item, $cart_item_key, $values, $order ) {
    if ( isset( $values['wave_image'] ) ) {
        $item->add_meta_data( 'Your design', $values['wave_image'], true );
    }
    if ( isset( $values['variation_label'] ) && isset( $values['variation_size'] ) ) {
        $item->add_meta_data( 'Variation', $values['variation_label'] . ' - ' . $values['variation_size'] . ' (' . $values['variation_price'] . ' RSD)', true );
    }
}, 10, 4 );

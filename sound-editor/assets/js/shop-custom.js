document.getElementById('print-section')?.addEventListener('click', () => {
    hideAllFunctionSections();
    const printFunctions = document.getElementById('print-functions');
    printFunctions.style.display = 'block';

    const productContainer = printFunctions.querySelector('.print-product-info');
    if (!productContainer) return;

    const existingPreview = printFunctions.querySelector('.wave-preview');
    if (existingPreview) existingPreview.remove();

    const canvas = document.getElementById('waveCanvas');
    if (canvas) {
        const img = document.createElement('img');
        img.src = canvas.toDataURL('image/png');
        img.className = 'wave-preview';
        img.style.width = '150px';
        img.style.height = 'auto';
        img.style.display = 'block';
        img.style.marginBottom = '10px';
        img.style.border = '1px solid #ccc';
        img.style.borderRadius = '5px';
        productContainer.prepend(img);
    }

    if (window.shopItems) {
        renderShopItems(shopItems, productContainer);
    }
});

function renderShopItems(items, container) {
    const preview = container.querySelector('.wave-preview');
    container.innerHTML = '';
    if (preview) container.appendChild(preview);

    items.forEach(item => {
        const itemDiv = document.createElement('div');
        itemDiv.style.marginBottom = '15px';

        const label = document.createElement('strong');
        label.textContent = item.name + ':';
        label.style.fontSize = '0.9em';
        itemDiv.appendChild(label);

        if (item.variations && item.variations.length > 0) {
            item.variations.forEach((variation, i) => {
                const wrapper = document.createElement('div');
                wrapper.style.marginTop = '5px';

                const varLabel = document.createElement('span');
                varLabel.textContent = variation.label + ' ';
                wrapper.appendChild(varLabel);

                if (variation.dimensions && variation.dimensions.length > 0) {
                    const select = document.createElement('select');
                    select.id = `${item.id}-dim-${i}`;
                    select.style.marginRight = '10px';

                    const priceSpan = document.createElement('span');
                    priceSpan.style.marginLeft = '10px';
                    priceSpan.style.fontWeight = 'bold';

                    variation.dimensions.forEach(dim => {
                        const option = document.createElement('option');
                        option.value = dim.size;
                        option.dataset.price = dim.price;
                        option.textContent = dim.size;
                        select.appendChild(option);
                    });

                    priceSpan.textContent = 'Price: ' + variation.dimensions[0].price + ' RSD';

                    select.addEventListener('change', () => {
                        const selected = select.selectedOptions[0];
                        priceSpan.textContent = 'Price: ' + selected.dataset.price + ' RSD';
                    });

                    wrapper.appendChild(select);
                    wrapper.appendChild(priceSpan);

                    const addButton = document.createElement('button');
                    addButton.textContent = '🛒';
                    addButton.title = 'Add to cart';
                    addButton.style.marginLeft = '10px';
                    addButton.addEventListener('click', () => {
                        addSingleToCart(item.id, variation.label, select.selectedOptions[0].value, select.selectedOptions[0].dataset.price);
                    });
                    wrapper.appendChild(addButton);
                }
                itemDiv.appendChild(wrapper);
            });
        } else {
            const p = document.createElement('p');
            p.textContent = `Price: ${item.price} RSD`;
            const addButton = document.createElement('button');
            addButton.textContent = '🛒';
            addButton.title = 'Add to cart';
            addButton.style.marginLeft = '10px';
            addButton.addEventListener('click', () => {
                addSingleToCart(item.id, null, null, item.price);
            });
            p.appendChild(addButton);
            itemDiv.appendChild(p);
        }
        container.appendChild(itemDiv);
    });
}

function addSingleToCart(productId, variationLabel, variationSize, variationPrice) {
    const canvas = document.getElementById('waveCanvas');
    if (!canvas) return;

    const imageData = canvas.toDataURL('image/png');

    jQuery.ajax({
        url: shopCustom.ajaxurl,
        method: 'POST',
        data: { action: 'save_canvas_image', image: imageData },
        success: function(response) {
            if (response.success && response.data.url) {
                const imageUrl = response.data.url;
                const cartData = {
                    action: 'woocommerce_add_to_cart',
                    product_id: productId,
                    quantity: 1,
                    cart_item_data: {
                        wave_image: imageUrl,
                        variation_label: variationLabel,
                        variation_size: variationSize,
                        variation_price: variationPrice
                    }
                };
                jQuery.post(shopCustom.ajaxurl, cartData, function() {
                    window.location.href = shopCustom.cart_url;
                });
            } else {
                alert('Error saving image.');
            }
        },
        error: function() {
            alert('AJAX error.');
        }
    });
}

document.addEventListener("DOMContentLoaded", function () {
    const downloadSection = document.getElementById('download-section');
    const downloadFunctions = document.getElementById('download-functions');
    const downloadBtn = document.getElementById('download-png-button');

    downloadSection?.addEventListener('click', () => {
        hideAllFunctionSections();
        downloadFunctions.style.display = 'block';

        const oldPreview = downloadFunctions.querySelector('.wave-preview');
        if (oldPreview) oldPreview.remove();

        const canvas = document.getElementById('waveCanvas');
        if (!canvas) return;

        const previewImg = document.createElement('img');
        previewImg.src = canvas.toDataURL('image/png');
        previewImg.className = 'wave-preview';
        previewImg.style.width = '150px';
        previewImg.style.height = 'auto';
        previewImg.style.display = 'block';
        previewImg.style.margin = '0 auto 10px';
        previewImg.style.border = '1px solid #ccc';
        previewImg.style.borderRadius = '5px';

        const textParagraph = downloadFunctions.querySelector('p');
        textParagraph.insertAdjacentElement('beforebegin', previewImg);
    });

    downloadBtn?.addEventListener('click', function () {
        const canvas = document.getElementById('waveCanvas');
        if (!canvas) return;

        const imageData = canvas.toDataURL('image/png');

        jQuery.ajax({
            url: shopCustom.ajaxurl,
            method: 'POST',
            data: { action: 'save_canvas_image', image: imageData },
            success: function(response) {
                if (response.success && response.data.url) {
                    const imageUrl = response.data.url;
                    const cartData = {
                        action: 'woocommerce_add_to_cart',
                        product_id: 222,
                        quantity: 1,
                        cart_item_data: { wave_image: imageUrl }
                    };
                    jQuery.post(shopCustom.ajaxurl, cartData, function() {
                        alert("Design added to cart!");
                        window.location.href = shopCustom.cart_url;
                    });
                } else {
                    alert('Error generating image.');
                }
            },
            error: function() {
                alert('AJAX error.');
            }
        });
    });
});

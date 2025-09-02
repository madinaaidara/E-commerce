document.addEventListener('DOMContentLoaded', () => {
    const cartKey = 'eTerangaCart';

    function getCart() {
        const cart = localStorage.getItem(cartKey);
        return cart ? JSON.parse(cart) : [];
    }

    function saveCart(cart) {
        localStorage.setItem(cartKey, JSON.stringify(cart));
    }

    function updateCartCount() {
        const cart = getCart();
        const count = cart.reduce((acc, item) => acc + item.quantity, 0);
        const cartCountElem = document.getElementById('cart-count');
        if (cartCountElem) {
            cartCountElem.textContent = count;
        }
    }

    function addToCart(product) {
        const cart = getCart();
        const existingItem = cart.find(item => item.id === product.id);
        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            cart.push({...product, quantity: 1});
        }
        saveCart(cart);
        updateCartCount();
        alert(`${product.name} ajouté au panier.`);
    }

    function formatPrice(priceStr) {
        // Remove non-digit characters and convert to number
        return Number(priceStr.replace(/[^0-9]/g, ''));
    }

    // Attach event listeners to all add-to-cart buttons
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    addToCartButtons.forEach(button => {
        button.addEventListener('click', () => {
            const productCard = button.closest('.product-card');
            if (!productCard) return;

            const id = productCard.querySelector('.product-title')?.textContent.trim() || '';
            const name = id;
            const priceText = productCard.querySelector('.current-price')?.textContent.trim() || '0';
            const price = formatPrice(priceText);

            if (!id || !name || !price) {
                alert('Erreur lors de l\'ajout au panier.');
                return;
            }

            addToCart({id, name, price});
        });
    });

    // If on panier.html, render cart contents and handle quantity changes
    if (document.getElementById('cart-container')) {
        const cartContainer = document.getElementById('cart-container');
        const cartTotalElem = document.getElementById('cart-total');
        const emptyCartMessage = document.getElementById('empty-cart-message');
        const placeOrderBtn = document.getElementById('place-order-btn');
        let cart = getCart();

        function renderCart() {
            if (cart.length === 0) {
                emptyCartMessage.style.display = 'block';
                cartContainer.style.display = 'none';
                cartTotalElem.style.display = 'none';
                placeOrderBtn.style.display = 'none';
                return;
            } else {
                emptyCartMessage.style.display = 'none';
                cartContainer.style.display = 'block';
                cartTotalElem.style.display = 'block';
                placeOrderBtn.style.display = 'inline-block';
            }

            cartContainer.innerHTML = '';
            let totalPrice = 0;

            cart.forEach((item, index) => {
                const itemTotal = item.price * item.quantity;
                totalPrice += itemTotal;

                const itemElem = document.createElement('div');
                itemElem.classList.add('cart-item');

                itemElem.innerHTML = `
                    <h3>${item.name}</h3>
                    <p>Prix unitaire: ${item.price.toLocaleString()} XOF</p>
                    <div class="quantity-controls">
                        <button class="decrease-btn" data-index="${index}">-</button>
                        <span>${item.quantity}</span>
                        <button class="increase-btn" data-index="${index}">+</button>
                    </div>
                    <p>Total: ${itemTotal.toLocaleString()} XOF</p>
                `;

                cartContainer.appendChild(itemElem);
            });

            cartTotalElem.textContent = `Prix total: ${totalPrice.toLocaleString()} XOF`;

            // Attach event listeners for quantity buttons
            const increaseButtons = document.querySelectorAll('.increase-btn');
            const decreaseButtons = document.querySelectorAll('.decrease-btn');

            increaseButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const idx = parseInt(button.getAttribute('data-index'));
                    cart[idx].quantity += 1;
                    saveCart(cart);
                    renderCart();
                    updateCartCount();
                });
            });

            decreaseButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const idx = parseInt(button.getAttribute('data-index'));
                    if (cart[idx].quantity > 1) {
                        cart[idx].quantity -= 1;
                    } else {
                        cart.splice(idx, 1);
                    }
                    saveCart(cart);
                    renderCart();
                    updateCartCount();
                });
            });
        }

        renderCart();

        placeOrderBtn.addEventListener('click', () => {
            window.location.href = 'order.html';
        });
    }

    updateCartCount();
});

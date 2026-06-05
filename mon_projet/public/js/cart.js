// Cart functionality
let cart = JSON.parse(localStorage.getItem('cart')) || [];

// Update cart count display
function updateCartCount() {
    const cartCounts = document.querySelectorAll('.cart-count');
    if (cartCounts.length) {
        const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);

        cartCounts.forEach((cartCount) => {
            cartCount.textContent = totalItems;
            cartCount.style.display = totalItems > 0 ? 'inline-flex' : 'none';
        });
    }
}

// Add item to cart
function addToCart(name, price) {
    const existingItem = cart.find(item => item.name === name);
    
    if (existingItem) {
        existingItem.quantity += 1;
    } else {
        cart.push({
            name: name,
            price: price,
            quantity: 1
        });
    }
    
    saveCart();
    updateCartCount();
    
    // Show notification
    showNotification(`${name} ajouté au panier`);
}

// Remove item from cart
function removeFromCart(index) {
    cart.splice(index, 1);
    saveCart();
    updateCartCount();
    renderCart();
}

// Update item quantity
function updateQuantity(index, change) {
    const item = cart[index];
    item.quantity += change;
    
    if (item.quantity <= 0) {
        removeFromCart(index);
    } else {
        saveCart();
        updateCartCount();
        renderCart();
    }
}

// Save cart to localStorage
function saveCart() {
    localStorage.setItem('cart', JSON.stringify(cart));
}

// Render cart items
function renderCart() {
    const cartItems = document.getElementById('cart-items');
    const cartSubtotal = document.getElementById('cart-subtotal');
    const cartTotal = document.getElementById('cart-total');
    
    if (!cartItems) return;
    
    if (cart.length === 0) {
        cartItems.innerHTML = `
            <div class="cart-empty t-center">
                <p class="txt23">Votre panier est vide</p>
                <a href="/menu" class="btn1 flex-c-m size13 txt11 trans-0-4 m-t-20">
                    Voir la carte
                </a>
            </div>
        `;
        cartSubtotal.textContent = '0 F';
        cartTotal.textContent = '0 F';
        return;
    }
    
    let html = '';
    let subtotal = 0;
    
    cart.forEach((item, index) => {
        const itemTotal = item.price * item.quantity;
        subtotal += itemTotal;
        
        html += `
            <div class="cart-item flex-w flex-b p-b-20 bo5-b">
                <div class="cart-item-info">
                    <h4 class="txt21 m-b-5">${item.name}</h4>
                    <p class="txt22">${item.price.toLocaleString()} F x ${item.quantity}</p>
                </div>
                <div class="cart-item-actions flex-w">
                    <div class="cart-quantity flex-w">
                        <button class="btn-quantity flex-c-m" onclick="updateQuantity(${index}, -1)">-</button>
                        <span class="txt21 m-l-10 m-r-10">${item.quantity}</span>
                        <button class="btn-quantity flex-c-m" onclick="updateQuantity(${index}, 1)">+</button>
                    </div>
                    <button class="btn-remove txt19 m-l-20" onclick="removeFromCart(${index})">
                        <i class="fa fa-trash"></i>
                    </button>
                </div>
                <div class="cart-item-total txt21">
                    ${itemTotal.toLocaleString()} F
                </div>
            </div>
        `;
    });
    
    cartItems.innerHTML = html;
    cartSubtotal.textContent = `${subtotal.toLocaleString()} F`;
    cartTotal.textContent = `${subtotal.toLocaleString()} F`;
}

// Show notification
function showNotification(message) {
    // Create notification element
    const notification = document.createElement('div');
    notification.className = 'cart-notification';
    notification.textContent = message;
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background-color: #F56F3B;
        color: white;
        padding: 15px 25px;
        border-radius: 5px;
        z-index: 9999;
        animation: slideIn 0.3s ease-out;
        box-shadow: 0 4px 15px rgba(242, 90, 43, 0.4);
    `;
    
    document.body.appendChild(notification);
    
    // Remove after 3 seconds
    setTimeout(() => {
        notification.style.animation = 'slideOut 0.3s ease-out';
        setTimeout(() => {
            document.body.removeChild(notification);
        }, 300);
    }, 3000);
}

// Add CSS animations for notifications
const style = document.createElement('style');
style.textContent = `
    @keyframes slideIn {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    
    @keyframes slideOut {
        from {
            transform: translateX(0);
            opacity: 1;
        }
        to {
            transform: translateX(100%);
            opacity: 0;
        }
    }
    
    .cart-icon {
        position: relative;
    }
    
    .cart-count {
        position: absolute;
        top: -8px;
        right: -8px;
        background-color: #F56F3B;
        color: white;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        font-size: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .btn-add-cart {
        margin-top: 10px;
        padding: 8px 20px;
    }
    
    .cart-item {
        padding: 15px 0;
    }
    
    .cart-item-info {
        flex: 1;
    }
    
    .cart-item-actions {
        display: flex;
        align-items: center;
    }
    
    .cart-quantity {
        display: flex;
        align-items: center;
    }
    
    .btn-quantity {
        width: 30px;
        height: 30px;
        border: 1px solid #e6e6e6;
        background: white;
        border-radius: 3px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .btn-quantity:hover {
        background-color: #F56F3B;
        color: white;
        border-color: #F56F3B;
    }
    
    .btn-remove {
        background: none;
        border: none;
        cursor: pointer;
        color: #808080;
    }
    
    .btn-remove:hover {
        color: #F56F3B;
    }
    
    .cart-item-total {
        margin-left: 20px;
        font-weight: 700;
    }
    
    .wrap-cart-summary {
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
    
    .w-full {
        width: 100%;
    }
`;
document.head.appendChild(style);

// Initialize cart on page load
document.addEventListener('DOMContentLoaded', function() {
    console.log('Cart.js loaded');
    console.log('Cart from localStorage:', JSON.parse(localStorage.getItem('cart')));
    updateCartCount();

    document.querySelectorAll('.btn-add-cart').forEach(button => {
        button.setAttribute('type', 'button');
    });
    
    // Render cart if on cart page
    if (document.getElementById('cart-items')) {
        console.log('Rendering cart on cart page');
        renderCart();
    }
});

// Keep cart buttons reliable even when a layout/filter plugin moves menu items.
document.addEventListener('click', function(event) {
    const button = event.target.closest('.btn-add-cart');
    if (!button) return;

    event.preventDefault();
    event.stopPropagation();

    const name = button.getAttribute('data-name');
    const price = parseInt(button.getAttribute('data-price'), 10);

    console.log('Add to cart clicked:', name, price);

    if (!name || Number.isNaN(price)) {
        console.error('Invalid cart data:', name, price);
        return;
    }

    addToCart(name, price);
});


$(document).ready(function(){
 // اسکریپت برای افزایش و کاهش تعداد محصول
 document.addEventListener('DOMContentLoaded', function() {
    const minusBtns = document.querySelectorAll('.qty-btn:first-child');
    const plusBtns = document.querySelectorAll('.qty-btn:last-child');
    
    minusBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const input = this.nextElementSibling;
            let value = parseInt(input.value);
            if (value > 1) {
                input.value = value - 1;
            }
        });
    });
    
    plusBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const input = this.previousElementSibling;
            let value = parseInt(input.value);
            input.value = value + 1;
        });
    });
    
    // حذف محصول از سبد
    const removeBtns = document.querySelectorAll('.btn-remove');
    removeBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const cartItem = this.closest('.cart-item');
            cartItem.style.height = cartItem.offsetHeight + 'px';
            cartItem.style.overflow = 'hidden';
            cartItem.style.opacity = '1';
            
            setTimeout(() => {
                cartItem.style.height = '0';
                cartItem.style.padding = '0';
                cartItem.style.margin = '0';
                cartItem.style.opacity = '0';
                cartItem.style.transition = 'all 0.3s ease';
            }, 10);
            
            setTimeout(() => {
                cartItem.remove();
                
                // بررسی خالی بودن سبد
                const cartItems = document.querySelectorAll('.cart-item');
                if (cartItems.length === 0) {
                    document.querySelector('.container:not(.d-none)').classList.add('d-none');
                    document.querySelector('.container.d-none').classList.remove('d-none');
                }
            }, 300);
        });
    });
});
})
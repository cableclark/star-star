const toggler = document.querySelector('.toggler');
const menuElement = document.querySelector('#primary-menu');

function toggleClass (item, anotherElement, className) {
    
    item.addEventListener('click', function () {
            
            anotherElement.classList.toggle(className);

    });
}

toggleClass(toggler, menuElement, 'menu-active');

toggleClass(menuElement, menuElement, 'menu-active');

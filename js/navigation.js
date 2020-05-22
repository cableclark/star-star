function toggleClass (item, anotherElement, className, focusInput) {
    
    item.addEventListener('click', function () {

        anotherElement.classList.toggle(className);
        
        if (focusInput) {
       
            focusInput.focus();
        }

    });
}

const toggler = document.querySelector('.toggler');

const menuElement = document.querySelector('#primary-menu');

const search = document.querySelector('.search-icon');

const searchElement = document.querySelector('#search-3');

const input = document.querySelector('.search-field');


toggleClass(toggler, menuElement, 'menu-active');

toggleClass(menuElement, menuElement, 'menu-active');

toggleClass(search, searchElement, 'search-active', input);

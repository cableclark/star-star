/**
 *  A function that tackles class changes on click events;
 *
 */

function toggleClass (item, searchElement, className) {
    
    item.addEventListener('click', function () {

        searchElement.classList.toggle(className);
        
    });
}

const toggler = document.querySelector('.toggler');

const menuElement = document.querySelector('.main-menu');

const search = document.querySelector('.search-icon');


toggleClass(toggler, menuElement, 'menu-active');

toggleClass(menuElement, menuElement, 'menu-active');


/**
 *  A function that tackles class changes on click events for search bar;
 *
 */


function toggleSearchBar (item, searchElement, className, classNameScrolled, focusInput) {
  
    item.addEventListener('click', function () {
        
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {

            searchElement.classList.add(classNameScrolled);
           
        } else {   
            searchElement.classList.add(className);
            
        }
        
        focusInput.focus();
            

    });
}

const searchElement = document.querySelector('.widget_search');

const inputField = document.querySelector('.search-field');


toggleSearchBar(search, searchElement, 'search-active', 'search-active-scrolled', inputField);

/**
 *  A function to remove a class on a click event 
 *
 */

function removeClass (item, searchElement, className) {
    
    item.addEventListener('click', function () {

        searchElement.classList.remove(className);
        
    });
}


const searchX = document.querySelector('.search-x');

removeClass(searchX, searchElement, "search-active-scrolled")

removeClass(searchX, searchElement, "search-active")



/**
 *  A function that increases adn reduces the size of the navbar
 *
 */


const title = document.querySelector(".site-title ")
const navbar = document.querySelector(".site-header")

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    title.classList.add("smaller-navbar");
    navbar.classList.add("smaller-header");
    searchElement.classList.remove('search-active-scrolled');

  } else {
    title.classList.remove("smaller-navbar");
    navbar.classList.remove("smaller-header");
    searchElement.classList.remove('search-active');
  }
} 

window.onscroll = function() {scrollFunction()};

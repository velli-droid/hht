// burger menu
let burgerBtn = document.querySelector('.burger-btn');
let jumpMenu = document.querySelector('.jump-menu');
let body = document.querySelector('body');
let pageNavLinks = [...document.querySelectorAll('.nav-link')];

burgerBtn.onclick = function() {
    burgerBtn.classList.toggle('burger-btn_active');
    jumpMenu.classList.toggle('jump-menu_active');
    if (burgerBtn.classList.contains('burger-btn_active')) {
        body.classList.add('no-scroll');
    } else {
        body.classList.remove('no-scroll');
    }
}

pageNavLinks.forEach(element => {
    element.onclick = function() {
        burgerBtn.classList.remove('burger-btn_active');
        body.classList.remove('no-scroll');
        jumpMenu.classList.remove('jump-menu_active');
    }
});



// products swiper
let productsSwiper = new Swiper('.products-swiper-container', {
    effect: 'coverflow',
    grabCursor: false,
    centeredSlides: true,
    loop: true,
    slidesPerView: 3,
    spaceBetween: 50,
    slideShadows: true,
    coverflowEffect: {
    	rotate: 0,
    	stretch: 0,
    	depth: 50,
    	modifier: 6,
    	slideShadows: false,
    },
    navigation: {
        nextEl: '.products-next-btn',
        prevEl: '.products-prev-btn',
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
        },
        720: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 30
        },
    },
});

// products card details

let productsCards = [...document.querySelectorAll('.products-card')];

productsCards.forEach(element => {
    let showDetailsLink = element.querySelectorAll('.show-details__link');
    showDetailsLink[0].onclick = function(e) {
        e.preventDefault();
        element.classList.toggle('products-card_active');
        if (element.classList.contains('products-card_active')) {
            showDetailsLink[0].textContent = 'Скрыть детали';
        } else {
            showDetailsLink[0].textContent = 'Показать детали';
        }
    }

});

// reviews swiper

let reviewsSwiper = new Swiper('.reviews-swiper-container', {
    grabCursor: false,
    loop: true,
    centeredSlides: true,
    slidesPerView: 2,
    spaceBetween: 50,
    navigation: {
        nextEl: '.reviews-next-btn',
        prevEl: '.reviews-prev-btn',
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 50
        },
        800: {
            slidesPerView: 1.4,
            spaceBetween: 20
        },
        1024: {
            slidesPerView: 2,
        },
    },
});

// stars rating

let starsLists = [...document.querySelectorAll('.stars-list')];

starsLists.forEach(element => {
    let rateNumber = element.dataset.rating;
    let starsListItems = [...element.querySelectorAll('.stars-list__item')];
    for (let i = 0; i < rateNumber; i++) {
        starsListItems[i].classList.add('stars-list__item_active');
    }
});

// FAQ accordion

let faqAccordionItems = [...document.querySelectorAll('.faq-accordion__item')];

faqAccordionItems.forEach(element => {
    let faqAccordionHeader = element.querySelector('.faq-accordion__header');
    faqAccordionHeader.onclick = function() {
        faqAccordionHeader.classList.toggle('faq-accordion__header_active');
    }
});


// smooth scroll

const anchors = document.querySelectorAll('a[href*="#"]')
for (let anchor of anchors) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const sectionId = anchor.getAttribute('href').substr(1);
        if (sectionId) {
            document.getElementById(sectionId).scrollIntoView( {
                behavior: 'smooth',
                block: 'start'
            });
        }
  });
}

// pagination

let paginationLinks = [...document.querySelectorAll('.pagination__link')];
let sections = [...document.querySelectorAll('.section')];

function isVisible(elem) {
    let coords = elem.getBoundingClientRect();
    let windowHeight = document.documentElement.clientHeight;
    let topVisible = coords.top > 0 && coords.top < windowHeight;
    return topVisible;
}

window.onscroll = function () {
    if (pageYOffset == 0) {
        paginationLinks.forEach(element => {
            element.classList.remove('pagination__link_active');
        });
        paginationLinks[0].classList.add('pagination__link_active');
    } else {
        paginationLinks.forEach(element => {
            element.classList.remove('pagination__link_active');
        });
        for (let i = 0; i < sections.length; i++) {
            let section = sections[i];
            if (isVisible(section)) {
                paginationLinks[i+1].classList.add('pagination__link_active');
                break;
            }
        }
    }
}

// products

let allProducts = [];
productsCards.forEach(element => {
    let productObject = {};
    productObject.name = element.querySelector('.products-card__title').textContent.trim();
    productObject.descr = element.querySelector('.products-card__text').textContent.trim();
    productObject.price = element.querySelector('.products-card__prise').textContent.trim();
    productObject.picSrc = element.querySelector('img').getAttribute('src').trim();
    allProducts.push(productObject);
});
function uniqueName(arr) {
    let result = [];
    let unique = [];
    for (let str of arr) {
        let strName = str.name;
        if (!unique.includes(strName)) {
            unique.push(strName);
            result.push(str);
        }
    }
    return result;
}
let uniqueProducts = uniqueName(allProducts);


// order popup

let orderPopup = document.querySelector('.order-popup');

function currentCard(str) {

    let currentProduct = uniqueProducts.filter(uniqueProduct => uniqueProduct.name == str)[0];
    let orderPopupCardPic = orderPopup.querySelector('img');
    let orderPopupCardTitle = orderPopup.querySelector('.order-popup-product-card__title');
    let orderPopupCardText = orderPopup.querySelector('.order-popup-product-card__text');
    let orderPopupCardPrice = orderPopup.querySelector('.order-popup-product-card__price');

    orderPopupCardPic.setAttribute('src', currentProduct.picSrc);
    orderPopupCardTitle.textContent = currentProduct.name;
    orderPopupCardText.textContent = currentProduct.descr;
    orderPopupCardPrice.textContent = currentProduct.price;
}


function popupFade() {
    orderPopup.classList.toggle('order-popup_fade');
}

productsCards.forEach(element => {
    let orderBtn = element.querySelector('.order-btn__link');

    orderBtn.onclick = () => {
        let currentStep = 1;
        let popupFirstStep = orderPopup.querySelector('.first-step');
        let popupSecondStep = orderPopup.querySelector('.second-step');
        let popupThirdStep = orderPopup.querySelector('.third-step');
        let popupSteps = [...orderPopup.querySelectorAll('.popup-form-step')];
        let popupStepsItems = [...orderPopup.querySelectorAll('.order-popup-steps__item')];
        let popupStepsNext =  orderPopup.querySelector('.next-step-btn__link'); 
        let popupStepsPrev =  orderPopup.querySelector('.prev-step-btn__link');
        let popupStepsOrder = orderPopup.querySelector('.popup-order-btn__link');

        function stepSwitch(step) {
            switch (step) {
                case 1:
                    popupSteps.forEach(element => {
                        element.classList.remove('popup-form-step_active');
                    });
                    popupFirstStep.classList.add('popup-form-step_active');
                    popupStepsNext.classList.add('step-btn__link_active');
                    popupStepsPrev.classList.remove('step-btn__link_active');
                    popupStepsOrder.classList.remove('step-btn__link_active');
                    popupStepsItems.forEach(element => {
                        element.classList.remove('order-popup-steps__item_active');
                    });
                    for (let i = 0; i < step; i++) {
                        popupStepsItems[i].classList.add('order-popup-steps__item_active');
                    }
                    break;
                case 2:
                    popupSteps.forEach(element => {
                        element.classList.remove('popup-form-step_active');
                    });
                    popupSecondStep.classList.add('popup-form-step_active');
                    popupStepsPrev.classList.add('step-btn__link_active');
                    popupStepsNext.classList.add('step-btn__link_active');
                    popupStepsOrder.classList.remove('step-btn__link_active');
                    popupStepsItems.forEach(element => {
                        element.classList.remove('order-popup-steps__item_active');
                    });
                    for (let i = 0; i < step; i++) {
                        popupStepsItems[i].classList.add('order-popup-steps__item_active');
                    }
                    break;
                case 3:
                    popupSteps.forEach(element => {
                        element.classList.remove('popup-form-step_active');
                    });
                    popupThirdStep.classList.add('popup-form-step_active');
                    popupStepsNext.classList.remove('step-btn__link_active');
                    popupStepsOrder.classList.add('step-btn__link_active');
                    popupStepsItems.forEach(element => {
                        element.classList.remove('order-popup-steps__item_active');
                    });
                    for (let i = 0; i < step; i++) {
                        popupStepsItems[i].classList.add('order-popup-steps__item_active');
                    }
                    break;
                default:
                    break;
            }
        }
        popupStepsNext.addEventListener('click', function() {
            currentStep++;
            stepSwitch(currentStep);
        });
        popupStepsPrev.addEventListener('click', function() {
            currentStep--;
            stepSwitch(currentStep);
        });

        orderPopup.classList.add('order-popup_active');
        body.classList.add('no-scroll');
        let productsCardTitle = element.querySelector('.products-card__title').textContent.trim();
        stepSwitch(currentStep);
        currentCard(productsCardTitle);
        setTimeout(popupFade, 200);

        orderPopup.onclick = (event) => {
            if (event.target == orderPopup) {
                popupFade();
                orderPopup.classList.remove('order-popup_active');
                body.classList.remove('no-scroll');
                currentStep = 1;
            }    
        }
    }
});


// popup selects

let popupSelects = orderPopup.querySelectorAll('.popup-select');
for (let i = 0; i < popupSelects.length; i++) {
    let popupSelect = popupSelects[i];
    let popupSelectHeader = popupSelect.querySelector('.popup-select__header');
    let popupSelectHeaderTitle = popupSelectHeader.querySelector('.popup-select__header-title');
    let popupSelectItems = [...popupSelect.querySelectorAll('.popup-select__item')];


    popupSelectHeader.onclick = () => {
        popupSelectHeader.classList.toggle('popup-select_active')
    }
    popupSelectItems.forEach(element => {
        element.onclick = () => {
            popupSelect.dataset.selectedValue = element.dataset.itemValue;
            popupSelectHeaderTitle.textContent = element.textContent;
            popupSelectHeader.classList.toggle('popup-select_active');
            if (popupSelect.classList.contains('popup-select__product')) {
                currentCard(popupSelect.dataset.selectedValue);
            } 
        }
    });
}




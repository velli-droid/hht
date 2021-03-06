<?php
/*
Template Name: Главная
*/
?>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Home Health Test
 */

get_header();
?>
    <section class="intro section-bg" id="intro">
        <div class="section-bg__pic">
            <img src="img/intro_bg.png" alt="">
        </div>
        <div class="container">
            <div class="intro__inner">
                <div class="intro__content">
                    <div class="intro__title">
                        <h1>Проверьте состояние своего здоровья, не выходя из дома</h1>
                    </div>
                    <div class="intro__subtitle">
                        <p>Достоверные медицинские исследования для здоровой жизни</p>
                    </div>
                    <div class="intro__btn">
                        <a href="#how" class="intro__link btn__link nav-link">
                            Узнать как
                        </a>
                    </div>
                </div>
                <div class="intro__pic">
                    <img src="img/intro.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="how section" id="how">
        <div class="container">
            <div class="how__inner section__inner">
                <div class="section__title how__title">
                    <h2>Как это работает?</h2>
                </div>
                <div class="how__list">
                    <div class="how__item">
                        <div class="how__num">
                            01
                        </div>
                        <div class="how__pic">
                            <img src="img/Medicine-rafiki 1.png" alt="">
                        </div>
                        <div class="how__text">
                            <p>Закажите интересующее вас исследование и 
                            получите удобным способом набор для сбора анализа</p>
                        </div>
                    </div>
                    <div class="how__item">
                        <div class="how__num">
                            02
                        </div>
                        <div class="how__pic">
                            <img src="img/Group 92.png" alt="">
                        </div>
                        <div class="how__text">
                            <p>Следуя инструкции безопасно и безболезненно 
                            соберите биоматериал и закажите курьера для забора 
                            вашего анализа</p>
                        </div>
                    </div>
                    <div class="how__item">
                        <div class="how__num">
                            03
                        </div>
                        <div class="how__pic">
                            <img src="img/Group 91.png" alt="">
                        </div>
                        <div class="how__text">
                            <p>Получите результаты анализов в вашем личном 
                            кабинете на следующий день с подробным 
                            заключением и получите бесплатную консультацию 
                            с профильным врачом</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages section-bg section" id="advantages">
        <div class="section-bg__pic">
            <img src="img/Rectangle 105.png" alt="">
        </div>
        <div class="container">
            <div class="advantages__inner section__inner">
                <div class="section__title advantages__title">
                    <h2>Почему с нами легче следить за своим здоровьем?</h2>
                </div>
                <div class="advantages__list">
                    <div class="advantages__item">
                        <div class="advantages__pic">
                            <img src="img/adv1.png" alt="">
                        </div>
                        <div class="advantages__text">
                            <b>Минимальные сроки <br> получения результатов</b> <br>
                            За 1-2 дня мы предоставим <br> вам результаты
                        </div>
                    </div>
                    <div class="advantages__item">
                        <div class="advantages__pic">
                            <img src="img/adv2.png" alt="">
                        </div>
                        <div class="advantages__text">
                            <b>Консультация с врачом входит в стоимость</b> <br>
                            Мы даем знания, а не голые цифры

                        </div>
                    </div>
                    <div class="advantages__item">
                        <div class="advantages__pic">
                            <img src="img/adv3.png" alt="">
                        </div>
                        <div class="advantages__text">
                            <b>Минимальные сроки получения результатов</b> 
                            За 1-2 дня мы предоставим вам результаты
                        </div>
                    </div>
                    <div class="advantages__item">
                        <div class="advantages__pic">
                            <img src="img/adv4.png" alt="">
                        </div>
                        <div class="advantages__text">
                            <b>Минимальные сроки получения результатов</b> 
                            За 1-2 дня мы предоставим вам результаты
                        </div>
                    </div>
                    <div class="advantages__item">
                        <div class="advantages__pic">
                            <img src="img/adv5.png" alt="">
                        </div>
                        <div class="advantages__text">
                            <b>Минимальные сроки получения результатов</b> 
                            За 1-2 дня мы предоставим вам результаты
                        </div>
                    </div>
                    <div class="advantages__item">
                        <div class="advantages__pic">
                            <img src="img/adv6.png" alt="">
                        </div>
                        <div class="advantages__text">
                            <b>Минимальные сроки получения результатов</b> 
                            За 1-2 дня мы предоставим вам результаты
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="products section" id="products">
        <div class="container">
            <div class="section__inner products__inner">
                <div class="section__title products__title">
                    <h2>Наши исследования</h2>
                </div>
                <div class="products-slider">
                    <div class="products-swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                               <div class="products-card">
                                    <div class="products-card__popular">
                                        Популярный
                                    </div>
                                    <div class="products-card__pic">
                                        <a href="#" class="show-details__link">
                                            Показать детали
                                        </a>
                                        <img src="img/prod1.png" alt="">
                                    </div>
                                    <div class="products-card__descr">
                                        <div class="products-card__title">
                                            Тест на COVID-19 
                                        </div>
                                        <div class="products-card__text">
                                            ПЦР тест на SARS наличие вируса
                                        </div>
                                        <div class="products-card__details">
                                            Lorem ipsum dolor sit amet consectetur adipisicing. Lorem ipsum dolor sit amet consectetur adipisicing.
                                            Lorem ipsum dolor sit amet consectetur adipisicing. Lorem ipsum dolor sit amet consectetur adipisicing. Lorem ipsum dolor sit amet consectetur adipisicing.
                                            Lorem ipsum dolor sit amet consectetur adipisicing.
                                            Lorem ipsum dolor sit amet consectetur adipisicing. Lorem ipsum dolor sit amet consectetur adipisicing.
                                            Lorem ipsum dolor sit amet consectetur adipisicing. Lorem ipsum dolor sit amet consectetur adipisicing. Lorem ipsum dolor sit amet consectetur adipisicing.
                                            Lorem ipsum dolor sit amet consectetur adipisicing.
                                        </div>
                                        <div class="products-card__bottom">
                                            <div class="products-card__prise">
                                                1400 руб.
                                            </div>
                                            <div class="products-card__order-btn">
                                                <a href="#" class="order-btn__link btn__link">
                                                    Заказать
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                               </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="products-card">
                                    <div class="products-card__pic">
                                        <a href="#" class="show-details__link">
                                            Показать детали
                                        </a>
                                        <img src="img/prod2.png" alt="">
                                    </div>
                                    <div class="products-card__descr">
                                        <div class="products-card__title">
                                            Комплекс исследований
                                        </div>
                                        <div class="products-card__text">
                                            5 видов интиных заболеваний
                                        </div>
                                        <div class="products-card__details">
                                            Lorem ipsum dolor sit amet consectetur adipisicing. Lorem ipsum dolor sit amet consectetur adipisicing.
                                            Lorem ipsum dolor sit amet consectetur adipisicing.
                                        </div>
                                        <div class="products-card__bottom">
                                            <div class="products-card__prise">
                                                1400 руб.
                                            </div>
                                            <div class="products-card__order-btn">
                                                <a href="#" class="order-btn__link btn__link">
                                                    Заказать
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="products-card">
                                    <div class="products-card__pic">
                                        <a href="#" class="show-details__link">
                                            <p>Показать детали</p>
                                        </a>
                                        <img src="img/prod3.png" alt="">
                                    </div>
                                    <div class="products-card__descr">
                                        <div class="products-card__title">
                                            Общий анализ крови
                                        </div>
                                        <div class="products-card__text">
                                            10 главных показателей состояния вашего здоровья
                                        </div>
                                        <div class="products-card__details">
                                            Lorem ipsum dolor sit amet consectetur adipisicing. Lorem ipsum dolor sit amet consectetur adipisicing.
                                            Lorem ipsum dolor sit amet consectetur adipisicing.
                                        </div>
                                        <div class="products-card__bottom">
                                            <div class="products-card__prise">
                                                1400 руб.
                                            </div>
                                            <div class="products-card__order-btn">
                                                <a href="#" class="order-btn__link btn__link">
                                                    Заказать
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                            <div class="swiper-slide">
                                <div class="products-card">
                                    <div class="products-card__pic">
                                        <a href="#" class="show-details__link">
                                            <p>Показать детали</p>
                                        </a>
                                        <img src="img/prod3.png" alt="">
                                    </div>
                                    <div class="products-card__descr">
                                        <div class="products-card__title">
                                            Общий анализ крови2
                                        </div>
                                        <div class="products-card__text">
                                            10 главных показателей состояния вашего здоровья
                                        </div>
                                        <div class="products-card__details">
                                            Lorem ipsum dolor sit amet consectetur adipisicing. Lorem ipsum dolor sit amet consectetur adipisicing.
                                            Lorem ipsum dolor sit amet consectetur adipisicing.
                                        </div>
                                        <div class="products-card__bottom">
                                            <div class="products-card__prise">
                                                1400 руб.
                                            </div>
                                            <div class="products-card__order-btn">
                                                <a href="#" class="order-btn__link btn__link">
                                                    Заказать
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-control-btns">
                        <div class="products-prev-btn swiper-control-btn">
                            <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 10L10.1877 0L12 1.77894L3.62466 10L12 18.2211L10.1877 20L0 10Z" fill="#5DDEEC"/>
                            </svg>     
                        </div>
                        <div class="products-next-btn swiper-control-btn">
                            <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 10L1.81233 20L0 18.2211L8.37534 10L1.46439e-06 1.77894L1.81233 0L12 10Z" fill="#5DDEEC"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="products__text">
                    Нужна дополнительная помощь? Напишите нам в <a href="#" class="products__link">чате </a> 
                </div>
            </div>
        </div>
    </section>
    <section class="about section" id="about">
        <div class="container">
            <div class="section__inner about__inner">
                <div class="section__title about__title">
                    <h2>О нашей компании</h2>
                </div>
                <div class="about-content">
                    <div class="about-content__left-col">
                        <div class="about-content__title">
                            Мы считаем, что улучшение здоровья начинается дома
                        </div>
                        <div class="about-content__text">
                            <p>Наша миссия - помочь каждому получить доступ к простым 
                            и доступным домашним тестам, чтобы вместе мы могли предотвратить 
                            изменяющие жизнь условия и болезни.</p>
                        </div>
                    </div>
                    <div class="about-content__list">
                        <div class="about-content__item">
                            <div class="about-content__pic">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 35.28C13.104 35.28 6.71997 28.896 6.71997 21C6.71997 13.104 13.104 6.72 21 6.72C28.896 6.72 35.28 13.104 35.28 21C35.28 28.896 28.896 35.28 21 35.28ZM21 8.4C14.028 8.4 8.39997 14.028 8.39997 21C8.39997 27.972 14.028 33.6 21 33.6C27.972 33.6 33.6 27.972 33.6 21C33.6 14.028 27.972 8.4 21 8.4Z" fill="#5DDEEC"/>
                                    <path d="M19.32 27.216L12.012 19.908L13.188 18.732L19.32 24.864L28.812 15.372L29.988 16.548L19.32 27.216Z" fill="#5DDEEC"/>
                                </svg>
                            </div>
                            <div class="about-content__descr">
                                Бережем ваше время для долгой и здоровой жизни
                            </div>
                        </div>
                        <div class="about-content__item">
                            <div class="about-content__pic">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 35.28C13.104 35.28 6.71997 28.896 6.71997 21C6.71997 13.104 13.104 6.72 21 6.72C28.896 6.72 35.28 13.104 35.28 21C35.28 28.896 28.896 35.28 21 35.28ZM21 8.4C14.028 8.4 8.39997 14.028 8.39997 21C8.39997 27.972 14.028 33.6 21 33.6C27.972 33.6 33.6 27.972 33.6 21C33.6 14.028 27.972 8.4 21 8.4Z" fill="#5DDEEC"/>
                                    <path d="M19.32 27.216L12.012 19.908L13.188 18.732L19.32 24.864L28.812 15.372L29.988 16.548L19.32 27.216Z" fill="#5DDEEC"/>
                                </svg>
                            </div>
                            <div class="about-content__descr">
                                Используем самые современные и достоверные методы диагностики
                            </div>
                        </div>
                        <div class="about-content__item">
                            <div class="about-content__pic">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 35.28C13.104 35.28 6.71997 28.896 6.71997 21C6.71997 13.104 13.104 6.72 21 6.72C28.896 6.72 35.28 13.104 35.28 21C35.28 28.896 28.896 35.28 21 35.28ZM21 8.4C14.028 8.4 8.39997 14.028 8.39997 21C8.39997 27.972 14.028 33.6 21 33.6C27.972 33.6 33.6 27.972 33.6 21C33.6 14.028 27.972 8.4 21 8.4Z" fill="#5DDEEC"/>
                                    <path d="M19.32 27.216L12.012 19.908L13.188 18.732L19.32 24.864L28.812 15.372L29.988 16.548L19.32 27.216Z" fill="#5DDEEC"/>
                                </svg>
                            </div>
                            <div class="about-content__descr">
                                Больше 1000 проведенных исследований за 2021 год
                            </div>
                        </div>
                        <div class="about-content__item">
                            <div class="about-content__pic">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 35.28C13.104 35.28 6.71997 28.896 6.71997 21C6.71997 13.104 13.104 6.72 21 6.72C28.896 6.72 35.28 13.104 35.28 21C35.28 28.896 28.896 35.28 21 35.28ZM21 8.4C14.028 8.4 8.39997 14.028 8.39997 21C8.39997 27.972 14.028 33.6 21 33.6C27.972 33.6 33.6 27.972 33.6 21C33.6 14.028 27.972 8.4 21 8.4Z" fill="#5DDEEC"/>
                                    <path d="M19.32 27.216L12.012 19.908L13.188 18.732L19.32 24.864L28.812 15.372L29.988 16.548L19.32 27.216Z" fill="#5DDEEC"/>
                                </svg>
                            </div>
                            <div class="about-content__descr">
                                Поддержка наших<br> клиентов 24/7
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="partners">
        <div class="container">
            <div class="partners__inner">
                <div class="partners__title">
                    <h2>Партнеры</h2>
                </div>
                <div class="partners__list">
                    <div class="partners__item">
                        <a href="#" class="partners__link">
                            <img src="img/Group.png" alt="">
                        </a>
                    </div>
                    <div class="partners__item">
                        <a href="#" class="partners__link">
                            <img src="img/Group2.png" alt="">
                        </a>
                    </div>
                    <div class="partners__item">
                        <a href="#" class="partners__link">
                            <img src="img/еликс 1.png" alt="">
                        </a>
                    </div>
                    <div class="partners__item">
                        <a href="#" class="partners__link">
                            <img src="img/dostavista.ru_logo 1.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="reviews section" id="reviews">
        <div class="container">
            <div class="section__inner reviews__inner">
                <div class="section__title reviews__title">
                    <h2>Отзывы</h2>
                </div>
            </div>
        </div>
        <div class="reviews-slider">
            <div class="reviews-swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                       <div class="reviews-card">
                            <div class="reviews-card__pic">
                                <img src="img/avatar.png" alt="">
                            </div>
                            <div class="reviews-card__content">
                                <div class="reviews-card__title">
                                    HH.Tests потрясающий1!
                                </div>
                                <div class="reviews-card__text">
                                    Выполнить тест очень оказалось просто, 
                                    результаты были представлены вовремя, все 
                                    круто упаковано и доступно. У меня не возникло 
                                    проблем. Я НАСТОЯТЕЛЬНО рекомендую воспользоваться 
                                </div>
                                <div class="reviews-card__name">
                                    Сергей
                                </div>
                                <div class="reviews-card__rating">
                                    <div class="reviews-card__rating-title">
                                        Оценка
                                    </div>
                                    <div class="stars-list" data-rating="5">
                                        <div class="stars-list__item">
                                            <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.5 0L14.0819 7.9463H22.4371L15.6776 12.8574L18.2595 20.8037L11.5 15.8926L4.74047 20.8037L7.32238 12.8574L0.56285 7.9463H8.91809L11.5 0Z" fill="#FFCE00"/>
                                            </svg>
                                        </div>
                                        <div class="stars-list__item">
                                            <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.5 0L14.0819 7.9463H22.4371L15.6776 12.8574L18.2595 20.8037L11.5 15.8926L4.74047 20.8037L7.32238 12.8574L0.56285 7.9463H8.91809L11.5 0Z" fill="#FFCE00"/>
                                            </svg>
                                        </div>
                                        <div class="stars-list__item">
                                            <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.5 0L14.0819 7.9463H22.4371L15.6776 12.8574L18.2595 20.8037L11.5 15.8926L4.74047 20.8037L7.32238 12.8574L0.56285 7.9463H8.91809L11.5 0Z" fill="#FFCE00"/>
                                            </svg>
                                        </div>
                                        <div class="stars-list__item">
                                            <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.5 0L14.0819 7.9463H22.4371L15.6776 12.8574L18.2595 20.8037L11.5 15.8926L4.74047 20.8037L7.32238 12.8574L0.56285 7.9463H8.91809L11.5 0Z" fill="#FFCE00"/>
                                            </svg>
                                        </div>
                                        <div class="stars-list__item">
                                            <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.5 0L14.0819 7.9463H22.4371L15.6776 12.8574L18.2595 20.8037L11.5 15.8926L4.74047 20.8037L7.32238 12.8574L0.56285 7.9463H8.91809L11.5 0Z" fill="#FFCE00"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       </div>
                    </div> 
                    <div class="swiper-slide">
                        <div class="reviews-card">
                            <div class="reviews-card__pic">
                                <img src="img/avatar.png" alt="">
                            </div>
                            <div class="reviews-card__content">
                                <div class="reviews-card__title">
                                    HH.Tests потрясающий2!
                                </div>
                                <div class="reviews-card__text">
                                    Выполнить тест очень оказалось просто, 
                                    результаты были представлены вовремя, все 
                                    круто упаковано и доступно. У меня не возникло 
                                    проблем. Я НАСТОЯТЕЛЬНО рекомендую воспользоваться 
                                </div>
                                <div class="reviews-card__name">
                                    Сергей
                                </div>
                                <div class="reviews-card__rating">
                                    <div class="reviews-card__rating-title">
                                        Оценка
                                    </div>
                                    <div class="stars-list" data-rating="5">
                                        <div class="stars-list__item">
                                            <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.5 0L14.0819 7.9463H22.4371L15.6776 12.8574L18.2595 20.8037L11.5 15.8926L4.74047 20.8037L7.32238 12.8574L0.56285 7.9463H8.91809L11.5 0Z" fill="#FFCE00"/>
                                            </svg>
                                        </div>
                                        <div class="stars-list__item">
                                            <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.5 0L14.0819 7.9463H22.4371L15.6776 12.8574L18.2595 20.8037L11.5 15.8926L4.74047 20.8037L7.32238 12.8574L0.56285 7.9463H8.91809L11.5 0Z" fill="#FFCE00"/>
                                            </svg>
                                        </div>
                                        <div class="stars-list__item">
                                            <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.5 0L14.0819 7.9463H22.4371L15.6776 12.8574L18.2595 20.8037L11.5 15.8926L4.74047 20.8037L7.32238 12.8574L0.56285 7.9463H8.91809L11.5 0Z" fill="#FFCE00"/>
                                            </svg>
                                        </div>
                                        <div class="stars-list__item">
                                            <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.5 0L14.0819 7.9463H22.4371L15.6776 12.8574L18.2595 20.8037L11.5 15.8926L4.74047 20.8037L7.32238 12.8574L0.56285 7.9463H8.91809L11.5 0Z" fill="#FFCE00"/>
                                            </svg>
                                        </div>
                                        <div class="stars-list__item">
                                            <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.5 0L14.0819 7.9463H22.4371L15.6776 12.8574L18.2595 20.8037L11.5 15.8926L4.74047 20.8037L7.32238 12.8574L0.56285 7.9463H8.91809L11.5 0Z" fill="#FFCE00"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div> 
                     <div class="swiper-slide">
                        <div class="reviews-card">
                            <div class="reviews-card__pic">
                                <img src="img/avatar.png" alt="">
                            </div>
                            <div class="reviews-card__content">
                                <div class="reviews-card__title">
                                    Lorem ipsum dolor sit.
                                </div>
                                <div class="reviews-card__text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Earum, vel sint. Earum totam minus veniam facere possimus 
                                    exercitationem? Voluptatum porro vero ducimus, omnis incidunt 
                                    nesciunt, maxime cupiditate a deleniti minima illum perferendis, 
                                    natus ea dolor iste tempore rerum! Laboriosam, placeat.
                                </div>
                                <div class="reviews-card__name">
                                    Сергей
                                </div>
                                <div class="reviews-card__rating">
                                    <div class="reviews-card__rating-title">
                                        Оценка
                                    </div>
                                    <div class="stars-list" data-rating="5">
                                        <div class="stars-list__item">
                                            <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.5 0L14.0819 7.9463H22.4371L15.6776 12.8574L18.2595 20.8037L11.5 15.8926L4.74047 20.8037L7.32238 12.8574L0.56285 7.9463H8.91809L11.5 0Z" fill="#FFCE00"/>
                                            </svg>
                                        </div>
                                        <div class="stars-list__item">
                                            <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.5 0L14.0819 7.9463H22.4371L15.6776 12.8574L18.2595 20.8037L11.5 15.8926L4.74047 20.8037L7.32238 12.8574L0.56285 7.9463H8.91809L11.5 0Z" fill="#FFCE00"/>
                                            </svg>
                                        </div>
                                        <div class="stars-list__item">
                                            <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.5 0L14.0819 7.9463H22.4371L15.6776 12.8574L18.2595 20.8037L11.5 15.8926L4.74047 20.8037L7.32238 12.8574L0.56285 7.9463H8.91809L11.5 0Z" fill="#FFCE00"/>
                                            </svg>
                                        </div>
                                        <div class="stars-list__item">
                                            <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.5 0L14.0819 7.9463H22.4371L15.6776 12.8574L18.2595 20.8037L11.5 15.8926L4.74047 20.8037L7.32238 12.8574L0.56285 7.9463H8.91809L11.5 0Z" fill="#FFCE00"/>
                                            </svg>
                                        </div>
                                        <div class="stars-list__item">
                                            <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.5 0L14.0819 7.9463H22.4371L15.6776 12.8574L18.2595 20.8037L11.5 15.8926L4.74047 20.8037L7.32238 12.8574L0.56285 7.9463H8.91809L11.5 0Z" fill="#FFCE00"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div> 
                </div>
            </div>
            <div class="swiper-control-btns">
                <div class="reviews-prev-btn swiper-control-btn">
                    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 10L10.1877 0L12 1.77894L3.62466 10L12 18.2211L10.1877 20L0 10Z" fill="#5DDEEC"/>
                    </svg>     
                </div>
                <div class="reviews-next-btn swiper-control-btn">
                    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 10L1.81233 20L0 18.2211L8.37534 10L1.46439e-06 1.77894L1.81233 0L12 10Z" fill="#5DDEEC"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <section class="discount section" id="discount">
        <div class="container">
            <div class="discount__inner">
                <div class="discount__title">
                    <h2>Начните путь к здоровой жизни уже сегодня!</h2>
                </div>
                <div class="discount__subtitle">
                    ЗАКАЖИТЕ ПЕРВОЕ ИССЛЕДОВАНИЕ <br> С 10% СКИДКОЙ
                </div>
                <div class="discount__btn">
                    <a href="#" class="discount__link btn__link">
                        Заказать
                    </a>
                </div>
                <div class="discount__pic">
                    <svg width="715" height="521" viewBox="0 0 715 521" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M107.414 350.518C107.407 351.848 107.007 353.145 106.264 354.247C105.521 355.349 104.468 356.205 103.238 356.708C102.009 357.211 100.658 357.338 99.3561 357.073C98.0544 356.807 96.8606 356.162 95.9257 355.217C94.9907 354.273 94.3566 353.073 94.1035 351.768C93.8504 350.463 93.9897 349.112 94.5038 347.886C95.0178 346.661 95.8835 345.615 96.9915 344.882C98.0994 344.148 99.3998 343.76 100.728 343.766C101.61 343.77 102.483 343.948 103.296 344.29C104.11 344.631 104.848 345.13 105.468 345.757C106.089 346.384 106.581 347.127 106.914 347.944C107.248 348.761 107.418 349.636 107.414 350.518Z" fill="#E0E0E0"/>
                        <path d="M87.2846 341.88C88.998 340.038 91.0669 338.562 93.3663 337.542C95.6658 336.522 98.1479 335.979 100.663 335.946C103.178 335.913 105.674 336.39 107.999 337.349C110.324 338.308 112.431 339.729 114.193 341.526C117.619 344.985 122.982 339.671 119.556 336.212C117.091 333.72 114.153 331.748 110.915 330.411C107.677 329.075 104.204 328.401 100.701 328.429C97.1981 328.457 93.7363 329.187 90.5199 330.575C87.3035 331.964 84.3977 333.983 81.9738 336.514C78.6312 340.036 83.9315 345.413 87.2846 341.88Z" fill="#E0E0E0"/>
                        <path d="M64.5002 310.631C74.7053 301.805 86.8785 296.251 100.52 296.22C114.112 296.058 127.255 301.088 137.269 310.287C140.809 313.611 146.182 308.307 142.631 304.973C131.197 294.367 116.152 288.524 100.562 288.634C84.8583 288.634 70.9148 295.094 59.1894 305.233C55.5031 308.422 60.8347 313.767 64.5002 310.599V310.631Z" fill="#E0E0E0"/>
                        <path d="M73.4974 327.949C76.8996 324.152 81.051 321.101 85.6898 318.989C90.3285 316.877 95.3542 315.749 100.45 315.677C105.546 315.604 110.602 316.589 115.299 318.568C119.995 320.548 124.232 323.479 127.74 327.178C131.135 330.668 136.498 325.344 133.103 321.863C128.897 317.46 123.831 313.968 118.219 311.604C112.608 309.241 106.571 308.056 100.484 308.123C94.3961 308.19 88.3871 309.509 82.8296 311.996C77.272 314.483 72.2844 318.087 68.1761 322.582C64.8855 326.146 70.1859 331.523 73.4974 327.949Z" fill="#E0E0E0"/>
                        <path d="M726.341 50.3182V171.545H552.334L546.065 51.1623L726.341 50.3182Z" fill="#E0E0E0"/>
                        <path d="M546.065 51.1622V171.294H720.072V51.1622L546.065 51.1622Z" fill="white"/>
                        <path d="M720.905 172.118H545.242V50.3391H720.905V172.118ZM546.888 170.471H719.249V51.9959H546.888V170.471Z" fill="#E0E0E0"/>
                        <path d="M701.234 66.0941H564.913V156.373H701.234V66.0941Z" fill="white"/>
                        <path d="M701.224 66.0941H700.557H698.62L691.133 66.1462L663.017 66.2504L564.892 66.4484L565.288 66.0524C565.288 93.6341 565.288 124.196 565.288 156.321L564.861 155.883L701.172 155.977L700.838 156.321C700.911 128.843 700.974 106.305 701.015 90.6749C701.015 82.8286 701.078 76.7121 701.099 72.5128C701.099 70.4288 701.099 68.845 701.099 67.7404C701.099 66.6359 701.099 66.0837 701.099 66.0837C701.099 66.0837 701.099 66.6047 701.099 67.6675C701.099 68.7303 701.099 70.3246 701.099 72.3773C701.099 76.5453 701.099 82.6515 701.182 90.456C701.182 106.201 701.286 128.791 701.359 156.363V156.706H701.015L564.705 156.79H564.278V156.363C564.278 124.238 564.278 93.6758 564.278 66.0941V65.6981H564.674L663.059 65.8857L691.06 66.0003H698.464H700.359C701.026 66.0732 701.224 66.0941 701.224 66.0941Z" fill="#E0E0E0"/>
                        <path d="M546.065 50.8289C547.135 51.3531 548.138 52.0038 549.053 52.767C550.834 54.0591 553.219 55.893 555.874 57.977C558.529 60.061 560.8 62.0512 562.424 63.5413C563.359 64.2827 564.195 65.1406 564.913 66.0942C564.746 66.2713 560.57 62.8223 555.343 58.6439C550.116 54.4654 545.909 51.0581 546.065 50.8289Z" fill="#E0E0E0"/>
                        <path d="M720.072 51.1623C720.217 51.3498 716.125 54.8405 710.918 58.9669C705.712 63.0932 701.38 66.2609 701.224 66.0942C701.067 65.9274 705.181 62.4159 710.387 58.2896C715.594 54.1632 719.926 50.9747 720.072 51.1623Z" fill="#E0E0E0"/>
                        <path d="M719.936 171.315L700.536 155.581L719.936 171.315Z" fill="white"/>
                        <path d="M700.536 155.581C700.682 155.394 705.149 158.77 710.502 163.104C715.854 167.439 720.082 171.128 719.936 171.315C719.79 171.503 715.323 168.127 709.96 163.782C704.597 159.436 700.39 155.758 700.536 155.581Z" fill="#E0E0E0"/>
                        <path d="M546.065 171.294C545.919 171.107 549.97 167.647 555.124 163.573C560.279 159.499 564.569 156.342 564.715 156.529C564.861 156.717 560.81 160.176 555.655 164.251C550.501 168.325 546.211 171.482 546.065 171.294Z" fill="#E0E0E0"/>
                        <path d="M592.592 94.2177V124.446H678.366V94.2177H592.592Z" fill="#E0E0E0"/>
                        <path d="M687.905 361.428C694.028 358.302 701.244 357.854 708.044 358.98C711.699 359.584 715.511 360.678 717.999 363.418C720.488 366.159 720.957 371.004 718.103 373.359C716.406 374.766 714.032 374.985 711.855 374.953C706.534 374.891 700.62 373.911 696.371 377.162C693.945 378.986 692.331 382.029 689.425 382.935C686.52 383.842 683.385 382.133 681.876 379.569C680.507 376.91 680.205 373.827 681.032 370.952C681.365 368.941 682.159 367.035 683.352 365.383C684.544 363.731 686.102 362.377 687.905 361.428Z" fill="#EBEBEB"/>
                        <path d="M673.868 334.305C677.606 339.661 684.895 337.889 688.269 334.617C691.643 331.346 693.07 326.615 694.371 322.113C697.339 311.798 700.338 300.961 698.131 290.458C697.595 287.271 696.194 284.293 694.08 281.851C693.012 280.646 691.647 279.744 690.121 279.234C688.595 278.724 686.962 278.623 685.385 278.943C681.709 279.923 679.428 283.518 677.783 286.936C672.919 297.044 670.371 308.112 670.327 319.331C670.327 324.541 670.921 330.022 673.868 334.326" fill="#EBEBEB"/>
                        <path d="M663.569 341.984C667.64 337.16 668.411 330.106 666.599 324.062C664.787 318.018 660.705 312.861 655.988 308.651C650.442 303.711 643.987 299.899 636.984 297.429C634.273 296.331 631.355 295.837 628.434 295.98C626.975 296.064 625.558 296.504 624.308 297.262C623.057 298.019 622.011 299.071 621.26 300.325C619.26 304.139 621.176 308.766 623.259 312.548C626.924 319.202 631.102 325.56 635.755 331.564C639.504 336.389 643.784 341.151 649.49 343.339C655.197 345.527 661.111 345.256 664.142 341.307" fill="#EBEBEB"/>
                        <path d="M673.607 415.081C673.812 414.287 673.927 413.472 673.951 412.653C674.118 410.882 674.336 408.662 674.597 406.015C674.924 402.744 675.421 399.492 676.086 396.273C676.958 392.364 678.142 388.531 679.626 384.811C681.079 381.078 683.053 377.57 685.489 374.391C687.477 371.81 690.013 369.703 692.914 368.222C694.881 367.248 696.99 366.591 699.162 366.274C699.98 366.239 700.792 366.124 701.588 365.93C700.768 365.837 699.94 365.837 699.12 365.93C696.867 366.103 694.663 366.679 692.612 367.628C689.555 369.081 686.875 371.221 684.781 373.88C682.244 377.098 680.195 380.672 678.699 384.488C677.198 388.277 676.024 392.189 675.19 396.179C674.559 399.435 674.128 402.727 673.899 406.036C673.691 408.86 673.607 411.142 673.566 412.726C673.503 413.51 673.517 414.299 673.607 415.081Z" fill="#E0E0E0"/>
                        <path d="M674.065 409.975C674.127 409.603 674.148 409.226 674.128 408.85V405.619C674.128 402.816 674.128 398.763 674.263 393.751C674.513 383.737 675.378 372.963 677.044 357.771C678.616 343.475 680.73 326.855 682.969 316.039C683.448 313.58 683.927 311.371 684.375 309.432C684.822 307.494 685.187 305.817 685.541 304.462C685.895 303.107 686.093 302.149 686.291 301.336C686.402 300.977 686.468 300.606 686.489 300.232C686.318 300.563 686.186 300.913 686.093 301.274C685.853 302.086 685.541 303.107 685.166 304.4C684.791 305.692 684.323 307.411 683.833 309.339C683.344 311.266 682.792 313.507 682.271 315.935C679.498 328.72 677.412 341.646 676.023 354.655C674.357 369.879 673.607 383.737 673.534 393.782C673.482 398.805 673.534 402.869 673.711 405.672C673.795 406.984 673.857 408.047 673.909 408.891C673.92 409.257 673.973 409.621 674.065 409.975Z" fill="#E0E0E0"/>
                        <path d="M674.138 383.237C674.22 382.113 674.22 380.985 674.138 379.861C674.013 377.694 673.722 374.557 673.097 370.723C672.351 366.231 671.353 361.786 670.109 357.406C668.659 352.024 666.8 346.76 664.548 341.661C660.682 332.256 655.146 323.628 648.209 316.195C647.002 314.923 645.715 313.73 644.356 312.621C643.773 312.121 643.253 311.631 642.721 311.235L641.232 310.193C640.337 309.511 639.386 308.905 638.389 308.38C638.233 308.599 642.409 311.058 647.689 316.716C654.404 324.204 659.792 332.785 663.621 342.089C665.832 347.168 667.7 352.39 669.213 357.719C670.48 362.056 671.523 366.455 672.337 370.9C673.035 374.693 673.441 377.798 673.68 379.945C673.744 381.053 673.897 382.154 674.138 383.237Z" fill="#E0E0E0"/>
                        <path d="M648.303 430.409L650.979 467.118H698.11L700.786 430.409H648.303Z" fill="#E0E0E0"/>
                        <path d="M706.409 415.935H643.752V430.409H706.409V415.935Z" fill="#E0E0E0"/>
                        <path d="M643.752 465.712V469.723H646.699H705.379V465.712H643.752Z" fill="#EBEBEB"/>
                        <path d="M649.584 476.778L646.699 469.723H703.129L699.766 476.778H649.584Z" fill="#E0E0E0"/>
                        <path d="M699.912 442.402C699.856 442.523 699.782 442.636 699.693 442.735C699.505 442.985 699.276 443.298 698.985 443.673L696.246 447.195L696.121 447.351L696.007 447.185L689.259 437.807H689.644L683.011 447.185L682.802 447.476L682.563 447.206L674.69 437.828H675.138L674.711 438.38L667.672 447.206L667.432 447.508L667.214 447.195L660.57 437.817H660.955L652.781 447.143L652.635 447.31L652.52 447.133L649.959 442.85C649.688 442.381 649.469 442.006 649.303 441.704C649.136 441.402 649.084 441.308 649.105 441.297C649.211 441.407 649.302 441.529 649.376 441.662L650.105 442.767C650.761 443.809 651.656 445.215 652.791 446.987H652.531L660.591 437.546L660.789 437.307L660.976 437.567C663.059 440.412 665.266 443.559 667.672 446.945H667.224L674.253 438.098L674.68 437.546L674.909 437.265L675.138 437.546L682.99 446.924H682.553L689.259 437.546L689.457 437.265L689.644 437.546L696.246 446.976H696.007L698.87 443.559C699.172 443.194 699.432 442.902 699.63 442.673C699.828 442.444 699.901 442.392 699.912 442.402Z" fill="#F5F5F5"/>
                        <path d="M701.442 430.158C701.442 430.325 689.633 430.461 675.076 430.461C660.518 430.461 648.751 430.346 648.751 430.158C648.751 429.971 660.559 429.867 675.128 429.867C689.696 429.867 701.442 430.002 701.442 430.158Z" fill="#F5F5F5"/>
                        <path d="M703.827 470.119C703.827 470.275 690.987 470.411 675.159 470.411C659.331 470.411 646.501 470.275 646.501 470.119C646.501 469.963 659.331 469.827 675.159 469.827C690.987 469.827 703.827 469.942 703.827 470.119Z" fill="#F5F5F5"/>
                        <path d="M66.3122 391.417V438.87H58.3981V444.028H66.3122V475.788H214.327V446.883H203.362V440.631H214.327V431.19H219.201V426.897H213.411V391.469L66.3122 391.417Z" fill="#F5F5F5"/>
                        <path d="M175.027 391.552V475.256H214.327V446.362H203.362V440.589L214.327 440.787V431.346H219.294L219.201 426.47L213.411 426.324V391.417L175.027 391.552Z" fill="#E0E0E0"/>
                        <path d="M177.828 443.34C177.828 443.632 151.045 443.871 118.014 443.871C84.9832 443.871 58.1897 443.632 58.1897 443.34C58.1897 443.048 84.9624 442.819 118.014 442.819C151.066 442.819 177.828 443.059 177.828 443.34Z" fill="#E0E0E0"/>
                        <path d="M177.828 438.526C177.828 438.818 151.045 439.047 118.014 439.047C84.9832 439.047 58.1897 438.818 58.1897 438.526C58.1897 438.234 84.9624 437.994 118.014 437.994C151.066 437.994 177.828 438.234 177.828 438.526Z" fill="#E0E0E0"/>
                        <path d="M185.503 425.553C185.503 425.845 158.72 426.074 125.689 426.074C92.6579 426.074 65.8748 425.845 65.8748 425.553C65.8748 425.261 92.6474 425.021 125.689 425.021C158.73 425.021 185.503 425.261 185.503 425.553Z" fill="#E0E0E0"/>
                        <path d="M186.243 460.897C186.243 461.189 159.459 461.429 126.428 461.429C93.3972 461.429 66.6454 461.189 66.6454 460.897C66.6454 460.606 93.4181 460.376 126.46 460.376C159.501 460.376 186.243 460.616 186.243 460.897Z" fill="#E0E0E0"/>
                        <path d="M132.072 350.581C132.979 350.157 134.014 350.1 134.961 350.422C135.908 350.745 136.694 351.421 137.154 352.311L197.447 469.619H311.994C313.89 469.622 315.708 470.377 317.049 471.719C318.39 473.061 319.145 474.88 319.148 476.778H191.543L130.26 355.833C130.028 355.37 129.89 354.866 129.855 354.349C129.82 353.832 129.889 353.314 130.058 352.824C130.227 352.334 130.493 351.884 130.838 351.499C131.184 351.113 131.604 350.801 132.072 350.581Z" fill="#263238"/>
                        <path d="M646.075 313.402C646.075 313.548 622.759 313.673 594.008 313.673C565.257 313.673 541.941 313.548 541.941 313.402C541.941 313.256 565.257 313.131 594.008 313.131C622.759 313.131 646.075 313.246 646.075 313.402Z" fill="#263238"/>
                        <path d="M692.591 304.004C692.591 304.149 665.35 304.275 631.767 304.275C598.184 304.275 570.953 304.149 570.953 304.004C570.953 303.858 598.173 303.733 631.767 303.733C665.36 303.733 692.591 303.847 692.591 304.004Z" fill="#263238"/>
                        <path d="M440.901 345.11H190.439L229.947 140.41L479.597 143.754L440.901 345.11Z" fill="#FAFAFA"/>
                        <path d="M229.947 140.41L226.677 157.384L476.462 160.03L479.597 143.754L229.947 140.41Z" fill="#EBEBEB"/>
                        <path d="M440.901 345.11C440.901 345.11 441.13 343.85 441.588 341.422C442.046 338.994 442.733 335.378 443.618 330.679L451.397 289.895C458.124 254.738 467.757 204.451 479.367 143.713L479.586 143.984L229.947 140.67L230.218 140.451L229.822 142.535C215.65 215.861 202.279 285.081 190.679 345.173L190.439 344.881L371.517 344.996L422.688 345.069H436.225H440.89H439.734H436.319H422.781L371.652 345.131L190.46 345.256H190.168L190.22 344.965C201.81 284.872 215.16 215.652 229.312 142.316L229.708 140.232V140.003H229.937L479.576 143.39H479.846L479.794 143.65C468.079 204.388 458.364 254.748 451.574 289.916C448.18 307.473 445.514 321.249 443.691 330.637C442.785 335.316 442.088 338.9 441.609 341.328C441.13 343.756 440.901 345.11 440.901 345.11Z" fill="#263238"/>
                        <path d="M341.474 319.561C341.474 319.706 318.148 319.832 289.407 319.832C260.667 319.832 237.341 319.706 237.341 319.561C237.341 319.415 260.646 319.279 289.407 319.279C318.169 319.279 341.474 319.404 341.474 319.561Z" fill="#263238"/>
                        <path d="M404.641 310.162C404.641 310.308 373.683 310.433 335.497 310.433C297.311 310.433 266.342 310.308 266.342 310.162C266.342 310.016 297.301 309.891 335.497 309.891C373.693 309.891 404.641 310.005 404.641 310.162Z" fill="#263238"/>
                        <path d="M344.963 85.965C344.963 86.1213 321.647 86.2359 292.896 86.2359C264.145 86.2359 240.829 86.1213 240.829 85.965C240.829 85.8087 264.145 85.6941 292.896 85.6941C321.647 85.6941 344.963 85.8191 344.963 85.965Z" fill="#263238"/>
                        <path d="M408.14 76.5662C408.14 76.7225 377.181 76.8371 338.996 76.8371C300.81 76.8371 269.841 76.7225 269.841 76.5662C269.841 76.4099 300.789 76.2953 338.996 76.2953C377.202 76.2953 408.14 76.4203 408.14 76.5662Z" fill="#263238"/>
                        <path d="M293.187 219.352L312.348 198.741L324.479 219.352H293.187Z" fill="#E0E0E0"/>
                        <path d="M309.411 256.686L293.187 256.238L301.331 216.746L316.44 216.621L309.411 256.686Z" fill="#E0E0E0"/>
                        <path d="M393.853 240.692L374.693 261.302L362.571 240.692H393.853Z" fill="#E0E0E0"/>
                        <path d="M377.629 203.357L393.853 203.794L385.71 243.297L370.6 243.411L377.629 203.357Z" fill="#E0E0E0"/>
                        <path d="M385.148 183.944C385.148 184.09 370.465 184.215 352.346 184.215C334.226 184.215 319.554 184.09 319.554 183.944C319.554 183.798 334.237 183.673 352.346 183.673C370.454 183.673 385.148 183.788 385.148 183.944Z" fill="#E0E0E0"/>
                        <path d="M312.848 266.262C312.848 266.408 306.548 266.533 298.779 266.533C291.011 266.533 284.701 266.408 284.701 266.262C284.701 266.116 291.001 265.991 298.779 265.991C306.558 265.991 312.848 266.116 312.848 266.262Z" fill="#E0E0E0"/>
                        <path d="M319.627 274.109C319.627 274.265 308.859 274.379 295.582 274.379C282.305 274.379 271.538 274.265 271.538 274.109C271.538 273.952 282.305 273.838 295.582 273.838C308.859 273.838 319.627 273.963 319.627 274.109Z" fill="#E0E0E0"/>
                        <path d="M386.231 266.262C386.231 266.408 381.024 266.533 374.609 266.533C368.195 266.533 362.988 266.408 362.988 266.262C362.988 266.116 368.195 265.991 374.609 265.991C381.024 265.991 386.231 266.116 386.231 266.262Z" fill="#E0E0E0"/>
                        <path d="M393.364 274.234C393.364 274.39 382.596 274.504 369.319 274.504C356.042 274.504 345.275 274.39 345.275 274.234C345.275 274.077 356.032 273.963 369.319 273.963C382.607 273.963 393.364 274.046 393.364 274.234Z" fill="#E0E0E0"/>
                        <path d="M475.338 120.622C469.15 124.757 463.89 130.135 459.891 136.413C455.891 142.692 453.24 149.733 452.105 157.092C450.689 166.751 451.97 176.608 451.324 186.362C450.481 199.22 446.336 212.339 449.846 224.738C452.137 232.856 457.614 239.858 464.352 244.932C471.089 250.007 479.024 253.268 487.157 255.509C495.706 257.864 505.036 259.072 513.294 255.842C523.708 251.758 530.341 241.556 535.922 231.814C541.504 222.071 547.377 211.63 557.228 206.347" fill="#263238"/>
                        <path d="M699.224 241.796C715.261 241.275 719.01 234.794 719.01 234.794C719.01 234.794 718.76 217.695 718.947 210.828C719.155 203.43 718.77 194.625 718.947 187.768C713.74 194.708 698.422 197.146 691.185 192.395C683.948 187.643 677.2 175.858 662.934 169.679C649.303 163.771 631.819 172.128 622.155 172.055C599.433 171.888 607.212 141.91 585.511 135.137C578.023 132.803 563.643 135.387 556.291 132.532C544.836 128.072 538.713 110.577 527.56 105.44C518.761 101.387 498.736 100.095 490.541 105.242C482.346 110.389 478.482 112.536 473.973 121.08L522.749 211.839C526.874 219.611 532.572 226.439 539.48 231.886C546.388 237.332 554.355 241.279 562.872 243.474C571.307 245.558 579.304 249.038 583.772 253.3C592.842 261.948 603.411 271.493 615.886 270.368C625.383 269.503 633.245 262.501 642.534 260.333C654.082 257.624 665.839 262.657 676.898 266.929C688.186 271.285 701.255 274.859 711.949 269.013L707.982 249.882C696.898 249.135 686.417 244.557 678.335 236.93C684.156 238.18 693.299 241.994 699.224 241.796Z" fill="#263238"/>
                        <path d="M459.509 159.186C461.405 142.639 473.432 122.831 489.875 125.425L540.837 141.118C543.247 141.496 545.427 142.766 546.945 144.677C548.463 146.587 549.208 148.999 549.033 151.434L534.454 270.555C531.715 273.004 499.424 302.503 499.424 302.503L480.221 267.377C480.221 267.377 481.065 246.35 481.044 246.485C481.023 246.62 460.03 241.879 457.041 213.985C455.563 200.064 457.406 177.578 459.509 159.186Z" fill="#FFBE9D"/>
                        <path d="M465.83 180.943C465.772 181.868 466.077 182.778 466.68 183.481C467.283 184.183 468.136 184.622 469.058 184.705C469.508 184.763 469.966 184.73 470.403 184.609C470.84 184.488 471.249 184.28 471.605 183.999C471.961 183.717 472.257 183.367 472.476 182.97C472.695 182.572 472.832 182.135 472.88 181.683C472.938 180.76 472.633 179.851 472.029 179.15C471.426 178.449 470.573 178.012 469.652 177.932C469.202 177.871 468.745 177.901 468.307 178.02C467.869 178.14 467.46 178.346 467.103 178.627C466.747 178.908 466.45 179.258 466.232 179.656C466.013 180.054 465.876 180.491 465.83 180.943Z" fill="#263238"/>
                        <path d="M464.143 173.399C464.56 173.889 467.35 172.034 471.162 172.243C474.973 172.451 477.68 174.504 478.118 174.056C478.326 173.858 477.92 173.014 476.754 172.045C475.159 170.816 473.224 170.11 471.214 170.023C469.228 169.919 467.26 170.444 465.591 171.524C464.372 172.368 463.935 173.18 464.143 173.399Z" fill="#263238"/>
                        <path d="M502.089 183.204C502.032 184.13 502.338 185.042 502.943 185.745C503.548 186.448 504.404 186.886 505.328 186.966C505.777 187.024 506.234 186.992 506.67 186.871C507.107 186.751 507.515 186.544 507.871 186.264C508.227 185.983 508.523 185.635 508.743 185.238C508.962 184.842 509.101 184.405 509.15 183.955C509.205 183.029 508.897 182.119 508.293 181.417C507.688 180.714 506.834 180.275 505.911 180.193C505.462 180.133 505.005 180.165 504.568 180.285C504.13 180.405 503.721 180.611 503.365 180.892C503.009 181.172 502.713 181.522 502.493 181.919C502.274 182.316 502.137 182.753 502.089 183.204Z" fill="#263238"/>
                        <path d="M502.173 175.452C502.589 175.942 505.38 174.087 509.202 174.295C513.023 174.504 515.71 176.546 516.147 176.108C516.366 175.91 515.96 175.066 514.783 174.097C513.189 172.867 511.254 172.161 509.243 172.076C507.261 171.968 505.295 172.494 503.631 173.576C502.412 174.42 501.975 175.233 502.173 175.452Z" fill="#263238"/>
                        <path d="M485.99 201.419C485.99 201.21 483.668 200.679 479.846 199.991C478.878 199.835 477.962 199.595 477.826 198.949C477.8 197.935 478.079 196.937 478.628 196.084C479.669 193.77 480.756 191.339 481.887 188.79C486.428 178.37 489.77 169.867 489.354 169.69C488.937 169.513 484.918 177.765 480.378 188.144C479.274 190.696 478.232 193.135 477.253 195.438C476.827 196.48 476.129 197.751 476.545 199.241C476.672 199.591 476.875 199.908 477.14 200.169C477.405 200.431 477.725 200.63 478.076 200.752C478.609 200.924 479.162 201.029 479.721 201.064C483.564 201.502 485.959 201.637 485.99 201.419Z" fill="#263238"/>
                        <path d="M481.096 246.485C494.09 247.341 507.067 244.574 518.584 238.493C518.584 238.493 508.264 257.041 480.711 253.081L481.096 246.485Z" fill="#EB996E"/>
                        <path d="M500.59 160.697C500.913 161.739 504.755 161.447 509.202 162.219C513.648 162.99 517.209 164.396 517.855 163.5C518.147 163.063 517.564 162.052 516.158 160.979C514.269 159.635 512.097 158.744 509.809 158.374C507.522 158.003 505.18 158.164 502.964 158.843C501.329 159.426 500.454 160.187 500.59 160.697Z" fill="#263238"/>
                        <path d="M464.653 160.385C465.278 161.281 467.954 160.52 471.12 160.635C474.286 160.749 476.931 161.52 477.597 160.635C477.889 160.207 477.514 159.311 476.379 158.436C474.858 157.375 473.057 156.788 471.204 156.751C469.35 156.714 467.527 157.228 465.965 158.228C464.789 159.072 464.435 159.947 464.653 160.385Z" fill="#263238"/>
                        <path d="M483.626 213.214C484.112 214.9 484.838 216.507 485.782 217.986C486.256 218.725 486.882 219.355 487.618 219.833C488.354 220.311 489.184 220.626 490.051 220.758C490.987 220.808 491.919 220.62 492.762 220.211C493.605 219.803 494.331 219.188 494.873 218.424C495.942 216.874 496.492 215.024 496.445 213.141C496.445 211.453 495.779 209.411 494.113 209.129C493.401 209.068 492.685 209.186 492.03 209.473L483.054 212.599" fill="#EB996E"/>
                        <path d="M486.792 220.623C486.792 220.352 488.739 221.227 491.509 220.279C493.077 219.75 494.397 218.664 495.216 217.226C495.682 216.348 495.958 215.383 496.026 214.392C496.095 213.401 495.953 212.407 495.612 211.474C495.437 210.995 495.202 210.54 494.914 210.119C494.581 209.734 494.644 209.755 494.258 209.786C493.873 209.817 493.3 210.109 492.821 210.276L491.353 210.797C489.427 211.463 487.688 212.047 486.23 212.516C483.293 213.454 481.44 213.923 481.367 213.725C481.294 213.527 483.002 212.683 485.834 211.474C487.25 210.869 488.958 210.182 490.843 209.39L492.301 208.827C492.833 208.598 493.379 208.403 493.936 208.244C494.372 208.132 494.832 208.165 495.248 208.337C495.623 208.527 495.942 208.811 496.175 209.161C496.551 209.687 496.856 210.262 497.08 210.869C497.5 212.015 497.664 213.238 497.559 214.453C497.455 215.669 497.085 216.846 496.476 217.903C495.438 219.605 493.768 220.826 491.832 221.3C490.582 221.65 489.26 221.65 488.01 221.3C487.146 221.029 486.75 220.716 486.792 220.623Z" fill="#263238"/>
                        <path d="M558.832 164.542C558.717 165.261 557.311 165.824 554.77 165.845C551.171 165.732 547.63 164.899 544.357 163.396C539.354 161.168 534.916 157.841 531.372 153.664C529.351 151.278 527.779 148.871 526.165 147.182C525.506 146.434 524.745 145.782 523.905 145.244C523.118 144.789 522.259 144.471 521.364 144.307C518.637 143.951 515.888 143.791 513.138 143.827C504.493 143.53 496.155 140.548 489.281 135.293C486.428 133.156 483.989 130.514 482.085 127.499C481.545 126.668 481.147 125.752 480.909 124.79C480.752 124.092 480.815 123.612 481.096 123.373C482.304 122.331 486.303 125.582 493.29 128.749C495.04 129.51 496.956 130.292 499.049 130.969C501.264 131.668 503.526 132.211 505.817 132.594C508.306 133.002 510.824 133.204 513.346 133.199C516.748 132.997 520.162 133.158 523.53 133.678C525.712 134.1 527.796 134.927 529.674 136.116C531.375 137.242 532.895 138.619 534.183 140.201C536.505 143.025 537.88 145.609 539.244 147.495C541.708 151.016 544.713 154.125 548.148 156.706C554.177 161.281 559.082 162.979 558.832 164.542Z" fill="#263238"/>
                        <path d="M520.052 148.818C525.759 158.759 529.164 170.44 527.498 181.787C525.332 196.438 529.247 197.417 535.225 193.02C550.23 181.923 547.2 209.432 551.032 217.122C555.197 225.458 565.153 229.24 574.431 230.126C583.709 231.011 593.175 229.834 602.328 231.803C609.857 233.429 616.761 237.128 624.071 239.566C631.381 242.004 639.691 243.067 646.564 239.566C634.787 239.045 624.3 232.22 614.949 225.051C605.598 217.882 596.361 209.942 585.084 206.535C579.419 204.826 573.181 204.211 568.516 200.575C560.748 194.521 560.623 183.1 560.185 173.253C559.852 165.49 558.842 157.623 555.708 150.517C552.573 143.41 547.075 137.085 539.817 134.314C532.559 131.542 523.541 132.938 518.386 138.753" fill="#263238"/>
                        <path d="M539.734 190.842C540.171 190.717 557.176 188.394 554.166 204.941C551.157 221.488 535.162 215.058 535.225 214.579C535.287 214.1 539.734 190.842 539.734 190.842Z" fill="#FFBE9D"/>
                        <path d="M539.952 209.004C540.036 209.004 540.202 209.265 540.65 209.567C541.28 209.988 542.05 210.145 542.795 210.005C544.659 209.682 546.637 207.181 547.262 204.211C547.581 202.801 547.581 201.338 547.262 199.929C547.202 199.383 547.009 198.86 546.701 198.406C546.392 197.952 545.977 197.58 545.492 197.324C545.177 197.175 544.82 197.142 544.484 197.23C544.147 197.317 543.852 197.52 543.649 197.803C543.347 198.23 543.389 198.574 543.295 198.584C543.201 198.595 542.993 198.251 543.295 197.542C543.463 197.152 543.756 196.83 544.128 196.625C544.385 196.495 544.666 196.417 544.954 196.395C545.241 196.374 545.531 196.409 545.804 196.5C546.462 196.757 547.042 197.18 547.487 197.728C547.932 198.276 548.228 198.93 548.345 199.626C548.786 201.191 548.839 202.84 548.501 204.43C547.793 207.744 545.513 210.557 543.003 210.807C542.535 210.857 542.061 210.801 541.617 210.642C541.174 210.483 540.772 210.226 540.442 209.89C539.911 209.442 539.89 209.025 539.952 209.004Z" fill="#EB996E"/>
                        <path d="M529.227 111.973C529.227 111.973 528.487 111.557 527.144 110.806C525.253 109.759 523.274 108.88 521.229 108.18C518.201 107.147 515.05 106.52 511.857 106.315C507.947 106.062 504.022 106.467 500.246 107.514C496.48 108.593 492.919 110.29 489.708 112.536C485.306 115.648 481.652 119.702 479.013 124.404C478.264 125.738 477.899 126.488 477.847 126.488C477.904 126.29 477.98 126.098 478.076 125.915C478.297 125.364 478.548 124.825 478.826 124.3C479.825 122.361 481.019 120.528 482.387 118.83C485.858 114.405 490.364 110.904 495.507 108.634C500.65 106.364 506.272 105.396 511.878 105.815C515.11 106.045 518.295 106.719 521.344 107.816C523.399 108.546 525.374 109.486 527.238 110.619C527.914 111.004 528.383 111.379 528.727 111.598C528.907 111.704 529.075 111.829 529.227 111.973Z" fill="#455A64"/>
                        <path d="M719.051 218.82C719.051 218.82 716.135 219.32 710.814 219.706C707.573 219.924 704.323 219.962 701.078 219.82C699.05 219.711 697.03 219.485 695.028 219.143C692.774 218.775 690.565 218.175 688.436 217.351C686.085 216.45 683.868 215.234 681.844 213.735C679.699 212.063 677.687 210.227 675.825 208.244C673.864 206.124 671.733 204.169 669.452 202.398C667.004 200.564 664.266 199.155 661.351 198.23C659.861 197.711 658.303 197.412 656.727 197.344C655.11 197.299 653.493 197.404 651.895 197.657C648.587 198.207 645.336 199.054 642.18 200.189C638.941 201.314 635.713 202.638 632.464 204.034C629.142 205.527 625.556 206.346 621.915 206.441C614.681 206.674 607.635 204.106 602.245 199.272C597.111 194.594 593.602 188.852 588.968 184.601C586.767 182.485 584.202 180.783 581.397 179.578C578.743 178.47 575.83 178.134 572.994 178.609C570.351 179.136 567.774 179.95 565.309 181.037C563.013 182.042 560.646 182.874 558.228 183.527C556.007 184.067 553.733 184.354 551.448 184.382C549.412 184.379 547.38 184.19 545.377 183.819C542.181 183.187 539.101 182.065 536.245 180.495C534.454 179.482 532.769 178.291 531.215 176.942C530.695 176.473 530.32 176.088 530.059 175.837C529.799 175.587 529.685 175.442 529.685 175.442L530.101 175.796L531.288 176.838C532.856 178.148 534.548 179.303 536.339 180.287C539.194 181.809 542.262 182.891 545.44 183.496C547.423 183.853 549.434 184.027 551.448 184.017C553.703 183.973 555.945 183.676 558.134 183.131C560.532 182.472 562.878 181.636 565.152 180.631C567.642 179.517 570.247 178.686 572.921 178.151C575.838 177.651 578.837 177.983 581.574 179.109C584.434 180.336 587.051 182.065 589.301 184.215C594.008 188.508 597.538 194.26 602.599 198.855C607.891 203.595 614.806 206.111 621.905 205.878C625.474 205.78 628.988 204.976 632.246 203.513C635.505 202.127 638.754 200.793 642.003 199.668C645.193 198.526 648.48 197.671 651.823 197.115C653.452 196.87 655.101 196.768 656.748 196.813C658.37 196.887 659.973 197.196 661.507 197.73C664.467 198.67 667.251 200.096 669.744 201.95C672.035 203.746 674.177 205.726 676.148 207.869C677.989 209.839 679.977 211.668 682.094 213.339C684.085 214.818 686.263 216.027 688.571 216.934C690.676 217.759 692.861 218.363 695.09 218.737C697.077 219.097 699.083 219.337 701.099 219.456C704.328 219.63 707.564 219.63 710.793 219.456C713.459 219.289 715.521 219.122 716.916 218.966L718.52 218.82H719.051Z" fill="#455A64"/>
                        <path d="M635.797 174.67L635.463 174.973C635.136 175.258 634.788 175.52 634.422 175.754C633.013 176.678 631.44 177.322 629.788 177.651C627.164 178.154 624.463 178.094 621.864 177.473C618.426 176.577 615.185 175.051 612.304 172.972C609.055 170.794 605.837 167.97 602.224 165.188C598.611 162.406 594.466 159.645 589.478 158.499C586.916 157.978 584.29 157.845 581.689 158.103C579.013 158.311 576.295 158.738 573.494 158.999C570.635 159.352 567.738 159.246 564.913 158.686C562.009 157.988 559.313 156.605 557.051 154.654C552.417 150.757 549.491 145.557 546.575 140.816C545.173 138.464 543.622 136.206 541.931 134.053C540.291 132.011 538.398 130.187 536.297 128.624C532.404 125.723 527.915 123.723 523.156 122.768C519.018 121.901 514.745 121.901 510.607 122.768C504.574 124.093 499.038 127.094 494.633 131.427C493.438 132.589 492.327 133.836 491.312 135.158L490.551 136.2C490.471 136.328 490.377 136.447 490.27 136.554C490.344 136.425 490.424 136.3 490.51 136.179L491.228 135.137C492.221 133.767 493.325 132.481 494.529 131.292C498.928 126.899 504.488 123.852 510.555 122.508C514.744 121.59 519.076 121.551 523.281 122.393C528.113 123.342 532.674 125.357 536.63 128.291C538.765 129.874 540.693 131.719 542.368 133.782C544.079 135.954 545.648 138.234 547.065 140.607C549.991 145.349 552.886 150.486 557.478 154.299C559.67 156.202 562.288 157.546 565.111 158.217C567.881 158.773 570.722 158.879 573.525 158.53C576.295 158.28 579.023 157.853 581.72 157.655C584.371 157.394 587.046 157.534 589.655 158.071C594.768 159.27 598.954 162.114 602.568 164.886C606.181 167.658 609.388 170.534 612.596 172.722C615.418 174.776 618.595 176.292 621.968 177.192C624.523 177.833 627.184 177.925 629.778 177.463C631.415 177.156 632.981 176.552 634.401 175.681C635.328 175.056 635.765 174.639 635.797 174.67Z" fill="#455A64"/>
                        <path d="M670.025 156.394C670.025 156.394 669.452 156.977 668.265 157.988C666.526 159.438 664.65 160.715 662.663 161.802C659.519 163.537 656.141 164.81 652.635 165.584C647.985 166.643 643.172 166.77 638.473 165.959C629.535 164.389 621.459 159.655 615.72 152.622C613.637 150.027 611.846 147.13 609.94 144.234C608.085 141.216 605.833 138.461 603.244 136.043C600.455 133.632 596.997 132.13 593.331 131.74C589.506 131.417 585.655 131.595 581.876 132.271C577.964 132.964 574.014 133.419 570.047 133.636C568.031 133.705 566.015 133.537 564.038 133.136C563.549 133.028 563.065 132.892 562.591 132.73C562.112 132.563 561.622 132.459 561.164 132.251L559.821 131.605C559.363 131.411 558.927 131.17 558.519 130.886C556.855 129.827 555.374 128.503 554.135 126.968C552.912 125.483 551.818 123.897 550.865 122.227C548.939 118.955 547.325 115.599 545.378 112.546C544.421 111.037 543.334 109.614 542.129 108.295C540.935 107.032 539.58 105.932 538.099 105.023C536.65 104.147 535.101 103.447 533.486 102.939C531.902 102.45 530.278 102.101 528.633 101.897C525.476 101.524 522.288 101.5 519.126 101.824C516.054 102.095 513.107 102.564 510.285 103.075C507.463 103.585 504.766 104.117 502.204 104.711C497.587 105.701 493.072 107.121 488.719 108.951C485.442 110.355 482.389 112.233 479.659 114.526C479.128 115.026 478.618 115.454 478.139 115.933L476.931 117.235C476.212 118.1 475.65 118.871 475.192 119.497L474.275 120.997L473.942 121.497C473.942 121.497 474.025 121.31 474.223 120.966L475.108 119.434C475.546 118.798 476.098 118.017 476.806 117.131L478.035 115.766C478.472 115.276 479.013 114.839 479.555 114.328C482.278 111.987 485.335 110.066 488.625 108.628C492.991 106.763 497.524 105.315 502.162 104.304C504.724 103.7 507.431 103.148 510.253 102.627C513.075 102.106 516.033 101.585 519.126 101.334C522.32 100.981 525.543 100.981 528.737 101.334C530.411 101.529 532.063 101.878 533.673 102.376C535.33 102.907 536.917 103.635 538.401 104.544C539.936 105.466 541.338 106.595 542.566 107.899C543.796 109.238 544.907 110.682 545.888 112.213C547.866 115.339 549.48 118.663 551.397 121.904C552.34 123.547 553.42 125.109 554.625 126.572C555.829 128.062 557.268 129.346 558.884 130.375C559.278 130.652 559.7 130.886 560.144 131.073L561.456 131.698C561.893 131.896 562.372 132.001 562.83 132.157C563.291 132.314 563.761 132.446 564.236 132.553C566.171 132.946 568.146 133.111 570.12 133.043C578.075 132.845 585.74 130.24 593.446 131.167C597.213 131.568 600.767 133.113 603.63 135.595C606.249 138.058 608.526 140.862 610.398 143.931C612.314 146.839 614.095 149.725 616.136 152.267C621.78 159.249 629.752 163.959 638.587 165.532C643.237 166.353 648.004 166.251 652.614 165.23C656.102 164.483 659.467 163.248 662.611 161.562C664.596 160.493 666.482 159.248 668.244 157.842C668.859 157.384 669.286 156.967 669.598 156.727C669.911 156.488 670.025 156.394 670.025 156.394Z" fill="#263238"/>
                        <path d="M709.492 260.5C709.346 260.568 709.197 260.627 709.044 260.677L707.701 261.136C706.971 261.377 706.227 261.572 705.472 261.719C704.442 261.957 703.399 262.135 702.348 262.25C699.482 262.536 696.594 262.498 693.736 262.136C689.961 261.637 686.24 260.783 682.625 259.583C678.595 258.312 674.295 256.603 669.713 254.686C664.88 252.582 659.921 250.783 654.863 249.298C649.303 247.59 643.466 246.971 637.671 247.475C634.624 247.803 631.651 248.631 628.872 249.924C626.067 251.395 623.338 253.009 620.697 254.759C618.034 256.559 615.098 257.917 612.002 258.781C610.459 259.142 608.859 259.189 607.297 258.919C605.735 258.649 604.243 258.067 602.911 257.207C600.492 255.432 598.381 253.27 596.663 250.809C594.999 248.504 593.112 246.368 591.03 244.432C586.864 240.806 581.731 238.941 576.993 237.649C572.254 236.357 567.621 235.627 563.455 234.742C559.725 233.98 556.072 232.877 552.542 231.449C549.878 230.351 547.38 228.889 545.117 227.104C543.705 225.954 542.439 224.635 541.348 223.175C540.994 222.665 540.754 222.259 540.577 221.988L540.327 221.571C540.433 221.693 540.53 221.822 540.619 221.956L541.441 223.113C542.559 224.528 543.834 225.811 545.242 226.937C547.508 228.681 550.003 230.104 552.656 231.168C556.188 232.588 559.841 233.687 563.57 234.45C567.735 235.304 572.265 236.023 577.107 237.295C581.949 238.566 587.041 240.421 591.363 244.141C593.476 246.09 595.388 248.248 597.069 250.58C598.778 252.987 600.867 255.098 603.255 256.832C604.527 257.65 605.95 258.204 607.441 258.46C608.931 258.716 610.457 258.669 611.929 258.322C614.969 257.473 617.852 256.14 620.468 254.373C623.12 252.606 625.866 250.985 628.695 249.517C631.527 248.199 634.555 247.354 637.661 247.016C643.524 246.515 649.429 247.152 655.051 248.892C660.123 250.396 665.097 252.216 669.942 254.342C674.503 256.269 678.793 257.999 682.802 259.291C686.392 260.498 690.083 261.376 693.83 261.917C696.664 262.297 699.531 262.363 702.379 262.115C703.429 262.015 704.472 261.855 705.503 261.636C706.256 261.503 707 261.326 707.732 261.104L709.086 260.698L709.492 260.5Z" fill="#455A64"/>
                        <path d="M481.533 179.505C481.433 178.221 481.235 176.946 480.94 175.692C480.569 174.221 479.975 172.815 479.18 171.524C478.15 169.818 476.803 168.326 475.213 167.126C473.289 165.666 471.049 164.68 468.673 164.25C465.949 163.748 463.141 163.986 460.54 164.938C457.668 165.988 455.171 167.866 453.365 170.336C451.417 172.984 450.366 176.186 450.366 179.474C450.366 182.762 451.417 185.964 453.365 188.612C455.176 191.079 457.671 192.96 460.54 194.02C463.143 194.962 465.949 195.2 468.673 194.708C471.047 194.274 473.287 193.289 475.213 191.832C476.801 190.63 478.147 189.138 479.18 187.435C479.973 186.142 480.566 184.737 480.94 183.267C481.236 182.013 481.434 180.738 481.533 179.453C481.542 179.54 481.542 179.627 481.533 179.714C481.533 179.912 481.533 180.162 481.533 180.464C481.538 180.872 481.507 181.28 481.44 181.683C481.382 182.235 481.285 182.782 481.148 183.319C480.802 184.816 480.225 186.25 479.44 187.57C477.567 190.767 474.635 193.206 471.152 194.466C467.67 195.726 463.857 195.727 460.374 194.468C457.401 193.393 454.814 191.461 452.938 188.915C450.917 186.177 449.826 182.862 449.826 179.458C449.826 176.054 450.917 172.74 452.938 170.002C453.88 168.698 455.022 167.551 456.323 166.605C457.558 165.687 458.923 164.96 460.374 164.448C463.041 163.486 465.918 163.256 468.704 163.781C470.92 164.211 473.019 165.108 474.861 166.412C476.703 167.717 478.246 169.399 479.388 171.346C480.173 172.663 480.749 174.094 481.096 175.587C481.233 176.128 481.331 176.679 481.388 177.234C481.455 177.637 481.486 178.044 481.481 178.453C481.481 178.755 481.481 178.995 481.481 179.203C481.512 179.301 481.53 179.403 481.533 179.505Z" fill="#455A64"/>
                        <path d="M522.583 179.505C522.483 178.221 522.284 176.946 521.989 175.692C521.623 174.219 521.029 172.813 520.229 171.524C519.199 169.818 517.852 168.326 516.262 167.126C514.339 165.666 512.098 164.68 509.722 164.25C506.999 163.748 504.19 163.986 501.589 164.938C498.717 165.988 496.22 167.866 494.415 170.336C492.466 172.984 491.415 176.186 491.415 179.474C491.415 182.762 492.466 185.965 494.415 188.612C495.32 189.879 496.424 190.991 497.684 191.905C498.875 192.791 500.191 193.493 501.589 193.989C504.193 194.931 506.998 195.168 509.722 194.677C512.097 194.242 514.336 193.257 516.262 191.801C517.85 190.599 519.196 189.107 520.229 187.404C521.026 186.113 521.62 184.707 521.989 183.236C522.285 181.982 522.483 180.707 522.583 179.422C522.598 179.508 522.598 179.596 522.583 179.682C522.583 179.88 522.583 180.13 522.583 180.433C522.584 180.841 522.549 181.249 522.479 181.652C522.421 182.204 522.324 182.75 522.187 183.288C521.84 184.785 521.264 186.219 520.479 187.539C518.606 190.735 515.674 193.175 512.191 194.435C508.709 195.695 504.895 195.696 501.412 194.437C498.44 193.362 495.852 191.429 493.977 188.883C491.956 186.146 490.865 182.831 490.865 179.427C490.865 176.023 491.956 172.709 493.977 169.971C494.918 168.666 496.061 167.52 497.362 166.574C498.596 165.656 499.962 164.929 501.412 164.417C504.096 163.446 506.992 163.215 509.795 163.75C512.011 164.18 514.109 165.077 515.952 166.381C517.794 167.685 519.337 169.367 520.479 171.315C521.264 172.632 521.84 174.063 522.187 175.556C522.324 176.097 522.422 176.647 522.479 177.202C522.549 177.605 522.584 178.013 522.583 178.422C522.583 178.724 522.583 178.963 522.583 179.172C522.611 179.281 522.611 179.396 522.583 179.505Z" fill="#455A64"/>
                        <path d="M491.593 175.723C491.509 175.723 491.176 175.087 490.312 174.306C489.214 173.254 487.765 172.649 486.246 172.608C484.727 172.568 483.247 173.095 482.096 174.087C481.19 174.827 480.815 175.483 480.742 175.431C480.917 174.794 481.28 174.224 481.783 173.795C482.368 173.226 483.06 172.78 483.82 172.483C484.579 172.186 485.39 172.044 486.205 172.065C487.02 172.087 487.823 172.271 488.566 172.608C489.308 172.944 489.976 173.426 490.53 174.024C491.049 174.469 491.42 175.062 491.593 175.723Z" fill="#455A64"/>
                        <path d="M539.234 190.884C538.372 190.427 537.553 189.893 536.786 189.29C535.308 188.248 533.267 186.851 530.986 185.33C528.706 183.809 526.613 182.465 525.103 181.496C524.254 181.014 523.45 180.46 522.697 179.839C523.605 180.195 524.477 180.639 525.301 181.162C526.873 182.048 528.997 183.35 531.288 184.872C533.579 186.393 535.589 187.873 537.016 189.04C537.812 189.583 538.554 190.2 539.234 190.884Z" fill="#455A64"/>
                        <path d="M508.171 192.843C507.831 192.933 507.48 192.972 507.129 192.957C506.157 192.981 505.185 192.886 504.234 192.676C501.04 192.015 498.186 190.235 496.185 187.657C494.185 185.078 493.169 181.87 493.321 178.609C493.358 177.633 493.509 176.664 493.769 175.723C493.844 175.376 493.971 175.042 494.144 174.733C493.908 176.013 493.762 177.308 493.707 178.609C493.658 181.76 494.683 184.833 496.614 187.322C498.545 189.811 501.266 191.567 504.328 192.301C505.594 192.575 506.878 192.756 508.171 192.843Z" fill="white"/>
                        <path d="M456.469 188.664C456.199 188.572 455.948 188.431 455.729 188.248C455.106 187.805 454.533 187.295 454.021 186.726C452.303 184.83 451.253 182.423 451.033 179.872C450.813 177.322 451.435 174.77 452.803 172.607C453.208 171.959 453.683 171.358 454.219 170.815C454.402 170.602 454.621 170.422 454.865 170.284C454.948 170.357 454.063 171.169 453.136 172.805C451.9 174.935 451.351 177.395 451.564 179.849C451.776 182.303 452.74 184.632 454.323 186.518C455.521 187.935 456.521 188.602 456.469 188.664Z" fill="white"/>
                        <path d="M587.041 282.444C591.547 284.213 595.628 286.914 599.018 290.371C602.408 293.828 605.03 297.962 606.712 302.503C612.356 317.945 622.228 413.736 622.228 413.736C622.228 408.704 635.359 424.667 633.329 476.777H578.43L556.333 401.91L587.041 282.444Z" fill="#5DDEEC"/>
                        <path d="M463.393 269.878C460.853 269.555 435.631 278.308 430.945 286.164C426.259 294.021 402.361 374.338 402.361 374.338L348.555 383.039C348.555 383.039 329.499 382.466 330.977 401.899C332.456 421.333 335.309 436.379 343.64 442.756C351.971 449.133 360.551 451.822 365.435 449.362C369.944 447.091 369.299 441.12 369.299 441.12C369.299 441.12 414.867 451.03 424.489 442.756C434.111 434.483 463.393 269.878 463.393 269.878Z" fill="#5DDEEC"/>
                        <path d="M540.91 255.978L541.243 268.482C541.243 268.482 583.709 280.371 587.062 282.382C590.415 284.393 565.652 419.926 565.652 419.926C565.652 419.926 597.725 458.188 599.808 471.911L600.526 476.778H418.168L424.791 425.615L421.667 371.338L446.18 275.765L475.775 265.251L475.442 258.01C475.418 257.589 475.479 257.167 475.622 256.771C475.765 256.375 475.987 256.011 476.274 255.702C476.56 255.394 476.907 255.147 477.292 254.975C477.677 254.804 478.092 254.713 478.513 254.706L537.682 252.893C538.097 252.879 538.511 252.949 538.9 253.097C539.288 253.245 539.643 253.469 539.944 253.757C540.244 254.044 540.485 254.388 540.651 254.77C540.817 255.151 540.905 255.562 540.91 255.978Z" fill="#5DDEEC"/>
                        <path d="M423.896 410.235C423.909 410.139 423.909 410.04 423.896 409.944C423.896 409.714 423.896 409.423 423.823 409.058C423.75 408.245 423.646 407.12 423.521 405.692C423.396 404.265 423.188 402.441 423.063 400.357C422.938 398.273 422.688 395.918 422.594 393.292C422.5 390.667 422.302 387.801 422.292 384.717C422.292 383.164 422.23 381.591 422.292 379.934C422.354 378.277 422.292 376.6 422.365 374.859C422.56 367.338 423.148 359.833 424.125 352.373C425.175 344.921 426.636 337.532 428.498 330.241C428.946 328.574 429.394 326.938 429.821 325.354C430.248 323.77 430.758 322.228 431.206 320.769C432.07 317.81 433.07 315.111 433.924 312.631C434.34 311.391 434.767 310.214 435.205 309.12L436.402 305.994C437.131 304.035 437.839 302.388 438.412 301.034L439.703 297.908C439.839 297.574 439.943 297.303 440.026 297.085C440.07 296.996 440.102 296.901 440.12 296.803C440.12 296.803 440.057 296.887 439.974 297.064C439.891 297.241 439.755 297.533 439.599 297.856C439.266 298.606 438.808 299.637 438.214 300.982C437.62 302.326 436.871 303.962 436.131 305.91C435.736 306.879 435.33 307.911 434.892 309.036C434.455 310.162 433.997 311.297 433.559 312.537C432.685 315.017 431.674 317.747 430.779 320.675C430.331 322.155 429.81 323.666 429.363 325.26C428.915 326.855 428.478 328.48 428.019 330.158C426.116 337.46 424.639 344.868 423.594 352.342C422.606 359.821 422.028 367.348 421.865 374.891C421.865 376.631 421.865 378.329 421.813 379.976C421.761 381.622 421.875 383.216 421.896 384.758C421.896 387.884 422.136 390.729 422.271 393.355C422.407 395.981 422.656 398.346 422.813 400.43C422.969 402.514 423.198 404.296 423.365 405.755C423.531 407.214 423.677 408.308 423.781 409.11C423.833 409.475 423.864 409.756 423.896 409.985C423.885 410.068 423.885 410.152 423.896 410.235Z" fill="#263238"/>
                        <path d="M561.508 322.926C561.503 323.063 561.486 323.199 561.456 323.333C561.393 323.614 561.32 323.999 561.227 324.489C560.998 325.531 560.727 327.011 560.414 328.949C559.594 334.445 559.245 340.002 559.373 345.558C559.575 353.804 560.46 362.019 562.018 370.118C563.705 379.278 566.183 389.208 568.807 399.649C571.432 410.089 573.671 420.103 575.055 429.335C576.44 438.567 577.19 446.935 577.628 453.979C578.065 461.022 578.232 466.722 578.357 470.65C578.357 472.599 578.45 474.12 578.482 475.183C578.482 475.683 578.482 476.069 578.482 476.371C578.493 476.503 578.493 476.635 578.482 476.767C578.471 476.635 578.471 476.503 578.482 476.371C578.482 476.079 578.482 475.683 578.409 475.194C578.357 474.152 578.273 472.599 578.18 470.661C577.982 466.722 577.742 461.022 577.274 453.989C576.805 446.955 576.045 438.599 574.597 429.398C573.15 420.197 570.942 410.194 568.349 399.763C565.756 389.333 563.257 379.382 561.601 370.191C560.062 362.067 559.212 353.826 559.061 345.558C558.982 339.975 559.403 334.395 560.321 328.886C560.612 326.88 561.008 324.891 561.508 322.926Z" fill="#263238"/>
                        <path d="M541.493 269.065C541.288 269.181 541.072 269.275 540.848 269.346L538.973 270.076C536.647 270.902 534.276 271.598 531.872 272.16C528.302 272.976 524.685 273.571 521.042 273.942C516.581 274.379 512.101 274.587 507.619 274.567C502.85 274.567 498.32 274.421 494.196 274.108C490.517 273.897 486.901 273.062 483.502 271.639C481.211 270.654 479.148 269.206 477.441 267.388C476.985 266.892 476.567 266.363 476.191 265.804C476.054 265.614 475.935 265.412 475.837 265.199C475.837 265.199 476.379 266.012 477.597 267.283C479.335 269.013 481.394 270.386 483.658 271.326C487.031 272.683 490.607 273.468 494.238 273.65C498.33 273.931 502.87 274.046 507.619 274.067C512.367 274.088 516.897 273.89 520.99 273.483C524.618 273.139 528.223 272.585 531.788 271.826C534.829 271.191 537.234 270.43 538.911 269.94L540.817 269.315C541.03 269.202 541.258 269.118 541.493 269.065Z" fill="#263238"/>
                        <path d="M525.519 392.146C525.316 392.202 525.106 392.23 524.895 392.23L523.093 392.376L521.802 392.459C521.323 392.459 520.761 392.459 520.25 392.459C518.991 392.463 517.733 392.4 516.481 392.271L514.283 392.052C513.523 391.969 512.753 391.792 511.94 391.667C510.306 391.427 508.608 390.938 506.807 390.479C499.045 388.245 491.887 384.288 485.865 378.902C484.559 377.732 483.314 376.494 482.137 375.193C481.586 374.578 481.023 374.015 480.544 373.411L479.201 371.681C478.424 370.678 477.701 369.635 477.035 368.555C476.733 368.087 476.441 367.659 476.202 367.253C475.962 366.847 475.775 366.451 475.577 366.107C475.244 365.45 474.963 364.929 474.744 364.512C474.632 364.334 474.544 364.141 474.484 363.939C474.624 364.097 474.743 364.272 474.838 364.46C475.077 364.867 475.39 365.367 475.764 366.003L476.421 367.117C476.67 367.513 476.983 367.93 477.295 368.389C477.977 369.438 478.714 370.45 479.503 371.421L480.867 373.119C481.346 373.713 481.908 374.266 482.46 374.87C483.502 376.099 484.855 377.256 486.199 378.517C492.197 383.808 499.281 387.721 506.952 389.979C508.621 390.472 510.314 390.879 512.024 391.198C512.826 391.344 513.596 391.531 514.346 391.625L516.512 391.875C517.753 392.022 519.001 392.106 520.25 392.125C520.802 392.125 521.292 392.188 521.791 392.188H523.093H524.884C525.094 392.152 525.307 392.138 525.519 392.146Z" fill="#263238"/>
                        <path d="M413.014 402.785C412.92 402.785 412.764 401.055 412.243 398.304C410.904 391.124 408.146 384.284 404.131 378.183C402.59 375.849 401.496 374.495 401.569 374.432C401.884 374.698 402.167 374.998 402.413 375.328C403.135 376.172 403.812 377.051 404.443 377.965C408.69 384.006 411.49 390.944 412.628 398.242C412.837 399.638 412.962 400.774 412.993 401.555C413.038 401.964 413.045 402.375 413.014 402.785Z" fill="#263238"/>
                        <path d="M595.539 293.323C593.707 293.105 591.864 292.98 590.02 292.948L588.676 293C588.218 293 587.739 293.104 587.239 293.156C586.188 293.286 585.145 293.478 584.115 293.729C581.749 294.346 579.464 295.238 577.305 296.386C575.174 297.584 573.19 299.025 571.39 300.679C570.617 301.419 569.887 302.201 569.203 303.024C568.891 303.41 568.558 303.764 568.287 304.149L567.527 305.243C566.554 306.816 565.66 308.437 564.851 310.099C564.966 309.608 565.13 309.13 565.34 308.672C565.534 308.118 565.775 307.581 566.059 307.067C566.395 306.365 566.778 305.686 567.204 305.035L567.954 303.899C568.214 303.503 568.547 303.139 568.86 302.732C569.534 301.881 570.264 301.077 571.047 300.325C574.645 296.837 579.122 294.392 584.001 293.25C585.057 293.002 586.129 292.821 587.208 292.708C587.718 292.708 588.249 292.594 588.676 292.583H590.04C590.817 292.576 591.593 292.621 592.363 292.719C592.952 292.759 593.537 292.846 594.112 292.979C594.597 293.051 595.074 293.166 595.539 293.323Z" fill="#263238"/>
                        <g opacity="0.3">
                        <path opacity="0.3" d="M503.86 388.874C492.603 384.904 481.086 376.683 475.629 366.055C478.222 378.892 487.948 392.105 500.309 396.387C506.53 398.477 513.181 398.947 519.634 397.753C526.087 396.559 532.13 393.74 537.193 389.562C526.28 394.418 515.127 392.834 503.86 388.874Z" fill="black"/>
                        </g>
                        <path d="M418.168 476.777C418.154 476.552 418.154 476.326 418.168 476.1C418.168 475.59 418.293 474.944 418.376 474.141C418.574 472.391 418.855 469.973 419.199 466.993L422.146 443.402C422.813 438.317 423.437 433.493 424 429.221C423.916 423.552 423.843 418.749 423.791 415.279C423.791 413.632 423.791 412.309 423.791 411.319C423.791 410.902 423.791 410.558 423.791 410.277C423.778 410.156 423.778 410.034 423.791 409.912C423.791 409.912 423.791 410.037 423.843 410.277C423.896 410.517 423.843 410.902 423.906 411.319C423.906 412.299 424 413.622 424.062 415.279C424.166 418.738 424.302 423.542 424.468 429.21C423.927 433.482 423.323 438.307 422.677 443.402L419.553 466.962C419.137 469.932 418.793 472.349 418.512 474.1C418.387 474.891 418.283 475.537 418.21 476.038C418.229 476.285 418.215 476.534 418.168 476.777Z" fill="#263238"/>
                        <path d="M351.054 397.898C351.054 397.898 351.169 398.023 351.356 398.294L352.106 399.482C352.762 400.524 353.668 402.045 354.73 403.952C357.508 408.93 360.001 414.061 362.197 419.322C364.386 424.588 366.277 429.973 367.861 435.452C368.465 437.536 368.903 439.265 369.184 440.464L369.496 441.839C369.545 441.998 369.569 442.163 369.569 442.329C369.485 442.183 369.425 442.025 369.392 441.86C369.274 441.492 369.139 441.044 368.986 440.516C368.642 439.338 368.143 437.65 367.497 435.566C366.206 431.398 364.258 425.688 361.697 419.53C359.135 413.372 356.49 407.985 354.407 404.129C353.366 402.202 352.533 400.659 351.939 399.586L351.273 398.357C351.179 398.215 351.106 398.06 351.054 397.898Z" fill="#263238"/>
                        <path d="M361.489 415.862C361.489 415.966 359.843 415.748 357.219 415.862C355.682 415.913 354.151 416.073 352.637 416.342C348.926 417.001 345.357 418.298 342.088 420.176C340.755 420.942 339.478 421.802 338.267 422.75C336.184 424.375 335.143 425.584 335.018 425.511C335.223 425.187 335.468 424.889 335.747 424.625C336.04 424.281 336.357 423.958 336.694 423.656C337.08 423.292 337.507 422.864 338.027 422.448C339.222 421.445 340.496 420.542 341.839 419.749C345.131 417.782 348.768 416.46 352.554 415.852C354.092 415.598 355.649 415.473 357.209 415.477C357.875 415.477 358.479 415.477 359.01 415.539C359.46 415.556 359.909 415.601 360.353 415.675C360.738 415.687 361.12 415.75 361.489 415.862Z" fill="white"/>
                        <path d="M348.743 396.106C348.743 396.2 347.639 395.616 345.764 395.189C343.337 394.625 340.803 394.719 338.424 395.461C336.044 396.203 333.905 397.566 332.227 399.409C330.925 400.816 330.373 401.899 330.29 401.847C330.35 401.568 330.463 401.302 330.623 401.066C330.996 400.385 331.436 399.743 331.935 399.148C333.605 397.166 335.809 395.705 338.284 394.938C340.76 394.172 343.403 394.132 345.9 394.824C346.648 395.023 347.374 395.299 348.066 395.647C348.514 395.897 348.763 396.075 348.743 396.106Z" fill="white"/>
                        <path d="M367.528 437.056C367.528 437.056 367.289 437.317 366.779 437.703C366.053 438.246 365.299 438.751 364.519 439.213C361.916 440.735 359.111 441.882 356.188 442.621C353.281 443.365 350.284 443.692 347.285 443.59C346.378 443.57 345.474 443.49 344.577 443.35C344.245 443.335 343.918 443.265 343.609 443.142C343.609 443.048 345.025 443.215 347.295 443.215C353.23 443.192 359.068 441.703 364.29 438.88C366.32 437.796 367.476 436.973 367.528 437.056Z" fill="white"/>
                        <path d="M487.396 272.806C487.396 272.806 487.198 272.629 486.917 272.243C486.52 271.699 486.171 271.12 485.876 270.514C484.883 268.521 484.283 266.356 484.106 264.137C483.93 261.919 484.174 259.689 484.824 257.562C485.019 256.921 485.267 256.297 485.563 255.696C485.772 255.269 485.907 255.04 485.949 255.061C485.99 255.082 485.605 256.051 485.199 257.666C484.12 261.894 484.486 266.362 486.24 270.357C486.907 271.879 487.479 272.754 487.396 272.806Z" fill="white"/>
                        <path d="M505.265 274.046C505.265 274.046 505.057 273.848 504.755 273.442C504.338 272.863 503.966 272.253 503.641 271.618C501.475 267.358 500.931 262.454 502.11 257.822C502.281 257.128 502.508 256.448 502.787 255.79C502.87 255.539 502.993 255.304 503.151 255.092C503.245 255.092 502.85 256.134 502.485 257.905C502.014 260.17 501.905 262.495 502.162 264.793C502.421 267.094 503.036 269.34 503.985 271.451C504.724 273.004 505.338 273.942 505.265 274.046Z" fill="white"/>
                        <path d="M525.301 272.66C525.826 269.738 526.07 266.772 526.03 263.803C525.793 260.847 525.277 257.92 524.489 255.061C524.953 255.818 525.304 256.64 525.53 257.499C526.131 259.533 526.481 261.632 526.571 263.751C526.671 265.882 526.503 268.018 526.071 270.107C525.94 270.991 525.68 271.851 525.301 272.66Z" fill="white"/>
                        <path d="M380.149 416.196C379.944 415.753 379.78 415.293 379.66 414.82C379.347 413.778 378.952 412.559 378.483 411.027C377.442 407.839 376.036 403.431 374.318 398.638C372.599 393.845 370.808 389.552 369.507 386.457C368.892 384.988 368.372 383.769 367.965 382.81C367.753 382.371 367.578 381.914 367.445 381.445C367.72 381.845 367.957 382.271 368.153 382.716C368.58 383.55 369.194 384.8 369.861 386.311C371.256 389.364 373.068 393.605 374.828 398.45C376.588 403.296 377.952 407.693 378.889 410.954C379.347 412.57 379.691 413.882 379.93 414.799C380.053 415.256 380.126 415.724 380.149 416.196Z" fill="white"/>
                        <path d="M385.627 428.189C384.496 426.384 383.679 424.401 383.211 422.323C384.341 424.127 385.158 426.111 385.627 428.189Z" fill="white"/>
                        <path d="M413.878 435.775C413.781 435.588 413.715 435.388 413.68 435.181C413.555 434.722 413.399 434.139 413.212 433.42C412.826 431.899 412.243 429.7 411.483 426.991C409.963 421.583 407.63 414.164 404.506 406.151C401.382 398.138 398.039 391.146 395.467 386.144C394.186 383.643 393.114 381.632 392.343 380.257C391.989 379.611 391.708 379.08 391.489 378.663C391.378 378.48 391.29 378.284 391.229 378.079C391.361 378.243 391.48 378.417 391.583 378.6C391.833 379.007 392.145 379.517 392.52 380.153C393.332 381.507 394.457 383.487 395.78 385.967C402.686 398.935 408.071 412.659 411.827 426.866C412.545 429.585 413.076 431.805 413.399 433.347C413.545 434.066 413.67 434.66 413.763 435.118C413.818 435.334 413.856 435.553 413.878 435.775Z" fill="white"/>
                        <path d="M419.72 364.763C417.775 363.615 415.929 362.308 414.201 360.855C412.349 359.551 410.608 358.098 408.994 356.51C410.934 357.668 412.78 358.978 414.513 360.428C416.363 361.73 418.104 363.179 419.72 364.763Z" fill="white"/>
                        <path d="M423.198 340.234C422.367 340.141 421.565 339.875 420.844 339.452C419.605 338.879 418.647 338.306 418.762 338.171C419.594 338.257 420.397 338.524 421.115 338.952C422.302 339.525 423.26 340.098 423.198 340.234Z" fill="white"/>
                        <path d="M431.445 318.248C429.724 318.025 428.029 317.635 426.384 317.081C424.695 316.688 423.051 316.119 421.48 315.382C423.201 315.604 424.896 315.995 426.541 316.549C428.231 316.942 429.874 317.511 431.445 318.248Z" fill="white"/>
                        <path d="M465.247 292.74C465.247 292.885 457.135 292.74 447.138 292.385C437.141 292.031 429.05 291.645 429.061 291.5C429.071 291.354 437.173 291.499 447.159 291.843C457.145 292.187 465.247 292.594 465.247 292.74Z" fill="white"/>
                        <path d="M482.481 292.979C480.394 293.238 478.278 293.122 476.233 292.635C477.262 292.429 478.318 292.398 479.357 292.541C480.416 292.508 481.472 292.656 482.481 292.979Z" fill="white"/>
                        <path d="M545.898 292.802C545.898 292.948 535.787 292.917 523.322 292.729C510.857 292.541 500.746 292.26 500.746 292.114C500.746 291.968 510.857 292 523.333 292.187C535.808 292.375 545.909 292.604 545.898 292.802Z" fill="white"/>
                        <path d="M571.067 289.53C568.668 289.891 566.229 289.891 563.83 289.53C566.229 289.169 568.668 289.169 571.067 289.53Z" fill="white"/>
                        <path d="M591.748 286.779C590.468 287.154 589.145 287.361 587.812 287.394C586.492 287.595 585.151 287.619 583.824 287.467C585.102 287.085 586.426 286.878 587.76 286.852C589.08 286.645 590.422 286.621 591.748 286.779Z" fill="white"/>
                        <path d="M549.21 272.16C548.932 272.273 548.646 272.367 548.356 272.441L545.888 273.181C544.846 273.504 543.493 273.869 541.941 274.223C540.389 274.577 538.64 275.067 536.672 275.432L533.548 276.057C532.507 276.265 531.351 276.422 530.184 276.62C527.862 277.026 525.363 277.307 522.728 277.662C517.01 278.257 511.264 278.546 505.515 278.527C499.788 278.432 494.07 278.036 488.385 277.339C485.761 276.964 483.252 276.64 480.94 276.192C479.784 275.974 478.659 275.796 477.587 275.567L474.515 274.9C472.547 274.494 470.808 273.994 469.308 273.598C467.809 273.202 466.444 272.827 465.382 272.483L462.925 271.712C462.362 271.524 462.071 271.42 462.071 271.41C462.372 271.443 462.669 271.51 462.956 271.608L465.434 272.285C466.476 272.587 467.829 272.952 469.381 273.327C470.933 273.702 472.672 274.171 474.64 274.546L477.712 275.182C478.753 275.401 479.909 275.567 481.065 275.765C483.376 276.203 485.865 276.505 488.479 276.859C494.173 277.519 499.898 277.888 505.63 277.964C511.346 277.994 517.06 277.73 522.749 277.172C525.373 276.87 527.873 276.609 530.195 276.213C531.351 276.026 532.475 275.88 533.548 275.682L536.672 275.098C538.65 274.754 540.4 274.317 541.951 273.973C543.503 273.629 544.836 273.306 545.909 273.014L548.408 272.379C548.668 272.283 548.937 272.21 549.21 272.16Z" fill="white"/>
                        <path d="M559.342 333.857C559.231 333.87 559.119 333.87 559.009 333.857H557.967H554.198C550.928 333.857 546.19 333.857 540.338 333.753C528.623 333.586 512.451 333.179 494.602 332.325C476.754 331.471 460.551 330.689 449.013 328.428C444.455 327.605 439.962 326.456 435.569 324.989C434.017 324.468 432.83 324.01 432.029 323.676L431.123 323.312C431.015 323.278 430.914 323.229 430.821 323.166C430.932 323.183 431.04 323.215 431.143 323.26L432.07 323.583C432.882 323.874 434.08 324.302 435.632 324.791C440.039 326.176 444.534 327.266 449.086 328.053C460.592 330.21 476.785 330.887 494.623 331.783C512.461 332.679 528.633 333.107 540.338 333.367L554.208 333.648L557.978 333.732H558.957L559.342 333.857Z" fill="white"/>
                        <path d="M459.749 369.055C459.285 369.17 458.81 369.236 458.332 369.253C457.426 369.347 456.104 369.441 454.459 369.504C445.911 369.823 437.359 369 429.029 367.055C427.436 366.68 426.155 366.336 425.27 366.065C424.807 365.961 424.357 365.807 423.927 365.606C424.402 365.652 424.872 365.739 425.333 365.867C426.218 366.065 427.509 366.357 429.113 366.68C437.443 368.421 445.939 369.239 454.448 369.118C456.083 369.118 457.406 369.118 458.322 369.045C458.797 368.997 459.275 369 459.749 369.055Z" fill="white"/>
                        <path d="M473.869 368.868C472.068 369.335 470.195 369.452 468.35 369.212C469.224 368.882 470.155 368.729 471.089 368.764C472.013 368.615 472.958 368.651 473.869 368.868Z" fill="white"/>
                        <path d="M536.599 374.078C536.405 374.1 536.21 374.1 536.016 374.078L534.36 374.13C532.913 374.13 530.83 374.13 528.248 374.13C523.093 374.13 515.97 373.974 508.119 373.588C500.267 373.203 493.144 372.64 488.021 372.15C485.449 371.9 483.377 371.681 481.939 371.515L480.294 371.296C480.101 371.278 479.909 371.243 479.721 371.192C479.915 371.165 480.111 371.165 480.305 371.192L481.96 371.296L488.052 371.765C493.186 372.161 500.288 372.65 508.139 373.046C515.991 373.442 523.103 373.63 528.258 373.745L534.36 373.87L536.016 373.932C536.217 373.95 536.413 374 536.599 374.078Z" fill="white"/>
                        <path d="M560.998 371.994C557.853 372.761 554.633 373.177 551.396 373.234C552.948 372.76 554.548 372.46 556.166 372.338C557.758 372.042 559.379 371.927 560.998 371.994Z" fill="white"/>
                        <path d="M570.984 411.486C570.862 411.52 570.736 411.541 570.609 411.548L569.505 411.673L565.278 412.101C563.445 412.278 561.195 412.486 558.582 412.684C555.968 412.882 552.99 413.153 549.699 413.341C543.108 413.778 535.256 414.153 526.529 414.383C517.803 414.612 508.212 414.653 498.143 414.455C488.073 414.258 478.472 413.757 469.766 413.184C461.061 412.611 453.23 411.861 446.67 411.1C443.379 410.767 440.422 410.381 437.818 410.058C435.215 409.735 432.976 409.454 431.154 409.193L426.988 408.589L425.905 408.464C425.778 408.452 425.652 408.424 425.531 408.381H425.905L427.009 408.506L431.227 409.006C433.059 409.235 435.298 409.506 437.902 409.777C440.505 410.048 443.473 410.423 446.763 410.725C453.324 411.402 461.144 412.069 469.85 412.653C478.555 413.236 488.135 413.695 498.205 413.882C508.275 414.07 517.855 414.028 526.571 413.882C535.287 413.737 543.139 413.33 549.72 412.934C553.021 412.767 555.968 412.538 558.613 412.361C561.258 412.184 563.476 412.017 565.309 411.861L569.547 411.538L570.651 411.475C570.762 411.467 570.874 411.47 570.984 411.486Z" fill="white"/>
                        <path d="M500.048 458.126C499.788 458.181 499.523 458.206 499.257 458.199L496.966 458.303C494.988 458.397 492.113 458.449 488.573 458.47C481.471 458.47 471.662 458.261 460.863 457.365C450.064 456.469 440.349 455.093 433.351 453.885C429.863 453.291 427.041 452.759 425.093 452.343L422.865 451.863C422.604 451.816 422.346 451.75 422.094 451.665C422.361 451.669 422.626 451.7 422.886 451.759L425.135 452.134C427.082 452.488 429.915 452.957 433.414 453.51C440.422 454.625 450.127 455.927 460.915 456.834C471.703 457.74 481.481 458.032 488.573 458.084C492.113 458.084 494.988 458.084 496.966 458.084H499.247C499.515 458.077 499.783 458.091 500.048 458.126Z" fill="white"/>
                        <path d="M526.602 457.094C521.443 457.542 516.259 457.636 511.086 457.375C516.245 456.914 521.43 456.82 526.602 457.094Z" fill="white"/>
                        <path d="M576.586 454.572C576.147 454.658 575.7 454.696 575.253 454.687L571.63 454.822L559.696 455.208L547.752 455.698L544.138 455.823C543.696 455.879 543.248 455.879 542.805 455.823C543.237 455.724 543.676 455.661 544.118 455.635C544.971 455.552 546.2 455.448 547.731 455.333C550.782 455.104 555.02 454.864 559.675 454.687C564.33 454.51 568.568 454.458 571.63 454.458C573.16 454.458 574.399 454.458 575.253 454.458C575.701 454.444 576.148 454.482 576.586 454.572Z" fill="white"/>
                        <path d="M590.374 346.017C589.963 346.101 589.543 346.136 589.124 346.121L585.74 346.257C582.876 346.392 578.929 346.663 574.608 347.226C570.286 347.788 566.392 348.528 563.59 349.122L560.279 349.852C559.88 349.975 559.467 350.049 559.05 350.07C559.425 349.886 559.82 349.747 560.227 349.654C560.998 349.414 562.112 349.101 563.507 348.747C570.782 346.954 578.237 345.993 585.729 345.881C587.156 345.881 588.322 345.881 589.124 345.881C589.544 345.883 589.963 345.929 590.374 346.017Z" fill="white"/>
                        <path d="M607.254 342.651C607.254 342.807 604.921 342.901 602.047 343.287C599.173 343.672 596.924 344.183 596.84 344.027C598.457 343.326 600.177 342.894 601.932 342.745C603.688 342.416 605.487 342.384 607.254 342.651Z" fill="white"/>
                        <path d="M613.085 341.172C613.085 341.307 612.71 341.578 612.137 341.776C611.565 341.974 611.096 342.005 611.013 341.87C610.93 341.734 611.398 341.453 611.96 341.255C612.523 341.057 613.033 341.026 613.085 341.172Z" fill="white"/>
                        <path d="M607.264 309.714C606.707 309.806 606.142 309.844 605.577 309.828C604.536 309.828 602.942 309.922 601.016 310.016C597.153 310.203 591.831 310.62 586.01 311.475C580.189 312.329 574.972 313.475 571.223 314.413C569.349 314.882 567.839 315.278 566.798 315.559C566.266 315.737 565.719 315.863 565.163 315.934C565.671 315.701 566.197 315.51 566.735 315.361C567.777 315.007 569.266 314.559 571.13 314.038C580.874 311.385 590.9 309.906 600.995 309.63C602.932 309.63 604.494 309.63 605.577 309.63C606.141 309.619 606.704 309.647 607.264 309.714Z" fill="white"/>
                        <path d="M618.302 380.33C618.134 380.388 617.959 380.423 617.782 380.434L616.303 380.611L610.846 381.216C606.233 381.737 599.881 382.497 592.883 383.529C585.885 384.56 579.575 385.613 575.014 386.488L569.609 387.478L568.141 387.728C567.968 387.771 567.789 387.789 567.61 387.78C567.769 387.706 567.937 387.653 568.11 387.624L569.568 387.27C570.828 386.967 572.692 386.572 574.941 386.113C579.481 385.175 585.792 384.029 592.8 382.987C599.808 381.945 606.181 381.257 610.805 380.841C613.116 380.632 614.97 380.476 616.282 380.403L617.771 380.32C617.948 380.305 618.126 380.309 618.302 380.33Z" fill="white"/>
                        <path d="M594.487 421.145C591.198 421.832 587.875 422.344 584.532 422.677C581.214 423.206 577.87 423.554 574.514 423.719C581.122 422.522 587.789 421.676 594.487 421.187V421.145Z" fill="white"/>
                        <path d="M609.669 419.238C606.867 420.054 603.974 420.519 601.058 420.624C603.861 419.811 606.753 419.346 609.669 419.238Z" fill="white"/>
                        <path d="M624.144 419.217C621.86 419.579 619.534 419.579 617.25 419.217C619.534 418.856 621.86 418.856 624.144 419.217Z" fill="white"/>
                        <path d="M632.402 458.563C632.231 458.621 632.051 458.65 631.871 458.647L630.309 458.761L624.581 459.126L605.702 460.304L586.833 461.606L581.106 462.012L579.554 462.096C579.371 462.116 579.186 462.116 579.002 462.096C579.178 462.038 579.359 462.003 579.544 461.992L581.095 461.804C582.439 461.648 584.386 461.45 586.802 461.22C591.623 460.772 598.256 460.178 605.671 459.73C613.085 459.282 619.729 458.897 624.571 458.688C626.987 458.595 628.945 458.532 630.298 458.501H631.86C632.043 458.495 632.225 458.516 632.402 458.563Z" fill="white"/>
                        <g opacity="0.3">
                        <path opacity="0.3" d="M559.342 335.524C556.739 342.703 555.177 353.3 556.676 372.671C557.331 380.394 556.212 388.163 553.406 395.387C552.271 398.232 551.001 402.108 553.542 403.827C555.624 405.213 558.457 403.754 560.831 404.483C563.955 405.432 564.673 409.35 564.996 412.559C567.161 433.073 571.622 453.279 578.294 472.797C582.168 427.48 557.311 380.861 559.342 335.524Z" fill="black"/>
                        </g>
                        <g opacity="0.3">
                        <path opacity="0.3" d="M422.313 444.215L424.27 429.627C423.958 425.032 424.031 410.631 423.229 403.671C421.836 389.993 421.565 376.224 422.417 362.501C418.439 373.567 416.481 385.55 417.783 397.242C418.345 402.274 419.397 407.255 419.584 412.309C419.772 417.363 418.991 422.635 416.211 426.897C412.212 432.972 404.756 435.879 397.56 436.89C384.21 438.776 368.965 434.337 362.217 422.656C363.414 429.273 365.951 435.574 369.673 441.172C369.673 441.172 405.881 449.654 422.313 444.215Z" fill="black"/>
                        </g>
                        <g opacity="0.3">
                        <path opacity="0.3" d="M507.036 274.275C485.293 273.327 482.481 271.524 476.993 266.825C476.993 270.597 480.263 273.515 483.626 275.213C501.412 284.226 524.301 282.049 540.067 269.847C529.195 272.212 518.157 274.765 507.036 274.275Z" fill="black"/>
                        </g>
                        <path d="M271.517 402.139C280.249 399.635 289.332 398.579 298.405 399.013C309.178 399.369 319.963 398.993 330.686 397.888C340.193 407.016 343.317 418.457 343.432 430.982L280.629 424.177L271.517 402.139Z" fill="#FFBE9D"/>
                        <path d="M267.289 432.117C265.488 431.43 263.624 432.909 262.333 434.337C261.041 435.764 259.719 437.411 257.876 438.057L253.711 433.472L249.202 444.861C250.944 446.571 252.926 448.017 255.085 449.154C256.552 450.11 258.334 450.457 260.052 450.123C261.895 449.56 263.03 447.747 263.988 446.07L267.602 439.818C268.424 438.594 268.974 437.208 269.216 435.754C269.321 435.022 269.192 434.275 268.845 433.621C268.499 432.968 267.954 432.441 267.289 432.117Z" fill="#FFBE9D"/>
                        <path d="M271.986 401.931C271.986 401.931 257.293 411.611 254.648 413.059C252.003 414.508 240.184 439.599 240.184 439.599L242.36 470.119C244.103 469.915 245.737 469.166 247.029 467.977C248.321 466.789 249.206 465.223 249.556 463.502C251.138 457.25 251.794 443.308 251.794 443.308L262.572 429.596L284.794 422.937L271.986 401.931Z" fill="#FFBE9D"/>
                        <path d="M261.562 421.875C261.562 426.386 266.967 428.804 265.353 433.837C265.714 439.764 265.568 445.711 264.915 451.613C264.822 452.457 266.342 454.312 266.998 454.802C267.977 455.489 269.341 454.896 270.257 454.135C272.777 452.051 274.079 448.821 274.766 445.622C275.454 442.423 275.641 439.12 276.432 435.942C277.474 431.909 279.39 428.189 280.598 424.219C281.806 420.249 282.264 415.758 280.296 412.101" fill="#FFBE9D"/>
                        <path d="M260.875 422.281C261.213 422.417 261.521 422.618 261.781 422.875C262.533 423.523 263.155 424.308 263.614 425.188C264.863 427.387 265.592 430.836 265.8 434.566C265.974 437.78 265.974 441.001 265.8 444.215C265.748 445.455 265.675 446.445 265.623 447.143C265.614 447.495 265.565 447.844 265.478 448.185C265.406 447.843 265.382 447.492 265.405 447.143C265.405 446.33 265.405 445.361 265.405 444.215C265.405 441.756 265.467 438.349 265.238 434.608C265.191 431.42 264.518 428.273 263.26 425.344C262.664 424.183 261.855 423.144 260.875 422.281Z" fill="#EB996E"/>
                        <path d="M281.42 411.204C281.723 411.802 281.92 412.447 282.004 413.111C282.314 414.693 282.432 416.305 282.358 417.915C282.291 419.529 282.025 421.128 281.566 422.677C281.424 423.33 281.171 423.954 280.816 424.521C281.297 422.335 281.644 420.122 281.858 417.894C281.855 415.657 281.708 413.423 281.42 411.204Z" fill="#EB996E"/>
                        <path d="M262.416 429.564C262.197 429.939 261.939 430.288 261.645 430.606L259.375 433.378L255.97 437.432L253.888 439.818C253.14 440.616 252.528 441.531 252.076 442.527C251.817 443.591 251.646 444.675 251.565 445.768C251.461 446.81 251.378 447.852 251.305 448.894C251.149 450.863 251.013 452.645 250.899 454.187C250.784 455.729 250.628 456.917 250.493 457.751C250.454 458.193 250.342 458.627 250.16 459.032C250.178 458.593 250.22 458.154 250.285 457.719C250.357 456.886 250.43 455.635 250.514 454.166C250.597 452.697 250.691 450.832 250.805 448.862C250.868 447.82 250.93 446.778 251.034 445.736C251.104 444.592 251.285 443.458 251.576 442.35C252.048 441.296 252.692 440.327 253.481 439.484L255.564 437.119L259.063 433.139L261.458 430.481C261.744 430.143 262.065 429.835 262.416 429.564Z" fill="#EB996E"/>
                        <path d="M205.924 107.086C196.552 106.482 187.065 107.837 177.651 107.253C168.05 106.67 158.668 104.127 149.077 103.262C139.487 102.397 129.157 103.637 121.649 109.66C129.944 111.593 137.733 115.273 144.495 120.455C133.832 122.591 122.794 121.497 111.964 122.539C101.134 123.581 89.6692 127.28 83.5045 136.252C88.8301 135.136 94.3704 135.693 99.3677 137.847C104.365 140.001 108.575 143.647 111.423 148.287C101.984 157.185 89.605 162.3 76.6421 162.656C79.2038 173.785 91.2208 179.599 101.957 183.496C112.693 187.393 124.866 191.916 129.115 202.523L116.223 204.763C125.075 211.609 131.958 220.612 139.133 229.24C146.307 237.868 153.961 246.37 163.791 251.716C173.621 257.061 186.065 258.791 195.968 253.56L267.466 157.144C259.917 129.917 234.05 108.879 205.924 107.086Z" fill="#5DDEEC"/>
                        <path d="M278.845 206.602C287.658 168.186 263.682 129.895 225.291 121.076C186.9 112.256 148.633 136.248 139.82 174.664C131.006 213.079 154.983 251.37 193.373 260.19C231.764 269.009 270.031 245.017 278.845 206.602Z" fill="#F5F5F5"/>
                        <path d="M180.942 163.594C176.017 158.384 167.165 148.912 163.125 144.744L180.911 163.594H180.942Z" fill="#5DDEEC"/>
                        <path d="M280.66 190.686C280.66 190.686 280.66 190.29 280.66 189.529V188.102C280.66 187.539 280.66 186.883 280.566 186.132C280.473 185.382 280.442 184.559 280.369 183.642C280.296 182.725 280.129 181.725 279.994 180.641C279.692 178.484 279.213 176.004 278.546 173.253C277.77 170.205 276.792 167.211 275.62 164.292C274.242 160.815 272.584 157.456 270.663 154.247C265.966 146.403 259.821 139.526 252.555 133.98C243.736 127.262 233.469 122.702 222.575 120.664C216.526 119.525 210.355 119.175 204.216 119.622C201.006 119.848 197.816 120.294 194.667 120.955C191.439 121.654 188.259 122.563 185.149 123.675C181.973 124.854 178.88 126.247 175.892 127.843C172.84 129.491 169.906 131.35 167.113 133.407C164.284 135.53 161.602 137.841 159.085 140.326C156.553 142.895 154.204 145.639 152.056 148.537C149.872 151.503 147.929 154.639 146.245 157.915C145.839 158.738 145.37 159.551 145.006 160.405C144.641 161.26 144.235 162.093 143.86 162.948C143.173 164.688 142.454 166.418 141.892 168.158C140.688 171.752 139.783 175.439 139.185 179.182C137.941 186.773 137.941 194.516 139.185 202.106C139.786 205.85 140.695 209.537 141.903 213.131L142.35 214.464L142.579 215.131L142.829 215.788L143.871 218.403L145.027 220.946C145.391 221.8 145.849 222.613 146.266 223.436C147.95 226.709 149.89 229.845 152.066 232.814C154.212 235.714 156.561 238.458 159.095 241.025C161.618 243.511 164.304 245.826 167.134 247.954C169.925 250.006 172.855 251.861 175.902 253.508C181.793 256.675 188.104 258.987 194.646 260.375C197.796 261.032 200.986 261.477 204.195 261.709C210.334 262.161 216.505 261.81 222.554 260.667C228.209 259.618 233.711 257.868 238.934 255.457C243.764 253.264 248.33 250.53 252.544 247.308C259.804 241.764 265.946 234.89 270.643 227.052C272.565 223.84 274.223 220.478 275.599 216.996C276.77 214.08 277.747 211.09 278.525 208.046C279.22 205.267 279.702 202.801 279.973 200.647C280.108 199.605 280.254 198.563 280.348 197.657C280.442 196.75 280.483 195.906 280.546 195.167C280.608 194.427 280.629 193.76 280.639 193.197V191.77C280.639 191.009 280.639 190.613 280.639 190.613C280.639 190.613 280.639 191.009 280.639 191.77C280.639 192.155 280.639 192.624 280.639 193.197C280.639 193.77 280.639 194.416 280.556 195.167C280.473 195.917 280.442 196.74 280.369 197.667C280.296 198.595 280.14 199.574 280.015 200.668C279.713 202.825 279.254 205.305 278.588 208.067C277.823 211.123 276.852 214.123 275.683 217.049C274.318 220.548 272.667 223.928 270.747 227.156C266.053 235.023 259.908 241.925 252.638 247.496C243.799 254.255 233.498 258.845 222.564 260.896C216.495 262.04 210.303 262.39 204.143 261.938C200.924 261.706 197.723 261.261 194.563 260.604C187.982 259.221 181.631 256.905 175.704 253.727C172.647 252.073 169.707 250.211 166.905 248.152C161.122 243.884 156.02 238.761 151.774 232.96C149.592 229.989 147.642 226.854 145.943 223.582C145.526 222.748 145.068 221.936 144.693 221.081L143.537 218.518L142.496 215.902L142.236 215.246L142.007 214.579L141.559 213.235C140.335 209.622 139.415 205.914 138.81 202.148C138.207 198.357 137.894 194.525 137.873 190.686C137.896 186.83 138.21 182.981 138.81 179.172C139.416 175.419 140.325 171.722 141.528 168.116C142.1 166.314 142.819 164.573 143.506 162.833L144.662 160.27C145.027 159.416 145.495 158.603 145.901 157.769C147.598 154.496 149.547 151.36 151.733 148.391C153.889 145.481 156.248 142.726 158.793 140.149C161.322 137.651 164.018 135.329 166.863 133.199C172.402 129.102 178.5 125.824 184.972 123.467C188.095 122.359 191.284 121.451 194.521 120.747C203.747 118.828 213.258 118.725 222.523 120.445C233.45 122.502 243.745 127.087 252.586 133.834C259.872 139.386 266.035 146.274 270.747 154.133C274.266 160.078 276.911 166.5 278.598 173.201C279.265 175.952 279.723 178.411 280.025 180.599C280.15 181.641 280.296 182.683 280.379 183.6C280.462 184.517 280.514 185.351 280.566 186.101C280.619 186.851 280.65 187.508 280.65 188.071C280.65 188.633 280.65 189.113 280.65 189.498C280.66 190.259 280.66 190.686 280.66 190.686Z" fill="#263238"/>
                        <path d="M236.945 175.056C236.901 174.996 236.866 174.929 236.841 174.858L236.549 174.254C236.414 173.993 236.279 173.66 236.081 173.285L235.341 171.93C235.071 171.44 234.727 170.888 234.373 170.357C234.019 169.825 233.571 169.2 233.102 168.564C232.013 167.15 230.811 165.826 229.51 164.605C226.11 161.452 222.056 159.09 217.639 157.686C215.024 156.868 212.307 156.426 209.568 156.373C203.656 156.254 197.831 157.807 192.761 160.854C190.408 162.259 188.268 163.996 186.409 166.011C183.259 169.437 180.909 173.519 179.526 177.963C179.011 179.668 178.628 181.41 178.38 183.173C178.287 183.955 178.214 184.684 178.162 185.351C178.11 186.018 178.099 186.643 178.11 187.195C178.12 187.748 178.11 188.237 178.11 188.675C178.11 189.113 178.162 189.456 178.183 189.717C178.203 189.977 178.183 190.217 178.235 190.384C178.248 190.46 178.248 190.537 178.235 190.613V190.384C178.235 190.228 178.235 190.009 178.162 189.727C178.089 189.446 178.078 189.071 178.058 188.685C178.037 188.3 178.058 187.768 177.995 187.206C177.933 186.643 177.995 186.039 177.995 185.361C177.995 184.684 178.11 183.944 178.193 183.163C178.419 181.381 178.791 179.621 179.307 177.901C180.674 173.415 183.026 169.293 186.19 165.834C188.063 163.798 190.22 162.043 192.595 160.624C197.705 157.545 203.584 155.98 209.547 156.112C212.308 156.166 215.047 156.615 217.68 157.446C222.147 158.871 226.239 161.278 229.656 164.49C230.96 165.727 232.165 167.065 233.259 168.491C233.727 169.127 234.144 169.731 234.519 170.304C234.894 170.878 235.206 171.399 235.466 171.888L236.154 173.201C236.341 173.587 236.476 173.92 236.601 174.191L236.862 174.806C236.896 174.887 236.924 174.971 236.945 175.056Z" fill="#263238"/>
                        <path d="M230.801 173.524C230.703 173.426 230.616 173.318 230.541 173.201C230.374 172.993 230.166 172.649 229.843 172.253C228.989 171.098 228.041 170.014 227.011 169.012C224.366 166.416 221.2 164.411 217.723 163.13C214.246 161.849 210.536 161.322 206.84 161.583C204.701 161.728 202.587 162.123 200.54 162.76C199.159 163.187 197.815 163.723 196.52 164.365C196.062 164.584 195.719 164.792 195.479 164.907C195.36 164.978 195.235 165.037 195.104 165.084C195.211 164.996 195.326 164.92 195.448 164.855C195.677 164.719 196.01 164.501 196.489 164.271C197.776 163.584 199.121 163.012 200.509 162.562C204.058 161.38 207.82 160.978 211.538 161.385C215.257 161.791 218.844 162.996 222.054 164.917C223.915 166.017 225.632 167.344 227.167 168.867C228.205 169.887 229.153 170.995 229.999 172.18C230.301 172.597 230.499 172.941 230.655 173.17C230.812 173.399 230.801 173.524 230.801 173.524Z" fill="#263238"/>
                        <path d="M80.1827 149.475C77.4544 145.713 69.3216 143.379 64.7501 144.265C62.2613 144.723 59.9912 145.932 57.617 146.807C55.2427 147.683 52.5769 148.204 50.2235 147.287C57.5128 154.049 71.8208 154.852 80.1827 149.506" fill="#5DDEEC"/>
                        <path d="M714.032 476.778C714.032 476.934 569.464 477.048 391.166 477.048C212.869 477.048 68.2594 476.934 68.2594 476.778C68.2594 476.621 212.807 476.507 391.166 476.507C569.526 476.507 714.032 476.632 714.032 476.778Z" fill="#263238"/>
                        <path d="M172.855 212.296H168.274V177.394C167.92 177.751 167.399 178.164 166.709 178.634C166.039 179.085 165.276 179.535 164.419 179.986C163.581 180.437 162.687 180.859 161.737 181.254C160.806 181.648 159.894 181.958 159 182.183V177.507C160.006 177.225 161.067 176.85 162.184 176.38C163.32 175.892 164.428 175.357 165.508 174.775C166.607 174.174 167.641 173.554 168.609 172.915C169.577 172.258 170.415 171.62 171.123 171H172.855V212.296Z" fill="#263238"/>
                        <path d="M211.961 191.93C211.961 195.31 211.654 198.305 211.039 200.915C210.443 203.526 209.568 205.732 208.413 207.535C207.277 209.319 205.872 210.681 204.196 211.62C202.538 212.54 200.648 213 198.525 213C196.514 213 194.717 212.559 193.134 211.676C191.57 210.775 190.248 209.469 189.168 207.761C188.088 206.052 187.268 203.958 186.709 201.479C186.151 198.981 185.872 196.127 185.872 192.915C185.872 189.385 186.16 186.268 186.737 183.563C187.333 180.859 188.199 178.596 189.335 176.775C190.471 174.934 191.877 173.554 193.553 172.634C195.248 171.695 197.184 171.225 199.363 171.225C207.762 171.225 211.961 178.127 211.961 191.93ZM207.268 192.38C207.268 180.887 204.559 175.141 199.14 175.141C193.423 175.141 190.564 180.991 190.564 192.69C190.564 203.601 193.367 209.056 198.972 209.056C204.503 209.056 207.268 203.498 207.268 192.38Z" fill="#263238"/>
                        <path d="M225.592 192.155C222.836 192.155 220.639 191.244 219 189.423C217.361 187.582 216.542 185.131 216.542 182.07C216.542 178.728 217.408 176.099 219.14 174.183C220.872 172.249 223.209 171.282 226.151 171.282C229 171.282 231.207 172.174 232.771 173.958C234.354 175.742 235.145 178.249 235.145 181.479C235.145 184.709 234.261 187.3 232.492 189.254C230.741 191.188 228.441 192.155 225.592 192.155ZM225.983 174.38C224.214 174.38 222.818 175.047 221.793 176.38C220.769 177.695 220.257 179.507 220.257 181.817C220.257 184.089 220.76 185.864 221.765 187.141C222.771 188.399 224.14 189.028 225.872 189.028C227.622 189.028 228.991 188.371 229.978 187.056C230.965 185.742 231.458 183.92 231.458 181.592C231.458 179.319 230.965 177.554 229.978 176.296C229.009 175.019 227.678 174.38 225.983 174.38ZM252.408 171.901L226.709 212.577H222.715L248.385 171.901H252.408ZM249.447 212.915C246.691 212.915 244.493 211.995 242.855 210.155C241.216 208.315 240.397 205.873 240.397 202.831C240.397 199.488 241.272 196.85 243.022 194.915C244.773 192.962 247.101 191.986 250.006 191.986C252.836 191.986 255.043 192.887 256.626 194.69C258.209 196.493 259 199.019 259 202.268C259 205.479 258.115 208.061 256.346 210.014C254.596 211.948 252.296 212.915 249.447 212.915ZM249.838 195.169C248.05 195.169 246.644 195.826 245.62 197.141C244.615 198.455 244.112 200.277 244.112 202.606C244.112 204.84 244.615 206.596 245.62 207.873C246.626 209.131 247.994 209.761 249.726 209.761C251.477 209.761 252.845 209.103 253.832 207.789C254.819 206.455 255.313 204.634 255.313 202.324C255.313 200.033 254.819 198.268 253.832 197.028C252.864 195.789 251.533 195.169 249.838 195.169Z" fill="#263238"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <section class="faq section" id="faq">
        <div class="container">
            <div class="section__inner faq__inner">
                <div class="section__title faq__title">
                    <h2>Часто задаваемые вопросы</h2>
                </div>
                <div class="faq__content">
                    <div class="faq__left-col">
                        <p class="faq__text">Изучите наши часто задаваемые вопросы, 
                        чтобы узнать больше о наших возможностях 
                        домашнего тестирования</p>

                        <p class="faq__mail">Вы также можете написать нам по адресу 
                        <a href="mailto:support@imaware.health" class="mail__link">support@imaware.health</a></p>
                    </div>
                    <div class="faq-accordion">
                        <div class="faq-accordion__list">
                            <div class="faq-accordion__item">
                                <div class="faq-accordion__header">
                                    <span class="faq-accordion__header-text">
                                        Сколько времени нужно, чтобы получить результат? 
                                    </span>
                                    <div class="faq-accordion__header-pic">
                                        <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="17" width="3" height="37" fill="#5DDEEC"/>
                                            <rect y="20" width="3" height="37" transform="rotate(-90 0 20)" fill="#5DDEEC"/>
                                        </svg>      
                                    </div>
                                </div>
                                <div class="faq-accordion__body">
                                    В течение 7 дней после возврата образца вы получите 
                                    от нас электронное письмо со ссылкой для просмотра 
                                    результатов тестирования на нашей безопасной платформе 
                                    цифрового здравоохранения, когда они будут готовы.
                                </div>
                            </div>
                            <div class="faq-accordion__item">
                                <div class="faq-accordion__header">
                                    <span class="faq-accordion__header-text">
                                        Подтверждает ли врач результаты теста?
                                    </span>
                                    <div class="faq-accordion__header-pic">
                                        <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="17" width="3" height="37" fill="#5DDEEC"/>
                                            <rect y="20" width="3" height="37" transform="rotate(-90 0 20)" fill="#5DDEEC"/>
                                        </svg>      
                                    </div>
                                </div>
                                <div class="faq-accordion__body">
                                   Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                   In, quasi quidem? Dolorum error saepe iusto a possimus, 
                                   similique ipsam placeat repellendus, soluta mollitia hic 
                                   reiciendis, exercitationem repudiandae quidem dicta fuga?
                                </div>
                            </div>
                            <div class="faq-accordion__item">
                                <div class="faq-accordion__header">
                                    <span class="faq-accordion__header-text">
                                        Надежно ли хранятся результаты моих тестов?
                                    </span>
                                    <div class="faq-accordion__header-pic">
                                        <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="17" width="3" height="37" fill="#5DDEEC"/>
                                            <rect y="20" width="3" height="37" transform="rotate(-90 0 20)" fill="#5DDEEC"/>
                                        </svg>      
                                    </div>
                                </div>
                                <div class="faq-accordion__body">
                                   Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                   In, quasi quidem? Dolorum error saepe iusto a possimus, 
                                   similique ipsam placeat repellendus, soluta mollitia hic 
                                   reiciendis, exercitationem repudiandae quidem dicta fuga?
                                </div>
                            </div>
                            <div class="faq-accordion__item">
                                <div class="faq-accordion__header">
                                    <span class="faq-accordion__header-text">
                                        Надежно ли хранятся результаты моих тестов?
                                    </span>
                                    <div class="faq-accordion__header-pic">
                                        <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="17" width="3" height="37" fill="#5DDEEC"/>
                                            <rect y="20" width="3" height="37" transform="rotate(-90 0 20)" fill="#5DDEEC"/>
                                        </svg>      
                                    </div>
                                </div>
                                <div class="faq-accordion__body">
                                   Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                   In, quasi quidem? Dolorum error saepe iusto a possimus, 
                                   similique ipsam placeat repellendus, soluta mollitia hic 
                                   reiciendis, exercitationem repudiandae quidem dicta fuga?
                                </div>
                            </div>
                            <div class="faq-accordion__item">
                                <div class="faq-accordion__header">
                                    <span class="faq-accordion__header-text">
                                        Надежно ли хранятся результаты моих тестов?
                                    </span>
                                    <div class="faq-accordion__header-pic">
                                        <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="17" width="3" height="37" fill="#5DDEEC"/>
                                            <rect y="20" width="3" height="37" transform="rotate(-90 0 20)" fill="#5DDEEC"/>
                                        </svg>      
                                    </div>
                                </div>
                                <div class="faq-accordion__body">
                                   Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                   In, quasi quidem? Dolorum error saepe iusto a possimus, 
                                   similique ipsam placeat repellendus, soluta mollitia hic 
                                   reiciendis, exercitationem repudiandae quidem dicta fuga?
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php
get_footer();
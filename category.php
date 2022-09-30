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
 * @package domiktut
 */


?>
<?php /*
$id_user = $_GET['user-id'];
if ($id_user == '0') :
    $id_user = $_COOKIE['user-id'];
    if ($id_user == '0') :
        $id_user = '6';
    endif;
else :
    setcookie('user-id',  $id_user, time() + 60 * 60 * 24 * 30, '/');
endif;*/
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,
      maximum-scale=1.0, user-scalable=0">
    <meta name="color-scheme" content="only light">
    <meta name="description" content="Посуточная аренда коттеджей и домов в городе от компании DOMIKTUT.RU. Низкие цены. Звонок бесплатный!!!!">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/ico.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style1.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/header.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/footer.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slider.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slider-counter.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/search-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/phone-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/form-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/popup-geo.css  ">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/photo-gallery-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sorry.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/adaptive.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/map.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/house_page.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/house_page-adaptive.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/catalog.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/catalog-adaptive.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700;800&display=swap&subset=cyrillic-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic&display=swap&subset=cyrillic-ext" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/slider.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/slider-counter.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/search-popup.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/phone-popup.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/form-popup.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/burger.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/faq.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/header.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/photo-gallery-popup.js"></script>
    <script defer src="<?php echo get_template_directory_uri(); ?>/hidden-block.js"></script>
    <script defer src="<?php echo get_template_directory_uri(); ?>/filters-btn.js"></script>
    <script defer src="<?php echo get_template_directory_uri(); ?>/local-main.js"></script>
    <script>
        let user_id = <?php echo get_current_user_id()  ?>;
        console.log(user_id);
    </script>
    <title>Каталог объектов от компании Domiktut.ru</title>

</head>

<header class="header-white">
    <nav class="nav-light ">
        <div class="nav__section">
            <a href="https://domiktut.ru/" class="logo-light">
            </a>
            <div class="geo tablet-hidden">
                <img src="<?php bloginfo('template_url'); ?>/images/svg/geo.svg" alt="">
                <button class="city-list-btn"><span class="city-name_mod">Казань</span>
                    <ul class="city-list">
                        <li data-id="6"><a href="">Казань</a> </li>
                        <li data-id="5"><a href="">Москва</a> </li>

                    </ul>
                </button>
                <div class="arrow-light"></div>
            </div>
            <a href="<?php echo get_category_link($_COOKIE["selected_city"]) ?>" class="nav__btn nav__btn-light mobile-hidden">Каталог</a>
        </div>
        <div class="nav__section tablet-hidden">
            <!-- <a class="nav__item nav__item-light" href="https://24fedoseyev.ru/#cooperation">Частые вопросы</a> -->
            <!-- <a class="nav__item nav__item-light" href="https://24fedoseyev.ru/#cooperation">Сотрудничество</a> -->
        </div>
        <div class="nav__section">
            <div class="nav__item nav__item-light">
                <div id="tel" class="tel tel-ico">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.5004 11.6833C15.5002 11.6833 15.5 11.6835 15.5 11.6838V14.63C15.5001 14.841 15.4202 15.0441 15.2763 15.1985C15.1325 15.3528 14.9355 15.4469 14.725 15.4617C14.3608 15.4867 14.0633 15.5 13.8333 15.5C6.46917 15.5 0.5 9.53083 0.5 2.16667C0.5 1.93667 0.5125 1.63917 0.538333 1.275C0.553102 1.06454 0.647151 0.867509 0.801503 0.723674C0.955855 0.579839 1.15902 0.499905 1.37 0.5H4.31667C4.42003 0.499896 4.51975 0.538216 4.59644 0.607517C4.67313 0.676818 4.72133 0.772152 4.73167 0.875C4.75083 1.06667 4.76833 1.21917 4.785 1.335C4.95061 2.49077 5.29 3.61486 5.79167 4.66917C5.87083 4.83583 5.81917 5.035 5.66917 5.14167L5.18105 5.49045C4.41614 6.03702 4.11879 7.05445 4.61299 7.8542C5.50046 9.29038 6.71079 10.5007 8.147 11.3881C8.94661 11.8821 9.96382 11.585 10.5105 10.8204L10.8575 10.335C10.91 10.2617 10.9865 10.2091 11.0737 10.1864C11.161 10.1637 11.2535 10.1723 11.335 10.2108C12.3892 10.7116 13.513 11.0501 14.6683 11.215C14.7842 11.2317 14.9367 11.25 15.1267 11.2683C15.2294 11.2789 15.3245 11.3271 15.3936 11.4038C15.4627 11.4804 15.5009 11.5798 15.5008 11.6829C15.5008 11.6831 15.5006 11.6833 15.5004 11.6833Z" />
                    </svg>
                </div>
                <a href="tel:+79272400954" class="laptop-hidden tel-link">+79272400954</a>
            </div>
            <a class="favorites mobile-hidden nav__item mobile-hidden" href=<?php the_permalink(3523); ?>>
                <div class="like-marker_header"></div>
                <svg width="22" height="21" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.0004 1.90639C13.5452 -0.378355 17.4777 -0.302522 19.9293 2.15339C22.3798 4.61039 22.4643 8.52339 20.1849 11.0757L10.9983 20.2754L1.81377 11.0757C-0.465561 8.52339 -0.379978 4.60389 2.06944 2.15339C4.52319 -0.299272 8.44811 -0.381605 11.0004 1.90639ZM18.3953 3.68414C16.7703 2.05698 14.1486 1.9909 12.4478 3.51839L11.0015 4.81623L9.55419 3.51948C7.84794 1.98981 5.23169 2.05698 3.60236 3.68631C1.98819 5.30048 1.90694 7.88423 3.39436 9.59156L10.9994 17.2085L18.6044 9.59264C20.0929 7.88423 20.0116 5.30373 18.3953 3.68414Z" fill="#F4683F" />
                </svg>
            </a>
            <button id="search" class="search search-light nav__item">
                <div class="search-ico">
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.031 14.617L20.314 18.899L18.899 20.314L14.617 16.031C13.0237 17.3082 11.042 18.0029 9 18C4.032 18 0 13.968 0 9C0 4.032 4.032 0 9 0C13.968 0 18 4.032 18 9C18.0029 11.042 17.3082 13.0237 16.031 14.617ZM14.025 13.875C15.2941 12.5699 16.0029 10.8204 16 9C16 5.132 12.867 2 9 2C5.132 2 2 5.132 2 9C2 12.867 5.132 16 9 16C10.8204 16.0029 12.5699 15.2941 13.875 14.025L14.025 13.875Z" />
                    </svg>
                </div>
                <span class="laptop-hidden">Поиск по названию</span>
            </button>
            <div class="burger burger-light hidden">
                <span></span>
            </div>
        </div>
    </nav>

</header>
<div class="popup-geo">
    <div class="geo-form">
        <span>Выберите город</span>
        <button class="cities">
            <a href="" data-id="6">Казань</a>
            <a href="" data-id="5">Москва</a>
        </button>
    </div>
</div>
<?php if (is_user_logged_in()) { ?>
    <button type="submit" class="generate-collection">Сгенерировать</button>
<?php } ?>

<!-- <div class="preloader" id="preloader">

</div> -->
<div class="popup-sorry">
    <div class="form-popup-sorry">
        Приносим свои извинения, данный сервис сейчас находится на стадии разработки
    </div>
</div>
<div class="search-popup">
    <?php get_search_form(); ?>
</div>
<form class="pop-up_selections" action="" method="GET">
    <div class="pop-up_filters-header">

        <button class="btn-close-selections" type="reset"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_102_4710)">
                    <path d="M13.6738 14.8604L19.8613 8.67293L18.0938 6.90543L10.1388 14.8604L18.0938 22.8154L19.8613 21.0479L13.6738 14.8604Z" fill="#333333" />
                </g>
                <defs>
                    <clipPath id="clip0_102_4710">
                        <rect width="30" height="30" fill="white" transform="matrix(4.37114e-08 -1 -1 -4.37114e-08 30 30)" />
                    </clipPath>
                </defs>
            </svg>
        </button>
        <button class="btn-reset" type="reset">Сбросить Фильтры</button>
    </div>
    <p class="filters-caption">Быстрые подборки</p>
    <div class="filters-item">
        <a href="" class="filters-selections-link">С бассейном</a>
        <a href="" class="filters-selections-link">Семейные и уютные</a>
        <a href="" class="filters-selections-link">Хиты продаж</a>
        <a href="" class="filters-selections-link">Под свадьбы и корпоративы</a>
        <a href="" class="filters-selections-link">С русской баней на дровах</a>
    </div>
</form>
<form class="pop-up_filters" action="" method="GET">
    <div class="pop-up_filters-header">
        <button class="btn-close-filters" type="reset">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_102_4710)">
                    <path d="M13.6738 14.8604L19.8613 8.67293L18.0938 6.90543L10.1388 14.8604L18.0938 22.8154L19.8613 21.0479L13.6738 14.8604Z" fill="#333333" />
                </g>
                <defs>
                    <clipPath id="clip0_102_4710">
                        <rect width="30" height="30" fill="white" transform="matrix(4.37114e-08 -1 -1 -4.37114e-08 30 30)" />
                    </clipPath>
                </defs>
            </svg>
        </button>
        <button class="btn-reset" type="reset">Сбросить Фильтры</button>
    </div>
    <p class="filters-caption">Даты заезда</p>
    <input class="filters-item" type="date">
    <p class="filters-caption">Количество человек</p>
    <input class="filters-item filter-people" type="text" name="[number_of_people]">
    <p class="filters-caption">Бассейн</p>
    <div class="filters-item">
        <input id="checkbox-waterpool-summer" class="checkbox__input" type="checkbox" name="waterpool_type[summer]">
        <label for="checkbox-waterpool-summer" class="checkbox__label">Летний</label>
        <input id="checkbox-waterpool-inside" class="checkbox__input" type="checkbox" name="waterpool_type[inside]">
        <label for="checkbox-waterpool-inside" class="checkbox__label">Внутренний</label>
        <input id="checkbox-waterpool-baptistery" class="checkbox__input" type="checkbox" name="waterpool_type[inside]">
        <label for="checkbox-waterpool-baptistery" class="checkbox__label" name="waterpool_type[baptistery]">Купель</label>
    </div>
    <p class="filters-caption">Развлечения</p>
    <div class="filters-item">
        <input id="checkbox-sauna" class="checkbox__input" type="checkbox" name="entertainment[sauna]">
        <label for="checkbox-sauna" class="checkbox__label">Сауна или баня (без веников)</label>
        <input id="checkbox-russian_bath" class="checkbox__input" type="checkbox" name="entertainment[russian_bath]">
        <label for="checkbox-russian_bath" class="checkbox__label">Русская баня на дровах</label>
        <input id="checkbox-hammam" class="checkbox__input" type="checkbox" name="entertainment[hammam]">
        <label for="checkbox-hammam" class="checkbox__label">Хаммам</label>
        <input id="checkbox-billiards" class="checkbox__input" type="checkbox" name="entertainment[billiards]">
        <label for="checkbox-billiards" class="checkbox__label">Бильярд</label>
        <input id="checkbox-tennis" class="checkbox__input" type="checkbox" name="entertainment[tennis]">
        <label for="checkbox-tennis" class="checkbox__label">Настольный теннис</label>
    </div>
    <p class="filters-caption">Спальни и спальные места</p>
    <div class="filters-item">
        Количество спален
        <input class=" filter-beds" type="text" name="[number_of_beds]">
    </div>
    <div class="filters-item">
        Количество спальных мест
        <input class=" filter-beds" type="text" name="[number_of_bedrooms]">
    </div>
    <p class="filters-caption">Цена</p>
    <p class="filters-caption">Расположение</p>
    <div class="filters-item">
        <input id="checkbox-location-city" class="checkbox__input" type="checkbox" name="checkbox-location[location-city]">
        <label for="checkbox-location-city" class="checkbox__label">В городе</label>
        <input id="checkbox-location-outside-city" class="checkbox__input" type="checkbox" name="checkbox-location[outside-city]">
        <label for="checkbox-location-outside-city" class="checkbox__label">За городом</label>
    </div>
    <p class="filters-caption">Удобства</p>
    <div class="filters-item">
        <input id="checkbox-comfort-wi-fi" class="checkbox__input" type="checkbox" name="checkbox-comfort[wi-fi]">
        <label for="checkbox-comfort-wi-fi" class="checkbox__label">Wi-Fi</label>
        <input id="checkbox-comfort-jacuzzi" class="checkbox__input" type="checkbox" name="checkbox-comfort[jacuzzi]">
        <label for="checkbox-comfort-jacuzzi" class="checkbox__label">Джакузи</label>
        <input id="checkbox-comfort-fireplace" class="checkbox__input" type="checkbox" name="checkbox-comfort[fireplace]">
        <label for="checkbox-comfort-fireplace" class="checkbox__label">Камин</label>
        <input id="checkbox-comfort-child-playground" class="checkbox__input" type="checkbox" name="checkbox-comfort[child-playground]">
        <label for="checkbox-comfort-child-playground" class="checkbox__label">Детская лощадка</label>
        <input id="checkbox-comfort-playground" class="checkbox__input" type="checkbox" name="checkbox-comfort[playground]">
        <label for="checkbox-comfort-playground" class="checkbox__label">Спортивная площадка</label>
        <input id="checkbox-comfort-poker" class="checkbox__input" type="checkbox" name="checkbox-comfort[poker]">
        <label for="checkbox-comfort-poker" class="checkbox__label">Покерный стол</label>
        <input id="checkbox-comfort-parking" class="checkbox__input" type="checkbox" name="checkbox-comfort[parking]">
        <label for="checkbox-comfort-parking" class="checkbox__label">Закрытая парковка</label>
        <input id="checkbox-comfort-scene" class="checkbox__input" type="checkbox" name="checkbox-comfort[scene]">
        <label for="checkbox-comfort-scene" class="checkbox__label">Сцена для артистов</label>
        <input id="checkbox-comfort-console" class="checkbox__input" type="checkbox" name="checkbox-comfort[console]">
        <label for="checkbox-comfort-console" class="checkbox__label">Игровая приставка</label>
        <input id="checkbox-comfort-heated-pool" class="checkbox__input" type="checkbox" name="checkbox-comfort[heated-pool]">
        <label for="checkbox-comfort-heated-pool" class="checkbox__label">Бассейн с подогревом</label>
        <input id="checkbox-comfort-pond" class="checkbox__input" type="checkbox" name="checkbox-comfort[pond]">
        <label for="checkbox-comfort-pond" class="checkbox__label">Близость к водоему</label>
        <input id="checkbox-comfort-alcove" class="checkbox__input" type="checkbox" name="checkbox-comfort[alcove]">
        <label for="checkbox-comfort-alcove" class="checkbox__label">Беседка</label>
        <input id="checkbox-comfort-vat" class="checkbox__input" type="checkbox" name="checkbox-comfort[vat]">
        <label for="checkbox-comfort-vat" class="checkbox__label">Японское фурако (чан)</label>
        <input id="checkbox-comfort-karaoke" class="checkbox__input" type="checkbox" name="checkbox-comfort[karaoke]">
        <label for="checkbox-comfort-karaoke" class="checkbox__label">Караоке</label>
        <input id="checkbox-comfort-check-in" class="checkbox__input" type="checkbox" name="checkbox-comfort[check-in]">
        <label for="checkbox-comfort-check-in" class="checkbox__label">Место для выездной регистрации</label>
        <input id="checkbox-comfort-kitchen" class="checkbox__input" type="checkbox" name="checkbox-comfort[kitchen]">
        <label for="checkbox-comfort-kitchen" class="checkbox__label">Профессиональная кухня (подходит для кейтеринга)</label>
        <input id="checkbox-comfort-music" class="checkbox__input" type="checkbox" name="checkbox-comfort[music]">
        <label for="checkbox-comfort-music" class="checkbox__label">Световое и музыкальное оборудование</label>
    </div>
    <p class="filters-caption">Тип жилья</p>
    <div class="filters-item">
        <input id="checkbox-type_of_house-unique" class="checkbox__input" type="checkbox" name="checkbox-type_of_house[unique]">
        <label for="checkbox-type_of_house-unique" class="checkbox__label">Уникальное жилье</label>
        <input id="checkbox-type_of_house-wood" class="checkbox__input" type="checkbox" name="checkbox-type_of_house[wood]">
        <label for="checkbox-type_of_house-wood" class="checkbox__label">Деревянный/Шале</label>
        <input id="checkbox-type_of_house-villa" class="checkbox__input" type="checkbox" name="checkbox-type_of_house[villa]">
        <label for="checkbox-type_of_house-villa" class="checkbox__label">Вилла</label>
        <input id="checkbox-type_of_house-townhouse" class="checkbox__input" type="checkbox" name="checkbox-type_of_house[townhouse]">
        <label for="checkbox-type_of_house-townhouse" class="checkbox__label">Таунхаус</label>
        <input id="checkbox-type_of_house-loft" class="checkbox__input" type="checkbox" name="checkbox-type_of_house[loft]">
        <label for="checkbox-type_of_house-loft" class="checkbox__label">Лофт</label>
        <input id="checkbox-type_of_house-cottage" class="checkbox__input" type="checkbox" name="checkbox-type_of_house[cottage]">
        <label for="checkbox-type_of_house-cottage" class="checkbox__label">Коттедж</label>
    </div>
    <p class="filters-caption">Условия</p>
    <div class="filters-item">
        <input id="checkbox-type_of_house" class="checkbox__input" type="checkbox" name="checkbox-type_of_house">
        <label for="checkbox-type_of_house" class="checkbox__label">Все включено (нет обязательных дополнительных плат)</label>
        <input id="checkbox-type_of_house" class="checkbox__input" type="checkbox" name="checkbox-type_of_house">
        <label for="checkbox-type_of_house" class="checkbox__label">Сдается на одни сутки в выходные (для мск)</label>
        <input id="checkbox-type_of_house" class="checkbox__input" type="checkbox" name="checkbox-type_of_house">
        <label for="checkbox-type_of_house" class="checkbox__label">Разрешено курение кальяна в доме</label>
        <input id="checkbox-type_of_house" class="checkbox__input" type="checkbox" name="checkbox-type_of_house">
        <label for="checkbox-type_of_house" class="checkbox__label">Разрешены вечеринки</label>
        <input id="checkbox-type_of_house" class="checkbox__input" type="checkbox" name="checkbox-type_of_house">
        <label for="checkbox-type_of_house" class="checkbox__label">Уникальное жилье</label>
    </div>
    <button type="submit">Показать варианты</button>
</form>
<main>
    <div class="filters">
        
        <button class="btn-orange btn-orange_filters">Подборки</button>
        <button class="filters__btn filters__btn_mod filters__btn_mobile">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.17 14.0025C12.3766 13.4169 12.7597 12.9099 13.2666 12.5512C13.7735 12.1926 14.3791 12 15 12C15.6209 12 16.2265 12.1926 16.7334 12.5512C17.2403 12.9099 17.6234 13.4169 17.83 14.0025H22V16.0025H17.83C17.6234 16.588 17.2403 17.095 16.7334 17.4537C16.2265 17.8123 15.6209 18.0049 15 18.0049C14.3791 18.0049 13.7735 17.8123 13.2666 17.4537C12.7597 17.095 12.3766 16.588 12.17 16.0025H2V14.0025H12.17ZM6.17 7.00245C6.3766 6.41692 6.75974 5.90988 7.2666 5.55124C7.77346 5.1926 8.37909 5 9 5C9.62091 5 10.2265 5.1926 10.7334 5.55124C11.2403 5.90988 11.6234 6.41692 11.83 7.00245H22V9.00245H11.83C11.6234 9.58798 11.2403 10.095 10.7334 10.4537C10.2265 10.8123 9.62091 11.0049 9 11.0049C8.37909 11.0049 7.77346 10.8123 7.2666 10.4537C6.75974 10.095 6.3766 9.58798 6.17 9.00245H2V7.00245H6.17ZM9 9.00245C9.26522 9.00245 9.51957 8.89709 9.70711 8.70956C9.89464 8.52202 10 8.26767 10 8.00245C10 7.73723 9.89464 7.48288 9.70711 7.29534C9.51957 7.10781 9.26522 7.00245 9 7.00245C8.73478 7.00245 8.48043 7.10781 8.29289 7.29534C8.10536 7.48288 8 7.73723 8 8.00245C8 8.26767 8.10536 8.52202 8.29289 8.70956C8.48043 8.89709 8.73478 9.00245 9 9.00245ZM15 16.0025C15.2652 16.0025 15.5196 15.8971 15.7071 15.7096C15.8946 15.522 16 15.2677 16 15.0025C16 14.7372 15.8946 14.4829 15.7071 14.2953C15.5196 14.1078 15.2652 14.0025 15 14.0025C14.7348 14.0025 14.4804 14.1078 14.2929 14.2953C14.1054 14.4829 14 14.7372 14 15.0025C14 15.2677 14.1054 15.522 14.2929 15.7096C14.4804 15.8971 14.7348 16.0025 15 16.0025Z" fill="#333333" />
            </svg>
            <span class="filter-title">Фильтры</span>

        </button>
    </div>
    <?php
    // args
    $posts = get_posts(array(
        'numberposts'    => -1,
        'post_type'        => 'post',
        'meta_query'    => array(
            'relation'        => 'AND',
            array(
                'key'        => 'waterpool_type',
                'value'        => 'summer',
                'compare'    => 'IN'
            ),
            array(
                'key'        => 'waterpool_type',
                'value'        => 'inside',
                'compare'    => 'IN'
            ),
            array(
                'key'        => 'entertainment',
                'value'        => 'sauna',
                'compare'    => 'IN'
            )
        )
    ));
    // query
    $the_query = new WP_Query($posts);
    ?>

    <div class="container-catalog">
        <div class="catalog-wrapper">
            <div class="catalog">
                <?php
                $city = json_decode($_COOKIE["selected_city"]);
                $myMap = [];
                $map = get_field('map');
                $myposts = new WP_Query(['numberposts' => '-1', 'post_type'   => 'post', 'cat' => [$city]]);
                if ($myposts->have_posts()) {
                    while ($myposts->have_posts()) {
                        $myposts->the_post();

                        $coordinates = get_field('map');
                        $coordinates["name"] = get_the_title();
                        $coordinates["price"] = "<span>от </span>" . get_field('weekday_price') . "<span> ₽</span>";
                        $coordinates["link"] = get_permalink();
                        $coordinates["photo"] = acf_photo_gallery('house_photo');

                        array_push($myMap, $coordinates);
                        get_template_part('template-parts/content-card', get_post_type());
                    }
                } else {
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>

        <script>
            let map_markers = [
                <?php
                $map = get_field('map');
                foreach ($myMap as $map) :
                ?> {
                        "lat": <?php echo $map["lat"] ?>,
                        "lng": <?php echo $map["lng"] ?>,
                        "name": `<?php echo $map["name"] ?>`,
                        "price": `<?php echo $map["price"] ?>`,
                        "link": `<?php echo $map["link"] ?>`,
                        "photo": `<?php echo $map["photo"] ?>`,
                    },
                <?php
                endforeach; ?>
            ]
            console.log(map_markers);
        </script>
        <div id="map" class="map"></div>
    </div>
    <div class="burger__nav">
        <div class="geo">
            <img src="<?php bloginfo('template_url'); ?>/images/svg/geo.svg" alt="">
            <button class="city-list-btn"><span class="city-name_mod-white">Казань</span>
                <ul class="city-list">
                    <li data-id="6"><a href="">Казань</a> </li>
                    <li data-id="5"><a href="">Москва</a> </li>
                </ul>
            </button>
            <div class="arrow"></div>
        </div>
        <div class="burger__item">
            <button class="burger-btn catering__btn-burger">Повар - Кейтеринг</button>
            <button class="btn-orange call_request-btn">Заявка на подбор</button>
        </div>
        <div class="burger__item">
            <!-- <a class="burger__faq" href="#faq">Частые вопросы</a> -->
            <!-- <a class="burger__cooperation" href="#cooperation">Сотрудничество</a> -->
        </div>
        <div class="burger__item">
            <a class="burger__tel " href="tel:+79272400954" id="tel">
                <div class="tel-ico">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.5004 11.6833C15.5002 11.6833 15.5 11.6835 15.5 11.6838V14.63C15.5001 14.841 15.4202 15.0441 15.2763 15.1985C15.1325 15.3528 14.9355 15.4469 14.725 15.4617C14.3608 15.4867 14.0633 15.5 13.8333 15.5C6.46917 15.5 0.5 9.53083 0.5 2.16667C0.5 1.93667 0.5125 1.63917 0.538333 1.275C0.553102 1.06454 0.647151 0.867509 0.801503 0.723674C0.955855 0.579839 1.15902 0.499905 1.37 0.5H4.31667C4.42003 0.499896 4.51975 0.538216 4.59644 0.607517C4.67313 0.676818 4.72133 0.772152 4.73167 0.875C4.75083 1.06667 4.76833 1.21917 4.785 1.335C4.95061 2.49077 5.29 3.61486 5.79167 4.66917C5.87083 4.83583 5.81917 5.035 5.66917 5.14167L5.18105 5.49045C4.41614 6.03702 4.11879 7.05445 4.61299 7.8542C5.50046 9.29038 6.71079 10.5007 8.147 11.3881C8.94661 11.8821 9.96382 11.585 10.5105 10.8204L10.8575 10.335C10.91 10.2617 10.9865 10.2091 11.0737 10.1864C11.161 10.1637 11.2535 10.1723 11.335 10.2108C12.3892 10.7116 13.513 11.0501 14.6683 11.215C14.7842 11.2317 14.9367 11.25 15.1267 11.2683C15.2294 11.2789 15.3245 11.3271 15.3936 11.4038C15.4627 11.4804 15.5009 11.5798 15.5008 11.6829C15.5008 11.6831 15.5006 11.6833 15.5004 11.6833Z" />
                    </svg>
                </div>
                <span class="">+79272400954</span>
            </a>
            <div class="burger__links links">
                <a href="https://www.youtube.com/channel/UCWAmI8cRR_xYBeynvcGqfjQ/featured">
                    <svg width="29" height="20" viewBox="0 0 29 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9788 0.0100056C7.11958 0.161129 4.95137 0.311765 3.82601 0.576596C2.95294 0.782028 2.24144 1.18623 1.61114 1.83485C0.944093 2.52122 0.639478 3.11109 0.420941 4.13987C-0.141002 6.78455 -0.140153 13.2102 0.422527 15.8582C0.639875 16.8812 0.954286 17.4897 1.60956 18.1557C2.2659 18.8228 3.0679 19.2519 4.01403 19.4422C5.97593 19.8368 12.714 20.0993 17.4153 19.9642C22.0152 19.8321 24.3567 19.6541 25.4002 19.3571C26.7937 18.9605 27.8999 17.9436 28.3755 16.6221C29.0985 14.6127 29.225 7.28546 28.59 4.2016C28.3623 3.09593 27.9345 2.31004 27.2026 1.65243C26.5577 1.07312 25.8502 0.721492 24.9819 0.548872C24.0281 0.359197 21.97 0.18869 19.3973 0.086136C17.9571 0.0287406 13.0091 -0.0220492 11.9788 0.0100056ZM17.5285 2.19834C22.0099 2.32548 24.3105 2.51764 25.0228 2.82438C25.591 3.06907 26.0053 3.48226 26.1995 3.99795C26.3496 4.39647 26.4972 5.23412 26.5992 6.26561C26.725 7.5386 26.7434 11.9848 26.6283 13.3253C26.4944 14.8852 26.327 15.8118 26.1033 16.231C25.8165 16.7685 25.2403 17.1818 24.5736 17.3283C22.9864 17.6769 16.2053 17.9241 11.6956 17.7977C8.05115 17.6956 5.51654 17.5301 4.51713 17.3292C3.47615 17.1198 2.86392 16.5025 2.64074 15.437C2.14149 13.0536 2.14149 6.93692 2.64074 4.55355C2.76182 3.97554 2.96421 3.58211 3.31085 3.25089C3.84957 2.73607 4.34905 2.59626 6.18795 2.44557C9.23275 2.19601 13.8768 2.09481 17.5285 2.19834ZM11.6107 14.3936L19.4688 9.9857C19.4688 9.9857 19.4688 9.9857 11.6107 5.60486V14.3936Z" />
                    </svg>
                </a>
                <a href="https://www.instagram.com/andrey_domiktut/">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.3799 7.83078C10.5394 7.83078 9.73335 8.16466 9.13904 8.75898C8.54473 9.35329 8.21085 10.1593 8.21085 10.9998C8.21085 11.8403 8.54473 12.6464 9.13904 13.2407C9.73335 13.835 10.5394 14.1689 11.3799 14.1689C12.2204 14.1689 13.0264 13.835 13.6208 13.2407C14.2151 12.6464 14.5489 11.8403 14.5489 10.9998C14.5489 10.1593 14.2151 9.35329 13.6208 8.75898C13.0264 8.16466 12.2204 7.83078 11.3799 7.83078ZM11.3799 5.71809C12.7807 5.71809 14.1241 6.27455 15.1147 7.26507C16.1052 8.25559 16.6616 9.59903 16.6616 10.9998C16.6616 12.4006 16.1052 13.7441 15.1147 14.7346C14.1241 15.7251 12.7807 16.2816 11.3799 16.2816C9.97909 16.2816 8.63566 15.7251 7.64514 14.7346C6.65462 13.7441 6.09815 12.4006 6.09815 10.9998C6.09815 9.59903 6.65462 8.25559 7.64514 7.26507C8.63566 6.27455 9.97909 5.71809 11.3799 5.71809ZM18.2462 5.454C18.2462 5.8042 18.107 6.14006 17.8594 6.38769C17.6118 6.63532 17.2759 6.77444 16.9257 6.77444C16.5755 6.77444 16.2397 6.63532 15.992 6.38769C15.7444 6.14006 15.6053 5.8042 15.6053 5.454C15.6053 5.1038 15.7444 4.76794 15.992 4.52031C16.2397 4.27268 16.5755 4.13356 16.9257 4.13356C17.2759 4.13356 17.6118 4.27268 17.8594 4.52031C18.107 4.76794 18.2462 5.1038 18.2462 5.454ZM11.3799 2.54904C8.76649 2.54904 8.33972 2.55643 7.12387 2.61031C6.29569 2.64939 5.74005 2.76031 5.22455 2.96101C4.7661 3.13848 4.43546 3.35081 4.08369 3.70363C3.75306 4.02307 3.49885 4.41305 3.34002 4.84449C3.13932 5.3621 3.0284 5.91668 2.99037 6.7438C2.93544 7.91001 2.9291 8.31776 2.9291 10.9998C2.9291 13.6132 2.9365 14.04 2.99037 15.2559C3.02946 16.083 3.14037 16.6397 3.34002 17.1541C3.5196 17.6136 3.73087 17.9443 4.08158 18.295C4.43757 18.6499 4.76821 18.8622 5.22244 19.0376C5.74427 19.2394 6.29991 19.3513 7.12387 19.3894C8.29008 19.4443 8.69783 19.4506 11.3799 19.4506C13.9933 19.4506 14.4201 19.4432 15.6359 19.3894C16.462 19.3503 17.0187 19.2394 17.5342 19.0397C17.9916 18.8612 18.3243 18.6489 18.675 18.2981C19.031 17.9422 19.2434 17.6115 19.4187 17.1573C19.6194 16.6365 19.7314 16.0798 19.7694 15.2559C19.8244 14.0897 19.8307 13.6819 19.8307 10.9998C19.8307 8.38642 19.8233 7.95966 19.7694 6.7438C19.7303 5.91774 19.6194 5.35998 19.4187 4.84449C19.2595 4.4135 19.0058 4.02366 18.6761 3.70363C18.3568 3.37283 17.9668 3.11859 17.5352 2.95996C17.0176 2.75925 16.462 2.64834 15.6359 2.61031C14.4697 2.55538 14.062 2.54904 11.3799 2.54904ZM11.3799 0.43634C14.25 0.43634 14.6081 0.446904 15.7342 0.499721C16.8592 0.552539 17.625 0.728949 18.299 0.990924C18.9962 1.25924 19.5835 1.62262 20.1708 2.20889C20.708 2.73696 21.1236 3.37573 21.3888 4.08074C21.6497 4.75364 21.8272 5.52055 21.88 6.64556C21.9297 7.77163 21.9434 8.12973 21.9434 10.9998C21.9434 13.8699 21.9328 14.228 21.88 15.3541C21.8272 16.4791 21.6497 17.245 21.3888 17.9189C21.1244 18.6243 20.7086 19.2632 20.1708 19.7908C19.6426 20.3277 19.0039 20.7433 18.299 21.0087C17.6261 21.2697 16.8592 21.4471 15.7342 21.4999C14.6081 21.5496 14.25 21.5633 11.3799 21.5633C8.5098 21.5633 8.15169 21.5528 7.02563 21.4999C5.90061 21.4471 5.13476 21.2697 4.46081 21.0087C3.75551 20.7441 3.11664 20.3284 2.58896 19.7908C2.05171 19.2628 1.63606 18.624 1.37099 17.9189C1.10902 17.246 0.932605 16.4791 0.879787 15.3541C0.830139 14.228 0.816406 13.8699 0.816406 10.9998C0.816406 8.12973 0.82697 7.77163 0.879787 6.64556C0.932605 5.51949 1.10902 4.7547 1.37099 4.08074C1.63533 3.37529 2.05107 2.73635 2.58896 2.20889C3.11679 1.67146 3.75562 1.25578 4.46081 0.990924C5.13476 0.728949 5.89956 0.552539 7.02563 0.499721C8.15169 0.450073 8.5098 0.43634 11.3799 0.43634Z">
                    </svg>

                </a>
                <a href="https://vk.com/kzn.domiktut" class="vkontakte">
                    <svg width="22" height="14" viewBox="0 0 22 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.9254 13.9143C4.44463 13.9143 0.177788 8.72342 0 0.0857544H3.74722C3.8703 6.42558 6.63278 9.11101 8.82094 9.6647V0.0857544H12.3495V5.55351C14.5103 5.31819 16.7802 2.82655 17.5461 0.0857544H21.0745C20.4865 3.4633 18.0248 5.95494 16.2743 6.97928C18.0248 7.80982 20.8285 9.98308 21.8952 13.9143H18.0111C17.1769 11.2843 15.0983 9.24943 12.3495 8.97258V13.9143H11.9254Z" />
                    </svg>

                </a>
                <a href="https://wa.me/79272400954?text=Добрый%20день,%20я%20хочу%20получить%20консультацию" class="whatsup">
                    <svg width="24" height="23" viewBox="0 0 24 23" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0728 0.0686911C5.75576 0.721735 1.57694 4.96033 1.02667 10.2586C0.945135 11.0439 0.994522 12.5306 1.12714 13.2811C1.33705 14.4694 1.6844 15.5148 2.22429 16.5831L2.49555 17.12L1.68725 20.0542C1.24267 21.668 0.886043 22.9936 0.894685 23C0.903375 23.0063 2.2574 22.6579 3.90365 22.2256C6.30023 21.5964 6.92088 21.4488 7.01753 21.4855C7.08391 21.5106 7.39892 21.6487 7.71755 21.7923C8.75241 22.2586 9.83918 22.5679 10.9827 22.7216C11.7775 22.8284 13.1722 22.8278 13.9453 22.7203C16.4828 22.3673 18.7499 21.2521 20.5367 19.478C21.4711 18.5503 22.0924 17.7017 22.684 16.5455C23.2167 15.5042 23.5926 14.3691 23.8026 13.1673C23.9253 12.4648 23.9251 10.4007 23.8023 9.66455C23.5946 8.42088 23.2742 7.42726 22.7266 6.32975C21.1684 3.20652 18.2908 0.980121 14.8502 0.235719C13.7777 0.00367466 12.1782 -0.0670518 11.0728 0.0686911ZM14.0901 2.0546C15.475 2.30914 16.6234 2.76896 17.7592 3.52368C19.6983 4.81221 21.1257 6.81308 21.6899 9.03353C22.1043 10.6642 22.0717 12.5162 21.6011 14.0842C20.8402 16.6194 19.0267 18.7535 16.6534 19.9062C15.2737 20.5763 13.997 20.8685 12.4487 20.8685C10.6741 20.8685 9.10102 20.4405 7.49552 19.5209L7.22517 19.3661L5.44842 19.8301C4.4712 20.0852 3.66425 20.2867 3.65517 20.2776C3.64609 20.2687 3.84659 19.5087 4.10072 18.5888C4.3548 17.6689 4.56457 16.8825 4.56684 16.8412C4.5691 16.7998 4.44416 16.5609 4.28919 16.3101C2.01235 12.6271 2.6091 7.7701 5.71583 4.69834C7.26123 3.17034 9.21771 2.23132 11.4107 1.96501C12.0031 1.89309 13.48 1.94246 14.0901 2.0546ZM7.94189 6.24127C7.6627 6.37865 7.15256 6.97747 6.93927 7.41819C6.52032 8.28389 6.52887 9.37516 6.96249 10.3856C7.49537 11.6273 8.88962 13.3904 10.266 14.563C11.2308 15.3848 12.0369 15.8664 13.2211 16.3283C14.4309 16.8002 14.663 16.8546 15.466 16.8543C16.0976 16.854 16.1979 16.8421 16.4915 16.7321C16.9744 16.5513 17.3348 16.3235 17.6938 15.9722C17.9724 15.6997 18.0285 15.6144 18.1197 15.3245C18.2334 14.963 18.2984 14.3813 18.2476 14.18C18.221 14.0747 18.0846 13.9892 17.3987 13.6479C16.142 13.0226 15.6355 12.8074 15.4203 12.8074C15.2439 12.8074 15.2138 12.8289 15.0006 13.1073C14.5131 13.7437 14.0658 14.2365 13.9493 14.2656C13.8097 14.3004 13.5355 14.2006 12.902 13.8844C11.8764 13.3725 11.0397 12.6879 10.3203 11.7722C9.92878 11.2738 9.57621 10.7059 9.57621 10.5736C9.57621 10.517 9.75774 10.2353 9.97962 9.94764C10.4144 9.38389 10.5418 9.17354 10.5418 9.0187C10.5418 8.96438 10.4475 8.6988 10.3322 8.42856C10.217 8.15827 9.98459 7.60249 9.81577 7.19344C9.60648 6.68646 9.45958 6.40005 9.35424 6.29377L9.19965 6.13782L8.67585 6.13787C8.23677 6.13787 8.11805 6.15462 7.94189 6.24127Z" />
                    </svg>
                </a>
                <a href="https://t.me/lenar_domiktut" class="telegramm">
                    <svg width="20" height="18" viewBox="0 0 20 18" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9264 0.0564046C18.819 0.0868363 16.8059 0.899082 14.4529 1.86145C12.0998 2.82378 8.05605 4.47752 5.46665 5.53639C2.87726 6.59531 0.660911 7.51274 0.541434 7.57516C0.303886 7.69925 0.0520766 7.95997 0.0130061 8.12228C-0.0516945 8.39115 0.129788 8.73352 0.45083 8.94821C0.667397 9.09303 5.01207 10.6423 5.12194 10.6139C5.15796 10.6046 7.74059 8.90641 10.8611 6.84023C13.9816 4.77405 16.5835 3.0658 16.6432 3.04413C16.794 2.98934 16.996 3.01728 17.0456 3.09982C17.157 3.28543 17.3657 3.08124 10.2242 9.77296C8.01846 11.8398 7.85925 11.9978 7.92067 12.0594C7.957 12.0958 9.60421 13.4154 11.5812 14.9919C14.2652 17.1321 15.2252 17.876 15.371 17.9288C15.6547 18.0315 15.9917 18.0226 16.2306 17.9061C16.4153 17.816 16.6997 17.5401 16.7908 17.3626C16.835 17.2765 20.0014 0.683208 20 0.54539C19.9982 0.373636 19.8567 0.133197 19.7167 0.0639004C19.5506 -0.0182286 19.2016 -0.0215283 18.9264 0.0564046Z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="mobile__btn">
        <div class="mobile__btn1 ">
            <a href="https://domiktut.ru/"><img src="<?php bloginfo('template_url'); ?>/images/svg/Frame (9).svg" alt="">Главная</a>
        </div>
        <div class="mobile__btn1 mobile__btn1_active">
            <a href="<?php echo get_category_link($_COOKIE["selected_city"]) ?>"><img src="<?php bloginfo('template_url'); ?>/images/svg/Framecatalog.svg" alt="">Каталог</a>
        </div>
        <div class="mobile__btn1">
            <a href=<?php the_permalink(2140); ?>><img src="<?php bloginfo('template_url'); ?>/images/svg/icon-map.svg" alt="">Карта</a>
        </div>
        <div class="mobile__btn1">
            <div class="like-marker"></div>
            <a href=<?php the_permalink(3523); ?>><img src="<?php bloginfo('template_url'); ?>/images/svg/icon_favorite.svg" alt="">Избранное</a>
        </div>
    </div>

    <div class="phone-popup">
        <a href="tel:+79272400954" class="phone-popup__btn">Позвонить</a>
        <a href="https://t.me/lenar_domiktut" class="phone-popup__btn telegramm">Написать в Telegram</a>
        <a href="https://wa.me/79272400954?text=Добрый%20день,%20я%20хочу%20получить%20консультацию" class="phone-popup__btn whatsup">Написать в What’s App</a>
        <button class="phone-popup__btn_white btn-orange call_request-btn">Заявка на подбор</ие>
    </div>
    <div id="popup" class="popup-search"></div>
    <div id="popup" class="popup-phone"></div>
    <div class="popup-form">
        <div class="form-popup">
            <div action="" class="form">
                <button type="button" class="popup__close_burger"><img src="<?php bloginfo('template_url'); ?>/images/svg/close.svg" alt=""></button>
                <p class="form__title">Повар - Кейтеринг</p>
                <p class="form__description">Мы можем предложить выездного повора или организацию полноценного банкета на ваше мероприятие.
                </p>
                <p class="form__description"></p>
                <p class="form__description"> Напишите нашему специалисту напрямую. Он расчитает стоимость и проконсультирует Вас по всем вопросам.
                </p>
                <button class="price-button price-button_hidden_mod ">Написать</button>
                <button class="price-button price-button_hidden mobile-hidden">
                    <a href="https://wa.me/79003208475?text=Добрый%20день,%20я%20хочу%20получить%20консультацию%20по%20выездному%20обслуживанию.%20">
                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1783 0.0686301C4.86123 0.721674 0.682406 4.96027 0.132143 10.2586C0.0506033 11.0438 0.0999909 12.5306 0.232608 13.281C0.442517 14.4693 0.789871 15.5148 1.32975 16.5831L1.60102 17.12L0.792719 20.0541C0.348135 21.6679 -0.00848781 22.9935 0.000153798 22.9999C0.00884368 23.0062 1.36287 22.6578 3.00912 22.2256C5.40569 21.5963 6.02634 21.4488 6.123 21.4854C6.18938 21.5105 6.50438 21.6486 6.82301 21.7922C7.85788 22.2586 8.94465 22.5679 10.0882 22.7216C10.8829 22.8284 12.2777 22.8278 13.0508 22.7202C15.5883 22.3672 17.8553 21.2521 19.6422 19.4779C20.5766 18.5502 21.1979 17.7016 21.7895 16.5454C22.3221 15.5042 22.698 14.3691 22.908 13.1672C23.0308 12.4648 23.0306 10.4006 22.9077 9.66448C22.7001 8.42082 22.3796 7.4272 21.8321 6.32969C20.2738 3.20645 17.3963 0.98006 13.9557 0.235658C12.8831 0.00361363 11.2836 -0.0671128 10.1783 0.0686301ZM13.1956 2.05454C14.5805 2.30908 15.7288 2.7689 16.8647 3.52362C18.8038 4.81215 20.2312 6.81302 20.7954 9.03347C21.2097 10.6641 21.1772 12.5162 20.7065 14.0842C19.9457 16.6194 18.1321 18.7534 15.7589 19.9061C14.3792 20.5762 13.1025 20.8684 11.5542 20.8684C9.7796 20.8684 8.20649 20.4405 6.60099 19.5208L6.33064 19.366L4.55389 19.83C3.57667 20.0852 2.76972 20.2866 2.76064 20.2776C2.75156 20.2686 2.95206 19.5086 3.20619 18.5887C3.46027 17.6689 3.67004 16.8824 3.6723 16.8411C3.67457 16.7997 3.54963 16.5608 3.39466 16.3101C1.11782 12.6271 1.71457 7.77003 4.8213 4.69828C6.3667 3.17028 8.32318 2.23126 10.5162 1.96495C11.1085 1.89303 12.5855 1.9424 13.1956 2.05454ZM7.04736 6.24121C6.76817 6.37859 6.25803 6.97741 6.04474 7.41813C5.62579 8.28383 5.63433 9.3751 6.06796 10.3856C6.60084 11.6273 7.99509 13.3904 9.37147 14.5629C10.3362 15.3847 11.1423 15.8663 12.3266 16.3283C13.5364 16.8002 13.7685 16.8545 14.5715 16.8542C15.2031 16.854 15.3033 16.842 15.597 16.732C16.0799 16.5512 16.4403 16.3235 16.7993 15.9722C17.0778 15.6996 17.1339 15.6143 17.2251 15.3244C17.3389 14.963 17.4039 14.3813 17.353 14.1799C17.3264 14.0746 17.19 13.9892 16.5042 13.6479C15.2475 13.0225 14.741 12.8073 14.5257 12.8073C14.3494 12.8073 14.3193 12.8288 14.1061 13.1072C13.6186 13.7436 13.1713 14.2365 13.0548 14.2655C12.9152 14.3003 12.6409 14.2005 12.0075 13.8843C10.9819 13.3724 10.1452 12.6878 9.42578 11.7721C9.03425 11.2738 8.68168 10.7059 8.68168 10.5736C8.68168 10.5169 8.8632 10.2352 9.08509 9.94758C9.51992 9.38383 9.64723 9.17348 9.64723 9.01864C9.64723 8.96432 9.55294 8.69874 9.4377 8.4285C9.32246 8.15821 9.09006 7.60243 8.92123 7.19338C8.71195 6.68639 8.56505 6.39999 8.4597 6.2937L8.30512 6.13776L7.78131 6.13781C7.34223 6.13781 7.22352 6.15456 7.04736 6.24121Z" fill="#F4683F" />
                        </svg>
                    </a>
                    <div class="time__center-line"></div>
                    <a href="https://t.me/ilnara_domiktit">
                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.9801 0.0563435C17.878 0.0867752 15.9656 0.899021 13.7302 1.86139C11.4948 2.82371 7.65325 4.47746 5.19332 5.53633C2.7334 6.59525 0.627866 7.51268 0.514362 7.57509C0.288691 7.69918 0.0494728 7.95991 0.0123558 8.12221C-0.0491098 8.39109 0.123298 8.73346 0.428288 8.94815C0.634027 9.09297 4.76147 10.6423 4.86584 10.6138C4.90006 10.6045 7.35356 8.90635 10.318 6.84017C13.2825 4.77399 15.7543 3.06574 15.811 3.04407C15.9543 2.98928 16.1462 3.01722 16.1933 3.09976C16.2991 3.28536 16.4974 3.08118 9.71297 9.7729C7.61754 11.8397 7.46629 11.9977 7.52464 12.0594C7.55915 12.0958 9.124 13.4154 11.0021 14.9918C13.5519 17.132 14.4639 17.876 14.6025 17.9288C14.872 18.0314 15.1921 18.0225 15.419 17.906C15.5946 17.8159 15.8647 17.5401 15.9513 17.3625C15.9932 17.2765 19.0014 0.683147 19 0.545328C18.9983 0.373575 18.8639 0.133136 18.7308 0.0638394C18.5731 -0.0182896 18.2415 -0.0215894 17.9801 0.0563435Z" fill="#F4683F" />
                        </svg>
                    </a>
                </button>
            </div>
        </div>
    </div>
    <div class="popup-form-rent">
        <div class="form-popup-rent">
            <div action="" class="form">
                <button type="button" class="popup__close"><img src="<?php bloginfo('template_url'); ?>/images/svg/close.svg" alt=""></button>
                <p class="form__title">Заполните форму</p>
                <?php echo do_shortcode('[contact-form-7 id="278" title="Контактная форма от собственника"]'); ?>
            </div>
        </div>
    </div>
    <div class="popup-form-call_request">
        <div class="form-popup-call_request">
            <div action="" class="form">
                <button type="button" class="popup__close_burger"><img src="<?php bloginfo('template_url'); ?>/images/svg/close.svg" alt=""></button>
                <p class="form__title">Заявка на подбор</p>
                <p class="form__description">Оставьте заявку на подбор и сократите свое время на поиск
                </p>
                <?php echo do_shortcode('[contact-form-7 id="279" title="Контактная форма Заявка на подбор"]'); ?>
            </div>
        </div>
    </div>

</main><!-- #main -->
<?php
get_footer();

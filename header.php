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
    <!-- <script>
        let user_id = <?php echo $id_user ?>;
        console.log(user_id);
    </script> -->
    <script defer src="<?php echo get_template_directory_uri(); ?>/local.js"></script>

</head>

<body>
    <div class="header-white-scroll">
        <nav class="nav-light-scroll ">
            <div class="nav__section">
                <a href="https://domiktut.ru/" class="logo-light">
                </a>
                <div class="geo tablet-hidden">
                    <img src="<?php bloginfo('template_url'); ?>/images/svg/geo.svg" alt="">
                    <button class="city-list-btn"><span class="city-name_mod">Казань</span>
                        <ul class="city-list">
                            <li data-id="6"><a href="">Казань</a></li>
                            <li data-id="5"><a href="">Москва</a></li>
                        </ul>
                    </button>
                    <div class="arrow-light"></div>
                </div>
                <a href="<?php echo get_category_link($_COOKIE["selected_city"]) ?>" class="nav__btn nav__btn-light mobile-hidden">Каталог</a>
            </div>
            <div class="nav__section tablet-hidden">
                <!-- <a class="nav__item nav__item-light" href="https://24fedoseyev.ru/#faq">Частые вопросы</a> -->
                <!-- <a class="nav__item nav__item-light" href="https://24fedoseyev.ru/#cooperation">Сотрудничество</a> -->
            </div>
            <div class="nav__section">
                <div class="nav__item nav__item-light">
                    <div id="tel" class="tel tel-ico">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.5004 11.6833C15.5002 11.6833 15.5 11.6835 15.5 11.6838V14.63C15.5001 14.841 15.4202 15.0441 15.2763 15.1985C15.1325 15.3528 14.9355 15.4469 14.725 15.4617C14.3608 15.4867 14.0633 15.5 13.8333 15.5C6.46917 15.5 0.5 9.53083 0.5 2.16667C0.5 1.93667 0.5125 1.63917 0.538333 1.275C0.553102 1.06454 0.647151 0.867509 0.801503 0.723674C0.955855 0.579839 1.15902 0.499905 1.37 0.5H4.31667C4.42003 0.499896 4.51975 0.538216 4.59644 0.607517C4.67313 0.676818 4.72133 0.772152 4.73167 0.875C4.75083 1.06667 4.76833 1.21917 4.785 1.335C4.95061 2.49077 5.29 3.61486 5.79167 4.66917C5.87083 4.83583 5.81917 5.035 5.66917 5.14167L5.18105 5.49045C4.41614 6.03702 4.11879 7.05445 4.61299 7.8542C5.50046 9.29038 6.71079 10.5007 8.147 11.3881C8.94661 11.8821 9.96382 11.585 10.5105 10.8204L10.8575 10.335C10.91 10.2617 10.9865 10.2091 11.0737 10.1864C11.161 10.1637 11.2535 10.1723 11.335 10.2108C12.3892 10.7116 13.513 11.0501 14.6683 11.215C14.7842 11.2317 14.9367 11.25 15.1267 11.2683C15.2294 11.2789 15.3245 11.3271 15.3936 11.4038C15.4627 11.4804 15.5009 11.5798 15.5008 11.6829C15.5008 11.6831 15.5006 11.6833 15.5004 11.6833Z" />
                        </svg>
                        <a href="tel:+79272400954" class="laptop-hidden tel-link">+79272400954</a>
                    </div>
                </div>
                <a class="favorites mobile-hidden nav__item mobile-hidden" href=<?php the_permalink(3523); ?>>
                    <div class="like-marker_header"></div>
                    <svg width="22" height="21" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.0004 1.90639C13.5452 -0.378355 17.4777 -0.302522 19.9293 2.15339C22.3798 4.61039 22.4643 8.52339 20.1849 11.0757L10.9983 20.2754L1.81377 11.0757C-0.465561 8.52339 -0.379978 4.60389 2.06944 2.15339C4.52319 -0.299272 8.44811 -0.381605 11.0004 1.90639ZM18.3953 3.68414C16.7703 2.05698 14.1486 1.9909 12.4478 3.51839L11.0015 4.81623L9.55419 3.51948C7.84794 1.98981 5.23169 2.05698 3.60236 3.68631C1.98819 5.30048 1.90694 7.88423 3.39436 9.59156L10.9994 17.2085L18.6044 9.59264C20.0929 7.88423 20.0116 5.30373 18.3953 3.68414Z" fill="#F4683F" />
                    </svg>
                </a>
                <button href="" id="search" class="search search-light nav__item">
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
    </div>
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
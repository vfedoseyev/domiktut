function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function eraseCookie(name) {
    document.cookie = name + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

console.log("$(this).dataset.id", $('.city-list li'));
$('.city-list li, .geo-form a').click(function(event) {
    let selected_id = $(this).data("id");
    setCookie("selected_city", selected_id, 365);
    console.log(selected_id);
});

if (getCookie("selected_city") === null) {
    $('.popup-geo').addClass('active');
    $('body').addClass('lock');
}
if (getCookie("selected_city") == 5) {
    $('.city-name').text('Москве и МО');
    console.log('moscow')
}
if (getCookie("selected_city") == 5) {
    $('.city-name_mod').text('Москва');
    $('.city-name_mod-white').text('Москва');
    console.log('moscow')
}
if (getCookie("selected_city") == 5) {
    $('title').text('Аренда коттеджей и домов в городе Москва');
}
// смена номеров в зависимости от города
if (getCookie("selected_city") == 5) {
    $('.tel-link').text('+79150188611');
    $('.tel-link').attr("href", "tel:+79150188611");
    $('.phone-popup__btn').attr("href", "tel:+79150188611");
    $('.whatsup').attr("href", "https://wa.me/79150188611?text=Добрый%20день,%20я%20хочу%20получить%20консультацию");
    $('.telegramm').attr("href", "https://t.me/andrey_domiktut");
    $('.vkontakte').attr("href", "https://vk.com/msk.domiktut");
    $('.price-button-callback').text('+79150188611');
    $('.price-button-callback').attr("href", "tel:+79150188611");
    $('.price-button-callback-mobile').attr("href", "tel:+79150188611");
    $('.burger__tel').attr("href", "tel:+79150188611");
    $('.burger__tel span').text('+79150188611');
    let single_url = "<?php echo get_permalink( $post->ID ) ?>";
    $('.whatsup-single').attr("href", `https://wa.me/79150188611?text=Добрый%20день,%20я%20хочу%20получить%20информацию%20по%20коттеджу%20${single_url}`);


}
// if (getCookie("selected_city") == 6) {
//     $('.tel-link').text('+79272400954');
//     $('.tel-link').attr("href", "tel:+79272400954");
//     $('.phone-popup__btn').attr("href", "tel:+79272400954");
//     $('.whatsup').attr("href", "https://wa.me/79272400954?text=Добрый%20день,%20я%20хочу%20получить%20консультацию");
//     $('.telegramm').attr("href", "https://t.me/lenar_domiktut");
//     $('.vkontakte').attr("href", "https://vk.com/kzn.domiktut");
//     $('.price-button-callback').text('+79272400954');
//     $('.price-button-callback').attr("href", "tel:+79272400954");
//     $('.price-button-callback-mobile').attr("href", "tel:+79272400954");
//     $('.burger__tel').attr("href", "tel:+79272400954");
//     $('.burger__tel span').text('+79272400954');
//     let single_url = "<?php echo get_permalink( $post->ID ) ?>";
//     $('.whatsup-single').attr("href", `https://wa.me/79272400954?text=Добрый%20день,%20я%20хочу%20получить%20информацию%20по%20коттеджу%20${single_url}`);


// }



// чекбоксы для подборок
let selected_collection = new Set();

$('.checkbox-collection').click(function() {
    let checked_collection = $(this).data("id");
    if ($(this).is(':checked')) {
        selected_collection.add(checked_collection);
        console.log('Все ок', selected_collection);
    } else {
        selected_collection.delete(checked_collection);
        console.log('убрали', selected_collection);
    }
});
$('.generate-collection').click(function() {
    let collection_url = 'https://domiktut.ru/collections/collections/';
    collection_url = collection_url + [...selected_collection].reduce((nextUrl, id) => nextUrl + id + ',', '?collectionIds=') + "&user-id=" + user_id;
    window.open(collection_url, '_blank');
    console.log(collection_url);
})

// лайки

let liked_collection = new Set(JSON.parse(getCookie('likes')));
liked_collection.forEach(like => {
    $('.catalog-like[data-id=' + like + ']').addClass('active');
    $('.like-marker').css('display', 'flex');
    $('.like-marker_header').css('display', 'flex');
    $('.favorites svg').addClass('active');
})

console.log(liked_collection);
$('.catalog-like').click(function() {
    let like_id = $(this).data("id");
    if (!liked_collection.has(like_id)) {
        liked_collection.add(like_id);

        console.log('Все ок', liked_collection);
    } else {
        liked_collection.delete(like_id);

        console.log('убрали', liked_collection);
    }

    if (liked_collection.has(like_id)) {
        $(this).addClass('active');
    } else {
        $(this).removeClass('active');
    }

    $('.like-marker').css('display', 'flex');
    $('.like-marker_header').css('display', 'flex');
    $('.favorites svg').addClass('active');

    setCookie('likes', JSON.stringify([...liked_collection]), 365);

});

// кнопка поделиться
$('.share').click(function() {
    $('.ya-share2').toggleClass('active');
})



if (getCookie("user-id") == 3) {
    setCookie("selected_city", 6, 365);
    $('.tel-link').text('+79600456522');
    $('.tel-link').attr("href", "tel:+79600456522");
    $('.phone-popup__btn').attr("href", "tel:+79600456522");
    $('.whatsup').attr("href", "https://wa.me/79600456522?text=Добрый%20день,%20я%20хочу%20получить%20консультацию");
    $('.telegramm').attr("href", "https://t.me/alexey_domiktut");
    $('.vkontakte').attr("href", "https://vk.com/msk.domiktut");
    $('.price-button-callback').text('+79600456522');
    $('.price-button-callback').attr("href", "tel:+79600456522");
    $('.price-button-callback-mobile').attr("href", "tel:+79600456522");
    $('.burger__tel').attr("href", "tel:+79600456522");
    $('.burger__tel span').text('+79600456522');
    let single_url = "<?php echo get_permalink( $post->ID ) ?>";
    $('.whatsup-single').attr("href", `https://wa.me/79600456522?text=Добрый%20день,%20я%20хочу%20получить%20информацию%20по%20коттеджу%20${single_url}`);


}
if (getCookie("user-id") == 2) {
    setCookie("selected_city", 5, 365);
    $('.tel-link').text('+79150188611');
    $('.tel-link').attr("href", "tel:+79150188611");
    $('.phone-popup__btn').attr("href", "tel:+79150188611");
    $('.whatsup').attr("href", "https://wa.me/79150188611?text=Добрый%20день,%20я%20хочу%20получить%20консультацию");
    $('.telegramm').attr("href", "https://t.me/andrey_domiktut");
    $('.vkontakte').attr("href", "https://vk.com/msk.domiktut");
    $('.price-button-callback').text('+79150188611');
    $('.price-button-callback').attr("href", "tel:+79150188611");
    $('.price-button-callback-mobile').attr("href", "tel:+79150188611");
    $('.burger__tel').attr("href", "tel:+79150188611");
    $('.burger__tel span').text('+79150188611');
    $('.whatsup-single').attr("href", `https://wa.me/79150188611?text=Добрый%20день,%20я%20хочу%20получить%20информацию%20по%20коттеджу%20${single_url}`);


}
if (getCookie("user-id") == 6) {
    setCookie("selected_city", 6, 365);
    $('.tel-link').text('+79272400954');
    $('.tel-link').attr("href", "tel:+79272400954");
    $('.phone-popup__btn').attr("href", "tel:+79272400954");
    $('.whatsup').attr("href", "https://wa.me/79272400954?text=Добрый%20день,%20я%20хочу%20получить%20консультацию");
    $('.telegramm').attr("href", "https://t.me/lenar_domiktut");
    $('.vkontakte').attr("href", "https://vk.com/kzn.domiktut");
    $('.price-button-callback').text('+79272400954');
    $('.price-button-callback').attr("href", "tel:+79272400954");
    $('.price-button-callback-mobile').attr("href", "tel:+79272400954");
    $('.burger__tel').attr("href", "tel:+79272400954");
    $('.burger__tel span').text('+79272400954');
    $('.whatsup-single').attr("href", `https://wa.me/79272400954?text=Добрый%20день,%20я%20хочу%20получить%20информацию%20по%20коттеджу%20${single_url}`);


}
if (getCookie("user-id") == 7) {
    setCookie("selected_city", 6, 365);
    $('.tel-link').text('+79176125499');
    $('.tel-link').attr("href", "tel:+79176125499");
    $('.phone-popup__btn').attr("href", "tel:+79176125499");
    $('.whatsup').attr("href", "https://wa.me/79176125499?text=Добрый%20день,%20я%20хочу%20получить%20консультацию");
    $('.telegramm').attr("href", "https://t.me/Gulya_domiktut");
    $('.vkontakte').attr("href", "https://vk.com/kzn.domiktut");
    $('.price-button-callback').text('+79176125499');
    $('.price-button-callback').attr("href", "tel:+79176125499");
    $('.price-button-callback-mobile').attr("href", "tel:+79176125499");
    $('.burger__tel').attr("href", "tel:+79176125499");
    $('.burger__tel span').text('+79176125499');
    $('.whatsup-single').attr("href", `https://wa.me/79176125499?text=Добрый%20день,%20я%20хочу%20получить%20информацию%20по%20коттеджу%20${single_url}`);


}


// поиск

jQuery(document).ready(function($) {
    const search_input = $(".search-form__input");
    const search_results = $(".ajax-search");

    search_input.keyup(function() {
        let search_value = $(this).val();

        if (search_value.length > 2) { // кол-во символов
            $.ajax({
                url: "/wp-admin/admin-ajax.php",
                type: "POST",
                data: {
                    "action": "ajax_search", // functions.php
                    "term": search_value
                },
                success: function(results) {
                    search_results.fadeIn(200).html(results);
                }
            });
        } else {
            search_results.fadeOut(200);
        }
    });

    // Закрытие поиска при клике вне его
    $(document).mouseup(function(e) {
        if (
            (search_input.has(e.target).length === 0) &&
            (search_results.has(e.target).length === 0)
        ) {
            search_results.fadeOut(200);
        };
    });
});
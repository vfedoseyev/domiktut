ymaps.ready(init);

function init() {
    if (getCookie("selected_city") == 6) {
        var myMap = new ymaps.Map("map", {
            center: [55.7887, 49.1221],
            zoom: 9,
            controls: [],
        })
    } else {
        var myMap = new ymaps.Map("map", {
            center: [55.755819, 37.617644],
            zoom: 9,
            controls: [],
        })
    }

    // Маркеры домов в цикле
    // for (let i = 0; i < map_markers.length; i++) {
    //     myMap.geoObjects.add(new ymaps.Placemark([map_markers[i].lat, map_markers[i].lng], {

    //     }));
    // };


    for (let i = 0; i < map_markers.length; i++) {
        map_markers[i].link;
        myMap.geoObjects.add(new ymaps.Placemark([map_markers[i].lat, map_markers[i].lng], {
            balloonContentHeader: map_markers[i].name,
            balloonContentBody: map_markers[i].price,
            balloonContentFooter: `<a href = "` + `${map_markers[i].link}"` + `/a>` + `Перейти`
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: 'https://domiktut.ru/wp-content/themes/domiktut/images/svg/Union.svg',
            // Размеры метки.
            iconImageSize: [30, 42],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-5, -38]
        }));
    };

};
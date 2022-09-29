<form class="search-form" role="search" method="get" id="searchform" action="<?php echo home_url('/') ?>" autocomplete="off">
    <input class="search-form__input" type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Введите название коттеджа" autocomplete="off" />
    <button type="submit" id="searchsubmit" class="search-popup__btn">
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14.0271 12.8475L17.5963 16.4158L16.4171 17.595L12.8488 14.0258C11.5211 15.0901 9.86964 15.669 8.16797 15.6666C4.02797 15.6666 0.667969 12.3066 0.667969 8.16663C0.667969 4.02663 4.02797 0.666626 8.16797 0.666626C12.308 0.666626 15.668 4.02663 15.668 8.16663C15.6704 9.86829 15.0915 11.5197 14.0271 12.8475ZM12.3555 12.2291C13.4131 11.1415 14.0037 9.68365 14.0013 8.16663C14.0013 4.94329 11.3905 2.33329 8.16797 2.33329C4.94464 2.33329 2.33464 4.94329 2.33464 8.16663C2.33464 11.3891 4.94464 14 8.16797 14C9.68499 14.0023 11.1429 13.4117 12.2305 12.3541L12.3555 12.2291Z" fill="white" />
        </svg>
    </button>
    <input id="search-reset" value="Х" type="reset">
    <ul class="ajax-search"></ul>
</form>

<script>
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
</script>
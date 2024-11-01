jQuery(document).ready(function ($) {
    $('#submit_key').on('submit', function (e) {
        e.preventDefault();
        let key = $(this).find('#key');
        $.ajax({
            url: adminAjax.ajaxurl,
            type: 'post',
            data: {
                action: 'submit_key',
                key: key.val(),
            }, success: function (response) {
                alert(response);
            }
        })
    });

    $('.donate button').each(function () {
        $(this).on('click', function () {

            let phone_number = $('#phone_number').val();
            let amount;
            if ($(this).attr('id') === 'donate_small') amount = 100000;
            else if ($(this).attr('id') === 'donate_medium') amount = 150000;
            else if ($(this).attr('id') === 'donate_large') amount = 200000;

            $.ajax({
                url: adminAjax.ajaxurl,
                type: 'post',
                data: {
                    action: 'donate',
                    mobile: phone_number,
                    amount: amount,
                }, success: function (response) {
                    if (response) {
                        window.location = "https://pay.ir/pg/" + response;
                    }
                    $('body').append(response)
                }
            });

        });

    });

    $('.wpmdb-search #search_field').keyup(function () {
        if ($(this).val().length > 0) {
            $.ajax({
                url: adminAjax.ajaxurl,
                type: 'post',
                data: {
                    action: 'search_wpmdb',
                    id: $('.wpmdb-search #search_field').val(),
                }, success: function (response) {
                    $('.wpmdb-search #result').html(response);
                }
            });
        } else {
            $('.wpmdb-search #result').html('');
        }
    });

    $.ajax({
        url: adminAjax.ajaxurl,
        type: 'post',
        data: {
            action: 'search_wpmdb',
            id: $('.wpmdb-search #search_field').val(),
        }, success: function (response) {
            $('.wpmdb-search #result').html(response);
        }
    });
});
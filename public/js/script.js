

String.prototype.permalink = function () {
    return this.toString().trim().toLowerCase().replace(/\s/g, '-');
};

$('.btn-add-to-cart').on('click', function (e) {
    e.preventDefault();


    $.ajax({
        url: BASE_URL + 'shop/add-to-cart',
        type: 'GET',
        dataType: 'html',
        data: { pid: $(this).data('id') },
        success: function (res) {
            window.location.reload();

        }
    });
});

$('.origin-value').on('focusout', function () {

    $('.target-value').val($(this).val().permalink());
})

$('.select-cat').change(function () {
    $('.select-cat-submit').click();
    document.cookie = 'cat=' + $(this).val() + ';' + 'path=/';

    if ($(this).val() == 'All Categories') {
        location.href = BASE_URL + 'shop';
    } else {
        location.href = BASE_URL + 'shop/' + $(this).val();

    }
})


$('.save-in-wishlist').on('click', function (e) {

    e.preventDefault();
    $.ajax({
        url: BASE_URL + 'shop/add-to-wishlist',
        type: 'GET',
        dataType: 'html',
        data: { pid: $(this).data('id') },
        success: function () {

        }
    });


    if ($(this).hasClass('btn-outline-success')) {
        $(this).removeClass('btn-outline-success').addClass('btn-secondary');
        $(this).value('Aded to wishlist');

    } else {

    };
    $(this).addClass('disabled');
    //<i class="fas fa-heart"></i>
})



$('#search-product').on('keyup', function () {

    $.ajax({
        url: BASE_URL + 'search-product',
        type: 'GET',
        dataType: 'json',
        data: { value: $(this).val() },
        success: function (products) {

            if (products.length > 0) {

                var availableTags = [];

                $.each(products, function (key, value) {

                    availableTags.push(value.ptitle);
                });

                $("#search-product").autocomplete({
                    source: availableTags,
                    select: function (event, ui) {
                        $('#search-btn').click();
                        location.href = BASE_URL + 'shop/search_item?value=' + ui.item.value;
                    }
                });

            }

        }
    });

});

$('#sale').on('click', function () {
    if (display === true) {
        $(".price-on-sale").show();
    } else if (display === false) {
        $(".price-on-sale").hide();
    } 0
});

 



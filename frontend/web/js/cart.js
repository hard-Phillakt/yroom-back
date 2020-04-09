$(document).ready(function () {

    //  Cart Add item ajax
    $('.button-buy').on('click', function (e) {
        e.preventDefault();

        var id = $(this).data('id');
        var qty = this.dataset.qty;

        $.ajax({
            url: '/cart/add',
            data: {id: id, qty: qty},
            success: function (res) {
                var cart = JSON.parse(res);

                // Refresh count prodyct for layout
                if ($('.cart-product-count').eq(0)) {
                    $('.cart-product-count').eq(0).html(cart.qty)
                }

                console.log('res: ', cart);
            },
            error: function (err) {
                console.log('err: ', err);
            }
        })
    });
    //  Cart Add item ajax end

    //  Cart

    // amountCard increment && decrement

    var increment = '+';
    var decrement = '-';

    function amountCard(btn) {

        btn.each(function (index, item) {

            $(this).on('click', function () {

                var cardAmount = parseInt($('.card-amount').eq(index).val()) ? parseInt($('.card-amount').eq(index).val()) : $('.card-amount').eq(index).val(1);

                if (parseInt(cardAmount)) {
                    switch ($(this).html()) {
                        case increment:
                            cardAmount++;
                            $('.card-amount').eq(index).val(cardAmount);

                            var str = $(this).val();

                            if (str.match(/[^0-9]/gi) !== null) {
                                $('.button-buy').attr('data-qty', 1);
                            } else {
                                $('.button-buy').attr('data-qty', cardAmount);
                            }
                            break;

                        case decrement:
                            if (cardAmount > 1) {
                                cardAmount--;
                                $('.card-amount').eq(index).val(cardAmount);

                                var str = $(this).val();

                                if (str.match(/[^0-9]/gi) !== null) {
                                    $('.button-buy').attr('data-qty', 1);
                                } else {
                                    $('.button-buy').attr('data-qty', cardAmount);
                                }
                            }
                            break;

                        default:
                            return true;
                            break;
                    }
                } else {
                    $('.card-amount').eq(index).val(1);
                }

            })

        });
    }

    amountCard($('.button__increment'));
    amountCard($('.button__decrement'));

    // Clear value from input-amount

    $('.card-amount').each(function () {

        $(this).on('change', function () {

            var str = $(this).val();

            if (str.match(/[^0-9]/gi) !== null) {
                $(this).val(1);
                $('.button-buy').attr('data-qty', 1);
            } else {
                $('.button-buy').attr('data-qty', $(this).val());
            }
        });

    });
    //  Cart end


//  CheckOut

    function changeCart(param, position) {

        $.ajax({
            url: '/cart/change',
            data: {param: param},
            success: function (res) {
                var cart = JSON.parse(res);

                var qty = cart.cart[param.id].qty;
                var price = cart.cart[param.id].price;
                var total = parseInt(price) * parseInt(qty);

                $('.card-total-sum-' + position).html(total);

                // Refresh count product for layout
                if ($('.cart-product-count').eq(0)) {
                    $('.cart-product-count').eq(0).html(cart.qty)
                }

                // Refresh sum product for checkout
                $('.cart-total-sum').each(function (i, item) {
                    $(item).html(cart.sum)
                });

            },
            error: function (err) {
                console.log('err: ', err);
            }
        })
    }

    $('.checkout-button__decrement').on('click', function () {

        changeCart({
                id: $(this).data('id'),
                type: 'DEC'
            },
            parseInt($(this).data('position'))
        );
    });

    $('.checkout-button__increment').on('click', function () {

        changeCart({
                id: $(this).data('id'),
                type: 'INC'
            },
            parseInt($(this).data('position'))
        );
    });

    $('.checkout-card-amount').on('change', function () {

        if($(this).val() == 0){
            $(this).val(1)
        }
        changeCart({
                id: $(this).data('id'),
                type: 'CHANGE',
                number: parseInt($(this).val()) != 0 ? parseInt($(this).val()) : 1
            },
            parseInt($(this).data('position'))
        );
    });


    // removeItemAnimate ################################
    function removeItemAnimate(id) {
        $('.card-count-' + id).css({
            visibility: 'hidden',
            opacity: 0
        });

        setTimeout(function () {
            $('.card-count-' + id).css({
                height: 0,
                marginTop: 0
            });
        }, 500);

        setTimeout(function () {
            $('.card-count-' + id).remove();
        }, 1000);
    }

    // removeItemAnimate ################################ end

    $('.card-delete-item').on('click', function () {

        var id = parseInt($(this).data('id'));

        $.ajax({
            url: '/cart/delete',
            data: {id: id},
            success: function (res) {

                removeItemAnimate(id);

                var cart = JSON.parse(res);

                // Refresh count product for layout
                if ($('.cart-product-count').eq(0)) {
                    $('.cart-product-count').eq(0).html(cart.qty)
                }

                // Refresh sum product for checkout
                $('.cart-total-sum').each(function (i, item) {
                    $(item).html(cart.sum)
                });

                // If cart empty -> template empty-product
                if (cart.qty === 0) {

                    setTimeout(function () {
                        $.ajax({
                            url: '/cart/empty-product',
                            success: function (res) {
                                $('#card-box-items').html(res);
                            },
                            error: function (err) {
                                console.log('err: ', err);
                            }
                        });
                    }, 500);
                }
                // If cart empty -> template empty-product end

            },
            error: function (err) {
                console.log('err: ', err);
            }
        });

    });

//  CheckOut end


});
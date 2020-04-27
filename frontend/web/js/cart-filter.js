$(document).ready(function () {

    var totalCartItems;

    //  Cart Add item ajax

    function cardAdd() {
        $('.button-buy-cart').on('click', function (e) {
            // e.preventDefault();

            var id = $(this).data('id');
            var qty = this.dataset.qty;

            $.ajax({
                url: '/cart/add',
                data: {id: id, qty: qty},
                success: function (res) {
                    var cart = JSON.parse(res);

                    // Refresh count product for layout
                    if ($('.cart-product-count').eq(0)) {
                        $('.cart-product-count').eq(0).html(cart.qty)
                    }

                    console.log('res: ', cart);
                    console.log('totalCartItems: ', totalCartItems = cart);
                    totalCartItems = cart;
                },
                error: function (err) {
                    console.log('err: ', err);
                }
            })
        });
    } cardAdd();

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

        if ($(this).val() == 0) {
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

                var cart = JSON.parse(res);

                removeItemAnimate(id);

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


//  form-pickup

    $("#form-pickup").validate({
        messages: {
            'cart-name': 'Введите корректное имя',
            'cart-phone': 'Введите корректный телефон'
        }
    });

    $('#form-pickup').on('submit', function (e) {
        e.preventDefault();

        var formValidate = $(this).serializeArray();
        var formData = $(this).serialize();

        if (formValidate[0].value !== '' && formValidate[1].value !== '') {

            $('#form-pickup').trigger('reset');

            var ajaxGetProduct = new Promise(function (resolve, reject) {

                $.ajax({
                    url: '/cart/get-product',
                    success: function (res) {
                        var cart = JSON.parse(res);
                        resolve(cart);
                    },
                    error: function (err) {
                        if (err) {
                            reject(err);
                        }
                    }
                })
            });

            ajaxGetProduct
                .then(function (data) {

                    $.ajax({
                        url: '/email/cart',
                        data: {
                            cart: JSON.stringify(data),
                            form: formData
                        },
                        success: function (res) {
                            if (res) {
                                $('.modal-callback-success').modal('show');
                            }
                        },
                        error: function (err) {
                            if (err) {
                                return err;
                            }
                        }
                    })

                })
                .catch(function (err) {
                    console.log('catch err: ', err);
                })
        }
    });

//  form-pickup end

//  form-delivery

    $("#form-delivery").validate({
        messages: {
            'cart-name': 'Введите корректное имя',
            'cart-phone': 'Введите корректный телефон',
            'cart-address': 'Введите корректный адрес'
        }
    });

    $('#form-delivery').on('submit', function (e) {
        e.preventDefault();

        var formValidate = $(this).serializeArray();
        var formData = $(this).serialize();

        if (formValidate[2].value !== '' && formValidate[3].value !== '' && formValidate[4].value.length !== '') {

            $('#form-delivery').trigger('reset');

            var ajaxGetProduct = new Promise(function (resolve, reject) {

                $.ajax({
                    url: '/cart/get-product',
                    success: function (res) {
                        var cart = JSON.parse(res);
                        resolve(cart);
                    },
                    error: function (err) {
                        if (err) {
                            reject(err);
                        }
                    }
                })
            });

            ajaxGetProduct
                .then(function (data) {

                    $.ajax({
                        url: '/email/cart',
                        data: {
                            cart: JSON.stringify(data),
                            form: formData
                        },
                        success: function (res) {
                            if (res) {
                                $('.modal-callback-success').modal('show');
                            }
                        },
                        error: function (err) {
                            if (err) {
                                return err;
                            }
                        }
                    })

                })
                .catch(function (err) {
                    console.log('catch err: ', err);
                })
        }
    });

//  form-delivery end



    // Card form item

    $("#form-card-item").validate({
        messages: {
            'card-user-name': 'Введите имя',
            'card-user-phone': 'Введите телефон'
        }
    });

    $('#form-card-item').on('submit', function (e) {
        e.preventDefault();

        var dataValidSpec = $(this).serializeArray();

        if (dataValidSpec[0].value !== '' && dataValidSpec[1].value !== '') {

            $.ajax({
                method: 'GET',
                url: '/email/card-item',
                data: {item: $(this).serialize()},
                success: function (res) {

                    console.log(res);

                    if (res) {
                        $('.modal-card-success').modal('show');
                        $("#form-card-item").trigger('reset');
                    }
                },
                error: function (e) {
                    console.log('error: ', e);
                }
            })
        }

    });

// Card form item end









//    ################################################################################################## FILTER SECTION


    var globalState = {};

    function ajaxFilterSend(param) {

        $.ajax({
            url: '/product/ajax-product',
            data: {filter: param},
            success: function (res) {
                $('#product-box-items').html(res);
                cardAdd();
            },
            error: function (err) {
                console.log('ajax-product err :', err);
            }
        })
    }

// 1. Param -> price (after & before)
// filter-slider-price ################################################
    var filterSliderPrice = document.getElementById('filter-slider-price');
    if (filterSliderPrice) {
        noUiSlider.create(filterSliderPrice, {
            start: [100, 900],
            connect: true,
            step: 1,
            range: {
                'min': 0,
                'max': 1000
            }
        });

        filterSliderPrice.noUiSlider.on('change', function (values, handle) {

            globalState.price = {
                after: values[0],
                before: values[1]
            };

            $('.input-price-after').val(values[0]);
            $('.input-price-before').val(values[1]);

            ajaxFilterSend(globalState);

        });

// filter-slider-price end #############################################
    }

    // Change input after & before

    // after
    $('input[name="input-price-after"]').on('change', function (e) {

        var value = parseInt($(this).val());

        globalState.price = {
            after: value,
            before: parseInt($('input[name="input-price-before"]').val())
        };

        ajaxFilterSend(globalState);

        console.log('after: ', globalState);
    });

    // before
    $('input[name="input-price-before"]').on('change', function (e) {

        var value = parseInt($(this).val());

        globalState.price = {
            after: parseInt($('input[name="input-price-after"]').val()),
            before: value
        };

        ajaxFilterSend(globalState);

        console.log('before: ', globalState);
    });


    // Change input after & before end


//    ################################################################################################## FILTER SECTION end


});
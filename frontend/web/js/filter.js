$(document).ready(function () {

    var globalState = {};

    function ajaxFilterSend(param) {

        $.ajax({
            url: '/product/ajax-product',
            data: {filter: param},
            success: function (res) {
                $('#product-box-items').html(res);
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


    var filterSliderSquares = document.getElementById('filter-slider-squares');
    if (filterSliderSquares) {
// 2.
// filter-slider-squares ################################################


        noUiSlider.create(filterSliderSquares, {
            start: [1, 9],
            connect: true,
            step: 1,
            range: {
                'min': 0,
                'max': 10
            }
        });

        filterSliderSquares.noUiSlider.on('update', function (values, handle) {
            $('.input-squares-after').val(values[0]);
            $('.input-squares-before').val(values[1]);
        });

// filter-slider-squares end #############################################
    }


    $('.filter-product').change(function (e) {

        // ajaxFilterSend(globalState);

        // var data = $(this).serializeArray();
        // console.log(data);
    });

    // $('.filter-product').on('blur', function (e) {
    //
    //     var data = $(this).serializeArray();
    //     console.log(data);
    // })
});
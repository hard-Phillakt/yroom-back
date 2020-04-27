
$(document).ready(function () {
    
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
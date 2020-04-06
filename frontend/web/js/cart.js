$(document).ready(function () {


    $('.button-buy').on('click', function (e) {
        e.preventDefault();

        var id = $(this).data('id');

        console.log($(this));

        $.ajax({
            url: '/cart/add',
            data: {id: id},
            success: function (res) {
                console.log('res: ', res);
            },
            error: function (err) {
                console.log('err: ', err);
            }
        })
    });

});
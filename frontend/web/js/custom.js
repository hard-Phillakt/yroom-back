/**
 * Created by NET-USER3 on 04.03.2020.
 */


var mainMenu = document.querySelectorAll('.menu .link.link-menu');
var saleTabs = document.querySelectorAll('.additional-menu .hit-sales__tabs li a');

function ActiveItem(data) {
    this.constructor(data);
}

ActiveItem.prototype = {
    constructor: function (el) {
        el.forEach(function (item, i) {
            // main menu
            item.pathname === window.location.pathname && item.className === 'link link-menu' ? item.classList.add('link-menu-active') : false;
            // additional-menu
            item.pathname === window.location.pathname && item.className === 'mr-60' ? item.parentNode.classList.add('active') : false;
        });
    }
};

// var menu = new ActiveItem(menuNavA);
var st = new ActiveItem(saleTabs);
var mm = new ActiveItem(mainMenu);


$(document).ready(function () {

// DropDown section News

    function dropdownMenuBox() {
        $('.dropdown-menu_box-link').on('click', function (e) {
            // e.preventDefault();

            var text = $(this).text();
            if ($('#dropdownMenuButton').html(text)) {
                console.log(text);
                $.ajax({
                    type: 'get',
                    url: '/news/ajax',
                    data: {essence: $(this).text() === 'Новости' ? 1 : 2},
                    success: function (e) {

                        if ($('#news-items').html(e)) {
                            $('#dropdownMenuButton').html(text)
                        }

                        dropdownMenuBox();
                    },
                    error: function (e) {
                        console.log('error: ', e);
                    }
                })
            }
        });
    }

    dropdownMenuBox();

// DropDown section News end


//   Box Search

    $('.search a').on('click', function (e) {
        e.preventDefault();

        $('.search-box').css({
            display: 'block'
        });

        $('body').css({overflowY: 'hidden'});

        setTimeout(function () {
            $('.search-box').css({
                visibility: 'visible',
                opacity: 1
            });
        }, 100);

    });

    $('.search-box').on('click', function (e) {

        var thisElement = $(this);
        var q = $(e.target)[0].name;

        if (q !== 'q') {

            $('body').css({overflowY: 'visible'});

            thisElement.css({
                visibility: 'hidden',
                opacity: 0
            });

            setTimeout(function () {
                thisElement.css({
                    display: 'none'
                });
            }, 500);

        }

    });


//   Box Search end


//   category-item

    $('.category-item').each(function (i, item) {

        if ($(item).attr('href') == window.location.href) {
            $(this).addClass('category-item__active')
        }

    });

//   category-item end


//    callback-add-item

    var addItem = document.querySelector('.cart-product-count');

    var oldStateCountItem;
    var NewStateCountItem;

    var observer = new MutationObserver(function (res) {

        console.log(res);

        oldStateCountItem = res[0].removedNodes[0].data;
        NewStateCountItem = res[1].addedNodes[0].data;

        if(parseInt(NewStateCountItem) > parseInt(oldStateCountItem)){
            $('.callback-add-item').css({
                visibility: 'visible',
                opacity: 1
            });

            setTimeout(function () {
                $('.callback-add-item').css({
                    visibility: 'hidden',
                    opacity: 0
                })
            }, 1500);
        }
    });

    observer.observe(addItem, {
        childList: true,
        subtree: true,
        characterDataOldValue: true
    });


    window.onscroll = function () {
        var pYoffset = window.pageYOffset;

        if(pYoffset >= 200){
            $('.callback-add-item').addClass('callback-add-item__fixed')
        }else {
            $('.callback-add-item').removeClass('callback-add-item__fixed')
        }

    };

//    callback-add-item end

});

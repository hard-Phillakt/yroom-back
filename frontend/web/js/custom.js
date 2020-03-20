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
    }dropdownMenuBox();

// DropDown section News end

});

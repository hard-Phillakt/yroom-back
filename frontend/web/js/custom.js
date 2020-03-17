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
            item.pathname == window.location.pathname && item.className == 'link link-menu' ? item.classList.add('link-menu-active') : false;
            // additional-menu
            item.pathname == window.location.pathname && item.className == 'mr-60' ? item.parentNode.classList.add('active'): false;
        });
    }
};

// var menu = new ActiveItem(menuNavA);
var st = new ActiveItem(saleTabs);
var mm = new ActiveItem(mainMenu);


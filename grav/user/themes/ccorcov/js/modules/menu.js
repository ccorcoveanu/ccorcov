'use strict';

BaseModule.Menu = (function(){

    var vm          = this || {},
        publicItems = {
            openMenu: openMenu,
            closeMenu: closeMenu,
            handleMenu: handleMenu,
            addMenuAsEvent: addMenuAsEvent
        };

    vm.$hamburger  = $('#js-hamburger');
    vm.$navigation = $('#navigation');
    vm.$overlay    = $('#body--overlay');

    return publicItems;

    ////////////////////////////////////////////////////////////////

    function openMenu() {

        if(vm.$navigation.hasClass('open')) return false;
        vm.$navigation.addClass('open');
        vm.$overlay.addClass('visible');


        return true;
    }

    function closeMenu() {

        if(!vm.$navigation.hasClass('open')) return false;
        vm.$navigation.removeClass('open');
        vm.$overlay.removeClass('visible');

        return true;
    }

    function handleMenu() {
        if (!openMenu()) closeMenu();
    }

    function addMenuAsEvent() {
        vm.$hamburger.on('click', function(event) {
            event.preventDefault();
            handleMenu();
        });
    }

})();
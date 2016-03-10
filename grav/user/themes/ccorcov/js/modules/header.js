'use strict';

BaseModule.Header = (function() {

    var vm            = this || {};
    var $header       = $('#fixed_top__container'),
        initialScroll = $('body').scrollTop();

    vm.animateScroll = animateScroll;

    var returnObject = {
        animateScroll: vm.animateScroll
    };

    return returnObject;


    function animateScroll() {

        return debounce(function() {

            var st = $('body').scrollTop();

            if (st == initialScroll) return false;
            if (st > initialScroll){
                makeItSmall();
            } else {
                makeItBig();
            }
            initialScroll = st;
        }, 250)();
    }

    function makeItSmall() {
        if ($header.hasClass('compressed')) return false;
        $header.addClass('compressed');
    }

    function makeItBig() {
        $header.removeClass('compressed');
    }

})();
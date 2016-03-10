'use strict';

var BaseModule = (function BaseModuleF() {

    return {

    };
})();
function debounce(func, wait, immediate) {
    var timeout;
    return function() {
        var context = this, args = arguments;
        var later = function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
};
'use strict';

function foreach(elements) {

};
var injector = {

    dependencies: {},

    register: function(key, value) {
        this.dependencies[key] = value;
    },

    resolve: function() {

        var func, deps, scope, args = [], self = this;
        if(typeof arguments[0] === 'string') {
            func = arguments[1];
            deps = arguments[0].replace(/ /g, '').split(',');
            scope = arguments[2] || {};

        } else {
            func = arguments[0];
            deps = func.toString().match(/^function\s*[^\(]*\(\s*([^\)]*)\)/m)[1].replace(/ /g, '').split(',');
            scope = arguments[1] || {};
        }

        return function() {

            var a = Array.prototype.slice.call(arguments, 0);
            for(var i=0; i<deps.length; i++) {
                var d = deps[i];
                args.push(self.dependencies[d] && d != '' ? self.dependencies[d] : a.shift());
            }
            func.apply(scope || {}, args);
        }
    }
};
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
'use strict';

BaseModule.Images = (function() {

    var vm = {};

    var returnObject = {
        lazyLoadImages: lazyLoadImages,
        lazyLoadImagesWithFallback: lazyLoadImagesWithFallback
    }

    return returnObject;

    ////////////////////////////////////////////////////

    function lazyLoadImages() {

        // Get all images with data src present and change data-src into src
        [].forEach.call(document.querySelectorAll('img[data-src]'), function(img) {
            img.setAttribute('src', img.getAttribute('data-src'));
            img.onload = function() {
                img.removeAttribute('data-src');
            };
        });
    }

    function lazyLoadImagesWithFallback() {

        [].forEach.call(document.querySelectorAll('noscript'), function(noscript) {
            var img = new Image();
            img.setAttribute('data-src', '');
            img.parentNode.insertBefore(img, noscript);
            img.onload = function() {
                img.removeAttribute('data-src');
            };
            img.src = noscript.getAttribute('data-src');
        });
    }

})();
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
'use strict';

var Glue = injector.resolve(function(Header, Menu, Images) {

    //Load lazy images
    Images.lazyLoadImages();

    // Add scroll events on header
    window.addEventListener('scroll', Header.animateScroll);

    // Add click event on hamburger
    Menu.addMenuAsEvent();

})(
        BaseModule.Header,
        BaseModule.Menu,
        BaseModule.Images
  );
//# sourceMappingURL=app.js.map

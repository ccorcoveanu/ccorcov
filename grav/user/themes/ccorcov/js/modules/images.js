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
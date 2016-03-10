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
  <!-- JS Global Compulsory -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>
  <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script src="assets/vendor/svg-injector/dist/svg-injector.min.js"></script>
  <script src="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>
  <script src="assets/vendor/typed.js/lib/typed.min.js"></script>
  <script src="assets/vendor/slick-carousel/slick/slick.js"></script>

  <!-- JS Front -->
  <script src="assets/js/hs.core.js"></script>
  <script src="assets/js/components/hs.header.js"></script>
  <script src="assets/js/components/hs.unfold.js"></script>
  <script src="assets/js/components/hs.focus-state.js"></script>
  <script src="assets/js/components/hs.malihu-scrollbar.js"></script>
  <script src="assets/js/components/hs.validation.js"></script>
  <script src="assets/js/components/hs.fancybox.js"></script>
  <script src="assets/js/components/hs.slick-carousel.js"></script>
  <script src="assets/js/components/hs.show-animation.js"></script>
  <script src="assets/js/components/hs.svg-injector.js"></script>
  <script src="assets/js/components/hs.go-to.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(window).on('load', function () {
      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 767.98,
        hideTimeOut: 0
      });

      // initialization of svg injector module
      $.HSCore.components.HSSVGIngector.init('.js-svg-injector');
    });

    $(document).on('ready', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#header'));

    // initialization of unfold component
    $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
    afterOpen: function () {
        $(this).find('input[type="search"]').focus();
    }
    });

    // initialization of malihu scrollbar
    $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

    // initialization of forms
    $.HSCore.components.HSFocusState.init();

    // initialization of form validation
    $.HSCore.components.HSValidation.init('.js-validate', {
    rules: {
        confirmPassword: {
        equalTo: '#signupPassword'
        }
    }
    });

        // initialization of show animations
        $.HSCore.components.HSShowAnimation.init('.js-animation-link');


      // initialization of text animation (typing)
      var typed = new Typed(".u-text-animation.u-text-animation--typing", {
        strings: ["fastest", "convenient"],
        typeSpeed: 60,
        loop: true,
        backSpeed: 25,
        backDelay: 1500
      });

        // initialization of slick carousel
        $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

      // initialization of fancybox
      $.HSCore.components.HSFancyBox.init('.js-fancybox');

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>
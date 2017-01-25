jQuery(document).ready(($) => {
  const $window = $(window);
  const scrollWrappers = $('.fixedOnScrollContent');

  if(scrollWrappers.length) {

    $window.scroll(() => {
      scrollWrappers.each(function() {
        const $item = $(this);
        const $parent = $item.parent();
        const limitTop = $parent.offset().top - 50;
        const itemHeight = $parent.innerHeight();
        const windowDistance = $window.scrollTop();

        if(windowDistance > limitTop) {
          $parent.css('min-height', itemHeight + 'px');
          $item.addClass('fixed');
        } else {
          $item.removeClass('fixed');
        }
      });
    });

  }
});

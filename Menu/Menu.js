jQuery(document).ready(($) => {
  const menu = $('.cnMenu[data-fix-on-scroll]');
  const fixOnTopValue = menu.data('fixOnScroll');
  const fixPosition = fixOnTopValue === true ? 1 : fixOnTopValue;

  if(menu.length > 0) {
    $(window).on('scroll', (event) => {
      if($(event.target).scrollTop() > fixPosition) {
        menu.addClass('fixed');
      } else {
        menu.removeClass('fixed');
      }
    });
  }
});

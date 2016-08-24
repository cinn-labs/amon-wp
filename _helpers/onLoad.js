// Fade in content when page is loaded
jQuery(window).load(() => {
  jQuery('[data-hide-while-loads]').css('opacity', 1);
  jQuery('#loading').fadeOut();
})

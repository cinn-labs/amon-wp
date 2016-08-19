import Helpers from './_general.js';

(function($) {

  const adjustWindowHeightElements = () => {
    const windowHeight = Helpers.getWindowHeight();
    const wrappers = document.querySelectorAll('[data-window-height]');
    for (var i = 0; i < wrappers.length; i++) {
      const wrapper = wrappers[i];
      wrapper.style.minHeight = windowHeight + 'px';
    }
  }

  adjustWindowHeightElements();
  $(document).ready(adjustWindowHeightElements);
  $(window).load(adjustWindowHeightElements);
  if(!Helpers.isMobile) $(window).resize(adjustWindowHeightElements);

})(jQuery);

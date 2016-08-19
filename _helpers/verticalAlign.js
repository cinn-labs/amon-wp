import Helpers from './_general.js';

(function($) {

  const adjustVerticalAlignElements = () => {
    const wrappers = document.querySelectorAll('[data-vertical-align]');
    const windowHeight = Helpers.getWindowHeight();
    for (var i = 0; i < wrappers.length; i++) {
      const wrapper = wrappers[i];
      const children = wrapper.children;
      if(!!children) {
        if(children.length > 1) console.warn('Vertical align only accepts one child component');
        const wrapperHeight = wrapper.hasAttribute('data-window-height') ? windowHeight : wrapper.offsetHeight;
        const childHeight = children[0].offsetHeight;
        wrapper.style.paddingTop = ((wrapperHeight - childHeight) / 2 )+ 'px';
      }
    }
  }

  $(document).ready(adjustVerticalAlignElements);
  $(window).load(adjustVerticalAlignElements);
  $(window).resize(adjustVerticalAlignElements);

})(jQuery);

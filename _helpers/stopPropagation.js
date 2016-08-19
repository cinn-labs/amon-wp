jQuery(document).ready(($) => {
  $('[data-stop-propagation]').on('click', (event) => {
    event.stopPropagation();
  });
});

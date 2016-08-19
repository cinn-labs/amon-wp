jQuery(document).ready(($) => {
  const closeModal = (modalId) => {
    const selector = !!modalId ? $(`#${modalId}`) : $('[data-modal]');
    selector.fadeOut();
    $('body').removeClass('noScroll');
  }

  const openModal = (modalId) => {
    $(`#${modalId}`).fadeIn();
    $('body').addClass('noScroll');
  }

  $('[data-close-modal]').on('click', (event) => {
    const modalId = $(event.currentTarget).data('close-modal');
    closeModal(modalId);
  });

  $('body').on('keyup', function(event){
    if(event.which == 27) closeModal();
  });

  $('[data-open-modal]').on('click', (event) => {
    event.preventDefault();
    const modalId = $(event.currentTarget).data('open-modal');
    openModal(modalId);
  });
});

const ModalHelpers = {
  onOpenStack: [],
  onCloseStack: [],

  addOnOpenHook(hook) {
    this.onOpenStack.push(hook);
  },

  addOnCloseHook(hook) {
    this.onCloseStack.push(hook);
  },

  runOnOpenHooks(modalId) {
    this.onOpenStack.forEach((hook) => hook(modalId));
  },

  runOnCloseHooks(modalId) {
    this.onCloseStack.forEach((hook) => {
      hook(modalId);
    });
  },
}

jQuery(document).ready(($) => {
  const closeModal = (modalId) => {
    const selector = !!modalId ? $(`#${modalId}`) : $('[data-modal]');
    selector.fadeOut();
    $('body').removeClass('noScroll');
  }

  const openModal = (modalId) => {
    $(`#${modalId}`).fadeIn();
    $('body').addClass('noScroll');
    ModalHelpers.runOnOpenHooks(modalId);
  }

  $('[data-close-modal]').on('click', (event) => {
    const modalId = $(event.currentTarget).data('close-modal');
    closeModal(modalId);
    ModalHelpers.runOnCloseHooks(modalId);
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

export default ModalHelpers;

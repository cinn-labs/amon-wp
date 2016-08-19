jQuery(document).ready(($) => {
  const selectSlide = (sliderId, slideIndex) => {
    const slider = $(`#${sliderId}`);
    slider.find('[data-slide].active').removeClass('active');
    slider.find(`[data-slide=${slideIndex}]`).addClass('active');
  }

  const nextSlide = (sliderId) => {
    const currentSlides = !!sliderId ? $(`#${sliderId} [data-slide].active`) : $('[data-slide].active');
    currentSlides.each(function() {
      const slide = $(this);
      const slider = slide.closest('[data-slider]');
      slide.removeClass('active');
      let nextIndex = slide.data('slide') + 1;
      if(!slider.find(`[data-slide=${nextIndex}]`).length) nextIndex = 0;
      slider.find(`[data-slide=${nextIndex}]`).addClass('active');
    });
  }

  const prevSlide = (sliderId) => {
    const currentSlides = !!sliderId ? $(`#${sliderId} [data-slide].active`) : $('[data-slide].active');
    currentSlides.each(function() {
      const slide = $(this);
      const slider = slide.closest('[data-slider]');
      slide.removeClass('active');
      let prevIndex = slide.data('slide') - 1;
      if(prevIndex < 0) prevIndex = slider.find(`[data-slide]`).length - 1;
      slider.find(`[data-slide=${prevIndex}]`).addClass('active');
    });
  }

  $('[data-select-slide]').on('click', (event) => {
    event.preventDefault();
    const link = $(event.currentTarget);
    selectSlide(link.data('slider-id'), link.data('select-slide'));
  });

  $('body').on('keyup', function(event){
    if(event.which == 37) prevSlide();
    if(event.which == 39) nextSlide();
  });

  // $('[data-open-modal]').on('click', (event) => {
  //   event.preventDefault();
  //   const modalId = $(event.currentTarget).data('open-modal');
  //   $(`#${modalId}`).fadeIn();
  //   $('body').addClass('noScroll');
  // });
});

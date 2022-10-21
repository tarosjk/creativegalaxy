;(function($){
  const $body = $('body')

  // Nav 
  $('#nav-btn').on('click', () => {
    $body.toggleClass('is-nav-open')
  })

  // Slick
  if( document.querySelector('#mv') ) {
    $('#mv').slick({
      fade: true,
      dots: true,
      pauseOnHover: false,
      autoplay: true,
      arrows: false,
    })
  }
  

})(jQuery);
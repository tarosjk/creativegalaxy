import PhotoSwipeLightbox from './vendors/photoswipe/photoswipe-lightbox.esm.js'
const lightbox = new PhotoSwipeLightbox({
  gallery: '#works-gallery',
  children: 'a',
  pswpModule: () => import('./vendors/photoswipe/photoswipe.esm.js')
})
lightbox.init();
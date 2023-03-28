import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.esm.browser.min.js';

export default function initSwiperSlider() {
  var swiper = new Swiper('#professores_slider', {
    pagination: {
      el: '#professores_slider_pagination',
      clickable: true,
    },
    slidesPerView: 1,
    spaceBetween: 16,
    grid: {
      rows: 3,
      fill: 'row',
    },
    breakpoints: {
      360: {
        slidesPerView: 2,
        spaceBetween: 16,
        enabled: true,
        grid: {
          rows: 3,
          fill: 'row',
        },
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 32,
        // enabled: false,
        grid: {
          rows: 3,
          fill: 'row',
        },
      },
      1024: {
        pagination: false,
        slidesPerView: 4,
        spaceBetween: 32,
        enabled: false,
        grid: {
          rows: 100,
          fill: 'row',
        },
      },
      1280: {
        slidesPerView: 5,
        spaceBetween: 40,
        enabled: false,
        grid: {
          rows: 100,
          fill: 'row',
        },
      },
    },
  });
}

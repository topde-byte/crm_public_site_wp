document.addEventListener('DOMContentLoaded', function () {

  /* One Item */
  const swiperOneItem = new Swiper('.js__swiper-one-item', {
    loop: true,
    speed: 1000,
    autoplay: {
      delay: 7000,
    },
    navigation: {
      nextEl: '.js__swiper-btn--next',
      prevEl: '.js__swiper-btn--prev',
    },
  });

  /* Slider */
  const swiperSlider = new Swiper('.js__swiper-slider', {
    loop: true,
    speed: 1000,
    autoplay: {
      delay: 7000,
    },
    pagination: {
      el: '.js__swiper-pagination',
      clickable: true,
    },
  });

  /* Clients */
  const swiperClients = new Swiper('.js__swiper-clients', {
    loop: true,
    slidesPerView: 5,
    spaceBetween: 50,
    breakpoints: {
      1024: { slidesPerView: 4, spaceBetween: 50 },
      992: { slidesPerView: 3, spaceBetween: 40 },
      768: { slidesPerView: 3, spaceBetween: 30 },
      600: { slidesPerView: 2, spaceBetween: 30 },
      480: { slidesPerView: 2, spaceBetween: 0 },
    },
  });

  /* News */
  const swiperNews = new Swiper('.js__swiper-news', {
    loop: true,
    slidesPerView: 4,
    spaceBetween: 30,
    pagination: {
      el: '.js__swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      1024: { slidesPerView: 4, spaceBetween: 30 },
      992: { slidesPerView: 3, spaceBetween: 30 },
      768: { slidesPerView: 2, spaceBetween: 30 },
      600: { slidesPerView: 2, spaceBetween: 30 },
      480: { slidesPerView: 1, spaceBetween: 0 },
    },
  });

  /* Testimonials */
  const swiperTestimonials = new Swiper('.js__swiper-testimonials', {
    loop: true,
    speed: 1000,
    slidesPerView: 1,
    autoplay: {
      delay: 7000,
    },
    navigation: {
      nextEl: '.js__swiper-btn--next',
      prevEl: '.js__swiper-btn--prev',
    },
    pagination: {
      el: '.js__swiper-fraction',
      type: 'fraction',
    },
  });

});

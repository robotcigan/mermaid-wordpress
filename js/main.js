$(document).ready(function () {
  $('.partners').slick({
    // autoplay: true,
    // autoplaySpeed: 3000,
    centerMode: true,
    slidesToShow: 4,
    slidesToScroll: 2,
    adaptiveHeight: true,
    dots: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 600,
        settings: {
          centerMode: false,
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 460,
        settings: {
          centerMode: false,
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  })
  $('.team').slick({
    // autoplay: true,
    // autoplaySpeed: 3000,
    centerMode: true,
    slidesToShow: 4,
    slidesToScroll: 3,
    adaptiveHeight: true,
    dots: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 600,
        settings: {
          centerMode: false,
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 460,
        settings: {
          centerMode: false,
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  })
})
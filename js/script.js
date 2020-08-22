$(document).ready(function() {
  /*anchors toggling*/
  $('.portfolio').each((index, portfolio) => {
    const menu = $(portfolio).find('.menu');
    const menuAnchors = $(menu).find('a');
    const content = $(portfolio).find('.content');
    menuAnchors.each((i, anchor) => {
      $(anchor).on('click', e => {
        e.preventDefault();
        $(menuAnchors).removeClass('active');
        $(anchor).addClass('active');
        let targetELement = $(anchor).attr('href');
        $(content).removeClass('active');
        $('.content' + targetELement).addClass('active');
      });
    });
  });

  $('.content-inner:not(.home)').mCustomScrollbar();
  /*testimonials slider*/
  $('.testimonials-carousel').slick({
    infinite: false,
    arrows: false,
    slidesToShow: 3,
    infinite: false,
    dots: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 320,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
});

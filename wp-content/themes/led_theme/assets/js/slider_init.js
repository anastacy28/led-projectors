function initSlider(){
  $('.sl-show1').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  fade: true,
  cssEase: 'ease-in',
  asNavFor: '.sl-nav1',
});
   $('.sl-nav1').slick({
  dots: false,
    infinite: true,
  slidesToShow: 3,
  asNavFor: '.sl-show1',
  focusOnSelect: true,
});
   $('.sl-show2').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  fade: true,
  cssEase: 'ease-in',
  asNavFor: '.sl-nav2',
});
   $('.sl-nav2').slick({
  dots: false,
    infinite: true,
  slidesToShow: 3,
  asNavFor: '.sl-show2',
  focusOnSelect: true,
});
   $('.sl-show3').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  fade: true,
  cssEase: 'ease-in',
  asNavFor: '.sl-nav3',
});
   $('.sl-nav3').slick({
  dots: false,
    infinite: true,
  slidesToShow: 3,
  asNavFor: '.sl-show3',
  focusOnSelect: true,
});
   $('.sl-show4').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  fade: true,
  cssEase: 'ease-in',
  asNavFor: '.sl-nav4',
});
   $('.sl-nav4').slick({
  dots: false,
    infinite: true,
  slidesToShow: 3,
  asNavFor: '.sl-show4',
  focusOnSelect: true,
});
}

$(document).on('ready', function () {
    initSlider();
});


 
// $(document).ready(function(){
// 	$('.sl-show2').slick({
//   infinite: false,
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   fade: true,
//   cssEase: 'ease-in',
//   asNavFor: '.sl-nav2',
// });
// 	$('.sl-nav2').slick({
//   dots: false,
//   slidesToShow: 3,
//   asNavFor: '.sl-show2',
//   focusOnSelect: true,
// });
// });
// $(document).ready(function(){
// 	$('.sl-show3').slick({
//   infinite: false,
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   fade: true,
//   cssEase: 'ease-in',
//   asNavFor: '.sl-nav3',
// });

// 	$('.sl-nav3').slick({
//   dots: false,
//   slidesToShow: 3,
//   asNavFor: '.sl-show3',
//   focusOnSelect: true,
// });
// });
// $(document).ready(function(){
// 	$('.sl-show4').slick({
//   infinite: false,
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   fade: true,
//   cssEase: 'ease-in',
//   asNavFor: '.sl-nav4',
// });

// 	$('.sl-nav4').slick({
//   dots: false,
//   slidesToShow: 3,
//   asNavFor: '.sl-show4',
//   focusOnSelect: true,
// });
//   });
// $(document).ready(function(){
// 	$('.sl-show5').slick({
//   infinite: false,
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   fade: true,
//   cssEase: 'ease-in',
//   asNavFor: '.sl-nav5',
// });

// 	$('.sl-nav5').slick({
//   dots: false,
//   slidesToShow: 3,
//   asNavFor: '.sl-show5',
//   focusOnSelect: true,
// });
//   });
// $(document).ready(function(){
// 	$('.sl-show6').slick({
//   infinite: false,
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   fade: true,
//   cssEase: 'ease-in',
//   asNavFor: '.sl-nav6',
// });

// 	$('.sl-nav6').slick({
//   dots: false,
//   slidesToShow: 3,
//   asNavFor: '.sl-show6',
//   focusOnSelect: true,
// });
//   });
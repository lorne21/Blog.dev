$(function(){

  // show or hide item
  $(".show-item").hide();
  $(".item").click(function(){
	$('.back-end').removeClass("active-show");
	$('.back-end', this).addClass("active-show");
	$(".show-item .single").addClass("show-single");
	$(".show-item .single").html($(".active-show").html());
    $(".show-item").fadeIn(600);
    $(".show-item-close").addClass("show-close");
    $("html,body").addClass("overflow");
  })
  $(".show-item-close").click(function(){
    $(".show-item").fadeOut(600);
    $(".show-item-close").removeClass("show-close");
	$(".show-item .single").removeClass("show-single");
    $("html,body").removeClass("overflow");
  })
  $(".show-item-back-top").click(function(){
		$(".show-item").animate({
			scrollTop: 0
		}, 1000)
	})
  // end show or hide item
  // delete item
  $('#delete').on('click', function(){
      if(confirm('Are you sure you want to do this? There is no turning back!')) {
          $('#formDelete').submit();
      }
  });
  // end delete item
})

// $(window).scroll(function() {
//     if ($(".navbar").offset().top > 50) {
//         $(".navbar-fixed-top").addClass("top-nav-collapse");
//     } else {
//         $(".navbar-fixed-top").removeClass("top-nav-collapse");
//     }
// });
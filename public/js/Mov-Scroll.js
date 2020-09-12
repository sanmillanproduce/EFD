function menu() {

    $('.dropdown-menu_3').find('> li').click(function(){
        $(this).find('ul')
        .stop(true, true).slideToggle(400);
        return false;
    });
}


//Aimacion de Gif de compra
function ani() {
    randombg();
    $("#G_randon").removeClass("ran_none");
    setInterval(function() {
        $("#G_randon").addClass("ran_none");

    }, 3800);
}
function goBack() {
    window.history.back();
}
////Scrip menu circular de contacto

$(document).ready(function(){
    var toggle = $('#ss_toggle');
    var menu = $('#ss_menu');
    var rot;

    $('#ss_toggle').on('click', function(ev) {
      rot = parseInt($(this).data('rot')) - 180;
      menu.css('transform', 'rotate(' + rot + 'deg)');
      menu.css('webkitTransform', 'rotate(' + rot + 'deg)');
      if ((rot / 180) % 2 == 0) {
        //Moving in
        toggle.parent().addClass('ss_active');
        toggle.addClass('close');
      } else {
        //Moving Out
        toggle.parent().removeClass('ss_active');
        toggle.removeClass('close');
      }
      $(this).data('rot', rot);
    });

    menu.on('transitionend webkitTransitionEnd oTransitionEnd', function() {
      if ((rot / 180) % 2 == 0) {
        $('#ss_menu div i').addClass('ss_animate');
      } else {
        $('#ss_menu div i').removeClass('ss_animate');
      }
    });
	var height = $(window).height();
    $('.carousel_2').carousel({
        interval: 9999
      });

	$(document).scroll(function(){
		var scrollTop = $(this).scrollTop();
		var pixels = scrollTop / 50;

		if(scrollTop < height){
			$("#carrusel").css({
				"-webkit-filter": "blur(" + pixels + "px)",
				"background-position": "center -" + pixels * 10 + "px"
			});

		}

	});

});



function toggleSidebar(){
    document.getElementById("sidebar").classList.toggle('active');
}
function toggleSidebar2(){
    document.getElementById("sidebar2").classList.toggle('active2');
}





















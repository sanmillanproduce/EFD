(function () {
//moviemiento parallax imagenes
	jQuery(function ($) {

		skrollr.init ({
			smoothScrolling: false
		});
    });
    $(document).ready(function(){

        $('.poste-wrappere').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            nextArrow: $('.next'),
            prevArrow: $('.prev'),
        });

        $("#ann").hide();
        $("#heade").addClass("BHE");
        $("#noti").addClass("M_p_1");
        $("#expe").addClass("M_p_1");
        $("#lup").addClass("M_p_1");
        $("#map").addClass("M_p_1");
        $("#truck").addClass("M_p_1");
        $("#use").addClass("M_p_1");
        $("#menu_bur").addClass("M_p_1");

    });
})();

window.onscroll = miFuncion;

function miFuncion () {
	let scroll = document.body.scrollTop || document.documentElement.scrollTop;
	let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
	let scrolled = (scroll/ height) *100;
	document.getElementById('barra').style.width = scrolled + '%';
	console.log("scroll: " + scroll + " heigth: " + height  + " scrolled: " + scrolled);

}

$(window).scroll(function() {
	if ($("#intro").offset().top > 0 && $("#intro").offset().top < 1220) {

        $("#intro").removeClass("backgroud_2");
        $("#noti").addClass("M_p_1");
        $("#expe").addClass("M_p_1");
        $("#lup").addClass("M_p_1");
        $("#map").addClass("M_p_1");
        $("#truck").addClass("M_p_1");
        $("#use").addClass("M_p_1");
        $("#menu_bur").addClass("M_p_1");
		$("#footer").removeClass("fb");
		$("#face").removeClass("Red_color_1");
        $("#twi").removeClass("Red_color_1");
        $("#inst").removeClass("Red_color_1");
        $("#you").removeClass("Red_color_1");
        $("#face").addClass("A");
        $("#twi").addClass("A");
        $("#inst").addClass("A");
        $("#you").addClass("A");
		$("#M").attr("src","media/iconos/M_1.png");

	} else	if ($("#intro").offset().top > 1220 && $("#intro").offset().top < 1857) {

        $("#intro").addClass("backgroud_2");
        $("#noti").removeClass("M_p_1");
        $("#expe").removeClass("M_p_1");
        $("#lup").removeClass("M_p_1");
        $("#map").removeClass("M_p_1");
        $("#truck").removeClass("M_p_1");
        $("#use").removeClass("M_p_1");
        $("#menu_bur").removeClass("M_p_1");
    	$("#nomas").addClass("disp");
        $("#footer").addClass("fb");
		$("#face").removeClass("A");
        $("#twi").removeClass("A");
        $("#inst").removeClass("A");
        $("#you").removeClass("A");
        $("#face").addClass("Red_color_1");
        $("#twi").addClass("Red_color_1");
        $("#inst").addClass("Red_color_1");
        $("#you").addClass("Red_color_1");
		$("#M").attr("src","media/iconos/m.png");

	}
});
function back(){
    document.getElementById("back").classList.remove('fle_op');
    document.getElementById("next").classList.remove('fle_op2');

    document.getElementById("CA").classList.remove('none');
    document.getElementById("OP").classList.remove('none');
    document.getElementById("FI").classList.remove('none');
    document.getElementById("IL").classList.remove('none');

    document.getElementById("MO").classList.add('none');
    document.getElementById("GR").classList.add('none');
    document.getElementById("MC").classList.add('none');
    document.getElementById("PE").classList.add('none');

}

function next(){

document.getElementById("back").classList.add('fle_op');
document.getElementById("next").classList.add('fle_op2');

document.getElementById("CA").classList.add('none');
document.getElementById("OP").classList.add('none');
document.getElementById("FI").classList.add('none');
document.getElementById("IL").classList.add('none');

document.getElementById("MO").classList.remove('none');
document.getElementById("GR").classList.remove('none');
document.getElementById("MC").classList.remove('none');
document.getElementById("PE").classList.remove('none');

}



setTime2r();

function setTime2r(){
    $('#Fondo_splash').show();
    $('#Logo_splash').show();
    timer2 = setInterval(function () {
        $("#ImagenSplash").addClass("ran_none");
    }, 5500);

}





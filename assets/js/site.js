$(document).ready(function(){
	$('.bxslider').bxSlider({
	  mode: 'fade',
	  auto: true,
	  captions: true,
	  controls: false,
	  speed: 3000
	});

	$("#carrusel1").flexisel({
	    visibleItems: 3,
	    animationSpeed: 1000,
	    autoPlay: true,
	    autoPlaySpeed: 500000,            
	    pauseOnHover: true,
	    enableResponsiveBreakpoints: true,
	    responsiveBreakpoints: {
	        landscape800: { changePoint:650, visibleItems: 1 },      
	        landscape1000: { changePoint:1000, visibleItems: 2 }
	    }
	});

});
function menuM(){
	$('.header__menu').toggleClass('show');
}
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
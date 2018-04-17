

var slider = document.querySelector('.slider');
M.Slider.init(slider,{
	indicators: false,
	height: 500,
	transition: 500,
	interval: 6000
});

(function($){
  $(function(){

    $('.sidenav').sidenav();

  }); // end of document ready
})(jQuery); // end of jQuery name space
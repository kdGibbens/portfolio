$(function(){

console.log("I'm working");

$('a[href^="#"]').on('click',function(e) {
	e.preventDefault();

	var target = this.hash;
	var get_target = $(target);

	$('html, body').stop().animate({
		'scrollTop': get_target.offset().top
		}, 1000, 'swing', function() {
			window.location.hash = target;
	});
	console.log("scrolling");
});

});
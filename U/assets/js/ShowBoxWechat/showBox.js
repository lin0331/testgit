
function showBox(intype,outtype,boxid,close) {
	$('.afix').show();
	$('#'+boxid).addClass('animated '+intype).css('display','-webkit-box');

	$('.'+close).click(function() {
		$('#'+boxid).removeClass('animated '+intype).addClass('animated '+outtype).one('webkitAnimationEnd', function () {
			$('.afix').hide();
			$('#'+boxid).removeClass('animated '+outtype).css('display','none');
		});
	});
}
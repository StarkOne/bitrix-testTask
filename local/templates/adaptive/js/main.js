$(document).ready(function() {
	$("#form-ajax").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function() {
			$('.form-ajax_main').addClass('disn');
			$('.form-success').fadeIn(200);
		});
		return false;
	});
	
});
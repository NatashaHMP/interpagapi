$( '#formGerar' ).submit(function(e) {
	e.preventDefault();
	var $form = $( this ),
	pinf = $form.find( "input[name='pin']" ).val(),
	valuef = $form.find( "input[name='value']" ).val()
	
	$.ajax({
		url: 'generateQRCode.php',
		type: 'POST',
		data: { cnpj: '93.612.557/0001-64', pin: pinf, value: valuef },
		success: function(token) {
			$( '.modal-body' ).html('<center><img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=' + token + '&choe=UTF-8" /></center>');
		}
	})
});
$(document).on('ready',inicio);

function inicio() {
	ajaxAutorizaciones();
}

function ajaxAutorizaciones() {
	$('#sum_box').on('click','.auto-auto',function(e){
		e.preventDefault();
		var este 	= $(this);
		este.html("<span class='label label-warning'>Espere</span>");
		var enlace 	= $(this).attr('href');

		$.ajax({
			url: enlace,
			type: 'get',
			success: function(response){
				$('#Autoevaluaciones').html(response);
				este.html("<span class='label label-success'>Hecho</span>");
			},
			errors:function(err){
				console.log(err);
			}
		})
	});
}
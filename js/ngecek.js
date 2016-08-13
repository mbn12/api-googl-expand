
		$(document).ready(function() {
			$(document).on('click', '#btncek', function() {
				if($("#url").val() == '')
				{
					alert('Isi dulu gann..');
					return false;
				}
				$('#proses').html('');
				$('#load').show();
				var ur = $('#url').val();
					$.post("ngecek.php", {
						url:ur
					})
						.done(function(html) {
							$('#load').hide();
							$('#proses').html(html);
	  					});
		
			});
		});

<script src="../assets/vendors/jquery/jquery-3.5.1.min.js"></script>

<script>

$("#btn_connection" ).click(function()
{
	
	$.ajax({
		type: "POST",
		url: "../CONTROLLER/Controller.php",
		data: {
			Login: $("#login").val(),
			Mdp: $("#mdp").val(),
			function_mode: "connection"
		},
		success: function(response, textStatus, xhr)
			{
				var html = ''; 
				if( xhr.status == 200 )
				{
					html = xhr.response;
					console.log(xhr.response);
				}
				else
					html = 'Error! Status: ' + xhr.status;
	
				$('#jquery_result').html(html);
			},
		error: function (xhr, ajaxOptions, thrownError)
			{
				$('#jquery_result').html('Error: ' + xhr.status);
				console.log(thrownError);
			}
	});
});

</script>

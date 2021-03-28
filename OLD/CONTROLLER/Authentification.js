<script src="../assets/vendors/jquery/jquery-3.5.1.min.js"></script>

<script>

$("#btn_connection" ).click(function()
{
	
	$.ajax({
		type: "POST",
		url: "../CONTROLLER/Controller.php", //contient la classe Controller
		data: {
			Login: $("#login").val(),
			Mdp: $("#password").val(),
            Cookie: $("#COOKIE").val(),
			function_mode: "connection" 
		},
		success: function(response, textStatus, xhr)
			{
				if( xhr.status == 200 )
				{
					$table = xhr.response
					$.ajax({
						type: "GET"
						url: "../Public/index.php?page=" + $table + "_Home.php"
					})
				}
				else
					html = 'Error! Status: ' + xhr.status;
	
			},
		error: function (xhr, ajaxOptions, thrownError)
			{
				$('#jquery_result').html('Error: ' + xhr.status);
				console.log(thrownError);
			}
	});
});

</script>

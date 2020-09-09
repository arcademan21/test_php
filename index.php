<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>

	<script type="text/javascript">
		
		$.ajax({
			url: 'request.php',
			type: 'POST',
			data: {
				nombre: 'Harold'
			},

			success: function(response){
				console.log(response)
			}
		})

	</script>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>

	<script type="text/javascript">
		
		let nombre = 'Francis'

		$.ajax({
			url: 'request.php',
			type: 'PUT',
			data: '{"nombre":"'+nombre+'"}',
			
			success: function(response){
				console.log(response)
			}
		})

	</script>

</body>
</html>
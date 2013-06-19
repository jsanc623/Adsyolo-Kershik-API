<html>
	<head>
		<title>Kershik: Coming Soon!</title>
		<style>
			body{
				margin:0;
				padding:0;
				background-color:#000;
				font-family: "Helvetica", Arial, sans-serif, "Comic Sans";
			}
			.container{
				padding-top:5%;
				text-align:center;
				color:#F00;
			}
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	</head>
	<body>
		<div class="wrapper">
			<div class="container">
				<h2>Kershik</h2>
			</div><!-- .container -->
		</div><!-- .wrapper -->
		
		<script type="text/javascript">
		$(".container h2").fadeOut(5000, function(){ 
			$(this).text("Coming soon...").fadeIn(3500).fadeOut(5000);
		});
		</script>
	</body>
</html>
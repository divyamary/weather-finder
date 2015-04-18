<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Weather It</title>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:400,700' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
	<div class="container">
		<h1>WEATHER IT</h1>
		<div class="map"></div>
			<div class="col-md-6 col-md-offset-3" id="show">
				<form class="form-inline">
				<div class="row">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Type in a city and see what the weather is like" name="city" id="cityname"></input>
						<span class="input-group-btn">
							<input type="submit" id="find" class="btn btn-default" value="Weather It"></button>
						</span>
					</div>
				</div>
				</form>
				<div id="success" class="result result-success"><p>Success!</p></div>
				<div id="fail" class="result result-fail"><p>Could not find weather data for that city. Please try again.</p></div>
				<div id="noCity" class="result result-fail"><p>Please enter a city!</p></div>
			</div>
		</div>
</body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js" charset="utf-8" ></script>
	<script src="js/jquery.mapael.js" charset="utf-8" ></script>
	<script src="js/maps/world_countries.js" charset="utf-8" ></script>
	<script src="js/script.js" charset="utf-8" ></script>
  </body>
</html>
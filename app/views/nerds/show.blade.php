<!-- app/views/nerds/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('nerds') }}">Nerd Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('nerds') }}">View All Nerds</a></li>
		<li><a href="{{ URL::to('nerds/create') }}">Create a Nerd</a>
	</ul>
</nav>

<h1>Showing {{ $nerd->name }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $nerd->name }}</h2>
		<p>
			<strong>Email:</strong> {{ $nerd->email }}<br>
			<strong>Level:</strong> {{ $nerd->nerd_level }}
		</p>
	</div>

</div>
</body>
</html>
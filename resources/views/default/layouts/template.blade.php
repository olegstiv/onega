
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">S
		<script type="text/javascript" src="http://192.168.1.1/scwn.js"></script>
		<title>{{ $title or '' }}</title>

		<!-- Последняя компиляция и сжатый CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Дополнение к теме -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body>

@section('navbar')
<nav class="navbar navbar-fixed-top navbar-inverse">
		<div class="container">
				<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Project name</a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
						<ul class="nav navbar-nav">
								<li class="active"><a href={{ route('home')}}>Home</a></li>
								<li><a href={{ route('about')}}>About</a></li>
								<li><a href={{ route('article', ["id"=>"10"])}}>Article</a></li>
								<li><a href={{ route('articles')}}>Articles</a></li>
								<li><a href={{ route('contact')}}>Contact</a></li>
						</ul>
				</div><!-- /.nav-collapse -->
		</div><!-- /.container -->
</nav><!-- /.navbar -->
{{--@endsection--}}
{{--@yield('navbar')--}}
@show
<div class="container">

		<div class="row row-offcanvas row-offcanvas-right">

				<div class="col-xs-12 col-sm-9">
						<p class="pull-right visible-xs">
								<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
						</p>
					@section('header')
						<div class="jumbotron">
								<h1>{{$title}}</h1>
								<p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
								@myDir('Hello')
						</div>
					@show
					@section('content')
						<div class="row">
								<div class="col-xs-6 col-lg-4">
										<h2>Heading</h2>
										<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
										<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
								</div><!--/.col-xs-6.col-lg-4-->
								<div class="col-xs-6 col-lg-4">
										<h2>Heading</h2>
										<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
										<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
								</div><!--/.col-xs-6.col-lg-4-->
								<div class="col-xs-6 col-lg-4">
										<h2>Heading</h2>
										<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
										<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
								</div><!--/.col-xs-6.col-lg-4-->
								<div class="col-xs-6 col-lg-4">
										<h2>Heading</h2>
										<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
										<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
								</div><!--/.col-xs-6.col-lg-4-->
								<div class="col-xs-6 col-lg-4">
										<h2>Heading</h2>
										<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
										<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
								</div><!--/.col-xs-6.col-lg-4-->
								<div class="col-xs-6 col-lg-4">
										<h2>Heading</h2>
										<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
										<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
								</div><!--/.col-xs-6.col-lg-4-->
						</div><!--/row-->
						@show
				</div><!--/.col-xs-12.col-sm-9-->
				@section('sidebar-left')
				<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
						<div class="list-group">
                            <a href="#" class="list-group-item">Link</a>
                            <a href="#" class="list-group-item">Link</a>
                            <a href="#" class="list-group-item">Link</a>
                            <a href="#" class="list-group-item">Link</a>
                            <a href="#" class="list-group-item">Link</a>
                            <a href="#" class="list-group-item">Link</a>
                            <a href="#" class="list-group-item">Link</a>
                            <a href="#" class="list-group-item">Link</a>
                            <a href="#" class="list-group-item">Link</a>
						</div>
				</div><!--/.sidebar-offcanvas-->
					@show
		</div><!--/row-->

		<hr>

		<footer>
				<p>&copy; 2016 Company, Inc.</p>
		</footer>

</div><!--/.container-->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<!-- Последняя компиляция и сжатый JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>

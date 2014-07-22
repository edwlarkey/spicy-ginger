<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>@yield('title')</title>
        <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link href="{{ asset('themes/spicyginger/css/style.css') }}" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<header>
				<h1><a href="{{ URL::route('home') }}">{{ Config::get('wardrobe.title') }}</a></h1>
                <img src="{{ URL::to('/img/logo.png') }}" class="logo" />
				<nav>
					<ul>
						<li><a href="{{ URL::to('/about') }}">About</a></li>
						<li><a href="{{ URL::to('/tag/recipe') }}">Recipes</a></li>
						<li><a href="{{ URL::to('/tag/travel') }}">Travel</a></li>
						<li><a href="{{ URL::to('/tag/Superfoods') }}">Superfoods</a></li>
						<li><a href="{{ URL::route('rss') }}">RSS Feed</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#search"><i class="fa fa-search"></i></a></li>
					</ul>
				</nav>
                <div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                    <div class="search-content">
                        <form action="/search" method="get">
                      <input type="text" name="q" class="form-control input-sm">
                      <input type="submit" class="btn btn-default input-sm" type="button" value="Search" />
                        </form>
                    </div>
                    </div>
                  </div>
                </div>
			</header>
			<div class="content col-md-10 col-md-offset-1">
				@yield('content')
			</div>
            <div class="footer col-md-12">
			<footer>
				<p>Powered by <a href="http://wardrobecms.com">Wardrobe</a></p>
			</footer>
			</div>
		</div>
       <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'spicyginger'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function () {
            var s = document.createElement('script'); s.async = true;
            s.type = 'text/javascript';
            s.src = '//' + disqus_shortname + '.disqus.com/count.js';
            (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
        }());
        </script>
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>

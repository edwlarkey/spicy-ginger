@extends('spicy-ginger.layout')

@section('title')
	{{ $post->title }}
@stop

@section('content')

	<section class="post">

		<h1 class="title">{{ $post->title }}</h1>
        <div class="date">By {{ $post->user->first_name }} on  {{ $post->publish_date->format("F j, Y") }}</div>
		@include('spicy-ginger.inc.tags')
		@if ($post->image)
			<div class="leader-img"><img src="/{{ Config::get('wardrobe.image_dir') }}/{{ $post->image }}" alt="{{ $post->title }}"/></div>
		@endif

		{{ $post->parsed_content }}

    <div class="social">
	@include('spicy-ginger.inc.tags')
    </div>

    <div id="comments"></div>
    <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'spicy-ginger'; // required: replace example with your forum shortname
        var disqus_identifier = '{{ '/'.$post->slug }}';
        var disqus_title = '{{ $post->title }}';
        var disqus_url = '{{ URL::route('post', $post->slug) }}';

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>

		<div class="prev-next">
			@if ($prev)
			<a href="{{ URL::route('post', $prev->slug) }}">&#8592; {{ $prev->title }}</a>
			@endif

			@if ($next)
			<a href="{{ URL::route('post', $next->slug) }}" class="next">{{ $next->title }} &#8594;</a>
			@endif
		</div>

	</section>

@stop


<div class="post">
	<h1><a href="{{ URL::route('post', $post->slug) }}">{{ $post->title }}</a></h1>
	<div class="date">By {{ $post->user->first_name }} on  {{ $post->publish_date->format("F j, Y") }}</div>
		@include('spicy-ginger.inc.tags')
	<div class="content">
		{{ $post->parsed_intro }}
	</div>
    <div class="comments-btn">
    <a href="{{ URL::route('post', $post->slug) }}#disqus_thread">Comments</a>
    </div>
</div>

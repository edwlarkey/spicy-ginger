<ul class="tags">
	@include('spicy-ginger.inc.social')
	@foreach ($post->tags as $item)
		@if ($item->tag != "")
			<li><a href="{{ URL::route('tag', $item->tag) }}">{{ $item->tag }}</a></li>
		@endif
	@endforeach
<a href="{{ URL::route('post', $post->slug) }}#disqus_thread">Comments</a>
</ul>

<a class="share" href="{{ Share::load( URL::route('post', $post->slug), 'SpicyGinger - '.$post->title)->twitter() }}" target="_blank">
    <i class="fa fa-twitter fa-lg"></i>
</a>
<a class="share" href="{{ Share::load(URL::route('post', $post->slug), 'SpicyGinger - '.$post->title)->facebook() }}" target="_blank">
    <i class="fa fa-facebook fa-lg"></i>
</a>
<a class="share" href="{{ Share::load(URL::route('post', $post->slug), 'SpicyGinger - '.$post->title)->pinterest() }}" target="_blank">
    <i class="fa fa-pinterest fa-lg"></i>
</a>
<a class="share" href="{{ Share::load(URL::route('post', $post->slug), 'SpicyGinger - '.$post->title)->vk() }}" target="_blank">
    <i class="fa fa-vk fa-lg"></i>
</a>

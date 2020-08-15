@component('mail::message')
 
<h4>  {{ $post->title }} </h4>


@component('mail::button', ['url' => $url ])
Read Post
@endcomponent

Thanks,<br>
{{ $post->user->name }} , <a href="{{route('blog.index')}}">Learnmarketing.org</a><br>
<br>
<a href="{{route('subscribe.destroy',$email)}}">Unsubscribe</a>
@endcomponent

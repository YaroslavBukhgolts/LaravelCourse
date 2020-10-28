<div>
<h2>список категорий:</h2>
    @foreach ($categories as $c)
        <p><a href="{{ route('news.showNews', ['id' => $c['id']]) }}">{{ $c['title'] }} {{$c['id']}} </a></p>
    @endforeach
</div>

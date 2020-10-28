<div>
<h1>Список новостей категории:</h1>
    @foreach( $news as $n)
        <p><a href="{{ route('news.ShowOneNews', ['id' => $n['id']]) }}">{{$n['news']['title']}} {{$n['id']}}</a></p>
    @endforeach
</div>
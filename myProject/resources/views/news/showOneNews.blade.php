@extends('layouts.main')
@section('content')
<div>
    <h1> Новость {{$id}}</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita non officia error consequatur omnis dolorem quas quos nobis, voluptate unde. Reprehenderit, fugit? Voluptatibus molestiae maxime officiis sit architecto, ducimus quas!</p>
    <p class="post-meta">Опубликовал
        <a href="#">редактор</a>
      {{ Carbon\Carbon::now() }}</p>    
</div>
@endsection

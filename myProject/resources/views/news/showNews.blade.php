@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
    <h2>Список новостей категории:</h2>
        @forelse ($news as $n)
        <div class="post-preview">
            <a href="{{ route('news.ShowOneNews', ['id' => $n['id']]) }}">
              <h2 class="post-title">
                {{$n['news']['title']}} {{$n['id']}}
              </h2>
              <h3 class="post-subtitle">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et, recusandae!
              </h3>
            </a>
            <p class="post-meta">Опубликовал
              <a href="#">редактор</a>
            {{ Carbon\Carbon::now() }}</p>
          </div>
          <hr> 
        @empty
            <h3>Статей не найдено</h3>            
        @endforelse

      <!-- Pager -->
      <div class="clearfix">
        <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
      </div>
    </div>
  </div> 
@endsection

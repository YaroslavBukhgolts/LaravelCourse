@extends('layouts.main') 
@section('content')
<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
    <h2>список категорий:</h2>
      @forelse ($categories as $c)
      <div class="post-preview">
        <a href="{{ route('news.showNews', ['id' => $c['id']]) }}">
          <h2 class="post-title">
            {{ $c['title'] }} {{$c['id']}}
          </h2>
        </a>
      </div>
      <hr>
      @empty
        <h3>Такой категории не существует</h3>
      @endforelse
    </div>
</div> 
@endsection


@extends('layouts.app')

@section('content')
  <h1>Posts</h1>
  @if(count($posts) > 0)
    @foreach ($posts as $post)
        <div class="card mb-3">
          <div class="card-body">
            <h3 class="card-title">
              <a href="/posts/{{$post->id}}">{{$post->title}}</a>
            </h3>
            <small>Written on {{$post->created_at}}</small>
            <p class="card-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia eligendi quos deleniti dolores aut error dignissimos qui a dolorem. Similique adipisci hic natus laudantium! Debitis cupiditate ex inventore blanditiis eos.
            </p>
          </div>
        </div>
    @endforeach
    {{$posts->links()}}
  @else
    <p>No posts found</p>
  @endif
@endsection
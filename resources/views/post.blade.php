@extends('layouts.main')
@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}"/>
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}"/>
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit" >Search</button>
                </div>
            </form>
        </div>
    </div>
    @if($posts->count())
        <div class="card mb-3">
            @if ($posts[0]->image)
                <div style="max-height:350px; overflow:hidden">
                    <img src="{{ asset('storage/'.$posts[0]->image) }}" class="card-img-top" alt="...">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
            @endif  
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"  class="text-decoration-none text-dark"> {{ $posts[0]->title }}</a></h3>
                <p class="card-text">
                    <small class="text-muted">
                        <p> By <a href="/posts?author={{ $posts[0]->author->username }}"> {{ $posts[0]->author->name }}</a> in 
                        <a href="/posts?category={{ $posts[0]->category['slug'] }}">{{ $posts[0]->category['name']}}</a>
                        at {{ $posts[0]->created_at->diffForHumans() }}</p>

                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->experpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}"  class="text-decoration-none btn-primary">Read More</a>

            </div>
        </div>
    
   
    <div class="container">
        <div class="row">
            @foreach($posts->skip(1) as $post)
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 18rem;">
                    <p class="position-absolute bg-dark p-1" >
                        <a href="posts?category={{ $post->category->slug }}"  class="text-decoration-none  text-light">{{ $post->category->name }}</a>
                    </p>
                    @if ($post->image)
                        <img src="{{ asset('storage/'.$post->image) }}" class="card-img-top" alt="...">
                    @else
                        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="...">
                    @endif  
                    <div class="card-body">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <p class="card-text">
                        <small class="text-muted">
                            <p> By <a href="/posts?author={{ $post->author->username }}"> {{ $post->author->name }}</a>
                            at {{ $post->created_at->diffForHumans() }}</p>
    
                        </small>
                    </p>                      <p class="card-text">{!! $post->experpt !!}</p>
                      <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read Now</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
    @else
        <p class="center fs-4">No post found</p>
    @endif

    <div class="d-flex justify-content-center" >
        {{ $posts->links() }}
    </div>


@endsection
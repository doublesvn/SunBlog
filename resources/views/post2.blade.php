@extends('layouts.main')
@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-5">{{ $post->title }}</h1>
            <p> By <a href="#"> {{ $post->author->name }}</a> in <a href="//posts?category={{ $post->category['slug'] }}">{{ $post->category['name']}}</a></p>
            @if ($post->image)
                <img src="{{ asset('storage/'.$post->image) }}" class="card-img-top" alt="...">
            @else
                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="...">
            @endif 
            
            <p>{!! $post->body !!}</p>
            <a href="/blog" class="btn-primary mb-5">back</a>

        </div>
    </div>
</div>

@endsection

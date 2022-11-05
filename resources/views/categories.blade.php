@extends('layouts.main')
@section('container')
<div class="mb-5">
    <div class="container">
        <div class="row">
            @foreach ( $categories as $category )
                <div class="col-md-4">
                    <a href="/posts?category={{ $category['slug'] }}">{{ $category['name']}}</a>
                    <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/400x400?{{ $category->name }}" class="card-img" alt="...">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 fs-3">{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>

{{-- 

    <h1 class="mb-5">Post Categories</h1>
    @foreach ($categories as $category)
    <ul>
        <li>
            <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
        </li>
    </ul>
    @endforeach --}}
    
@endsection
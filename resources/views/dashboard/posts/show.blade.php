@extends('dashboard.layout.main')
@section('container')
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-8">
                <h1 class="mb-5">{{ $post->title }}</h1>
                <a href="/dashboard/posts" class="btn btn-lg btn-success"><i class="bi bi-arrow-left"></i></a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-lg bg-warning"><i class="bi bi-pencil"></i></a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    <button class="btn btn-lg btn-danger" onclick="return confirm('Kamu Yakin Mau Hapus ?')">
                      x
                    </button>
                    @csrf
                </form>
                @if ($post->image)
                <div style="max-height:350px; overflow:hidden">
                    <img src="{{ asset('storage/'.$post->image) }}" class="card-img-top" alt="...">
                </div>
                @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="...">
                @endif            

                
                <article class="my-3 fs-5">{!! $post->body !!}</article>

            </div>
        </div>
    </div>
@endsection
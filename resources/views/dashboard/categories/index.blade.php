@extends('dashboard.layout.main')
@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post Category</h1>
  </div>
  @if(session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
  @endif
  <div class="table-responsive">
    <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create new category</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category Name</th>
          <th scope="col">action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($categories as $category)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->name }}</td>
            <td>
              <a href="/dashboard/categories/{{ $category->slug }}" class="btn btn-lg btn-info"><i class="bi bi-eye"></i></a>
              <a href="/dashboard/categories/{{ $category->slug }}/edit" class="btn btn-lg bg-warning"><i class="bi bi-pencil"></i></a>
              <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                @method('delete')
                <button class="btn btn-lg btn-danger border-0" onclick="return confirm('Kamu Yakin Mau Hapus ?')">
                  x
                </button>
                @csrf
              </form>
              {{-- <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-lg bg-danger"></i></a> --}}

            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
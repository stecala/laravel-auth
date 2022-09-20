@extends('layouts.app')

@section('content')
    <div class="container-lg mt-5">
        <form action="{{ route('admin.posts.store') }}" method="post">
            @csrf
            <div class="mb-3">
              <label for="author" class="form-label">Author:</label>
              <input type="text" class="form-control" id="author" name="author" required>
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Post content:</label>
              <input type="text" class="form-control" id="description" name="description" required>
            </div>
            <div class="mb-3">
              <label class="form-label" for="img_post">Link image for post:</label>
              <input type="text" class="form-control" id="img_post" name="img_post" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="post_date">Date post:</label>
                <input type="text" class="form-control" id="post_date" name="post_date" required value="{{ date("Y-m-d h:i:s") }}" readonly>
              </div>
            <button type="submit" class="btn btn-primary">Edit</button>
          </form>
    </div>
@endsection
@extends('layouts.main')

@section('hero')
    <h1>Edit Blog</h1>
    <p>Update your blog details easily</p>
@endsection

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Blog Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Blog Name</label>
                            <input type="text" name="name" class="form-control form-control-lg" value="{{ $blog->name }}" required>
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control form-control-lg" rows="6" required>{{ $blog->description }}</textarea>
                        </div>

                        <!-- Image -->
                        <div class="mb-4">
                            <label for="image" class="form-label">Image (optional)</label>
                            <input type="file" name="image" class="form-control">
                            @if($blog->image)
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" class="img-thumbnail mt-2" style="max-width: 150px;">
                            @endif
                        </div>

                        <!-- Buttons -->
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('profile.edit') }}" class="btn btn-secondary btn-lg">Cancel</a>
                            <button type="submit" class="btn btn-success btn-lg">Update Blog</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

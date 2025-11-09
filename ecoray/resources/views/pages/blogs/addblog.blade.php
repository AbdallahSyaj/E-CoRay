@extends('layouts.main')

@section('hero')
    <h1>Add New Blog</h1>
    <h4>Create a new blog post</h4>
@endsection

@section('content')
<section class="section-margin">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="card p-4 shadow">
                    <h3 class="mb-4">Add Blog</h3>

                    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Blog Title -->
                        <div class="form-group mb-3">
                            <label for="name">Blog Title</label>
                            <input type="text" name="name" id="name"
                                class="form-control @error('name') is-invalid @enderror"
                                placeholder="Enter blog title" value="{{ old('name') }}">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Description -->
                        <div class="form-group mb-3">
                            <label for="description">Blog Description</label>
                            <textarea name="description" id="description" rows="5"
                                class="form-control @error('description') is-invalid @enderror"
                                placeholder="Enter blog description">{{ old('description') }}</textarea>
                            @error('description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Category -->
                        <div class="form-group mb-3">
                            <label for="category_id">Category</label>
                            <select name="category_id" id="category_id"
                                class="form-control @error('category_id') is-invalid @enderror">
                                <option value="">-- Select Category --</option>

                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>

                            @error('category_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Image -->
                        <div class="form-group mb-3">
                            <label for="image">Blog Image</label>
                            <input type="file" name="image" id="image"
                                class="form-control @error('image') is-invalid @enderror">
                            @error('image')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="button w-100 mt-3">Create Blog</button>

                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection

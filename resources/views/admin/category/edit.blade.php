@extends('admin.layouts.header')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Category</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-edit me-1"></i>
            Edit Category
        </div>
        <div class="card-body">
            <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $category->name) }}" required>
                </div>
                <div class="form-group">
                    <label for="name">Category Short description</label>
                    <input type="text" name="short_description" id="short_description" class="form-control" value="{{ old('short_description', $category->short_description) }}" required>
                </div>
                <div class="form-group">
                    <label for="image">Category Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                    @if ($category->image)
                        <img src="{{ asset($category->image) }}" alt="{{ $category->name }}" style="width: 100px; height: auto; margin-top: 10px;">
                    @endif
                </div>
                <button type="submit" class="btn btn-primary mt-3">Update Category</button>
            </form>
        </div>
    </div>
</div>
@endsection

@extends('admin.layouts.header')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Blog</h1>
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <i class="fas fa-table me-1"></i>
            <span>Blog List</span>
            <a href="{{ route('blogs.create') }}" class="btn btn-primary">Add Blog</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($blog as $cat)
                        <tr>
                            <td>
                                {{ $cat->title }}
                            </td>
                            <td>
                                {{ $cat->description }}
                            </td>
                            <td>
                                @if ($cat->image)
                                <img src="{{ asset($cat->image) }}" alt="{{ $cat->title }}" style="width: 100px; height: auto;">

                                @else
                                    No Image
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('blogs.edit', $cat->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('blogs.destroy', $cat->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this blog?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    @endsection
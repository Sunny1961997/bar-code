@extends('admin.layouts.header')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Category</h1>
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <i class="fas fa-table me-1"></i>
            <span>Category List</span>
            <a href="{{ route('categories.create') }}" class="btn btn-primary">Add Category</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Short description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Short description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($category as $cat)
                        <tr>
                            <td>
                                {{ $cat->name }}
                            </td>
                            <td>
                                {{ $cat->short_description }}
                            </td>
                            <td>
                                @if ($cat->image)
                                <img src="{{ asset($cat->image) }}" alt="{{ $cat->name }}" style="width: 100px; height: auto;">

                                @else
                                    No Image
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('categories.edit', $cat->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('categories.destroy', $cat->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this category?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    @endsection
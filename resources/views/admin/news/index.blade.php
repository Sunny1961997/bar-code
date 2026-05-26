@extends('admin.layouts.header')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">News</h1>
    <div class="card">
        <div class="card-header">
            <a href="{{ route('news.create') }}" class="btn btn-primary">Add News</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Published</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $new)
                        <tr>
                            <td>{{ $new->title }}</td>
                            <td>{{ $new->category->name }}</td>
                            <td><img src="{{ asset($new->image) }}" width="80"></td>
                            <td>{{ $new->publish ? 'Yes' : 'No' }}</td>
                            <td>
                                <a href="{{ route('news.edit', $new->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('news.destroy', $new->id) }}" method="POST" class="d-inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

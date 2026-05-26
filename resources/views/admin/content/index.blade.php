@extends('admin.layouts.header')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Contents</h1>
    <div class="card">
        <div class="card-header">
            <a href="{{ route('contents.create') }}" class="btn btn-primary">Add Content</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Content</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contents as $content)
                        <tr>
                            <td>{{ $content->name }}</td>
                            <td>{{ $content->slug }}</td>
                            <td>{!! $content->content !!}</td>
                            <td><img src="{{ asset($content->image) }}" width="80"></td>
                            <td>
                                <a href="{{ route('contents.edit', $content->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('contents.destroy', $content->id) }}" method="POST" class="d-inline">
                                    @csrf @method('DELETE')
                                    {{-- <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">Delete</button> --}}
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

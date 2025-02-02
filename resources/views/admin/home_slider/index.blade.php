@extends('admin.layouts.header')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Home Sliders</h1>
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <i class="fas fa-table me-1"></i>
            <span>Home Slider List</span>
            <a href="{{ route('home-sliders.create') }}" class="btn btn-primary">Add Home Slider</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Subtitle</th>
                        <th>URL</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Subtitle</th>
                        <th>URL</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($homeSliders as $slider)
                        <tr>
                            <td>
                                @if ($slider->image)
                                    <img src="{{ asset($slider->image) }}" alt="{{ $slider->title }}" style="width: 100px; height: auto;">
                                @else
                                    No Image
                                @endif
                            </td>
                            <td>{{ $slider->title }}</td>
                            <td>{{ $slider->subtitle }}</td>
                            <td>{{ $slider->url }}</td>
                            <td>
                                <a href="{{ route('home-sliders.edit', $slider->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('home-sliders.destroy', $slider->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this slider?');">Delete</button>
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

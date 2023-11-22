@extends('layouts.app')
  
@section('title', 'Edit Topic')
  
@section('contents')
    <h1 class="mb-0">Edit Topic</h1>
    <hr />
    <form action="{{ route('Topic.update', $topic->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Image</label>
                <input type="file" name="image" class="form-control" >
                @if ($topic->image)
                    <img src="{{ asset('storage/' . $topic->image) }}" alt="topic Image" class="img-thumbnail" width="200">
                @else
                    <p>No image uploaded</p>
                @endif
            </div>
            <div class="col mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="title" value="{{ $topic->title }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Bio</label>
                <input type="text" name="bio" class="form-control" placeholder="bio" value="{{ $topic->bio }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="description" >{{ $topic->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
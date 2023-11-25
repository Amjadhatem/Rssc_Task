@extends('layouts.app')
  
@section('title', 'Edit News')
  
@section('contents')
    <h1 class="mb-0">Edit News</h1>
    <hr />
    <form action="{{ route('News.update', $news->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Image</label>
                <input type="file" name="image" class="form-control" >
                @if ($news->image)
                    <img src="{{ asset('storage/' . $news->image) }}" alt="topic Image" class="img-thumbnail" width="200">
                @else
                    <p>No image uploaded</p>
                @endif
            </div>
            <div class="col mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="title" value="{{ $news->title }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Bio</label>
                <input type="text" name="bio" class="form-control" placeholder="bio" value="{{ $news->bio }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
@extends('layouts.app')
  
@section('title', 'Show Topic')
  
@section('contents')
    <h1 class="mb-0">Detail Topic</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Image</label>
            <img src="{{ asset('storage/' . $topic->image) }}" alt="image" style="max-width: 100px; max-height: 100px;">                               

        </div>
        <div class="col mb-3">
            <label class="form-label">title</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $topic->title }}" readonly>
        </div>
        
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">bio</label>
            <input type="text" name="bio" class="form-control" placeholder="Bio" value="{{ $topic->bio }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" placeholder="Description" readonly>{{ $topic->description }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $topic->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $topic->updated_at }}" readonly>
        </div>
    </div>
@endsection
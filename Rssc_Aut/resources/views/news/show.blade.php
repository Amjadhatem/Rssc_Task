@extends('layouts.app')
  
@section('title', 'Show News')
  
@section('contents')
    <h1 class="mb-0">Detail News</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Image</label>
            <img src="{{ asset('storage/' . $news->image) }}" alt="image" style="max-width: 100px; max-height: 100px;">                               

        </div>
        <div class="col mb-3">
            <label class="form-label">title</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $news->title }}" readonly>
        </div>
        
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">bio</label>
            <input type="text" name="bio" class="form-control" placeholder="Bio" value="{{ $news->bio }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $news->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $news->updated_at }}" readonly>
        </div>
    </div>
@endsection
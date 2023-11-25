@extends('layouts.app')
  
@section('title', 'Create Topic')
  
@section('contents')
    <h1 class="mb-0">Add Topic</h1>
    <hr />
    <form action="{{ route('Topic.store') }}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="col">
            <input type="file" class="form-control" name="image" id="image" placeholder="Choose an image file">

        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="title">
            </div>  
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="bio" class="form-control" placeholder="bio">
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
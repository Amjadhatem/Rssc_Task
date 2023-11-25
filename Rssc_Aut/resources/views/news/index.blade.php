@extends('layouts.app')
  
@section('title', 'Home News')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List News</h1>
        <a href="{{ route('News.create') }}" class="btn btn-primary">Add News</a>


    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="table-responsive" style="overflow-x: scroll;">
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>image</th>
                <th>title</th>
                <th>bio</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($news->count() > 0)
                @foreach($news as $nw)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">
                                <img src="{{ asset('storage/' . $nw->image) }}" alt="Service Image" style="max-width: 100px; max-height: 100px;">                               
                        </td>
                        <td class="align-middle">{{ $nw->title }}</td>
                        <td class="align-middle">{{ $nw->bio }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('News.show', $nw->id) }}" type="button" class="btn btn-secondary">Details</a>
                                <a href="{{ route('News.edit', $nw->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('News.destroy', $nw->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Service not found</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
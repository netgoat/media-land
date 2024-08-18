@extends('admin.base')

@section('title' , 'create branch')

@section('content')

<h1>{{ $branch->name }}</h1>
@foreach ($branch->images  as $image)
    <img class="card-img-top " src="/storage/{{$image->image_path }}"
         style="height: 400px; width: 100%; object-fit: cover" alt=""/>
@endforeach

<h1>{{ $branch->description }}</h1>
<p>Details about the branch...</p>

<a href="{{ route('admin.branches.edit', $branch->id) }}" class="btn btn-primary">Edit</a>

<form action="{{ route('admin.branches.destroy', $branch->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
@endsection()

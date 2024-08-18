@extends('admin.base')

@section('title' , 'create Project')

@section('content')

<h1>{{ $project->name }}</h1>

@foreach ($project->images  as $image)
    <img class="card-img-top " src="/storage/{{$image->image_path }}"
         style="height: 400px; width: 100%; object-fit: cover" alt=""/>
@endforeach

<p>{{ $project->description }}</p>

<ul>
    @foreach ($project->facts as $fact)
        <li>{{ ucfirst($fact->key) }}: {{ $fact->value }}</li>
    @endforeach
</ul>

<a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-primary">Edit</a>

<form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
@endsection()


@extends('base')
@section('content')
<h1>Projects</h1>
<a href="{{ route('projects.create') }}" class="btn btn-primary">Add New Project</a>

<ul>
    @foreach ($projects as $project)
        <li>
            <a href="{{ route('projects.show', $project->id) }}">{{ $project->name }}</a>
            <p>{{ $project->description }}</p>
        </li>
    @endforeach
</ul>
@endsection()


<h1>{{ $project->name }}</h1>
<p>{{ $project->description }}</p>

<ul>
    @foreach ($project->facts as $fact)
        <li>{{ ucfirst($fact->key) }}: {{ $fact->value }}</li>
    @endforeach
</ul>

<a href="{{ route('projects.edit', $project->id) }}" class="btn btn-primary">Edit</a>

<form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>

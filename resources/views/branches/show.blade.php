<h1>{{ $branch->name }}</h1>
<h1>{{ $branch->description }}</h1>
<p>Details about the branch...</p>

<a href="{{ route('branches.edit', $branch->id) }}" class="btn btn-primary">Edit</a>

<form action="{{ route('branches.destroy', $branch->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>

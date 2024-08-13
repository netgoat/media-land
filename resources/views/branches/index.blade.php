<h1>Branches</h1>
<a href="{{ route('branches.create') }}" class="btn btn-primary">Add New Branch</a>

<ul>
    @foreach ($branches as $branch)
        <li>
            <a href="{{ route('branches.show', $branch->id) }}">{{ $branch->name }}</a>
            <p>{{ $branch->description }}</p>

        </li>
    @endforeach
</ul>

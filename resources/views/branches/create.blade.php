<h1>Create Branch</h1>

<form action="{{ route('branches.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Branch Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $branch->name ?? '') }}">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description">{{ old('description', $branch->description ?? '') }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>

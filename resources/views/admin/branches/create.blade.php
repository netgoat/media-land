@extends('admin.base')

@section('title' , 'create branch')

@section('content')

<h1>Create Branch</h1>
<div class="card p-4 m-5"  >
    <form action="{{ route('admin.branches.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="form-group  mb-3 col-6">
                <label for="name">Branch Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $branch->name ?? '') }}">
            </div>
        </div>

        <div class="form-group mb-2">
            <label for="images">cover</label>
            <input type="file" class="form-control" id="cover"  name="cover" >
        </div>

        <div class="form-group mb-2">
            <label for="images">images</label>
            <input type="file" class="form-control" id="images"  name="images[]" multiple>
        </div>

        <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description">{{ old('description', $branch->description ?? '') }}</textarea>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-primary">Save</button>

        </div>
    </form>

</div>


@endsection()

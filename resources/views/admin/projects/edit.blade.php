@extends('admin.base')

@section('title' , 'create Project')

@section('content')
    <h1>Edit Project</h1>

    <form action="{{ route('projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-2">
            <label for="name">Project Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $project->name) }}" required>
        </div>

        <div class="form-group mb-2">
            <label for="image">images</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description">{{ old('description', $project->description) }}</textarea>
        </div>

        <!-- Facts Section -->
        <div class="form-group">
            <label>Project Facts</label>
            <div id="facts-container">
                @foreach ($project->facts as $index => $fact)
                    <div class="fact-row">
                        <input type="text" name="facts[{{ $index }}][key]" value="{{ $fact->key }}" placeholder="Key" class="form-control" />
                        <input type="text" name="facts[{{ $index }}][value]" value="{{ $fact->value }}" placeholder="Value" class="form-control" />
                        <button type="button" class="btn btn-danger remove-fact">Remove</button>
                    </div>
                @endforeach
            </div>
            <button type="button" id="add-fact" class="btn btn-primary">Add Fact</button>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection()
@section('script')

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let factIndex = {{ $project->facts->count() }};

            document.getElementById('add-fact').addEventListener('click', function () {
                const container = document.getElementById('facts-container');
                const newFactRow = document.createElement('div');
                newFactRow.classList.add('fact-row');
                newFactRow.innerHTML = `
                    <input type="text" name="facts[${factIndex}][key]" placeholder="Key" class="form-control" />
                    <input type="text" name="facts[${factIndex}][value]" placeholder="Value" class="form-control" />
                    <button type="button" class="btn btn-danger remove-fact">Remove</button>
                `;
                container.appendChild(newFactRow);
                factIndex++;
            });

            document.getElementById('facts-container').addEventListener('click', function (event) {
                if (event.target.classList.contains('remove-fact')) {
                    event.target.closest('.fact-row').remove();
                }
            });
        });
    </script>


@endsection()

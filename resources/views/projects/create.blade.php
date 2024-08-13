
    <h1>Create/Edit Project</h1>

    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Project Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $project->name ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description">{{ old('description', $project->description ?? '') }}</textarea>
        </div>


        <div class="form-group">
            <label for="branch_id">Branch</label>
            <select name="branch_id" id="branch_id" class="form-control" required>
                @foreach($branches as $branch)
                    <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                @endforeach
            </select>
        </div>


        <!-- Facts Section -->
        <div class="form-group">
            <label>Project Facts</label>
            <div id="facts-container">
                <div class="fact-row">
                    <input type="text" name="facts[0][key]" placeholder="Key" class="form-control" />
                    <input type="text" name="facts[0][value]" placeholder="Value" class="form-control" />
                    <button type="button" class="btn btn-danger remove-fact">Remove</button>
                </div>
            </div>
            <button type="button" id="add-fact" class="btn btn-primary">Add Fact</button>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let factIndex = 1;

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

@extends('admin.base')

@section('title' , 'create Project')

@section('content')

    <h1>Create Project</h1>

    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-2">
            <label for="name">Project Name</label>
            <input type="text" class="form-control" id="name" name="name"
                   value="{{ old('name', $project->name ?? '') }}" required>
        </div>

        <div class="form-group mb-2">
            <label for="images">cover</label>
            <input type="file" class="form-control" id="cover" name="cover">
        </div>


        <div class="form-group mb-2">
            <label for="images">images</label>
            <input type="file" class="form-control" id="images" name="images[]" multiple>
        </div>


        <div class="form-group mb-2">
            <label for="description">Description</label>
            <textarea class="form-control" id="description"
                      name="description">{{ old('description', $project->description ?? '') }}</textarea>
        </div>


        <div class="form-group mb-2">
            <label for="branch_id">Branch</label>
            <select name="branch_id" id="branch_id" class="form-control" required>
                @foreach($branches as $branch)
                    <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                @endforeach
            </select>
        </div>


        <!-- Project Facts -->
        <div class="form-group mb-2">
            <label>Project Facts</label>
            <div id="facts-container">
                <div class="fact-row row mb-2">
                    <div class="col-4">
                        <input type="text" name="facts[0][key]" placeholder="Key"
                               class="form-control  "/>
                    </div>
                    <div class="col-4">
                        <input type="text" name="facts[0][value]" placeholder="Value"
                               class="form-control  "/>
                    </div>
                    <div class="col-1">
                        <button type="button" class="btn btn-danger remove-fact  "><i class="fa-solid fa-minus"></i>
                        </button>
                        <button type="button" id="add-fact" class="btn btn-primary"><i class="fa-solid fa-plus"></i>
                        </button>

                    </div>

                </div>
            </div>
        </div>
        <div class="form-group mb-2">

            <label>Project Sections</label>

            <!-- Project Sections -->
            <div class="form-group mb-2 p-4">
                <div id="project-section-container">
                    <div class="project-section-row  mb-2">

                        <div class="form-group mb-2">
                            <label for="name">Section Title</label>

                            <input type="text" name="sections[0][title]" placeholder="Title"
                                   class="form-control  "/>
                        </div>
                        <div class="form-group mb-2">
                            <label for="description">Section Content</label>
                            <textarea name="sections[0][content]" class="form-control"></textarea>
                        </div>

                        <div class="form-group mb-2">
                            <label for="images">Section images</label>
                            <input type="file" class="form-control" id="images" name="sections[0][images][]" multiple>
                        </div>


                        <div class="col-12 text-end">
                            <button type="button" class="btn btn-danger remove-project-section  ">
                                Remove section
                            </button>
                            <button type="button" id="add-project-section" class="btn btn-primary">
                                Add section
                            </button>

                        </div>

                    </div>
                </div>
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-primary">Save</button>

            </div>
        </div>

    </form>
@endsection()

@section('script')

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let factIndex = 1;

            document.getElementById('add-fact').addEventListener('click', function () {
                const container = document.getElementById('facts-container');
                const newFactRow = document.createElement('div');
                newFactRow.classList.add('fact-row');
                newFactRow.classList.add('row');
                newFactRow.classList.add('mb-2');
                newFactRow.innerHTML = `
                    <div class="col-4">
                        <input type="text" name="facts[${factIndex}][key]" placeholder="Key" class="form-control" />
                    </div>
                    <div class="col-4">
                      <input type="text" name="facts[${factIndex}][value]" placeholder="Value" class="form-control" />
                    </div>
                    <div class="col-1">
                        <button type="button" class="btn btn-danger remove-fact  "><i class="fa-solid fa-minus"></i></button>
                    </div>`;
                container.appendChild(newFactRow);
                factIndex++;
            });

            document.getElementById('facts-container').addEventListener('click', function (event) {
                if (event.target.classList.contains('remove-fact')) {
                    event.target.closest('.fact-row').remove();
                }
            });




        });

        document.addEventListener('DOMContentLoaded', function () {
            let sectionIndex = 1;

            document.getElementById('add-project-section').addEventListener('click', function () {
                const container = document.getElementById('project-section-container');
                const newProjectSectionRow = document.createElement('div');
                newProjectSectionRow.classList.add('project-section-row');
                newProjectSectionRow.classList.add('mb-2');
                newProjectSectionRow.innerHTML = `
                    <div class="project-section-row  mb-2">

                        <div class="form-group mb-2">
                            <label for="name">Section Title</label>

                            <input type="text" name="sections[${sectionIndex}][title]" placeholder="Title"
                                   class="form-control  "/>
                        </div>
                        <div class="form-group mb-2">
                            <label for="description">Section Content</label>
                            <textarea name="sections[${sectionIndex}][content]" class="form-control"></textarea>
                        </div>

                        <div class="form-group mb-2">
                            <label for="images">Section images</label>
                            <input type="file" class="form-control" id="images" name="sections[${sectionIndex}][images][]" multiple>
                        </div>


                        <div class="col-12 text-end">
                            <button type="button" class="btn btn-danger remove-project-section  ">
                                Remove section
                            </button>

                        </div>

                    </div>
 `;
                container.appendChild(newProjectSectionRow);
                sectionIndex++;
            });

            document.getElementById('project-section-container').addEventListener('click', function (event) {
                if (event.target.classList.contains('remove-project-section')) {
                    event.target.closest('.project-section-row').remove();
                }
            });




        });
    </script>

@endsection()

